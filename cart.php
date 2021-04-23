<?php require 'inc/head.php';
//si pas de login redirection vers la page login
if (empty($_SESSION['login']) || !isset($_SESSION['login'])){
    header('Location: login.php');
}?>
<section class="cookies container-fluid">
    <div class="row">

        <?php
            if(isset($_SESSION['panier']) && !empty($_SESSION['panier'])){
                foreach ($_SESSION['panier'] as $panier => $products){
                    foreach ($products as $product){
                        echo '🍪 ' .$product['name'] . '<hr/>';
                    }
                }
            }else {
                echo 'Panier vide!';
            }

        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
