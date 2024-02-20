<style>
    .error {
    color: red;
    font-size: small;
}

</style>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">

                            <div class="p-5">
                                <a href="/">Back</a>
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back Admin Login!</h1>
                                </div>
                                <form method="post" action="/loginadmin" class="user" onsubmit="return validateForm()">
    <div class="form-group">
        <input class="form-control form-control-user" placeholder="Enter Username..." name="username" id="username">
        <div id="usernameError" class="error"></div>
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-user" id="exampleInputPassword"
               placeholder="Password" name="password">
        <div id="passwordError" class="error"></div>
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox small">
            <input type="checkbox" class="custom-control-input" id="customCheck">
            <label class="custom-control-label" for="customCheck">Remember Me</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
    <hr>
</form>

                                <hr>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<script>
   function validateForm() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('exampleInputPassword').value;
    var usernameError = document.getElementById('usernameError');
    var passwordError = document.getElementById('passwordError');
    var isValid = true;

    usernameError.innerText = '';
    passwordError.innerText = '';

    if (username.trim() === '') {
        usernameError.innerText = 'Username không được để trống';
        isValid = false;
    }

    if (password.trim() === '') {
        passwordError.innerText = 'Password không được để trống';
        isValid = false;
    }

    return isValid;
}

</script>