<?php include('inc/top_site.php'); ?>

    <body>

            <?php include('inc/header.php');?>
                    <div class="container">
           
            <div class="main-content">
                <h1>Informazioni</h1>  
                <p>Il progetto simula la gestione di un centro assistenza e vendita. Permette l'aggiunta, la cancellazione dei prodotti e 
                   la visualizzazione degli ordini da parte dell'amministratore, la visualizzazione dei prodotti e dei propri ordini e il loro acquisto da parte
                   dell'utente. Le uniche azioni permesse nella home page è il login e la registrazione di un nuovo utente; in base alle credenziali inserite saranno possibili
                   le diverse operazioni.
                   Gli account dei ruoli iniziali sono:<br/>
                   Utente:<br/>
                   username: user@user.com<br/>
                   password: user<br/>
                   Admin:<br/>
                   username: admin@admin.com<br/>
                   password: admin<br/>
                </p>   
                <p>Requisiti rispettati:
                    <ul>
                        <li>Utilizzo di HTML e CSS</li>
                        <li>Utilizzo di PHP e MySQL</li>
                        <li>Due ruoli (amministratore e utente)</li>    
                        <li>Una transazione (acquisto prodotti) implementata in funzioni.php (funzione compraProdotto)</li>  
                        <li>Una funzionalità AJAX (cancellazioni prodotti) implementata in index.php</li>             
                    </ul>
                </p>               
            </div>
        </div>
    </body>
</html>