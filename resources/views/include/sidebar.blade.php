{{-- Sidebar --}}


<div class="collapse navbar-collapse navbar-ex1-collapse min-vh-100">
    <ul class="nav navbar-nav side-nav">
        <li class="active">
            <a href="/"><i class="fa fa-fw fa-home"></i> Dashboard</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-user"></i> Pasien <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse ms-3">
                <li>
                    <a href="/form">Tambah Pasien</a>
                </li>
                <li>
                    <a href="{{ route('post.index') }}" >Daftar Pasien</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('obat.index') }}"><i class="fa fa-fw fa-medkit"></i> Stok Obat</a>
        </li>
        
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demi"><i class="fa fa-fw fa-user-md"></i> Tenaga Medis <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demi" class="collapse">
                <li>
                    <a href="{{ route('perawat.index') }}">Perawat</a>
                </li>
                <li>
                    <a href="{{ route('dokter.index') }}">Dokter</a>
                </li>
            </ul>
        </li>
    </ul>
</div>