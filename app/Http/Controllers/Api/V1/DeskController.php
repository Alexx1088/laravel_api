<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeskStoreRequest;
use App\Http\Resources\DeskResource;
use App\Models\Desk;

class DeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
              return DeskResource::collection(Desk::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return DeskResource
     */
    public function store(DeskStoreRequest $request)
    {
        $created_desk = Desk::create($request->validated());

        return new DeskResource($created_desk);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return DeskResource
     */
    public function show($id)
    {
        return new DeskResource(Desk::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param DeskStoreRequest $request
     * @param Desk $desk
     * @return Desk
     */
    public function update(DeskStoreRequest $request, Desk $desk)
    {

            $desk->update($request->validated());
        return new DeskResource($desk);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Desk $desk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desk $desk)
    {
        $desk->delete();
        return response(null, \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}