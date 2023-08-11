<!DOCTYPE html>
<html lang="en">
<head> 


<body>

<form action="<php $_SERVER ['PHP_SELF']; ?>"method-"post">
    <input type="text" nama="nama" /> <br/> 
    <input type="submit" value="OK" /> 
</form>
<?php
if (isset ($_POST['nama'])) {
    echo 'Hallo, ' $_POST ['nama'];
}
?>

</body>
</html>