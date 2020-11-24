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
        $companies = [
            (object)[
                "id" => 1,
                "name" => "UNEMAT"
            ],
            (object)[
                "id" => 2,
                "name" => "EDUXE"
            ],
            (object)[
                "id" => 3,
                "name" => "DEVFORBUSINESS"
            ],
        ];

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
        $request = $request->all();

        return response()->json([
            'request' => $request,
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
