<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\data;

class dataController extends Controller
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

  

        return view('datas.index',compact('datas'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function neang(Request $request){
        $name = $request->name;
        $datas = data::where('nis','like',"%".$name."%")->paginate(5);
        return view('datas.index',compact('datas'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }  


   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        return view('datas.create');

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

            'Nama' => 'required',

            'ttl' => 'required',

            'jk' => 'required',

            'agama' => 'required',

            'anakke' => 'required',

            'sodara' => 'required',

            'alamat' => 'required',

            'telpon' => 'required',

            'ayah' => 'required',

            'ibu' => 'required',

        ]);

  

        data::create($request->all());

   

        return redirect()->route('datas.index')

                        ->with('success','data created successfully.');

    }

   

    /**

     * Display the specified resource.

     *

     * @param  \App\data  $data

     * @return \Illuminate\Http\Response

     */

    public function show(data $data)

    {

        return view('datas.show',compact('data'));

    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\data  $data

     * @return \Illuminate\Http\Response

     */

    public function edit(data $data)

    {

        return view('datas.edit',compact('data'));
            

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

        $request->validate([

            'Nama' => 'required',

            'ttl' => 'required',

            'jk' => 'required',

            'agama' => 'required',

            'anakke' => 'required',

            'sodara' => 'required',

            'alamat' => 'required',

            'telpon' => 'required',

            'ayah' => 'required',

            'ibu' => 'required',


        ]);

  

        $data->update($request->all());

  

        return redirect()->route('datas.index')

                        ->with('success','data updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\data  $data

     * @return \Illuminate\Http\Response

     */

    public function destroy(data $data)

    {

        $data->delete();

  

        return redirect()->route('datas.index')

                        ->with('success','data deleted successfully');

    }

}
