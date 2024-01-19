<?php

add_action('after_setup_theme', function () {
    // 投稿サムネイルサポート
    add_theme_support('post-thumbnails');

    // 画像サイズ設定
    update_option('thumbnail_size_w', 520);
    update_option('thumbnail_size_h', 520);

    update_option('medium_size_w', 820);
    update_option('medium_size_h', 820);

    update_option('large_size_w', 1640);
    update_option('large_size_h', 1640);
});


add_action('rest_api_init', 'customize_api_response');
function customize_api_response() {
  // アイキャッチ画像のレスポンスを追加する投稿タイプ
  $post_types = ['post'];

  foreach ($post_types as $post_type) {
    register_rest_field(
      $post_type,
      'thumbnail',
      array(
        'get_callback'  => function ($post) {
          $thumbnail_id = get_post_thumbnail_id($post['id']);

          if ($thumbnail_id) {
            // アイキャッチが設定されていたらurl・width・heightを配列で返す
            $img = wp_get_attachment_image_src($thumbnail_id, 'large');

            return [
              'url' => $img[0],
              'width' => $img[1],
              'height' => $img[2]
            ];
          } else {
            // アイキャッチが設定されていなかったら空の配列を返す
            return [];
          }
        },
        'update_callback' => null,
        'schema'          => null,
      )
    );
  }
}


function wpdocs_custom_excerpt_length( $length ) {
	return 999;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );