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
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data identitas
                </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        @if(count($identitas)>0)
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Address</th>
                                    <th>JK</th>
                                    <th>TM</th>
                                    <th>aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($identitas as $data)
                                    <tr class="">

                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->alamat}}</td>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                        <td>{{ $data->tanggal_masuk }}</td>
                                        <td>
                                            <button type="button" class="btn btn-outline btn-primary"
                                                    onclick="location.href='/identitas/{{$data->id}}';">Detail
                                            </button>
                                            <button type="button" class="btn btn-outline btn-primary"
                                                    onclick="location.href='/edit-identitas/{{$data->id}}';">Edit
                                            </button>
                                            <button type="button" class="btn btn-outline btn-primary"
                                                    onclick="location.href='/delete-identitas/{{$data->id}}';">
                                                Delete
                                            </button>
                                            <button type="button" class="btn btn-outline btn-primary"
                                                    onclick="location.href='/create-identitas';">Add
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

