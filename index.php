<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Polices de caractères -->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Kaushan+Script&display=swap" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">

    <!-- Feuilles de style -->
    <link rel="stylesheet" href="css/style.css">

    
    <title>Julo Photos</title>
</head>
<body>
    <!--Accueil-->
    <header id="accueil">
        <nav id="navigation">
            <!-- raccourci a.nav*4 -->
            <a href="index.php#accueil" class="liensNav">Accueil</a>
            <a href="index.php#section-about" class="liensNav">Nos Réalisations</a>
            <a href="#tarifs" class="liensNav">Nos Tarifs</a>
            <a href="contact.php" class="liensNav">Contact</a>
            <a class="icon" id="icon"><i class="fas fa-bars"></i></a>
        </nav>        
            <h1>Julo Photos.</h1>
            <h2>Le photographe qu'il vous faut !</h2>
            <a href="#section-about" id="arrow"><i class="fas fa-camera"></i></a>
    </header>

<!--Section about-->

    <section id="section-about" class="section-about">
        <div class="centerH">
            <h2 class="titreAbout">Découvrez nos réalisations.</h2>
        </div>
        <div class="row"> <!--ranger-->
            <div class="col-1-of-2"> <!-- 2 colonnes-->
                <h3 class="sousTitreAbout">Moi est la photographie</h3>
                <p class="paragraphe">
                    La photographie est l'un des langages les plus universels 
                    qui soit, et vous n'avez pas besoins de parler. Lorsque vous
                    vous servez d'un appareil photo, non pas comme d'une machine,
                    mais comme le prolongement de votre coeur, vous ne faites plus
                    qu'un avec votre sujet.                    
                </p>
                <h3 class="sousTitreAbout">Photographe de vos instants</h3>
                <p class="paragraphe">
                    Le meilleur moyen d'immortaliser vos instants, c'est la 
                    photographie ! Que ce soit pour vos mariages, anniversaires,
                    retraites, sorties, fêtes de famille et événements divers, 
                    gardez-en les meilleurs souvenirs grâce à Julo Photos ! 
                </p>
            </div>
            <div class="col-1-of-2">
                <div class="composition">
                    <img src="ressources/julo..jpg" alt="photo julo 3" 
                    class="composition_photo composition_photo--3">
                    <img src="ressources/julo8.jpg" alt="photo julo 1" 
                    class="composition_photo composition_photo--1">
                    <img src="ressources/julo5.jpg" alt="photo julo 2" 
                    class="composition_photo composition_photo--2">                    
                </div>
            </div>
        </div>
    </section>
  
    <!-- Section Tarifs -->
    <section id="tarifs">
        <h2>Exemples de Tarifs</h2>
        <div id="containerflex">
            <div class="flexCards">
                <div class="head">
                    <p>Mariages</p>
                </div>
                <div class="contenu">Shooting des mariés</div>
                <div class="contenu">Cérémonie</div>
                <div class="contenu">Soirée du mariage</div>
                <div class="contenu">1500 photos</div>
                <div class="prix">
                    <p>500€</p>
                </div>                
            </div>
            <div class="flexCards">
                <div class="head">
                    <p>Anniversaires</p>
                </div>
                <div class="contenu">Photos des préparatifs</div>
                <div class="contenu">Photos de l'anniversaire</div>
                <div class="contenu">Photos des cadeaux</div>
                <div class="contenu">150 photos</div>
                <div class="prix">
                    <p>150€</p>
                </div>                
            </div>
            <div class="flexCards">
                <div class="head">
                    <p>Retraites</p>
                </div>
                <div class="contenu">Photos des préparatifs</div>
                <div class="contenu">Photos du retraité</div>
                <div class="contenu">Soirée de la retraite</div>
                <div class="contenu">500 photos</div>
                <div class="prix">
                    <p>300€</p>
                </div>                
            </div>
        </div>
    </section>

    <!-- Section phrases Slide -->
    <section id="phrasesSlide">
        <div class="cadre">
            <div class="centre">
                <div class="carousel">
                    <div class="changeHidden">
                        <div class="contenant">
                            <div class="element">"Des photos de qualités"</div>
                            <div class="element">"Un service impeccable !"</div>
                            <div class="element">"Des tarifs très intéressants"</div>
                            <div class="element">"Respect des demandes"</div>
                            <div class="element">Des photos de qualités</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <a href="#accueil">
            <span <i class="fas fa-chevron-up"></i><h5>© Julo Photos </h5></span>         
        </a>       
    </footer>    
</body>
</html>