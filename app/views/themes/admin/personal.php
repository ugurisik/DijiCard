<div class="page-content">
    <div class="container-fluid">
        <form name="FormData">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="firstNameinput" class="form-label">İsim</label>
                                <input type="text" class="form-control" placeholder="İsminizi giriniz" name="firstNameinput" value="<?= $params['datas']['Name'] ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="lastNameinput" class="form-label">Soyisim</label>
                                <input type="text" class="form-control" placeholder="Soyadınızı giriniz" name="lastNameinput" value="<?= $params['datas']['LastName'] ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="lastNameinput" class="form-label">Doğum Tarihi</label>
                                <input type="date" class="form-control" name="birthDay" data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="Your Default Date" value="<?= $params['datas']['BirthDay'] ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="-" class="form-label">Cinsiyet</label>
                            <select class="form-select" name="gender" required>
                                <option value="1" <?php if($params['datas']['Gender'] == 1) echo 'selected' ?>>Erkek</option>
                                <option value="2" <?php if($params['datas']['Gender'] == 2) echo 'selected' ?>>Kadın</option>
                                <option value="3" <?php if($params['datas']['Gender'] == 3) echo 'selected' ?>>Belirtmek İstemiyorum</option>
                            </select>
                            <div class="invalid-feedback">Lütfen cinsiyetinizi seçiniz.</div>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="-" class="form-label">Uyruk</label>
                            <select class="form-select" name="nationality" required>
                                <option value="1" <?php if($params['datas']['Nationality'] == 1) echo 'selected' ?>>Türkiye Cumhuriyeti</option>
                                <option value="2" <?php if($params['datas']['Nationality'] == 1) echo 'selected' ?>>Arjantin</option>
                            </select>
                            <div class="invalid-feedback">Lütfen uyruk belirtiniz.</div>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="-" class="form-label">Sürücü Belgesi</label>
                            <select class="form-select" name="driverLicence" required>
                                <option value="B" <?php if($params['datas']['DriveDocument'] == 1) echo 'selected' ?>>B</option>
                                <option value="A" <?php if($params['datas']['DriveDocument'] == 1) echo 'selected' ?>>A</option>
                            </select>
                            <div class="invalid-feedback">Lütfen belge türü seçiniz.</div>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="-" class="form-label">Askerlik Durumu</label>
                            <select class="form-select" name="militaryStatus" required>
                                <option value="1" <?php if($params['datas']['MilitaryStatus'] == 1) echo 'selected' ?>>Yapıldı</option>
                                <option value="0" <?php if($params['datas']['MilitaryStatus'] == 1) echo 'selected' ?>>Yapılmadı</option>
                                <option value="2" <?php if($params['datas']['MilitaryStatus'] == 1) echo 'selected' ?>>Tecilli</option>
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
                                    <div class="snow-editor" name="content" style="height: 150px;">
                                        <?= $params['datas']['About'] ?>
                                    </div> <!-- end Snow-editor-->
                                </div><!-- end card-body -->
                            </div><!-- end card -->

                        </div>
                        <!-- end col -->
                    </div>
                </div>
                <div class="text">
                    <button type="button" name="addBtn" class="btn btn-primary mb-5">Kaydet</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    function del(guid) {
        Swal.fire({
            title: 'Emin misiniz?',
            text: "Bu işlemi geri alamayacaksınız!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f46a6a',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet, sil!',
            cancelButtonText: 'İptal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= SITE_URL . '/profile/contact/delete' ?>",
                    type: 'POST',
                    data: {
                        guid: guid
                    },
                    success: function(data) {
                        var obj = JSON.parse(data);
                        console.log(data)
                        if (obj.status == 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Başarılı',
                                text: obj.message,
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                location.href = "<?= SITE_URL . '/profile/contact' ?>";
                            })
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Hata',
                                text: obj.message,
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    }
                })
            }
        })
    }

    $(document).ready(function() {
        $('button[name="addBtn"]').click(function() {
            var formData = $('form[name="FormData"]').serializeArray();
            formData.push({
                name: 'content',
                value: $('.snow-editor .ql-editor').html()
            });
            console.log(formData)
            var url = "<?= SITE_URL . '/profile/personal/add' ?>";
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                success: function(data) {
                    console.log(data)
                    var obj = JSON.parse(data);
                    if (obj.status == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Başarılı',
                            text: obj.message,
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function() {
                            location.href = "<?= SITE_URL . '/profile/personal' ?>";
                        })
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Hata',
                            text: obj.message,
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                }
            })
        });
    });
</script>