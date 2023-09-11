<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark" data-body-image="img-1" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | SafariTag - Admin & Dashboard Paneli</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/favicon.ico">

    <!-- multi.js css -->
    <link rel="stylesheet" href="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/libs/multi.js/multi.min.css" type="text/css" />
    <!-- autocomplete css -->
    <link rel="stylesheet" href="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/libs/@tarekraafat/autocomplete.js/css/autoComplete.css" type="text/css" />

    <!-- jsvectormap css -->
    <link href="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- quill css -->
    <link href="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />

    <!-- dropzone css -->
    <link href="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/libs/dropzone/dropzone.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/css/custom.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>


<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/logo-sm.png" alt="" height="35">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/logo-dark.png" alt="" height="35">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/logo-sm.png" alt="" height="35">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/logo-light.png" alt="" height="35">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                    </div>

                    <div class="d-flex align-items-center">



                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                                <i class='bx bx-moon fs-22'></i>
                            </button>
                        </div>


                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user" src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/users/avatar-1.jpg" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-semibold user-name-text">Uğur
                                            IŞIK</span>
                                        <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Founder</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Hoşgeldin UĞUR!</h6>
                                <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i>
                                    <span class="align-middle">Messages</span></a>
                                <a class="dropdown-item" href="apps-tasks-kanban.html"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i>
                                    <span class="align-middle">Taskboard</span></a>
                                <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
                                <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-soft-success text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                                <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                                <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                                <i class='bx bx-fullscreen fs-22'></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu border-end">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>





            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLanding1" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding1">
                                <i class="ri-map-pin-user-line"></i> <span data-key="t-landing">Profil Sistemi</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLanding1">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?= SITE_URL . '/profile/contact' ?>" class="nav-link" data-key="t-contact"> İletişim Bilgileri </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= SITE_URL . '/profile/persona' ?>" class="nav-link" data-key="t-personel">Kişisel Bilgiler</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= SITE_URL . '/profile/bussiness' ?>" class="nav-link" data-key="t-business">İş Bilgileri (Mail, Web Site vb.)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= SITE_URL . '/profile/socialmedia' ?>" class="nav-link"><span data-key="t-socialmedia">Sosyal Medya</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= SITE_URL . '/profile/location' ?>" class="nav-link"><span data-key="t-location">Konum Bilgileri</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= SITE_URL . '/profile/bank' ?>" class="nav-link"><span data-key="t-bank">Banka Hesapları</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= SITE_URL . '/profile/file' ?>" class="nav-link"><span data-key="t-file">Dosya Aktarımı</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= SITE_URL . '/profile/gallery' ?>" class="nav-link"><span data-key="t-gallery">Galeri</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= SITE_URL . '/profile/hobbies' ?>" class="nav-link"><span data-key="t-hobbies">Hobiler</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= SITE_URL . '/profile/licences' ?>" class="nav-link"><span data-key="t-licences">Lisanslar/Sertifikalar</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= SITE_URL . '/profile/education' ?>" class="nav-link"><span data-key="t-education">Eğitim Bilgisi</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLanding2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding2">
                                <i class="ri-qr-code-line"></i> <span data-key="t-landing">Qr Menü Sistemi</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLanding2">
                                <ul class="nav nav-sm flex-column">

                                    <li class="nav-item">
                                        <a href="../order-system/order-category-list.php" class="nav-link"><span data-key="t-job">Kategori Listesi</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="../order-system/order-product-list.php" class="nav-link"><span data-key="t-job">Ürün Listesi</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="../order-system/order-category-create.php" class="nav-link"><span data-key="t-category">Kategori Ekleme</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="../order-system/order-product-create.php" class="nav-link"><span data-key="t-job">Ürün Ekleme</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="../order-system/order-tema.php" class="nav-link"><span data-key="t-job">Menü Görünümünü Ayarla</span></a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLanding4" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding4">
                                <i class="ri-settings-5-line"></i> <span data-key="t-landing">Ayarlar</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLanding4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="../settings/change-username.php" class="nav-link" data-key="t-change-username">Kullanıcı Adını Değiştir </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../settings/change-password.php" class="nav-link" data-key="t-change-password">Şifreni Değiştir </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../settings/hidden-tag.php" class="nav-link" data-key="t-hidden-tag">NFC Görünürlüğünü Ayarla</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->



        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
        <div class="main-content">