<!DOCTYPE html>
<html>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php include('includes.php')?>
    <head>
        <title>Drapery - Login</title>
    </head>
    <body>
        <div class="container mt-5 mb-5">
            <div class="card">
                <h3 class="card-header layan-blue white-text text-center py-4">
                    <strong> Sign In </strong>
                </h3>
                <div class="card-body px-lg-5 pt-0">
                    <form class="form-group text-center" method="" id="" action="">
                        <input type="email" class="form-control text-center mt-5 mb-5" id="" name="" value="" placeholder="Email" />
                        <input type="password" id="defaultLoginFormPassword" class="form-control text-center mb-4" placeholder="Password">


                        <div class="d-flex justify-content-around">
                            <div>
                                <!-- Remember me -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                    <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                                </div>
                            </div>
                            <div>
                                <!-- Forgot password -->
                                <a href="">Forgot password?</a>
                            </div>
                        </div>

                         <!-- Sign in button -->
                        <button class="btn text-white layan-blue btn-block my-4" type="submit">Sign in</button>

                        <!-- Register -->
                        <p>Not a member?
                            <a href="">Register</a>
                        </p>

                        <!-- Social login -->
                        <p>or sign in with:</p>

                        <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f layan-text"></i></a>
                        <a href="#" class="mx-2" role="button"><i class="fab fa-twitter layan-text"></i></a>
                        <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in layan-text"></i></a>
                        <a href="#" class="mx-2" role="button"><i class="fab fa-github layan-text"></i></a>

                    </form>
                </div>
            </div>
        </div>
        <?php include('scripts.php')?>
    </body>
</html>
