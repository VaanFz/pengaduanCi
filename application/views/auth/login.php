<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="<?= base_url('Auth');?>" class="h1"><b>Login </b>Admin</a>
        </div>
        <div class="card-body">

            <?= $this->session->flashdata('message'); ?>

            <form action="<?= base_url('Auth');?>" method="post">
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
                <div class="row">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <br>
                </div>
            </form>
            
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box --