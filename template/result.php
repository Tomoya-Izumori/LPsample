<section id="result" class="p-result sticky">
  <div class="sticky-wrapper">
    <div class="p-result__list c-slider js-slider">
      <div class="swiper-wrapper">
        <?php
        $i = 1;
        foreach ($results as $result) : ?>
          <div class="swiper-slide">
            <div class="p-result__list__item">
              <h2 class="section__header--h2 f-outfit">CASE 0<?php echo $i; ?></h2>
              <span class="section__header--h2--ja"><?php echo $result['title']; ?></span>
              <img src="<?php echo $result['img']; ?>" alt="<?php echo $result['title']; ?>" class="p-result__list__item--img">
              <p class="p-result__list__item--desc"><?php echo $result['disc']; ?></p>
              <span class="p-result__list__item--skill">
                <?php foreach ($result['skill'] as $skill) {
                  echo '<span>' . $skill . '</span>';
                } ?>
              </span>
              <?php if (isset($result['info'])) : ?>
                <span class="p-result__list__item--info"><?php echo $result['info']; ?></span>
              <?php endif; ?>
            </div>
          </div>
        <?php
          $i++;
        endforeach;
        ?>
      </div>
      <div class="swiper-pagination"></div>

      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</section>