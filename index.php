<?php include "help/db.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['title']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "help/header.php" ?>
    <section id="one">

        <div class="content">
            <h1>Alege fără Limite</h1>

            <h2>Mâncare & Vitamine<br>Pentru toți</h2>

            <a href="pages/food.php"><button>Cumpară Acum</button></a>
           
        </div>

        


    </section>
            <?php
                $articles = mysqli_query( $connection, "SELECT * FROM `Food` WHERE id=1");
                $art = mysqli_fetch_assoc($articles);
                
            ?>

</body>
</html>