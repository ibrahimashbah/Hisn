<?php get_header(); ?>
<main id="main-content" class="jgbb-page-main"><header class="jgbb-interior-hero"><div class="jgbb-container"><span class="jgbb-section-tag">JGBB · STORIES</span><h1><?php echo esc_html(is_home()?jgbb_t('أخبار وفعاليات الجالية','Aktuelles & Aktivitäten'):(is_archive()?get_the_archive_title():jgbb_t('منشورات الجالية','Beiträge'))); ?></h1><p><?php echo esc_html(jgbb_t('مجتمعنا، قصصنا، وذكرياتنا','Geschichten, die uns verbinden')); ?></p></div></header>
<div class="jgbb-container jgbb-section"><div class="jgbb-story-grid">
<?php if(have_posts()): while(have_posts()): the_post();jgbb_article_card();endwhile; else: ?><p><?php echo esc_html(jgbb_t('لا توجد منشورات بعد','Noch keine Beiträge')); ?></p><?php endif; ?>
</div><div class="jgbb-pagination"><?php the_posts_pagination(['mid_size'=>1,'prev_text'=>'‹','next_text'=>'›']); ?></div></div></main>
<?php get_footer(); ?>
