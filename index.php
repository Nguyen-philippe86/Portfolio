<?php
require 'includes/header.php';
?>

<div class="accueil">

    <section class="containerAccueil">
        <h1 id="parallax">#Développeur web</h1><br>
        <h2 id="parallax2">& web mobile</h2>
    </section>

    <section class="containerPortfolio">
        <div id="boxPortfolio">
            <h2 class="titlePortfolio">Portfolio</h2>
            <div class="contentPortfolio">
                <h3>Qui suis-je ?</h3>
                <p>
                    Je m’appelle Philippe Nguyen, développeur web et web mobile.<br><br>
                    Passionné depuis toujours pour le développement web, je me suis reconverti dans ce domaine après
                    avoir travaillé plusieurs années dans le secteur aéronautique.<br><br>
                    Cette reconversion a été pour moi un déclic dans ma vie professionnelle qui à ce jour, me donne
                    l'envie de l'exploiter pleinement. J’ai alors suivi une formation de Développeur web et web mobile
                    afin de valider un Titre RNCP de niveau bac+2, tout en prenant plaisir à développés divers
                    projets.<br><br>
                    Je mets mes compétences au service de vos besoins et répondre à tout type de projets, de
                    l’élaboration du cahier des charges à la mise en ligne. Je conçois des sites vitrine standard, sites
                    vitrine personnalisé ou bien des plateformes e-commerce.<br><br>
                    Je propose également mes services pour vos refontes de sites existant.
                </p>
                <h3>Mes compétences</h3>
                <p>
                    DÉVELOPPEMENT
                    HTML | CSS | Sass | jQuery PHP | Symfony | MySQL Wordpress<br>
                    DESIGN GRAPHIQUE
                    – Design de site internet | Mise en page du contenu<br>
                    MULTI-PLATEFORME
                    Mode adaptatif aux différentes interfaces mobiles et tablettes.<br>
                    LOGICIEL
                    Adobe XD Visual Studio Code
                </p>
            </div>
        </div>
    </section>

    <section class="containerProjet">
        <div id="boxProjet">
            <h2 class="titleProjet">Projets Réalisées</h2>
            <div class="contentProjet">

                <div class="projets">
                    <div class="cardFace">
                        <h3>Projet personnel | Agence Code</h3>
                        <p>Annonces de vente & location de biens immobilers.</p>
                    </div>
                    <div class="cardBack">
                        <img src="assets/img/agence_code.png">
                        <ul class="langage">
                            <li><img src="assets/img/symfony.png"></li>
                            <li><img src="assets/img/mysql.png"></li>
                            <li><img src="assets/img/sass.png"></li>
                            <li><img src="assets/img/javascript.png"></li>
                        </ul>
                        <a class="btnVisite" href="https://agence-code.philippe-nguyen.com" target="_blank">Voir le
                            site</a>
                    </div>
                </div>

                <div class="projets">
                    <div class="cardFace">
                        <h3>Projet de stage</h3>
                        <p>Interface utilisateur pour une gestion de stock.</p>
                    </div>
                    <div class="cardBack">
                        <img src="assets/img/stock_multimedia.png" alt="">
                        <ul class="langage">
                            <li><img src="assets/img/php.png" alt=""></li>
                            <li><img src="assets/img/mysql.png" alt=""></li>
                            <li><img src="assets/img/bootstrap.png" alt=""></li>
                        </ul>
                    </div>
                </div>

                <div class="projets">
                    <div class="cardFace">
                        <h3>Projet personnel | My cave</h3>
                        <p>Présentation des vins du monde.</p>
                    </div>
                    <div class="cardBack">
                        <img src="assets/img/my_cave.png" alt="">
                        <ul class="langage">
                            <li><img src="assets/img/symfony.png" alt=""></li>
                            <li><img src="assets/img/mysql.png" alt=""></li>
                            <li><img src="assets/img/sass.png" alt=""></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>


    </section>

</div>

<?php
    require 'includes/footer.php';
