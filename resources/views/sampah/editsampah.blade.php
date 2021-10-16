<x-global-layout>

    <!-- stylesheet -->
    <x-slot name="stylesheet">

    </x-slot>

    <!-- title -->
    <x-slot name="title">
        Edit Data Sampah
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
                <h3 aling="center" class="card-title">Edit Data Sampah</h3>
              </div>
              <div class="card-body">
              <form action="{{url('update',$sampah->id) }}" method="post" enctype="multipart/form-data">
               @csrf
                <div class="mb-3">
                    <label for="tambahsampah">Nama Sampah</label>
                    <input type="text" name="nama" class="form-control " id="tambahsampah" placeholder="Masukan nama sampah ..." value="{{$sampah->nama}}">
                </div>

                <div class="row">
                <div class="col-12 col-sm-8">
                
              <!-- /.col -->
              <div class="col-12 col-sm-8">
              <div class="col-12 col-sm-15">
                    <label  for="hargasampah">Harga Sampah /Kg</label>
                    <input type="number" name="harga" class="form-control " id="hargasampah" value="{{$sampah->harga}}">
                </div> 
                <!-- /.form-group -->
              </div>
                <!-- /.form-group -->
            </div>
            <div class="col-12 col-sm-8">
                    <button type="submit" class="btn btn-success"> Update Data </button>
                </div>
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
