@extends('layouts.master')
@section('title', 'Page Title')
@section('content')
    <body onload="Index()"><div id="Index">
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
                    <button type="button" class="btn btn-outline btn-primary"
                            onclick="Create();">Add
                    </button>

                    <button type="button" class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-forward" aria-hidden="true"></span>
                    </button>
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            @if(count($identitas)>0)
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Address</th>
                                        <th>JK</th>
                                        <th>TM</th>
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
                                    {{--</tbody>--}}
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
                <h1 class="page-header">identitas</h1>
            </div>
        </div>
        <div class="row">
            <div clas="col-lg-12">
                <div class="panel-heading">
                    Tambah identitas
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form id="Form-Create">
                                <div class="form-group">
                                    <label>nama</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="Address">
                                </div>
                                <div class="form-group">
                                    <label>JK</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="JK">
                                </div>
                                <div class="form-group">
                                    <label>TM</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="TM">
                                </div>
                                <div class="form-group">
                                    <label>aksi</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="aksi">
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
                <h1 class="page-header">identitas</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit identitas
                    </div>
                    <div class="panel-body">
                        <form role="form">

                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="Form">
                                        <div class="form-group">
                                            <label>nama</label>
                                            </label>:</label>
                                            <input type="text" class="form-control"
                                                   name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            </label>:</label>
                                            <input type="text" class="form-control"
                                                   name="Address">
                                        </div>
                                        <div class="form-group">
                                            <label>JK</label>
                                            </label>:</label>
                                            <input type="text" class="form-control"
                                                   name="JK">
                                        </div>
                                        <div class="form-group">
                                            <label>TM</label>
                                            </label>:</label>
                                            <input type="text" class="form-control"
                                                   name="TM">
                                        </div>
                                        <div class="form-group">
                                            <label>aksi</label>
                                            </label>:</label>
                                            <input type="text" class="form-control"
                                                   name="aksi">
                                        </div>

                                        <div class="form-group">
                                            {{csrf_field()}}
                                            {{method_field('PUT') }}

                                        </div>
                                        <button type="submit" class="btn btn-outline btn-info" type="submit"value="Simpan">
                                            onclick="location.href='/identitas/';'>Simpan
                                            <button type="button" class="btn btn-outline btn-primary"
                                                    onclick="location.href='/identitas';">Kembali
                                            </button>
                            </div>
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
                $('#Create').hde();
                $('#Edit').hide();
                getAjax();
                $("#Form-Create").submit(function (event) {

                    event.preventDefault();
                    var $form = $(this),
                            nama = $form.find("input[input='nama']").val(),
                           Address = $form.find("input[name='Address']").val(),
                            JK = $form.find("input[name='JK']").val(),
                           TM = $form.find("input[name='TM']").val();
//                    $("$Form-Create").reset();


                    var posting = $.post('/identitas', {
                        nama:nama,
                        Address:Address,
                        JK: JK,
                        TM: TM
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
                $.getJSON("/data-identitas", function(data) {
                    $.each(data.slice(0,9),function(i,data) {
                        $("tampildata").append("<tr><td>"+ data.nama + "</td><td>" + data.Address + data.JK +"</td><td>" + data.TM + "</td><td>" + data.aksi +"</td><td><button type='button' class='btn btn-outline btn-info' onclick='Edit("+ data.nama+")'>Edit</button><button type='button' class='btn btn-outline btn-danger onclick='Hapus("+ data.nama+")'>Delete</button></td></tr>");
                    });
                });

            }
            function Edit(id) {
                $('#Create').hide();
                $('#Edit').show();
                $('#Index').hide();
                $.ajax({
                            method: "Get",
                            url: '/identitas/' + id,
                            data: {}
                        })
                        .done(function (data) {
                            console.log(data.id);
                            //         var $form = $(this),
                            nama = $("input[name='id']").val(data.nama);
                            Address = $("input[name='Address']").val(data.Addres);
                            JK = $("input[name='JK']").val(data.JK);
                           TM = $("input[name='TM']").val(data.TM);

                            $('#Edit').show();
                        });
                $("Form-Edit").submit(function (event) {
                    event.preventDefault();
                    var $form = $(this),
                            nama = $form.find("input[name='id']").val(),
                            Address = $form.find("input[name='Address']").val(),
                            JK= $form.find("input[name='JK']").val(),
                            TM = $form.find("input[name='TM']").val();
                    $.ajax({
                                method: "PUT",
                                url: '/identitas/' + id,
                                data: {
                                    nama:nama,
                                    Address:Address,
                                    JK:JK,
                                    TM:TM,
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
                                url: '/identitas/' + id,
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

