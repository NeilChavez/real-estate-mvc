<form action="<?php echo ROUTE_CREATE?>" method="POST">
  <fieldset>

    <label>Title
      <input type="text" name="title">
    </label>

    <br>
    <label>Address
      <input type="text" name="address_name">
    </label>
    <br>
    <label>Number
      <input type="text" name="address_number">
    </label>
    <br>
    <label>Image
      <input type="file" accept="image/jpeg">
    </label>
    <br>
    <label>Description
      <textarea name=" description"></textarea>
    </label>
    <br>
    <label>Area
      <input type="number" min="0" name="area">
    </label>
    <br>
    <label>Rooms
      <input type="number" min="0" name="rooms">
    </label>
  </fieldset>
  <input type="submit" value="create">

</form>