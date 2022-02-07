<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v4.6</title>

    <!-- Css Files -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/dist/css/dashboard.css" rel="stylesheet">

</head>

<body>

    <!-- Login Page Start -->
    <section id="login">
        <div class="container">
            <div class="row" style="height: 60vh;">
                <div class="col-5 mx-auto my-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            Admin Paneline Hoş Heldiniz
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="E-Mail Adresiniz">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="sifre" class="form-control" placeholder="Şifreniz">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success w-100">Giriş Yap</button>
                                </div>
                            </form>

                            <?php
                            if ($_POST) {
                                if ($_POST['email'] == 'admin@admin.com' && $_POST['sifre'] == 123) {
                                    $_SESSION['email'] = $_POST['email'];
                                    echo '<div class="alert alert-success">Kullanıcı Adı ve Şifre Doğru</div>';
                                    echo '<meta http-equiv="refresh" content="2; url=dashboard.php">';
                                } else {
                                    echo '<div class="alert alert-danger">Kullanıcı Adı ve/veya Şifreniz Hatalı</div>';
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Page End -->



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="../assets/dist/js/dashboard.js"></script>
</body>

</html>