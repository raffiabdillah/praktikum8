<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: blue;
        }
        .container .card {
            background: #D9D9D9;
            width: 500px;
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card mt-5 ml-auto mr-auto">
            <div class="card-body pl-4 pr-4 pb-4">
                <h5 class="card-title pt-3 pb-3 text-center">REGISTRASI</h5>
                <form method="post" class="needs-validation" novalidate action="simpan.php">
                    <div class="form-row">
                        <div class="col-md-2">
                            <label class="font-weight-bold">
                                Name
                            </label>
                        </div>
                        <div class="col-md-10 mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                            <div class="valid-feedback">
                                Valid
                            </div>
                            <div class="invalid-feedback">
                                Please fill out this field
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2">
                            <label class="font-weight-bold">
                                Email
                            </label>
                        </div>
                        <div class="col-md-10 mb-3">
                            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
                            <div class="valid-feedback">
                                Valid
                            </div>
                            <div class="invalid-feedback">
                                Please fill out this field
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2">
                            <label class="font-weight-bold">
                                Alamat
                            </label>
                        </div>
                        <div class="col-md-10 mb-3">
                            <input type="text" class="form-control" id="alamat" placeholder="Enter alamat" name="alamat" required>
                            <div class="valid-feedback">
                                Valid
                            </div>
                            <div class="invalid-feedback">
                                Please fill out this field
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2">
                            <label class="font-weight-bold">
                                Password
                            </label>
                        </div>
                        <div class="col-md-5 mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                            <div class="valid-feedback">
                                Valid
                            </div>
                            <div class="invalid-feedback">
                                Please fill out this field
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <input type="password" class="form-control" id="confirm" placeholder="Confirm password" name="confirm" required>
                            <div class="valid-feedback">
                                Valid
                            </div>
                            <div class="invalid-feedback">
                                Please fill out this field
                            </div>
                        </div>
                    </div>
                    <p>
                        Already have account?
                        <a href="signin.php">Login Here</a>
                    </p>
                    <button type="submit" class="btn btn-light">
                        Sign Up
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