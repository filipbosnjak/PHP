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
			<?php foreach($server as $key => $value): ?><!-- We can run php inside of html doc like this - This for each executes for every element of the server array. We use key and value as instances-->
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