{{-- {{ $row->id }} --}}
<div class="p-0 m-0 nav-item dropdown">
    <a class="px-1 py-0 text-sm btn btn-xs btn-default" data-toggle="dropdown" href="#" aria-expanded="true">
        <i class="mr-1 far fa-file"></i>
        Action
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
        <span class="dropdown-header">Aksi</span>
        <div class="dropdown-divider"></div>
        <a href="{{ route('produklist.create') }}" class="dropdown-item">
            <i class="mr-2 fas fa-envelope"></i> Tambah Produk
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <i class="mr-2 fas fa-edit"></i> Ubah Produk
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <i class="mr-2 fas fa-file"></i> Detail Produk
        </a>
        <div class="dropdown-divider"></div>
        <a data-toggle="modal" data-target="#modal-sm" class="dropdown-item">
            <i class="mr-2 fas fa-trash"></i> Hapus Produk
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
    </div>
</div>

<div class="modal fade" id="modal-sm">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="" method="post">

                <div class="modal-header">
                    {{-- <h4 class="modal-title">Small Modal</h4> --}}
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{-- <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div> --}}
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-danger">Save changes</button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
