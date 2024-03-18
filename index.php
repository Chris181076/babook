<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>babook</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Comfortaa:wght@300&family=Crafty+Girls&family=Lily+Script+One&family=Limelight&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header>
        <div class="banner-container">
            <div class="banner">
                <p>Profite de -50% sur le troisième livre acheté ce lundi!</p>
            </div>
        </div>
        <div id="logo">
            <figure><img src="./assets/images/logobabook.png" alt="logo"></figure>
        </div>
        <form id="searchForm" action="" method="post">
            <input type="text" id="searchInput" name="search" placeholder="Rechercher...">
            <button type="submit">Rechercher</button>
        </form>
        <div id="searchResults">
        <div id="resultats">
            <?php
            if (isset($_POST['search'])) {
                $db = new PDO('mysql:host=localhost;dbname=magasin', 'root');

                $query = $_POST['search'];
                $sql = "SELECT nom, titre, auteur FROM categories c 
                    JOIN produit_categorie pc on pc.categorie_id = c.categorie_id 
                    JOIN produit p on pc.produit_id = p.produit_id 
                    WHERE c.nom LIKE '%$query%'
                    OR p.titre LIKE '%$query%' 
                    OR p.auteur LIKE '%$query%'";

                $stmt = $db->prepare($sql);

                $resultat = $db->query($sql);

                if ($resultat && $resultat->rowCount() > 0) {
                    while ($row = $resultat->fetch()) {
                        echo "(" . $row["nom"] . ") : " . $row["titre"] . " - " . $row["auteur"] . "<br>";
                    }
                } else {
                    echo "Aucun résultat trouvé";
                }
            }

            ?>
        </div>
        <button id="clearButton" onclick="clearSearchResults()">Clear</button>
        </div>
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
                    <a href="<?php echo $categories[$i]['lien']; ?>" style="color: black;" target="_blank">
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
    <button id="openPopupButton">
        <p>EN EXCLUSIVITE! Clique ici!
        <p>
    </button>
    <div id="popup" class="popup">
        <div class="popup-content">
            <h2>En précommande</h2>
            <p>Livres en fleurs</p>
            <p>de Isabella Montclair</p>
            <p>Tome 5</p>
            <img src="./assets/images/livresFleurs.jpg" alt="livrefleurs">
            <p class="clique"><a href="">Clique ici</a></p>
            <button id="closePopupButton">Reviens au site</button>
        </div>
    </div>
    <div id="produits">
        <h1>Nos meilleurs ventes (rien que pour toi)</h1>
        <figure><img src="./assets/images/filleLivre.jpg"></figure>
    </div>
    <div id="containerLivres">
        <div class="livres">
            <figure><img src="./assets/images/livresFleurs.jpg" alt="livre"></figure>
            <div class="info">
                <p class="titreLivre">Livres en fleurs</p>
                <p class="tome">Tome 1</p>
                <p class="auteur">Isabella Montclair</p>
                <div class="prix">25,00€</div>
            </div>
        </div>
        <div class="livres">
            <figure><img src="./assets/images/bottes.jpg" alt="livre"></figure>
            <div class="info">
                <p class="titreLivre">Les bottes à Nick</p>
                <p class="tome"></p>
                <p class="auteur">Lucas Blackwood</p>
                <div class="prix">25,00€</div>
            </div>
        </div>
        <div class="livres">
            <figure><img src="./assets/images/livresFleurs.jpg" alt="livre"></figure>
            <div class="info">
                <p class="titreLivre">Livres en fleurs</p>
                <p class="tome">Tome 2</p>
                <p class="auteur">Isabella Montclair</p>
                <div class="prix">25,00€</div>
            </div>
        </div>
        <div class="livres">
            <figure><img src="./assets/images/photo.jpg" alt="livre"></figure>
            <div class="info">
                <p class="titreLivre">Photo sensible</p>
                <p class="tome"></p>
                <p class="auteur">Ava Kensington</p>
                <div class="prix">25,00€</div>
            </div>
        </div>
        <div class="livres">
            <figure><img src="./assets/images/livresFleurs.jpg" alt="livre"></figure>
            <div class="info">
                <p class="titreLivre">Livres en fleurs</p>
                <p class="tome">Tome 3</p>
                <p class="auteur">Isabella Montclair</p>
                <div class="prix">25,00€</div>
            </div>
        </div>
        <div class="livres">
            <figure><img src="./assets/images/guitare.jpg" alt="livre"></figure>
            <div class="info">
                <p class="titreLivre">Un parfum dans l’air</p>
                <p class="tome"></p>
                <p class="auteur">Olivia Harrington</p>
                <div class="prix">25,00€</div>
            </div>
        </div>
        <div class="livres">
            <figure><img src="./assets/images/livresFleurs.jpg" alt="livre"></figure>
            <div class="info">
                <p class="titreLivre">Livres en fleurs</p>
                <p class="tome">Tome 4</p>
                <p class="auteur">Isabella Montclair</p>
                <div class="prix">25,00€</div>
            </div>
        </div>
    </div>
    <div id="categories">
        <p>Retrouve tous nos bouquins, coups de coeur, meilleures ventes : </p>
        <div class="vignettesContainer">
            <div class="vignettes">Romans</div>
            <div class="vignettes">Polars</div>
            <div class="vignettes">Livres Jeunesse</div>
            <div class="vignettes">Loisirs et Voyage</div>
            <div class="vignettes">Arts et Sciences humaines</div>
            <div class="vignettes">BD - Mangas</div>
        </div>
    </div>
    <div id="avis">
        <div id="containerAvis">
            <div class="avisContainer">
                <div id="profil">
                    <img src="./assets/images/profilFemme.png" alt="femme">
                    <p>LivresdeValentine</p>
                </div>
                <p><i>"Mon Ange est un roman captivant qui m'a transporté dans un tourbillon d'émotions. L'histoire
                        est poignante et touchante, dépeignant avec sensibilité les liens profonds qui se tissent
                        entre les personnages. La plume de l'auteur est d'une grande finesse, créant une atmosphère
                        envoûtante et immersive"</i></p>
                <div id="livreRef">
                    <img src="./assets/images/plume.png" alt="plume">
                    <p><strong>Mon Ange</strong><br>Léa Dupont</p>
                </div>

            </div>
            <div class="avisContainer">
                <div id="profil2">
                    <p>PunkLitKid</p>
                    <img src="./assets/images/profilHomme.png" alt="homme">
                </div>
                <p><i>"Vivre Ensemble" est un livre qui m'a secoué en plein cœur. Ce livre a été comme une bouffée
                        d'air frais, rempli d'idées sur la solidarité, la justice sociale et l'égalité. Les pages
                        étaient imprégnées d'un appel à l'action, à se rassembler pour créer un monde meilleur."</i>
                </p>
                <div id="livreRef2">
                    <p><strong>Vivre ensemble</strong><br>Sébastien Marchand</p>
                    <img src="./assets/images/ensemble.png" alt="ensemble">
                </div>
            </div>
        </div>
    </div>
    <div id="produits2">
        <h1>Les livres dont tout le monde te parle</h1>
        <figure><img src="./assets/images/Lire.png"></figure>
    </div>
    <div id="conteneurLivres2">
        <div class="livres">
            <figure><img src="./assets/images/polar.jpg" alt="polar"></figure>
            <div class="info">
                <p class="titreLivre">L’ours polar</p>
                <p class="tome"></p>
                <p class="auteur">Chris Madyson</p>
                <div class="prix">25,00€</div>
            </div>
        </div>
        <div class="livres">
            <figure><img src="./assets/images/couleur.png" alt="livre"></figure>
            <div class="info">
                <p class="titreLivre">Change de couleur</p>
                <p class="tome"></p>
                <p class="auteur">Ethan Montgomery</p>
                <div class="prix">25,00€</div>
            </div>
        </div>
        <div class="livres">
            <figure><img src="./assets/images/poule.jpg" alt="poule"></figure>
            <div class="info">
                <p class="titreLivre">Réveille la poule<br>qui sommeille en toi</p>
                <p class="tome"></p>
                <p class="auteur">Benjamin Sinclair</p>
                <div class="prix">25,00€</div>
            </div>
        </div>
        <div class="livres">
            <figure><img src="./assets/images/partir.jpg" alt="partir"></figure>
            <div class="info">
                <p class="titreLivre">Partir un jour</p>
                <p class="tome"></p>
                <p class="auteur">Julianne Martin</p>
                <div class="prix">25,00€</div>
            </div>
        </div>
        <div class="livres">
            <figure><img src="./assets/images/dragon.jpg" alt="dragon"></figure>
            <div class="info">
                <p class="titreLivre">L’amitié sans fin</p>
                <p class="tome"></p>
                <p class="auteur">Haruki Nakamura</p>
                <div class="prix">25,00€</div>
            </div>
        </div>
        <div class="livres">
            <figure><img src="./assets/images/emotions.jpg" alt="emotions"></figure>
            <div class="info">
                <p class="titreLivre">La symphonie des émotions </p>
                <p class="tome"></p>
                <p class="auteur">Krzysztof Nowakowski</p>
                <div class="prix">25,00€</div>
            </div>
        </div>
        <div class="livres">
            <figure><img src="./assets/images/bleu.jpg" alt="livre"></figure>
            <div class="info">
                <p class="titreLivre">Les mots en bleu</p>
                <p class="tome"></p>
                <p class="auteur">Emma Delacroix</p>
                <div class="prix">25,00€</div>
            </div>
        </div>
    </div>
    <div id="bienvenue">
        <p>
            Bienvenue sur <strong>Babook!</strong><br><br>
            Le site de vente de livres en ligne qui te veut du bien ! Chez Babook, on tutoie les mots et on célèbre
            la passion de la <a href=""><strong>lecture</strong></a>.<br>
            Notre objectif chez Babook est de créer une expérience de lecture sans tracas et agréable. <br><br>
        </p>
        <p> Nous avons rassemblé une équipe de bibliophiles passionnés qui sélectionnent avec soin chaque livre pour
            s'assurer qu'il corresponde à tes goûts.
            Que tu sois un <a href=""><strong>jeune lecteur en herbe</strong></a> ou un <a href=""><strong>dévoreur de
                    livres chevronné</strong></a>, nous avons quelque chose pour toi!
        </p>
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
                <img id="croix" src="./assets/images/marque-de-croix.png" />
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
                echo "Merci pour te confiance!";
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
    </div>
    <script src="./assets/js/main.js"></script>
</body>

</html>