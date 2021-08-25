<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/public/img/favicon.ico" type="image/x-icon">
    <meta name="description" content="Бхоп статистика сервера"> 
    <meta name="keywords" content="бхоп,bhop,css,cs go">
    <meta name="author" content="Kepchuk">
    <title>Bhop Stat - Админ панель</title>
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/all.min.css"> 
    <link rel="stylesheet" type="text/css" href="/public/css/sweetalert2.min.css">
    
    <script src="/public/js/jquery.js"></script>
    <script src="/public/js/sweetalert2.all.min.js"></script>
    <script src="/public/js/main.js"></script>
    <script src="/public/js/form.js"></script>
    <script src="/public/js/popper.js"></script>
</head>
<body>
    <div class="container-fluid px-0 indent" id="refresh">
        <?php if ($this->route['action'] != 'login'):?>
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <div class="container-fluid">
                            <a class="navbar-brand text-logo" href="/">
                                <img src="/public/img/logo-light.svg" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy">
                                        BS - Админ панель
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarText">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="/">Перейти на сайт</a>
                                    </li>
                                </ul>
                                <span class="navbar-text">
                                    <a href="/admin/logout">Выход</a>
                                </span>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-12">
                    <div class="row bg-white padding-20">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/admin">Стили</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/admin/db">База Данных</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/admin/admins">Администраторы</a>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php endif;?>
	   <?php echo $content;?>
            </div>
        </div>
    </div>

	<script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/public/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>