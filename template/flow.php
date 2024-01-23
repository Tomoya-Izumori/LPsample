<section id="flow" class="p-flow sticky">
  <div class="sticky-wrapper">
    <div class="section__header">
      <h2 class="section__header--h2 f-outfit">PROFECT FLOW</h2>
      <span class="section__header--h2--ja"><?php echo $type_title; ?></span>
    </div>
    <div class="section__contents">
      <div class="p-flow__slider c-slider js-slider-flow">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="p-flow--item -cost">
              <div class="p-cost--contents">
                <h3 class="p-cost--title"><?php echo $type_title; ?></h3>
                <div class="p-cost--info">
                  <span>料金</span>
                  <strong><?php echo $cost_price; ?></strong>
                  <p><?php echo $cost_desc; ?><br>
                    <small><?php echo $cost_note; ?></small>
                  </p>
                </div>
                <div class="p-cost--case">
                  <p><?php echo $cost_case; ?></p>
                  <div class="p-cost--range">
                    <p>対応範囲</p>
                    <div class="p-cost--range-items">
                      <?php foreach ($cost_range as $range) {
                        echo '<span>' . $range . '</span>';
                      } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php
          foreach ($flows as $flow) : ?>
            <div class="swiper-slide">
              <div class="p-flow--item" style="background-image: url(<?php echo $flow['img']; ?>);">
                <h3 class="p-flow--title">
                  <span><?php echo $flow['read']; ?></span>
                  <?php echo $flow['title']; ?>
                </h3>
                <div class="p-flow--contents">
                  <p><?php echo $flow['disc']; ?></p>
                </div>
              </div>
            </div>
          <?php
          endforeach;
          ?>
        </div>
        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

      </div>

    </div>
  </div>
</section>