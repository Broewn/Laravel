<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Customer;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        
        return view('country.index', ['countries' => $countries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('country.create', ['countries' => $countries]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
        'code'=> 'required',
        'name' => 'required',
        'latitude'=> 'required',
        'longitude' => 'required',
        'shippingcostmultiplier'=> 'required'
        ]);
        
        
        
        $country = new Country;
        $country->code = $request->code;
        $country->name = $request->name;
        $country->latitude = $request->latitude;
        $country->longitude = $request->longitude;
        $country->shippingcostmultiplier = $request->shippingcostmultiplier;
        $country->save();
        
        return redirect()->route('country.index')->with('alert-success','Nieuw land opgeslaan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country = Country::find($id);
        $countries = Country::all();
        
        return view('country.show',['country' => $country, 'countries' => $countries]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries = Country::all();
        $country = Country::find($id);
        return view('country.edit', array('country'=> $country, 'countries'=>$countries));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
        'code'=> 'required',
        'name' => 'required',
        'latitude'=> 'required',
        'longitude' => 'required',
        'shippingcostmultiplier'=> 'required'
        ]);

        $country = Country::findOrFail($id);
        $country->code = $request->code;
        $country->name = $request->name;
        $country->latitude = $request->latitude;
        $country->longitude = $request->longitude;
        $country->shippingcostmultiplier = $request->shippingcostmultiplier;
        $country->save();

        return redirect()->route('country.index')->with('alert-success','Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
    public function destroy($id)
    {
        // delete data
        
        $customers = Customer::where('idcountry', '=', $id)->first();
        
        
        if ($customers){
            return redirect()->route('country.index')->with('alert-danger', 'Land is gelinkt aan een klant');
        }
        else{
            $country = Country::findOrFail($id);
            $country->delete();
            return redirect()->route('country.index')->with('alert-success','Deleted');
        }
        
    }
}
