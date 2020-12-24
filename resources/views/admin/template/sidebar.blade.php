<!--**********************************
            Sidebar start
***********************************-->
<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a href="{{url('/admin/dashboard')}}" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-label">User</li>
            <li>
                <a href="{{url('/admin/view')}}" aria-activedescendant="false">
                    <i class="icon-menu menu-icon"></i><span class="nav-text">Rekap Customer</span>
                </a>
            </li>
            <li class="nav-label">Produk</li>
            <li>
                <a class="has-arrow" href="{{url('/admin/kategori')}}" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Kategori</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./index.html">Tambah Kategori</a></li>
                    <li><a href="{{url('/admin/kategori')}}">Rekap Kategori</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="{{url('/admin/produk')}}" aria-expanded="false">
                    <i class="icon-grid menu-icon"></i><span class="nav-text">Produk</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./index.html">Tambah Produk</a></li>
                    <li><a href="{{url('/admin/produk')}}">Rekap Produk</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--**********************************
            Sidebar end
***********************************-->