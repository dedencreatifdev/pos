@extends('layouts.app')
@section('konten')
    <div class="row">
        <div class="col">
            <div class="mb-2 card">
                <div class="card-header">

                </div>
                <div class="p-1 card-body">
                    <table id="produk-tables" class="table table-sm table-striped">
                        <thead class="bg-primary">
                            <tr>
                                {{-- <th>#</th> --}}
                                <th>Code</th>
                                <th>Name</th>
                                <th>Satuan</th>
                                <th>Kategori</th>
                                <th>Merk</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Hpp</th>
                                <th>Alert</th>
                                <th>Action</th>
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

                ajax: "{{ route('produk.index') }}",
                columns: [{
                        data: 'code',
                        name: 'code'
                    },
                    {
                        data: 'name',
                        name: 'name'
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
