<section class="container property-details">

  <h1 class="text-center title-section">
    <?php echo $property->title ?>
  </h1>

  <picture>
    <img src="images/<?php echo $property->image ?>" alt="<?php echo $property->name ?>">
  </picture>
  <div class="details-wrapper">
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


  <article>
    <aside class="flex-center bold">
      <picture class="agent-details">
        <h5 class="text-center">Agent Contact</h5>
        <img src="/images/<?php echo $agent->image ?>"
          alt="<?php echo $agent->name_agent . " " . $agent->surname_agent ?>">
        <figcaption class="flex column">
          <div>
            Agent:
            <?php echo $agent->name_agent . " " . $agent->surname_agent ?>
          </div>
          <span>
            Phone:
            <?php echo $agent->phone_number ?>
          </span>
        </figcaption>
      </picture>
    </aside>
    <p class="paragraph blockquote">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. A, quisquam. Minima quod debitis nostrum, fuga amet
      dolores ex, quibusdam voluptate nam nobis sed itaque rerum eum deleniti quidem labore veniam?
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint doloremque animi incidunt non aliquam veritatis
      magni
      quam labore at. Tenetur voluptatum, harum officiis fuga officia in. Deleniti sunt ab quos?
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo quisquam officia repellat quas dolore, quasi
      veritatis deleniti architecto sapiente facere, dicta sunt distinctio. Praesentium voluptatem magnam, aliquid
      consequatur reprehenderit harum?
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum accusantium ea iste reiciendis, quod accusamus
      eaque illo ratione quidem consequatur omnis temporibus deserunt nemo, doloribus eligendi veniam explicabo dolores
      asperiores!Lorem Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, corporis. Quidem mollitia
      beatae dolor hic consequuntur exercitationem magnam? Laudantium deserunt numquam tempore, provident ab deleniti
      sed eveniet esse? Ipsa, cumque.
      <?php echo $property->description ?>
    </p>
  </article>
</section>