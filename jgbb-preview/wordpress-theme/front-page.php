<?php get_header(); ?>
<main id="main-content">
<section class="jgbb-hero"><div class="jgbb-container jgbb-hero__layout">
 <div class="jgbb-hero__copy"><span class="jgbb-kicker"><span class="jgbb-kicker__dot"></span><?php echo esc_html(jgbb_t('منذ عام 2016 · معاً أينما كنا','Seit 2016 · Gemeinsam verbunden')); ?></span>
 <h1><?php echo jgbb_is_german() ? 'Gemeinschaft, die <em>verbindet.</em><br>Kultur, die bleibt.' : 'جذورٌ تجمعنا.<br><em>ومستقبل نصنعه معاً.</em>'; ?></h1>
 <p><?php echo esc_html(jgbb_t('مساحة تجمع أبناء اليمن في برلين وبراندنبورغ، نحتفي فيها بثقافتنا، نتشارك قصصنا، ونبني معاً مجتمعاً أقوى للأجيال القادمة.','Die jemenitische Gemeinschaft in Berlin und Brandenburg verbindet Menschen, bewahrt Kultur und schafft Raum für eine gemeinsame Zukunft.')); ?></p>
 <div class="jgbb-hero__buttons"><a class="jgbb-button jgbb-button--light" href="<?php echo esc_url(jgbb_register_url()); ?>"><?php echo esc_html(jgbb_t('كن جزءاً من الجالية','Teil der Gemeinschaft werden')); ?> <span aria-hidden="true">↗</span></a><a class="jgbb-button jgbb-button--ghost" href="<?php echo esc_url(jgbb_events_url()); ?>"><?php echo esc_html(jgbb_t('اكتشف فعالياتنا','Aktivitäten entdecken')); ?></a></div>
 <div class="jgbb-hero__footnote"><span class="jgbb-hero__line"></span><span><?php echo esc_html(jgbb_t('من اليمن إلى قلب برلين','Von Jemen bis ins Herz Berlins')); ?></span></div>
 </div>
 <div class="jgbb-hero__art" aria-hidden="true"><div class="jgbb-hero__art-frame">
 <?php $photo=get_theme_mod('jgbb_hero_photo'); if($photo): ?><img class="jgbb-hero__photo" src="<?php echo esc_url($photo); ?>" alt="" loading="eager" /><?php else: ?><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/heritage-hero.svg'); ?>" alt="" /><?php endif; ?>
 </div><div class="jgbb-hero__art-label"><strong>JGBB</strong><span>BERLIN / BRANDENBURG</span></div></div>
</div><span class="jgbb-hero__watermark" aria-hidden="true">JGBB</span></section>

<section class="jgbb-values"><div class="jgbb-container jgbb-values__grid">
 <div class="jgbb-value"><span class="jgbb-value__icon">✦</span><div><strong><?php echo esc_html(jgbb_t('هوية وثقافة','Identität & Kultur')); ?></strong><p><?php echo esc_html(jgbb_t('نعتز بجذورنا وننقل تراثنا','Wurzeln bewahren, Kultur leben')); ?></p></div></div>
 <div class="jgbb-value"><span class="jgbb-value__icon">◎</span><div><strong><?php echo esc_html(jgbb_t('ترابط ومشاركة','Zusammenhalt')); ?></strong><p><?php echo esc_html(jgbb_t('مساحة مفتوحة لكل أبناء الجالية','Ein Ort für die Gemeinschaft')); ?></p></div></div>
 <div class="jgbb-value"><span class="jgbb-value__icon">↗</span><div><strong><?php echo esc_html(jgbb_t('أجيال ومستقبل','Zukunft gestalten')); ?></strong><p><?php echo esc_html(jgbb_t('نصنع الفرص للأجيال القادمة','Neue Perspektiven für Generationen')); ?></p></div></div>
</div></section>

<section class="jgbb-section jgbb-section--stories"><div class="jgbb-container"><div class="jgbb-section-heading"><div><span class="jgbb-section-tag"><?php echo esc_html(jgbb_t('من قلب الجالية','UNSER VEREINSLEBEN')); ?></span><h2><?php echo esc_html(jgbb_t('حكاياتنا وفعالياتنا','Aktuelles & Begegnungen')); ?></h2><p><?php echo esc_html(jgbb_t('لحظات تجمعنا وذكريات تبقى. تابع أحدث أخبار وأنشطة الجالية.','Geschichten und Aktivitäten, die uns verbinden.')); ?></p></div><a href="<?php echo esc_url(jgbb_events_url()); ?>" class="jgbb-outline-link"><?php echo esc_html(jgbb_t('جميع الفعاليات','Alle Beiträge')); ?> ↗</a></div>
 <div class="jgbb-story-grid">
 <?php $jgbb_posts = new WP_Query(['post_type'=>'post','post_status'=>'publish','posts_per_page'=>3,'ignore_sticky_posts'=>true]); if($jgbb_posts->have_posts()): while($jgbb_posts->have_posts()):$jgbb_posts->the_post(); jgbb_article_card(); endwhile; wp_reset_postdata(); else: ?><p><?php echo esc_html(jgbb_t('ستظهر أخبار الجالية هنا عند إضافتها.','Hier erscheinen die neuesten Beiträge.')); ?></p><?php endif; ?>
 </div></div></section>

<section class="jgbb-section jgbb-about-band"><div class="jgbb-container jgbb-about-band__layout"><div class="jgbb-about-band__art" aria-hidden="true"><span>2016</span><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/identity-mark.svg'); ?>" alt=""></div><div><span class="jgbb-section-tag"><?php echo esc_html(jgbb_t('عن الجالية','ÜBER UNS')); ?></span><h2><?php echo esc_html(jgbb_t('نحمل اليمن معنا، ونبني جسوراً هنا.','Jemen im Herzen. Gemeinsam in Berlin.')); ?></h2><p><?php echo esc_html(jgbb_t('الجالية اليمنية في برلين وبراندنبورغ جمعية مسجلة، تعمل على رعاية مصالح أبناء الجالية وتنظيم أنشطة اجتماعية وثقافية تعزّز التواصل والاندماج وتحافظ على الهوية اليمنية.','Als eingetragener Verein stärken wir seit 2016 den Austausch, das kulturelle Leben und die Teilhabe der jemenitischen Gemeinschaft in Berlin und Brandenburg.')); ?></p><a class="jgbb-text-link" href="<?php echo esc_url(jgbb_find_page_url('about-us','/about-us/')); ?>"><?php echo esc_html(jgbb_t('تعرّف علينا أكثر','Mehr über uns')); ?> ↗</a></div></div></section>

<section class="jgbb-join-band"><div class="jgbb-container jgbb-join-band__inner"><div><span class="jgbb-section-tag"><?php echo esc_html(jgbb_t('معاً أقوى','GEMEINSAM STARK')); ?></span><h2><?php echo esc_html(jgbb_t('للجالية مكان في قلبك، ولك مكان بيننا.','Dein Platz in unserer Gemeinschaft.')); ?></h2><p><?php echo esc_html(jgbb_t('ساهم في استمرار أنشطتنا، وتعرّف على تفاصيل العضوية والاشتراكات عبر نموذج التسجيل الحالي.','Unterstütze unsere Gemeinschaft und erfahre mehr über Mitgliedschaft und Beiträge.')); ?></p></div><a class="jgbb-button jgbb-button--dark" href="<?php echo esc_url(jgbb_register_url()); ?>"><?php echo esc_html(jgbb_t('التسجيل في الجالية','Jetzt Mitglied werden')); ?> ↗</a></div></section>
</main>
<?php get_footer(); ?>
