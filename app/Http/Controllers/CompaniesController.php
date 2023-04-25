<?php


namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Company;
use App\Models\Service;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{


    public function index()
    {

        $user_id = auth()->id();
        $countries = \App\Models\Country::all();
        $cities = \App\Models\City::all();
        $companies = Company::where('user_id', $user_id)->get();
        return view('template.companies.index', compact('companies', 'countries', 'cities'));
    }

    public function create()
    {

        $countries = \App\Models\Country::all();
        $cities = \App\Models\City::all();
        return view('template.companies.create', [
            'countries' => $countries,
            'cities' => $cities
        ]);
    }

    public function store(Request $request)
    {


        $request->validate([
            'name'  => 'required|max:220',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|unique:companies',
            'team_size' => 'required',
            'description' => 'required',
            'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'creation_date' => 'required',
            'city_id' => 'required',
            'country_id' => 'required',
            'image_backdrop' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);

        $company = $request->all();

        //if($request->hasFile('logo')&&$request->hash_file('image_backdrop'))

        if ($request->hasFile('logo')) {
            $name = $request->logo->getClientOriginalName();
            $company['logo'] = $request->file('logo')->move('images', $name);
        }

        if ($request->hasFile('image_backdrop')) {
            $name = $request->image_backdrop->getClientOriginalName();
            $company['image_backdrop'] = $request->file('image_backdrop')->move('images', $name);
        }
        $company['user_id'] = auth()->id();

        $company = Company::create($company);
        // return to_route('companies.services.create', ['company' => $company]);

        return response()->json([
            'success' => true,
            "message" => "company created successfully",
            'company' => $company,

        ]);
    }


    public function show(Company $company)
    {

        return view('template.companies.show', ['company' => $company]);
    }

    public function edit(Company $company)
    {

        return view('companies.edit', ['company' => $company]);
    }

    public function update(Request $request, Company $company)
    {


        $request->validate([
            'name'  => 'required|max:220',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|unique:companies',
            'team_size' => 'required',
            'description' => 'required',
            'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'creation_date' => 'required',
            'city_id' => 'required',
            'country_id' => 'required',
            'image_backdrop' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);



        $data = $request->all();

        if ($request->hasFile('logo')) {

            $data['logo'] = $request->file('logo')->move('logo', 'public');
        }
        if ($request->hasFile('image_backdrop')) {

            $data['image_backdrop'] = $request->file('image_backdrop')->move('image_backdrop', 'public');
        }

        $company->update($data);
        return to_route('companies.index');
    }

    public function destroy(Company $company)
    {

        $company->delete();
        return to_route('companies.index');
    }
}
