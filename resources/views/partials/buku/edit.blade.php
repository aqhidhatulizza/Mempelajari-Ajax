@extends('layouts.master')
@section('title', 'Page Title')
@section('content')
    <div class="row">
        <div class=" col=-lg-12">
            <h1 class="page-header">buku</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit buku # {{$data->id}}
                </div>
                <div class="panel-body">
                    {{--<form role="form">--}}
                    @if(count($data)>0)
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="" method="post">
                                    {{method_field('PUT')}}
                                    <div class="form-group">
                                        <label>kode</label>
                                        </label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->kode }}"
                                               name="kode">
                                    </div>
                                    <div class="form-group">
                                        <label>nama_buku</label>
                                        </label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->nama_buku }}"
                                               name="nama_buku">
                                    </div>
                                    <div class="form-group">
                                        <label>jenis_buku</label>
                                        </label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->jenis_buku }}"
                                               name="jenis_buku">
                                    </div>
                                    <div class="form-group">
                                        <label>harga_buku</label>
                                        </label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->harga_buku }}"
                                               name="harga_buku">
                                    </div>

                                    <div class="form-group">

                                        {{ method_field('PUT') }}
                                        <button type="submit" class="btn btn-outline btn-info">Simpan</button>
                                        <button type="button" class="btn btn-outline btn-info"
                                                onclick="location.href='/buku';">Kembali
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{--</form>--}}
                </div>
            </div>
            @endif
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

@endsection
