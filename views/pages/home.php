<section class="hero home relative">
  <div class="residential-solutions wrapper container flex items-center">
    <div class="flex items-center column align-items-start gap-2">
      <span class="text chip">Real Estate Agency</span>
      <P class="text">
        Find the perfect place to
        Live with your family
      </P>

      <span class="chip">Distinctively re-engineer revolutionary meta-services and premium architectures. Intrinsically incubate.</span>
      <a href="#section-properties" class="btn-m btn-white bold">
        Explore Properties
        <img src="/images/icons/arrow-down.svg" alt="arrow-icon" class="icon">
      </a>
    </div>
    <div class="home-image">
      <div class="absolute image-hero-wrapper">
        <img src="/images/hero-house.webp" alt="hero">
      </div>
    </div>
  </div>
</section>


<section class="properties-section section" id="section-properties">
  <h2 class="title-section">Properties for sale in your favorite area</h2>
  <div class="fluid-grid container">
    <?php
    include __DIR__ . "/../../includes/templates/list-properties.php"
    ?>
  </div>
  <div class="flex justify-center mt-2">
    <a href="<?php echo ROUTE_PROPERTIES?>" class="btn-lg btn-blue">View More</a>
  </div>
</section>

<section class="section">
  <h2 class="title-section">Why Choose Our Properties Of Real Estate Industries</h2>
  <div class="grid grid-container container">
    <div class="card first-box column">
      <div class="image-wrapper">
        <img src="/images/icons/piggy-bank.svg" alt="piggy icon">
      </div>
      <div class="flex column gap">
        <h5 class="text-center">Budget Friendly</h5>
        <span class="text-md">Distinctively re-engineer revolutionary meta-services and premium At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</span>
      </div>
    </div>

    <div class="card second-box flex-row align-items-center">
      <div class="image-wrapper flex">
        <img src="/images/icons/church.svg" alt="church icon">
      </div>
      <div class="flex column gap">
        <h5 class="text-center">Property Insurance</h5>
        <span class="text-md">Distinctively re-engineer revolutionary meta-services and premium At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis Distinctively re-engineer revolutionary meta-services and premium. 
        </span>
      </div>
    </div>

    <div class="card third-box column">
      <div class="image-wrapper">
        <img src="/images/icons/billets.svg" alt="billets icon">
      </div>
      <div class="flex column gap">
        <h5 class="text-center">Trusted By Thousands</h5>
        <span class="text-md">Distinctively re-engineer revolutionary meta-services and premium At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</span>
      </div>
    </div>

    <div class="card fourth-box column">
      <div class="image-wrapper">
        <img src="/images/icons/map.svg" alt="map icon">
      </div>
      <div class="flex column gap">
        <h5 class="text-center">Prime Location</h5>
        <span class="text-md">Distinctively re-engineer revolutionary meta-services and premium At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</span>
      </div>
    </div>
    <div class="card fifth-box column">
      <div class="image-wrapper">
        <img src="/images/icons/hands.svg" alt="church icon">
      </div>
      <div class="flex column gap">
        <h5 class="text-center">Lowest Commission</h5>
        <span class="text-md">Lorem ipsum dolor, sit amet adipisicing elit. Fuga dolor veniam velit, qui non nulla dolorem deleniti quod quo voluptates quam esse rerum quaerat ea, repudiandae exercitationem nostrum totam alias!</span>
      </div>
    </div>
  </div>
</section>