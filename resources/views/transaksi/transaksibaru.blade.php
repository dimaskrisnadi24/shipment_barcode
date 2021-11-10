<x-global-layout>

    <!-- stylesheet -->
    <x-slot name="stylesheet">

    </x-slot>

    <!-- title -->
    <x-slot name="title">
        Transaksi Baru
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
        <div class="row justify-content-center">
        <div class="card card-primary">
              <div class="card-header">
                <h3 aling="center" class="card-title">Transaksi Baru</h3>
              </div>
              <div class="card-body">
              <form action="/transaksibaru" method="post" enctype="multipart/form-data">
               @csrf
                <div class="mb-3">
                    <label for="tambahsampah">Id Nasabah</label>
                    <input type="INT" name="id_nasabah" class="form-control " id="id_nasabah">
                </div>

                <div class="row">
                <div class="col-12 col-sm-8">
                <div class="form-group">
                  <label>Jenis Transaksi</label>
                  <select class="form-control" name="jenis">
                    <option value="1">Setor</option>
                    <option value="2">Tarik</option>
                    </select>
                </div>
                </div>
              <!-- /.col -->
              <div class="col-12 col-sm-8">
              <div class="mb-3">
                    <label  for="jumlah_timbangan">Jumlah Timbangan</label>
                    <input type="number" name="jumlah" class="form-control " id="jumlah" placeholder="Masukan jumlah timbangan ...">
                </div>
                <!-- /.form-group -->
              </div>
                <!-- /.form-group -->
                </div>
            <div class="col-12 col-sm-8">
                    <button type="submit" class="btn btn-success"> Simpan Data </button>
                </div>
                
              </div>
              <!-- /.col -->
           
                </form>
        <!-- /.content-->
         </div>
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
