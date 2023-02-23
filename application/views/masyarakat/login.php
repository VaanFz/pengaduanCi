<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="<?= base_url('Masyarakat');?>" class="h1"><b>Login </b>Masyarakat</a>
        </div>
        <div class="card-body">

            <?= $this->session->flashdata('message'); ?>

            <form action="<?= base_url('Masyarakat');?>" method="post">
            <?= form_error('username','<small class="text-danger">','</small>');?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" name="username" value="<?= set_value('username');?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password','<small class="text-danger">','</small>');?>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        <span>Belum Punya Akun? </span><a href="<?= base_url('masyarakat/registration');?>">Daftar</a>
                    </div>
                    <br>
                    <div>
                        <span>Login Sebagai Admin| </span><a href="<?= base_url('Auth');?>">Login</a>
                    </div>
                </div>
            </form>
            
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box --