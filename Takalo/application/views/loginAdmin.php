<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fidirana</title>

    <!-- Custom fonts for this template-->
    <link href="../../assets/Login/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="../../assets/logo/takaloIcon.png" rel="icon">
    <link href="../../assets/logo/takaloIcon.png" rel="apple-touch-icon">

    <!-- Custom styles for this template-->
    <link href="../../assets/Login/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../assets/Login/css/login.css" rel="stylesheet">
    <link href="../../assets/Login/css/login2.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image" id="image"></div>
                            <div class="col-lg-6">
                            <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><span style="color:blue;">Fidirana - Tompon'andraikitra</span></h1>
                                    </div>
                                    <form action="<?php echo site_url('admincnt/logtrait'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Adiresy email" name="mail" required value='admin@gmail.com'>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Kaody miafina" name="code" required value="admin">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" style="font-weight: bolder; font-family:12px; background-color:#209dd8;border-color : #209dd8;">
                                        Hiditra
                                        </button>
                                        <?php if (isset($erreur)) { ?>
                                            <p class="btn btn-primary btn-user btn-block" style="font-weight: bolder; font-family:12px; background-color:white;border-color : red; color: red; cursor:default;">
                                                <?php echo $erreur; ?>
                                            </p>
                                            <?php } ?>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>