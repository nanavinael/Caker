<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perusahaan;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index(Request $request)
    {
        
        $perusahaan = Perusahaan::when($request->search, function($query) use($request){
            $query->where('nama_perusahaan', 'LIKE', '%'.$request->search.'%')
            ->orWhere('nama_sektor', 'LIKE', '%'.$request->search.'%')
            ->orWhere('pekerjaan', 'LIKE', '%'.$request->search.'%')
            ->orWhere('gaji', 'LIKE', '%'.$request->search.'%')
            ->orWhere('lokasi', 'LIKE', '%'.$request->search.'%'); })
        ->join('sektor', 'id_sektor', '=', 'perusahaan.sektor_id')->orderBy('id', 'asc')->paginate(5);

        return view('perusahaan.index', compact('perusahaan'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $sektor = \App\Sektor::all();
        return view('perusahaan.create')->with('sektor', $sektor);
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
        'sektor_id'     =>  'required',
            'nama_perusahaan'    =>  'required',
            'pekerjaan'    =>  'required',
            'lokasi'     =>  'required',
            'gaji'     =>  'required',
            'deskripsi'    =>  'required',
            'syarat'     =>  'required',
            'no_hp'     =>  'required',
            'website'    =>  'required',
        ]);

        $form_data = array(
            'sektor_id'        =>   $request->sektor_id,
            'nama_perusahaan'       =>   $request->nama_perusahaan,
            'pekerjaan'       =>   $request->pekerjaan,
            'lokasi'        =>   $request->lokasi,
            'gaji'        =>   $request->gaji,
            'deskripsi'        =>   $request->deskripsi,
            'syarat'        =>   $request->syarat,
            'no_hp'        =>   $request->no_hp,
            'website'        =>   $request->website,
        );

        Perusahaan::create($form_data);

        return redirect('perusahaan')->with('success', 'Data Added successfully.');
    }

      function login(){
        return view('user.login');
    }
    function register(){
        return view('user.register');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
