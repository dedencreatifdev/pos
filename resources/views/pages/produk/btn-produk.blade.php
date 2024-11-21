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
        <a href="#" class="dropdown-item">
            <i class="mr-2 fas fa-trash"></i> Hapus Produk
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
    </div>
</div>
