<?php

namespace App\Http\Controllers;

use App\Models\Bookable;
use Illuminate\Http\Request;

class BookablesController extends Controller
{
    public function index()
    {
        return Bookable::all();
    }

    public function show($id)
    {
        return Bookable::findOrFail($id);
    }
}
