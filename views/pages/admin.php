<?php

$codeMessage = $_GET["code_message"] ?? null;
$message = "";
?>
<h1>Admin</h1>


<?php
if ($codeMessage) {

  $message = mapMessageCodeToResult($codeMessage);
}
?>

<p><?php echo $message ?></p>


<br>
<br>
<h2>Properties</h2>
<br>
<a href="<?php echo ROUTE_CREATE ?>">Create a property</a>
<br>
<br>
<table>
  <thead>
    <td>id</td>
    <td>title</td>
    <td>Address</td>
    <td>Image</td>
    <td>Actions</td>
  </thead>
  <tbody>
    <?php
    foreach ($properties as $property) {
    ?>
      <tr>
        <td><?php echo $property->id ?></td>
        <td><?php echo $property->title ?></td>
        <td><?php echo $property->address_name . " " . $property->address_number  ?></td>
        <td><?php echo $property->image ?></td>
        <td>
          <?php
          $id = $property->id;
          echo "ID: " . $id;
          ?>
          <form method="POST" action="/delete">
            <input type="hidden" value="<?php echo $property->id ?>" name="id">
            <button>Delete</button>
          </form>
          <a href="/update?id=<?php echo $property->id; ?>">
            Edit
          </a>
        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>