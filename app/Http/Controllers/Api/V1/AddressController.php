<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAddressRequest;
use App\Models\Address;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::paginate(5);

        return response()->json($addresses);
    }

    public function show(Address $address)
    {
        return response()->json($address);
    }

    public function store(StoreAddressRequest $request)
    {
        Address::create($request->validated());

        return response()->json('Address created');
    }

    public function update(StoreAddressRequest $request, Address $address)
    {
        $address->update($request->validated());

        return response()->json('Address updated');
    }

    public function destroy(Address $address)
    {
        $address->delete();

        return response()->json('Address deleted');
    }
}
