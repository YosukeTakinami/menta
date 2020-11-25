<?php
get_header();
?>
    <section class="main">
        <figure class="isPc"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/main.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/main.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/img/main@2x.jpg 2x" alt=""></figure>
        <figure class="isSp"><img/main-sp.jpg" srcset="img/main-sp.jpg 1x, img/main-sp@2x.jpg 2x" alt=""></figure>
        <h2 data-aos="fade-up">New <span>Technology</span><br>
            for H<span>uman</span></h2>
        <div class="main_scroll isPc">
            <p class="main_scroll_txt">SCROAL</p>
            <div class="main_scroll_bar"></div>
            <div class="main_scroll_bar02"></div>
        </div>
    </section>
    <section class="news">
        <h2 class="ttl wapper" data-aos="fade-up">NEWS</h2>
        <ul class="news-l wapper">
        <?php
                $blog_posts = get_posts(array(
                    'post_type' => 'post', // 投稿タイプ
                    'posts_per_page' => 3, // 表示件数
                    'orderby' => 'date', // 表示順の基準
                    'order' => 'DESC' // 昇順・降順
                ));
                global $post;
                if($blog_posts): foreach($blog_posts as $post): setup_postdata($post); ?>
            <li><a href="<?php the_permalink(); ?>">
                <p class="category"><?php $category = get_the_category(); $cat_name = $category[0]->cat_name; echo $cat_name; ?></p>
                <figure><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></figure>
                <div>
                    <p class="news-height"><?php the_content(); ?></p>
                    <p class="day"><?php the_time('Y/m/d') ?></p>
                </div></a>
            </li>
        <?php endforeach; endif; wp_reset_postdata(); ?>
        </ul>
        <div class="btnArea">
            <div class="waku"></div>
            <a class="btn" href="/news">NEWS LIST</a>
        </div>
    </section>
    <section class="about">
        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-img.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about-img.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/img/about-img@2x.jpg 2x" alt=""></figure>
        <div class="about_txt wapper">
            <h2 class="isPc">ABOUT US</h2>
            <dl>
                <dt data-aos="fade-up">人のためのデジタル技術を<br class="isPc">この先もずっと</dt>
                <dd>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</dd>
            </dl>
        </div>
        <ul class="wapper">
            <li>
                <dl>
                    <dt>MARKETING</dt>
                    <dd>デジタルマーケティング</dd>
                </dl>
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/marketing.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/marketing.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/img/marketing@2x.jpg 2x" alt=""></figure>
                <p class="isPc">ここにテキストが入ります、<br>
                    ここにテキスト。</p>
            </li>
            <li>
                <dl>
                    <dt>STRATEGY</dt>
                    <dd>ブランド戦略</dd>
                </dl>
                <figure><img src="<?php echo get_template_directory_uri(); ?><?php echo get_template_directory_uri(); ?>/assets//assets/img/strategy.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strategy.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/img/strategy@2x.jpg 2x" alt=""></figure>
                <p class="isPc">ここにテキストが入ります、<br>
                    ここにテキスト。</p>
            </li>
            <li>
                <dl>
                    <dt>PROMOTION</dt>
                    <dd>プロモーションの一貫性</dd>
                </dl>
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/promotion.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/promotion.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/img/promotion@2x.jpg 2x" alt=""></figure>
                <p class="isPc">ここにテキストが入ります、<br>
                    ここにテキスト。</p>
            </li> 
        </ul>
    </section>
    <section class="bussiness">
        <div class="bussiness_Area">
            <h2 class="isPc">BUSSINESS</h2>
            <div class="bussiness_Area_box">
                <div class="bussiness_Area_box_txt">
                    <dl>
                        <dt data-aos="fade-up">ひとりでも多くの人に</dt>
                        <dt data-aos="fade-up">笑顔になってもらうために。</dt>
                        <dd>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</dd>
                    </dl>
                    <figure class="isSp"></figure>
                    <div class="btnArea">
                        <div class="waku"></div>
                        <a class="btn btn02" href="#">NEWS LIST</a>
                    </div>
                </div>
            </div>
        </div>
        <figure class="isPc"></figure>
    </section>
    <section class="future">
        <div class="future_Area">
            <div class="future_Area_link">
                <h2><a href="">Company</a></h2>
                <h2><a href="">Recruit</a></h2>
            </div>
            <dl class="future_Area_txt">
                <dt data-aos="fade-up">Future is “WOW”</dt>
                <dd>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</dd>
            </dl>
        </div>
    </section>
    <?php
    get_footer();
?>