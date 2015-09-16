<?php 
    include('inc/top_site.php'); 

    if(!isset($_SESSION['logged']) && $_SESSION['logged'] == false)
        header("Location: index.php");

    $error = false;

    if(!isset($_GET['id']))
        header("Location: index.php");
    
    else
    {
        $risposta = compraProdotto($_GET['id'], $_SESSION['email']);
        
    }
        
?>

    <body>
    <?php include('inc/header.php');?>
        <div class="container">
            

            <?php include('inc/lateral_menu.php');?>
            <div class="main-content">
                <h1>Acquista</h1>

                <?php if($risposta == false): ?>
                    <div class="errore"> Ordine Interroto, Riprova </div>
                <? else: ?>
                    <div class="successo"> Ordine Effettuato </div>
                <? endif;?>

            </div>

         

        </div>
    </body>
</html>