<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>ИС "Сервера Moodle"</title>

    <!-- Latest compiled and minified CSS -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <style type="text/css">
        body {
            padding-top: 70px;
            padding-bottom: 30px;
        }
    </style>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
<!-- navigation panel -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-education"></span> ИС Сервера Moodle</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="http://kemsu.ru/">КемГУ</a></li>
                <li><a href="http://iais.kemsu.ru/">"ЭИОС"</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- end of navigation panel -->
<!-- container -->
<div class="container-fluid">
    <div class="row">
        <!-- side panel -->
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <ul class="nav nav-sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <span data-feather="home"></span>
                                Главная
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="serverRegistr.php">
                                <span data-feather="server"></span>
                                Регистрация сервера
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Привязка</span>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="link"></span>
                                Дисциплин
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="UsersRelations.php">
                                <span data-feather="link"></span>
                                Студентов
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="link"></span>
                                Преподавателей
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="link"></span>
                                Элементов оценивания
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Отчеты</span>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link active" href="reports.php">
                                <span data-feather="file-text"></span>
                                По институтам
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                По преподавателям
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                По годам
                            </a>
                        </li>
                    </ul>
                </div>
            </ul>
        </nav>
        <!-- end side panel -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
