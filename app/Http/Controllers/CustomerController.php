<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class CustomerController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        
        $customer = Customer::orderBy('id_customer', 'desc')->paginate(10);
        //render view with posts
        return view('customer.index', compact('customer'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //Validasi Formulir
        $this->validate($request, [
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_address' => 'required',
        ]);

        
        Customer::create([
            'customer_name' => $request->customer_name,
            'customer_phone' => $request->customer_phone,
            'customer_address' => $request->customer_address,
        ]);

        try {
            return redirect()->route('customer.index');
        } catch (Exception $e) {
            return redirect()->route('customer.index');
        }
    }

    /**
     * edit
     *
     * @param int
     * @return void
     */
    public function edit($id_customer)
    {
        $customer = Customer::find($id_customer);
        return view('customer.edit', compact('customer'));
    }

    /**
     * update
     *
     * @param mixed $request
     * @param int
     * @return void
     */
    public function update(Request $request, $id_customer)
    {
        $customer = Customer::find($id_customer);

        $this->validate($request, [
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_address' => 'required',
        ]);


        $customer->update([
            'customer_name' => $request->customer_name,
            'customer_phone' => $request->customer_phone,
            'customer_address' => $request->customer_address,
        ]);

        return redirect()->route('customer.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    /**
     * destroy
     *
     * @param int 
     * @return void
     */
    public function destroy($id_customer)
    {
        $customer = Customer::find($id_customer);
        $customer->delete();
        return redirect()->route('customer.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
