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
                <a href="{{ route('dokter.create') }}" class="btn btn-primary btn-sm col-12">Tambah</a>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID dokter</th>
                                        <th>Nama dokter</th>
                                        <th>poli</th>
                                        <th>kontak</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($dokter) && $dokter->isNotEmpty())
                                    @foreach ($dokter as $dokter)

                                    <tr>
                                        <td> {{ $dokter->id }} </td>
                                        <td> {{ $dokter->nama_dokter }} </td>
                                        <td> {{ $dokter->poli }} </td>
                                        <td> {{ $dokter->kontak }} </td>
                                        <td class="text-center row">
                                            
                                            <a href="{{ route('dokter.edit', $dokter->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            
                                            <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <input type="submit" value="Hapus" class="btn btn-danger btn-sm ">
                                            </form>
                                            

                                        </td>
                                    </tr>
                                    

                                    @endforeach
                                    @endif
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
