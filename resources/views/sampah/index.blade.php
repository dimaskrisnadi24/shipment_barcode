<x-global-layout>

    <!-- stylesheet -->
    <x-slot name="stylesheet">
        <script src="{{ asset('swal2/dist/sweetalert2.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('swal2/dist/sweetalert2.min.css') }}">
        <!-- daterange picker -->
        <link rel="stylesheet" href="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.css') }}">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet"
            href="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('adminlte/custom/bootstrap-select/bootstrap-select.min.css') }}">
        <!-- DataTables -->
        <link rel="stylesheet"
            href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
   
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
                       
                        <div class="col-sm-6">
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
                    <td>Rp. {{ $data->harga}}</td>
                    <td>{{ $data->jenis}}</td>
                    <td>
                        <a href="{{url('edit',$data->id)}}" class="far fa-edit"></a>
                    
                        <a href="{{url('delete',$data->id)}}" class="far fa-trash-alt " style="color:red"></a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
            </table>
        </div>
            <div class="card-footer">
                {{ $sampah->links()}}

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
