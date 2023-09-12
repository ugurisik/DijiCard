<div class="page-content">
    <div class="container-fluid">
        <form name="bankForm">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">İletişim Bilgileri</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">DijiCards</a></li>
                                <li class="breadcrumb-item active">İletişim Bilgileri</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card p-4 border shadow-none mb-0 mt-4">
                    <div class="row gy-3">
                        <div class="col-md-4">
                            <label for="cc-name" class="form-label">İletişim Başlık</label>
                            <input type="text" class="form-control" name="ContactTitle" placeholder="İş, Kişisel vb." value="<?= $params['data']['Title'] ?>">
                        </div>

                        <div class="col-md-4">
                            <label for="cc-number" class="form-label">Telefon Numaranız</label>
                            <input type="text" class="form-control" name="PhoneNumber" id="cleave-phone" placeholder="555 444 33 22" value="<?= $params['data']['PhoneNumber'] ?>">
                        </div>

                        <div class="col-md-4">
                            <label for="cc-bank" class="form-label">Mail Adresiniz</label>
                            <input type="text" class="form-control" name="Mail" placeholder="info@safari-gps.com.tr" value="<?= $params['data']['MailAddress'] ?>">
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <div class="text-start">
                        <button type="button" name="addBtn" class="btn btn-primary">
                            <?php
                            if (isset($params['data'])) {
                                echo 'Güncelle';
                            } else {
                                echo 'Ekle';
                            }
                            ?>
                        </button>
                    </div>
                </div>

                <!-- Captions -->
                <table class="table caption-top table-nowrap mt-5">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Başlık</th>
                            <th scope="col">Telefon Numarası</th>
                            <th scope="col">Mail Adresi</th>
                            <th scope="col">İşlem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $datas = $params['datas'];
                        foreach ($datas as $data) :
                        ?>
                            <tr>
                                <td><?= $data['Title'] ?></td>
                                <td><?= $data['PhoneNumber'] ?></td>
                                <td><?= $data['MailAddress'] ?></td>
                                <td>
                                    <div class="hstack gap-3 fs-15">
                                        <a href="<?= SITE_URL . '/profile/contact/' . $data['Guid'] ?>" class="link-primary"><i class="ri-settings-4-line"></i></a>
                                        <a href="#" onclick="del('<?= $data['Guid'] ?>')" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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
            var formData = $('form[name="bankForm"]').serializeArray();
            var url = ''
            <?php
            if (isset($params['data'])) {
            ?>
                formData.push({
                    name: 'guid',
                    value: '<?= $params['data']['Guid'] ?>'
                });
                url = "<?= SITE_URL . '/profile/contact/update' ?>";
            <?php
            } else {
            ?>
                url = "<?= SITE_URL . '/profile/contact/add' ?>";
            <?php
            }
            ?>
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                success: function(data) {
                    var obj = JSON.parse(data);
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
        });
    });
</script>