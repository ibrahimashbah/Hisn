<?php
/**
 * Template Name: JGBB Community Calendar
 * Description: A styled archive of real WordPress content, using existing WP posts.
 */
if (!defined('ABSPATH')) exit;
get_header();
?>
<main id="main" class="jgbb-content-main">
<section class="jgbb-interior-hero"><div class="jgbb-container"><span class="jgbb-section-tag">JGBB · COMMUNITY</span><h1><?php echo esc_html(jgbb_t('تقويم الجالية','Veranstaltungskalender')); ?></h1><p><?php echo esc_html(jgbb_t('فعالياتنا وأخبارنا من ووردبريس','Aktivitäten und Neuigkeiten aus WordPress')); ?></p></div></section>
<section class="jgbb-section"><div class="jgbb-container">
<?php while(have_posts()):the_post();?><div class="jgbb-page-content"><?php the_content();?></div><?php endwhile;?>
<div class="jgbb-section-heading"><div><span class="jgbb-section-tag">JGBB · POSTS</span><h2><?php echo esc_html(jgbb_t('من أخبار وفعاليات الجالية','Neuigkeiten & Rückblicke')); ?></h2></div></div>
<div class="jgbb-story-grid">
<?php $query=new WP_Query(['post_type'=>'post','post_status'=>'publish','posts_per_page'=>12,'ignore_sticky_posts'=>true]);while($query->have_posts()):$query->the_post();jgbb_article_card();endwhile;wp_reset_postdata();?>
</div></div></section></main>
<?php get_footer();
