<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();

        return response()->json([
            'companies' => $companies
        ]);
    }

    public function validCNPJ($cnpj) {

        $response = Http::get('http://www.receitaws.com.br/v1/cnpj/' . $cnpj);

        return response()->json([
            'company' => $response->json(),
            'status' => ($response['status'] == "OK") ? 200 : 400
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->all();

        $company = new Company;
        
        $company->cnpj = $request->cnpj;
        $company->razaoSocial = $request->razaoSocial;
        $company->nomeFantasia = $request->nomeFantasia;
        $company->cep = $request->cep;
        $company->logradouro = $request->logradouro;
        $company->numero = intval($request->numero);
        $company->telefone = $request->telefone;
        $company->email = $request->email;
        $company->complemento = $request->email;
        $company->bairro = $request->bairro;
        $company->cidade = $request->cidade;
        $company->estado = $request->estado['selected'];
        $company->segmento = $request->segmento;
        $company->inscricaoMunicipal = intval($request->inscricaoMunicipal);
        $company->inscricaoEstadual = intval($request->inscricaoEstadual);

        $company->save();

        return response()->json([
            'response' => $company,
            'status' => 200
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
