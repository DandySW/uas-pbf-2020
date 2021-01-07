<!--**********************************
            Sidebar start
***********************************-->
<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a href="{{url('/admin/dashboard')}}" aria-expanded="false">
                    <i class="icon-home menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-label">User</li>
            <li>
                <a href="{{url('/admin/view-customers')}}" aria-activedescendant="false">
                    <i class="icon-people menu-icon"></i><span class="nav-text">Rekap Customer</span>
                </a>
            </li>
            <li class="nav-label">Produk</li>
            <li>
                <a href="{{url('/admin/categories')}}" aria-activedescendant="false">
                    <i class="icon-list menu-icon"></i><span class="nav-text">Rekap Kategori</span>
                </a>
            </li>
            <li>
                <a href="{{url('/admin/products')}}" aria-activedescendant="false">
                    <i class="icon-basket menu-icon"></i><span class="nav-text">Rekap Produk</span>
                </a>
            </li>
            <li class="nav-label">Artikel</li>
            <li>
                <a href="{{url('/admin/blogs')}}" aria-activedescendant="false">
                    <i class="icon-list menu-icon"></i><span class="nav-text">Rekap Artikel</span>
                </a>
            </li>
            <li class="nav-label">Order</li>
            <li>
                <a href="{{url('/admin/detailorder')}}" aria-activedescendant="false">
                    <i class="icon-list menu-icon"></i><span class="nav-text">Rekap Order</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!--**********************************
            Sidebar end
***********************************-->