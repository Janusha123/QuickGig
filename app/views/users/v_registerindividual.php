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
                <div class="form-input-title">Full Name</div>
                <input type="text" name="name" id="name" placeholder="Enter your full name" value="<?php echo $data['name'];?>">
                <span class="form-invalid"><?php echo $data['name_err'];?></span>
                <br>
                <!-- email -->
                <div class="form-input-title">Email Address</div>
                <input type="text" name="email" id="email" placeholder="Enter your email" value="<?php echo $data['email'];?>">
                <span class="form-invalid"><?php echo $data['email_err'];?></span>
                <br>
                <!-- password -->
                <div class="form-input-title">Password</div>
                <input type="password" name="password" id="password" placeholder="Enter password" value="<?php echo $data['password'];?>">
                <span class="form-invalid"><?php echo $data['password_err'];?></span>
                <br>

                <!-- confirm password -->
                <div class="form-input-title">Confirm Password</div>
                <input type="password" name="confirm_password" id="Confirm password" placeholder="Confirm password" value="<?php echo $data['confirm_password'];?>">
                <span class="form-invalid"><?php echo $data['confirm_password_err'];?></span>
                <br><br>
                <!-- submit -->
                <input type="submit" value="Continue" class="form-btn">
            </form>
            <div class="signup-directtologin">Already have an account? <a href="<?php echo URLROOT; ?>/users/loginindividual">Login</a></div>
            </div>
            
            
            </div>
        </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>