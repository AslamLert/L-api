<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getCustomer()
    {
        return response()->json(Customer::all(), 200);
    }

    public function getCustomerById($id){
        $customer = Customer::find($id);
        if(is_null($customer)){
            return response()->json(['message' => 'Customer Not Found'], 404);
        }
        return response()->json($customer::find($id), 200);
    }

    public function addCustomer(Request $request){
        $customer = Customer::create($request->all());
        return response($customer, 201);
    }

    public function updateCustomer(Request $request, $id){
        $customer = Customer::find($id);
        if(is_null($customer)){
            return response()->json(['message' => 'Customer Not Found'], 404);
        }
        $customer->update($request->all());
        return response($customer, 200);
    }

    public function deleteCustomer(Request $request, $id){
        $customer = Customer::find($id);
        if(is_null($customer)){
            return response()->json(['message' => 'Customer Not Found'], 404);
        }
        $customer->delete();
        return response()->json(null, 204);
    }


}
