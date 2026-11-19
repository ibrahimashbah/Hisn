<?php get_header(); ?>
<main id="main-content" class="jgbb-page-main">
<?php while(have_posts()): the_post(); ?>
<header class="jgbb-interior-hero"><div class="jgbb-container"><span class="jgbb-section-tag"><?php echo esc_html(get_the_date()); ?> · JGBB</span><h1><?php the_title(); ?></h1><a class="jgbb-return-link" href="<?php echo esc_url(jgbb_events_url()); ?>">↗ <?php echo esc_html(jgbb_t('كل الفعاليات','Alle Beiträge')); ?></a></div></header>
<div class="jgbb-container jgbb-single-layout"><article id="post-<?php the_ID(); ?>" <?php post_class('jgbb-content jgbb-article'); ?>>
<?php if(has_post_thumbnail()) { echo '<div class="jgbb-single-hero-image">';the_post_thumbnail('large');echo '</div>'; } ?>
<?php the_content();wp_link_pages(); ?>
</article></div>
<?php endwhile; ?></main>
<?php get_footer(); ?>
