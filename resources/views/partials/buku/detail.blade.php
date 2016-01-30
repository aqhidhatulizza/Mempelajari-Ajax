@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

<div class="row">
    <div class="col=-lg-12">
        <h1 class="page-header">buku</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel-heading">
            Detail buku # {{ $data->id}}
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
                            <td><label>nama</label></td>
                            <td><label>:</label></td>
                            <td><label>{{ $data->nama_buku}}</label></td>
                        </tr>
                        <tr>
                            <td><label>jenis_buku</label></td>
                            <td><label>:</label></td>
                            <td><label>{{ $data->jenis_buku }}</label></td>
                        </tr>
                        <tr>
                            <td><label>harga_buku</label></td>
                            <td><label>:</label></td>
                            <td><label>{{ $data->harga_buku}}</label></td>
                        </tr>
                        <tr>
                            <td clospan="2"></td>
                            <td>
                                <button type="button" class="btn btn-outline btn-primary"
                                        onclick=""location.href="/buku';">Kembali
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

