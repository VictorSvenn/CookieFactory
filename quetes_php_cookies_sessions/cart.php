<?php
require 'inc/head.php';
require "inc/data/products.php";

if(!isset($_SESSION['loginname']))
{
    header('Location: /index.php');
}

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php echo "Dans votre panier: </br> "?>
        <?php
        $id= -1;
        $product=null;
        if (isset($_COOKIE['id'])){
            $id=$_COOKIE['id'];
            $product=$catalog[$id];
        }
        echo "- ". $product['name'];
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
