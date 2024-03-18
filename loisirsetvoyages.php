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

<body class="flex">
    <header>
        <div id="logo">
            <figure><img src="./assets/images/logobabook.png" alt="logo"></figure>
        </div>
        <form id="searchForm">
            <input type="text" id="searchInput" placeholder="Rechercher...">
            <button type="submit" id="searchButton">Rechercher</button>
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
            <span class="bleu">Loisirs et Voyage</span>
        </p>
    </div>
    <div id="colonnes">
        <div id="colonneGauche">
            <p><strong>Loisirs et Voyage</strong></p>
            <p>Sport et Jeux</p>
            <p>Guides pour tes voyages</p>
            <p>1 Livre 1 Pays</p>
            <p>Récits de voyage</p>
        </div>
        <div id="colonneDroite">
            <div id="titre">
                <h1>Loisirs et Voyages</h1>
                <div class="flex">
                    <p>Découvre notre vaste sélection de livres dans la catégorie "Loisirs et Voyages" ! Plonge-toi
                        dans des récits captivants, des <a href="">guides pratiques</a> et des inspirations pour
                        enrichir tes <a href="">moments de détente</a> et <a href="">explorer le monde</a> avec
                        passion.</p>
                    <img src="./assets/images/dodoche.png" alt="dodoche">
                </div>
            </div>
            <div id="meilleuresVentes">
                <p class="sousTitres">Nos meilleures ventes</p>
                <div id="conteneurLivres3">
                    <div class="livres">
                        <figure><img src="./assets/images/aventure.png" alt="polar"></figure>
                        <div class="info">
                            <p class="titreLivre">La vie est une aventure</p>
                            <p class="tome"></p>
                            <p class="auteur">Isabella Montclair</p>
                            <div class="prix">25,00€</div>
                        </div>
                    </div>
                    <div class="livres">
                        <figure><img src="./assets/images/bonVoyage.png" alt="livre"></figure>
                        <div class="info">
                            <p class="titreLivre">Bon Voyage</p>
                            <p class="tome"></p>
                            <p class="auteur">Maximilian Wilde</p>
                            <div class="prix">25,00€</div>
                        </div>
                    </div>
                    <div class="livres">
                        <figure><img src="./assets/images/soleil.png" alt="poule"></figure>
                        <div class="info">
                            <p class="titreLivre">Destination Soleil</p>
                            <p class="tome"></p>
                            <p class="auteur">Olivia Winslow</p>
                            <div class="prix">25,00€</div>
                        </div>
                    </div>
                    <div class="livres">
                        <figure><img src="./assets/images/maldives.png" alt="partir"></figure>
                        <div class="info">
                            <p class="titreLivre">Maldives</p>
                            <p class="tome"></p>
                            <p class="auteur">Isabella Montrose</p>
                            <div class="prix">25,00€</div>
                        </div>
                    </div>
                </div>
                <div id="coupsDeCoeur">
                    <div class="flex">
                        <img src="./assets/images/amour.png">
                        <p class="sousTitres">Coups de Coeur</p>
                    </div>
                    <div class="presLivres">
                        <img src="./assets/images/guide.png" alt="guide">
                        <div class="column">
                            <p><strong>Avec moi t’es pas perdu</strong><br>
                                Antoine Laurent</p>
                            <p><i>“ Au fil des pages, tu te retrouveras plongé dans les défis, les doutes et les
                                    triomphes d'un protagoniste qui cherche sa place dans le monde. Ce récit
                                    touchant t'invite à réfléchir sur tes propres aspirations, à embrasser l'inconnu
                                    et à trouver le courage de suivre ton propre chemin”</i></p>
                        </div>
                    </div>
                    <div class="presLivres">
                        <img src="./assets/images/bonVoyage.png" alt="voyage">
                        <div class="column">
                            <p><strong>Bon Voyage</strong><br>
                                Jasper Thornwood</p>
                            <p><i>“L'histoire suit les péripéties d'un groupe de voyageurs hétéroclites qui se
                                    retrouvent embarqués dans un tour du monde inattendu. Entre les amitiés qui se
                                    créent, les défis à surmonter et les découvertes personnelles, "Bon Voyage" est
                                    un récit rempli d'émotions, d'humour.”</i></p>
                        </div>
                    </div>
                    <div class="presLivres">
                        <img src="./assets/images/boxe.png" alt="boxe">
                        <div class="column">
                            <p><strong>Mon premier souffle</strong><br>
                                Penelope Sinclair</p>
                            <p><i>“L'histoire suit le parcours inspirant d'un jeune boxeur, depuis ses débuts
                                    modestes jusqu'à son ascension vers les sommets du monde de la boxe. Vous serez
                                    témoin des entraînements intenses, des combats palpitants et des sacrifices
                                    personnels que le protagoniste doit affronter pour réaliser son rêve de devenir
                                    un champion.”</i></p>
                        </div>
                    </div>
                    <div class="presLivres">
                        <img src="./assets/images/yoga.png" alt="yoga">
                        <div class="column">
                            <p><strong>Yoga Essentiel</strong><br>
                                Julie Marie</p>
                            <p><i>“Vous apprendrez les postures (asanas), les techniques de respiration (pranayama)
                                    et les exercices de méditation qui composent le fondement du yoga. Mais "Yoga
                                    Essentiel" va au-delà de la simple pratique physique en explorant les dimensions
                                    plus profondes du yoga, telles que la philosophie yogique, la connexion
                                    corps-esprit et les principes de vie équilibrée.”</i></p>
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
                <img src="./assets/images/email2.png" alt="courrier">
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
                echo "Les données ont été insérées avec succès dans la base de données.";
            } else {
                echo "Erreur : Des données du formulaire sont manquantes.";
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