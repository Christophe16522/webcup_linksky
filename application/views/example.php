<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
	<div>
		<a href='<?php echo site_url('examples/user')?>'>Login</a> |
		<a href='<?php echo site_url('examples/prixbillet')?>'>Prix Billet</a> |
		<a href='<?php echo site_url('examples/prixsejour')?>'>Prix Sejour</a> |
		<a href='<?php echo site_url('examples/reservationbillet')?>'>Reservation Billet</a> | 
		<a href='<?php echo site_url('examples/reservationsejour')?>'>Reservation Sejour</a> |		 
		<a href='<?php echo site_url('examples/voteland')?>'>Vote Land</a> |
	
		
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
