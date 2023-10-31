<?php
    if (isset($_POST) && isset($_POST['click'])){
        echo '<script> alert("'.'Votre message a bien été envoyer'.'")</script>';
        
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $newContact =[
            'prenom'=> $prenom,
            'nom'=> $nom,
            'email'=> $email,
            'message'=> $message
        ];
        $content = file_get_contents('index.json');
        $allContact = json_decode($content, true);
    
            array_push($allContact, $newContact);
            $content = json_encode($allContact);
            file_put_contents('index.json', $content);
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Porfolio</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>
<body>
    <div id="page">
        <div id="header">
         <div id="user_image">
            <img src="./assets/images/lioness-4074897__340.jpg" alt="images">
         </div>
         <div id="user_info">
             <h3>Boune Abdoulaye</h3>
             <h3> Mbacke</h3>
             <h4>Dirécteur Technique KHEWEUL TECH/Développeur Full-stack </h4>
             <h4>PDG Elegance Pure</h4>
         </div>
        </div>
        <div id="conteneur_principale">
             <h3 class="titre">À propos de moi</h3>
             <div class="infos">
                <div class="infos_gauche">
                   <div><span>Prénom et Nom</span> Boune Abdoulaye Mbacke</div>
                   <div><span>Téléphone:</span>+221778358196</div> 
                    <div><span>E-mail</span>mbackeboune@gmail.com</div>
                    <div><span>Adress</span>Dakar/Ouakam/Cité Avion</div>
                </div>
                <div class="infos_droit">
                  <h3>Bonjours</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                      Tenetur magnam iure earum placeat voluptatem maxime velit atque,
                       fugit quae autem a voluptatum voluptas quasi alias voluptates
                        facere? Magnam, distinctio veniam!</p>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci
                       excepturi id, facilis omnis inventore repellat aspernatur
                        eveniet voluptate nobis, eum, cumque totam non hic fugit nulla
                         itaque sequi unde veniam.</p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero assumenda 
                      asperiores similique sunt non minus accusamus, iure, temporibus 
                      natus voluptatibus, vero culpa inventore quaerat quidem incidunt 
                      neque accusantium suscipit corporis?</p>
                      <div id="social_icons">
                          <a href="https://www.facebook.com" ><img src="./assets/images/icons8-facebook-50.png" alt=""></a>
                          <a href="https://www.instagram.com"><img src="./assets/images/icons8-instagram-50.png" alt=""></a>
                          <a href="https://www.twitter.com"><img src="./assets/images/icons8-logo-twitter-encadré-50.png" alt=""></a>
                      </div>
                </div>
             </div>
             <h3 class="titre">Mon Cv</h3>
             <div class="mon_cv">                
                <ul>
                    <h3>EXPERIENCE PROFESSIONNELLE</h3>
                    <li>
                        <div class="li_gauche">
                        <h4>DEVELOPPEUR Sénior</h4>
                        <h5>Nom de l'entreprise - 2015 - actuel</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur 
                            adipisicing elit. Aut quibusdam accusamus 
                            cupiditate enim tenetur? Ipsam, beatae voluptate? 
                            Porro culpa rerum officia molestias laborum aut
                             beatae minima, ratione, ipsa, saepe placeat.</p>
                        </div>
                    </li>
                    <li>
                      <div class="li_droit">
                        <h4>DEVELOPPEUR Sénior</h4>
                        <h5>Nom de l'entreprise - 2015 - actuel</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur 
                            adipisicing elit. Aut quibusdam accusamus 
                            cupiditate enim tenetur? Ipsam, beatae voluptate? 
                            Porro culpa rerum officia molestias laborum aut
                             beatae minima, ratione, ipsa, saepe placeat.</p>
                       </div>
                    </li>
                    <li>
                        <div class="li_gauche">
                        <h4>DEVELOPPEUR Sénior</h4>
                        <h5>Nom de l'entreprise - 2015 - actuel</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur 
                            adipisicing elit. Aut quibusdam accusamus 
                            cupiditate enim tenetur? Ipsam, beatae voluptate? 
                            Porro culpa rerum officia molestias laborum aut
                             beatae minima, ratione, ipsa, saepe placeat.</p>
                        </div>
                    </li>
                    <li>
                        <div class="li_droit">
                        <h4>DEVELOPPEUR Sénior</h4>
                        <h5>Nom de l'entreprise - 2015 - actuel</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur 
                            adipisicing elit. Aut quibusdam accusamus 
                            cupiditate enim tenetur? Ipsam, beatae voluptate? 
                            Porro culpa rerum officia molestias laborum aut
                             beatae minima, ratione, ipsa, saepe placeat.</p>
                        </div>
                    </li>
                </ul>
                
             <div class="education">                
                <ul>
                    <h3>EDUCATION</h3>
                    <li>
                        <div class="li_gauche">
                        <h4>DEVELOPPEUR Sénior</h4>
                        <h5>Nom de l'entreprise - 2015 - actuel</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur 
                            adipisicing elit. Aut quibusdam accusamus 
                            cupiditate enim tenetur? Ipsam, beatae voluptate? 
                            Porro culpa rerum officia molestias laborum aut
                             beatae minima, ratione, ipsa, saepe placeat.</p>
                        </div>
                    </li>
                    <li>
                      <div class="li_droit">
                        <h4>DEVELOPPEUR Sénior</h4>
                        <h5>Nom de l'entreprise - 2015 - actuel</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur 
                            adipisicing elit. Aut quibusdam accusamus 
                            cupiditate enim tenetur? Ipsam, beatae voluptate? 
                            Porro culpa rerum officia molestias laborum aut
                             beatae minima, ratione, ipsa, saepe placeat.</p>
                       </div>
                    </li>
                    <li>
                        <div class="li_gauche">
                        <h4>DEVELOPPEUR Sénior</h4>
                        <h5>Nom de l'entreprise - 2015 - actuel</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur 
                            adipisicing elit. Aut quibusdam accusamus 
                            cupiditate enim tenetur? Ipsam, beatae voluptate? 
                            Porro culpa rerum officia molestias laborum aut
                             beatae minima, ratione, ipsa, saepe placeat.</p>
                        </div>
                    </li>
                    <li>
                        <div class="li_droit">
                        <h4>DEVELOPPEUR Sénior</h4>
                        <h5>Nom de l'entreprise - 2015 - actuel</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur 
                            adipisicing elit. Aut quibusdam accusamus 
                            cupiditate enim tenetur? Ipsam, beatae voluptate? 
                            Porro culpa rerum officia molestias laborum aut
                             beatae minima, ratione, ipsa, saepe placeat.</p>
                        </div>
                    </li>
                </ul>
             </div>
             
        </div>
        <div class="mes_realisations">
            <h3 >Réalisation</h3>

            <div class="item_realisations">
                <div class="item_realisation_img">
                    <img src="./assets/images/sacs.png" alt="" srcset="">
                </div>
                <h3>Murid Pro</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Beatae voluptatum quas est nostrum pariatur iure dolorum enim illo! Iure odit suscipit excepturi
                    fuga architecto consequuntur,
                    consequatur consectetur quidem rerum praesentium!
                </p>
            </div>

            <div class="item_realisations">
                <div class="item_realisation_img">
                    <img src="./assets/images/sacs.png" alt="" srcset="">
                </div>
                <h3>JaambarDeLaRoute</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Beatae voluptatum quas est nostrum pariatur iure dolorum enim illo! Iure odit suscipit excepturi
                    fuga architecto consequuntur,
                    consequatur consectetur quidem rerum praesentium!
                </p>
            </div>

            <div class="item_realisations">
                <div class="item_realisation_img">
                    <img src="./assets/images/sacs.png" alt="" srcset="">
                </div>
                <h3>G-SPORT221</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Beatae voluptatum quas est nostrum pariatur iure dolorum enim illo! Iure odit suscipit excepturi
                    fuga architecto consequuntur,
                    consequatur consectetur quidem rerum praesentium!
                </p>
            </div>

            <div class="item_realisations">
                <div class="item_realisation_img">
                    <img src="./assets/images/sacs.png" alt="" srcset="">
                </div>
                <h3>PGCD</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Beatae voluptatum quas est nostrum pariatur iure dolorum enim illo! Iure odit suscipit excepturi
                    fuga architecto consequuntur,
                    consequatur consectetur quidem rerum praesentium!
                </p>
            </div>

            <div class="item_realisations">
                <div class="item_realisation_img">
                    <img src="./assets/images/sacs.png" alt="" srcset="">
                </div>
                <h3>Same Kalpé</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Beatae voluptatum quas est nostrum pariatur iure dolorum enim illo! Iure odit suscipit excepturi
                    fuga architecto consequuntur,
                    consequatur consectetur quidem rerum praesentium!
                </p>
            </div>
        </div>
        <div class="footer">
            <h3>Contacter-Nous</h3>
            <form action="index.php" method="POST">
                
                <input class="text" type="text" name="prenom" placeholder="Prénom">
                <input class="text" type="text" name="nom" placeholder="Nom">
                <input class="text" type="mailto"  name="email" placeholder="E-mail">
                <textarea class="text" name="message" id="" cols="30" rows="5" placeholder="Redisez ici votre message "></textarea>
                <button class="bouton" name="click" ><a href=""><h2>Envoyer</h2></a></button>
            </form>

        </div>
    </div>
</body>
</html>