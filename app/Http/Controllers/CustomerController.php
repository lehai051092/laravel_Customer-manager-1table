<?php


namespace App\Http\Controllers;


use App\Customer;
use Illuminate\Http\Request;

class customerController
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer.list', compact('customers'));
    }

    public function formAdd()
    {
        return view('customer.formAdd');
    }

    public function create(Request $request)
    {
        $customers = Customer::all();
        $customers = new Customer();
        $customers->name = $request->name;
        $customers->age = $request->age;
        $customers->email = $request->email;
        $customers->save();

        return redirect()->route('users.index');
    }

    public function update($id) {
        $customer = Customer::findOrFail($id);
        return view('customer.formUpdate', compact('customer'));
    }

    public function edit(Request $request, $id) {
        $customers = Customer::findOrFail($id);
        $customers->name = $request->name;
        $customers->age = $request->age;
        $customers->email = $request->email;
        $customers->save();

        return redirect()->route('users.index');
    }

    public function deleteCustomer($id) {
        $customers = Customer::findOrFail($id);
        $customers->delete();

        return redirect()->route('users.index');
    }
}
