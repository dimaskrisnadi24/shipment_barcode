<x-global-layout>

    <!-- stylesheet -->
    <x-slot name="stylesheet">

    </x-slot>

    <!-- title -->
    <x-slot name="title">
        Cetak Laporan Data Nasabah
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
             <div class="card-header">
            <div class="card-tools ">
                <div class="noprint">
                 <a class="btn btn-danger" onclick="window.print();"> Cetak Disini <i class="fas fa-print"></i></a>
             </div>
            </div>
            <div class="content">
                <img src="{{asset('adminlte/dist/img/samita.png')}}" alt="Samita" style="opacity: 1.0">
            <div class="text-center" style="background;font-size: 50px; color: Black"> Laporan Data Nasabah Bank Samita</div>
       <div class="card card-info card-outline">
       <div class="card-header">
        </div>           
        <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($nasabah as $data)
                    <tr>
                    <td>{{ $data->name}}</td>
                    <td>{{ $data->email}}</td>
                    <td>{{ $data->alamat}}</td>
                    <td>+62{{ $data->notelp}}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->       
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <style>   
        @media print
        {
        .noprint {display:none;}
        }
    </style>
    <!-- script -->
    <x-slot name="script">

    </x-slot>

</x-global-layout>
