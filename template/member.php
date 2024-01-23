<section id="<?php echo $sectionId; ?>" class="p-member sticky">
    <div class="sticky-wrapper">
        <div class="section__header">
            <h2 class="section__header--h2 f-outfit"><?php echo $sectionTitle; ?></h2>
        </div>
        <div class="section__contents">
            <div class="p-member__list c-slider js-slider">
                <div class="swiper-wrapper">

                    <?php foreach ($members as $member) : ?>
                        <div class="swiper-slide">
                            <div class="p-member__list__item">
                                <img src="<?php echo $member['img']; ?>" alt="" class="p-member__list__item--img">
                                <p class="p-member__list__item--name"><?php echo $member['name']; ?></p>
                                <p class="p-member__list__item--position"><?php echo $member['position']; ?></p>
                                <span class="p-member__list__item--skill">
                                    <?php foreach ($member['skill'] as $skill) {
                                        echo '<span>' . $skill . '</span>';
                                    } ?>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
</section>