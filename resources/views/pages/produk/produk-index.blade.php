@extends('layouts.app')
@section('konten')
    <div class="row">
        <div class="col">
            <div class="mb-2 card">
                <div class="card-header">

                    <div class="card-tools">
                        <div class="p-0 m-0 nav-item dropdown">
                            <a class="px-1 py-0 text-sm btn btn-default" data-toggle="dropdown" href="#"
                                aria-expanded="true">
                                <i class="fas fa-bars"></i>

                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right"
                                style="left: inherit; right: 0px;">
                                {{-- <div class="dropdown-divider"></div> --}}
                                <a href="{{ route('produklist.create') }}" class="dropdown-item">
                                    <i class="mr-2 fas fa-plus"></i> Tambah Produk
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="mr-2 fas fa-upload"></i> Import Produk
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="mr-2 fas fa-file-export"></i> Export Produk
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="mr-2 fas fa-barcode"></i> Cetak Barcode
                                </a>
                                {{-- <div class="dropdown-divider"></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 card-body">
                    <table id="produk-tables" class="table table-sm table-striped table-hover table-bordered">
                        <thead class="bg-lightblue">
                            <tr>
                                <th>#</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Satuan</th>
                                <th>Kategori</th>
                                <th>Merk</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Hpp</th>
                                <th>Alert</th>
                                <th class="w-auto">Action</th>
                            </tr>
                        </thead>
                    </table>
                    <div class="">

                        <div class="table table-sm">
                            {{-- {{ $dataTable->table() }} --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="/style/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/style/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/style/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    {{-- <script src="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css"></script> --}}
@endpush
@push('js')
    <!-- DataTables  & Plugins -->
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> --}}
    {{-- <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script> --}}
    <script src="/style/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/style/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/style/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/style/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    {{-- <script src="/style/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script> --}}
    {{-- <script src="/style/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script> --}}
    {{-- <script src="/style/plugins/jszip/jszip.min.js"></script> --}}
    {{-- <script src="/style/plugins/pdfmake/pdfmake.min.js"></script> --}}
    {{-- <script src="/style/plugins/pdfmake/vfs_fonts.js"></script> --}}
    {{-- <script src="/style/plugins/datatables-buttons/js/buttons.html5.min.js"></script> --}}
    {{-- <script src="/style/plugins/datatables-buttons/js/buttons.print.min.js"></script> --}}
    {{-- <script src="/style/plugins/datatables-buttons/js/buttons.colVis.min.js"></script> --}}

    {{-- {{ $dataTable->scripts(attributes: ['type' => 'module']) }} --}}

    <script type="text/javascript">
        $(function() {

            var table = $('#produk-tables').DataTable({
                processing: true,
                serverSide: true,
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,

                ajax: "{{ route('produklist.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        className: 'dt-body-center',
                        searchable: false,
                        orderable: false,
                    },
                    {
                        data: 'code',
                        name: 'code'
                    },
                    {
                        data: 'name',
                        name: 'name',
                        orderable: false,
                    },
                    {
                        data: 'satuan',
                        name: 'satuan',
                        orderable: false,
                    },
                    {
                        data: 'kategori',
                        name: 'kategori',
                        orderable: false,
                    },
                    {
                        data: 'merk',
                        name: 'merk',
                        orderable: false,
                    },
                    {
                        data: 'price',
                        name: 'price',
                        render: $.fn.dataTable.render.number(',', '.', 2, ''),
                        className: 'dt-body-right',
                        orderable: false,
                    },
                    {
                        data: 'quantity',
                        name: 'quantity',
                        render: $.fn.dataTable.render.number(',', '.', 0, ''),
                        className: 'dt-body-center',
                        orderable: false,
                    },
                    {
                        data: 'cost',
                        name: 'cost',
                        render: $.fn.dataTable.render.number(',', '.', 2, ''),
                        className: 'dt-body-right',
                        orderable: false,
                    },
                    {
                        data: 'alert_quantity',
                        name: 'alert_quantity',
                        render: $.fn.dataTable.render.number(',', '.', 0, ''),
                        className: 'dt-body-center',
                        orderable: false,
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

        });
    </script>
@endpush
