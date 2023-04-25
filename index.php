<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("parts/head.php") ?>
    <title>Alain Silberstein</title>
    <meta name="description" content="Alain Silberstein, architecte horloger au design Bauhaus unique.">
</head>

<body">
    <?php include("parts/header.php") ?>
    <main class="container">
        <div class="slider container flex justify-between align-center">
            <div class="large-50 small-100">
                <div class="img-slider">
                    <img src="img/Img slider.png" alt="Alain Silberstein Krono 2">
                    <a href="produit.php" title="Alain Silberstein Krono 2" class="btn-color">Découvrir</a> 
                </div>
                <div class="flex small-100 large-none small-block"><!-- Nav slider -->
                <div class="large-50 flex">
                    <a href="Prec" title="Precedant" class="btn btn-center btn-space">Prec</a>
                    <a href="Suiv" title="Suivant" class="btn btn-center">Suiv</a>
                </div>
                <div class="large-50 ">
                    <a href="1" title="1" class="btn btn-center btn-space"> 01 </a>
                    <a href="2" title="2" class="btn btn-center btn-space"> 02 </a>
                    <a href="3" title="3" class="btn btn-center"> 03 </a>
                </div>
            </div>
            </div>
            <div class="large-50 small-100">
                <h1>Alain</br>après Alain</h1>
                <h2>Architecte horloger depuis 1984</h2>
                <p class="histoire">On l'avait cru disparu un temps, mais l'architecte horloger de renom va poursuivre son histoire. Après sa retraite et la fermeture de l'entreprise en ce début d'année, Alain Silberstein rouvre donc ses portes.</br>
                Bien sûr, Alain lui-même ne conduira plus les rênes de l'entreprise, mais son esprit demeure de même que restent à nos côtés ses trois plus fidèles disciples dont le maître horloger Fabrise Concieux, MOF 2016.</p>
                <a href="histoire.php" title="En savoir plus" class="btn btn-center">En savoir plus</a>
            </div>
            <div class="flex large-100 small-none"><!-- Nav slider -->
                <div class="large-50 flex">
                    <a href="Prec" title="Precedant" class="btn btn-center btn-space">Prec</a>
                    <a href="Suiv" title="Suivant" class="btn btn-center">Suiv</a>
                </div>
                <div class="large-50">
                    <a href="1" title="1" class="btn btn-center btn-space"> 01 </a>
                    <a href="2" title="2" class="btn btn-center btn-space"> 02 </a>
                    <a href="3" title="3" class="btn btn-center"> 03 </a>
                </div>
            </div>
        </div>
        <div> <!-- Collections -->
            <div class="flex align-center section">
                <div class="large-50 small-100 bg-bauhaus">
                    <h3 class="large-line-left line-title">Bauhaus</h3>
                    <div class="separator"></div>
                    <p class="small-none">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    <div class="separator"></div>
                    <a href="bauhaus.php" title="Voir la collection Bauhaus" class="btn btn-center">Voir la collection</a>
                </div>
                <div class="large-50 small-none">
                    <img src="img/Bauhaus.jpg" alt="Collection Bauhaus"/>
                </div>
            </div>
            <div class="separator small-none"></div>
            <div class="flex align-center text-right">
                <div class="large-50 small-none">
                    <img src="img/Krono.jpg" alt="Collection Krono"/>
                </div>
                <div class="large-50 small-100 bg-krono">
                    <h3 class="large-line-right line-title">Krono</h3>
                    <div class="separator"></div>
                    <p class="small-none">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    <div class="separator"></div>
                    <a href="krono.php" title="Voir la collection Krono" class="btn btn-center">Voir la collection</a>
                </div>
            </div>
        </div>
    </main>
    <?php include("parts/social.php") ?>
    <?php include("parts/articles.php") ?>
    <?php include("parts/services.php") ?>
    <?php include("parts/newsletters.php") ?>
    <?php include("parts/footer.php") ?>
</body>

</html>