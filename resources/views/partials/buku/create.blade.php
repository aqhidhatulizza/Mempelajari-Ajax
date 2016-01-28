@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="" col=-lg-12">
            <h1 class="page-header">buku</h1>
        </div>
    </div>

    <div class="row">
        <div clas="col-lg-12">
            <div class="panel-heading">
                Tambah buku
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="/buku" method="post">
                            <div class="form-group">
                                <label>kode</label>
                                <label>:</label>
                                <input type="text" class="form-control" name="kode">
                            </div>
                            <div class="form-group">
                                <label>nama_buku</label>
                                <label>:</label>
                                <input type="text" class="form-control" name="nama_buku">
                            </div>
                            <div class="form-group">
                                <label>jenis_buku</label>
                                <label>:</label>
                                <input type="text" class="form-control" name="jenis_buku">
                            </div>
                            <div class="form-group">
                                <label>harga_buku</label>
                                <label>:</label>
                                <input type="text" class="form-control" name="harga_buku">
                            </div>

                            <input class="btn btn-outline btn-info" type="submit" value="Simpan">
                            {{--onclick="location.href='/buku/{{$data->id}}}';">Simpan--}}
                            <button type="button" class="btn btn-outline btn-primary"
                                    onclick="location.href='/buku';">Kembali
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

