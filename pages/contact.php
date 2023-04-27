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
    $cont = mysqli_query( $connection, "SELECT * FROM `contact` ");
    
    
?>

<section id="first">

    <h1 class="h1">Contact & Adress</h1>

        <div class="blogy">

            <div class="blog1">
             
               <?php while($contact = mysqli_fetch_assoc($cont)){
               ?>

                <div class="blog">
                    
                    <h1><?php echo $contact['feliala'];?></h1>

                    <p><?php echo $contact['adresa'];?></p>

                    <h3><?php echo $contact['number'];?></h3>

                    <h6><?php echo $contact['program'];?></h6>

                </div>

                <?php }?>

                <p class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1665.7892656308204!2d28.86979099368715!3d46.98607225335563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c9794f8e48f42f%3A0x2cf814bcaef210a1!2sCEITI!5e0!3m2!1sru!2s!4v1681910312962!5m2!1sru!2s" 
                    width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>


                

            

            </div>

            
                

                

            </div>


        </div>

    </section>

    
</body>
</html>