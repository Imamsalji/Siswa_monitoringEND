<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\isi;
use App\set;

class isiController extends Controller
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

        $isis = isi::latest()->paginate(5);
        $sets = set::latest()->paginate(5);
  

        return view('isis.index',compact('isis','sets'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function search(Request $request){
        $name = $request->name;
        $isis = set::where('nis','like',"%".$name."%")->paginate(5);
        $sets = set::where('nis','like',"%".$name."%")->paginate(5);
        return view('isis.index',compact('isis','sets'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }  

    /** 
     * pindah a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pindah(Request $request){
        $nis = $request->nis;
        return view('isis.create',['nis' => $nis]);
    }  

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('isis.create',compact('isi','sets'));

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

            'bukti' => 'required',



        ]);

        isi::create($request->all());

   

        return redirect()->route('isis.index')

                        ->with('success','isi created successfully.');

    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function storen(Request $request)

    {

        $nis = $request->nis;
        $hari = $request->hari;
        $waktu = $request->waktu;
        $kegiatan = $request->kegiatan;
        return view('isis.create',['nis' => $nis,'hari' => $hari,'waktu' => $waktu,'kegiatan' => $kegiatan]);

    }
   

    /**

     * Display the specified resource.

     *

     * @param  \App\isi  $isi

     * @return \Illuminate\Http\Response

     */

    public function show(isi $isi)

    {

        return view('isis.show',compact('isi'));

    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\isi  $isi

     * @return \Illuminate\Http\Response

     */

    public function edit(isi $isi)

    {

        return view('isis.edit',compact('isi'));
            

    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\isi  $isi

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, isi $isi)

    {

        $request->validate([

            'nis' => 'required',

           'hari' => 'required',

            'waktu' => 'required',

            'kegiatan' => 'required',

            'bukti' => 'required',



        ]);

  

        $isi->update($request->all());

  

        return redirect()->route('isis.index')

                        ->with('success','isi updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\isi  $isi

     * @return \Illuminate\Http\Response

     */

    public function destroy(isi $isi)

    {

        $isi->delete();

  

        return redirect()->route('isis.index')

                        ->with('success','isi deleted successfully');

    }

}
