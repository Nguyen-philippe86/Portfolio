<?php

    require 'includes/header.php';

    use Mailjet\Resources;

    require_once __DIR__.'/vendor/autoload.php';

    define('API_USER', '5391691fd9aecb51dcf93b6ffb342d0c');
    define('API_LOGIN', '92ed818a9cc2edda6fed0afdee4869a1');

    $mj = new \Mailjet\Client('5391691fd9aecb51dcf93b6ffb342d0c', '92ed818a9cc2edda6fed0afdee4869a1', true, ['version' => 'v3.1']);

    if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['telephone']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $body = [
                'Messages' => [
                    [
                        'From' => [
                            'Email' => 'philippe.nguyen86@gmail.com',
                            'Name' => 'Philippe',
                        ],
                        'To' => [
                            [
                                'Email' => 'philippe.nguyen86@gmail.com',
                                'Name' => 'Philippe',
                            ],
                        ],
                        'Subject' => 'Client création de site web',
                        'TextPart' => "{$email}, {$telephone}, {$message}",
                        'HTMLPart' => "<h2>Message de : {$prenom} {$nom}</h2>
                                        <h4>Email : {$email} | Tél : {$telephone}</h4>
                                        <p>{$message}</p>",
                    ],
                ],
            ];
            $response = $mj->post(Resources::$Email, ['body' => $body]);
            $response->success();
            echo '<div class="alert alert-primary" style="width:70%; margin:auto; top:20vh; height: 20vh;" role="alert">
                Votre message a été envoyé avec succès ! <a href="index.php" class="alert-link">Revenir à l\'accueil</a>.
                </div>';
        } else {
            echo 'Email non valide';
        }
    } else {
        header('location:prestation.php');

        exit();
    }
