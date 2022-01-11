<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
