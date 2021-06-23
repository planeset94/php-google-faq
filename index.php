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
    <title>Google answer</title>
</head>
<body>
    
<div class="dataset">
    <?php foreach ($dataset as $data_el) {
        foreach ($data_el as $key => $value) { ?>

            <p><?=  $key;   ?></p>
            <p><?=  $value;   ?></p>

            

    <?php       
        }    
    }
    ?>

</div>
</body>
</html>