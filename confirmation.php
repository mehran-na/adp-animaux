<!--Header-->
<?php include 'header.php' ?>
<!-- Site Body -->
<div id = "server-reponse">
    <?php if($_GET["succes"]){ ?>
    <h4>Vos Commandes ont enregistrer avec succées</h4>
    <?php }else{ ?>
    <h4>Error</h4>
	<?php }?>
</div>
<!--footer-->
<?php include 'footer.php' ?>