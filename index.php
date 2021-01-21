<?php setlocale(LC_TIME, 'fra_fra'); 

$date = strftime('%d %B %Y');
$heure = strftime('%H:%M');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Montserrat&display=swap"
        rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/clock.css">


    <title>Accueil | Jérôme Albrecht</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center ">
            <div class="col-12">

            </div>
            <div class="col-sm-12 text-center">

                <style>
                    @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800');
                </style>

                <body>

<!-- Navigation -->
                    <div class="navigation">
                        <button id="sized" class="menu">
                            <span></span>
                        </button>
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content animated           zoomIn">
                                <div class="modal-header justify-content-center">
                                    <span class="text-center close">×</span>
                                </div>

                                <div class="modal-body nav">
                                    <ul>
                                        <li><a href="index.html">Accueil</a></li>
                                        <li><a href="formations.html">Formations</a></li>
                                        <li><a href="experiences.html">Expériences</a></li>
                                        <li><a href="références.html">Références</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <hr>
                                    <p>
                                        <strong>Amiens</strong>
                                        <br>Jérôme Albrecht &#149; 06.99.12.61.83 &#149;<br>
                                        <br>
                                        <b>jerome.albrecht80@gmail.com</b>
                                        <br>
                                        éléments graphiques: <b>Lucas Thomas</b>
                                    </p>
                                </div>
                            </div>
                        </div>

                </body>
                <div class="row justify-content-center mt-1">
                    <div class="col-sm-4 color text-center mt-4">
                        <div class="col-12 mar3">
                            <p class="notitles2 text-center"> Nous sommes le <?= $date ?> </p>
                            <div id="MyClockDisplay" class="clock text-center" onload="showTime()"></div>

                       

                                <a target="_blank" href="https://www.visualcv.com/pdfs/852222/" download="moncv.pdf"
                                    class="btn mt-5"><p class="colo notitles btn">Télécharger mon CV</p></a>
                          
                            <!-- <button type="button" class="btn btn-success mt-4 " id="GetFile">Mon CV</button> -->

                        </div>

                    </div>


                    <div class="col-sm-4 text-center color mt-4">


                        <!-- img center-->

                        <div class="border">
                            <img class="border img-fluid" src="./img/devwebamiens-min.jpg" />
                        </div>

                        <!-- Title -->
                        <div class="mt-3">
                            <h5>Jérôme Albrecht</h5>
                        </div>
                        <div class="title mt-3">
                            <h1>Développeur Web & Web Mobile en devenir</h1>
                        </div>



                    </div>
                    <div class="col-sm-4 color text-center mt-5">

                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="js/main.js"></script>
    <script src="js/clock.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
</body>

</html>