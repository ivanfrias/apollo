<ul class="breadcrumb">
	<li><a href="index.php">Home</a></li>
	<li><a href="?controller=historic&action=index">Historial</a></li>
</ul>	


<ul>

<?php foreach($historics as $historic){ ?>
<li><a href="?controller=historic&action=show&id=<?php echo $historic->id; ?>"><?php echo $historic->year; ?></a></li>
<?php } ?>

</ul>