<aside class="blog-sidebar">
  <!-- カテゴリー一覧 -->
  <div class="widget">
    <h3>カテゴリー</h3>
    <ul class="widget-category-archive">
      <?php
      wp_list_categories(array(
        'title_li' => '', // リストのタイトルを非表示
        'show_option_none' => '', // 空の場合の表示なし
        'use_desc_for_title' => 0, // デフォルトのタイトル属性を無効化
        'walker' => new Custom_Walker_Category() // カスタムウォーカーを使用
      ));
      ?>
    </ul>

  </div>

  <!-- アーカイブ一覧 -->
  <div class="widget">
    <h3>アーカイブ</h3>
    <ul class="widget-category-archive">
      <?php wp_get_archives(array(
        'type' => 'monthly', // 月別アーカイブ
        'limit' => 12 // 過去12ヶ月分を表示
      )); ?>
    </ul>
  </div>
</aside>