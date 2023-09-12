<div class="page-content">
    <div class="container-fluid">
        <form name="FormData">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">İş Bilgileri</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">DijiCards</a></li>
                                <li class="breadcrumb-item active">İş Bilgileri</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card col-12 p-4 mb-3">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <div class="form-floating mt-2 ">
                                <input type="text" class="form-control" name="companyName" placeholder="Enter your firstname" value="<?= $params['data']['CompanyName'] ?>">
                                <label for="firstnamefloatingInput">Firma İsmini Yazınız</label>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="form-floating mt-2 ">
                                <input type="text" class="form-control" name="companySector" placeholder="Enter your firstname" value="<?= $params['data']['CompanySector'] ?>">
                                <label for="firstnamefloatingInput">Faaliyet Gösterdiğiniz Sektörü Yazınız</label>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="country" class="form-label">İş Alanı</label>
                            <select class="form-select" name="companyBussinessArea" required>
                                <option>Satış</option>
                                <option>Pazarlama</option>
                                <option>Akademik</option>
                                <option>Analiz / Araştırma</option>
                                <option>AR-GE</option>
                                <option>Arşiv / Dokümantasyon</option>
                                <option>Bakım / Onarım</option>
                                <option>Bilgi İşlem</option>
                                <option>Bilgi Teknolojileri / IT</option>
                                <option>Bireysel Portföy Yönetimi Hizmetleri</option>
                                <option>Borsa</option>
                                <option>Borsa Finans</option>
                                <option>Denetim/Teftiş</option>
                                <option>Depo / Antrepo</option>
                                <option>Dış Denetim</option>
                                <option>Dış İlişkiler</option>
                                <option>Diğer</option>
                                <option>Dijital Pazarlama</option>
                                <option>Eğitim</option>
                                <option>E-Ticaret</option>
                                <option>Finans</option>
                                <option>Gayrimenkul Değerleme</option>
                                <option>Genel Başvuru</option>
                                <option>Güvenlik</option>
                                <option>Haberleşme</option>
                                <option>Halkla İlişkiler</option>
                                <option>Hazine ve Sabit Getirili Menkul Değerler</option>
                                <option>Hizmet</option>
                                <option>Hukuk</option>
                                <option>İç Denetim</option>
                                <option>İdari İşler</option>
                                <option>İnsan Kaynakları</option>
                                <option>İş Geliştirme</option>
                                <option>İş Sağlığı ve Güvenliği</option>
                                <option>İthalat/İhracat</option>
                                <option>Kalite</option>
                                <option>Kredi</option>
                                <option>Kurumsal Finansman</option>
                                <option>Laboratuvar</option>
                                <option>Lojistik</option>
                                <option>Mimarlık</option>
                                <option>Muhasebe</option>
                                <option>Mühendislik</option>
                                <option>Müşteri Hizmetleri</option>
                                <option>Müşteri Hizmetleri / Çağrı Merkezi</option>
                                <option>Müşteri İlişkileri</option>
                                <option>Mütercim Tercümanlık</option>
                                <option>Nakliye</option>
                                <option>Operasyon</option>
                                <option>Organizasyon</option>
                                <option>Ön Büro</option>
                                <option>Parça</option>
                                <option>Pazar Araştırma</option>
                                <option>Pazarlama</option>
                                <option>Pazarlama Teknolojileri</option>
                                <option>Personel</option>
                                <option>Planlama</option>
                                <option>Program</option>
                                <option>Reklam</option>
                                <option>Risk Yönetimi</option>
                                <option>Ruhsatlandırma</option>
                                <option>Sağlık</option>
                                <option>Satınalma</option>
                                <option>Satış</option>
                                <option>Satış Geliştirme</option>
                                <option>Satış ve Pazarlama</option>
                                <option>Sekreterya</option>
                                <option>Sigorta</option>
                                <option>Sistem</option>
                                <option>Spor</option>
                                <option>Tasarım / Grafik</option>
                                <option>Taşıma</option>
                                <option>Tedarik Yönetimi</option>
                                <option>Teknik</option>
                                <option>Teknik Servis</option>
                                <option>Teknikerlik</option>
                                <option>Teknisyenlik</option>
                                <option>Teknoloji</option>
                                <option>Turizm</option>
                                <option>Ulaştırma</option>
                                <option>Uluslararası Sermaye Piyasaları</option>
                                <option>Üretim / İmalat</option>
                                <option>Varlık Yönetimi</option>
                                <option>Yiyecek ve İçecek</option>
                                <option>Yönetim</option>
                                <option>Yönetim, Risk ve Uyumluluk</option>
                                <option>Yurtiçi Sermaye Piyasaları</option>
                            </select>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="country" class="form-label">Çalışma Şekli</label>
                            <select class="form-select" name="companyOperation" required>
                                <option>Serbest</option>
                                <option>Yarı Zamanlı</option>
                                <option>Dönemsel</option>
                                <option>Stajyer</option>
                                <option>Tam Zamanlı</option>
                                <option>Gönüllü</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="lastNameinput" class="form-label">Başlangıç Tarihi</label>
                                <input type="date" class="form-control" name="startDate" value="<?= $params['data']['StartDate'] ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="lastNameinput" class="form-label">Bitiş Tarihi</label>
                                <input type="date" class="form-control" name="endDate" value="<?= $params['data']['EndDate'] ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">İş Tanımı</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="snow-editor" style="height: 150px;">
                                    <?= $params['data']['JobDecription'] ?>
                                    </div> <!-- end Snow-editor-->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <div class="col-12">
                            <label for="address" class="form-label">İş Yeri Adresi</label>
                            <input type="text" class="form-control" name="address" placeholder="Sahabiye mah."  value="<?= $params['data']['CompanyAddress'] ?>">
                            <div class="invalid-feedback">Şirket adresinizi giriniz</div>
                        </div>

                        <div class="col-12 mt-3">
                            <label for="address2" class="form-label">İş Yeri Adresi 2 <span class="text-muted">(Opsiyonel)</span></label>
                            <input type="text" class="form-control mb-3" name="address2" placeholder="Adres detayı varsa yazınız" value="<?= $params['data']['CompanyAddress2'] ?>" />
                        </div>

                        <div class="col-md-5">
                            <label for="country" class="form-label">Ülke</label>
                            <select class="form-select" name="country">
                                <option value="">Seçiniz</option>
                                <option>Türkiye</option>
                            </select>
                            <div class="invalid-feedback">Lütfen ülke seçiniz.</div>
                        </div>

                        <div class="col-md-4">
                            <label for="state" class="form-label">Şehir</label>
                            <select class="form-select" name="state">
                                <option value="">Seçiniz...</option>
                                <option>Kayseri</option>
                            </select>
                            <div class="invalid-feedback">Şehir seçiniz</div>
                        </div>

                        <div class="col-md-3">
                            <label for="zip" class="form-label">Posta Kodu</label>
                            <input type="text" class="form-control" name="zip" placeholder="" value="<?= $params['data']['PostalCode'] ?>"/>
                        </div>
                    </div>
                    <div class="text m-3">
                        <button type="button" name="addBtn" class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
                <div class="col-12 card p-4">
                    <table class="table caption-top table-nowrap mt-5">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Firma Adı</th>
                                <th scope="col">Başlangıç Tarihi</th>
                                <th scope="col">İşlem</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $datas = $params['datas'];
                            foreach ($datas as $data) :
                            ?>
                                <tr>
                                    <td><?= $data['CompanyName'] ?></td>
                                    <td><?= $data['StartDate'] ?></td>
                                    <td>
                                        <div class="hstack gap-3 fs-15">
                                            <a href="<?= SITE_URL . '/profile/bussiness/' . $data['Guid'] ?>" class="link-primary"><i class="ri-settings-4-line"></i></a>
                                            <a href="#" onclick="del('<?= $data['Guid'] ?>')" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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
                    url: "<?= SITE_URL . '/profile/bussiness/delete' ?>",
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
                                location.href = "<?= SITE_URL . '/profile/bussiness' ?>";
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
            var url = ''
            <?php
            if (isset($params['data'])) {
            ?>
                formData.push({
                    name: 'guid',
                    value: '<?= $params['data']['Guid'] ?>'
                });
                url = "<?= SITE_URL . '/profile/bussiness/update' ?>";
            <?php
            } else {
            ?>
                url = "<?= SITE_URL . '/profile/bussiness/add' ?>";
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
                            location.href = "<?= SITE_URL . '/profile/bussiness' ?>";
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