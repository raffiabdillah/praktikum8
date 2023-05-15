<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: blue;
        }
        .container .card {
            background: #D9D9D9;
            width: 400px;
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card mt-5 ml-auto mr-auto">
            <div class="card-body pl-4 pr-4 pb-4">
                <h5 class="card-title pt-3 pb-3 text-center">SUDAH MEMILIKI AKUN?</h5>
                <form method="post" class="needs-validation" novalidate action="cek.php">
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
                        <div class="valid-feedback">
                            Valid
                        </div>
                        <div class="invalid-feedback">
                            Email is required
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                        <div class="valid-feedback">
                            Valid
                        </div>
                        <div class="invalid-feedback">
                            Password is required
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" required>
                                Remember me
                            <div class="valid-feedback">
                                Valid
                            </div>
                            <div class="invalid-feedback">
                                Check this checkbox to continue
                            </div>
                        </label>
                        <a href="signup.php" class="text-danger pl-5 ml-5">TIDAK TERDAFTAR?</a>
                    </div>
                    <button type="submit" class="btn btn-light">
                        Sign In
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form)
                {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>
</html>