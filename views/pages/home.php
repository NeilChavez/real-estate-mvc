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


<section class="properties-section" id="section-properties">
  <h1 class="title-section">Properties for sale in your favorite area</h1>
  <div class=" fluid-grid  container">
    <?php
    include "listProperties.php";
    ?>
  </div>
  <div class="flex justify-center mt-2">
    <a href="#" class="btn-lg btn-blue">View More</a>
  </div>
</section>