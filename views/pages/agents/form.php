<form method="POST" enctype="multipart/form-data">
  <fieldset>
    <br>
    <label>Name
      <input type="text" name="agent[name_agent]" value="<?php
                                                    echo $agent->name_agent
                                                    ?>">
    </label>

    <br>
    <label>Surname
      <input type="text" name="agent[surname_agent]" value="<?php echo $agent->surname_agent ?>">
    </label>
    <br>
    <label>N. Telephon
      <input type="text" min="0" name="agent[phone_number]" value="<?php echo $agent->phone_number ?>">
    </label>
    <br>
    <br>
    <label>Image
      <input type="file" name="agent[image]" accept="image/jpeg">
    </label>
    <?php 
      if($agent->image_agent){
        ?>
        <img src="/images/<?php echo $agent->image_agent ?>" alt="<?php echo $agent->name_agent ?> ">
        <?php
      }
    ?>
    <br>
    <br>
  </fieldset>
  <input type="submit" value="create">
</form>