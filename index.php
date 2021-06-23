<pre>
<?php 

include('./asset/php/db.php');
  
?>

</pre>


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
    <div class="logo">
        <img src="./asset/img/googlepng.png" alt="google logo">
    </div>
    <span>Privacy & Termini </span>
</header>
<div class="navbar">
   
 </div>





    
    <div class="dataset">
        <?php foreach ($dataset as $data_el) {
            foreach ($data_el as $key => $value) { ?>

                <p class="domanda"><?=  $data_el[$key];   ?></p>
                <p class="risposta"><?=  $data_el[$value];   ?></p>

        <?php       
            }    
        }
        ?>

    </div>
</div>
</body>
</html>