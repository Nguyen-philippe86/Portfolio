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
                        <i class="fas fa-phone-alt">&nbsp;&nbsp;|<a href="tel:+33608081033"> 06 08 08 10 33</a></i>
                        <i class="fas fa-paper-plane">&nbsp;&nbsp;|<a href="mailto: contact@philippe-nguyen.com">
                                contact@philippe-nguyen.com</a></i>
                    </div>
                    <div class="logoSocial">
                        <a href="https://www.linkedin.com/in/philippe-nguyen-web-dev/" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                        <a href="https://github.com/Nguyen-philippe86" target="_blank"><i
                                class="fab fa-github-square"></i></a>
                        <a href="https://www.facebook.com/koo.nguyen93" target="_blank"><i
                                class="fab fa-facebook-square"></i></a>
                    </div>
                </div>
                <div id="boxForm">
                    <h3>Formulaire de contact</h3>
                    <form action="sendmail.php" method="POST">

                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" name="prenom" placeholder="Nom" aria-label="prenom" class="form-control"
                                required>
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

                        <div class="input-group mb-3 areaZone">
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
