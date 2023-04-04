<?php

namespace App\Http\Controllers\Admin;

use App\Models\Actor;
use App\Models\Motorcycle;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreActorRequest;
use App\Http\Requests\UpdateActorRequest;

class AdminActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Actor::get();
        return view('admin.model.index', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Motorcycles = Motorcycle::get();
        return view('admin.model.create', compact('Motorcycles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActorRequest $request)
    {
        Actor::create($request->all());
        return to_route('admin.model.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Actor $actor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actor $actor)
    {
        return view('admin.model.edit', compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActorRequest $request, Actor $actor)
    {
        $actor->fill($request->all())->save();
        return to_route('admin.model.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actor $actor)
    {
        //
    }
}
