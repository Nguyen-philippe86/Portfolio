<?php
require 'includes/header.php';
?>

<section>
    <div class="containerContact">
        <div id="boxContact">
            <h2>Contactez moi !</h2>
            <div class="containerBox">
                <div id="boxInfo">
                    <h3>Mes coordonnées</h3>
                    <div class="logoInfo">
                        <i class="fas fa-phone-square-alt"> 06 08 08 10 33</i>
                        <i class="fas fa-paper-plane"> contact@philippe-nguyen.com</i>
                    </div>
                    <div class="logoSocial">
                        <img src="assets/img/facebook.png" style="width: 50px;">
                        <img src="assets/img/linkedin.png" style="width: 50px;">
                        <img src="assets/img/instagram.png" style="width: 50px;">
                    </div>
                </div>
                <div id="boxForm">
                    <h3>Formulaire de contact</h3>
                    <form action="sendmail.php" method="POST">

                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" name="prenom" placeholder="Nom" aria-label="prenom" class="form-control"
                                required>
                            <div class="col-1"></div>
                            <input type="text" name="nom" placeholder="Prénom" aria-label="nom" class="form-control"
                                required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="addon-wrapping"><i class="fas fa-phone-alt"></i></span>
                            <input type="number" class="form-control" placeholder="Téléphone" name="telephone"
                                aria-label="telephone" aria-describedby="addon-wrapping" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="addon-wrapping"><i class="fas fa-at"></i></span>
                            <input type="email" class="form-control" placeholder="Email" name="email" aria-label="email"
                                aria-describedby="addon-wrapping" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fas fa-comment-dots"></i></span>
                            <textarea class="form-control" name="message" placeholder="Message"
                                aria-label="With textarea" required></textarea>
                        </div>

                        <div class="btnForm">
                            <input type="submit" value="Envoyer">
                        </div>
                    </form>
                </div>






            </div>
        </div>
    </div>
</section>

<?php
require 'includes/footer.php';
