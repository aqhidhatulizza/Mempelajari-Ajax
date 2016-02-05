@extends('layouts.master')
@section('title', 'Page Title')
@section('content')
    <div class="row">
        <div class=" col=-lg-12">
            <h1 class="page-header">peminjaman</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit peminjaman # {{$data->id}}
                </div>
                <div class="panel-body">
                    {{--<form role="form">--}}
                    @if(count($data)>0)
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="" method="post">
                                    {{method_field('PUT')}}
                                    <div class="form-group">
                                        <label>id</label>
                                        </label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->id }}"
                                               name="id">
                                    </div>
                                    <div class="form-group">
                                        <label>id_buku</label>
                                        </label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->id_buku }}"
                                               name="id">
                                    </div>
                                    <div class="form-group">
                                        <label>id_identitas</label>
                                        </label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->id_identitas }}"
                                               name="id">
                                    </div>
                                    <div class="form-group">
                                        <label>lama_hari</label>
                                        </label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->lama_hari }}"
                                               name="lama_hari">
                                    </div>
                                    <div class="form-group">
                                        <label>tanggal_pinjam</label>
                                        </label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->tanggal_pinjam }}"
                                               name="tanggal_pinjam">
                                    </div>

                                    <div class="form-group">
                                        <label>tanggal_kembali</label>
                                        </label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->tanggal_kembali }}"
                                               name="tanggal_kembali">
                                    </div>
                                    <div class="form-group">

                                        {{ method_field('PUT') }}
                                        <button type="submit" class="btn btn-outline btn-info">Simpan</button>
                                        <button type="button" class="btn btn-outline btn-info"
                                                onclick="location.href='/peminjaman';">Kembali
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
