<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLendedRequest;
use App\Models\Lended;
use Illuminate\Http\Request;

class LendedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lended = Lended::all();
        return response()->json([
            'status' => true,
            'posts' => $lended
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLendedRequest $request)
    {
        $lended = Lended::create($request->all());
        return response()->json([
            'status' => true,
            'message' => "Lending was Successfully",
            'post' => $lended
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lended  $lended
     * @return \Illuminate\Http\Response
     */
    public function show(Lended $lended, $id)
    {
        return Lended::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lended  $lended
     * @return \Illuminate\Http\Response
     */
    public function edit(Lended $lended)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lended  $lended
     * @return \Illuminate\Http\Response
     */
    public function update(StoreLendedRequest $request, Lended $lended)
    {
        $lended->update($request->all());
        return response()->json([
            'status' => true,
            'message' => "lending details updated Successfully!",
            'post' => $lended
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lended  $lended
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lended $lended)
    {
        $lended->delete();
        return response()->json([
            'status' => true,
            'message' => "Lend declined Successfully!"
        ], 200);
    }
}
