<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\addROom;


class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query'); // Assuming the search input name is 'query'

        // Perform the search using your model and desired search logic
        $results = addROom::where('room', 'like', '%' . $query . '%')->get();
        // dd($results);die();

        return view('admin.results', compact('results'));
    }
}
