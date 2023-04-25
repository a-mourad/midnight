<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function services(Request $request)
    {

        $query = Service::query();

        if ($request->title  !== null) {

            $query->where('title', 'like', $request->get('title'));
        }

        if ($request->min_budget  !== null) {

            $query->where('min_budget', '<=', $request->get('min_budget'));
        }

        if ($request->category_id  !== null) {

            $query->where('category_id', $request->get('category_id'));
        }
        $j = $query->get();





        //services
        return view('search', ['services' => $j]);
    }
}
