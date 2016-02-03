{{--@extends('layouts.master')--}}
@section('title', 'Page Title')
@section('content')
    <div id="Index">
        <div class="row">
            <div class="" col=-lg-12">
                <h1 class="page-header">buku</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Data buku
                    </div>
                    <button type="button" class="btn btn-outline btn-primary"
                            onclick="Create();">Add
                    </button>
                    <center>
                        <div id="loader2">
                            <img src="{!! asset('images/download1.gif') !!}">
                        </div>
                    </center>

                    <div class="panel-body">
                        <div class="dataTable_wrapper">
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
                                <tbody id="date-example">
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
            <div class="col-lg-12">
                <div class="panel-heading">
                    Tambah buku
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form id="Form-Create">
                                <div class="form-group">
                                    <label>id</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="id">
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
                                            <label>id</label>
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


                                        </div>
                                        <input type="submit" class="btn btn-outline btn-info" value="Simpan">

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
    {{--Model--}}

    {{--Detail Modal--}}
    <div id="myModal" class="modal fade" role="dialog">
        <div class=modal-dialog">

            <!--Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><font face="Bernard MT">Detail Buku </font></h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                    <div id="loader-wrapper">
                        <div id="loader"></div>
                    </div>
                    <table class="table table-striped">
                        <tbody id="modal-body">

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                </div>
            </div>

        </div>
    </div>

    <script src="{!! asset('bower_components/jquery/dist/jquery.min.js') !!}"></script>
    <script>
        $(document).ready(function () {
            var currentRequest = null;
            $('#Create').hide();
            $('#Edit').hide();
            getAjax();
            //Event when form create was submited
            $("#Form-Create").submit(function (event) {

                event.preventDefault();
                var $form = $(this),
                        id = $form.find("input[input='id']").val(),
                        nama_buku = $form.find("input[name='nama_buku']").val(),
                        jenis_buku = $form.find("input[name='jenis_buku']").val(),
                        harga_buku = $form.find("input[name='harga_buku']").val();
                // console.log(currentRequest + '|' + id);
                currentRequest = $.ajax({
                    method: "PUT",
                    url: '/buku/' + id,
                    data: {
                        id: id,
                        nama_buku: nama_buku,
                        jenis_buku: jenis_buku,
                        harga_buku: harga_buku,
                    },
                    beforeSend: function () {
                        if (currentRequest != null) {
                            currentRequest.abort();
                        }
                    },
                    success: function (data) {
                        window.alert(data.result.message);
                        Index();
                    },
                    error: function (data) {
                        window.alert(data.result.message);
                        Index();
                    }
                });
            });
            //            $('#dataTables-example').DataTable({
//                "responsive": true,
//                "processing": true,
////                "ajax": getAjax()
////                "serverSide": true,
//
//                // Load data for the table's content from an Ajax source
////                ajax: {
////                    url: '/data-buku',
////                    dataSrc: ''
////                },
////                columns: [
////                    {data: 'id'},
////                    {data: 'nama_buku'},
////                    {data: 'jenis_buku'},
////                    {data: 'harga_buku'},
////                ]
//            });
        });

        function Detail(id) {
            $("#loader-wrapper").children().remove();
            $.ajax({
                method: "GET",
                url: '/edit-buku/' + id,
                data: {},
                beforeSend: function () {
                    $('#loader-wrapper').show();
                },
                success: function (data) {
//                    $('#loader').hide();
                    $("#loader-wrapper").hide();
                    $("#modal-body").append("<tr><td> id </td><td> : </td><td>" + data.id + "</td></tr>" +
                            "<tr><td> nama_buku </td><td> : </td><td>" + data.nama_buku + "</td></tr>" +
                            "<tr><td> jenis_buku </td><td> : </td><td>" + data.jenis_buku + "</td></tr>" +
                            "<tr><td> harga_buku </td><td> : </td><td>" + data.harga_buku + "</td></tr>"
                    );
                }
            });
//            $.getJSON("/buku/" + id, function (data) {
//                var jumlah = data.length;
////                $.each(data.slice(0, jumlah), function (i, data) {
//                $("#modal-body").append("<tr><td> id</td><td> : </td><td>" + data.id + "</td></tr>" +
//                        "<tr><td> nama_buku </td><td> : </td><td>" + data.nama_buku+ "</td></tr>" +
//                        "<tr><td> jenis_buku </td><td> : </td><td>" + data.jenis_buku + "</td></tr>" +
//                        "<tr><td> harga_buku </td><td> : </td><td>" + data.harga_buku + "</td></tr>" +
//                );
////                })
//            });
        }
        function Index() {
            $('#Create').hide();
            $('#Edit').hide();
            $('#Index').show();

        }
        function Create() {
            $('#Create').show();
            $('#Edit').hide();
            $('#Index').hide();
            $("input[name='id']").val("")
            $("input[name='nama_buku']").val("");
            $("input[name='jenis_buku']").val("");
            $("input[name='harga_buku']").val("");
        }
        function getAjax() {
            $("#loader-wrapper").children().remove();
            $("#data-example").delay(2000).animate({
                opacity: 0,
                width: 0,
                height: 0
            }, 500);
            setTimeout(function () {
                $.getJSON("/data-buku", function (data) {
                    var jumlah = data.length;
                    $.each(data.slice(0, jumlah), function (i, data) {
                        $("#date-example").append("<tr><td>" + data.id + "</td><td>" + data.nama_buku + "</td><td>" + data.jenis_buku + "</td><td>" + data.harga_buku + "</td><td><button type='button' class='btn btn-outline btn-info' data-toggle='modal' data-target='#myModal' onclick='Detail(" + data.id + ")'>Detail</button> <button type='button' class='btn btn-outline btn-primary' onclick='Edit(" + data.id + ")'>Edit</button> <button type='button' class='btn btn-outline btn-danger' onclick='Hapus(" + data.id + ")'>Delete</button></td></tr>");
                    })
                });
            }, 2200);
        }

        function Edit(id) {
            $('#Create').hide();
            $('#Edit').show();
            $('#Index').hide();
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();
            $.ajax({
                        method: "Get",
                        url: '/edit-buku/' + id,
                        data: {}
                    })
                    .done(function (data) {
                        console.log(data.id);

                        //         var $form = $(this),
                        $("input[name='id']").val(data.id);
                        $("input[name='nama_buku']").val(data.nama_buku);
                        $("input[name='jenis_buku']").val(data.jenis_buku);
                        $("input[name='harga_buku']").val(data.harga_buku);

                        $('#Edit').show();
                    });
        }


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

