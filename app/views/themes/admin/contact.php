<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">NFC Tag</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 px-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">İletişim Bilgilerinizi Giriniz.</h4>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-lg-5 my-4">
                                <div>
                                    <label class="form-label">Telefon Numaranızı Giriniz</label>
                                    <div class="input-group" data-input-flag>
                                        <button class="btn btn-light border" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/flags/turkey.svg" alt="flag img" height="20" class="country-flagimg rounded"><span class="ms-2 country-codeno">+ 90</span></button>
                                        <input type="text" class="form-control rounded-end flag-input" value="" placeholder="(___)-___-____" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                        <div class="dropdown-menu w-100">
                                            <div class="p-2 px-3 pt-1 searchlist-input">
                                                <input type="text" class="form-control form-control-sm border search-countryList" placeholder="Ülke veya ülke kodunuzu arayınız..." />
                                            </div>
                                            <ul class="list-unstyled dropdown-menu-list mb-0"></ul>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label mt-4">Şirket Numaranızı Giriniz (Opsiyonel)</label>
                                    <div class="input-group" data-input-flag>
                                        <button class="btn btn-light border" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/flags/turkey.svg" alt="flag img" height="20" class="country-flagimg rounded"><span class="ms-2 country-codeno">+ 90</span></button>
                                        <input type="text" class="form-control rounded-end flag-input" value="" placeholder="(___)-___-____" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                        <div class="dropdown-menu w-100">
                                            <div class="p-2 px-3 pt-1 searchlist-input">
                                                <input type="text" class="form-control form-control-sm border search-countryList" placeholder="Ülke veya ülke kodunuzu arayınız..." />
                                            </div>
                                            <ul class="list-unstyled dropdown-menu-list mb-0"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 my-4">
                                <div>
                                    <label for="iconInput" class="form-label">Mail Adresinizi Giriniz</label>
                                    <div class="form-icon">
                                        <input type="email" class="form-control form-control-icon" id="iconInput" placeholder="kemal@safari.com">
                                        <i class="ri-mail-unread-line"></i>
                                    </div>
                                </div>
                                <div>
                                    <label for="iconInput" class="form-label mt-4">Şirket Mailinizi Giriniz (Opsiyonel)</label>
                                    <div class="form-icon">
                                        <input type="email" class="form-control form-control-icon" id="iconInput" placeholder="kemal@safari.com">
                                        <i class="ri-mail-unread-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
                <div class="text">
                    <button type="submit" class="btn btn-primary mb-5">Kaydet</button>
                </div>
            </div> <!-- end card -->
        </div>
    </div>
</div>