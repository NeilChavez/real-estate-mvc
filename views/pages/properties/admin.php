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
<a href="<?php echo ROUTE_CREATE ?>">Create a Property</a>
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
        <td><img src="/images/<?php echo $property->image ?>" alt="<?php echo $property->title ?>"></td>
        <td>
          <form method="POST" action="<?php echo ROUTE_DELETE ?>">
            <input type="hidden" value="<?php echo $property->id ?>" name="id">
            <button>Delete</button>
          </form>
          <a href="<?php echo ROUTE_UPDATE ?>?id=<?php echo $property->id; ?>">
            Edit
          </a>
        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>

<br>
<br>
<h2>Properties</h2>
<br>
<a href="<?php echo AGENT_CREATE ?>">Create Agent</a>
<br>
<br>
<table>
  <thead>
    <td>id</td>
    <td>Avatar</td>
    <td>Name</td>
    <td>Surname</td>
    <td>Phone Number</td>
    <td>Actions</td>
  </thead>
  <tbody>
    <?php
    foreach ($agents as $agent) {
    ?>
      <tr>
        <td><?php echo $agent->id ?></td>
        <td><img src="/images/<?php echo $agent->image ?>" alt="<?php echo $agent->name_agent ?>"></td>
        <td><?php echo $agent->name_agent ?></td>
        <td><?php echo $agent->surname_agent ?></td>
        <td><?php echo $agent->phone_number ?></td>

        <td>
          <form method="POST" action=<?php echo AGENT_DELETE ?>>
            <input type="hidden" value="<?php echo $agent->id ?>" name="id">
            <button>Delete</button>
          </form>
          <a href="<?php echo AGENT_UPDATE ?>?id=<?php echo $agent->id; ?>">
            Edit
          </a>
        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>