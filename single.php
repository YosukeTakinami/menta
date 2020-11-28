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
                <p><a href="/news"><span>NEWS</span>一覧に戻る</a></p>
                <div class="waku"></div>
            </div>
        </div>
        <h2><?php echo trim(wp_title('', false)); ?></h2>
        <figure><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></figure>
        <p><?php echo $cfs->get('mainTxt'); ?></p>
        <dl class="page-newsContents_table">
            <dt><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/table-icon.svg" alt=""></span>目次</dt>
            <?php
                $fields = $cfs->get('tableloop'); //親ループ
                foreach ((array)$fields as $field) :
                ?>
                <dd><?php echo $field['tabletxt']; ?></dd>
                <?php endforeach; ?>
        </dl>
        <?php
            $fields = $cfs->get('txtArea'); //親ループ
            foreach ((array)$fields as $field) :
            ?>        
            <h3><?php echo $field['txtTitle']; ?></h3>
            <p><?php echo $field['txt-txt']; ?></p>
            <h4><?php echo $field['txtTitle02']; ?></h4>
            <p><?php echo $field['txt-txt02']; ?></p>
            <?php endforeach; ?>
        <figure class="img02"><img src="<?php echo $cfs->get('newsimg'); ?>"></figure>
        <?php
            $fields = $cfs->get('news-list'); //親ループ
            foreach ((array)$fields as $field) :
        ?>
        <ul class="listArea">
        <?php
            $fields = $field['news-list-area']; //子ループ
            foreach ((array)$fields as $field):
        ?>
            <li><?php echo $field['news-list-area-txt']; ?></li>
            <?php endforeach; ?>
            <?php endforeach; ?>
        </ul>
        <div class="btnArea">
            <div class="waku"></div>
            <a class="btn btn02" href="#">テキスト</a>
        </div>
        <p class="txt-link"><a href="<?php echo $cfs->get('link-link'); ?>"target="_blank" rel="noopener noreferrer"><?php echo $cfs->get('link-txt'); ?></a></p>
    </section>
    <section class="page-newsContents_sns">
        <div class="wapper">
            <p class="tag">#TAG</p>
            <ul>
                <?php
                    $fields = $cfs->get('tagArea'); //親ループ
                    foreach ((array)$fields as $field) :
                ?> 
                    <li><?php echo $field['tagArea-txt']; ?></li>
                    <?php endforeach; ?>
            </ul>
            <div class="page-newsContents_sns_Area">
                <figure><img src="<?php echo get_the_post_thumbnail_url(); ?>"></figure>
                <div class="page-newsContents_sns_Area_link">
                    <a href="<?php echo $cfs->get('fb_link'); ?>" target="_blank" rel="noopener noreferrer"><dl>
                        <dt><i class="fab fa-facebook-f"></i>Facebook</dt>
                        <dd>この記事をシェアする</dd>
                    </dl></a>
                    <a href="<?php echo $cfs->get('tw_link'); ?>" target="_blank" rel="noopener noreferrer"><dl class="sns-border">
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
            <?php if (get_next_post()):?>
                <?php next_post_link('%link', 'PREV'); ?>
            <? else: ?>
            <a>記事がありません。</a>
            <?php endif; ?>
                <dl>
                <?php if( get_next_post()): ?>
                    <dt><time><?php echo get_the_time('Y/m/d',get_next_post()->ID) ?></time></dt>
                    <dd><?php echo get_the_title( get_next_post()->ID ); ?></dd>
                <?php endif; ?>
                </dl>
            </div>
            <div class="page-newsContents_link_nb_box">
            <?php if (get_previous_post()):?>
                <?php previous_post_link('%link', 'NEXT'); ?>
            <? else: ?>
            <a>記事がありません。</a>
            <?php endif; ?>
                <dl>
                <?php if( get_previous_post()): ?>
                    <dt><time><?php echo get_the_time('Y/m/d',get_previous_post()->ID) ?></time></dt>
                    <dd><?php echo get_the_title( get_previous_post()->ID ); ?></dd>
                <?php endif; ?>
                </dl>
            </div>
        </div>
        <p class="listBtn"><a href="/news">BACK TO LIST<span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/list.svg" alt=""></span></a></p>
    </section>
    <?php
    get_footer();
?>