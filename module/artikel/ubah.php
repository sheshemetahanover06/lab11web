<?php
include "class/Database.php";
include "class/Form.php";

$db   = new Database($config);
$form = new Form();
$id   = $_GET['id'];

$data = $db->query("SELECT * FROM artikel WHERE id=$id")->fetch_assoc();

$form->addField("judul", "Judul Artikel");
$form->addField("isi", "Isi Artikel");

if ($_POST) {
    $judul = $db->escape($_POST['judul']);
    $isi   = $db->escape($_POST['isi']);

    $db->query("UPDATE artikel SET judul='$judul', isi='$isi' WHERE id=$id");
    echo "<script>alert('Data diupdate!');window.location='/lab11_php_oop/artikel/index'</script>";
}
?>

<h1>Edit Artikel</h1>

<form method="POST">
    Judul: <br>
    <input type="text" name="judul" value="<?= $data['judul'] ?>"><br><br>

    Isi: <br>
    <input type="text" name="isi" value="<?= $data['isi'] ?>"><br><br>

    <button type="submit">Update</button>
</form>
