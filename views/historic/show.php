<ul class="breadcrumb">
	<li><a href="index.php">Home</a></li>
	<li><a href="?controller=historic&action=index">Historial</a></li>
	<li><?php echo $historic->year?></a></li>
</ul>	

<ul>

<?php foreach($historic->historicActs as $act){ ?>
<li><?php echo $act->title.'-'.$act->site.'-'.$act->date?></a></li>
<?php } ?>

</ul>