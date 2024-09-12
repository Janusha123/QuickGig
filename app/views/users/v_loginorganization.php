<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="signup">
    <div class="signup_left">
        <div class="signup_logo">
            <img src="<?php echo URLROOT; ?>/public/assets/img/logo.png" alt="Description of image">
        </div>
        <div class="signup_picture">
            <img src="<?php echo URLROOT; ?>/public/assets/img/signup-page-image.png" alt="Description of image">
        </div>
    </div>
    <div class="signup_form-container">
        
        <div class="form-container" style="height: 500px;">
            <div class="signup-user-roles">
                <div><a href="<?php echo URLROOT; ?>/users/loginindividual">Individual</a></div>
                <div><a href="<?php echo URLROOT; ?>/users/loginorganization">Organization</a></div>
            </div>
            <div class="form-handler">
                <center><h1>Welcome Back</h1></center>
            </div>
            <form action="<?php echo URLROOT?>/Users/register" method="POST">
                <!-- email -->
                <div class="form-input-title">Email Address</div><br>
                <input type="text" name="email" id="email" placeholder="Enter your email" value="">
                <span class="form-invalid"></span>
                <br><br>
                <!-- password -->
                <div class="form-input-title">Password</div><br>
                <input type="password" name="password" id="password" placeholder="Enter password" value="">
                <span class="form-invalid"></span>
                <br><br>
                <!-- submit -->
                <input type="submit" value="Login" class="form-btn">
            </form>
            <br>
            <div class="signup-directtologin"><a href="<?php echo URLROOT; ?>/users/registerorganization">Sign Up</a></div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>