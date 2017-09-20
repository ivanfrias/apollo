<ul class="breadcrumb">
	<li><a href="index.php">Home</a></li>
	<li>Repertório</li>
</ul>
	
<?php
 
foreach ( Service::getInstance().getShows()['data'] as $key=>$value) {
	?>
		
	<div id="id<?php echo $value['id']?>" class="w3-modal" >
		<div class="w3-modal-content w3-animate-top w3-card-4">
			<header class="w3-container w3-dark-gray"> 
				<span onclick="document.getElementById('id<?php echo $value['id']?>').style.display='none'" 
					class="w3-button w3-display-topright">&times;</span>
					<h2><?php echo $value['title'] ?></h2>
				</header>
				<div class="w3-container w3-dark-gray">
					<div id="author"><?php echo $value['author'] ?></div>
					<p><?php echo $value['description'] ?></p>
				</div>
			</div>
		</div>
		<?php
	}
	?>