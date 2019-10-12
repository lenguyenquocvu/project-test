<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('homes\css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('homes\css\admin.css')}}">
    <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('homes\font-awesome-4.7.0\css\font-awesome.min.css')}}">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.js"
        integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
    <script src="{{asset('homes\js\bootstrap.min.js')}}"></script>
    <title>Document</title>
</head>

<body>
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h4 class="text-white">Collapsed content</h4>
                <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
        </div>
        <nav class="navbar navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="form-inline mx-auto mt-2 mt-lg-0">
                <input class="form-control mr-sm-2" type="text"><i class="fa fa-search"></i>

            </form>
        </nav>
    </div>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">

        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Teacher</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container content">
        <div class="row">
            <div class="col-md-4">
                <h4>Môn học</h4>
                <div class="content-body">
                    <b>Chuyên đề phát triển web 1</b>
                    <p>Số tiết: 75</p>
                </div>

            </div>
            <div class="col-md-4">
                <h4>Lớp</h4>
                <div class="content-body">
                    <b>Chuyên đề phát triển web 1</b>
                    <p>Số tiết: 75</p>
                </div>
                <div class="content-body">
                    <b>Chuyên đề phát triển web 1</b>
                    <p>Số tiết: 75</p>
                </div>
            </div>
            <div class="col-md-4">
                <h4>Bài tập</h4>
                <div class="content-body add">
                    <b>
                        <p style="text-align: center">+</p>
                    </b>
                    <b></b>
                    <p></p>
                </div>
                <div class="content-body">
                    <div class="status active"></div>
                    <b>Chuyên đề phát triển web 1</b>

                    <div class="row">
                        <div class="col-md-6">
                            <p>Số tiết: 75</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <p>Sep-10</p>
                        </div>
                    </div>
                </div>
                <div class="content-body">
                    <div class="status busy"></div>
                    <b>Chuyên đề phát triển web 1</b>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Số tiết: 75</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <p>Sep-2</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</body>

</html>