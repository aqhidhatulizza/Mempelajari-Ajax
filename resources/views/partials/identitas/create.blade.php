@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="" col=-lg-12">
            <h1 class="page-header">identitas</h1>
        </div>
    </div>

    <div class="row">
        <div clas="col-lg-12">
            <div class="panel-heading">
                Tambah identitas
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="/identitas" method="post">
                            <div class="form-group">
                                <label>nama</label>
                                <label>:</label>
                                <input type="text" class="form-control" name="nama">
                             </div>
                            <div class="form-group">
                                <label>alamat</label>
                                <label>:</label>
                                <input type="text" class="form-control" name="alamat">
                            </div>
                            <div class="form-group">
                                <label>jenis_kelamin</label>
                                <label>:</label>
                                <input type="text" class="form-control" name="jenis_kelamin">
                               </div>
                                <div class="form-group">
                                <label>tanggal_masuk</label>
                                <label>:</label>
                                <input type="text" class="form-control" name="tanggal_masuk">
                                    </div>
                                    <div class="form-group">
                                <label>user_id</label>
                                <label>:</label>
                                <input type="text" class="form-control" name="user_id">
                                </div>

                                <input class="btn btn-outline btn-info" type="submit" value="Simpan">
                            {{--onclick="location.href='/identitas/{{$data->id}}}';">Simpan--}}
                                <button type="button" class="btn btn-outline btn-primary"
                                        onclick="location.href='/identitas';">Kembali
                                </button>

                        </form>
                    </div>
                </div>
            </div>
    </div>
        </div>
    </div>
@endsection

