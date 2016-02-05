@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="col=-lg-12">
            <h1 class="page-header">peminjaman</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel-heading">
                Detail peminjaman # {{ $data->id}}
            </div>
            <div class="panel-body">
                <form role="form">
                    @if (count($data) >0)
                        <div class="col-lg-6">
                            <table class="table">
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
                                <tr>
                                    <td><label>tanggal_pinjam</label></td>
                                    <td><label>:</label></td>
                                    <td><label>{{ $data->tanggal_pinjam}}</label></td>
                                </tr>
                                <tr>
                                    <td><label>tanggal_kembali</label></td>
                                    <td><label>:</label></td>
                                    <td><label>{{ $data->tanggal_kembali }}</label></td>
                                </tr>
                                <tr>
                                    <td clospan="1"></td>
                                    <td>
                                        <button type="button" class="btn btn-outline btn-primary"
                                                onclick=""location.href="/peminjaman';">Kembali
                                        </button>

                                    </td>
                                </tr>
                            </table>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection

