<x-global-layout>

    <!-- stylesheet -->
    <x-slot name="stylesheet">

    </x-slot>

    <!-- title -->
    <x-slot name="title">
        Dashboard
    </x-slot>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->         
        
        <!-- Main content -->
        <div class="content-tengah">
            <div class="container">

          <!-- Admin -->
              @if (\Auth::user()->roles == 1)
              <div class="container">
                <h4>Anda telah login menggunakan akun <b>{{Auth::user()->email}}</b>, Selamat Bekerja !!!</h4>
         </div>
                <div class="col-lg-15">
                    <div class="card card-primary  center">
                      <div class="row">
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-info">
                            <div class="inner">
                              <h3>150</h3>
                              <p>Jumlah Transaksi</p>
                            </div>
                            <div class="icon">
                              <i class="far fa-chart-bar"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                            <div class="inner">
                              <h3>53<sup style="font-size: 20px">%</sup></h3>
              
                              <p>Jumlah User</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-users"></i>
                            </div>
                            <a href="{{url('nasabah')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-warning">
                            <div class="inner">
                              <h3>150</h3>
              
                              <p>Transaksi Baru</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-exchange-alt"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-danger">
                            <div class="inner">
                             <h4>Buat Akun</h4>
                              <p></p>
                              <br>
                              <br>
                            </div>
                            <div class="icon">
                              <i class="fas fa-user-plus"></i>
                            </div>
                            <a href="{{route('nasabah.create')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                      </div>
                
        <!-- /.container-fluid -->
                      <div>
                        <iframe src="https://calendar.google.com/calendar/embed?src=id.indonesian%23holiday%40group.v.calendar.google.com&ctz=Asia%2FJakarta" style="border: 0" width="400" height="300" frameborder="0" scrolling="no"></iframe>
                      </div>
        @endif
        
        <!-- Nasabah-->
        @if (\Auth::user()->roles == 2)
        <div class="container">
               <h4>Hai Hai  <b>{{Auth::user()->name}}</b>, Selamat datang di Bank Sampah Samita</h4>
        </div>
        @endif
        
        <!-- Supervisor -->
        @if (\Auth::user()->roles == 3)
        <div class="container">
               <h4>Anda telah login menggunakan akun <b>{{Auth::user()->email}}</b>, Selamat Bekerja !!!</h4>
        </div>
        @endif

        <!-- Dewan Gereja -->
        @if (\Auth::user()->roles == 4)
        <div class="container">
          <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>
              <p>Jumlah Transaksi</p>
            </div>
            <div class="icon">
              <i class="far fa-chart-bar"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Jumlah User</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <a href="{{url('nasabah')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div> 
        </div>
        @endif


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
