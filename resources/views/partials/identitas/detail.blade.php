@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class=""col=-lg-12">
            <h1 class="page-header">identitas</h1>
        </div>
    </div>

    <div class="row">
        <div clas="col-lg-12">
            <div class="panel-heading">
                Detail identitas # {{ $data->id}}
            </div>
            <div class="panel-body">
                <form role="form">
                    @if (count($data) >0)
                        <div class="col-lg-6">
                            <table class="table">
                                <tr>
                                    <td><label>name</label></td>
                                    <td><label>:</label></td>
                                    <td><label>{{ $data->nama }}</label></td>
                                </tr>
                                <tr>
                                    <td><label>alamat</label></td>
                                    <td><label>:</label></td>
                                    <td><label>{{ $data->alamat }}</label></td>
                                </tr>
                                <tr>
                                    <td><label>jenis_kelamin</label></td>
                                    <td><label>:</label></td>
                                    <td><label>{{ $data->alamat }}</label></td>
                                </tr>
                                <tr>
                                    <td><label>tanggal_masuk</label></td>
                                    <td><label>:</label></td>
                                    <td><label>{{ $data->tanggal_masuk}}</label></td>
                                </tr>
                                <tr>
                                    <td><label>user_id</label></td>
                                    <td><label>:</label></td>
                                    <td><label>{{ $data->user_id}}</label></td>
                                </tr>
                                <tr>
                                    <td clospan="2"></td>
                                    <td>
                                        <button type="button" class="btn btn-outline btn-primary"
                                                onclick=""location.href="/identitas';">Kembali
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

