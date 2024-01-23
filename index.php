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
    // intro

    $intro_title = 'GITEC GLOBAL LABO<br>について';
    $intro_desc = '国内企業4社が提携し、ベトナムに開発拠点を構えたグローバル開発チームです。';
    $intro_bg = 'http://gitecs.xsrv.jp/niiyama-k/sample/wp/wp-content/uploads/2024/01/aig-ai230829B085-xl_TP_V4.jpg';

    include 'template/intro.php'; ?>

    <?php
    // about01
    $about_title = 'スピーディーに開発';
    $about_img = $dir_path . '/img/img-about.jpg';
    $about_lead = '世界中のエンジニア / 日本中のパートナーと共にグローバルチームを構成。スピーディーかつ低コストでweb開発が可能。';
    include 'template/about.php'; ?>


    <?php
    // about02
    $about_title = 'PMは日本スタッフが対応';
    $about_img = $dir_path . '/img/img-about.jpg';
    $about_lead = '日本人または日本語が堪能なPMがプロジェクトをリードするため、オフショア開発特有のコミュニケーションの問題は一切なし。';
    include 'template/about.php'; ?>

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
            'disc' => '操作性・管理性に課題のあった従来のシステムを最新の技術を用いたシステムへリプレース。従来の操作感を残しつつ開発することで、導入ハードルも抑えながら運用可能となった。',
            'skill' => array('PHP', 'Laravel', 'Vue.js', 'MySQL', 'AWS'),
            // 'info' => '9人月 - 3ヶ月',
        ),
        array(
            'img' => 'http://gitecs.xsrv.jp/niiyama-k/sample/wp/wp-content/uploads/2024/01/aig-ai230829B085-xl_TP_V4.jpg',
            'title' => 'EC構築 / 注文・配送管理システム',
            'disc' => '集荷・配送どちらも必要な EC事業の展開に際し、ヤマト運輸と連携したシステムを開発。UI / UX に着目し、最低限の操作で注文が完了するよう開発。',
            'skill' => array('PHP','React','Laravel','PostgreSQL','SakuraVPS','Yamato Developers','Stripe（決済）'),
            // 'info' => '9人月 - 3ヶ月',
        ),
        array(
            'img' => 'http://gitecs.xsrv.jp/niiyama-k/sample/wp/wp-content/uploads/2024/01/aig-ai230829B085-xl_TP_V4.jpg',
            'title' => '施設予約システム',
            'disc' => '娯楽施設開業に伴い、施設専用予約システムを開発。スマホユーザーに最適化されたUI設計と、マーケティング分析のための管理画面を実装した。',
            'skill' => array('TypeScript','React','Nuxt','nest','MySQL','AWS'),
            // 'info' => '9人月 - 3ヶ月',
        ),
        array(
            'img' => 'http://gitecs.xsrv.jp/niiyama-k/sample/wp/wp-content/uploads/2024/01/aig-ai230829B085-xl_TP_V4.jpg',
            'title' => '予約LINEミニアプリ開発',
            'disc' => 'LINE公式アカウントと組み合わせて利用可能なLINEミニアプリの開発。ユーザーの属性によってメッセージの配信先がコントロール可能なセグメント機能により、LINE公式アカウント運用のサポートが可能。',
            'skill' => array('LIFF','LINE Messaging API','Next','AWS'),
            // 'info' => '9人月 - 3ヶ月',
        )
    );

    include 'template/service.php';

    ?>

    <?php

    $sectionId = 'japan-team';
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

    $sectionId = 'global-team';
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