<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trinity | login</title>
    <link rel="icon" href="img/logo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row">
                    <?php

                    require "header.php"

                    ?>
                </div>
                <div class="row justify-content-center h-100">
                    <div class="row rbr bar">
                        <div class="col-2 m-2">
                            <a href="#" class="link-dark"><span>Home</span></a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-diamond-fill" viewBox="0 0 16 16">
                                <path d="M2.45 7.4 7.2 1.067a1 1 0 0 1 1.6 0L13.55 7.4a1 1 0 0 1 0 1.2L8.8 14.933a1 1 0 0 1-1.6 0L2.45 8.6a1 1 0 0 1 0-1.2z" />
                            </svg>
                            <a href="#" class="link-dark"><span>About us</span></a>
                        </div>
                    </div>
                    <div class="col-4 h-100">
                        <div class="row text-center m-3">
                            <h5 class="fw-bold">LOG IN</h5>
                        </div>
                        <hr>
                        <div class="row d-none" id="msgdiv">
                            <div class="alert alert-dark" role="alert" id="alertdiv">
                                <span class="text-danger" id="msg2"></span>
                            </div>
                        </div>
                        <?php

                        $email = "";
                        $password = "";

                        if (isset($_COOKIE["email"])) {
                            $email = $_COOKIE["email"];
                        }

                        if (isset($_COOKIE["password"])) {
                            $password = $_COOKIE["password"];
                        }

                        ?>
                        <div class="row m-3">
                            <input type="email" class="form-control" placeholder="Email" id="email2" value="<?php echo $email; ?>">
                        </div>
                        <div class="row m-3">
                            <input type="password" class="form-control" placeholder="Password" id="password2" value="<?php echo $password; ?>">
                            <div class="col-5"><input type="checkbox" value="1" id="rememberme"><span class="mx-1 fsr">remember me</span></div>
                        </div>
                        <hr>
                        <div class="row text-center m-2">
                            <a href="#" class="link-dark" onclick="forgotPassword();">Forgot your password?</a>
                        </div>
                        <div class="row m-3 justify-content-center">
                            <button class="btn btn-dark btn-sgn" onclick="signin();">SIGN IN</button>
                        </div>
                        <div class="row flex justify-content-center">
                            <div class="col-1 m-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                            </div>
                            <div class="col-1 m-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                    <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                </svg>
                            </div>
                            <div class="col-1 m-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16">
                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z" />
                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>

            <div class="modal" tabindex="-1" role="dialog" id="forgetPasswordModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Reset Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">

                                <div class="col-6">
                                    <label class="form-label">New Password</label>
                                    <div class="input-group mb-3">

                                        <input type="password" class="form-control" id="npi">
                                        <button class="btn btn-outline-secondary" id="npb" onclick="showPassword();">
                                        <i class="bi bi-eye-slash" id="e1"></i>
                                        </button>

                                    </div>

                                </div>
                                <div class="col-6">
                                    <label class="form-label">Re-try Password</label>
                                    <div class="input-group mb-3">

                                        <input type="password" class="form-control" id="npi2">
                                        <button class="btn btn-outline-secondary" id="npb2" onclick="showpassword2();">
                                        <i class="bi bi-eye-slash" id="e2"></i>
                                        </button>

                                    </div>

                                </div>
                                <div class="div-12">
                                    <label class="form-label">Varification Code</label>
                                    <input type="text" class="form-control" id="vcode">
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                            <button type="button" class="btn btn-primary" onclick="changePassword();">Change password</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <p class="text-center">&copy; 2023, <a href="#">NEXTVIDA Software Solution</a>.</p>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>