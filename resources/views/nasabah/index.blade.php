<x-global-layout>

    <!-- stylesheet -->
    <x-slot name="stylesheet">

    </x-slot>

    <!-- title -->
    <x-slot name="title">
        Data Nasabah
    </x-slot>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Nasabah</a></li>
                            <li class="breadcrumb-item"><a href="#">Layout</a></li>
                            <li class="breadcrumb-item active">Top Navigation</li>
                        </ol> --}}
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="container">
       <div class="content">
       <div style="background;font-size: 30px; color: Black"> Data Nasabah Bank Samita
</div>
       <div class="card card-info card-outline">
       <div class="card-header">
       <div class="card-tools">
            <a href="{{url('tambahnasabah')}}" class="btn btn-success"> Tambah Nasabah <i class="fas fa-plus-square"></i></a>
        </div>
        </div>

        <div class= "card-body">
            <table class="table table-bordered">
            <thead>
            <tr>
                <th> Username</th>
                <th> Email</th>
                <th> Roles </th>
                <th> Password</th>
                <th> Alamat</th>
                <th> No Telepon</th>
                <th> Total Tabung Sampah</th>
                <th> Total Saldo</th>
                <th> Action </th>
            </tr>
            </thead>
            <tbody>
                    @foreach ($nasabah as $data)
                    <tr>
                    <td>{{ $data->name}}</td>
                    <td>{{ $data->email}}</td>
                    <td>{{ $data->roles}}</td>
                    <td>{{ $data->password}}</td>
                    <td>{{ $data->alamat}}</td>
                    <td>+62{{ $data->notelp}}</td>
                    <td>{{ $data->totalsampah}} Kg</td>
                    <td>Rp. {{ $data->totalsaldo}}</td>
                    <td>
                        <button type="submit" class="btn btn-warning">Edit</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
            </table>
        </div>
        </div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- script -->
    <x-slot name="script">

    </x-slot>

</x-global-layout>
