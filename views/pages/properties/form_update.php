<form method="POST" enctype="multipart/form-data">
  <fieldset>

    <label>Title
      <input type="text" name="property[title]" value="<?php
                                                        echo $property->title
                                                        ?>">
    </label>

    <br>
    <label>Address
      <input type="text" name="property[address_name]" value="<?php echo $property->address_name ?>">
    </label>
    <br>
    <label>Number
      <input type="text" name="property[address_number]" value="<?php echo $property->address_number ?>">
    </label>
    <br>
    <!-- TODO -->
    <label>Image
      <input type="file" name="property[image]" accept="image/jpeg">

    </label>
    <?php
    if ($property->image) {
    ?>
      <img src="/images/<?php echo $property->image ?>" alt="<?php echo $property->title ?>">
    <?php
    } else {
    ?>
      <p>We have no images yet :( </p>
      <p>Be the first to upload a new one! :) </p>
    <?php
    }
    ?>
    <br>
    <label>Description
      <textarea name="property[description]"><?php echo $property->description ?></textarea>
    </label>
    <br>
    <label>Area
      <input type="number" min="0" name="property[area]" value="<?php echo $property->area ?>">
    </label>
    <br>
    <label>Rooms
      <input type="number" min="0" name="property[rooms]" value="<?php echo $property->rooms ?>">
    </label>
  </fieldset>
  <input type="submit" value="Update">
</form>