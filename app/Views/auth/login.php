```php
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Informasi Masjid Al Hikmah</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>

        body{
            min-height:100vh;
            background:
                linear-gradient(
                    rgba(0,0,0,.65),
                    rgba(0,0,0,.65)
                ),
                url('<?= base_url('assets/img/ui/background_header.jpg'); ?>');
            background-size:cover;
            background-position:center;
            background-repeat:no-repeat;
        }

        .login-card{
            backdrop-filter: blur(12px);
            background: rgba(255,255,255,.95);
            border-radius:20px;
        }

        .logo-masjid{
            width:100px;
            height:100px;
            object-fit:cover;
            border-radius:50%;
            border:4px solid #198754;
            padding:5px;
            background:#fff;
        }

        .btn-login{
            height:50px;
            font-weight:600;
        }

        .footer-login{
            font-size:13px;
            color:#6c757d;
        }

    </style>

</head>

<body>

<div class="container">

    <div class="row justify-content-center align-items-center min-vh-100">

        <div class="col-lg-5 col-md-7">

            <div class="card login-card border-0 shadow-lg">

                <div class="card-body p-5">

                    <div class="text-center mb-4">

                        <img src="<?= base_url('assets/logo/brand.jpg'); ?>"
                            class="logo-masjid mb-3">

                        <h2 class="fw-bold text-success mb-1">
                            Masjid Al Hikmah
                        </h2>

                        <p class="text-muted mb-0">
                            Sistem Informasi Manajemen Masjid
                        </p>

                    </div>

                    <?php if(session()->getFlashdata('error')): ?>

                        <div class="alert alert-danger">

                            <i class="bi bi-exclamation-circle"></i>

                            <?= session()->getFlashdata('error'); ?>

                        </div>

                    <?php endif; ?>

                    <form action="<?= base_url('process-login'); ?>" method="post">

                        <div class="mb-3">

                            <label class="form-label fw-semibold">

                                <i class="bi bi-person-circle"></i>
                                Username

                            </label>

                            <input type="text"
                                name="username"
                                class="form-control form-control-lg"
                                placeholder="Masukkan Username"
                                required>

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">

                                <i class="bi bi-lock-fill"></i>
                                Password

                            </label>

                            <input type="password"
                                name="password"
                                class="form-control form-control-lg"
                                placeholder="Masukkan Password"
                                required>

                        </div>

                        <button type="submit"
                            class="btn btn-success btn-login w-100">

                            <i class="bi bi-box-arrow-in-right"></i>

                            Login

                        </button>

                    </form>

                    <hr>

                    <div class="text-center footer-login">

                        <i class="bi bi-moon-stars-fill text-success"></i>

                        Masjid Al Hikmah © <?= date('Y'); ?>

                        <br>

                        Sistem Informasi Pengelolaan Masjid

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>

</html>
```
