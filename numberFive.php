<?php
function counter($kata){
  $arr = str_split($kata);
  $vocal = ['a', 'i', 'u', 'e', 'o'];
  $found = array_intersect($vocal, $arr);
  $count = array_count_values($arr);
  $result = [];
  foreach ($found as $item) {
    $result[$item] = $count[$item];
  }
  return $result;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Count</title>
</head>
<body>
  <h2>Masukkan Kalimat/Kata/Huruf</h2>

  <form method="POST" action="<?php $PHP_SELF ?>">
    <p>
      Input: <br>
      <input type="text" name="kata">
    </p>
    <p>
      <button type="submit">Hitung</button>
    </p>
  </form>

  <?php if ($_POST && isset($_POST['kata'])): ?>
    <hr>

    <table border="1">
      <?php foreach (counter($_POST['kata']) as $let => $sum): ?>
        <tr>
          <td style="width:100px"><?php echo $let ?></td>
          <td style="width:100px"><?php echo $sum ?></td>
        </tr>
      <?php endforeach ?>
    </table>
  <?php endif ?>
</body>
</html>