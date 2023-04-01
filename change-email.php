<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['first_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Email</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="change-e.php" method="post">
     	<h2>Change Email ID</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     	<label>Current Email</label>
     	<input type="email" 
     	       name="cu" 
     	       placeholder="current Email">
     	       <br>

     	<label>New Email</label>
     	<input type="email" 
     	       name="nu" 
     	       placeholder="New Email">
     	       <br>

     	<button type="submit">CHANGE</button>
          <a href="home.php" class="ca">HOME</a>
     </form>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>