<?php 
require_once 'controller.php';
$controller	= new controller();
 ?>
<html>
<body>
<table>
	<th>Username</th>
	<th>Password</th>
	<th>Action</th>
</table>
<?php $controller->profile(); ?>
<button><a href="logout.php">Logout</a></button>
</body>
</html>