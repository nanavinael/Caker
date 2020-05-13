<?php

namespace App\Http\Controllers;
use App\Sektor;

use Illuminate\Http\Request;

class SektorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $sektor = Sektor::when($request->search, function($query) use($request){
            $query->where('nama_sektor', 'LIKE', '%'.$request->search.'%');})
            ->orderBy('id_sektor', 'asc')->paginate(5);

        return view('sektor.index', compact('sektor'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sektor.create');
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
            'nama_sektor'    =>  'required'
        ]);

        $form_data = array(
            'nama_sektor'       =>   $request->nama_sektor,
        );

        Sektor::create($form_data);

        return redirect('sektor')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sektor = Sektor::findOrFail($id);
        return view('sektor.edit', compact('sektor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_sektor)
    {
        $request->validate([
                 'nama_sektor'     =>  'required'
            ]);

       $sektor = Sektor::find($id_sektor);
       $sektor->nama_sektor = $request->input('nama_sektor');
       $sektor->save();
       return redirect('sektor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_sektor)
    {
        $sektor = Sektor::findOrFail($id_sektor);
        $sektor->delete();

        return redirect('sektor')->with('success', 'Data is successfully deleted');
    }
}
