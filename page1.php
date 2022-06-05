<?php

if ($_GET)
{
    if($_GET['name'] == 'ofer' && $_GET['password'] == '123')
    {
        echo "Welcome Ofer!" ;
        echo '<form action="page2.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
      </form>';
        // header('Location: page2.php');
        exit;
    }
    else
    {
        echo "You dont have permission to visit here." ;
    }
}
?>

<!DOCTYPE html> 
<html> 
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>

		
	</style>
    <title> Ofer project </title>
    </head>
    <body>
		<form method="GET">
			<label>Name:</label>
			<input name="name">
			<label>Password:</label>
			<input name="password">
			<button type="submit">send</button>
		</form>

	</body>

</html>