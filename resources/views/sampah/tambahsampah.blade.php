<x-global-layout>

    <!-- stylesheet -->
    <x-slot name="stylesheet">

    </x-slot>

    <!-- title -->
    <x-slot name="title">
        Tambah Data Sampah
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
                <h3 aling="center" class="card-title">Tambah Data Sampah</h3>
              </div>
              <div class="card-body">
              <form action="/insertdata" method="post" enctype="multipart/form-data">
               @csrf
                <div class="mb-3">
                    <label for="tambahsampah">Nama Sampah</label>
                    <input type="text" name="nama" class="form-control " id="tambahsampah" placeholder="Masukan nama sampah ...">
                </div>

                <div class="row">
                <div class="col-12 col-sm-8">
                <div class="form-group">
                  <label>Jenis Sampah</label>
                  <select class="form-control" name="jenis">
                    <option selected>Pilih Jenis Sampah </option>
                    <option value="plastik">Plastik</option>
                    <option value="kaca">Kaca</option>
                    <option value="kertas">kertas</option>
                    <option value="kaleng">Kaleng</option>
                    <option value="aki">Aki</option>
                    </select>
                </div>
                </div>
              <!-- /.col -->
              <div class="col-12 col-sm-8">
              <div class="mb-3">
                    <label  for="hargasampah">Harga Sampah /Kg</label>
                    <input type="number" name="harga" class="form-control " id="hargasampah" placeholder="Masukan nama sampah ...">
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
