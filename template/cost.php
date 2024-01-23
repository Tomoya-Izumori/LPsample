<section id="cost" class="p-cost sticky">
    <div class="sticky-wrapper">
        <div class="section__header">
            <h2 class="section__header--h2 f-outfit">PROJECT COST</h2>
            <span class="section__header--h2--ja">開発コスト</span>
        </div>
        <div class="section__contents">
            <div class="p-cost--contents">
                <h3 class="p-cost--title"><?php echo $cost_title; ?></h3>
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
</section>