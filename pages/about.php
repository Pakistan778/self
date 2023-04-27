


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

    <h1 class="h1">Despre Noi</h1>

        c

            <div class="blog1">
             
               
                <div class="blog">
                    
                <p>Ce ne diferențiază pe noi, la Murf, de celelalte magazine online de animale 
                        de pe piață? Ei bine, suntem mai mult decât un simplu magazin online. Suntem
                        o comunitate de iubitori de animale, care înțelegem și împărtășim dragostea
                        ta pentru prietenii necuvântători. Ne preocupăm de bunăstarea și fericirea
                        animalelor de companie și ne dorim să oferim servicii de calitate, produse
                        de încredere și informații utile pentru a-i ajuta pe stăpânii 
                        responsabili să aibă grijă de animalele lor în cel mai bun mod posibil.

                        La Murf, găsești o gamă variată de produse pentru animalele de 
                        companie. De la hrana premium și gustări delicioase, la jucării 
                        distractive, accesorii utile și produse pentru îngrijirea sănătății
                        și igienei animalelor, avem tot ceea ce ai nevoie pentru a-ți 
                        răsfăța prietenul blănos. Colaborăm cu branduri de încredere și 
                        oferim produse de calitate superioară, pentru a asigura sănătatea
                        și confortul animalelor tale.

                        Un alt aspect important pentru noi la Murf este serviciul clienți 
                        de excepție. Echipa noastră de asistență este întotdeauna pregătită
                        să te ajute cu orice întrebări sau preocupări ai putea avea. Avem 
                        o abordare personalizată și prietenoasă, pentru a ne asigura că ai 
                        o experiență plăcută și fără probleme la cumpărăturile tale online 
                        pe site-ul nostru.

                        Pe lângă asta, ne dorim să fim mai mult decât un simplu magazin 
                        online. Vrem să fim o resursă de încredere pentru iubitorii de 
                        animale, oferind informații utile și sfaturi despre îngrijirea 
                        animalelor de companie. Pe blogul nostru vei găsi articole 
                        interesante despre nutriție, sănătate, comportament și multe 
                        altele, pentru a-ți sprijini rolul de stăpân responsabil și iubitor.

                        În plus, suntem preocupați de mediu și susținem protecția animalelor.
                         Ne asigurăm că produsele noastre sunt selectate cu atenție și că 
                         respectă cele mai înalte standarde de calitate și sustenabilitate. 
                         De asemenea, donăm o parte din veniturile noastre pentru a sprijini 
                         organizații de protecție a animalelor și să ne implicăm în diverse 
                         proiecte caritabile.</p>

                </div>

                


                

            

            </div>

            
                

                

            </div>


        </div>

    </section>




    
</body>
</html>