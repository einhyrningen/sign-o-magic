<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<form method="post">
				<b>Navn</b>:<br />
				<input type="text" name="name" /><br />
				<b>Stilling</b>:<br />
				<input type="text" name="position" /><br />
				<br />
				<br />
				<b>Telefon</b>:<br />
				<input type="text" name="telephone" /><br />
				<b>E-post</b>:<br />
				<input type="text" name="email" /><br />
				<b>Twitter</b>:<br />
				<input type="text" name="twitter" /><br />
				<br />
				<br /><b>Forening</b>:<br />
				<select name="config">
					<? foreach($configs as $filename => $config): ?>
					<option value="<?=$filename?>"><?=$config['name']?></option>
					<? endforeach; ?>
				</select><br /><br />
				<input type="submit" name="clean" value="Få signatur!" /><br />
				<input type="submit" name="outlook" value="Last ned Outlook-signatur." /><br />
			</form>
		</div>
	</body>
</html>