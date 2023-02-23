<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>REGISTRATION</b></a>
        </div>
        <div class="card-body">
            <p class="login-box-msg"></p>

            <form action="<?= base_url('masyarakat/registration');?>" method="post">
                <?= form_error('nik','<small class="text-danger">','</small>');?>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Nomor Induk" name="nik"
                    value="<?= set_value('nik');?>">
                    <div class=" input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('nama','<small class="text-danger">','</small>');?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Name Lengkap" name="nama"
                        value="<?= set_value('nama');?>">
                    <div class=" input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('username','<small class="text-danger">','</small>');?>
                <div class=" input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" name="username"
                        value="<?= set_value('username');?>">
                    <div class=" input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password','<small class="text-danger">','</small>');?>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password"
                        value="<?= set_value('password');?>">
                    <div class=" input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('telp','<small class="text-danger">','</small>');?>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="telp" placeholder="Nomor Telepon"
                        value="<?= set_value('telp');?>">
                    <div class=" input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone"></span>
                        </div>
                    </div>
                </div>

                <div class="">
                        <button type="submit" class="btn btn-primary btn-block">registrasi</button>
                    </div>
            </form>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>