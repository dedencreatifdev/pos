{{-- {{ $row->id }} --}}
<div class="nav-item dropdown m-0 p-0">
    <a class="nav-link m-0 p-0" data-toggle="dropdown" href="#" aria-expanded="true">
        <i class="far fa-bell"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
        <span class="dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="{{route('produklist.create')}}" class="dropdown-item">
            <i class="mr-2 fas fa-envelope"></i> Tambah
            <span class="float-right text-sm text-muted">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <i class="mr-2 fas fa-users"></i> 8 friend requests
            <span class="float-right text-sm text-muted">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <i class="mr-2 fas fa-file"></i> 3 new reports
            <span class="float-right text-sm text-muted">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
    </div>
</div>
