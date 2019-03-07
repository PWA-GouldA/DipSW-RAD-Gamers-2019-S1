<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;

class ManufacturersController extends Controller
{
    public function index()
    {
        $manufacturers = Manufacturer::all();
        // dd($manufacturers);
        return view(
            'manufacturers.index', /* the view to see */
            compact('manufacturers') /* send the $manufacturers */
        );
    }

    // http://DOMAIN/manufacturers/2
    public function show($id)
    {
        $manufacturer = Manufacturer::findOrFail($id);
        return view('manufacturers.show', compact('manufacturer'));
    }




}
