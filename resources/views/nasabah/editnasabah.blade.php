<x-global-layout>

    <!-- stylesheet -->
    <x-slot name="stylesheet">

    </x-slot>

    <!-- title -->
    <x-slot name="title">
        Edit Data Nasabah
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
        <div class="card card-primary col-sm-6">
              <div class="card-header">
                <h3 aling="center" class="card-title col-sm-6">Tambah Data Nasabah</h3>
              </div>
              <div class="card-body">
              <form action="{{url('nasabahupdate',$nasabah->id)}}" method="post" enctype="multipart/form-data">
               @csrf
                
               <div class="col-12 col-sm-12">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control " id="name" value="{{$nasabah->name}}">
                </div>

            
                <div class="row">
                    <div class="col-6">
                    <label for="email">Email</label>
                    <input type="varchar" name="email" class="form-control " id="email" value="{{$nasabah->email}}">
                    </div>

                    <div class="col-4">
                    <label for="roles">Roles</label>
                    <input type="number" name="roles" class="form-control " id="roles" value="{{$nasabah->roles}}">
                    </div>
                </div>

                <div class="col-12 col-sm-12">
                    <label for="alamat">Alamat</label>
                    <input type="varchar" name="alamat" class="form-control " id="alamat" value="{{$nasabah->alamat}}">
                </div>

                <div class="col-12 col-sm-8">
                    <label for="notelp">Nomor Telpon</label>
                    <input type="number" name="notelp" class="form-control " id="notelp" value="{{$nasabah->notelp}}">
                </div>
            
                    
                <th></th>
                    <button type="submit" class="btn btn-success col-5"> Update Data </button>
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
