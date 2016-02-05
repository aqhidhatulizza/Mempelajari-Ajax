@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="" col=-lg-12">
            <h1 class="page-header">peminjaman</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel-heading">
                Tambah peminjaman
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="/peminjaman" method="post">
                            <tr>
                                <td><label>id</label></td>
                                <td><label>:</label></td>
                                <td><label>{{ $data->id }}</label></td>
                            </tr>
                            <tr>
                                <td><label>id_buku</label></td>
                                <td><label>:</label></td>
                                <td><label>{{ $data->id }}</label></td>
                            </tr>
                            <tr>
                                <td><label>id_identitas</label></td>
                                <td><label>:</label></td>
                                <td><label>{{ $data->id }}</label></td>
                            </tr>
                            <tr>
                                <td><label>lama_hari</label></td>
                                <td><label>:</label></td>
                                <td><label>{{ $data->id }}</label></td>
                            </tr>
                            <div class="form-group">
                                <label>tanggal_pinjam</label>
                                <label>:</label>
                                <input type="text" class="form-control" name="tanggal_pinjam">
                            </div>
                            <div class="form-group">
                                <label>tanggal_kembali</label>
                                <label>:</label>
                                <input type="text" class="form-control" name="tanggal_kembali">
                            </div>


                            <input class="btn btn-outline btn-info" type="submit" value="Simpan">
                            {{--onclick="location.href='/peminjaman/{{$data->id}}}';">Simpan--}}
                            <button type="button" class="btn btn-outline btn-primary"
                                    onclick="location.href='/peminjaman';">Kembali
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

