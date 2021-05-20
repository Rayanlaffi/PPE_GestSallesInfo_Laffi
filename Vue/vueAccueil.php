<title><?= $titre ?></title>
<div class="corps">

    <?php  if ( isset($_SESSION['id']) && isset($_GET['connexion']) && $_GET['connexion'] == 1) { ?>
        <br><div class="alert alert-success text-center" role="alert">Vous êtes identifié en tant que <?=$_SESSION['nom']?> <?=$_SESSION['prenom']?>.</div>
    <?php } ?>

    <div class="titre">
        <h1>Accueil</h1>
    </div>
    <div class="info">
        <div class="col">
            <div class="texte-image">
                <p><i> <U>La Maison des Ligues de Lorraine </U></i>(M2L) a pour mission 
                    de fournir des espaces et des services aux différentes</br> ligues 
                    sportives régionales et à d’autres structures hébergées. La 
                    M2L est une structure financée par le Conseil</br> Régional de 
                    Lorraine dont l'administration est déléguée au Comité 
                    Régional Olympique et Sportif de Lorraine <U>(CROSL)</U>.
                </p>
                
            </div>
            <div class="lig">
                <div class="texte2">
                    <p>La Maison des Ligues est un établissement du Conseil Régional.
                        Ce n’est pas une entité juridique en propre. Elle est
                        financée à 100 % <U>(pour son fonctionnement et pour la 
                        construction récente de l’extension des bâtiments C et D) </U>
                        par le Conseil Régional et sans aucune participation du
                        Conseil Général de Meurthe et Moselle, bien qu’elle abrite
                        un certain nombre de comités départementaux. Une convention
                        de cogestion a été passée entre le Conseil Régional et le 
                        Comité Régional Olympique et Sportif de Lorraine pour la
                        gestion de l’outil « Maison des Ligues ». Le CROSL est une
                        association financée par le ministère via le CNDS <U>(Centre 
                        National de Développement du Sport).</U>
                    </p>
                </div>
                <p>
                    La Maison héberge la majorité des ligues sportives régionales, 
                    de la ligue de tennis<U> (la plus grosse, qui emploie 8 personnes) </U>
                    à des ligues de sports qui n’ont pas d’employés permanents, comme
                    le bowling ou la plongée sous-marine. La ligue de football occupe 
                    2000 m2 de bureaux dans la banlieue de Nancy et ne sera probablement 
                    jamais hébergée dans nos locaux. Nous hébergeons également, comme je 
                    vous le disais, quelques comités départementaux, ainsi que le CROSL 
                    et sa déclinaison départementale : le CDOS <U>(Comité Départemental Olympique et Sportif).</U>
                </p>    
            </div>
        </div>
        <div class="image">
            <img class="m2l" src="image/m2l.jpg" alt="image de la maison des ligues">
        </div>
    </div