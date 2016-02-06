{{--@extends('layouts.master')--}}
@section('title', 'Page Title')
@section('content')
    <div id="Index">
        <div class="row">
            <div class="" col=-lg-12">
                <h1 class="page-header">peminjaman</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Data peminjaman
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
                                    <th>buku</th>
                                    <th>identitas</th>
                                    <th>lama_hari</th>
                                    <th>tanggal_pinjam</th>
                                    <th>tanggal_kembali</th>
                                    <th>aksi</th>

                                </tr>
                                </thead>
                                <tbody id="date-example">
                                {{--@foreach($peminjaman as $data)--}}
                                {{--<tr class="">--}}

                                {{--<td>{{ $data-> kode_pinjam}}</td>--}}
                                {{--<td>{{ $data->tanggal_pinjam}}</td>--}}
                                {{--<td>{{ $data->tanggal_pinjam }}</td>--}}
                                {{--<td>--}}
                                {{--<button type="button" class="btn btn-outline btn-primary"--}}
                                {{--onclick="location.href='/detail-peminjaman/{{$data->id}}';">Detail--}}
                                {{--</button>--}}
                                {{--<button type="button" class="btn btn-outline btn-primary"--}}
                                {{--onclick="location.href='/edit-peminjaman/{{$data->id}}';">Edit--}}
                                {{--</button>--}}
                                {{--<button type="button" class="btn btn-outline btn-primary"--}}
                                {{--onclick="location.href='/delete-peminjaman/{{$data->id}}';">Delete--}}
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
            <div class=" col-lg-12">
                <h1 class="page-header">peminjaman</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-heading">
                    Tambah peminjaman
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
                                    <label>id_buku</label>
                                    <label>:</label>
                                    <select id="id_buku" class="form-control" name="id_buku">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>id_identitas</label>
                                    <label>:</label>
                                    <select id="id_identitas" class="form-control" name="id_identitas">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>lama_hari</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="lama_hari">
                                </div>
                                <div class="form-group">
                                    <label>tanggal_pinjam</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="tanggal_pinjam">
                                </div>
                                <div class="form-group">
                                    <label>tanggal_kembali</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="tanggal_kembali">
                                </div>

                                <input class="btn btn-outline btn-info" type="submit" value="Simpan">
                                {{--onclick="location.href='/peminjaman/{{$data->id}}}';">Simpan--}}
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
                <h1 class="page-header">peminjaman</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit peminjaman
                    </div>
                    <div class="panel-body">

                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="Form-Edit">
                                        <div class="form-group">
                                            <label>id</label>
                                            </label>:</label>
                                            <input type="text" class="form-control"
                                                   name="id">
                                        </div>
                                        <div class="form-group">
                                            <label>id_buku</label>
                                            </label>:</label>
                                            <select id="id_buku" class="form-control"
                                                   name="id_buku">
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>id_identitas</label>
                                            </label>:</label>
                                            <select id="id_identitas" class="form-control"
                                                   name="id_identitas">
                                                </select>

                                        </div>

                                        <div class="form-group">
                                            <label>lama_hari</label>
                                            </label>:</label>
                                            <input type="text" class="form-control"
                                                   name="tanggal_kembali">
                                        </div>
                                        <div class="form-group">
                                            <label>tanggal_pinjam</label>
                                            </label>:</label>
                                            <input type="text" class="form-control"
                                                   name="tanggal_kembali">
                                        </div>
                                        <div class="form-group">
                                            <label>tanggal_kembali</label>
                                            </label>:</label>
                                            <input type="text" class="form-control"
                                                   name="tanggal_kembali">
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
                    <h4><font face="Bernard MT">Detail peminjaman </font></h4>
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
                        id = $form.find("select[name='id']").val(),
                        id_buku = $form.find("select[name='id_buku']").val(),
                        id_identitas = $form.find("select[name='id_identitas']").val(),
                        lama_hari = $form.find("input[name='lama_hari']").val(),
                        tanggal_pinjam = $form.find("input[name='tanggal_pinjam']").val(),
                        tanggal_kembali = $form.find("input[name='tanggal_kembali']").val();
                console.log(id_buku + ' | ' + id_identitas);
                currentRequest = $.ajax({
                    method: "POST",
                    url: '/peminjaman',
                    data: {
                        id: id,
                        id_buku: id_buku,
                        id_identitas: id_identitas,
                        lama_hari: lama_hari,
                        tanggal_pinjam: tanggal_pinjam,
                        tanggal_kembali: tanggal_kembali
                    },
                    beforeSend: function () {
                        if (currentRequest != null) {
                            currentRequest.abort();
                        }
                    },
                    success: function (data) {
                        window.alert(data.result.message);
                        getAjax();
                        Index();
                    },
                    error: function (data) {
                        window.alert(data.result.message);
                        Index();
                    }
                });
            });

        });

        function Detail(id) {
            $("#loader-wrapper").children().remove();
            $.ajax({
                method: "GET",
                url: '/edit-peminjaman/' + id,
                data: {},
                beforeSend: function () {
                    $('#loader-wrapper').show();
                },
                success: function (data) {
//                    $('#loader').hide();
                    $("#loader-wrapper").hide();
                    $("#modal-body").append("<tr><td> id </td><td> : </td><td>" + data.id + "</td></tr>" +
                            "<tr><td> id_buku </td><td> : </td><td>" + data.id_buku + "</td></tr>" +
                            "<tr><td> id_identitas </td><td> : </td><td>" + data.id_identitas + "</td></tr>" +
                            "<tr><td> id_buku </td><td> : </td><td>" + data.id_buku + "</td></tr>" +
                            "<tr><td> lama_hari </td><td> : </td><td>" + data.lama_hari + "</td></tr>" +
                            "<tr><td> tanggal_kembali </td><td> : </td><td>" + data.tanggal_kembali +
                            "<tr><td> tanggal_kembali </td><td> : </td><td>" + data.tanggal_kembali
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
            $("input[name='tanggal_pinjam']").val("");
            $("input[name='tanggal_kembali']").val("");
            getIdentitas();
            getBuku();

        }
        function getIdentitas() {
            $('#id_identitas').children().remove();
            $.getJSON("/data-identitas", function (data) {
                var jumlah = data.lenght;
                $("#id_identitas").append("<option selected>pilih identitas</option>");
                $.each(data.slice(0, jumlah), function (i, data) {
                    $("#id_identitas").append("<option value='" + data.id + "'>" + data.nama + " </option>");

                })
            });

        }
        function getBuku() {
            $('#id_buku').children().remove();
            $.getJSON("/data-buku", function (data) {
                var jumlah = data.lenght;
                $("#id_buku").append("<option selected>pilih buku</option>");
                $.each(data.slice(0, jumlah), function (i, data) {
                    $("#id_buku").append("<option value='" + data.id + "'>" + data.nama_buku + " </option>");

                })
            });

        }


        function getAjax() {
            $("#date-example").children().remove();
            $("#loader2").delay(2000).animate({
                opacity: 0,
                width: 0,
                height: 0
            }, 500);
            setTimeout(function () {
                $.getJSON("/data-peminjaman", function (data) {
                    var jumlah = data.length;
                    $.each(data.slice(0, jumlah), function (i, data) {
                        $("#date-example").append("<tr><td>" + data.id +
                                "</td><td>" + data.buku.nama_buku+
                                "</td><td>" + data.identitas.nama+
                                "</td><td>" + data.lama_hari +
                                "</td><td>" + data.tanggal_pinjam +
                                "</td><td>" + data.tanggal_kembali +
                                "</td><td><button type='button' class='btn btn-outline btn-info' data-toggle='modal' data-target='#myModal' onclick='Detail(" + data.id + ")'>Detail</button> <button type='button' class='btn btn-outline btn-primary' onclick='Edit(" + data.id + ")'>Edit</button> <button type='button' class='btn btn-outline btn-danger' onclick='Hapus(" + data.id + ")'>Delete</button></td></tr>");
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
                        url: '/edit-peminjaman/' + id,
                        data: {}
                    })
                    .done(function (data_edit) {
                        $("input[name='id']").val(data_edit.id);
                        $("input[name='lama_hari']").val(data_edit.lama_hari);
                        $("input[name='tanggal_pinjam']").val(data_edit.tanggal_pinjam);
                        $("input[name='tanggal_kembali]").val(data_edit.tanggal_kembali);

                        $.getJSON("/data-buku", function (data) {
                        var jumlah = data.length;
                        $.each(data.slice(0, jumlah), function (i, data) {
                            if (data_edit.id_buku.id == data.id) {
                                    $("select[name='id_buku']").append("<option value='" + data.id + "' selected>" + data.nama_buku + "</option>");
                                }
                                else {
                                    $("select[name='id_buku']").append("<option value='" + data.id + "'>" + data.nama_buku + "</option>");
                                }
                            })
                        });
                        $.getJSON("/data-identitas", function (data) {
                            var jumlah = data.length;
                            $.each(data.slice(0, jumlah), function (i, data) {
                                if (data_edit.id == data.id) {
                                    $("select[name='id_identitas']").append("<option value='" + data.id + "' selected>" + data.nama + "</option>");
                                }
                                else {
                                    $("select[name='id_identitas']").append("<option value='" + data.id + "'>" + data.nama + "</option>");
                                }
                            })
                        });


                $('#Edit').show();
            });
        }


        $("Form-Edit").submit(function (event) {
            event.preventDefault();
            var $form = $(this),
                    id = $form.find("input[name='id']").val(),
                    id_buku = $form.find("select[name='id_buku']").val(),
                    id_identitas = $form.find("select[name='id_identitas']").val(),
                    lama_hari = $form.find("input[name='lama_hari']").val(),
                    tanggal_pinjam = $form.find("input[name='tanggal_pinjam']").val(),
                    tanggal_kembali = $form.find("input[name='tanggal_kembali']").val(),

                    currentRequest = $.ajax({
                                method: "PUT",
                                url: '/peminjaman/' + id,
                                data: {
                                    id: id,
                                    id_buku: id_buku,
                                    id_identitas: id_identitas,
                                    lama_hari: lama_hari,
                                    tanggal_pinjam: tanggal_pinjam,
                                    tanggal_kembali: tanggal_kembali
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
                            url: '/peminjaman/' + id,
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

