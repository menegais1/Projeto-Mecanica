<?php

namespace mecanica\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use mecanica\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $limit
     * @return Response
     */
    public function index($limit)
    {
        return response(Client::query()->orderBy("id")->limit($limit)->get()->toArray(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $client = new Client();
            $client->fill($request->toArray());
            $client->save();
        } catch (QueryException $e) {
            return response([], 200);
        }
        return response($client->toArray(), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Client::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $client = Client::find($id);
            $client->fill($request->toArray());
            $client->save();
        } catch (QueryException $e) {
            return response([], 200);
        }
        return response($client->toArray(), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response((String)(Client::find($id)->delete()));
    }
}
