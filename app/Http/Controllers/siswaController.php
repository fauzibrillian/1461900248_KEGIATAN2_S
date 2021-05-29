<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class siswaController extends Controller
{
    public function index()
    {
        $data = DB::table('siswa')
            ->join('kelas','siswa.id_kelas','=','kelas.id_kelas')
            ->select('*')->where('id_kelas','=','03')
            ->get();
        // print_r($data);
        // exit;
        return view('1461900248.index', ['data' => $data]);
    }

    public function search(Request $request)
    {
        $nama = $request->nama;

        $data = DB::table('siswa')
            ->where('siswa.nama','like',"%".$nama."%")
            ->join('kelas','siswa.id_kelas','=','kelas.id_kelas')
            ->select('*')->where('id_kelas','=','03')
            ->get();
        // print_r($data);
        // exit;
        return view('1461900248.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
