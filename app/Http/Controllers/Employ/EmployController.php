<?php

namespace App\Http\Controllers\Employ;

use App\Employ;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $employs = Form::all()->toArray();
        return view('employs.index', compact('employs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employs.create');
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
        
          'name' => 'required',
          'phone_number'=> 'required|numeric',
        ]); 
        
        $employ= new Employ();
        $employ->name=$request->get('name');
        $employ->father_name=$request->get('father_name');
        $employ->phone_number=$request->get('phone_number');
        $employ->address=$request->get('address');
        $employ->employ_status =$request->get('employ_status'); 
        $employ->save();
        return redirect('employs')->with('success', 'Employ has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employ  $employ
     * @return \Illuminate\Http\Response
     */
    public function show(Employ $employ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employ  $employ
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employ = Employ::find($id);
        return view('employs.edit',compact('employ','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employ  $employ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[ 
          'name' => 'required',
          'phone_number'=> 'required|numeric',
        ]); 
        $employ = Employ::find($id);
        $employ->name=$request->get('name');
        $employ->father_name=$request->get('father_name');
        $employ->phone_number=$request->get('phone_number');
         $employ->address=$request->get('address');
        $employ->employ_status =$request->get('employ_status'); 
        $employ->save();
        return redirect('employs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employ  $employ
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employ = employ::find($id);
        $employ->delete();
        return redirect('employs')->with('success','employ has been  deleted');
    }
}
