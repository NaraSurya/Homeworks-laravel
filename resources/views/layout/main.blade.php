<!doctype html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto:400,500" rel="stylesheet">
        <style>
            body{
                background-color: rgb(245, 245 , 245);
                font-family: 'Roboto', sans-serif;
                font-family: 'Raleway', sans-serif;
            }
            nav{
                font-family: 'Roboto', sans-serif;
                font-weight: 500 !important;
            }
            .font-roboto{
                font-family: 'Roboto', sans-serif;
            }
            .btn{
                -moz-border-radius:28px;
                -webkit-border-radius:28px;
                border-radius:28px;
                
                display:inline-block;
                cursor:pointer;
                color:#ffffff;
                
                
            }
            .btn-table{
                width : 80px !important;
            }
            .btn-purple{
                background-color: #6252B3;
                color: white;
            }
            .btn-purple:hover{
                background-color: #2612AA;
                color: white;
            }
            .btn-submit{
                width : 30vw;
            }
            .heading{
                font-family: 'Raleway', sans-serif;
            }
            .card-identity{
                background-color: #6252B3;
                color: #ffffff;
                border-radius: 5px;
                font-family: 'Raleway', sans-serif;
                font-weight: 500 !important;
                padding: 10px;
                margin-bottom: 10vh;
            }
            .form-group{
                margin-bottom: 5vh;
            }
           
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-white py-3">
            <div class="container">
                <a class="navbar-brand" href="#">Nara Surya</a>
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav nav-pills mx-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link mx-3" href="mahasiswa">Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-3" href="prodi">Prodi</a>
                        </li>
                    </ul>
                </div>
                <div class="ml-auto">
                    <a class="btn btn-sm btn-purple p-2 px-3" href="#">Source Code</a>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row my-5">
                <div class="col-12">
                    <h3 class="text-center heading">  Homework Prognet-Laravel  </h3>
                </div>
            </div>
            
            <div class="row card-identity ">
                <div class="col-12 text-center ">
                    <h5>Ida Bagus Agung Nara Surya Darma</h5>
                    <h6 class="lead">1705551075</h6>
                </div>
            </div>

            @yield('content')
        </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
</html>