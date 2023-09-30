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
        <span class="text-md">Whether you're a first-time homebuyer or an investor seeking cost-effective opportunities, our listings provide value without compromising quality.</span>
      </div>
    </div>

    <div class="card second-box flex-row align-items-center">
      <div class="image-wrapper flex">
        <img src="/images/icons/church.svg" alt="church icon">
      </div>
      <div class="flex column gap">
        <h5 class="text-center">Property Insurance</h5>
        <span class="text-md">Protect Your Investment with Comprehensive Property Insurance. Safeguard your home, business, or real estate investments with our reliable property insurance solutions.
        </span>
      </div>
    </div>

    <div class="card third-box column">
      <div class="image-wrapper">
        <img src="/images/icons/billets.svg" alt="billets icon">
      </div>
      <div class="flex column gap">
        <h5 class="text-center">Trusted By Thousands</h5>
        <span class="text-md">Trusted by thousands, our reputation speaks for itself. We've built a solid track record of satisfied clients who have chosen us as their real estate partner. </span>
      </div>
    </div>

    <div class="card fourth-box column">
      <div class="image-wrapper">
        <img src="/images/icons/map.svg" alt="map icon">
      </div>
      <div class="flex column gap">
        <h5 class="text-center">Prime Location</h5>
        <span class="text-md">Our portfolio showcases exclusive homes, apartments, and commercial spaces nestled in the heart of sought-after neighborhoods. </span>
      </div>
    </div>
    <div class="card fifth-box column">
      <div class="image-wrapper">
        <img src="/images/icons/hands.svg" alt="church icon">
      </div>
      <div class="flex column gap">
        <h5 class="text-center">Lowest Commission</h5>
        <span class="text-md">Discover the savings and exceptional service that come with choosing us as your trusted real estate partner.</span>
      </div>
    </div>
  </div>
</section>