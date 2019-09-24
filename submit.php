<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Rekrutacja</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Menu nawigacyjne</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/untitled">Zadanie 1<span class="sr-only">(current)</span></a>
            </li>

        </ul>

    </div>
</nav>

<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <?php

        echo 'Imię: ' . $_POST['name'];
        echo '<br>';
        echo 'Telefon: ' . $_POST['nr'];
        echo '<br>';
        echo 'Email: ' . $_POST['email'];

        ?>

    </div>

    <div class="container">
        <h1> Podsumowanie</h1>
        <div class="roww">


            <?php


            $nazwa = count($_POST['nazwa']);

            for ($i = 0; $i < $nazwa; $i++) {

//echo $_POST['calosc']
                echo '<table class="table">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>nazwa</th>';
                echo '<th>ilosc</th>';
                echo '<th>wartosc</th>';
                echo '<th>wartosc koncowa</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                echo '<tr>';
                echo '<td>"' . $_POST['nazwa'][$i] . '"</td>';
                echo '<td >"' . $_POST['ilosc'][$i] . '"</td>';
                echo '<td >"' . $_POST['wartosc'][$i] . '"</td>';
                echo '<td >"' . $_POST['wartosc_ko'][$i] . '"</td>';
                echo '</tr>';
                echo '</tbody>';

            }
            echo '<tfoot>';
            echo '<tr  class="table-secondary" text-align="right">';
            echo ' <th id="total" colspan="3"  >Total :</th>';
            echo ' <td>"' . $_POST['calosc'] . '"</td>';
            echo '</tr>';
            echo '<tfoot>';
            echo '</table>';

            ?>


        </div>

        <br>
        <div id="test">

        </div>

        <hr>

    </div> <!-- /container -->

</main>

<footer class="container">
    <p>&copy; Rekrutacja &copy;
        <?php
        $data = date("Y-m-d");
        echo " $data ";
        ?>
    </p>


</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
        crossorigin="anonymous"></script>

</body>
</html>
