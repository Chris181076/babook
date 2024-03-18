<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>babook</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Comfortaa:wght@300&family=Crafty+Girls&family=Lily+Script+One&family=Limelight&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body class="flex">
    <header>
        <div class="banner-container">
            <div class="banner">
                <p>Profite de -50% sur le troisième livre acheté ce lundi!</p>
            </div>
        </div>
        <div id="logo">
            <figure><img src="./assets/images/logobabook.png" alt="logo"></figure>
        </div>
        <form id="searchForm">
            <input type="text" id="searchInput" placeholder="Rechercher...">
            <button type="submit">Rechercher</button>
        </form>
        <div id="logoUser">
            <img src="./assets/images/user.png" alt="compte">
            <img src="./assets/images/panier.png" alt="panier">
        </div>
    </header>
    <div id="nav">
        <div class="navId">LIVRES
            <?php
            $db = new PDO('mysql:host=localhost;dbname=magasin', 'root');
            $categoriesRequest = $db->query('SELECT `categorie_id`,`nom`,`lien` FROM `categories`');

            $categories = $categoriesRequest->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < count($categories); $i++) {
            ?>
                <li>
                    <a href="<?php echo $categories[$i]['lien']; ?>" style="color: black;">
                        <span onmouseover="this.style.color='#014D6E'" onmouseout="this.style.color='black'">
                            <?php echo $categories[$i]['nom']; ?></span>
                    </a>
                </li>
            <?php
            }
            ?>
        </div>
        <div class="navId">NOUVEAUTE</div>
        <div class="navId">COUPS DE COEUR</div>
        <div class="navId">BONS PLANS</div>
    </div>
    <div id="onglets">
        <p>Livres&nbsp;>&nbsp;
            <span class="bleu">Arts et Sciences Humaines</span>
        </p>
    </div>
    <div id="recto">
        <div id="colonnesRecto">
            <div id="colonneGRecto">
                <figure><img src="./assets/images/poule.jpg" alt="poule"></figure>
                <p>25,00€</p>
                <div class="panier">Ajoute à ton panier</div>
            </div>
            <div id="colonneDRecto">
                <div class="story">
                    <figure><img src="./assets/images/signet.png" alt="signet">
                        <figure>
                            <p id="storyText">“Dans ce livre captivant, l'auteur talentueux, accompagné de sa plume pleine d'humour et de sagesse, t'invite à explorer ton potentiel caché et à embrasser ta véritable nature.<br>

                                À travers des anecdotes vibrantes et des exercices pratiques, tu découvriras comment surmonter les obstacles qui te retiennent, et comment révéler la poule audacieuse et intrépide qui sommeille en toi.<br>

                                Alors, es-tu prêt à déployer les ailes de ta poule intérieure et à découvrir le potentiel infini qui sommeille en toi ?”</p>
                </div>
                <h1>
                    Réveille la poule qui sommeille en toi
                    de <span class="bleu">Benjamin Sinclair</span> chez <span class="bleu">Machin Binel</span>
                </h1>
            </div>
        </div>
    </div>
    <div id="verso">
        <div id="colonnesVerso">
            <div id="colonneGVerso">
                <div id="car">
                    <figure id="figure2"><img src="./assets/images/signet2.png" alt="signet"></figure>
                    <p>Date de parution : 28/02/2024</p>
                    <p>Nombre de pages : 650 pages</p>
                    <p>ISBN : 978-0-000-00000-0</p>
                    <p>EAN : 9780000000000</p>
                </div>
            </div>
            <div id="colonneDVerso">
                <h1>Du même auteur et très cool aussi</h1>
                <div id="memeAuteur">
                    <div id="livresContainer">
                        <div class="livres2">
                            <figure><img src="./assets/images/coq.png" alt="coq"></figure>
                            <div class="info">
                                <p class="titreLivre">Le coq en toi</p>
                                <p class="tome"></p>
                                <p class="auteur"></p>
                                <div class="prix">25,00€</div>
                            </div>
                        </div>
                        <div class="livres2">
                            <figure><img src="./assets/images/licorne.png" alt="licorne"></figure>
                            <div class="info">
                                <p class="titreLivre">La licorne en toi</p>
                                <p class="tome"></p>
                                <p class="auteur"></p>
                                <div class="prix">25,00€</div>
                            </div>
                        </div>
                        <div class="livres2">
                            <figure><img src="./assets/images/poussin.png" alt="livre"></figure>
                            <div class="info">
                                <p class="titreLivre">Le poussin en toi</p>
                                <p class="tome"></p>
                                <p class="auteur"></p>
                                <div class="prix">25,00€</div>
                            </div>
                        </div>
                        <div class="livres2">
                            <figure><img src="./assets/images/zebre.png" alt="livre"></figure>
                            <div class="info">
                                <p class="titreLivre">Le zèbre en toi</p>
                                <p class="tome"></p>
                                <p class="auteur"></p>
                                <div class="prix">25,00€</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div id="logo1">
            <figure><img src="./assets/images/logobabook.png" alt="logo"></figure>
        </div>
        <div id="newsletter">
            <figure>
                <img id="image" src="./assets/images/email2.png" alt="courrier">
            </figure>
            <p>Tu veux avoir des nouvelles des promos, de tes auteurs, de tes styles préférés, abonne-toi!</p>
        </div>
        <form method="post" id="formulaire" style="display:none;">
            <fieldset>
                <legend>Inscription à la Newsletter :</legend>
                <div class="champ">
                    <label for="nom">Nom de famille :</label>
                    <input type="text" id="nom" name="nom">
                </div>
                <div class="champ">
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom">
                </div>
                <div class="champ">
                    <label for="mail">Adresse mail :</label>
                    <input type="email" id="mail" name="mail">
                </div>
                <div class="champ">
                    <label for="date">Date de naissance :</label>
                    <input type="date" id="date" name="date_de_naissance">
                </div>
                <input type="submit" value="Envoyer">
            </fieldset>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['nom'], $_POST['mail'], $_POST['prenom'], $_POST['date_de_naissance'])) {
                $db = new PDO('mysql:host=localhost;dbname=magasin', 'root');
                $nom = $_POST['nom'];
                $mail = $_POST['mail'];
                $prenom = $_POST['prenom'];
                $date_de_naissance = $_POST['date_de_naissance'];

                $stmt = $db->prepare("INSERT INTO `user`(`nom`, `prenom`, `email`, `date_de_naissance`) VALUES (:nom, :prenom, :mail, :date_de_naissance)");
                $stmt->execute(array(
                    ':nom' => $nom,
                    ':prenom' => $prenom,
                    ':mail' => $mail,
                    ':date_de_naissance' => $date_de_naissance
                ));
                echo "Merci pour ta confiance!";
            }
        }
        ?>
        <div id="socialMedia">
            <img src="./assets/images/facebook_2175193.png" alt="facebook">
            <img src="./assets/images/instagram_1384015.png" alt="instagram">
            <img src="./assets/images/linkedin_1384014.png" alt="linkedin">
        </div>
    </footer>
    <div id="basDePage">
        <p><a href="">Crée ton compte</a><br>
            <a href="">Si t’as besoin d’aide</a><br>
            <a href="">Les conditions générales de vente</a><br>
            <a href="">Qui se cache derrière babook?</a><br>
            <a href="">Mentions légales</a><br>
            <a href="">Politique de confidentialité</a><br>
        </p>
    </div>
    <script src="./assets/js/main.js"></script>
</body>

</html>