<!DOCTYPE html>
<html>
<head>
	<title>Add lab Results to Patient</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
        body {
            background-image: url('image/images.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        
	</style>
</head>

<body>
<style>

</style>

	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>
</body>
</html>