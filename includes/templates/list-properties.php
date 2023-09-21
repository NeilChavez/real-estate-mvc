<?php
foreach ($properties as $property) { ?>

  <div class="card column">
    <img src="/images/<?php echo $property->image ?>" alt="<?php echo $property->title ?>" class="image">
    <div class="details flex column gap-sm">
      <div class="flex align-items-center justify-content-between">
        <span class="price">10000 €</span>
        <a href="<?php echo ROUTE_PROPERTY ?>?id=<?php echo $property->id ?>" class="btn-sm btn-yellow">For Sale</a>
      </div>
      <h4>
        <?php echo $property->title ?>
      </h4>
      <p>
        <?php
        echo $property->address_name . " " . $property->address_number
          ?>
      </p>
      <p>
        <?php echo $property->description ?>
      </p>

      <div>
        <ul class="flex gap-sm">
          <li class="flex items-center gap-sm border-gray-thick">
            <img src="/images/icons/icon-bed.svg" class="icon" alt="icon bed">
            <span>
              <?php echo $property->rooms ?> rooms
            </span>
          </li>
          <li class="flex items-center gap-sm border-gray-thick">
            <img src="/images/icons/icon-bathroom.svg" class="icon" alt="icon bathroom">
            <span>
              3 Baths
            </span>
          </li>
          <li class="flex items-center gap-sm border-gray-thick">
            <img src="/images/icons/icon-sqft.svg" class="icon" alt="icon sqft">
            <span>
              <?php echo $property->area ?> sqft
            </span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <?php
}
?>