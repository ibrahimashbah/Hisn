<?php
/**
 * Template Name: JGBB Design Showcase (Demonstration Only)
 * Description: Display the exact local preview in a standalone sandbox page.
 */
if (!defined('ABSPATH')) exit;
get_header();
$showcase= get_template_directory_uri().'/assets/showcase/index.html';
?>
<main id="main"><div class="jgbb-container" style="padding:35px 0"><h1><?php echo esc_html(jgbb_t('معاينة التصميم التجريبية','Designvorschau')); ?></h1><p><?php echo esc_html(jgbb_t('معاينة فقط: النماذج لا تسجل أعضاء حقيقيين ولا ترسل أية مدفوعات أو إيميلات.','Nur Vorschau: Formulare senden keine echten Anmeldungen oder E-Mails.')); ?></p></div><iframe loading="lazy" title="JGBB Design Showcase" src="<?php echo esc_url($showcase); ?>" style="display:block;width:100%;height:960px;border:0"></iframe></main>
<?php get_footer();
