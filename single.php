<?php
get_header();
?>
    <section class="pageTtl">
        <div class="pageTtl_Area">
            <h2>NEWS/PRESS</h2>
            <p>ニュース</p>
        </div>    
    </section>
    <section class="page-newsContents">
        <div class="page-newsContents_category">
            <div class="page-newsContents_category_day">
                <p class="day"><?php $category = get_the_category(); $cat_name = $category[0]->cat_name; echo $cat_name; ?></p>
                <p><time><?php the_time('Y/m/d') ?></time></p>
            </div>
            <div class="page-newsContents_category_archive">
                <p><a href="#"><span>NEWS</span>一覧に戻る</a></p>
                <div class="waku"></div>
            </div>
        </div>
        <h2><?php echo trim(wp_title('', false)); ?></h2>
        <figure><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></figure>
        <p><?php echo $cfs->get('mainTxt'); ?></p>
        <dl class="page-newsContents_table">
            <dt><span><img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/../../img/table-icon.svg" alt=""></span>目次</dt>
            <?php
                $fields = $cfs->get('tableloop'); //親ループ
                foreach ($fields as $field) :
                ?>
                <dd><?php echo $field['tabletxt']; ?></dd>
                <?php endforeach; ?>
        </dl>
        <?php
            $fields = $cfs->get('txtArea'); //親ループ
            foreach ($fields as $field) :
            ?>        
            <h3><?php echo $field['txtTitle']; ?></h3>
            <p><?php echo $field['txt-txt']; ?></p>
            <h4><?php echo $field['txtTitle02']; ?></h4>
            <p><?php echo $field['txt-txt02']; ?></p>
            <?php endforeach; ?>
        <figure class="img02"><img src="<?php echo $field['news-img']; ?>"></figure>
        <ul class="listArea">
            <li>ああああああああああああああああああああああああああああああああああああ</li>
            <li>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</li>
            <li>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</li>
        </ul>
        <ul class="listArea">
            <li>ああああああああああああああああああああああああああああああああああああ</li>
            <li>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</li>
            <li>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</li>
        </ul>
        <div class="btnArea">
            <div class="waku"></div>
            <a class="btn btn02" href="#">テキスト</a>
        </div>
        <p class="txt-link"><a href="">テキストリンクテキストリンクテキストリンクテキストリンクテキストリンクテキストリンクテキストリンクテキストリンクテキストリンクテキストリンクテキストリンクテキストリンクテキストリンクテキストリンクテキストリンクテキストリンク</a></p>
    </section>
    <section class="page-newsContents_sns">
        <div class="wapper">
            <p class="tag">#TAG</p>
            <ul>
                <li>♯AAA</li><li>♯BBBB</li><li>♯CCCC</li>
            </ul>
            <div class="page-newsContents_sns_Area">
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/../../img/news-sns.jpg" alt=""></figure>
                <div class="page-newsContents_sns_Area_link">
                    <a href=""><dl>
                        <dt><i class="fab fa-facebook-f"></i>Facebook</dt>
                        <dd>この記事をシェアする</dd>
                    </dl></a>
                    <a href=""><dl class="sns-border">
                        <dt><i class="fab fa-twitter"></i>Twitter</dt>
                        <dd>この記事をつぶやく</dd>
                    </dl></a>
                </div>
            </div>
        </div>
    </section>
    <section class="page-newsContents_link">
        <div class="page-newsContents_link_nb">
            <div class="page-newsContents_link_nb_box">
                <a href=""><p>PREV</p>
                <dl>
                    <dt><time>2019/01/01</time></dt>
                    <dd>次の記事次の記事次の記事次の記事次の記事次の記事次の記事次の記事次の記事</dd>
                </dl></a>
            </div>
            <div class="page-newsContents_link_nb_box">
                <a href=""><p>NEXT</p>
                <dl>
                    <dt><time>2019/01/01</time></dt>
                    <dd>次の記事次の記事次の記事次の記事次の記事次の記事次の記事次の記事次の記事</dd>
                </dl></a>
            </div>
        </div>
        <p class="listBtn"><a href="#">BACK TO LIST<span><img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/../../img/list.svg" alt=""></span></a></p>
    </section>
    <?php
    get_footer();
?>