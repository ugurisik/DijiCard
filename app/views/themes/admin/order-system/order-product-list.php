<?php include_once '../pages/_dashboard.php'; ?>

<style>
    .dropdown-toggle::after {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: .255em;
        vertical-align: middle;
        content: "";
        border-top: .3em solid;
        border-right: .3em solid transparent;
        border-bottom: 0;
        border-left: .3em solid transparent;
    }
</style>


<div class="container">
    <div class="btn-group mb-4" role="group" aria-label="Kategoriler">
        <button type="button" class="btn btn-primary" onclick="hepsiniGoster()">Tümü</button>
        <button type="button" class="btn btn-primary" onclick="filtrele('Ana Yemek')">Ana Yemek</button>
        <button type="button" class="btn btn-primary" onclick="filtrele('Tatlılar')">Tatlılar</button>
        <button type="button" class="btn btn-primary" onclick="filtrele('İçecekler')">İçecekler</button>
        <button type="button" class="btn btn-primary" onclick="filtrele('Dondurmalar')">Dondurmalar</button>



    </div>
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th scope="col">Resim</th>
                    <th scope="col">Ürün Adı</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Durum</th>
                    <th scope="col">Eklenme Tarihi</th>
                    <th scope="col">Düzenle</th>
                </tr>
            </thead>
            <tbody>
                <tr>                    
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            <div class="flex-shrink-0">
                                <img src="../assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle" />
                            </div>
                        </div>
                    </td>

                    <td>Çikolatalı</td>

                    <td>Dondurmalar</td>

                    <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Yayında</td>

                    <td>10 Ağustos 2023, 10.45</td>

                    <td>
                        <div class="dropdown">
                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-more-2-fill"></i> 
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Kaldır</a></li>
                                <li><a class="dropdown-item" href="#">Düzenle</a></li>
                            </ul>
                        </div>
                    </td>

                </tr>

                <tr>                    
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            <div class="flex-shrink-0">
                                <img src="../assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle" />
                            </div>
                        </div>
                    </td>

                    <td>Tavuk Şiş</td>

                    <td>Ana Yemek</td>

                    <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Yayında</td>

                    <td>10 Ağustos 2023, 10.45</td>

                    <td>
                        <div class="dropdown">
                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Kaldır</a></li>
                                <li><a class="dropdown-item" href="#">Düzenle</a></li>

                            </ul>
                        </div>
                    </td>
                </tr>

                <tr>                    
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            <div class="flex-shrink-0">
                                <img src="../assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle" />
                            </div>
                        </div>
                    </td>

                    <td>Çay</td>

                    <td>İçecekler</td>

                    <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Yayında</td>

                    <td>10 Ağustos 2023, 10.45</td>

                    <td>
                        <div class="dropdown">
                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Kaldır</a></li>
                                <li><a class="dropdown-item" href="#">Düzenle</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>                    
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            <div class="flex-shrink-0">
                                <img src="../assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle" />
                            </div>
                        </div>
                    </td>

                    <td>Cheesecake</td>

                    <td>Tatlılar</td>

                    <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Yayında</td>

                    <td>10 Ağustos 2023, 10.45</td>

                    <td>
                        <div class="dropdown">
                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Kaldır</a></li>
                                <li><a class="dropdown-item" href="#">Düzenle</a></li>
                            </ul>
                        </div>
                    </td>

                </tr>
            </tbody>
        </table>
        <!-- end table -->
    </div>
    <!-- end table responsive -->
</div>

<?php include_once '../pages/_footer.php'; ?>

<script>
    function filtrele(kategori) {
        var tabloSatirlari = document.querySelectorAll('.table tbody tr');
        tabloSatirlari.forEach(function(satir) {
            var kategoriHucresi = satir.cells[2]; // 3. hücre (sıfırdan başladığımız için)
            if (kategoriHucresi.textContent.trim() === kategori) {
                satir.style.display = 'table-row';
            } else {
                satir.style.display = 'none';
            }
        });
    }

    function hepsiniGoster() {
        var tabloSatirlari = document.querySelectorAll('.table tbody tr');
        tabloSatirlari.forEach(function(satir) {
            satir.style.display = 'table-row';
        });
    }
</script>