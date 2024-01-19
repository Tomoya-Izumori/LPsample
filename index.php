<?php
include 'config.php';

$title = 'Sample LP';
$description = 'スライド型LPのサンプルサイトです。';
$is_home = true; //トップページの判定用の変数

include 'head.php'; // head.php の読み込み
?>
<!-- 特定のページでのみ読み込むスタイルシートなどがあればここに追加 -->
</head>

<body>
    <?php include 'template/header.php'; ?>
    <?php include 'template/mv01.php'; ?>
    <?php include 'template/mv02.php'; ?>
    <?php include 'template/about.php'; ?>

    <?php // ↓ ロゴカラーチェンジ ポイント ?>
    <span id="js-copy-change-point"></span>

    <?php include 'template/service.php'; ?>
    <?php include 'template/recruit.php'; ?>
    <?php include 'template/sns.php'; ?>
    <?php include 'template/top-news.php'; ?>
    <?php // include 'template/faq.php'; ?>
    <?php include 'template/contact.php'; ?>
    <?php include 'template/footer.php'; ?>

    <?php include 'foot.php'; ?>
</body>

</html>