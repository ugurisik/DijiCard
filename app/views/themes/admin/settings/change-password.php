<?php include_once '../pages/_dashboard.php'; ?>
    <div class="row">
        <div class="col-4">
            <div class="form-floating mt-2">
                <input type="password" class="form-control" id="oldpasswordfloatingInput" placeholder="Enter your old password">
                <label for="oldpasswordfloatingInput">Eski Şifrenizi Girin</label>
            </div>
        </div>
    </div>
    <div class="row mt-3">   
        <div class="col-4">
            <div class="form-floating mt-2">
                <input type="password" class="form-control" id="newpasswordfloatingInput" placeholder="Enter your new password">
                <label for="newpasswordfloatingInput">Yeni Şifrenizi Girin</label>
            </div>
        </div>
    </div> 
    <div class="row mt-3">   
        <div class="col-4">
            <div class="form-floating mt-2">
                <input type="password" class="form-control" id="confirmpasswordfloatingInput" placeholder="Enter your new password">
                <label for="confirmpasswordfloatingInput">Yeni Şifrenizi Onaylayın</label>
            </div>
        </div>
    </div> 
    <div class="row my-3">
        <div class="col-6">
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </div>
    </div>
<?php include_once '../pages/_footer.php'; ?>

