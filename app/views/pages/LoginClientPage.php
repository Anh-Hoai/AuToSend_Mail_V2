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
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form method="post" action="/loginclient" class="user" onsubmit="return validateForm()">
                                    <div class="form-group">
                                        <input class="form-control form-control-user" placeholder="Enter Username..."
                                            name="username" id="username">
                                        <p id="usernameError" style="color: red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password">
                                        <p id="passwordError" style="color: red;"></p>
                                    </div>
                             
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                    <hr>
                                    <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a> -->
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="/forgot">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="/signinclient">Create an Account!</a>
                                </div>
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
            var username = document.getElementById("username").value;
            var password = document.getElementById("exampleInputPassword").value;

            document.getElementById("usernameError").innerText = "";
            document.getElementById("passwordError").innerText = "";

            if (username.trim() === "") {
                document.getElementById("usernameError").innerText = "Username cannot be empty";
                return false;
            }

            if (password.trim() === "") {
                document.getElementById("passwordError").innerText = "Password cannot be empty";
                return false;
            }

            // Additional validation logic can be added here

            return true;
        }
    </script>
