<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
    <form method="post" class="login100-form validate-form mt-5">
					<span class="login100-form-title p-b-49">
						Register
					</span>
        <div class="col-12 col-6 mb-3">
            <span style="margin-left: 26%"><?php $userController->register();?></span>
        </div>
        <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
            <span class="label-input100">Username</span>
            <input class="input100" type="text" name="username" placeholder="Type your username">
            <span class="focus-input100" data-symbol="&#xf206;"></span>
        </div>
        <div class="wrap-input100 validate-input m-b-23" data-validate="Email 1is reauired">
            <span class="label-input100">Email</span>
            <input class="input100" type="text" name="email" placeholder="Type your email">
            <span class="focus-input100" data-symbol="&#xf206;"></span>
        </div>
        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="Type your password">
            <span class="focus-input100" data-symbol="&#xf190;"></span>
        </div>
        <div class="container-login100-form-btn mt-3">
            <div class="wrap-login100-form-btn mt-3">
                <div class="login100-form-bgbtn"></div>
                <button type="submit" class="login100-form-btn">
                    Register
                </button>
            </div>
        </div>
    </form>
</div>