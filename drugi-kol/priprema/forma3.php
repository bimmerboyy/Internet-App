<?php
session_start();
require 'connection.php';
if(isset($_POST["delete"]) && isset($_POST["deleteId"])){
  foreach($_POST["deleteId"] as $deleteId){
    $delete = "DELETE FROM proizvodi WHERE id = $deleteId";
    mysqli_query($conn, $delete);
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete Multiple Data</title>
  </head>
  <body>
    <table border = 1 cellpadding = 8 cellspacing = 0>
      <form class="" action="" method="post">
        <tr>
          <td> <button type="submit" name="delete">Delete</button> </td>
          <td>Id</td>
          <td>Naziv</td>
          <td>Brend</td>
          <td>Stara cena</td>
          <td>Nova cena</td>
          <td>Dostupnost</td>
        </tr>
        <?php
        $rows = mysqli_query($conn, "SELECT * FROM proizvodi");
        $i = 1;
        foreach($rows as $row) :
        ?>
        <tr>
          <td align = center> <input type="checkbox" name="deleteId[]" value="<?php echo $row['id']; ?>"> </td>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row["naziv"]; ?></td>
          <td><?php echo $row["brend"]; ?></td>
          <td><?php echo $row["stara_cena"]; ?></td>
          <td><?php echo $row["nova_cena"]; ?></td>
          <td><?php echo $row["dostupnost"]; ?></td>
        </tr>
        <?php endforeach; ?>
      </form>
    </table>
  </body>
</html>
