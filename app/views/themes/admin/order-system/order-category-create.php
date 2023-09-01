<?php include_once '../pages/_dashboard.php'; ?>
<form id="createproduct-form" autocomplete="off" class="needs-validation" novalidate>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label" for="product-title-input">Kategori Başlığı</label>
                        <input type="hidden" class="form-control" id="formAction" name="formAction" value="add">
                        <input type="text" class="form-control d-none" id="product-id-input">
                        <input type="text" class="form-control" id="product-title-input" value="" placeholder="Ana Yemekler" required>
                        <div class="invalid-feedback">Lütfen kategori başlığını giriniz.</div>
                    </div>
                    <div>
                        <label>Kategori Açıklaması</label>

                        <div id="ckeditor-classic">
                        <p>Lezzetli ve doyurucu ana yemeklerimiz, damak zevkinizi tatmin etmek için özenle hazırlanmıştır. Şeflerimizin özgün tarifleriyle sunulan bu seçenekler, taze ve kaliteli malzemelerle hazırlanır. Her biri özenle sunulan ana yemeklerimiz, sizlere unutulmaz bir lezzet deneyimi sunmayı hedefler. Tercihinize göre et, tavuk, balık veya sebzelerle hazırlanan çeşitli seçeneklerimizi deneyimleyebilirsiniz. Her bir tabağımız, özenle seçilmiş bileşenlerle hazırlanır ve sizlere lezzetin en iyisini sunmak için titizlikle pişirilir. Ana yemeklerimiz, öğününüzü tamamlayacak ve iştahınızı memnuniyetle karşılayacak seçenekler sunar.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Kategori Fotoğrafları</h5>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h5 class="fs-14 mb-1">Kategori Fotoğrafı</h5>
                        <p class="text-muted">Kategorinin Ana Resmini Ekleyiniz.</p>
                        <div class="text-center">
                            <div class="position-relative d-inline-block">
                                <div class="position-absolute top-100 start-100 translate-middle">
                                    <label for="product-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                <i class="ri-image-fill"></i>
                                            </div>
                                        </div>
                                    </label>
                                    <input class="form-control d-none" value="" id="product-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                </div>
                                <div class="avatar-lg">
                                    <div class="avatar-title bg-light rounded">
                                        <img src="" id="product-img" class="avatar-md h-auto" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h5 class="fs-14 mb-1">Ürün Fotoğrafları</h5>
                        <p class="text-muted">Ürün Fotoğraflarını Ekleyiniz.</p>

                        <div class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                </div>

                                <h5>Dosyaları buraya sürükleyin veya yüklemek için tıklayın.</h5>
                            </div>
                        </div>

                        <ul class="list-unstyled mb-0" id="dropzone-preview">
                            <li class="mt-2" id="dropzone-preview-list">
                                <!-- This is used as the file preview template -->
                                <div class="border rounded">
                                    <div class="d-flex p-2">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-sm bg-light rounded">
                                                <img data-dz-thumbnail class="img-fluid rounded d-block" src="#" alt="Product-Image" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="pt-1">
                                                <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                <strong class="error text-danger" data-dz-errormessage></strong>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 ms-3">
                                            <button data-dz-remove class="btn btn-sm btn-danger">Sil</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- end dropzon-preview -->
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Yayınla</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="choices-publish-status-input" class="form-label">Durumu</label>

                        <select class="form-select" id="choices-publish-status-input" data-choices data-choices-search-false>
                            <option value="Published" selected>Yayınlanan</option>
                            <option value="Scheduled">Planlandı</option>
                            <option value="Draft">Taslak</option>
                        </select>
                    </div>

                    <div>
                        <label for="choices-publish-visibility-input" class="form-label">Görünürlük</label>
                        <select class="form-select" id="choices-publish-visibility-input" data-choices data-choices-search-false>
                            <option value="Public" selected>Yayında</option>
                            <option value="Hidden">Gizlenmiş</option>
                        </select>
                    </div>

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
            <div class="text-end mb-3">
                <button type="submit" class="btn btn-primary w-sm">Kaydet</button>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

</form>
<?php include_once '../pages/_footer.php'; ?>