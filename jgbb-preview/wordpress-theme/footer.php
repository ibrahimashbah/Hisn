<?php if(!defined('ABSPATH')) exit; ?>
<footer class="jgbb-footer"><div class="jgbb-container">
 <div class="jgbb-footer__grid"><div>
  <div class="jgbb-footer__brand"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/identity-mark.svg'); ?>" alt=""><strong><?php echo esc_html(jgbb_t('الجالية اليمنية','Jemenitische Gemeinde')); ?></strong></div>
  <p><?php echo esc_html(jgbb_t('بيت يجمع أبناء اليمن، ويحفظ الهوية ويصنع مساحة للتواصل والمشاركة في برلين وبراندنبورغ.','Ein Zuhause für die jemenitische Gemeinschaft – für Begegnung, Kultur und Zusammenhalt in Berlin und Brandenburg.')); ?></p>
 </div><div><h3><?php echo esc_html(jgbb_t('روابط سريعة','Schnellzugriff')); ?></h3>
 <?php wp_nav_menu(['theme_location'=>'footer','container'=>false,'menu_class'=>'jgbb-footer-menu','fallback_cb'=>'jgbb_menu_fallback']); ?>
 </div><div><h3><?php echo esc_html(jgbb_t('تواصل معنا','Kontakt')); ?></h3><a href="mailto:info@jg-bb.de">info@jg-bb.de</a><p>Berlin · Brandenburg, Deutschland</p></div></div>
 <div class="jgbb-footer__bottom"><span>© <?php echo esc_html(date('Y')); ?> JGBB · <?php echo esc_html(jgbb_t('جميع الحقوق محفوظة','Alle Rechte vorbehalten')); ?></span><span>Jemenitische Gemeinde in Berlin und Brandenburg e.V.</span></div>
</div></footer>
<?php wp_footer(); ?>
</body></html>
