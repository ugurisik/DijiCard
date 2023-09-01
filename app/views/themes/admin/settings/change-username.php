<?php include_once '../pages/_dashboard.php'; ?>
    <div class="row">
        <div class="col-4">
            <div class="form-floating mt-2">
                <input type="text" class="form-control" id="firstnamefloatingInput" placeholder="Enter your firstname">
                <label for="firstnamefloatingInput">Eski Kullanıcı Adını Girin</label>
            </div>
        </div>
    </div>
    <div class="row mt-3">   
        <div class="col-4">
            <div class="form-floating mt-2">
                <input type="text" class="form-control" id="newusernamefloatingInput" placeholder="Enter your new username">
                <label for="newusernamefloatingInput">Yeni Kullanıcı Adını Giriniz</label>
            </div>
        </div>
    </div> 
    <div class="row mt-3">
        <div class="col-6">
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </div>
    </div>
<?php include_once '../pages/_footer.php'; ?>
