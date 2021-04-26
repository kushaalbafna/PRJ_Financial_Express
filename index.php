<?php
echo"<h1 style="color:blue">PRJ FINANCIAL EXPRESS</h1>
<form method="post" action="index.php" >
<input type="text" name="name">
<input type="submit" value="ok">
</form>";


$name=$_POST["name"];
if (isset($name)) {
echo"<h1>Welcome ".$name."!</h1>";
}
?>
