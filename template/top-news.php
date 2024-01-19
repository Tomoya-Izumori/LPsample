<?php
// 記事取得 設定
$per_page = 3; // 表示件数

$api = $apiUrl . 'posts/?per_page=' . $per_page;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
if ($response === false) {
  // エラー処理
  curl_close($ch);
  die('ページ読み込みに失敗しました。再読み込みしてください。');
}
$posts = json_decode($response, true);
curl_close($ch);

if ($posts) :
?>

  <section class="p-news sticky">
    <div class="sticky-wrapper">
      <div class="section__header">
        <h2 class="section__header--h2">NEWS</h2>
        <span class="section__header--h2--ja">新着情報</span>
      </div>
      <div class="section__contents">
        <div class="p-news__slider slide">
          <?php
          foreach ($posts as $post) :
            $id = $post['id'];
            $title = $post['title']['rendered'];
            $date = $post['date'];
            $date = date('Y.m.d', strtotime($date));
            $img = $post['thumbnail']['url'];
            $excerpt = $post['excerpt']['rendered'];
            $content = $post['content']['rendered'];

            if ($img) {
              $imgUrl = $img;
            } else {
              $imgUrl = $dir_path . '/img/common/no-image.png';
            }

            if ($excerpt) {
              $contents = strip_tags($excerpt);
            } else {
              $contents = strip_tags($content);
            }
            // 抜粋整形
            $limit = 70;
            if (mb_strlen($contents) > $limit) {
              $contents = mb_substr($contents, 0, $limit) . '･･･';
            }
          ?>

            <a href="<?php echo $homeUrl . '/news?id=' . $id; ?>" class="p-news__item">
              <div class="p-news__img">
                <img src="<?php echo $imgUrl; ?>" alt="">
              </div>
              <div class="p-news__contents">
                <time datetime="2024-01-18"><?php echo $date; ?></time>
                <p><?php echo $title; ?></p>
                <small><?php echo $contents; ?></small>
              </div>
            </a>

          <?php endforeach; ?>

        </div>
        <a href="<?php echo $homeUrl; ?>/news" class="c-link -center">もっと見る</a>
      </div>
  </section>

<?php endif; ?>