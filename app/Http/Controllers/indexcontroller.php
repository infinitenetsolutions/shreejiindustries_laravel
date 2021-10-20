<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexcontroller extends Controller
{
    // showing all categories of index page only
    function showCategories()
    {
        $all_categories = DB::table('categories')->get();
        return view('index', ['all_categories' => $all_categories]);
    }
//  showing all categories of all the page expect index
    function showCategoriesforHeader()
    {
        $all_categories = DB::table('categories')->get();
        return view('include.header', ['all_categories' => $all_categories]);
    }
}
// next thing is not added