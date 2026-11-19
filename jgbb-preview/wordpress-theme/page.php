<?php get_header(); ?>
<main id="main-content" class="jgbb-page-main">
<?php while(have_posts()): the_post(); ?>
 <header class="jgbb-interior-hero"><div class="jgbb-container"><span class="jgbb-section-tag">JGBB · BERLIN & BRANDENBURG</span><h1><?php the_title(); ?></h1><p><?php echo esc_html(jgbb_t('الجالية اليمنية في برلين وبراندنبورغ','Jemenitische Gemeinde in Berlin und Brandenburg')); ?></p></div></header>
 <div class="jgbb-container jgbb-page-layout"><article id="post-<?php the_ID(); ?>" <?php post_class('jgbb-content jgbb-page-content'); ?>><?php the_content(); wp_link_pages(); ?></article></div>
<?php endwhile; ?>
</main>
<?php get_footer(); ?>
