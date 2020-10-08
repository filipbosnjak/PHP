<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Website2</title>
</head>
<body>
	<div > 
		<h1>Server Info</h1>
		<ul>
			<?php foreach($server as $key => $value): ?>
				<li>
					<strong><?php echo $key; ?>: </strong><?php echo $value; ?>
				</li>
			<?php endforeach; ?>
		</ul>

		<h1>Client Info</h1>
			<ul>
				<?php foreach($client as $key => $value): ?>
					<li>
						<strong><?php echo $key; ?>: </strong><?php echo $value; ?>
					</li>
				<?php endforeach; ?>
			</ul>
	</div>
</body>
</html>