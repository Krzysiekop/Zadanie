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
            <li class="nav-item ">
                <a class="nav-link" href="/untitled/index.php">Zadanie 1</a>

            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/untitled/zadanie2.php">Zadanie 2<span class="sr-only">(current)</span></a>
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


<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019-09-21
 * Time: 10:46
 */

//$file = $_POST['fileToUpload'];


$errors= array();
$file_name = $_FILES['file']['name'];
$file_size = $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];
$file_type = $_FILES['file']['type'];
$file_explode =explode('.',$_FILES['file']['name']);
$file_ext=strtolower(end($file_explode));

$extensions= array("csv");

if(in_array($file_ext,$extensions)=== false){
    $errors[]="extension not allowed, please choose a csv file.";
}

if($file_size > 2097152) {
    $errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true) {
    move_uploaded_file($file_tmp,"files/".$file_name);
   // echo "Success";
}else{
    print_r($errors);
}



$arr = file("files/".$file_name);
echo "<table id='Table1' class='table table-striped' >\n\n";
Foreach(array_splice($arr,0,10000) as &$line) {
    $line = explode(";", $line);
    echo "<tr>";
    echo "<td>"  . '<input type="checkbox">' . "</td>";
        foreach ($line as $cell) {

            echo "<td>"  . $cell. "</td>";



        }
    echo "</tr>\n";
}
echo "\n</table>";


echo '<button id ="test" type="button" value="Get Selected" class="btn btn-primary">Zapisz</button>'
?>
            <div id="hidden_form" style="display:none">
                <form action="tabela.php" method="post">

                    <textarea class="form-control"  name="hidden_text"  id="hidden_text" style="height:300px" readonly></textarea>
                    <br>
                    <button type="submit" class="btn btn-primary"> Pobierz CSV </button>
                </form>

            </div>

        </div> <!-- /container -->

</main>

<footer class="container">
    <p> Rekrutacja &copy;
        <?php
        $data=date("d-m-Y");
        echo " $data ";
        ?>
    </p>


</footer>

<script>

    $(document).ready(function(){
       alert('Zaznacz checkbox przy wierszu ktory chcesz zapisać następnie zatwierdź przyciskiem "zapisz"')

    });



       $("#test").click(function () {
           var message = "";

           //  Loop through all checked CheckBoxes in GridView.
           $("#Table1 input[type=checkbox]:checked").each(function () {
               var row = $(this).closest("tr")[0];
               message +=  row.cells[1].innerHTML;
               message += ";" + row.cells[2].innerHTML;
               message += ";" + row.cells[3].innerHTML;
               message += ";" + row.cells[4].innerHTML;
               message += ";" + row.cells[5].innerHTML;
               message += "\n";

           });

           $( "#Table1" ).remove();
           $( "#test" ).remove();
           $("#hidden_form").show();
           $('#hidden_text').val(message);


           });

      </script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

</body>
</html>

