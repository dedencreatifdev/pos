@extends('layouts.app')
@section('konten')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="p-1 card-body">

                    <table id="example1" class="table table-sm table-bordered table-striped">
                        <thead class="bg-primary">
                            <tr>
                                <th>#</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Satuan</th>
                                {{-- <th>Kategori</th>
                                <th>Merk</th>
                                <th>Harga Jual</th>
                                <th>Stok</th>
                                <th>Harga Beli</th>
                                <th>Alert</th> --}}
                            </tr>
                        </thead>

                    </table>
                    <div class="table table-sm table-responsive">
                        {{-- {{ $dataTable->table() }} --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- DataTables -->
<link rel="stylesheet" href="/style/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/style/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/style/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@push('css')
@endpush
@push('js')
    <!-- DataTables  & Plugins -->
    <script src="/style/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/style/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/style/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/style/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/style/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/style/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/style/plugins/jszip/jszip.min.js"></script>
    <script src="/style/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/style/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/style/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/style/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/style/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    {{-- {{ $dataTable->scripts(attributes: ['type' => 'module']) }} --}}

    <script type="text/javascript">
        $(function() {

            var table = $('#example1').DataTable({
                processing: true,
                serverSide: true,
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,

                ajax: "{{ route('produk.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
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
