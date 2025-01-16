
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
                            Tables
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
                        <h2>Daftar Pasien </h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        {{-- <th>ID Pasien</th> --}}
                                        <th>NIK</th>
                                        <th>Nama Pasien</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Penyakit</th>
                                        <th>Kondisi</th>
                                        <th>Asuransi </th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($pasien) && $pasien->isNotEmpty())
                                    @foreach ($pasien as $pasien)
                                    <tr>
                                        
                                        <td>{{ $pasien->NIK }}</td>
                                        <td>{{ $pasien->nama_pasien }}</td>
                                        <td>{{ $pasien->tanggal_lahir }}</td>
                                        <td>{{ $pasien->alamat }}</td>
                                        <td>{{ $pasien->jenis_kelamin }}</td>
                                        <td>{{ $pasien->penyakit }}</td>
                                        <td>{{ $pasien->asuransi }}</td>
                                        <td>{{ $pasien->kondisi }}</td>
                                        <td class="text-center row">
                                            
                                            <a href="{{ route('post.edit', $pasien->id) }}" class="btn btn-primary btn-sm col-12">Edit</a>
                                        
                                            <form action="{{ route('post.destroy', $pasien->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <input type="submit" value="Hapus" class="btn btn-danger btn-sm col-12">
                                            </form>

                                        </td>
                                    </tr>
                                       
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>

                           

                            {{-- <a href="{{ route('post.index') }}" class="btn btn-primary">Kembali ke Daftar Pasien</a> --}}
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
