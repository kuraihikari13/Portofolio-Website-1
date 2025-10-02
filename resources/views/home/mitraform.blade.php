@extends('home\homepage')

@section('head')

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Icons font CSS-->
    <link href="assets01/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets01/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="assets01/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets01/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="assets01/css/kemitraanf.css">
    <!-- Main CSS-->
    <link rel="stylesheet" href="assets01/css/style.css">
    <link rel="stylesheet" href="assets01/css/bootstrap.min.css">

</head>

@endsection

@section('content')
<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Silahkan isi form berikut</h2>
                    <form method="post" action="register">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Nama" name="name" required >
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <input class="input--style-2"  placeholder="Nomor Telepon" name="phone" type="number" required>
                                </div>
                            </div>
                        </div>

                           <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <input class="input--style-2" type="number" placeholder="Luas Bangunan (meter2)" name="luas" required >
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <input class="input--style-2"  placeholder="Modal" name="modal" type="number" required>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <input class="input--style-2" type="number" placeholder="Tegangan Listrik (VA)" name="listrik" required >
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <input class="input--style-2"  placeholder="Kapasitas Pegawai" name="staff" type="number" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <input class="input--style-2"  placeholder="Email" name="email" type="email" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <input class="input--style-2"  placeholder="Password" name="password" type="password" required>
                                </div>
                            </div>
                        </div>
                            <div class="input-group">
                                <input class="input--style-2" placeholder="Alamat" name="address" type="text" required>
                            </div>

                             <div class="form-group">
                                <label for="exampleFormControlSelect1">Jenis Lokasi</label>
                                <select name="lokasi" class="form-control" id="exampleFormControlSelect1">
                                  <option value="Jalan Lokal">Jalan Lokal </option>
                                  <option value="Jalan Arteri">Jalan Arteri</option>
                                  <option value="Mall atau Swalayan">Mall atau Swalayan</option>
                                
                                </select>
                              </div>

                        </div>
                      <div style="padding: 4rem;">

                        <button style="width: 300px; height: 50px;" class="btn btn-primary">Submit</button>
                      </div>
                     
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
    @endsection

    @section('footer')
    <!-- Jquery JS-->
    <script src="assets01/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="assets01/vendor/select2/select2.min.js"></script>
    <script src="assets01/vendor/datepicker/moment.min.js"></script>
    <script src="assets01/vendor/datepicker/daterangepicker.js"></script>
    <!-- Main JS-->
    <script src="assets01/js/global.js"></script>
    @endsection
