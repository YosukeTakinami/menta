<?php
get_header();
?>
    <section class="pageTtl">
        <div class="pageTtl_Area">
            <h2>NEWS</h2>
            <p>ニュース</p>
        </div>    
    </section>
    <section class="newsCategory wapper">
        <div class="newsCategory_Area">
            <p><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cate-icon.svg" alt=""></span>CATEGORY</p>
            <ul>
            <li><a href="/news">ALL</a></li>
            <?php wp_list_categories('hide_empty=0&title_li='); ?>
            </ul>
        </div>
    </section>
    <section class="news pageNews">
        <ul class="news-l wapper">
        <?php
                $cat = get_the_category();
                $cat_name = $cat[0]->cat_name; // カテゴリー名
                $cat_slug  = $cat[0]->category_nicename; // カテゴリースラッグ
                $args = array(
                    'post_type' => 'post', //投稿を表示
                    'posts_per_page' => 12, //表示する件数
                    'category_name' => $cat_slug, 
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) :
                ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php
                    // 記事のカテゴリー情報を取得する
                    ?>
            <li><a href="<?php the_permalink(); ?>">
                <p class="category"><?php $category = get_the_category(); $cat_name = $category[0]->cat_name; echo $cat_name; ?></p>
                <figure><img src="<?php the_post_thumbnail(); ?>" alt=""></figure>
                <div>
                    <p class="news-height"><?php the_content(); ?></p>
                    <p class="day"><?php the_time('Y/m/d') ?></p>
                </div></a>
            </li>
            <?php endwhile; ?>
            <?php else: // no post ?>
                
            <?php endif; ?>
        </ul>
    </section>
<?php
    get_footer();
?>