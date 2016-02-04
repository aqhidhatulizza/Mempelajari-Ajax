@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">identitas</h1>
            </div>
        </div>
<div id="Index">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button type="button" class="btn btn-outline btn-primary"
                                onclick="Create();">Add
                        </button>
                    </div>

                <center> <div id="loader2">
                        <img src=" {!! asset('images/download1.gif') !!}" >
                        </div></center>

                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>alamat</th>
                                        <th>Jenis_kelamin</th>
                                        <th>tanggal_masuk</th>
                                        <th>aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody id="date-example">
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
            <div class="col-lg-12">
                <h1 class="page-header">identitas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-heading">
                    Tambah identitas
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
                                    <label>nama</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label>alamat</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="alamat">
                                </div>
                                <div class="form-group">
                                    <label>jenis_kelamin</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="jenis_kelamin">
                                </div>
                                <div class="form-group">
                                    <label>tanggal_masuk</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="tanggal_masuk">
                                </div>
                                <div class="form-group">
                                    <label>user_id</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="user_id">
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

                        <form role="form" id="Form-Edit">
                        <div class="row">
                            <div class="col-lg-6">
                                <form id="Form-Edit">
                                    <input type="hidden" name="id">
                                    <div class="form-group">
                                        <label>id</label>
                                        </label>:</label>
                                        <input type="text" class="form-control"
                                               name="id">
                                    </div>
                                    <div class="form-group">
                                        <label>nama</label>
                                        </label>:</label>
                                        <input type="text" class="form-control"
                                               name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label>alamat</label>
                                        </label>:</label>
                                        <input type="text" class="form-control"
                                               name="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis_kelamin</label>
                                        </label>:</label>
                                        <input type="text" class="form-control"
                                               name="jenis_kelamin">
                                    </div>
                                    <div class="form-group">
                                        <label>tanggal_masuk</label>
                                        </label>:</label>
                                        <input type="text" class="form-control"
                                               name="tanggal_masuk">
                                    </div>
                                    <div class="form-group">
                                        <label>user_id</label>
                                        </label>:</label>
                                        <input type="text" class="form-control"
                                               name="user_id">
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-outline btn-info" type="submit"
                                               value="Simpan">
                                        <button type="button" class="btn btn-outline btn-primary"
                                                onclick="Index()">Kembali
                                        </button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Modal--}}

    {{--Detail Modal--}}
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><font face="Bernard MT"> Detail Buku </font></h4>
                </div>
                <div class="modal-body">
                    {{--<p>Some text in the modal.</p>--}}
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
            $('#Edit').hide();Index();
            $("#Form-Create").submit(function (event) {

                event.preventDefault();
                var $form = $(this),
                        nama = $form.find("input[name='nama']").val(),
                        alamat = $form.find("input[name='alamat']").val(),
                        jenis_kelamin = $form.find("input[name='jenis_kelamin']").val(),
                        tanggal_masuk = $form.find("input[name='tanggal_masuk']").val(),
                        user_id = $form.find("input[name='user_id']").val();

                var posting = $.post('/identitas', {
                    nama: nama,
                    alamat: alamat,
                    jenis_kelamin: jenis_kelamin,
                    tanggal_masuk: tanggal_masuk,
                    user_id: user_id
                });

                posting.done(function (data) {
                    window.alert(data.result.message);
                    Index();
                });
                return false;
            });

            $("#Form-Edit").submit(function (event) {

                event.preventDefault();

                var $form = $(this),
                        id = $form.find("input[name='id']").val(),
                        nama = $form.find("input[name='nama']").val(),
                        alamat = $form.find("input[name='alamat']").val(),
                        jenis_kelamin = $form.find("input[name='jenis_kelamin']").val(),
                        tanggal_masuk = $form.find("input[name='tanggal_masuk']").val(),
                        user_id = $form.find("input[name='user_id']").val();

                currentRequest = $.ajax({
                    method: "PUT",
                    url: '/identitas/' + id,
                    data: {
                        nama: nama,
                        alamat: alamat,
                        jenis_kelamin:jenis_kelamin,
                        tanggal_masuk:tanggal_masuk,
                        user_id: user_id

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
        });

        function Index() {
            $('#Create').hide();
            $('#Edit').hide();
            $('#Index').show();
            $("#data-example").children().remove();
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();
            getAjax();

        }
        function Create() {
            $('#Create').show();
            $('#Edit').hide();
            $('#Index').hide();
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();

        }
        function getAjax() {
            $("#date-example").children().remove();
            $("#loader2").delay(2000).animate({
                opacity:0,
                width: 0,
                height:0
            }, 500);
            setTimeout(function(){   $.getJSON("/data-identitas", function (data) {
                var jumlah = data.length;
                $.each(data.slice(0, jumlah), function (i, data) {
                    $("#date-example").append("<tr><td>" + data.nama + "</td><td>" + data.alamat+ "</td><td>" + data.jenis_kelamin+ "</td><td>" + data.tanggal_masuk+ "</td><td><button type='button' class='btn btn-outline btn-info' data-toggle='modal' data-target='#myModal' onclick='Detail(" + data.id + ")'>Detail</button> <button type='button' class='btn btn-outline btn-primary' onclick='Edit(" + data.id + ")'>Edit</button> <button type='button' class='btn btn-outline btn-danger' onclick='Hapus(" + data.id + ")'>Delete</button></td></tr>");
                })
            }); }, 2200);
        }

        function Edit(id) {
            $('#Create').hide();
            $('#Edit').hide();
            $('#Index').hide();
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();
            $.ajax({

                        method: "Get",
                        url: '/identitas/' + id,
                        data: {}
                    })
                    .done(function (data) {
                        console.log(data.id);
                        //         var $form = $(this),
                        $("input[name='id']").val(data.id);
                        $("input[name='nama']").val(data.nama);
                        $("input[name='alamat']").val(data.alamat);
                        $("input[name='jenis_kelamin']").val(data.jenis_kelamin);
                        $("input[name='tanggal_masuk']").val(data.tanggal_masuk);
                        $("input[name='user_id']").val(data.user_id);

                        $('#Edit').show();
                    });

        }

        function Detail(id) {
            $("#modal-body").children().remove();
            $.ajax({
                method: "GET",
                url: '/identitas/' + id,
                data: {},
                beforeSend: function () {
                    $('#loader-wrapper').show();
                },
                success: function (data) {
//                    $('#loader').hide();
                    $("#loader-wrapper").hide();
                    $("#modal-body").append(
                            "<tr><td> nama </td><td> : </td><td>" + data.nama + "</td></tr>" +
                            "<tr><td> jenis_kelamin</td><td> : </td><td>" + data.jenis_kelamin + "</td></tr>" +
                            "<tr><td> tanggal_masuk</td><td> : </td><td>" + data.tanggal_masuk + "</td></tr>" +
                            "<tr><td> user_id</td><td> : </td><td>" + data.user_id + "</td></tr>"
                    );
                }
            });
        }
        function Hapus(id) {
            var result = confirm("Apakah Anda Yakin ingin Menghapus?");
            if (result) {

                $.ajax({
                            method: "DELETE",
                            url: '/delete-identitas/' + id,
                            data: {}
                        })
                        .done(function (data) {
                            window.alert(data.result.message);
                            getAjax();
                        });
            }
        }
    </script>
</body>
@endsection

