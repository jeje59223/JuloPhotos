<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Polices de caractères -->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Kaushan+Script&display=swap" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" 
    integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" 
    crossorigin="anonymous">

    <!-- Feuilles de style -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <title>Contact Julo Photos</title>
</head>
<!--Accueil-->
<section id="nav">
        <nav id="navigation">
            <!-- raccourci a.nav*4 -->
            <a href="index.php#accueil" class="liensNav">Accueil</a>
            <a href="index.php#section-about" class="liensNav">Nos Réalisations</a>
            <a href="index.php#tarifs" class="liensNav">Nos Tarifs</a>
            <a href="contact.php" class="liensNav">Contact</a>
            <a class="icon" id="icon"><i class="fas fa-bars"></i></a>
        </nav>   
</section>
<section id="contacts">
    <div class="container">
        <div class="container text-center " id="contact">
        <?php
        if(isset($_POST['mail'])){
            $to = "jcnockaert@hotmail.fr";
            $from = $_POST['mail'];
            $object = $_POST['objet'];
            $message = $_POST['message'];
            mail($to, $object, $message, $from);
            ?>

            <div class="alert alert-success" role="alert">
                Message envoyé !
            </div>
        
        <?php } ?>                                                
            <h2>Formulaire de contact</h2>
            <form method="POST" action="#" id="form">
                <div class="form-group">
                    <label for="exampleInputEmail1">Adresse mail :</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="mail" placeholder="Entrez votre email">            
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Objet :</label>
                    <select class="form-control" id="objet" name="objet">
                        <option value="question">Question</option>
                        <option value="remarque">Remarque</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message :</label>
                    <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                </div>  
                <button type="submit" class="button-1">Valider</button>
            </form>
        </div>
        
    </div>
</section>
<footer>
    <a href="#accueil">
        <span <i class="fas fa-chevron-up"></i></span>                
    </a>
    <h5>© Julo Photos </h5>
</footer>    
</html>