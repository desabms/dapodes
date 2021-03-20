<section class="section" data-background="<?php echo base_url(); ?>assets/img/unsplash/login-bg.jpg">
    <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-md-1 min-vh-100 order-2 bg-white rounded">
            <div class="p-4 m-3">
                <h4 class="text-dark font-weight-normal p-4 m-3 text-center"><span class="font-weight-bold ">DAPODES</span></h4></br>
                <!-- <p class="text-muted">Before you get started, you must login or register if you don't already have an account.</p> -->
                <form method="POST" action="<?= site_url(); ?>" class="needs-validation" novalidate="">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                        <div class="invalid-feedback">
                            Please fill in your email
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                        </div>
                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                        <div class="invalid-feedback">
                            please fill in your password
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                        </div>
                    </div>

                    <div class="form-group text-right">
                        <a href="auth-forgot-password.html" class="float-left mt-3">
                            Forgot Password?
                        </a>
                        <input type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4" value="Masuk">
                        </input>
                    </div>

                </form>

                <div class="text-center mt-5 text-small">
                    Copyright &copy; Akunku.my.id
                </div>
            </div>
        </div>
        <?php $this->view('messages') ?>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom">
            <div class="absolute-bottom-left index-2">
                <div class="text-light p-5 pb-2">
                    <div class="mb-5 pb-3 text-center">
                        <h1 class="mb-2 display-4 font-weight-bold">DAPODES</h1>
                        <h5 class="font-weight-normal text-muted-transparent">Data Potensi Desa</h5>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>