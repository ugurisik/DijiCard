<?php include_once '../pages/_dashboard.php'; ?>
<div class="row">

    <div class="card col-8 p-3">
        <div class="live-preview">
        <div class="col-md-3 mb-3">
                    <label for="inputState" class="form-label">Öğrenim Durumu</label>
                    <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                        <option selected>Seçiniz</option>
                        <option>İlkokul</option>
                        <option>Ortaokul</option>
                        <option>Lise</option>
                        <option>Üniversite</option>
                        <option>Lisans</option>
                    </select>
            </div>
            <form action="javascript:void(0);" class="row g-3">
                <div class="col-5 mt-0">
                    <label for="inputAddress" class="form-label mt-3">Öğretim Kurumu Adı (Opsiyonel)</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Hacettepe Üni.">
                </div>
                <div class="col-5 mt-0">
                    <label for="inputAddress" class="form-label mt-3">Öğrenim Görülen Bölüm (Opsiyonel)</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Bilgisayar Müh.">
                </div>

            </form>
        </div>

    </div>
    <div class="col-8">
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </div>
    </div>
</div>


<?php include_once '../pages/_footer.php'; ?>