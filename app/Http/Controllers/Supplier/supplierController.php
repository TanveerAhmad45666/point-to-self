<?php

namespace App\Http\Controllers\Supplier;
use App\SupplierModels\supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class supplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $supplier = Supplier::all();

        return view('supplier.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('supplier.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request->validate([

        //     'name' => 'required',
    
        //     'phonenumber' => 'required',
        //     'city' => 'required',
    
        //     ]);
       
    
    
         $supplier =new Supplier;
         $supplier->name =$request->name;
         $supplier->phonenumber =$request->phonenumber;
         $supplier->city =$request->city;
         $supplier->address =$request->address;
         $supplier->save();
        return redirect()->route('supplier.index')

        ->with('success','Post created successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $suppliers)
    {
        return view('supplier.show',compact('suppliers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $suppliers)
    {
         return view('supplier.edit',compact('suppliers'));
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
        $supplier =supplier::findOrFail($id);
        $supplier->update($request->all());
        return redirect('/supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $supplier =supplier::whereId($id)->delete();
        return redirect('/supplier');
    }
}
