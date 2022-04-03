<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(){
        $countries = Country::all();
        return view('admin.country.index', [
            'countries' => $countries
        ]);
    }

    public function create(){
        return view('admin.country.create');
    }

    public function store(Request $request){
        Country::query()->create($request->all());
    }

    public function edit(Request $request, $id){
        $country = Country::findOrFail($id);
        return view('admin.country.edit', compact('country'));
    }

    public function update(Request $request, $id){
        $country = Country::findOrFail($id);
        $country->fill($request->all());
        $country->save();
    }

    public function delete($id){
        $country = Country::find($id);
        $country->delete();
    }
}
