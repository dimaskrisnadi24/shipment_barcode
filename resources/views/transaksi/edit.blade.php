<x-global-layout>

    <!-- stylesheet -->
    <x-slot name="stylesheet">
        <link rel="stylesheet" href="{{asset('adminlte/custom/bootstrap-select/bootstrap-select.min.css')}}">
        <!-- Swal2 -->
        <script src="{{ asset('swal2/dist/sweetalert2.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('swal2/dist/sweetalert2.min.css') }}">
        <!-- DataTables -->
        <link rel="stylesheet"
            href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    </x-slot>

    <!-- title -->
    <x-slot name="title">
        Change or Die
    </x-slot>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Laundry Checklist <small></small></h1>
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
                            <div class="form-group">
                                
                                {{-- <a href="{{ url('laundrylist/print/'.$laundry->id) }}" class="btn btn-danger"><i class="fas fa-print"></i></a> --}}
                                
                            </div>
                            
                            <form action="{{ route('transaksi.store') }}" method="POST" id="frm">
                                @csrf
                            <input type="hidden" name="transaksi_id" value="{{ $transaksi->id }}">
                            
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-6">
                                        <label for="">Jenis Transaksi</label>
                                        <input type="text" class="form-control" value="{{ $transaksi->jenis_transaksi }}" readonly>
                                    </div>
                                    <div class="col-6">
                                        <label for="">Jumlah Timbangan</label>
                                        <input type="text" class="form-control" value="{{ $transaksi->jumlah }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Total Transaksi</label>
                                <input type="text" class="form-control" value="{{ $laundry->total_transaksi_item }}" readonly>
                            </div>
                            <hr>
                                <?php 
                                    $count = [];
                                    if(isset($transaksi_item)){
                                        foreach ($transaksi_item as $key => $li) {
                                        $count[] = $key;
                                ?> 
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-6">
                                                <select name="data_sampah[]" class="form-control jns_sampah inpt{{$key}}" data-live-search="true" onchange="inpt_required(this)">
                                                    <option value=""></option>
                                                    @foreach ($data_sampah as $lli)
                                                        <option value="{{ $lli->id }}" {{ ($lli->id == $li->data_sampah_id) ? 'selected' : '' }}>{{ $lli->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-5">
                                                <input type="number" name="qty_sampah[]" class="form-control inpt{{$key}}" placeholder="QTY" value="{{ $li->qty }}">
                                            </div>
                                            <div class="col-1">
                                                <input type="number" name="total_transaksi_item[]" class="form-control inpt{{$key}}" placeholder="QTY" value="{{ $li->total_transaksi_item }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                <?php } } 
                                    $sum_count = count($count);
                                ?>
                                
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-6">
                                            <select name="data_sampah[]" class="form-control jns_sampah inpt{{$sum_count += 1}}" data-live-search="true" onchange="inpt_required(this)">
                                                <option value=""></option>
                                                @foreach ($data_sampah as $lli)
                                                    <option value="{{ $lli->id }}">{{ $lli->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-5">
                                            <input type="number" name="qty_sampah[]" class="form-control inpt{{$sum_count}}" placeholder="QTY">
                                        </div>
                                        <div class="col-1">
                                            <input type="checkbox" name="total_transaksi_item[]" value="1" style="width: 20px; height: 20px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-6">
                                            <select name="data_sampah[]" class="form-control jns_sampah inpt{{$sum_count += 1}}" data-live-search="true" onchange="inpt_required(this)">
                                                <option value=""></option>
                                                @foreach ($data_sampah as $lli)
                                                    <option value="{{ $lli->id }}">{{ $lli->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-5">
                                            <input type="number" name="qty_sampah[]" class="form-control inpt{{$sum_count}}" placeholder="QTY">
                                        </div>
                                        <div class="col-1">
                                            <input type="checkbox" name="total_transaksi_item[]" value="1" style="width: 20px; height: 20px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-6">
                                            <select name="data_sampah[]" class="form-control jns_sampah inpt{{$sum_count += 1}}" data-live-search="true" onchange="inpt_required(this)">
                                                <option value=""></option>
                                                @foreach ($data_sampah as $lli)
                                                    <option value="{{ $lli->id }}">{{ $lli->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-5">
                                            <input type="number" name="qty_sampah[]" class="form-control inpt{{$sum_count}}" placeholder="QTY">
                                        </div>
                                        <div class="col-1">
                                            <input type="checkbox" name="total_transaksi_item[]" value="1" style="width: 20px; height: 20px;">
                                        </div>
                                    </div>
                                </div>
                                
                                <span id="form-laundry"></span>
                                
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-sm" id="send">
                                    <span class="btn btn-info btn-sm" id="btn-add-form">Tambah Form</span>
                                    <a href="{{ url('/transaksi') }}" class="btn btn-warning btn-sm">Kembali</a>
                                </div>
                                
                            </form>
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
        <!-- Latest compiled and minified JavaScript -->
        <script src="{{asset('adminlte/custom/bootstrap-select/bootstrap-select.min.js')}}"></script>
        <!-- Swal2 -->
        <script src="{{ asset('js/swal2.js') }}"></script>
        <!-- DataTables  & Plugins -->
        <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script type="text/javascript">
            $('#frm').bind('submit', function (e) {
                var button = $('#send');

                // Disable the submit button while evaluating if the form should be submitted
                button.prop('disabled', true);

                var valid = true;    

                // Do stuff (validations, etc) here and set
                // "valid" to false if the validation fails

                if (!valid) { 
                    // Prevent form from submitting if validation failed
                    e.preventDefault();

                    // Reactivate the button if the form was not submitted
                    button.prop('disabled', false);
                }
            });

            var counter = ( {{$sum_count}} + 1 );

            console.log(counter);

            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var lli = {!! json_encode($data_sampah->toArray(), JSON_HEX_TAG) !!};
                var dynamic = "";
                for (var i = 0; i < lli.length; i++){
                    dynamic += `<option value="${lli[i].id}">${lli[i].name}</option>`
                }
                $('.jns_pakaian').selectpicker();
                $('#btn-add-form').on('click',function(){
                    $('#form-laundry').append(`<div class="form-group">
                        <div class="form-row">
                            <div class="col-6">
                                <select name="jns_pakaian[]" class="form-control jns_pakaian inpt${counter}" data-live-search="true" onchange="inpt_required(this)">
                                    <option value=""></option>
                                    `+dynamic+`
                                </select>
                            </div>
                            <div class="col-5">
                                <input type="number" name="qty_pakaian[]" class="form-control inpt${counter}" placeholder="QTY">
                            </div>
                            <div class="col-1">
                                <input type="checkbox" name="total_transaksi_item[]" value="1" style="width: 20px; height: 20px;">
                            </div>
                        </div>
                    </div>`);
                    counter++;
                    $('.jns_pakaian').selectpicker();
                });
            });

            function inpt_required(that){
                var choosen = $(that).val();
                var inpt_class = $(that).attr('class').split(' ');
                
                if(choosen == '' || choosen == undefined || choosen == 0){
                    $('.'+inpt_class[2]).prop('required',false);
                } else {
                    $('.'+inpt_class[2]).prop('required',true);
                }
            }
         </script>
    </x-slot>

</x-global-layout>