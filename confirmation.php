<!--Header-->
<?php include 'header.php' ?>
<!-- Site Body -->
<div id = "server-reponse">
    <?php if($_GET["succes"]){ ?>
    <h4>Votre animal a enregistré avec succée</h4>
    <?php }else{ ?>
    <h4>Erreur d'enregistrement</h4>
	<?php }?>
</div>
<!--footer-->
<?php include 'footer.php' ?>