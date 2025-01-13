<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    @include('include.style')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    

</head>

<body class="">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                            Dokter
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Daftar Dokter</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Dokter</th>
                                        <th>Nama Dokter</th>
                                        <th>Poli</th>
                                        <th>Spesialisasi</th>
                                        <th>Kontak</th>
                                        <th>Kehadiran</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>00012</td>
                                        <td>Dr. Arif Nugroho, Sp.PD</td>
                                        <td>Poli Penyakit Dalam</td>
                                        <td>Dokter Spesialis Penyakit Dalam</td>
                                        <th>dr.arif.nugroho@hospital.com | +62 811 2345 6789</th>
                                        <td>Hadir</td>
                                        <td class="text-center">
                                            <i class="bi bi-pencil-square" style="font-size: 1.5rem; cursor: pointer;"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>00013</td>
                                        <td>Dr. Siti Rahmawati, Sp.OG</td>
                                        <td>Poli Kandungan</td>
                                        <td>Dokter Spesialis Obstetri dan Ginekologi</td>
                                        <th>dr.siti.rahmawati@hospital.com | +62 813 4567 8901</th>
                                        <td>Hadir</td>
                                        <td class="text-center">
                                            <i class="bi bi-pencil-square" style="font-size: 1.5rem; cursor: pointer;"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>00014</td>
                                        <td>Dr. Budi Santoso, Sp.B</td>
                                        <td>Poli Bedah</td>
                                        <td>Dokter Spesialis Bedah</td>
                                        <th>dr.budi.santoso@hospital.com | +62 812 3456 7890</th>
                                        <td>-</td>
                                        <td class="text-center">
                                            <i class="bi bi-pencil-square" style="font-size: 1.5rem; cursor: pointer;"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    @include('include.script')

</body>

</html>