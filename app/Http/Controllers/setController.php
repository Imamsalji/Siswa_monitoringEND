<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\set;

class setController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $sets = set::latest()->paginate(5);

  

        return view('sets.index',compact('sets'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function cari(Request $request){
        $name = $request->name;
        $sets = set::where('nis','like',"%".$name."%")->paginate(5);
        return view('sets.index',compact('sets'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }  
   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        return view('sets.create');

    }

  

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $request->validate([

            'nis' => 'required',

            'hari' => 'required',

            'waktu' => 'required',

            'kegiatan' => 'required',

            'set_pelajaran' => 'required',



        ]);

  

        set::create($request->all());

   

        return redirect()->route('sets.index')

                        ->with('success','set created successfully.');
        

    }

   

    /**

     * Display the specified resource.

     *

     * @param  \App\set  $set

     * @return \Illuminate\Http\Response

     */

    public function show(set $set)

    {

        return view('sets.show',compact('set'));

    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\set  $set

     * @return \Illuminate\Http\Response

     */

    public function edit(set $set)

    {

        return view('sets.edit',compact('set'));
        
            

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\set  $set

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, set $set)

    {

        $request->validate([

            'nis' => 'required',

            'hari' => 'required',

            'waktu' => 'required',

            'kegiatan' => 'required',

            'set_pelajaran' => 'required',



        ]);

  

        $set->update($request->all());

  

        return redirect()->route('sets.index')

                        ->with('success','set updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\set  $set

     * @return \Illuminate\Http\Response

     */

    public function destroy(set $set)

    {

        $set->delete();

  

        return redirect()->route('sets.index')

                        ->with('success','set deleted successfully');

    }

}
