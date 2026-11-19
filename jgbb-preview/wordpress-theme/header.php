<?php if (!defined('ABSPATH')) exit; ?>
<!doctype html>
<html <?php language_attributes(); ?> dir="<?php echo is_rtl() ? 'rtl' : 'ltr'; ?>">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class('jgbb-body'); ?>>
<?php wp_body_open(); ?>
<a class="jgbb-skip-link" href="#main-content"><?php echo esc_html(jgbb_t('تخطي إلى المحتوى','Zum Inhalt springen')); ?></a>
<div class="jgbb-topline"><div class="jgbb-container jgbb-topline__inner">
 <span><?php echo esc_html(jgbb_t('الجالية اليمنية في برلين وبراندنبورغ · جمعية مسجلة e.V.','Jemenitische Gemeinde Berlin & Brandenburg · e.V.')); ?></span>
 <a href="mailto:info@jg-bb.de">info@jg-bb.de</a>
</div></div>
<header class="jgbb-header" id="site-header"><div class="jgbb-container jgbb-header__inner">
 <a class="jgbb-brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="JGBB Home">
  <?php if(has_custom_logo()) { $logo_id=get_theme_mod('custom_logo'); echo wp_get_attachment_image($logo_id,'medium',false,['class'=>'jgbb-brand__custom']); } else { ?><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/identity-mark.svg'); ?>" class="jgbb-brand__mark" alt=""/><?php } ?>
  <span class="jgbb-brand__label"><strong><?php echo esc_html(jgbb_t('الجالية اليمنية','Jemenitische Gemeinde')); ?></strong><small><?php echo esc_html(jgbb_t('برلين وبراندنبورغ','Berlin & Brandenburg')); ?></small></span>
 </a>
 <nav class="jgbb-nav" id="jgbb-navigation" aria-label="<?php echo esc_attr(jgbb_t('التنقل الرئيسي','Hauptnavigation')); ?>">
 <?php wp_nav_menu(['theme_location'=>'primary','container'=>false,'menu_class'=>'jgbb-menu','fallback_cb'=>'jgbb_menu_fallback','depth'=>2]); ?>
 </nav>
 <div class="jgbb-header__actions"><div class="jgbb-languages"><?php jgbb_language_selector(); ?></div><a class="jgbb-login" href="<?php echo esc_url(is_user_logged_in() ? (function_exists('um_user_profile_url') ? um_user_profile_url() : jgbb_find_page_url('account','/account/')) : jgbb_login_url()); ?>"><?php echo esc_html(is_user_logged_in() ? jgbb_t('حسابي','Mein Konto') : jgbb_t('دخول','Login')); ?></a><a class="jgbb-button jgbb-button--small jgbb-header__join" href="<?php echo esc_url(jgbb_register_url()); ?>"><?php echo esc_html(jgbb_t('انضم إلينا','Mitglied werden')); ?></a></div>
 <button class="jgbb-mobile-toggle" type="button" aria-expanded="false" aria-controls="jgbb-navigation" aria-label="<?php echo esc_attr(jgbb_t('فتح القائمة','Menü öffnen')); ?>"><span></span><span></span><span></span></button>
</div></header>
