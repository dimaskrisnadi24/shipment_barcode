<x-global-layout>

    <!-- stylesheet -->
    <x-slot name="stylesheet">
        <!-- Swal2 -->
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
        Transaksi 
    </x-slot>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Transaksi Bank Sampah Samita</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        {{-- <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Layout</a></li>
                            <li class="breadcrumb-item active">Top Navigation</li>
                        </ol> --}}
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <div class="card-tools">
                                <a href="{{url('tambahtransaksi')}}" class="btn btn-success"> Transaksi Baru <i class="fas fa-plus-square"></i></a>
                            </div>
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis Transaksi</th>
                                            <th>Jumlah Timbangan</th>
                                            <th>Total Transaksi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>

            </div><!-- /.container-fluid -->
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
        <!-- Swal2 -->
        <script src="{{ asset('js/swal2.js') }}"></script>
        <!-- Daterange picker -->
        <script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.js') }}"></script>
        <script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <!-- DataTables  & Plugins -->
        <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                fill_datatable();

                function fill_datatable() {
                    let dataTable = $('#example1').DataTable({
                        processing: true,
                        serverSide: true,
                        order: [
                            [2, 'desc']
                        ],
                        ajax: {
                            url: SITE_URL + '/transaksi_json',
                        },
                        columns: [
                            {
                                data: 'DT_RowIndex',
                                name: 'DT_RowIndex',
                                orderable: false,
                                searchable: false
                            },
                            {
                                data: 'jenis_transaksi',
                                name: 'jenis_transaksi'
                            },
                            {
                                data: 'jumlah',
                                name: 'jumlah'
                            },
                            {
                                data: 'total_transaksi',
                                name: 'total_transaksi'
                            },
                            {
                                data: 'action',
                                name: 'action',
                                orderable: false,
                                searchable: false
                            },
                        ],
                        
                    });
                }
            });
         </script>
    </x-slot>

</x-global-layout>