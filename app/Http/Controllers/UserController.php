<?php

namespace mecanica\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use mecanica\User;

class UserController extends Controller
{

    public function name(){
        return Response::create(User::query()->pluck('login')->toArray(),200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::create(User::all(), 200);
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
            $user = new User();
            $request['password'] = bcrypt($request->input('password'));
            $user->fill($request->toArray());
            $user->save();
        } catch (QueryException $e) {
            return Response::create(['error' => 'Could not save data'],500);
        }
        return Response::create($user->toArray(),200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Response::create(User::find($id),200);
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
            $user = User::find($id);
            $request['password'] = bcrypt($request->input('password'));
            $user->fill($request->toArray());
            $user->save();
        } catch (QueryException $e) {
            return Response::create(['error' => 'Could not update data'],500);
        }
        return Response::create($user->toArray(),200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Response::create(User::find($id)->delete(),200);
    }
}
