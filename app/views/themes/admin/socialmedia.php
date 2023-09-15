<div class="page-content">
    <div class="container-fluid">
        <form name="FormData">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Sosyal Medya Bilgileri</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">DijiCards</a></li>
                                <li class="breadcrumb-item active">Sosyal Medya Bilgileri</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="justify-content-between d-flex align-items-center mt-2 mb-4">
                        <h5 class="mb-0 pb-1 text-decoration">Sosyal Medya Hesaplarını Ekle</h5>
                    </div>
                    <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-1">
                        <div class="col-6">
                            <div class="card card-body">
                                <div class="d-flex mb-4 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/instagram-icon.jpeg" alt="" class="avatar-md rounded-circle" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="card-title mb-1">Instagram</h5>
                                    </div>
                                </div>
                                <div>
                                    <input type="text" class="form-control rounded-pill mb-4" id="exampleInputrounded" name="instagram" value="<?= $params['datas']['Instagram'] ?>" placeholder="Profil bağlantısını girin">
                                </div>
                                <a onclick="add()" class="btn btn-primary btn-sm">Ekle</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-body">
                                <div class="d-flex mb-4 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/facebook-icon.png" alt="" class="avatar-md rounded-circle" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="card-title mb-1">Facebook</h5>
                                    </div>
                                </div>
                                <div>
                                    <input type="text" class="form-control rounded-pill mb-4" id="exampleInputrounded" name="facebook" value="<?= $params['datas']['Facebook'] ?>" placeholder="Profil bağlantısını girin">
                                </div>
                                <a onclick="add()" class="btn btn-primary btn-sm">Ekle</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-body">
                                <div class="d-flex mb-4 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/threads-icon.png" alt="" class="avatar-md rounded-circle" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="card-title mb-1">Threads</h5>
                                    </div>
                                </div>
                                <div>
                                    <input type="text" class="form-control rounded-pill mb-4" id="exampleInputrounded" name="threads" value="<?= $params['datas']['Threads'] ?>" placeholder="Profil bağlantısını girin">
                                </div>
                                <a onclick="add()" class="btn btn-primary btn-sm">Ekle</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-body">
                                <div class="d-flex mb-4 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/twitter-icon.png" alt="" class="avatar-md rounded-circle" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="card-title mb-1">Twitter</h5>
                                    </div>
                                </div>
                                <div>
                                    <input type="text" class="form-control rounded-pill mb-4" id="exampleInputrounded" name="twitter" value="<?= $params['datas']['Twitter'] ?>" placeholder="Profil bağlantısını girin">
                                </div>
                                <a onclick="add()" class="btn btn-primary btn-sm">Ekle</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-body">
                                <div class="d-flex mb-4 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/linkedin-icon.png" alt="" class="avatar-md rounded-circle" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="card-title mb-1">Linkedin</h5>
                                    </div>
                                </div>
                                <div>
                                    <input type="text" class="form-control rounded-pill mb-4" id="exampleInputrounded" name="linkedin" value="<?= $params['datas']['Linkedin'] ?>" placeholder="Profil bağlantısını girin">
                                </div>
                                <a onclick="add()" class="btn btn-primary btn-sm">Ekle</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-body">
                                <div class="d-flex mb-4 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/mail-icon.png" alt="" class="avatar-md rounded-circle" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="card-title mb-1">Mail</h5>
                                    </div>
                                </div>
                                <div>
                                    <input type="text" class="form-control rounded-pill mb-4" id="exampleInputrounded" name="mail" value="<?= $params['datas']['Mail'] ?>" placeholder="Profil bağlantısını girin">
                                </div>
                                <a onclick="add()" class="btn btn-primary btn-sm">Ekle</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-body">
                                <div class="d-flex mb-4 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/snapchat-icon.png" alt="" class="avatar-md rounded-circle" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="card-title mb-1">Snapchat</h5>
                                    </div>
                                </div>
                                <div>
                                    <input type="text" class="form-control rounded-pill mb-4" id="exampleInputrounded" name="snapchat" value="<?= $params['datas']['Snapchat'] ?>" placeholder="Profil bağlantısını girin">
                                </div>
                                <a onclick="add()" class="btn btn-primary btn-sm">Ekle</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-body">
                                <div class="d-flex mb-4 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/github-icon.png" alt="" class="avatar-md rounded-circle" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="card-title mb-1">Github</h5>
                                    </div>
                                </div>
                                <div>
                                    <input type="text" class="form-control rounded-pill mb-4" id="exampleInputrounded" name="github" value="<?= $params['datas']['Github'] ?>" placeholder="Profil bağlantısını girin">
                                </div>
                                <a onclick="add()" class="btn btn-primary btn-sm">Ekle</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-body">
                                <div class="d-flex mb-4 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/tiktok-icon.png" alt="" class="avatar-md rounded-circle" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="card-title mb-1">Tiktok</h5>
                                    </div>
                                </div>
                                <div>
                                    <input type="text" class="form-control rounded-pill mb-4" id="exampleInputrounded" name="tiktok" value="<?= $params['datas']['Tiktok'] ?>" placeholder="Profil bağlantısını girin">
                                </div>
                                <a onclick="add()" class="btn btn-primary btn-sm">Ekle</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-body">
                                <div class="d-flex mb-4 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="<?= SITE_URL . '/' . THEME_PATH . 'admin/assets' ?>/images/discord-icon.jpeg" alt="" class="avatar-md rounded-circle" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="card-title mb-1">Discord</h5>
                                    </div>
                                </div>
                                <div>
                                    <input type="text" class="form-control rounded-pill mb-4" id="exampleInputrounded" name="discord" value="<?= $params['datas']['Discord'] ?>" placeholder="Profil bağlantısını girin">
                                </div>
                                <a onclick="add()" class="btn btn-primary btn-sm">Ekle</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function add() {
        var formData = $('form[name="FormData"]').serializeArray();
        var url = "<?= SITE_URL . '/profile/socialmedia/add' ?>";
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
                        location.href = "<?= SITE_URL . '/profile/socialmedia' ?>";
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
</script>