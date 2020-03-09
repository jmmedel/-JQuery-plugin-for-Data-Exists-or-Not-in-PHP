<!DOCTYPE html>
<html>

<head>
    <title>How to make Jquery Plugin</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .input_check_message {
            color: #FF0000;
        }
    </style>
    <meta charset="UTF-8">
    <title>Login &amp; Register</title>

    <!--Bootstrap cdn-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <!--Font awesome cdn-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">

</head>

<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">

                <div class='card card-body  bg-light mt-2 mb-5'>
                    <h2>Register</h2>
                    <p>Please fill in credentials to Sign Up.</p>
                    <form action="" method='POST'>
                        <div class="form-group">
                            <label for='name'>Name: <sup>*</sup></label>
                            <input type='name' name="name" value="" class="form-control form-control-lg"  >
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for='username'>Username: <sup>*</sup></label>
                            <input type='text' id="username" name="username" value="" class=" input_check form-control form-control-lg is-invalid " data-type="username">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for='email'>Email: <sup>*</sup></label>
                            <input type='email' id="email" name="email" value="" class="input_check form-control form-control-lg  " data-type="email">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for='email'>Phone: <sup>*</sup></label>
                            <input type='phone' name="phone" value="" class="form-control form-control-lg ">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for='url'>Your Website URL: <sup>*</sup></label>
                            <input type='text' name="website" value="" class="form-control form-control-lg ">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for='password'>Password: <sup>*</sup></label>
                            <input type='password' name="password" value="" class="form-control form-control-lg ">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for='confirm_password'>Confirm Password: <sup>*</sup></label>
                            <input type='password' name="confirm_password" value="" class="form-control form-control-lg ">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="row">
                            <div class='col'>
                                <input type='submit' name='register' value='Register' class='btn  btn-block color-set'>
                            </div>
                        </div>
                        <div class="row">
                            <div class='col'>
                                <a href="">Have account? Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="check_availibilty.js"></script>
<script>
    $('.input_check').availibilityCheck();
</script>