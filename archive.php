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
            <p><span><img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/../img/cate-icon.svg" alt=""></span>CATEGORY</p>
            <ul>
            <li><a href="/news">ALL</a></li>
            <?php wp_list_categories('hide_empty=0&title_li='); ?>
            </ul>
        </div>
    </section>
    <section class="news pageNews">
        <ul class="news-l wapper">
        <?php
                $blog_posts = get_posts(array(
                    'post_type' => 'post', // 投稿タイプ
                    'posts_per_page' => 12, // 表示件数
                    'orderby' => 'date', // 表示順の基準
                    'order' => 'DESC' // 昇順・降順
                ));
                global $post;
                if($blog_posts): foreach($blog_posts as $post): setup_postdata($post); ?>
            <li><a href="<?php the_permalink(); ?>">
                <p class="category"><?php $category = get_the_category(); $cat_name = $category[0]->cat_name; echo $cat_name; ?></p>
                <figure><img src="<?php the_post_thumbnail(); ?>" alt=""></figure>
                <div>
                    <p class="news-height"><?php the_content(); ?></p>
                    <p class="day"><?php the_time('Y/m/d') ?></p>
                </div></a>
            </li>
            <?php endforeach; endif; wp_reset_postdata(); ?>
        </ul>
    </section>
    <?php
    get_footer();
?>