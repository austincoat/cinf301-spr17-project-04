<script>function openLogin(loginName) {
    var i;
    var x = document.getElementsByClassName("Login");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(loginName).style.display = "block";
}</script>
<div class="w3-bar w3-black">
  <button class="button" onclick="openLogin('Login')">Login</button>
  <button class="button" onclick="openLogin('Create')">createAccount</button>
</div>

<div id="Login" class="Login">
	<h2>Welcome To CatBook! Log In below!</h2>
	<div class='background'> <div class='transbox'>
	<form method='post'>
		<p>
		  User: <input type='text' name='user' />
		</p>
		<p>
			Password: <input type='password' name='password' />
		</p>
		<p>
      <input type = "hidden" name="signup" value="0">
			<input type='submit' name='submit' value='login' />
		</p>
	</form>
	</div></div>
</div>

<div id="Create" class="Login" style="display:none">
	<h2>Welcome, sign up below!</h2>
	<div class='background'> <div class='transbox'>
	<form method='post'>
		<p>
		 User: <input type='text' name='user' />
		</p>
		<p>
			Password: <input type='password' name='password' />
		</p>
		<p>
      <input type = "hidden" name="signup" value="1">
			<input type='submit' name='Register' value='createUser' />
		</p>
	</form>
	</div></div>
</div>
