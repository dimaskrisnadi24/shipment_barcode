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
            <div class="justify-content-center">
                <div class="card-header jsutify-content-center">
                    <h3 aling="center" class="card-title">Laporan Data Sampah</h3>
                  </div>
                <div class= "card-body">
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
                    
                    </table>
                </div>
            </div>
            </div>
        </div>
        <script type="text/javascript">
        window.print();
        </script>
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
