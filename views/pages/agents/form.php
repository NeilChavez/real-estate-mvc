<section class="container">
  
  <form method="POST" enctype="multipart/form-data" class="form flex column gap-2">
    <fieldset class="flex column">
      <label for="agent[name_agent]">Name
      </label>
      <input type="text" name="agent[name_agent]" id="agent[name_agent]" value="<?php
      echo $agent->name_agent
        ?>">
    </fieldset>

    <fieldset class="flex column">
      <label for="agent[surname_agent]">Surname
      </label>
      <input type="text" name="agent[surname_agent]" id="agent[surname_agent]"
        value="<?php echo $agent->surname_agent ?>">
    </fieldset>

    <fieldset class="flex column">
      <label for="agent[phone_number]">N. Telephon
      </label>
      <input type="text" min="0" name="agent[phone_number]" id="agent[phone_number]"
        value="<?php echo $agent->phone_number ?>">
    </fieldset>

    <fieldset class="flex column">
      <label for="agent[image]">Image
      </label>
      <input type="file" name="agent[image]" id="agent[image]" accept="image/jpeg">
    </fieldset>
    <?php
    if ($agent->image) {
      ?>
      <img src="/images/<?php echo $agent->image ?>" alt="<?php echo $agent->name_agent ?> ">
      <?php
    }
    ?>
    <br>
    <br>
       <input type="submit" class="btn btn-blue" value="<?php echo $agent->id ? "Update" : "Create" ?>">
  </form>

</section>