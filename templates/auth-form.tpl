

    <div class="col-md-6 col-sm-12">
        {if $mess != ''}
            <div class="alert alert-danger" role="alert">
                {$mess}
            </div>
        {/if}
        <div class="login-form">
            <form action="index.php" method="get">
                <input name="mod" type="hidden" value="auth">
                <div class="form-group">
                    <label>Login</label>
                    <input name="login" type="text" class="form-control" placeholder="Login">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="passw" type="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-black">Login</button>
            </form>
        </div>
    </div>
