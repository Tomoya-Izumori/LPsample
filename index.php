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

    <?php
    // about01
    $about_title = 'スピーディーに開発';
    $about_img = $dir_path . '/img/img-about.jpg';
    $about_lead = '私たちは、国内パートナー企業と連携し、ベトナム・ネパールに開発拠点を構え、スピーディーかつコストダウンが可能なグローバル開発チームを構築しています。';
    include 'template/about.php';
    ?>


    <?php
    // about02
    $about_title = 'PMは日本スタッフが対応';
    $about_img = $dir_path . '/img/img-about.jpg';
    $about_lead = '日本語でのコミュニケーションとジャパンクオリティーを担保。プロジェクトは全て日本国内スタッフが担当。エンジニアも日本企業勤務経験が豊富な人材が揃っています。';
    include 'template/about.php';
    ?>

    <?php include 'template/menu.php'; ?>


    <?php // ↓ ロゴカラーチェンジ ポイント 
    ?>
    <span id="js-copy-change-point"></span>

    <?php include 'template/flow.php'; ?>

    <?php include 'template/cost.php'; ?>

    <?php

    $services = array(
        // 掲載するサービス配列
        array(
            'img' => 'http://gitecs.xsrv.jp/niiyama-k/sample/wp/wp-content/uploads/2024/01/aig-ai230829B085-xl_TP_V4.jpg',
            'title' => '実績管理システム',
            'disc' => '従来のシステムの課題であったセキュリティ・管理性・操作性を向上させるため、新規の実績管理システム開発を提案・開発。',
            'skill' => array('VB.NET', 'C#', 'H', 'php', 'Java', 'JavaScript', 'Python', 'Kotlin'),
            'info' => '9人月 - 3ヶ月',
        ),
        array(
            'img' => 'http://gitecs.xsrv.jp/niiyama-k/sample/wp/wp-content/uploads/2024/01/aig-ai230829B085-xl_TP_V4.jpg',
            'title' => '実績管理システム',
            'disc' => '従来のシステムの課題であったセキュリティ・管理性・操作性を向上させるため、新規の実績管理システム開発を提案・開発。',
            'skill' => array('VB.NET', 'C#', 'H', 'php', 'Java', 'JavaScript', 'Python', 'Kotlin'),
            'info' => '9人月 - 3ヶ月',
        ),
        array(
            'img' => 'http://gitecs.xsrv.jp/niiyama-k/sample/wp/wp-content/uploads/2024/01/aig-ai230829B085-xl_TP_V4.jpg',
            'title' => '実績管理システム',
            'disc' => '従来のシステムの課題であったセキュリティ・管理性・操作性を向上させるため、新規の実績管理システム開発を提案・開発。',
            'skill' => array('VB.NET', 'C#', 'H', 'php', 'Java', 'JavaScript', 'Python', 'Kotlin'),
            'info' => '9人月 - 3ヶ月',
        )
    );

    include 'template/service.php';

    ?>

    <?php

    $sectionTitle = 'JAPAN TEAM';
    $members = array(
        // 掲載するメンバー配列
        array(
            'img' => $about_img = $dir_path . '/img/img-about.jpg',
            'name' => 'Iwasawa Kennosuke',
            'position' => 'Engineer',
            'skill' => array('VB.NET', 'C#', 'H', 'php', 'Java', 'JavaScript', 'Python', 'Kotlin')
        ),
        array(
            'img' => $about_img = $dir_path . '/img/img-about.jpg',
            'name' => 'Iwasawa Kennosuke',
            'position' => 'Engineer',
            'skill' => array('VB.NET', 'C#', 'H', 'php', 'Java', 'JavaScript', 'Python', 'Kotlin')
        ),
        array(
            'img' => $about_img = $dir_path . '/img/img-about.jpg',
            'name' => 'Iwasawa Kennosuke',
            'position' => 'Engineer',
            'skill' => array('VB.NET', 'C#', 'H', 'php', 'Java', 'JavaScript', 'Python', 'Kotlin')
        )
    );

    include 'template/member.php';

    ?>

    <?php

    $sectionTitle = 'GLOBAL TEAM';
    $members = array(
        // 掲載するメンバー配列
        array(
            'img' => $about_img = $dir_path . '/img/img-about.jpg',
            'name' => 'Iwasawa Kennosuke',
            'position' => 'Engineer',
            'skill' => array('VB.NET', 'C#', 'H', 'php', 'Java', 'JavaScript', 'Python', 'Kotlin')
        ),
        array(
            'img' => $about_img = $dir_path . '/img/img-about.jpg',
            'name' => 'Iwasawa Kennosuke',
            'position' => 'Engineer',
            'skill' => array('VB.NET', 'C#', 'H', 'php', 'Java', 'JavaScript', 'Python', 'Kotlin')
        ),
        array(
            'img' => $about_img = $dir_path . '/img/img-about.jpg',
            'name' => 'Iwasawa Kennosuke',
            'position' => 'Engineer',
            'skill' => array('VB.NET', 'C#', 'H', 'php', 'Java', 'JavaScript', 'Python', 'Kotlin')
        )
    );

    include 'template/member.php';

    ?>

    <?php // include 'template/recruit.php'; 
    ?>
    <?php // include 'template/sns.php'; 
    ?>

    <?php include 'template/top-news.php'; ?>

    <?php // include 'template/faq.php'; 
    ?>

    <?php include 'template/contact.php'; ?>
    <?php include 'template/footer.php'; ?>

    <?php include 'foot.php'; ?>
</body>

</html>