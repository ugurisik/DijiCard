<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="card col-12 p-3">
                <div class="live-preview">
                    <form action="javascript:void(0);" class="row g-3">
                        <div class="col-10 mt-0">
                            <label for="inputAddress" class="form-label mt-3">Başlık</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="ARGE Ofisi">
                        </div>
                        <div class="col-10 mt-0">
                            <label for="inputAddress" class="form-label mt-3">Adres</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Sahabiye mah.">
                        </div>
                        <div class="col-10">
                            <label for="inputAddress2" class="form-label">Adres 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Adres detayı varsa yazınız">
                        </div>
                        <div class="col-md-3">
                            <label for="inputState" class="form-label">Ülke</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected>Seçiniz</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputState" class="form-label">Şehir</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected>Seçiniz</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputZip" class="form-label">Posta Kodu</label>
                            <input type="text" class="form-control" id="inputZip" placeholder="Posta Kodu">
                        </div>
                    </form>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </div>
            </div>

            <div class="col-12 card p-4">
                <table class="table caption-top table-nowrap mt-5">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Başlık</th>
                            <th scope="col">Şehir</th>
                            <th scope="col">İşlem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kayseri Ofis</td>
                            <td>Kayseri</td>
                            <td>
                                <div class="hstack gap-3 fs-15">
                                    <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                                    <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>ARGE Ofisi</td>
                            <td>Osmaniye</td>
                            <td>
                                <div class="hstack gap-3 fs-15">
                                    <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                                    <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>