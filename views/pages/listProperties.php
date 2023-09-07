  <?php
  foreach ($properties as $property) { ?>
    <div>

      <div>
        <h3><?php echo $property->title ?></h3>
        <figure>
          <img src="/images/<?php echo $property->image ?>" alt="<?php echo $property->title ?>">
          <figcaption>
      </div>
      <ul>
        <li>Address: <?php
                      echo $property->address_name . " " . $property->address_number
                      ?>
        </li>
        <li>
          Area: <?php echo $property->area ?>
        </li>
        <li>
          Rooms: <?php echo $property->rooms ?>
        </li>
        <li>
          Agent: <?php echo $property->agents_id ?>
        </li>
      </ul>
      </figcaption>
      </figure>
      <p><?php echo $property->description ?></p>
    </div>
  <?php
  }
  ?>