<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Company $company)
    {

        //$services = Service::where('company_id', $company->id)->get();
        $services = $company->services;

        return view('template.services.index', ['services' => $services, 'company' => $company]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Company $company)
    {
        //

        return view('template.services.create', ['company' => $company]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Company $company)
    {
        //$service = new Service ; 
        $service = [

            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'image' => $request->image,
            'min_budget' => $request->min_budget,

        ];

        if ($request->hasFile('image')) {
            $name = $request->image->getClientOriginalName();
            $service['image'] = $request->file('image')->move('images', $name);
        }

        $service['user_id'] = auth()->id();

        // $service->save();
        $company->services()->create($service);

        return to_route('companies.services.index', ['company' => $company]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
        return view('services.show', ['x' => $service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
        return view('services.edit', ['service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {

        $request->validate([
            'title' => 'required', 'unique:servies', 'max:255',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'min_budget' => 'required',
            //'company_id' => ['required'],

        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $name = $request->image->getClientOriginalName();
            $data['image'] = $request->file('image')->move('images', $name);
        }

        $service->update($data);
        return to_route('companies.services.index', ['company' => $service->company]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {

        // $service = Service::find();
        $service->delete();
        return to_route('companies.services.index', ['company' => $service->company]);
    }
}
