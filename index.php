<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;500;600;700;800;900&family=Roboto:wght@100;300;400;500;900&display=swap"
        rel="stylesheet">
</head>

<body>

    <header>
        <nav id="nav-header" class="container">
            <a href="/">
                <h4 id="name">Baptiste Lejeune</h4>
            </a>

            <img src="./img/blue-burger-portfolio.svg" alt="menu-burger" id="burger">

            <ul id="menu">
                <li class="item-menu"><a href="/">à propos</a></li>
                <li class="item-menu"><a href="#competences">Compétences</a></li>
                <li class="item-menu"><a href="#projets">Projets</a></li>
                <li class="item-menu btn-green"><a href="#contact-section">Contact</a></li>
            </ul>
        </nav>

        <div id="intro" class="container">
            <h1>Développeur Front-end, Javascript React</h1>

            <div id="txt-intro">
                <p>Bonjour, je suis développeur Front-end à la recherche d’une alternance pour une formation Javascript
                    React.</p>
                <p>J’ai effectué une formation Développeur - Intégrateur en réalisation d’applications web qui m’a
                    permis d’obtenir un titre RNCP niveau 5.</p>
                <p>A présent je souhaite suivre une formation Javascript React disponible sur OpenClassrooms afin de me
                    spécialiser en front et en JS.</p>
            </div>
        </div>
    </header>


    <section id="competences" class="container">
        <h2 class="section-title"><span>Mes</span><br> compétences</h2>

        <!-- <ul id="list-competences">
            <div class="competence-first-part">
                <li class="competence">JavaScript</li>
                <li class="competence">CSS</li>
                <li class="competence">HTML</li>
                <li class="competence">Figma</li>
                <li class="competence">Wordpress</li>
            </div>
            <div class="competence-second-part">
                <li class="competence">Bootstrap</li>
                <li class="competence">jQuery</li>
                <li class="competence">Github</li>
                <li class="competence">MySQL</li>
                <li class="competence">PHP</li>
            </div>
        </ul> -->


        <table id="list-competences">
            <tbody class="competence-first-part">
                <tr>
                    <td>JavaScript</td>
                    <td class="competence"><span></span></td>
                </tr>
                <tr>
                    <td>CSS</td>
                    <td class="competence"><span></span></td>
                </tr>
                <tr>
                    <td>HTML</td>
                    <td class="competence"><span></span></td>
                </tr>
                <tr>
                    <td>Figma</td>
                    <td class="competence"><span></span></td>
                </tr>
                <tr>
                    <td>Wordpress</td>
                    <td class="competence"><span></span></td>
                </tr>
            </tbody>
            <tbody class="competence-second-part">
                <tr>
                    <td>Bootstrap</td>
                    <td class="competence"><span></span></td>
                </tr>
                <tr>
                    <td>jQuery</td>
                    <td class="competence"><span></span></td>
                </tr>
                <tr>
                    <td>Github</td>
                    <td class="competence"><span></span></td>
                </tr>
                <tr>
                    <td>MySQL</td>
                    <td class="competence"><span></span></td>
                </tr>
                <tr>
                    <td>PHP</td>
                    <td class="competence"><span></span></td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="projets">
        <div class="slideshow">
            <h2 class="projets-title">Projets</h2>
            <h2 class="projets-title">Projets</h2>
            <h2 class="projets-title">Projets</h2>
            <h2 class="projets-title">Projets</h2>
            <h2 class="projets-title">Projets</h2>
            <h2 class="projets-title">Projets</h2>
            <h2 class="projets-title">Projets</h2>
            <h2 class="projets-title">Projets</h2>
            <h2 class="projets-title">Projets</h2>
            <h2 class="projets-title">Projets</h2>
            <h2 class="projets-title">Projets</h2>
            <h2 class="projets-title">Projets</h2>
            <h2 class="projets-title">Projets</h2>
            <h2 class="projets-title">Projets</h2>
            <h2 class="projets-title">Projets</h2>
            <h2 class="projets-title">Projets</h2>
            <h2 class="projets-title">Projets</h2>
        </div>

        <p class="txt-projets">Tous les projets sont disponibles sur Github, cliquez sur <a
                href="https://github.com/baptiste-officiel" target="_blank" title="Github">ce lien</a></p>

        <article class="projets-cards container">
            <a href="https://github.com/baptiste-officiel/LADP" target="_blank" title="LADP"><img
                    src="./img/Screen_ladp.PNG" alt="LADP"></a>
            <a href="https://github.com/baptiste-officiel/UltraShape" target="_blank" title="UltraShape"><img
                    src="./img/Screen_ultrashape.PNG" alt="UltraShape"></a>

        </article>
    </section>

    <section id="contact-section" class="container">
        <h2 class="contact-titre">Contactez<br><span>moi</span></h2>

        <form action="index.php?action=sendMail" method="post" id="contact-form">
            <input type="text" name="name" id="name" placeholder="Nom" required>
            <input type="text" name="firstname" id="firstname" placeholder="Prénom" required>
            <input type="email" name="mail" id="mail" placeholder="E-mail" required>
            <input type="text" name="object" id="object" placeholder="Objet" required>
            <textarea name="content" id="content" cols="30" rows="10" required placeholder="Message"></textarea>

            <button type="submit">Envoyer</button>
        </form>

        <?php

if(isset($_GET['action'])){
    if($_GET['action'] == 'sendMail'){
        $lastname = htmlspecialchars($_POST['name']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $email = htmlspecialchars($_POST['mail']);
        $object = htmlspecialchars($_POST['object']);
        $content = htmlspecialchars($_POST['content']);

        $message = '<div>
            <table style="max-width:800px; margin-left:auto; margin-right:auto;">
                <tr><td><h2 style="text-align:center; font-size:24px; margin-bottom:20px;">Vous avez reçu un nouveau message de la part de</h2></td></tr>
                <tr><td><h4 style="padding:20px; text-align:center; font-size:20px; border-top:1px solid black; border-bottom:1px solid black;">' . $firstname . ' ' . $lastname .'</h4></td></tr>
                <tr><td><p style="text-align:center; margin-bottom:60px; padding:25px; margin-top:10px; background-color:rgba(255,255,255,0.3);">' . $content . '</p></td></tr>
                <tr><td style="padding-left:20px; padding-right:20px;"><p style="font-size:12px;">Vous pouvez joindre cette personne à l\'adresse mail suivante : ' . $email . '</p></td></tr>
            </table></div>';

        $retour = mail('baptiste.lejeune@hotmail.com', $object, $message, "Reply-to:" . $email ."\nContent-Type:text/html; charset=\"utf-8\"");
        if($retour){
            echo '<p>C\'est tout bon</p>';
        } else {
            echo '<p>merde</p>';
        }
    }

}
?>

    </section>

</body>
<script src="./js/script.js"></script>
<script src="https://unpkg.com/@supabase/supabase-js@2"></script>
<script src="./js/supabase.js"></script>

</html>