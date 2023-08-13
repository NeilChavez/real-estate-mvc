<h1>Admin</h1>

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
          <button>Edit</button>
          <button>Delete</button>
        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>