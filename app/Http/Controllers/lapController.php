<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\data;
use App\isi;
use App\set;

class lapController extends Controller
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

        $datas = data::latest()->paginate(5);
        $isis = isi::latest()->paginate(5);
        $sets = set::latest()->paginate(5);
  

        return view('laps.index',compact('datas','isis','sets'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }


   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

    }

  

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {


    }

   

    /**

     * Display the specified resource.

     *

     * @param  \App\data  $data

     * @return \Illuminate\Http\Response

     */

    public function show(data $data)

    {


    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\data  $data

     * @return \Illuminate\Http\Response

     */

    public function edit(data $data)

    {
            

    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\data  $data

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, data $data)

    {

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\data  $data

     * @return \Illuminate\Http\Response

     */

    public function destroy(data $data)

    {


    }

}
