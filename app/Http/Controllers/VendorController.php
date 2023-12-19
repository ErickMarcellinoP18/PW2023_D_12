<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Models\Vendor;

class VendorController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get vendor
        $vendor = Vendor::orderBy('id_vendor', 'desc')->paginate(10);
        //render view with posts
        return view('vendor.index', compact('vendor'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('vendor.create');
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
            'vendor_name' => 'required',
            'vendor_type' => 'required',
            'vendor_admin' => 'required',
            'vendor_phone' => 'required',
        ]);

        // Create the vendor record in the database
        Vendor::create([
            'vendor_name' => $request->vendor_name,
            'vendor_type' => $request->vendor_type,
            'vendor_admin' => $request->vendor_admin,
            'vendor_phone' => $request->vendor_phone,
        ]);

        return redirect()->route('employee.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param int $id_vendor
     * @return void
     */
    public function edit($id_vendor)
    {
        $vendor = Vendor::find($id_vendor);
        return view('vendor.edit', compact('vendor'));
    }

    /**
     * update
     *
     * @param mixed $request
     * @param int $id_vendor
     * @return void
     */
    public function update(Request $request, $id_vendor)
    {
        // Validate Form Data
        $this->validate($request, [
            'vendor_name' => 'required',
            'vendor_type' => 'required',
            'vendor_admin' => 'required',
            'vendor_phone' => 'required',
        ]);

        $vendor = Vendor::find($id_vendor);


        // Update the vendor record in the database
        $vendor->update([
            'vendor_name' => $request->vendor_name,
            'vendor_type' => $request->vendor_type,
            'vendor_admin' => $request->vendor_admin,
            'vendor_phone' => $request->vendor_phone,
        ]);

        return redirect()->route('vendor.index')->with(['success' => 'Data Berhasil Diubah!']);
    }


    /**
     * destroy
     *
     * @param int $id_vendor
     * @return void
     */
    public function destroy($id_vendor)
    {
        $vendor = Vendor::find($id_vendor);
        $vendor->delete();
        return redirect()->route('vendor.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
