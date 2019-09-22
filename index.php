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
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/untitled/index.php">Zadanie 1<span class="sr-only">(current)</span></a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="/untitled/zadanie2.php">Zadanie 2<span class="sr-only"></span></a>
            </li>
        </ul>

    </div>
</nav>

<main role="main">

    <div class="jumbotron">

    </div>

    <div class="container">

<!--        <h1> Przestrzen robocza</h1>-->

        <div class="roww">


            <form  action="submit.php" method="post" id="form">
                <div class="form-group">
                    <label for="exampleInputEmail1">Imie</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Imie" name="name" maxlength="20" required />
                </div>
                <div class="form-group">
                    <label for="phone">Nr telefonu</label>
                    <input type="number" class="form-control" id="phone" placeholder="Nr telefonu" name="nr" min="1" max="999999999" required />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required />
                </div>


<br>

            <h2>Wybierz ilość formularzy</h2>

                <select id="select" name="nazwa">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>


                <button id ="refresh" type="button"  class="btn btn-primary">Wyczysc wszystko</button>
        </div>
<br>
        <div id="test">
<!--           automatycznie generowane formularze-->


        </div>

        <hr>

    </div> <!-- /container -->

</main>

<footer class="container">
    <p>&copy; Rekrutacja &copy;
        <?php
        $data=date("Y-m-d");
        echo " $data ";
        ?>
    </p>


</footer>

<script type="text/javascript">



    $('#select').on('change', function() {
        let liczba = $(this).children("option:selected").val();

        if ($(this).val() != '0') {

            var a = document.getElementById('form');

            for (p = 1; p <= liczba; p++) {

                var b = document.createElement("input"); //input element, text
                b.setAttribute('placeholder', "Nazwa");
                b.setAttribute('type', "text");
                b.setAttribute('name', "nazwa[]");
                b.setAttribute('class', "form-control");

                var c = document.createElement("input"); //input element, text
                c.setAttribute('placeholder', "ilosc");
                c.setAttribute('id', "ilosc");
                c.setAttribute('type', "number");
                c.setAttribute('name', "ilosc[]");
                c.setAttribute('class', "form-control");

                var d = document.createElement("input"); //input element, text
                d.setAttribute('placeholder', "wartosc");
                d.setAttribute('id', "wartosc");
                d.setAttribute('type', "number");
                d.setAttribute('name', "wartosc[]");
                d.setAttribute('class', "form-control ");

                var e = document.createElement("input"); //input element, text
                e.setAttribute('placeholder', "wartosc koncowa");
                e.setAttribute('id', "wartosc_ko");
                e.setAttribute('type', "wartosc koncowa");
                e.setAttribute('name', "wartosc_ko[]");
                e.setAttribute('class', "form-control total");
                e.setAttribute('readonly', "true");

                var g = document.createElement("br");

                a.appendChild(b);
                a.appendChild(c);
                a.appendChild(d);
                a.appendChild(e);
                a.appendChild(g);

                document.getElementById('test').appendChild(a);
                console.log(p);
            }

            var z = document.createElement("input");
            z.setAttribute('value', "IN TOTAL");
            z.setAttribute('name', "calosc");
            z.setAttribute('id', "calosc");
            z.setAttribute('readonly', "true");
            z.setAttribute('class', "form-control");


            var s = document.createElement("input");
            s.setAttribute('type', "submit");
            s.setAttribute('value', "Submit");
            s.setAttribute('class', "btn btn-primary");


            a.appendChild(s);
            a.appendChild(z);

            document.getElementById('test').appendChild(a);
        }
            if (liczba > 0){
               $('select').hide();
            }


    }).trigger('change');


    $('#refresh').click(function() {
        location.reload(true);
    });



</script>

<script>

    $("body").on("change", 'input[id="wartosc"]', function (event) {

        var ilosc1=$(this).val();
        var ilosc2=$(this).prev('input').val();
        var ilosc3= ilosc1 * ilosc2;
        var wartosckoncowa = $(this).next('input').val(ilosc3);

    });

    $("body").on("change", ' input[id="ilosc"]', function (event) {

        var ilosc1=$(this).val();
        var ilosc2=$(this).next('input').val();
        var ilosc3= ilosc1 * ilosc2;
        var wartosckoncowa = $(this).next().next('input').val(ilosc3);

    });


</script>

<script>

    $("body").on('change', '#form', function() {
        var totalSum= 0;

        $('.total').each(function () {
                totalSum +=  +$(this).val();
            });

        $('#calosc').val(totalSum);

    });

</script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

</body>
</html>
