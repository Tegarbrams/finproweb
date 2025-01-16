<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'Form')</title>

   @include('include.style')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
           @include('include.navbar')
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            @include('include.sidebar')
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit Pasien
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-edit"></i> Forms
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <form role="form" action="{{ route('post.store') }}" method="POST">
                            @csrf
                        
                            <div class="form-group col-lg-12">
                                <label for="NIK" class="form-label">No KTP</label>
                                <input type="text" name="NIK" id="NIK" class="form-control" placeholder="Masukkan NIK" value="{{ $pasien->NIK }}" required>
                            </div>
                        
                            <div class="form-group col-lg-12">
                                <label>Nama Pasien</label>
                                <input type="text" name="nama_pasien" id="nama_pasien" class="form-control" placeholder="Masukkan Nama Lengkap" value="{{ $pasien->nama_pasien }}" required>
                            </div>
                        
                            <div class="form-group col-lg-12">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="{{ $pasien->tanggal_lahir }}" required>
                            </div>
                        
                            <div class="form-group col-lg-12">
                                <label>Alamat</label>
                                <input class="form-control" name="alamat" placeholder="Masukan Alamat Sesuai KTP" value="{{ $pasien->alamat }}" required>
                            </div>
                        
                            <div class="form-group col-lg-12">
                                <label>Jenis Kelamin</label>
                                <label class="radio-inline">
                                    <input type="radio" name="jenis_kelamin" value="laki-laki" checked>Laki-Laki
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="jenis_kelamin" value="wanita">Wanita
                                </label>
                            </div>
                        
                            <div class="form-group col-lg-12">
                                <label>Penyakit</label>
                                <input class="form-control" name="penyakit" value="{{ $pasien->penyakit }}" required>
                            </div>
                        
                            <div class="form-group col-lg-12">
                                <label for="kartuAsuransi" class="form-label">Kartu Asuransi</label>
                                <select id="kartuAsuransi" name="asuransi" class="form-control">
                                    <option selected disabled>Pilih Kartu</option>
                                    <option value="bpjs">BPJS</option>
                                    <option value="asuransi-a">Asuransi A</option>
                                    <option value="asuransi-b">Asuransi B</option>
                                </select>
                            </div>
                        
                            <div class="form-group col-lg-12">
                                <label for="kondisi" class="form-label">Kondisi</label>
                                <select id="kondisi" name="kondisi" class="form-control">
                                    <option selected disabled>Pilih Kondisi</option>
                                    <option value="sembuh">Sembuh</option>
                                    <option value="sakit">Sakit</option>
                                    <option value="parah">Parah</option>
                                </select>
                            </div>
                        
                            <div class="form-group col-lg-12 mt-4">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </form>
                        

                        {{-- <p>For complete documentation, please visit <a href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a>.</p> --}}

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

@include('include.script')

</body>

</html>
