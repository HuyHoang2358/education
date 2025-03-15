<nav class="side-nav">
    <ul>
        <li>
            <a href="{{ route('admin.dashboard') }}"
                class="side-menu {{ isset($page) ? ($page == 'homepage' ? 'side-menu--active' : '') : '' }}">
                <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="side-menu__title"> Trang chủ </div>
            </a>
        </li>
        {{-- <li class="side-nav__devider my-6"></li> --}}

        <!--Nhóm người dùng-->
        @include('admin.partials.common.sideMenuItems', [
            'page' => isset($page) ? $page : '',
            'pageTags' => [
                [
                    'manage-account' => [
                        'display' => 'Quản lý tài khoản',
                        'icon' => 'users',
                        'route' => 'account.index',
                    ],
                ],
                [
                    'manage-role' => [
                        'display' => 'Quản lý vai trò',
                        'icon' => 'coffee',
                        'route' => 'role.index',
                    ],
                ],
                [
                    'manage-permission' => [
                        'display' => 'Quản lý quyền',
                        'icon' => 'key',
                        'route' => '',
                    ],
                ],
            ],
        ])

        <!--Nhóm danh mục-->
        @include('admin.partials.common.sideMenuItems', [
            'page' => isset($page) ? $page : '',
            'pageTags' => [
                [
                    'manage-category' => [
                        'display' => 'Quản lý danh mục',
                        'icon' => 'folder',
                        'route' => '',
                    ],
                ],
                [
                    'manage-specility' => [
                        'display' => 'Quản lý chuyên đề',
                        'icon' => 'star',
                        'route' => '',
                    ],
                ],
                [
                    'manage-subject' => [
                        'display' => 'Quản lý môn học',
                        'icon' => 'book',
                        'route' => '',
                    ],
                ],
                [
                    'manage-tags' => [
                        'display' => 'Quản lý tags',
                        'icon' => 'tag',
                        'route' => '',
                    ],
                ],
            ],
        ])

        <!--Nhóm dữ liệu-->
        @include('admin.partials.common.sideMenuItems', [
            'page' => isset($page) ? $page : '',
            'pageTags' => [
                [
                    'manage-data' => [
                        'display' => 'Quản lý dữ liệu',
                        'icon' => 'database',
                        'route' => '',
                    ],
                ],
                [
                    'question-bank' => [
                        'display' => 'Ngân hàng câu hỏi',
                        'icon' => 'briefcase',
                        'route' => '',
                    ],
                ],
                [
                    'survey' => [
                        'display' => 'Khảo sát khách hàng',
                        'icon' => 'file-text',
                        'route' => '',
                    ],
                ],
                [
                    'manage-class' => [
                        'display' => 'Quản lý lớp học',
                        'icon' => 'codepen',
                        'route' => '',
                    ],
                ],
                [
                    'manage-contest' => [
                        'display' => 'Quản lý cuộc thi',
                        'icon' => 'activity',
                        'route' => '',
                    ],
                ],
                [
                    'manage-abroad' => [
                        'display' => 'Quản lý du học',
                        'icon' => 'framer',
                        'route' => '',
                    ],
                ]
            ],
        ])

        <!--Nhóm media-->
        @include('admin.partials.common.sideMenuItems', [
            'page' => isset($page) ? $page : '',
            'pageTags' => [
                [
                    'manage-media' => [
                        'display' => 'Quản lý media',
                        'icon' => 'tablet',
                        'route' => ''
                    ],
                ],
                [
                    'manage-image' => [
                        'display' => 'Quản lý hình ảnh',
                        'icon' => 'image',
                        'route' => 'admin.media.image',
                    ],
                ],
                [
                    'manage-S3' => [
                        'display' => 'Quản lý S3',
                        'icon' => 'globe',
                    ],
                ]
            ],
        ])

        <!--Nhóm hệ thống-->
        @include('admin.partials.common.sideMenuItems', [
            'page' => isset($page) ? $page : '',
            'pageTags' => [
                [
                    'system-config' => [
                        'display' => 'Cấu hình hệ thống',
                        'icon' => 'monitor'
                    ],
                ],
                [
                    'manage-partner' => [
                        'display' => 'Quản lý đối tác',
                        'icon' => 'aperture',
                        'route' => ''
                    ],
                ],
                [
                    'manage-district' => [
                        'display' => 'Danh sách tỉnh, thành phố',
                        'icon' => 'anchor',
                        'route' => 'admin.media.image',
                    ],
                ],
                [
                    'manage-survey-form' => [
                        'display' => 'Quản lý form khảo sát',
                        'icon' => 'globe',
                    ],
                ],
                [
                    'manage-setting' => [
                        'display' => 'Quản lý form khảo sát',
                        'icon' => 'file-text',
                    ],
                ]
            ],
        ])

    </ul>
</nav>
