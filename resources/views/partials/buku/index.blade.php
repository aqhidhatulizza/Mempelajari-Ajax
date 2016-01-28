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
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data buku
                </div>
                <button type="button" class="btn btn-outline btn-primary"
                        onclick="location.href='/create-buku';">Add
                </button>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        @if(count($buku)>0)
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>nama_buku</th>
                                    <th>jenis_buku</th>
                                    <th>harga_buku</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($buku as $data)
                                    <tr class="">

                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->nama_buku}}</td>
                                        <td>{{ $data->jenis_buku }}</td>
                                        <td>{{ $data->harga_buku }}</td>
                                        <td>
                                            <button type="button" class="btn btn-outline btn-primary"
                                                    onclick="location.href='/detail-buku/{{$data->id}}';">Detail
                                            </button>
                                            <button type="button" class="btn btn-outline btn-primary"
                                                    onclick="location.href='/edit-buku/{{$data->id}}';">Edit
                                            </button>
                                            <button type="button" class="btn btn-outline btn-primary"
                                                    onclick="location.href='/delete-buku/{{$data->id}}';">Delete
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

