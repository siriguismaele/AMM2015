<?php 
    include('inc/top_site.php'); 

     if($_SESSION['logged'] == false || $_SESSION['livello'] == "user")
        header("Location: login.php");

    $error = false;

    if(isset($_POST['aggiungi']))
    {
        $nome_prodotto  = $_POST['nome_prodotto'];
        $costo          = $_POST['costo'];
        $quantita       = $_POST['quantita'];


        if(trim($nome_prodotto) == '' || trim($costo) == '' || trim($quantita) == '')
            $error = true;        

        if(is_int($costo) || is_int($quantita))
            $error = true;

        if($error == false){
            aggiungiProdotto($nome_prodotto, $costo, $quantita);
        }

    }
        
?>

    <body>

            <?php include('inc/header.php');?>
            <div class="container">

            <?php include('inc/lateral_menu.php');?>
            <div class="main-content">
                <h1>Aggiungi prodotto</h1>
                <?php if($error == true): ?>
                    <div class="errore"> Errore nell'inserimento, riprova. </div>
                <? elseif($error == false && isset($_POST['aggiungi'])): ?>
                    <div class="successo"> Prodotto aggiunto con successo </div>           
                <? endif;?>
                <form method="post" action="aggiungiProdotto.php">
                <table class="table">
                    <tr>
                        <td>
                            <label for="username">Nome prodotto</label>
                        </td>
                        <td>
                            <input name="nome_prodotto" id="nome_prodotto" type="text" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="username">Prezzo €</label>
                        </td>
                        <td>
                            <input name="costo" id="costo" type="text" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="username">Quantità</label>
                        </td>
                        <td>
                            <input name="quantita" id="quantita" type="text" />
                        </td>
                    </tr>
                    
                    </table>
                    <input type="submit" value="Aggiungi" name="aggiungi"/>
                </form>
                
            </div>

            

        </div>
    </body>
</html>