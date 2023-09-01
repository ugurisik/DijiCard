<?php include_once '../pages/_dashboard.php'; ?>
<div class="row">

    <div class="collapse show" id="paymentmethodCollapse">
        <div class="card p-4 border shadow-none mb-0 mt-4">
            <div class="row gy-3">
                <div class="col-md-4">
                    <label for="cc-name" class="form-label">Kart Üzerindeki İsim</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="Kemal Aslan vb.">
                </div>

                <div class="col-md-4">
                    <label for="cc-number" class="form-label">İban Bilgisini Giriniz</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="TRxx xxxx xxxx xxxx xxxx xxxx xx">
                </div>

                <div class="col-md-4">
                    <label for="cc-number" class="form-label">İban Bilgisini Giriniz</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="Akbank, Ziraat vb.">
                </div>
            </div>
        </div>

        <div class="col-12 mt-3">
            <div class="text-start">
                <button type="submit" class="btn btn-primary">Ekle</button>
            </div>
        </div>

        <!-- Captions -->
        <table class="table caption-top table-nowrap mt-5">
            <thead class="table-light">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Kart İsmi</th>
                    <th scope="col">İban Bilgisi</th>
                    <th scope="col">Banka</th>
                    <th scope="col">İşlem</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Kemal Aslan</td>
                    <td>TR76 0009 9012 3456 7800 1000 01</td>
                    <td>Garanti</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Kemal Aslan</td>
                    <td>TR76 0009 9012 3456 7800 1000 01</td>
                    <td>İş Bankası</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Kemal Aslan</td>
                    <td>TR76 0009 9012 3456 7800 1000 01</td>
                    <td>Akbank</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>


        <div class="text-muted my-2 fst-italic">
            <i data-feather="lock" class="text-muted icon-xs"></i> İşleminiz SSL şifrelemesi ile güvence altına alınmıştır.
        </div>
    </div>

</div>

</div>
<!-- container-fluid -->
</div>
<!-- End Page-content -->
<?php include_once '../pages/_footer.php'; ?>