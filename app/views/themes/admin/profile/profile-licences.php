<?php include_once '../pages/_dashboard.php'; ?>
<div class="row">
    <div class="col-3">
        <div class="mb-3">
            <label for="firstNameinput" class="form-label">Sertifika/Lisans Adı</label>
            <input type="text" class="form-control" placeholder="Sertifika/Lisans ismini giriniz." id="firstNameinput">
        </div>
    </div><!--end col-->
    <div class="col-3">
        <div class="mb-3">
            <label for="lastNameinput" class="form-label">Sertifika/Lisans Sağlayıcısı</label>
            <input type="text" class="form-control" placeholder="Sertifika/Lisans sağlayıcısını yazınız" id="lastNameinput">
        </div>
    </div><!--end col-->
</div>

<div class="row">
    <div class="col-lg-8 mt-2">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Sertifika/Lisansını Ekle</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="dropzone">
                    <div class="fallback">
                        <input name="file" type="file" multiple="multiple">
                    </div>
                    <div class="dz-message needsclick">
                        <div class="mb-3">
                            <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                        </div>

                        <h4>Lisans/Sertifika dosyasını eklemek için tıklayınız..</h4>
                    </div>
                </div>

                <ul class="list-unstyled mb-0" id="dropzone-preview">
                    <li class="mt-2" id="dropzone-preview-list">
                        <!-- This is used as the file preview template -->
                        <div class="border rounded">
                            <div class="d-flex p-2">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm bg-light rounded">
                                        <img data-dz-thumbnail class="img-fluid rounded d-block" src="../assets/images/new-document.png" alt="Dropzone-Image" />
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
                                    <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- end dropzon-preview -->
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div> <!-- end col -->
</div>
<div class="text mb-4">
    <button type="submit" class="btn btn-primary">Ekle</button>
</div>
<div class="table-responsive mb-3">
    <table class="table align-middle mb-0">
        <thead class="table-light">
            <tr>
                <th scope="col">Kategori</th>
                <th scope="col">Durumu</th>
                <th scope="col">Ekleme Tarihi</th>
                <th scope="col">Düzenle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Yazılım Sertifikası</td>

                <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Yayında</td>

                <td>10 Ağustos 2023, 10.45</td>

                <td>
                    <div class="dropdown">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-fill"></i>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Kaldır</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Yazılım Sertifikası</td>

                <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Yayında</td>

                <td>10 Ağustos 2023, 10.45</td>

                <td>
                    <div class="dropdown">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-fill"></i>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Kaldır</a></li>
                        </ul>
                    </div>
                </td>

            </tr>
            <tr>
                <td>Yazılım Sertifikası</td>

                <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Yayında</td>

                <td>10 Ağustos 2023, 10.45</td>

                <td>
                    <div class="dropdown">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-fill"></i>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Kaldır</a></li>
                        </ul>
                    </div>
                </td>

            </tr>
            <tr>
                <td>Yazılım Sertifikası</td>

                <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Yayında</td>

                <td>10 Ağustos 2023, 10.45</td>

                <td>
                    <div class="dropdown">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-fill"></i>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Kaldır</a></li>
                        </ul>
                    </div>
                </td>

            </tr>
            <tr>
                <td>Yazılım Sertifikası</td>

                <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Yayında</td>

                <td>10 Ağustos 2023, 10.45</td>

                <td>
                    <div class="dropdown">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-fill"></i>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Kaldır</a></li>
                        </ul>
                    </div>
                </td>

            </tr>
            <tr>
                <td>Yazılım Sertifikası</td>

                <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Yayında</td>

                <td>10 Ağustos 2023, 10.45</td>

                <td>
                    <div class="dropdown">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-fill"></i>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Kaldır</a></li>
                        </ul>
                    </div>
                </td>

            </tr>
            <tr>
                <td>Yazılım Sertifikası</td>

                <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Yayında</td>

                <td>10 Ağustos 2023, 10.45</td>

                <td>
                    <div class="dropdown">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-fill"></i>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Kaldır</a></li>
                        </ul>
                    </div>
                </td>

            </tr>
        </tbody>
    </table>
    <!-- end table -->
</div>
<?php include_once '../pages/_footer.php'; ?>