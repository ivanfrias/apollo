<ul class="breadcrumb">
	<li><a href="index.php">Home</a></li>
	<li><a href="?controller=marathon&action=index">Meia Maratona</a></li>
</ul>	

<p>A primeira meia maratona de teatro realizou-se no ano de 2006. A Meia maratona de teatro é um projeto que pretende abranger, entre outros e além de espetáculos de teatro, programação de música, dança, hora de conto, mostra de vídeos. É realizada durante três dias, em que o principal conceito é o de serem apresentados espetáculos com cerca de 3 horas de intervalo. Promover o intercâmbio e o conhecimento de novos grupos e trabalhos é também um dos objetivos. Desde 2014 que a Meia Maratona se estendeu à Vila Medieval de Ourém.</p>

<ul>

<?php foreach($marathons as $marathon){ ?>
<li><a href="?controller=marathon&action=show&id=<?php echo $marathon->id; ?>"><?php echo $marathon->title.' - '.$marathon->dates ?></a></li>
<?php } ?>

</ul>