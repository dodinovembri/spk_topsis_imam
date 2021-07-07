<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeModel;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['types'] = TypeModel::all();
        return view('admin.type.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check = TypeModel::where('kode_jenis', $request->input('kode_jenis'))->first();
        if (empty($check)) {

            $insert = new TypeModel();
            $insert->kode_jenis = $request->kode_jenis;
            $insert->nama_jenis = $request->nama_jenis;
            $insert->keterangan = $request->keterangan;
            $insert->save();

            return redirect(url('admin/type'))->with('message', 'Sukses menambahkan data!');
        } else {
            return redirect(url('admin/type'))->with('error', 'Data sudah tersedia!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['type'] = TypeModel::find($id);
        return view('admin.type.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['type'] = TypeModel::find($id);
        return view('admin.type.edit', $data);
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
        $update = TypeModel::find($id);
        $update->nama_jenis = $request->nama_jenis;
        $update->keterangan = $request->keterangan;
        $update->update();
        
        return redirect(url('admin/type'))->with('message', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findtodelete = TypeModel::find($id);
        $findtodelete->delete();

        return redirect(url('admin/type'))->with('message', 'Data berhasil dihapus!');
    }
}
