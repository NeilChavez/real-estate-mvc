<div class="container">
  <section>

    <?php

    $codeMessage = $_GET["code_message"] ?? null;
    $message = "";
    ?>
    <h1>Admin</h1>


    <?php
    if ($codeMessage) {

      $message = mapMessageCodeToResult($codeMessage);
      ?>
      <p class="text-success">
        <?php echo $message ?>
      </p>

      <?php
    }
    ?>





    <h2>Properties</h2>

    <a class="btn btn-blue m-bottom" href="<?php echo ROUTE_CREATE ?>">Click here to create a Property</a>


    <table class="mx-auto">
      <thead>
        <td>id</td>
        <td>title</td>
        <td>Address</td>
        <td>Image</td>
        <td class="text-center">Actions</td>
      </thead>
      <tbody>
        <?php
        foreach ($properties as $property) {
          ?>
          <tr>
            <td>
              <?php echo $property->id ?>
            </td>
            <td>
              <?php echo $property->title ?>
            </td>
            <td>
              <?php echo $property->address_name . " " . $property->address_number ?>
            </td>
            <td><img src="/images/<?php echo $property->image ?>" alt="<?php echo $property->title ?>"></td>
            <td class="actions gap">
              <div class="buttons-wrapper">
                <div class="button-container">
                  <a class="edit flex-center" href="<?php echo ROUTE_UPDATE ?>?id=<?php echo $property->id; ?>">
                    Edit
                  </a>
                </div>
                <div class="button-container">
                  <form method="POST" action="<?php echo ROUTE_DELETE ?>">
                    <input type="hidden" value="<?php echo $property->id ?>" name="id">
                    <input type="submit" class="delete" value="Delete">
                  </form>
                </div>
              </div>
            </td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>

  </section>

  <section>
    <h2>Agents</h2>

    <a class="btn btn-blue m-bottom" href="<?php echo AGENT_CREATE ?>">Click here to create an Agent</a>

    <table class="mx-auto">
      <thead>
        <td>id</td>
        <td>Avatar</td>
        <td>Agent</td>
        <td>Phone Number</td>
        <td>Actions</td>
      </thead>
      <tbody>
        <?php
        foreach ($agents as $agent) {
          ?>
          <tr>
            <td>
              <?php echo $agent->id ?>
            </td>
            <td><img src="/images/<?php echo $agent->image ?>" alt="<?php echo $agent->name_agent ?>"></td>
            <td>
              <?php echo $agent->name_agent . " " . $agent->surname_agent ?>
            </td>
            <td>
              <?php echo $agent->phone_number ?>
            </td>

            <td class="actions gap">
              <div class="buttons-wrapper">
                <div class="button-container">
                  <a class="edit flex-center" href="<?php echo AGENT_UPDATE ?>?id=<?php echo $agent->id; ?>">
                    Edit
                  </a>
                </div>
                <div class="button-container">
                  <form method="POST" action="<?php echo AGENT_DELETE ?>">
                    <input type="hidden" value="<?php echo $agent->id ?>" name="id">
                    <input type="submit" class="delete" value="Delete">
                  </form>
                </div>
              </div>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </section>


</div>