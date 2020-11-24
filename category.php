get_header();
    <?php
    $tax_slug = 'category';
    $id = get_query_var('cat');
    $term = get_term($id,$tax_slug);
    ?>
    <ul class="breadcrumb">
    <li><a href="<?php echo home_url('/') ?>">ホーム</a></li>
    <?php
    $parent_term_id = $term->parent;
    $parent_term = get_category($parent_term_id);
    if($parent_term_id):
    ?>
    <li>&nbsp;&gt;&nbsp;<a href="/category<?php echo '/'.$parent_term->slug ?>"><?php echo $parent_term->name ?></a></li>
    <?php endif; ?>
    <li>&nbsp;&gt;&nbsp;<a href="/category<?php echo '/'.$term->slug; ?>"><?php echo $term->name; ?></a></li>
    </ul>
get_footer();

