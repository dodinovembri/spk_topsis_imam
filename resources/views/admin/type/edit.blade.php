@extends('layouts.admin')

@section('content')

<div class="app-wrap">
    <!-- BEGIN .app-heading -->
    @include('admin.components.header')
    <!-- END: .app-heading -->
    <!-- BEGIN .app-container -->
    <div class="app-container">
        <!-- BEGIN .app-side -->
        @include('admin.components.sidebar')
        <!-- END: .app-side -->

        <!-- BEGIN .app-main -->
        <div class="app-main">
            <!-- BEGIN .main-content -->
            <div class="main-content">
                <div class="row gutters">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('admin/type') }}">Jenis Alternatif</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Jenis Alternatif</li>
                        </ol>
                    </nav>
                </div>
                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <!-- Row start -->
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <form action="{{ url('admin/type/update', $type->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-header">Buat Jenis Alternatif</div>
                                        <div class="card-body">
                                            <div class="form-group row gutters">
                                                <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Alternatif</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="kode_jenis" class="form-control" placeholder="Kode Jenis Alternatif" value="{{ $type->kode_jenis }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row gutters">
                                                <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Alternatif</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="nama_jenis" class="form-control" placeholder="Nama Jenis Alternatif" value="{{ $type->nama_jenis }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row gutters">
                                                <label for="inputEmail3" class="col-sm-3 col-form-label">Gambar</label>
                                                <div class="col-sm-9">
                                                    <input type="file" name="gambar" class="form-control" placeholder="Nama Jenis Alternatif" >
                                                </div>
                                            </div>
                                            <div class="form-group row gutters">
                                                <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan</label>
                                                <div class="col-sm-9">
                                                    <textarea type="text" rows="3" name="keterangan" class="form-control">{{ $type->keterangan }}</textarea>
                                                </div>
                                            </div><br>
                                            <div class="form-group row gutters">
                                                <label for="inputEmail3" class="col-sm-3 col-form-label"></label>
                                                <div class="col-sm-9">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    <a href="{{ url('admin/type') }}"><button type="button" class="btn btn-danger">Batal</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->
                    </div>
                </div>
                <!-- Row end -->
            </div>
            <!-- END: .main-content -->
        </div>
        <!-- END: .app-main -->
    </div>
    <!-- END: .app-container -->
    <!-- BEGIN .main-footer -->
    @include('admin.components.footer')
    <!-- END: .main-footer -->
</div>
@endsection