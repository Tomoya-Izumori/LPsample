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

    <div class="l-side-container -left"></div>

    <div class="l-main-container">

        <?php include 'template/header.php'; ?>

        <?php include 'template/mv01.php'; ?>

        <?php
        // intro01

        $intro_title = 'GITEC GLOBAL LABO<br>について';
        $intro_desc = '国内企業4社が提携し、ベトナムに開発拠点を構えたグローバル開発チームです。';
        $intro_bg = 'http://gitecs.xsrv.jp/niiyama-k/sample/wp/wp-content/uploads/2024/01/aig-ai230829B085-xl_TP_V4.jpg';

        include 'template/intro.php'; ?>

        <?php
        // intro02

        $intro_title = '品質について';
        $intro_desc = '日本人スタッフがヒアリングから品質管理までを国内で行います。<br class="pc-none">開発は、日本企業勤務経験者を中心に、<br class="sp-none">ホーチミン工科大学などの博士号を取得した優秀なエンジニアが集まっています。';
        $intro_bg = $dir_path . '/img/img-about.jpg';

        include 'template/intro.php'; ?>


        <?php
        // intro03

        $intro_title = 'コミュニケーション<br class="pc-none">について';
        $intro_desc = '日々の進捗情報を日本人国内スタッフが<br class="pc-none">お客様に共有、コミュニケーションは<br class="pc-none">全て日本語。<br>基本的にリモートでの打ち合わせですが、<br>必要な場面では直接お伺いさせて頂きます。';
        $intro_bg = 'http://gitecs.xsrv.jp/niiyama-k/sample/wp/wp-content/uploads/2024/01/aig-ai230829B085-xl_TP_V4.jpg';

        include 'template/intro.php'; ?>

        <?php
        // intro04

        $intro_title = 'メリットについて';
        $intro_desc = '豊富な人材が揃っておりスピーディーな開発が可能。<br>ベトナム在住エンジニアが開発するので大幅なコストダウンが見込めます。';
        $intro_bg = $dir_path . '/img/img-about.jpg';

        include 'template/intro.php'; ?>

        <?php // ↓ ロゴカラーチェンジ ポイント 
        ?>
        <span id="js-copy-change-point"></span>

        <?php include 'template/service.php'; ?>

        <?php

        $type_title = '受託開発';

        $cost_price = '1人月 60万円〜';
        $cost_desc = 'システム開発請負契約にてご依頼の場合は、1人月60万円';
        $cost_note = '*工数の金額となります。';
        $cost_case = '例）プロジェクト工数：5人月<br>　　→ 60万円 * 5人月 = 300万円';
        $cost_range = array('要件定義', '設計', '開発', 'テスト');

        $flows = array(
            // 掲載するフロー配列
            array(
                'img' => $dir_path . '/img/img-mv-1.jpg',
                'read' => 'システムに課題を感じたら',
                'title' => 'お問い合わせ・ヒヤリング',
                'disc' => '打ち合わせには何も準備する必要はありません。弊社のスタッフが0からヒアリングいたします。',
            ),
            array(
                'img' => $dir_path . '/img/img-about.jpg',
                'read' => '最適なソリューションを',
                'title' => '企画・提案',
                'disc' => 'ヒアリングの内容を基に、開発の全体像・イメージをご提案いたします。数回にわたる企画・提案の中で、スケジュールや金額感についてもご説明いたします。',
            ),
            array(
                'img' => 'http://gitecs.xsrv.jp/niiyama-k/sample/wp/wp-content/uploads/2024/01/aig-ai230829B085-xl_TP_V4.jpg',
                'read' => 'リード文：ダミーテキスト',
                'title' => 'ご契約',
                'disc' => '企画内容承認後、まずは設計段階で契約締結。設計終了後に開発段階の契約を行います。',
            ),
            array(
                'img' => $dir_path . '/img/img-mv-1.jpg',
                'read' => 'リード文：ダミーテキスト',
                'title' => '開発開始',
                'disc' => '開発開始です。定例会の設置により、進捗を確認することも可能です。納品に向け、責任を持って進めていきます。',
            ),
        );

        include 'template/flow.php'; ?>

        <?php

        $type_title = 'ラボ型開発';

        $cost_price = 'PM 50万円<br>SENIOR 50万円<br>MIDDLE 40万円<br>JUNIOR 30万円';
        $cost_desc = 'ご希望のスキルセットを持っているPM・エンジニアでチームを組み開発を進めることができます。';
        $cost_note = '';
        $cost_case = '例）PM1名 SENIOR1名 MIDDLE1名<br>　　→ 140万円(月)';
        $cost_range = array('開発', 'テスト');

        $flows = array(
            // 掲載するフロー配列
            array(
                'img' => $dir_path . '/img/img-mv-1.jpg',
                'read' => 'システムに課題を感じたら',
                'title' => 'お問い合わせ・ヒヤリング',
                'disc' => '打ち合わせには何も準備する必要はありません。弊社のスタッフが0からヒアリングいたします。',
            ),
            array(
                'img' => $dir_path . '/img/img-about.jpg',
                'read' => '最適なソリューションを',
                'title' => '企画・提案',
                'disc' => 'ヒアリングの内容を基に、開発の全体像・イメージをご提案いたします。数回にわたる企画・提案の中で、スケジュールや金額感についてもご説明いたします。',
            ),
            array(
                'img' => 'http://gitecs.xsrv.jp/niiyama-k/sample/wp/wp-content/uploads/2024/01/aig-ai230829B085-xl_TP_V4.jpg',
                'read' => 'リード文：ダミーテキスト',
                'title' => 'ご契約',
                'disc' => '企画内容承認後、まずは設計段階で契約締結。設計終了後に開発段階の契約を行います。',
            ),
            array(
                'img' => $dir_path . '/img/img-mv-1.jpg',
                'read' => 'リード文：ダミーテキスト',
                'title' => '開発開始',
                'disc' => '開発開始です。定例会の設置により、進捗を確認することも可能です。納品に向け、責任を持って進めていきます。',
            ),
        );

        include 'template/flow.php'; ?>

        <?php

        $results = array(
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
                'skill' => array('PHP', 'React', 'Laravel', 'PostgreSQL', 'SakuraVPS', 'Yamato Developers', 'Stripe（決済）'),
                // 'info' => '9人月 - 3ヶ月',
            ),
            array(
                'img' => 'http://gitecs.xsrv.jp/niiyama-k/sample/wp/wp-content/uploads/2024/01/aig-ai230829B085-xl_TP_V4.jpg',
                'title' => '施設予約システム',
                'disc' => '娯楽施設開業に伴い、施設専用予約システムを開発。スマホユーザーに最適化されたUI設計と、マーケティング分析のための管理画面を実装した。',
                'skill' => array('TypeScript', 'React', 'Nuxt', 'nest', 'MySQL', 'AWS'),
                // 'info' => '9人月 - 3ヶ月',
            ),
            array(
                'img' => 'http://gitecs.xsrv.jp/niiyama-k/sample/wp/wp-content/uploads/2024/01/aig-ai230829B085-xl_TP_V4.jpg',
                'title' => '予約LINEミニアプリ開発',
                'disc' => 'LINE公式アカウントと組み合わせて利用可能なLINEミニアプリの開発。ユーザーの属性によってメッセージの配信先がコントロール可能なセグメント機能により、LINE公式アカウント運用のサポートが可能。',
                'skill' => array('LIFF', 'LINE Messaging API', 'Next', 'AWS'),
                // 'info' => '9人月 - 3ヶ月',
            )
        );

        include 'template/result.php';

        ?>

        <?php

        $sectionId = 'japan-team';
        $sectionTitle = 'PROJECT LEADER';
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
        $sectionTitle = 'ENGINEER';
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

        <?php include 'template/top-news.php'; ?>

        <?php include 'template/contact.php'; ?>

        <?php include 'template/footer.php'; ?>

    </div>

    <div class="l-side-container -right"></div>

    <?php include 'foot.php'; ?>


    <?php // include 'template/menu.php'; 
    ?>
    <?php // include 'template/recruit.php'; 
    ?>
    <?php // include 'template/sns.php'; 
    ?>
    <?php // include 'template/faq.php'; 
    ?>
</body>

</html>