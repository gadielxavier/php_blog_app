<?php require APPROOT . '/views/inc/header.php';?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5 mb-5">
            <h2>Login</h2>
            <p>Please fill in your credentials to log in</p>
            <form action="<?php echo URLROOT; ?>?url=users/login" method="post">
                <div class="form-group">
                    <label for="email">Email: <sup>*</sup></label>
                    <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" 
                    value="<?php echo $data['email']?>">
                    <span class="invalid-feedback"><?php echo $data['email_err']; ?> </span>
                </div>
                <div class="form-group">
                    <label for="password">Password: <sup>*</sup></label>
                    <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" 
                    value="<?php echo $data['password']?>">
                    <span class="invalid-feedback"><?php echo $data['password_err']; ?> </span>
                </div>
                <div class="row mt-3">
                    <div class="col d-grid">
                        <input type="submit" value="Login" class="btn btn-success">
                    </div>
                    <div class="col d-grid">
                        <a name="register_button" href="<?php echo URLROOT; ?>?url=users/register" class="btn btn-secondary">No account? Register!</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php';?>
