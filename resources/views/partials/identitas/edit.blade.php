@extends('layouts.master')
@section('title', 'Page Title')
@section('content')
    <div class="row">
        <div class=" col=-lg-12">
            <h1 class="page-header">identitas</h1>
        </div>
    </div>

    <div class="row">
        <div clas="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit identitas # {{$data->id}}
                </div>
                <div class="panel-body">
                    {{--<form role="form">--}}
                    @if(count($data)>0)
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="" method="post">
                                    {{method_field('PUT')}}
                                    <div class="form-group">
                                        <label>nama</label>
                                        </label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->nama }}"
                                               name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label>alamat</label>
                                        </label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->alamat }}"
                                               name="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label>jenis_kelamin</label>
                                        </label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->jenis_kelamin }}"
                                               name="jenis_kelamin">
                                    </div>
                                    <div class="form-group">
                                        <label>tanggal_masuk</label>
                                        </label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->tanggal_masuk }}"
                                               name="tanggal_masuk">
                                    </div>
                                    <div class="form-group">
                                        <label>user_id</label>
                                        </label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->user_id }}"
                                               name="user_id">
                                    </div>

                            <div class="form-group">

                                {{ method_field('PUT') }}
                                <button type="submit" class="btn btn-outline btn-info">Simpan</button>
                                <button type="button" class="btn btn-outline btn-info"
                                onclick="location.href='/identitas';">Kembali
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
