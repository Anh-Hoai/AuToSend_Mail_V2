<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <a href="/">Back</a>
                        <div class="text-center">

                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form method="post" action="/signinclient" class="user" onsubmit="return validateForm()">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputUsers"
                                    placeholder="Name Users" name="name">
                                <p id="usernameError" style="color: red;"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Email Address" name="email">
                                <p id="emailError" style="color: red;"></p>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password" name="password">
                                    <p id="passwordError" style="color: red;"></p>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleRepeatPassword" placeholder="Repeat Password" name="passwordrp">
                                    <p id="repeatPasswordError" style="color: red;"></p>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-user btn-block" type="submit">Register Account</button>
                            <hr>
                            <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a> -->
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="/loginclient">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
      function validateForm() {
        var username = document.getElementById("exampleInputUsers").value;
        var email = document.getElementById("exampleInputEmail").value;
        var password = document.getElementById("exampleInputPassword").value;
        var repeatPassword = document.getElementById("exampleRepeatPassword").value;

        document.getElementById("usernameError").innerText = "";
        document.getElementById("emailError").innerText = "";
        document.getElementById("passwordError").innerText = "";
        document.getElementById("repeatPasswordError").innerText = "";

        // Check for special characters or spaces in the username
        if (/[^a-zA-Z0-9]/.test(username)) {
            document.getElementById("usernameError").innerText = "Username should not contain special characters or spaces";
            return false;
        }

        // Check if the username is empty
        if (username.trim() === "") {
            document.getElementById("usernameError").innerText = "Username cannot be empty";
            return false;
        }

        // Check for a valid email format
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            document.getElementById("emailError").innerText = "Invalid email format";
            return false;
        }

        // Check if the password is empty
        if (password.trim() === "") {
            document.getElementById("passwordError").innerText = "Password cannot be empty";
            return false;
        }

        // Check if the repeat password is empty
        if (repeatPassword.trim() === "") {
            document.getElementById("repeatPasswordError").innerText = "Repeat Password cannot be empty";
            return false;
        }

        // Check if the passwords match
        if (password !== repeatPassword) {
            document.getElementById("passwordError").innerText = "Passwords do not match";
            document.getElementById("repeatPasswordError").innerText = "Passwords do not match";
            return false;
        }

        // Additional validation logic can be added here

        return true;
    }
</script>