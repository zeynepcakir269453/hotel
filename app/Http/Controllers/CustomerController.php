<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer= Customer::orderBy('room_no','DESC')->get();
        return view('customer_search',compact('customer'));
    }

    public function search(Request $request)
    {
        $searchValue = $request->input('searchValue');
        $customers = customer::query();

            if ($request->input('name') !== null) {
                $customers->where('name', 'like', '%' . $request->input('name') . '%');
            }

            if ($request->input('lastname') !== null) {
                $customers->where('lastname', 'like', '%' . $request->input('lastname') . '%');
            }

            if ($request->input('entry_date') !== null) {
                $customers->where('entry_date', 'like', '%' .$request->input('entry_date') . '%');
            }

            if ($request->input('roomno') !== null) {
                $customers->where('room_no', 'like', '%' . $request->input('roomno'). '%');
            }

        $customer = $customers->get();
        return view('search', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function customerregister(Request $request)
    {

        $register = Customer::create([
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'entry_date' => $request->input('entry_date'),
            'room_no' => $request->input('room_no'),
            'description' => $request->input('description')
        ]);

        return redirect('list')->with('success','Müşteri Başarıyla Eklendi');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
