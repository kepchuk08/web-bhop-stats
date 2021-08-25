<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/public/img/favicon.ico" type="image/x-icon">
    <meta name="description" content="Бхоп статистика сервера"> 
    <meta name="keywords" content="бхоп,bhop,css,cs go">
    <meta name="author" content="Kepchuk">
    <title>Bhop Stat</title>
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap-reboot.rtl.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap-utilities.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/style-media.css">
    <link rel="stylesheet" href="/public/css/all.min.css"> 
<<<<<<< Updated upstream
=======
    <link rel="stylesheet" type="text/css" href="/public/css/sweetalert2.min.css">
    <script src="/public/js/jquery.js"></script>
    <script src="/public/js/sweetalert2.all.min.js"></script>
    <script src="/public/js/main.js"></script>
    <script src="/public/js/sortTable.js"></script>
    <script src="/public/js/form.js"></script>
    <script src="/public/js/popper.js"></script>

    
>>>>>>> Stashed changes
</head>

<body>
    <div class="container-fluid px-0 indent">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-logo" href="/">
                    <img src="/public/img/logo-light.svg" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy">
                        Bhop Stats
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/lastrocords">Последние рекорды</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/maps">Карты</a>
                        </li>  
                    </ul>
<<<<<<< Updated upstream
                    
=======
>>>>>>> Stashed changes
                </div>
                <form class="form-search" action="/" method="POST" class="d-flex">
                    <div class="input-group">
                        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-html="true" title="<em>Подсказка:</em><br><b>STEAM_x:x:xxxxx<br>[U:x:xxxxx]<br>Игровой ник<br>Ссылка в стиме</b>"><i class="fas fa-info-circle"></i></button>
                        <input type="text" name="name" class="form-control" placeholder="Поиск игрока">
                        <button class="btn btn-outline-secondary" type="submit" name="submit">Поиск</button>
                    </div>
                </form>
            </div>      
        </nav>
        <div class="row bg-white padding-20">
            <div class="col-3 indent block-info-pd">
                <div class="row block-info">
                    <div class="col-12 col-lg-7 block-info-text">ВСЕГО РЕКОРДОВ</div>
                    <div class="col-12 col-lg-5 block-info-value"><?php echo $statisticServer['Records']; ?></div>
                </div>
<<<<<<< Updated upstream
            </div>
            <div class="col-3 indent block-info-pd">
                <div class="row block-info">
                    <div class="col-12 col-lg-7 block-info-text">РЕКОРДОВ ОСНОВА</div>
                    <div class="col-12 col-lg-5 block-info-value"><?php echo $statisticServer['TrackBase']; ?></div>
                </div>
            </div>
            <div class="col-3 indent block-info-pd">
                <div class="row block-info">
                    <div class="col-12 col-lg-7 block-info-text">РЕКОРДОВ БОНУС</div>
                    <div class="col-12 col-lg-5 block-info-value"><?php echo $statisticServer['TrackBonus']; ?></div>
=======
            </div>
            <div class="col-3 indent block-info-pd">
                <div class="row block-info">
                    <div class="col-12 col-lg-7 block-info-text">РЕКОРДОВ ОСНОВА</div>
                    <div class="col-12 col-lg-5 block-info-value"><?php echo $statisticServer['TrackBase']; ?></div>
>>>>>>> Stashed changes
                </div>
            </div>
            <div class="col-3 indent block-info-pd">
                <div class="row block-info">
<<<<<<< Updated upstream
                    <div class="col-12 col-lg-7 block-info-text">ВСЕГО КАРТ</div>
                    <div class="col-12 col-lg-5 block-info-value"><?php echo $statisticServer['Maps']; ?></div>
                </div>
            </div>
=======
                    <div class="col-12 col-lg-7 block-info-text">РЕКОРДОВ БОНУС</div>
                    <div class="col-12 col-lg-5 block-info-value"><?php echo $statisticServer['TrackBonus']; ?></div>
                </div>
            </div>
            <div class="col-3 indent block-info-pd">
                <div class="row block-info">
                    <div class="col-12 col-lg-7 block-info-text">ВСЕГО КАРТ</div>
                    <div class="col-12 col-lg-5 block-info-value"><?php echo $statisticServer['Maps']; ?></div>
                </div>
            </div>
>>>>>>> Stashed changes
        </div>

        <?php echo $content;?>

        <div class="row bg-white padding-20">
            <div class="col-12 col-lg-6 footer-logo1">
                <img src="/public/img/logo.svg" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy">
            </div>
            <div class="col-12 col-lg-6 footer-logo2">
<<<<<<< Updated upstream
                <span><a href="">Bhop Stats</a> <i>v1.0</i> Developed by <a href="">kepchuk</a> © 2020</span>
            </div>
        </div>
    </div>
    <script src="/public/js/jquery.js"></script>
    <script src="/public/js/form.js"></script>
    <script src="/public/js/popper.js"></script>
=======
                <span><a href="https://github.com/kepchuk08/web-bhop-stats">Bhop Stats</a> <i>v1.2.0</i> Developed by <a href="https://steamcommunity.com/id/kepchuk/">kepchuk</a> © <?php echo date('Y');?></span>
            </div>
        </div>
    </div>


>>>>>>> Stashed changes
    <script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/public/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/public/js/main.js"></script>
</body>
</html>