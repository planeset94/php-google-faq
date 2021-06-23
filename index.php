<?php 

include('./asset/php/db.php');
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/style.css">
    <title>Google answer</title>
</head>

<body>


    <div class="container">

        <header>
            <div class="header-cont">
                <div class="logo">
                    <a href="https://www.google.it/"><img src="./asset/img/googlepng.png" alt="google logo"></a>
                </div>
                <span>Privacy & Termini </span>
            </div>
            <div class="navbar">
                <div class="links">
                    <div class="link-cont"><a href="#">Introduzione</a> </div>
                    <div class="link-cont"> <a href="#">Norme sulla privacy</a></div>
                    <div class="link-cont"> <a href="#">Termini di servizio</a></div>
                    <div class="link-cont"> <a href="#">Tecnologie</a></div>
                    <div class="link-cont"> <a href="#">Domande frequenti</a></div>
                </div>
            </div>
        </header>







        <div class="dataset">
            <?php foreach ($dataset as $data_el) { ?>

            <p class="domanda"><?php echo  $data_el['question'];   ?></p>
            <p class="risposta"><?php echo $data_el['answer'];   ?></p>

            <?php       
           
        };
        ?>

        </div>
    </div>
</body>

</html>