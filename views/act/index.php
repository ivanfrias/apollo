<ul class="breadcrumb">
	<li><a href="index.php">Home</a></li>
	<li><a href="?controller=act&action=index">Repertório</a></li>
</ul>	


<ul>

<?php foreach($acts as $act){ ?>
<li><a href="?controller=act&action=show&id=<?php echo $act->id; ?>"><?php echo $act->title; ?></a></li>
<?php } ?>

</ul>