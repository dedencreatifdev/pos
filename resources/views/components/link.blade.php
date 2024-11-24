<li class="nav-item {{ $active }}">
    <a href="#" class="nav-link {{ $activelink }}">
        <i class="nav-icon fas {{$icon}}"></i>
        <p>
            {{ $slot }}
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">6</span>
        </p>
    </a>
    <ul class="nav nav-treeview">
        {{ $menu }}
    </ul>
</li>
