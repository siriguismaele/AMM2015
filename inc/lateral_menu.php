
    <ul class="menuPrincipale">


    	<? if(isset($_SESSION['logged']) && $_SESSION['logged'] == true): ?>
        <li> <a href="index.php"> Visualizza prodotti </a> </li>
        <? if($_SESSION['livello'] == "admin"): ?>
        	<li> <a href="aggiungiProdotto.php"> Aggiungi prodotti </a> </li>
        <? endif; ?>

        <li> <a href="about.php"> About </a> </li>
        <li> <a href="logout.php"> Disconnetti! </a> </li>
    <? else: ?>
    <li> <a href="login.php"> Login </a> </li>
	<? endif; ?>
    </ul>
</div>