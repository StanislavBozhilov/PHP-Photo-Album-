<div class="center">
    <h1>Welcome to Viki's Gallery!</h1>
    <?php if (!$this->isLoggedIn) : ?>
        <a href="/account/login" id="login-button">Login</a>
        <a href="/account/register" id="register-button">Register</a>
    <?php endif; ?>
    <!--
    <div>
        <form id="loginForm" method="post" action="/home/index">
            <h3>Login</h3>
            <div>
                <label for="login-username">Username: </label>
                <input type="text" name="login-username"/>
            </div>
            <div>
                <label for="login-password">Password: </label>
                <input type="password" name="login-password"/>
            </div>
            <input type="submit" value="Login"/>
        </form>
    </div>

    <div>
        <form id="registerForm" method="post" action="/home/index">
            <h3>Register</h3>
            <div>
                <label for="register-username">Username: </label>
                <input type="text" name="register-username"/>
            </div>
            <div>
                <label for="register-password">Password: </label>
                <input type="password" name="register-password"/>
            </div>
            <input type="submit" value="Register"/>
        </form>
    </div>
    -->
</div>