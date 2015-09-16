<?php 
    include('inc/top_site.php'); 

    if($_SESSION['logged'] == false)
        header("Location: login.php");

    $arrayProdotti = recuperaProdotti();

    $arrayOrdini = recuperaOrdini();
    ?>

    <body>
      <?php include('inc/header.php');?>
        <div class="container">    
       
    <?php include('inc/lateral_menu.php');?>         
            <div class="main-content">
                <h1>Prodotti</h1>
                <table class="tableContent" id="tabella">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Prezzo €</th>
                            <th>Quantità</th>
                            <th>Operazioni</th>
                        </tr>
                    </thead>
                    <tbody>


                    <?php foreach($arrayProdotti as $prodotto): ?>
                        <tr id="riga<?= $prodotto['id']; ?>">
                            <td> <?= $prodotto['id']; ?> </td>
                            <td> <?= $prodotto['nome_prodotto']; ?> </td>
                            <td> <?= $prodotto['costo']; ?></td>
                            <td> <?= $prodotto['quantita']; ?> </td>
                            <td>
                            <?if($_SESSION['livello'] == "admin"): ?>
                                <input type="button" id="<?= $prodotto['id']?>" value="Cancella" / >
                            <? else: ?>
                                <a href="compra.php?id=<?= $prodotto['id']?>"> Compra subito </a>
                            <? endif; ?>
                            </td>
                        </tr>
                    <? endforeach;?>
                    </tbody>
                </table>
                <script type="text/javascript">            
                $(document).ready
                (
                    function()
                    {
                        $('input[type=button]' ).click(function() {
                           var bid = this.id;

                                $.ajax(
                                    {
                                        type: 'POST',
                                        url:  'libs/funzioni.php',
                                        data: {
                                            "cancellaID": bid
                                            },
                                        
                                        success: function(data) { 
                                            window.location.reload();
                                        }, 
                                    }
                                );
                            }
                        );
                    }
                );
            </script>

               
                    <h1>Ordini</h1>
                    <table class="tableContent" id="tabella">
                        <thead>
                            <tr>
                                <th>NO ordine</th>
                                <th>Nome Prodotto</th>
                                <?if($_SESSION['livello'] == 'admin'):?>
                                <th>Nome Cliente</th>
                                <?else:?>
                                <th>Operazione</th>
                                <?endif;?>
                            </tr>
                        </thead>
                        <tbody>


                        <?php foreach($arrayOrdini as $ordine): ?>
                        	<?if($ordine['nomeutente'] == $_SESSION['email'] || $_SESSION['livello'] == 'admin'):?>
                            <tr>
                                <td> <?= $ordine['id']; ?> </td>                                
                                <td> <?= $ordine['nome_prodotto']; ?> </td>
                                <?if($_SESSION['livello'] == 'admin'):?>
                                <td> <?=$ordine['nomeutente']; ?> </td>
                                <?else:?>
                                <td><button name="cancellaa" id='<?=$ordine['id']?>'>Cancella</button></td>
                                <?endif;?>
                            </tr>
                            <?endif?>
                        <? endforeach;?>
                        </tbody>
                    </table>
                    <script type="text/javascript">            
                $(document).ready
                (
                    function()
                    {
                        $('button[name=cancellaa]' ).click(function() {
                           var bid = this.id; 
                                $.ajax(
                                    {
                                        type: 'POST',
                                        url:  'libs/funzioni.php',
                                        data: {
                                            "cancellaORDINE": bid
                                            },
                                        
                                        success: function() { 
                                            window.location.reload(); 
                                        },
                                    }
                                );
                            }
                        );
                    }
                );
            </script>        
            </div>
        </div>

    </body>
</html>       
      