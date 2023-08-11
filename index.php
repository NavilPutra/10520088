<form method="POST" action="" encytpe="multipart/form-data">
    <table>
        <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td>:</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>FOTO DIRI</td>
            <td>:</td>
            <td><input type="file" name="file"></td>
        </tr>
        <tr>
            <td></td>
            <td>:</td>
            <td><input type="submit" name="hasil" value="KIRIM"></td>
        </tr>
    </table>
</form>

<?php
    if (isset($_POST["hasil"])) {

        $nama = $_POST ["nama"] ;
        $alamat = $_POST ["alamat"];

        $file = $_FILES ["file"]["name"];
        $tmp_name = $_FILES ["file"]["tmp_name"];

        move_uploaded_file($tmp_name, "images/".$file);
?>

<table border="1" cellspacing="0">
    <tr>
        <td>NAMA</td>
        <td>ALAMAT</td>
        <td>FOTO</td>
    </tr>
    <tr>
        <td><?php echo $nama ?></td>
        <td><?php echo $alamat ?></td>
        <td><img src="images/<?php echo $file ?>"> </td>
    </tr>
</table>  

<?php } ?>