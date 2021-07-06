<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AlternativeModel;
use App\Models\AlternativeValueModel;
use App\Models\CriteriaModel;
use App\Models\CriterionValueModel;
use Illuminate\Support\Facades\Validator;

class AlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['alternatives'] = AlternativeModel::all();
        return view('admin.alternative.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alternative.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check = AlternativeModel::where('kode', $request->input('kode'))->first();
        if (empty($check)) {

            $file                       = $request->file('gambar');
            $fileName3                  = uniqid() . '.' . $file->getClientOriginalExtension();
            $request->file('gambar')->move("img/alternative/", $fileName3);

            $insert = new AlternativeModel();
            $insert->kode = $request->kode;
            $insert->nama = $request->nama;
            $insert->latitude = $request->latitude;
            $insert->longitude = $request->longitude;
            $insert->gambar = $request->fileName3;
            $insert->keterangan = $request->keterangan;
            $insert->save();

            return redirect(url('admin/alternative'))->with('message', 'Sukses menambahkan data!');
        } else {
            return redirect(url('admin/alternative'))->with('error', 'Data sudah tersedia!');
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
        $data['alternative'] = AlternativeModel::find($id);
        return view('admin.alternative.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['alternative'] = AlternativeModel::find($id);
        return view('admin.alternative.edit', $data);
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

        set_time_limit(0);
        $validator = Validator::make($request->all(), [
            'image'    => 'max:5000'
        ]);

        if ($validator->fails()) {
            return redirect()->url('admin/alternative')->withInput()->withErrors($validator);
        } else {

            $update = AlternativeModel::find($id);
            $update->name = $request->name;
            $update->description = $request->description;
            if (isset($request->image)) {
                $update->image = $request->image;
            }
            $update->ket = $request->ket;
            $update->location = $request->location;
            $update->updated_by = auth()->user()->id;
            $update->updated_at = date("Y-m-d H:i:s");
            $update->update();
            return redirect(url('admin/alternative'))->with('message', 'Data berhasil diupdate!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findtodelete = AlternativeModel::find($id);
        $findtodelete->delete();

        return redirect(url('admin/alternative'))->with('message', 'Data berhasil dihapus!');
    }
}
