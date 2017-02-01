<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Country;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$customers = Customer::all()->join('countries', 'customer.idcountry', '=', 'country.id')->select('users.*', 'contacts.phone', 'orders.price')->get();
        //$customers = Customer::all();
        /*->join('countries', 'customer.idcountry', '=', 'country.id')->get()*/
        /*$customers = Customer::all();
        $i = 1;
        foreach($customers as $item)
        {
            $countries[$i] = Country::find($item->idcountry)->select('name');
            $i++;
        }*/
        
        $customers = Customer::all();
        return view('customer.index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        $countries = Country::all();
        return view('customer.create', ['countries' => $countries], ['customers' => $customers]);
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
        'nickname'=> 'required',
        'firstname' => 'required',
        'lastname'=> 'required',
        'address1' => 'required',
        'city'=> 'required',
        'postalcode' => 'required',
        'idcountry' => 'required'
        ]);
        
        
        $customer = new Customer;
        $customer->nickname = $request->nickname;
        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->address1 = $request->address1;
        $customer->address2 = $request->address2;
        $customer->city = $request->city;
        $customer->region = $request->region;
        $customer->postalcode = $request->postalcode;
        $customer->idcountry = $request->idcountry;
        $customer->phone = $request->phone;
        $customer->mobile = $request->mobile;
        $customer->save();
        
        return redirect()->route('customer.index')->with('alert-success','Nieuwe klant opgeslaan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customers = Customer::all();
        $customer = Customer::find($id);
        $country = Country::find($customer->idcountry);
        
        return view('customer.show',array(  'customers'=>$customers,
                                            'customer'=>$customer,
                                            'country'=>$country));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customers = Customer::all();
        $customer = Customer::find($id);
        $countries = Country::all();
        return view('customer.edit', array('customer'=> $customer, 'customers'=>$customers, 'countries' => $countries));
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
        'nickname'=> 'required',
        'firstname' => 'required',
        'lastname'=> 'required',
        'address1' => 'required',
        'city'=> 'required',
        'postalcode' => 'required',
        'idcountry' => 'required'
        ]);
        
        
        $customer = Customer::findOrFail($id);
        $customer->nickname = $request->nickname;
        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->address1 = $request->address1;
        $customer->address2 = $request->address2;
        $customer->city = $request->city;
        $customer->region = $request->region;
        $customer->postalcode = $request->postalcode;
        $customer->idcountry = $request->idcountry;
        $customer->phone = $request->phone;
        $customer->mobile = $request->mobile;
        $customer->save();
        
        return redirect()->route('customer.index')->with('alert-success','Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customer.index')->with('alert-success','Deleted');
    }
}
