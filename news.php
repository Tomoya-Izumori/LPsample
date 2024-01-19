<?php
include 'config.php';

if (isset($_GET['id'])) {
    $postId = $_GET['id'];
}

$is_single = false;
$is_archive = false;

if (isset($postId)) {
    $is_single = true;

    // 詳細記事 取得
    $api = $apiUrl . 'posts/' . $postId;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    if ($response === false) {
        // エラー処理
        curl_close($ch);
        die('ページ読み込みに失敗しました。再読み込みしてください。');
    }
    $post = json_decode($response, true);
    curl_close($ch);

    $id = $post['id'];
    $title = $post['title']['rendered'];
    $date = $post['date'];
    $date = date('Y.m.d', strtotime($date));
    $img = $post['thumbnail']['url'];
    $excerpt = strip_tags($post['excerpt']['rendered']);
    $content = $post['content']['rendered'];

    $title = $post['title']['rendered'] . '｜' . 'Sample LP';
    if ($excerpt) {
        $description = $excerpt;
    } else {
        $description = strip_tags($content);
    }
} else {
    $is_archive = true;

    // アーカイブ 取得
    $api = $apiUrl . 'posts';
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

    $title = '新着情報｜' . 'Sample LP';
    $description = 'スライド型LPのお知らせ一覧ページです。';
}


$is_home = false; //トップページの判定用の変数

include 'head.php'; // head.php の読み込み
?>
<!-- 特定のページでのみ読み込むスタイルシートなどがあればここに追加 -->
</head>

<body class="p-page">

    <?php include 'template/header.php'; ?>

    <div class="l-contents">

        <div class="l-container">

            <section>
                <div class="section__contents">

                    <?php if ($is_single) : ?>

                        <div class="p-news-single">
                            <div class="p-news-single__header">
                                <h2><?php echo $title; ?></h2>
                                <?php if($excerpt): ?><p><?php echo $excerpt; ?></p><?php endif; ?>
                                <time><?php echo $date; ?></time>
                            </div>
                            <div class="p-news-single__body">
                                <div class="p-news-editor">
                                    <?php echo $content; ?>
                                </div>
                                <div class="p-news__back">
                                    <a href="<?php echo $homeUrl; ?>/news">一覧へ戻る</a>
                                </div>
                            </div>
                        </div>

                    <?php elseif ($is_archive) : ?>

                        <div class="p-page-title">
                            <h1>NEWS<span>新着情報</span></h1>
                        </div>

                        <div class="p-news__wrap">
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
                                    $contents = mb_substr($contents, 0, $limit, "utf-8") . '･･･';
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

                    <?php endif; ?>
                </div>
            </section>

        </div>

    </div>

    <?php include 'template/footer.php'; ?>
    <?php include 'foot.php'; ?>
</body>

</html>