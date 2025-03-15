<nav class="side-nav">
    <ul>
        <li>
            <a href="{{ route('admin.dashboard') }}" class="side-menu {{isset($page) ? $page =='homepage'? 'side-menu--active' : '' : ''}}">
                <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="side-menu__title"> Trang chủ </div>
            </a>
        </li>
        {{-- <li class="side-nav__devider my-6"></li> --}}
        <!-- Quản lý media -->
        <li>
            <a class="side-menu {{isset($page) ? ($page =='manage-media' || $page =='manage-image' || $page == 'manage-s3') ? 'side-menu--active' : '' : ''}}">
                <div class="side-menu__icon"> <i data-lucide="settings"></i> </div>
                <div class="side-menu__title">
                    Quản lý media
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{isset($page) ? ($page =='manage-media' || $page == 'manage-image' || $page == 'manage-s3') ? 'side-menu__sub-open' : '' : ''}}">
                <li>
                    <a href="{{ route('admin.media.image') }}" class="side-menu {{isset($page) ? $page =='manage-image'? 'side-menu--active' : '' : ''}}">
                        <div class="side-menu__icon"> <i data-lucide="book-open"></i> </div>
                        <div class="side-menu__title"> Quản lý hình ảnh </div>
                    </a>
                </li>
                <li>
                    <a href="" class="side-menu {{isset($page) ? $page =='manage-s3'? 'side-menu--active' : '' : ''}}">
                        <div class="side-menu__icon"> <i data-lucide="command"></i> </div>
                        <div class="side-menu__title"> Quản lý S3 </div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Cấu hình -->
    </ul>
</nav>
