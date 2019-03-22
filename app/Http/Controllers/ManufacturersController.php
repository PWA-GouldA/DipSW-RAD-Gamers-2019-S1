<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;

use Khsing\World\World;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = World::Countries();

        return view('manufacturers.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manufacturer $Manufacturer
     * @return \Illuminate\Http\Response
     */
    public function edit(Manufacturer $Manufacturer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Manufacturer $Manufacturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manufacturer $Manufacturer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manufacturer $Manufacturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manufacturer $Manufacturer)
    {
        //
    }

}
