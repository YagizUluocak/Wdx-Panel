<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'AdminLTE 3',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    |
    | Here you can allow or not the use of external google fonts. Disabling the
    | google fonts may be useful if your admin panel internet access is
    | restricted somehow.
    |
    | For detailed instructions you can look the google fonts section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>WDX</b> Panel',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Admin Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can setup an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    | For detailed instructions you can look the auth logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    |
    | Here you can change the preloader animation configuration. Currently, two
    | modes are supported: 'fullscreen' for a fullscreen preloader animation
    | and 'cwrapper' to attach the preloader animation into the content-wrapper
    | element and avoid overlapping it with the sidebars and the top navbar.
    |
    | For detailed instructions you can look the preloader section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => true,
        'mode' => 'fullscreen',
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'AdminLTE Preloader Image',
            'effect' => 'animation__shake',
            'width' => 60,
            'height' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-light-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:

        [
            'type' => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:

        [
            'text' => 'Anasayfa',
            'url' => 'admin/home',
            'icon' => 'fa-solid fa-house',

        ],
        //Site Yönetimi
        [
            'text' => 'Site Yönetimi',
            'icon' => 'fa-solid fa-gear',
            'submenu' => [
                [
                    'text' => 'Genel Ayarlar',
                    'url' => 'admin/genel-ayar',
                ],
                [
                    'text' => 'Açılır Mesaj',
                    'url' => 'admin/popup',
                ],
                [
                    'text' => 'Api Ayarları',
                    'url' => 'admin/api-ayarlar',
                ],
                [
                    'text' => 'İletişim Ayarları',
                    'url' => 'admin/iletisim-ayarlari',
                ],
                [
                    'text' => 'Sosyal Medya Ayarları',
                    'url' => 'admin/sosyal-medya-ayarlari',
                ],
                [
                    'text' => 'Modül Ayarları',
                    'url' => 'admin/modul-ayarlari',
                ],
                [
                    'text' => 'Anasayfa Modül Sıralama',
                    'url' => 'admin/anasayfa-modul-sirasi',
                ],
                [
                    'text' => 'Limit Ayarları',
                    'url' => 'admin/limit-ayarlari',
                ],
                [
                    'text' => 'Site Bakım Modu',
                    'url' => 'admin/bakim-modu',
                ],
                [
                    'text' => 'Mail Ayarları',
                    'url' => 'admin/mail-ayar',
                ],
                [
                    'text' => 'Sms Ayarları',
                    'url' => 'admin/sms-ayar',
                ],
                [
                    'text' => 'Arka Plan Görselleri',
                    'url' => 'admin/arkaplan-gorselleri',
                ]           
                ],               
        ], 
        //Site Yönetimi Sonu

        //Dil Yönetimi
        [
            'text' => 'Dil Yönetimi',
            'icon' => 'fa-solid fa-globe',
            'submenu' => 
            [
                [
                    'text' => 'Yeni Dil Ekle',
                    'url' =>'admin/dil-ekle',

                ],   
                [              
                    'text' => 'Dil Listesi',
                    'url' =>'admin/dil-liste',
                ]
            ],
        ],
        //Dil Yönetimi sonu

        //Menü Ayarları
        [
            'text' => 'Menü Yönetimi',
            'icon' => 'fa-solid fa-bars',
            'submenu' => [
                [
                    'text' => 'Header Menü',
                    'url' => '#',
                ],
                [
                    'text' => 'Footer Menü',
                    'url' => '#',
                ],
                [
                    'text' => 'Sabit Linkler',
                    'url' => '#',
                ],
            ],
        ],
        //Menü Ayarları Sonu

        ['header' => 'İçerik Yönetimi'],

        // Ürün Ayarları
        [
            'text' => 'Ürün Yönetimi',
            'icon' => 'fas fa-box',
            'submenu' => [
                [
                    'text' => 'Ürün Ekle',
                    'url' => 'admin/urun/create',
                ],
                [
                    'text' => 'Ürün Listesi',
                    'url' => 'admin/urun',
                ],
                [
                    'text' => 'Ürün Kategorileri',
                    'icon' => 'fa-solid fa-list',
                    'submenu' => [
                        [
                            'text' => 'Kategori Listele',
                            'url' => 'admin/kategori',
                        ],
                        [
                            'text' => 'Kategori Ekle',
                            'url' => 'admin/kategori/create',
                        ],
                    ]
                ]
            ],

        ],
        // Ürün Ayarları Sonu

        //Proje yönetimi
        [
            'text' => 'Proje Yönetimi',
            'icon' => 'fas fa-tasks',
            'submenu' => [
                [
                    'text' => 'Proje Listesi',
                    'url' => 'admin/proje',
                ],
                [
                    'text' => 'Proje Ekle',
                    'url' => 'admin/proje/create',
                ],
            ],
        ],
        //Proje yönetimi Sonu


        //Paket Yönetimi
        [
            'text' => 'Paket Yönetimi',
            'icon' => 'fa-solid fa-rocket',
            'submenu' => [
                [
                    'text' => 'Paket Listesi',
                    'url' => 'admin/paket',
                ],
                [
                    'text' => 'Paket Ekle',
                    'url' => 'admin/paket/create',
                ],
            ],
        ],
        //Paket Yönetimi Sonu


        //Sayfa Yönetimi
        [
            'text' => 'Sayfa Yönetimi',
            'icon' => 'fa-regular fa-file',
            'submenu' => [
                [
                    'text' => 'Yeni Sayfa Ekle',
                    'url' => 'admin/sayfa/create',
                ],
                [
                    'text' => 'Sayfa Listesi',
                    'url' => 'admin/sayfa',
                ],
            ],
        ],
        //Sayfa Yönetimi Sonu

     
        //Hizmet Yönetimi
        [
            'text' => 'Hizmet Yönetimi',
            'icon' => 'fas fa-concierge-bell',
            'submenu' => [
                [
                    'text' => 'Yeni Hizmet Ekle',
                    'url' => 'admin/hizmet/create',
                ],
                [
                    'text' => 'Hizmet Listesi',
                    'url' => 'admin/hizmet',
                ],
            ],
        ],
        //Hizmet Yönetimi Sonu



        //S.S.S Yönetimi
        [
            'text' => 'S.S.S',
            'icon' => 'fas fa-question-circle',
            'submenu' => [
                [
                    'text' => 'Soru Listesi',
                    'url' => 'admin/soru',
                ],
                [
                    'text' => 'Yeni Soru Ekle',
                    'url' => 'admin/soru/create',
                ],
            ],
        ],
        //S.S.S Yönetimi Sonu



        //Referans Yönetimi
        [
            'text' => 'Referans Yönetimi',
            'icon' => 'fas fa-link',
            'submenu' => [
                [
                    'text' => 'Yeni Referans Ekle',
                    'url' => 'admin/referans/create',
                ],
                [
                    'text' => 'Referans Listesi',
                    'url' => 'admin/referans',
                ],
            ],
        ],
        //Referans Yönetimi Sonu


        //Belge Yönetimi
        [
            'text' => 'Belge Yönetimi',
            'icon' => 'fas fa-file-alt',
            'submenu' => [
                [
                    'text' => 'Yeni Belge Ekle',
                    'url' => 'admin/belge/create',
                ],
                [
                    'text' => 'Belge Listesi',
                    'url' => 'admin/belge',
                ],
            ],
        ],
        //Belge Yönetimi Sonu


        //E-Katalog Yönetimi
        [
            'text' => 'E-Katalog Yönetimi',
            'icon' => 'fa-solid fa-folder',
            'submenu' => [
                [
                    'text' => 'Katalog Ekle',
                    'url' => 'admin/katalog/create',
                ],
                [
                    'text' => 'Katalog Listesi',
                    'url' => 'admin/katalog',
                ],
            ],
        ],
        //E-Katalog  Yönetimi Sonu



        //Ekip Yönetimi
        [
            'text' => 'Ekip Yönetimi',
            'icon' => 'fa-solid fa-users',
            'submenu' => [
                [
                    'text' => 'Yeni Ekip Üyesi Ekle',
                    'url' => 'admin/ekip/create',
                ],
                [
                    'text' => 'Ekip Listesi',
                    'url' => 'admin/ekip',
                ],
            ],
        ],
        //Ekip Yönetimi Sonu



        //Şube Yönetimi
        [
            'text' => 'Şube Yönetimi',
            'icon' => 'fas fa-location-dot',
            'submenu' => [
                [
                    'text' => 'Yeni Şube Ekle',
                    'url' => 'admin/sube/create',
                ],
                [
                    'text' => 'Şube Listesi',
                    'url' => 'admin/sube',
                ],
            ],
        ],
        //Şube Yönetimi Sonu



        //Blog Yönetimi
        [
            'text' => 'Blog Yönetimi',
            'icon' => 'fas fa-fw fa-newspaper',
            'submenu' => [
                [
                    'text' => 'Yeni Blog Ekle',
                    'url' => 'admin/blog/create',
                ],
                [
                    'text' => 'Blog Listesi',
                    'url' => 'admin/blog',
                ],
            ],
        ],
        //Blog Yönetimi Sonu


        //Slider Yönetimi
        [
            'text' => 'Slider Yönetimi',
            'icon' => 'fas fa-fw fa-image',
            'submenu' => [
                [
                    'text' => 'Yeni Slider Ekle',
                    'url' => 'admin/slider/create',
                ],
                [
                    'text' => 'Slider Listesi',
                    'url' => 'admin/slider',
                ],
            ],
        ],
        //Slider Yönetimi Sonu



        //Foto Galeri Yönetimi
        [
            'text' => 'Foto Galeri',
            'icon' => 'fas fa-fw fa-camera',
            'submenu' => [
                [
                    'text' => 'Yeni Galeri Ekle',
                    'url' => 'admin/foto-galeri/create',
                ],
                [
                    'text' => 'Galeri Listesi',
                    'url' => 'admin/foto-galeri',
                ],
            ],
        ],
        //Foto Galeri Yönetimi Sonu


        
        //Video Galeri Yönetimi
        [
            'text' => 'Video Galeri',
            'icon' => 'fas fa-fw fa-play',
            'submenu' => [
                [
                    'text' => 'Yeni Video Ekle',
                    'url' => 'admin/video-ekle',
                ],
                [
                    'text' => 'Video Listesi',
                    'url' => 'admin/video-liste',
                ],
            ],
        ],
        //Video Galeri Yönetimi Sonu



        //Yöneticiler
        [
            'text' => 'Yöneticiler',
            'icon' => 'fas fa-fw fa-user',
            'submenu' => [
                [
                    'text' => 'Yeni Yönetici Ekle',
                    'url' => 'admin/yonetici-ekle',
                ],
                [
                    'text' => 'Yönetici Listesi',
                    'url' => 'admin/yonetici-liste',
                ],
            ],
        ],
        //Yöneticiler Sonu

        ['header' => 'Bildirimler'],

        [
            'text' => 'Mesajlar',
            'url' => '#',
            'icon' => 'fa-solid fa-envelope',
        ],
        
           
        ['header' => 'Diğer'],
        [
            'text' => 'Not Defteri',
            'url' => '#',
            'icon' => 'fa-regular fa-calendar-days',
        ],        
        [
            'text' => 'Çıkış Yap',
            'url' => '#',
            'icon' => 'fa-regular fa-circle-xmark',
        ],

        
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/select2/js/select2.full.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/select2/css/select2.min.css',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
        'FontAwesome' => [
        'active' => true,
        'files' => [
            [
                'type' => 'css',
                'asset' => false,
                'location' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css',
            ],
        ],
        ],
        'BootstrapColorpicker' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css',
                ],
            ],
        ],
        'BootstrapSwitch' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/bootstrap-switch/js/bootstrap-switch.min.js',
                ],
            ],
        ],
        'DateRangePicker' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/moment/moment.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/daterangepicker/daterangepicker.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/daterangepicker/daterangepicker.css',
                ],
            ],
        ],
        'TempusDominusBs4' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/moment/moment.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
                ],
            ],
        ],
        'Datatables' => [
        'active' => false,
        'files' => [
            [
                'type' => 'js',
                'asset' => true,
                'location' => 'vendor/datatables/js/jquery.dataTables.min.js',
            ],
            [
                'type' => 'js',
                'asset' => true,
                'location' => 'vendor/datatables/js/dataTables.bootstrap4.min.js',
            ],
            [
                'type' => 'css',
                'asset' => true,
                'location' => 'vendor/datatables/css/dataTables.bootstrap4.min.css',
            ],
        ],
        ],
        'DatatablesPlugins' => [
        'active' => false,
        'files' => [
            [
                'type' => 'js',
                'asset' => true,
                'location' => 'vendor/datatables-plugins/buttons/js/dataTables.buttons.min.js',
            ],
            [
                'type' => 'js',
                'asset' => true,
                'location' => 'vendor/datatables-plugins/buttons/js/buttons.bootstrap4.min.js',
            ],
            [
                'type' => 'js',
                'asset' => true,
                'location' => 'vendor/datatables-plugins/buttons/js/buttons.html5.min.js',
            ],
            [
                'type' => 'js',
                'asset' => true,
                'location' => 'vendor/datatables-plugins/buttons/js/buttons.print.min.js',
            ],
            [
                'type' => 'js',
                'asset' => true,
                'location' => 'vendor/datatables-plugins/jszip/jszip.min.js',
            ],
            [
                'type' => 'js',
                'asset' => true,
                'location' => 'vendor/datatables-plugins/pdfmake/pdfmake.min.js',
            ],
            [
                'type' => 'js',
                'asset' => true,
                'location' => 'vendor/datatables-plugins/pdfmake/vfs_fonts.js',
            ],
            [
                'type' => 'css',
                'asset' => true,
                'location' => 'vendor/datatables-plugins/buttons/css/buttons.bootstrap4.min.css',
            ],
        ],
    ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
