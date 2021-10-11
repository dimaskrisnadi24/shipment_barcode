<x-global-layout>

    <!-- stylesheet -->
    <x-slot name="stylesheet">

    </x-slot>

    <!-- title -->
    <x-slot name="title">
        Data Sampah
    </x-slot>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Sampah</a></li>
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
       <div style="background;font-size: 30px; color: Black"> Data Sampah Bank Samita
</div>
       <div class="card card-info card-outline">
       <div class="card-header">
       <div class="card-tools">
            <a href="{{url('tambahsampah')}}" class="btn btn-success"> Tambah Data Sampah <i class="fas fa-plus-square"></i></a>
        </div>
        </div>

        <div class= "card-body">
            <table class="table table-bordered">
            <thead>
            <tr>
                <th> ID Sampah </th>
                <th> Nama Sampah</th>
                <th> Harga Sampah</th>
                <th> Jenis Sampah</th>
                <th> Action </th>
            </tr>
            </thead>
            <tbody>
                    @foreach ($sampah as $data)
                    <tr>
                    <td>{{ $data->id}}</td>
                    <td>{{ $data->nama}}</td>
                    <td>{{ $data->harga}}</td>
                    <td>{{ $data->jenis}}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Update</a>
                        <a href="" class="btn btn-sm btn-danger"> Delete</a>
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
