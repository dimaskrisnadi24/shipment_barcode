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
                <h4>Anda telah login menggunakan akun <b>{{Auth::user()->email}}</b>, Selamat Melayani!!!</h4>
         </div>
                <div class="col-lg-15">
                  <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-info"><i class="far fa-chart-bar"></i></span>
        
                      <div class="info-box-content">
                        <span class="info-box-text">Data Transaksi</span>
                        <span class="info-box-number">1,410</span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                    <div class="card card-primary  center">
                      <div class="row">
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-info">
                            <div class="inner">
                              <h4>Data Transaksi</h4>
                              <p></p>
                              <br>
                              <br>
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
                              <h4>Jumlah User</h4>
                              <p></p>
                              <br>
                              <br>
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
                              <h4>Transaksi Baru</h4>
                              <p></p>
                              <br>
                              <br>
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

         <div class="col-lg-12">
                    <div class="card card-primary-center">
                      <div class="row">
                        <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-info">
                            <div class="inner">
                              <h4>Harga Sampah</h4>
                              <br>
                              <br>
                              <p>
                            </div>
                            <div class="icon">
                              <i class="far fa-chart-bar"></i>
                            </div>
                            <a href="{{route('hargasampah')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                            <div class="inner">
                              <H4>Jumlah Tabungan</h4>
                                <br>
                                <br>
                                <p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-university"></i>
                            </div>
                            <a href="{{url('nasabah')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                      
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-danger">
                            <div class="inner"> 
                             <h4>Transaksi</h4>
                             <br>
                             <br>
                             <p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-spinner"></i>
                            </div>
                            <a href="{{route('cetaklaporannasabah')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>

                @endif
        
        <!-- Supervisor -->
        @if (\Auth::user()->roles == 3)
        <div class="container">
               <h4>Anda telah login menggunakan akun <b>{{Auth::user()->email}}</b>, Selamat Melayani !!!</h4>
        </div>

        <div class="col-lg-12">
                    <div class="card card-primary">
                      <div class="row">
                        <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-info">
                            <div class="inner">
                              <h4>Update Data Sampah</h4>
                              <br>
                              <br>
                              <p>
                            </div>
                            <div class="icon">
                              <i class="far fa-chart-bar"></i>
                            </div>
                            <a href="{{route('sampah.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                            <div class="inner">
                              <H4>Laporan</h4>
                                <br>
                                <br>
                                <p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-university"></i>
                            </div>
                            <a href="{{url('nasabah')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>

                        <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-danger">
                            <div class="inner">
                              <H4>Setting Account</h4>
                                <br>
                                <br>
                                <p>
                            </div>
                            <div class="icon">
                              <i class="fas fa fa-cog"></i>
                            </div>
                            <a href="{{url('nasabah')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
        @endif

        <!-- Dewan Gereja -->
        @if (\Auth::user()->roles == 4)
        <div class="container">
          <div class="col-lg-12">
            <h4>Anda telah login menggunakan akun <b>{{Auth::user()->email}}</b>, Selamat Melayani !!!</h4>
            <div class="card card-primary">
              <div class="row">
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h4>Update Data Sampah</h4>
                      <br>
                      <br>
                      <p>
                    </div>
                    <div class="icon">
                      <i class="far fa-chart-bar"></i>
                    </div>
                    <a href="{{route('sampah.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <H4>Laporan</h4>
                        <br>
                        <br>
                        <p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-university"></i>
                    </div>
                    <a href="{{url('nasabah')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>

                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <H4>Setting Account</h4>
                        <br>
                        <br>
                        <p>
                    </div>
                    <div class="icon">
                      <i class="fas fa fa-cog"></i>
                    </div>
                    <a href="{{url('nasabah')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div> 
        </div>

        
        @endif

         <!-- Staff Bank Sampah Induk -->
         @if (\Auth::user()->roles == 5)
         <div class="container">
                <h4>Selamat Datang <b>{{Auth::user()->email}}</b></h4>
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
