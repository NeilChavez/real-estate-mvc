<section class="container">
  <a href="<?php echo ROUTE_ADMIN ?>" class="btn btn-blue m-bottom">back to Admin Dashboard</a>
  <div class="flex-center">
    <form class="form flex column gap-2" method="POST" enctype="multipart/form-data">


      <fieldset class="flex column">
        <label for="property[title]">Title
        </label>
        <input type="text" autocomplete="off" placeholder="House in Paris" name="property[title]" id="property[title]" value="<?php
        echo $property->title
          ?>">
      </fieldset>


      <fieldset class="flex column">

        <label for="property[address_name]">Address
        </label>
        <input type="text" autocomplete="off"  placeholder="Av. des Champs-Élysées" name="property[address_name]"
          id="property[address_name]" value="<?php echo $property->address_name ?>">
      </fieldset>

      <div class="flex gap flex-wrap">
        <fieldset class="flex column">
          <label for="property[address_number]">Number Street
          </label>
          <input type="text" autocomplete="off" placeholder="22" name="property[address_number]" id="property[address_number]"
            value="<?php echo $property->address_number ?>">
        </fieldset>
        <fieldset class="flex column">
          <label for="property[area]">Area
          </label>
          <input type="number" autocomplete="off"  placeholder="85" min="0" name="property[area]" id="property[area]"
            value="<?php echo $property->area ?>">
        </fieldset>
        <fieldset class="flex column">
          <label for="property[rooms]">Rooms
          </label>
          <input type="number" autocomplete="off" placeholder="4" min="0" name="property[rooms]" id="property[rooms]"
            value="<?php echo $property->rooms ?>">
        </fieldset>
           <fieldset class="flex column">
          <label for="property[price]">Price
          </label>
          <input type="number" autocomplete="off" placeholder="120.000" min="0" name="property[price]" id="property[price]"
            value="<?php echo $property->price ?>">
          </fieldset>

        <fieldset class="flex column">
          <label for="property[agent]">Agent</label>

          <select name="property[agent]" id=property[agent]>
            <option value="" default>--Please choose an option--</option>
            <?php

            foreach ($agents as $agent) {
              ?>

              <option value="<?php echo $agent->id ?>" <?php echo $agent->id === $property->agents_id ? "selected" : "" ?>>
                <?php echo $agent->name_agent . " " . $agent->surname_agent ?>
              </option>
              <?php

            }
            ?>
          </select>


        </fieldset>
      </div>


      <fieldset class="flex column">

        <label for="property[image]">Image
        </label>
        <input type="file" name="property[image]" id="property[image]" accept="image/jpeg">
      </fieldset>

      <?php
      if ($property->image) {
        ?>
        <picture>
          <img src="/images/<?php echo $property->image ?>" alt="<?php echo $property->title ?>">
        </picture>
        <?php
      }
      ?>
      <fieldset class="flex column">
        <label for="property[description]">Description
          <textarea name="property[description]"
            placeholder="Cozy home with lush garden, bright interiors, modern kitchen, comfortable bedrooms, and panoramic views in a peaceful neighborhood."
            id="property[description]"><?php echo $property->description ?></textarea>
        </label>
      </fieldset>
      <input type="submit" class="btn btn-blue" value="<?php echo $property->id ? "Update" : "Create" ?>">
    </form>
  </div>
</section>