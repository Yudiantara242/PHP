<h2>Baris Aritmatika</h2><hr>
<table>
<td>Nilai Ke-n:</td>
<form method="POST" action="">
<td><input type="number" name="n" placeholder="Masukan angka" required>
<input type="submit" name="Generate"></td><tr>
<h3>Hasil Barisan Aritmatika</h3><hr>
</table>
</form>
<?php
if (isset($_POST['n'])) {
$n = $_POST['n'];
$a = 3;
$b = 0;
for ($i=0; $i < $n; $i++) {
$keN = $a + $b;
$a = $keN;
echo $keN.' ';
$b = 4;
}
}
?>
