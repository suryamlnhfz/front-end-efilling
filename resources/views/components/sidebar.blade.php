
<div class="container-fluid">
    <div id="two-column-menu">
    </div>
    <ul class="navbar-nav" id="navbar-nav">


        <li class="nav-item">
            <a href="{{ url('dashboard') }}" class="nav-link menu-link @if (request()->is('dashboard'))
                active
            @endif"> <i class="ph-gauge"></i> <span
                    data-key="t-calendar">Dashboard</span> </a>
        </li>
    </ul>
</div>
