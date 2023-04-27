<?php include "../help/db.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['title']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<?php include "../help/header.php"?>
<body>

<?php
    $blog = mysqli_query( $connection, "SELECT * FROM `Blog` ");
    
    
?>

<section id="first">

    <h1 class="h1">Blog</h1>

            <div class="blogy">

            
             
               <?php while($bloget = mysqli_fetch_assoc($blog)){
               ?>

                <div class="blog">

                    <h1><?php echo $bloget['title'];?></h1>

                    <img src="../icon/wiki.jpg" alt="#">

                    <p><?php echo $bloget['text'];?></p>

                    <h5 class="date"><?php echo $bloget['pubdate'];?></h5>

                </div>

                <?php }?>


                

            

            </div>

            
                

                

            


        

    </section>

    
</body>
</html>