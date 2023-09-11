<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="firstNameinput" class="form-label">İsim</label>
                            <input type="text" class="form-control" placeholder="İsminizi giriniz" name="firstNameinput">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="lastNameinput" class="form-label">Soyisim</label>
                            <input type="text" class="form-control" placeholder="Soyadınızı giriniz" name="lastNameinput">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="lastNameinput" class="form-label">Doğum Tarihi</label>
                            <input type="date" class="form-control" name="birthDay" data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="Your Default Date">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="-" class="form-label">Cinsiyet</label>
                        <select class="form-select" name="gender" required>
                            <option value="1">Erkek</option>
                            <option value="2">Kadın</option>
                            <option value="3">Belirtmek İstemiyorum</option>
                        </select>
                        <div class="invalid-feedback">Lütfen cinsiyetinizi seçiniz.</div>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="-" class="form-label">Uyruk</label>
                        <select class="form-select" name="nationality" required>
                            <option value="1">Türkiye Cumhuriyeti</option>
                            <option value="2">Arjantin</option>
                        </select>
                        <div class="invalid-feedback">Lütfen uyruk belirtiniz.</div>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="-" class="form-label">Sürücü Belgesi</label>
                        <select class="form-select" name="driverLicence" required>
                            <option value="B">B</option>
                            <option value="A">A</option>
                        </select>
                        <div class="invalid-feedback">Lütfen belge türü seçiniz.</div>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="-" class="form-label">Askerlik Durumu</label>
                        <select class="form-select" name="militaryStatus" required>
                            <option value="1">Yapıldı</option>
                            <option value="0">Yapılmadı</option>
                            <option value="2">Tecilli</option>
                        </select>
                        <div class="invalid-feedback">Lütfen belge türü seçiniz.</div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row mt-2">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Kendinizi açıklayacağınız kısa bir yazı yazınız.</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="snow-editor" style="height: 150px;">

                                </div> <!-- end Snow-editor-->
                            </div><!-- end card-body -->
                        </div><!-- end card -->

                    </div>
                    <!-- end col -->
                </div>
            </div>
            <div class="text">
                <button type="submit" class="btn btn-primary mb-5">Kaydet</button>
            </div>
        </div>
    </div>
</div>