<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Finper - Login
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
        .login_form {
            background-color: #fff;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            border-top: 1px solid #ccc;
            border-right: 1px solid #ccc;
        }

        form {
            padding: 0 2em;
        }
        
        ::placeholder {
        color: rgb(19,85,137);
        opacity: 1;
        }

        .form__input {
            width: 100%;
            border: 0px solid transparent;
            border-radius: 0;
            border-bottom: 1px solid #aaa;
            padding: 1em .5em .5em;

            outline: none;
            margin: 0.5em auto;
            transition: all .5s ease;
        }

        .form__input:focus {
            border-bottom-color: #008080;
            box-shadow: 0 0 5px rgba(0, 80, 80, .4);
            border-radius: 4px;
        }

        .form_button {
            box-shadow: none;
            width: 100%;
            height: 40px;
            background-color: rgb(19,85,137);
            color: #fff;
            border-radius: 25px;
            box-shadow: 3px 3px 3px #b1b1b1,
                -3px -3px 3px #fff;
            letter-spacing: 1.3px;
        }

        .form_button {
            background-color: rgb(19,85,137);
        }
    </style>
    <!-- Section: Design Block -->
    <section class="">
        <div style="background-color:rgb(19,85,137);width: auto; height: 50px;margin:auto;padding-left: 50px;">
        </div>
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container">
                <div class="row gx-lg-5 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <img src="{{ ('img/gambar_aperta-removebg-preview.png') }}" style="width: 400px" alt="GAMBAR">
                        <h1 class="my-5 display-3 fw-bold ls-tight">
                            Welcome To <br />
                            <span class="text-dark"><b>FINPER</b></span>
                        </h1>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card" style="border-radius: 5%; width: 332px; height: 428px;">
                            <div class="card-body py-6 px-md-6">
                                <form>
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="card-body p-6 shadow-6 text-center">
                                        <h2 class="fw-bold mb-6">Daftar</h2>
                                        <form>
                                            <!-- 2 column grid layout with text inputs for the first and last names -->
                                            <div class="row">
                                                <form control="" class="form-group">
                                                    <div class="row">
                                                        <input type="text" name="username" id="username"
                                                            class="form__input" placeholder="Username">
                                                    </div>

                                                    <div class="row">
                                                        <!-- <span class="fa fa-lock"></span> -->
                                                        <input type="number" name="nomor" id="nomor" class="form__input"
                                                            placeholder="Nomor Telepon">
                                                    </div>

                                                    <!-- Email input -->
                                                    <div class="row">
                                                        <input type="email" name="email" id="email" class="form__input"
                                                            placeholder="Email" />

                                                    </div>


                                                    <!-- Password input -->
                                                    <div class="row">
                                                        <!-- <span class="fa fa-lock"></span> -->
                                                        <input type="password" name="password" id="password"
                                                            class="form__input" placeholder="Password">
                                                    </div>

                                                    <div class="text-center">
                                                        Sudah memiliki akun? <a href="https://sapuangin.its.ac.id/"
                                                            target="_blank">Masuk </a>

                                                    </div>

                                                    <!-- Submit button -->
                                                    <button class="form_button">Daftar</button>

                                                    <!-- Register buttons -->

                                                </form>
                                            </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->