<x-global-layout>

    <!-- stylesheet -->
    <x-slot name="stylesheet">

    </x-slot>

    <!-- title -->
    <x-slot name="title">
        Cetak Laporan Data Sampah
    </x-slot>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
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
            <div class="text-center" style="background;font-size: 50px; color: Black"> Laporan Data Sampah Bank Samita
             </div>
            <div class="card card-info card-outline">
            <div class="card-header">
             </div>
     
            
                
                 <!-- /.card-header -->
                 <div class="card-body">
                   <table class="table table-bordered">
                    <tr>
                        <th> ID Sampah </th>
                        <th> Nama Sampah</th>
                        <th> Jenis Sampah</th>
                        <th> Harga Sampah</th>
                    </tr>
                    @foreach ($sampah as $data)
                    <tr>
                        <td>{{ $data->id}}</td>
                        <td>{{ $data->nama}}</td>
                        <td>{{ $data->jenis}}</td>
                        <td>Rp.{{ $data->harga}}</td>
                    </tr>    
                    @endforeach
                     </tbody>
                   </table>
                 </div>
           
            </div>
        </div>
       
    <!-- /.content-wrapper -->

    <style>   
        @media print
        {
        .noprint {display:none;}
        }
    </style>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- script -->
    <x-slot name="script">

    </x-slot>

</x-global-layout>
