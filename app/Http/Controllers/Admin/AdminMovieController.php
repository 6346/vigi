<?php

namespace App\Http\Controllers\Admin;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Motorcycle;
use App\Models\Country;
use App\Models\Language;
use App\Models\MotorcycleImage;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMotorcycleRequest;
use App\Http\Requests\UpdateMotorcycleRequest;

class AdminMotorcycleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Motorcycles = Motorcycle::get();
        return view('admin.Motorcycles.index', compact('Motorcycles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::get();
        $languages = Language::get();
        $countries = Country::get();
        $model = Actor::get();
        return view('admin.Motorcycles.create',  compact('genres','languages','countries','model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMotorcycleRequest $request)
    {
        Motorcycle::customCreate($request);
        return to_route('admin.Motorcycles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Motorcycle $Motorcycle)
    {
         //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Motorcycle $Motorcycle)
    {
        $genres = Genre::get();
        $languages = Language::get();
        $countries = Country::get();
        $model = Actor::get();

        return view('admin.Motorcycles.edit', compact('Motorcycle','genres','languages','countries','model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMotorcycleRequest $request, Motorcycle $Motorcycle)
    {
        $Motorcycle->customUpdate($request);
        return to_route('admin.Motorcycles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Motorcycle $Motorcycle)
    {
        $Motorcycle->delete();
        return response()->json(['success'=>true]);
    }
}
