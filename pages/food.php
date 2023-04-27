<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['title'];?></title>
    <link rel="stylesheet" href="style.css">
</head>
<?php include "../help/header.php";
include "../help/db.php";
?>

<?php
    $fod = mysqli_query( $connection, "SELECT * FROM `Food` ");
?>

<body>

    <div class="search">

        <div class="input-search">

            <input class="s_input" type="text">

            <button class="s_btn"><img src="../icon/free-icon-search-magnifier-symbol-of-interface-51658.png" alt="#"></button>

        </div>
                
    </div>
    
    <section id="first">

        <div class="shop">

            

                <?php 
                    $maxrow = 0; 
                    echo "<div class='shop1'>";
                    while($foodget = mysqli_fetch_assoc($fod)){
                    echo "<div class='block'>" ."<h1>".$foodget['title']."</h1>".
                    "<img src=../icon/image/".$foodget['image'].".jpg alt='#'>".
                    "<p>".mb_substr($foodget['text'], 0, 30)."</p>".
                    "<a href='#'><button class='sell'>Cumpără</button></a>".
                    "<h3>Preț:".$foodget['pret']."</h3>".
                    "<h3>".$foodget['categorie']."</h3>".
                    "</div>";                          
                    $maxrow++;
                    if ($maxrow == 3) {
                        echo "</div>";
                        echo "<div class='shop1'>";
                        $maxrow = 0;
                    }
                 }?>

            

        </div>

    </section>

</body>
</html>