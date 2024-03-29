<?php

// Breadcrumbs
require_once(get_template_directory(). '/lib/breadcrumbs.php');

global $post;

if (is_single()) {
    $post_type = get_post_type();

    if ($post_type =='zee_team') {
        $title = "Team";
        $sub_title = '';
    } elseif ($post_type =='zee_portfolio') {
        $title = "Case Study";
        $sub_title = get_the_title() ;
    } elseif ($post_type =='equipment') {
        $title = get_the_title();
        $sub_title = "Equipment";
    } elseif (in_category(23)) {
        $title = get_cat_name(23);
        $sub_title = category_description(23);
    } else {
        $title = zee_option('zee_blog_title');

        $sub_title = zee_option('zee_blog_subtitle');
    }
} elseif (is_category()) {
    $title = __("Category", ZEETEXTDOMAIN) . " : " . single_cat_title("", false);

    $sub_title = zee_option('zee_blog_subtitle');
} elseif (is_archive()) {

  $sub_title = zee_option('zee_blog_subtitle');

  if ($post_type =='equipment') {
      $title = "Equipment";
      $sub_title = "IMaR's state of the art equipment is available to assist companies.";
  } elseif (is_day()) {
        $title = __("Daily Archives", ZEETEXTDOMAIN) . " : " . get_the_date();
    } elseif (is_month()) {
        $title = __("Monthly Archives", ZEETEXTDOMAIN) . " : " . get_the_date("F Y");
    } elseif (is_year()) {
        $title = __("Yearly Archives", ZEETEXTDOMAIN) . " : " . get_the_date("Y");
    } else {
        $title = __("Blog Archives", ZEETEXTDOMAIN);
    }

} elseif (is_tag()) {
    $title = $return .= __("Tag", ZEETEXTDOMAIN) . " : " . single_tag_title("", false);
} elseif (is_author()) {
    $title = __("Author: ", ZEETEXTDOMAIN);
} elseif (is_search()) {
    $title = __("Search results for", ZEETEXTDOMAIN) . " : " . get_search_query();
} elseif (is_tax('portfolios')) {
    $title = __("Portfolio", ZEETEXTDOMAIN);
} elseif (is_home() and !is_front_page()) {
    $page = get_queried_object();

    if (is_null($page)) {
        $title = zee_option('zee_blog_title');
        $sub_title = zee_option('zee_blog_subtitle');
    } else {
        $ID = $page->ID;
        $title = $page->post_title;
        $sub_title = get_post_meta($ID, 'page_subtitle', true);
    }
} elseif ((is_page()) && (!is_front_page())) {
    $page = get_queried_object();

    $ID = $page->ID;

    $title = $page->post_title;
    $sub_title = get_post_meta($ID, 'page_subtitle', true);
} elseif (is_front_page()) {
    unset($title);
}

echo(isset($title) ? '

    <section id="title" class="imar-blue">
    <div class="container">
    <div class="row">
    <div class="col-sm-6">
    <h1>'.$title.'</h1>
    <p>'.$sub_title.'</p>
    </div>
    <!--<div class="col-sm-6">'.zee_breadcrumb().'</div>-->
    </div>
    </div>
    </section>

    ' : '');
