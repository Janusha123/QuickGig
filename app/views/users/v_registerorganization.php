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
        
        <div class="form-container">
            <div class="signup-user-roles">
                <div><a href="<?php echo URLROOT; ?>/users/registerindividual">Individual</a></div>
                <div><a href="<?php echo URLROOT; ?>/users/registerorganization">Organization</a></div>
            </div>
            <div class="form-handler">
                <center><h1>Get More Oppurtunities</h1></center>
            </div>
            <form action="<?php echo URLROOT?>/Users/register" method="POST">
                <!-- name -->
                <div class="form-input-title">Organization Name</div>
                <input type="text" name="name" id="name" placeholder="Enter your organization name" value="">
                <span class="form-invalid"></span>
                <br>
                <!-- email -->
                <div class="form-input-title">Email Address</div>
                <input type="text" name="email" id="email" placeholder="Enter your email" value="">
                <span class="form-invalid"></span>
                <br>
                <!-- password -->
                <div class="form-input-title">Password</div>
                <input type="password" name="password" id="password" placeholder="Enter password" value="">
                <span class="form-invalid"></span>
                <br>

                <!-- confirm password -->
                <div class="form-input-title">Confirm Password</div>
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password" value="">
                <span class="form-invalid"></span>
                <br><br>
                <!-- submit -->
                <input type="submit" value="Continue" class="form-btn">
            </form>
            <div class="signup-directtologin">Already have an account? <a href="<?php echo URLROOT; ?>/users/loginorganization">Login</a></div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>