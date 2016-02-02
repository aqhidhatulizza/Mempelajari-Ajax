@extends('layouts.master')
@section('title', 'Page Title')
@section('content')
    <body onload="Index()"><div id="Index">
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
                            onclick="Create();">Add
                    </button>

                    <button type="button" class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-forward" aria-hidden="true"></span>
                    </button>
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            @if(count($buku)>0)
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>nama_buku</th>
                                        <th>jenis_buku</th>
                                        <th>harga_buku</th>
                                        <th>aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody id="tampildata">
                                    {{--@foreach($buku as $data)--}}
                                        {{--<tr class="">--}}

                                            {{--<td>{{ $data->id }}</td>--}}
                                            {{--<td>{{ $data->nama_buku}}</td>--}}
                                            {{--<td>{{ $data->jenis_buku }}</td>--}}
                                            {{--<td>{{ $data->harga_buku }}</td>--}}
                                            {{--<td>--}}
                                                {{--<button type="button" class="btn btn-outline btn-primary"--}}
                                                        {{--onclick="location.href='/detail-buku/{{$data->id}}';">Detail--}}
                                                {{--</button>--}}
                                                {{--<button type="button" class="btn btn-outline btn-primary"--}}
                                                        {{--onclick="location.href='/edit-buku/{{$data->id}}';">Edit--}}
                                                {{--</button>--}}
                                                {{--<button type="button" class="btn btn-outline btn-primary"--}}
                                                        {{--onclick="location.href='/delete-buku/{{$data->id}}';">Delete--}}
                                                {{--</button>--}}

                                            {{--</td>--}}
                                        {{--</tr>--}}
                                    {{--@endforeach--}}
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="Create">
        <div class="row">
            <div class="" col=-lg-12">
                <h1 class="page-header">buku</h1>
            </div>
        </div>
        <div class="row">
            <div clas="col-lg-12">
                <div class="panel-heading">
                    Tambah buku
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form id="Form-Create">
                                <div class="form-group">
                                    <label>kode</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="kode">
                                </div>
                                <div class="form-group">
                                    <label>nama_buku</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="nama_buku">
                                </div>
                                <div class="form-group">
                                    <label>jenis_buku</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="jenis_buku">
                                </div>
                                <div class="form-group">
                                    <label>harga_buku</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="harga_buku">
                                </div>

                                <input class="btn btn-outline btn-info" type="submit" value="Simpan">
                                {{--onclick="location.href='/buku/{{$data->id}}}';">Simpan--}}
                                <button type="button" class="btn btn-outline btn-primary"
                                        onclick="Index()">Kembali
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="Edit">
        <div class="row">
            <div class=" col=-lg-12">
                <h1 class="page-header">buku</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit buku
                    </div>
                    <div class="panel-body">
                        <form role="form">

                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="Form">
                                        <div class="form-group">
                                            <label>kode</label>
                                            </label>:</label>
                                            <input type="text" class="form-control"
                                                   name="kode">
                                        </div>
                                        <div class="form-group">
                                            <label>nama_buku</label>
                                            </label>:</label>
                                            <input type="text" class="form-control"
                                                   name="nama_buku">
                                        </div>
                                        <div class="form-group">
                                            <label>jenis_buku</label>
                                            </label>:</label>
                                            <input type="text" class="form-control"
                                                   name="jenis_buku">
                                        </div>
                                        <div class="form-group">
                                            <label>harga_buku</label>
                                            </label>:</label>
                                            <input type="text" class="form-control"
                                                   name="harga_buku">
                                        </div>

                                        <div class="form-group">
                                            {{csrf_field()}}
                                            {{method_field('PUT') }}

                                            </div>
                                            <button type="submit" class="btn btn-outline btn-info" type="submit"value="Simpan">
                                                onclick="location.href='/buku/';'>Simpan
                                                <button type="button" class="btn btn-outline btn-primary"
                                                        onclick="location.href='/buku';">Kembali
                                                </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    <script src="{!! asset('bower_components/jquery/dist/jquery.min.js') !!}"></script>
    <script>
        $(document).ready(function () {
            $('#Create').hide();
            $('#Edit').hide();
            getAjax();
            $("#Form-Create").submit(function (event) {

                event.preventDefault();
                var $form = $(this),
                        id = $form.find("input[input='id']").val(),
                        nama_buku = $form.find("input[name='nama_buku']").val(),
                        jenis_buku = $form.find("input[name='jenis_buku']").val(),
                        harga_buku = $form.find("input[name='harga_buku']").val();
                $("$Form-Create").reset();
                var posting = $.post('/buku', {
                    id: id,
                    nama_buku: nama_buku,
                    jenis_buku: jenis_buku,
                    harga_buku: harga_buku,
                });
                //Put the result in a div
                posting.dne(function (data) {

                    console.log(data);
                    window.alert(data.result.message);
                    document.getElementById("form-Create").reset();
                    location.reload();
                    $('#Create').hide();
                    $('#Edit').hide();
                    $('#Index').show();
                });
            });
        });
        function Index() {
            $('#Create').hide();
            $('#Edit').hide();
            $('#Index').show();

        }
        function Create() {
            $('#Create').show();
            $('#Edit').hide();
            $('#Index').hide();
        }
        function getAjax() {
            $("#tampildata").children().remove();
            $.getJSON("/data-buku", function(data) {
                $.each(data.slice(0,9),function(i,data) {
                    $("#tampildata").append("<tr><td>"+ data.id + "</td><td>" + data.nama_buku + data.jenis_buku +"</td><td>" + data.harga_buku + "</td><td><button type='button' class='btn btn-outline btn-info' onclick='Edit("+ data.id +")'>Edit</button><button type='button' class='btn btn-outline btn-danger onclick='Hapus("+ data.id+")'>Delete</button></td></tr>");
                });
            });

        }
        function Edit(id) {
            $('#Create').hide();
            $('#Edit').show();
            $('#Index').hide();
            $.ajax({
                        method: "Get",
                        url: '/buku/' + id,
                        data: {}
                    })
                    .done(function (data) {
                        //         var $form = $(this),
                        id = $("input[name='id']").val(data.id);
                        nama_buku = $("input[name='nama_buku']").val(data.nama_buku);
                        jenis_buku = $("input[name='jenis_buku']").val(data.jenis_buku);
                        harga_buku = $("input[name='haga_buku']").val(data.harga_buku);

                        $('#Edit').show();
                    });
            $("Form-Edit").submit(function (event) {
                event.preventDefault();
                var $form = $(this),
                        id = $form.find("input[name='id']").val(),
                        nama_buku = $form.find("input[name='nama_buku']").val(),
                        jenis_buku = $form.find("input[name='jenis_buku']").val(),
                        harga_buku = $form.find("input[name='harga_buku']").val();
                $.ajax({
                            method: "PUT",
                            url: '/buku/' + id,
                            data: {
                                id: id,
                                nama_buku: nama_buku,
                                jenis_buku: jenis_buku,
                                harga_buku: harga_buku
                            }
                        })
                        .done(function (data) {
                            window.alert(data.result.message);
                            getAjax();
                            Index();
                        });
            });
        }
        function Hapus(id) {
            var result = confirm("Apakah Anda Yakin ingin Menghapus?");
            if (result) {

                $.ajax({
                            method: "DELETE",
                            url: '/buku/' + id,
                            data: {}
                        })
                        .done(function (data) {
                            window.alert(data.result.message);
                            location.reload();
                        });
            }
        }

    </script>
    </body>

@endsection

