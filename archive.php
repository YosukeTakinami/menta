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
            <li class="on"><a href="/news">ALL</a></li>
            <?php wp_list_categories('hide_empty=0&title_li='); ?>
            </ul>
        </div>
    </section>
    <section class="news pageNews">
        <ul class="news-l wapper">
        <?php
            $args = array(
                'paged' => $paged,
                'post_type' => 'post',
                'posts_per_page' => 12,
            ); 
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) :
            while ($my_query->have_posts()) : $my_query->the_post();?>
            <li><a href="<?php the_permalink(); ?>">
                <p class="category"><?php $category = get_the_category(); $cat_name = $category[0]->cat_name; echo $cat_name; ?></p>
                <figure><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></figure>
                <div>
                    <p class="news-height"><?php the_content(); ?></p>
                    <p class="day"><?php the_time('Y/m/d') ?></p>
                </div></a>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php wp_reset_query();endif; ?>
        <?php
            if( function_exists('pagenation') ){ // 関数が定義されていたらtrueになる
                pagenation();
        }?>
    </section>
    <?php
    get_footer();
?>