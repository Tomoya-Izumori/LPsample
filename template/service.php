<section class="p-service sticky">
  <div class="sticky-wrapper">
    <ul class="p-service__list slide">

      <?php
      $i = 1;
      foreach ($services as $service) : ?>

        <li class="p-service__list__item">
          <h2 class="section__header--h2 f-outfit">CASE 0<?php echo $i; ?></h2>
          <span class="section__header--h2--ja"><?php echo $service['title']; ?></span>
          <img src="<?php echo $service['img']; ?>" alt="<?php echo $service['title']; ?>" class="p-service__list__item--img">
          <p class="p-service__list__item--desc"><?php echo $service['disc']; ?></p>
          <span class="p-service__list__item--skill">
            <?php foreach ($service['skill'] as $skill) {
              echo '<span>' . $skill . '</span>';
            } ?>
          </span>
          <?php if(isset($service['info'])): ?>
            <span class="p-service__list__item--info"><?php echo $service['info']; ?></span>
          <?php endif; ?>
        </li>

      <?php
        $i++;
      endforeach;
      ?>

    </ul>
  </div>
</section>