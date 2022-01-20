<!DOCTYPE html>
<html lang="en">
<?php include('head-header.php'); 
include('banner.php'); 
banner('Interface Administrateur', 'small-banner');
include 'download.php'
?>

<body>
<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($candidats as $candidat: ?>
    <tr>
      <td><?php echo $candidat['id']; ?></td>
      <td><?php echo $candidat['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $candidat['downloads']; ?></td>
      <td><a href="downloads.php?id=<?php echo $candidat['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>






<?php include('footer.php') ?>
</body>
</html>