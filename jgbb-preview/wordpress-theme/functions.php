<?php
/** JGBB Community Modern theme bootstrap. No membership records are modified by this theme. */
if (!defined('ABSPATH')) { exit; }

function jgbb_theme_setup() {
    load_theme_textdomain('jgbb-community', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-logo', ['height'=>100, 'width'=>320, 'flex-height'=>true, 'flex-width'=>true]);
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    register_nav_menus(['primary'=>__('Primary navigation','jgbb-community'), 'footer'=>__('Footer navigation','jgbb-community')]);
    add_image_size('jgbb-card', 750, 530, true);
}
add_action('after_setup_theme','jgbb_theme_setup');

function jgbb_enqueue_assets() {
    wp_enqueue_style('jgbb-fonts','https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Tajawal:wght@400;500;600;700;800&display=swap',[],null);
    wp_enqueue_style('jgbb-style',get_stylesheet_uri(),[],wp_get_theme()->get('Version'));
    wp_enqueue_style('jgbb-theme',get_template_directory_uri().'/assets/css/theme.css',['jgbb-style'],wp_get_theme()->get('Version'));
    wp_enqueue_script('jgbb-theme',get_template_directory_uri().'/assets/js/theme.js',[],wp_get_theme()->get('Version'),true);
}
add_action('wp_enqueue_scripts','jgbb_enqueue_assets');

function jgbb_is_german() {
    if (function_exists('pll_current_language')) return pll_current_language('slug') === 'de';
    if (defined('ICL_LANGUAGE_CODE')) return ICL_LANGUAGE_CODE === 'de';
    if (function_exists('get_locale') && stripos(get_locale(),'de') === 0) return true;
    return false;
}
function jgbb_t($ar, $de) { return jgbb_is_german() ? $de : $ar; }

/** Preserves existing menu links and multilingual plugin menu assignments. */
function jgbb_menu_fallback($args = []) {
    $links = [
        ['/',jgbb_t('الرئيسية','Startseite')],
        ['/about-us/',jgbb_t('من نحن','Über uns')],
        ['/blog/',jgbb_t('فعاليات الجالية','Aktivitäten')],
        ['/register/',jgbb_t('العضوية','Mitgliedschaft')],
        ['/contact-us/',jgbb_t('تواصل معنا','Kontakt')],
    ];
    echo '<ul class="jgbb-menu">';
    foreach($links as $link) echo '<li><a href="'.esc_url(home_url($link[0])).'">'.esc_html($link[1]).'</a></li>';
    echo '</ul>';
}
function jgbb_find_page_url($slug, $fallback='/') {
    $page = get_page_by_path($slug);
    if ($page) return get_permalink($page);
    return home_url($fallback);
}
function jgbb_register_url() { return jgbb_find_page_url('register','/register/'); }
function jgbb_events_url() { return jgbb_find_page_url('blog','/blog/'); }
function jgbb_login_url() { return jgbb_find_page_url('login','/login/'); }

function jgbb_language_selector() {
    if (function_exists('pll_the_languages')) {
        pll_the_languages(['dropdown'=>0, 'show_flags'=>0, 'show_names'=>1, 'hide_current'=>0]); return;
    }
    if (has_action('wpml_add_language_selector')) { do_action('wpml_add_language_selector'); return; }
    // Read-only fallback links to verified bilingual site routes. Configure plugin-specific selector on production.
    echo '<a href="'.esc_url(home_url('/')).'" lang="ar">العربية</a><span class="jgbb-language-sep"> / </span><a href="'.esc_url(home_url('/de/home-deutsch/')).'" lang="de">DE</a>';
}

function jgbb_customize_register($wp_customize) {
    $wp_customize->add_section('jgbb_home',['title'=>__('JGBB home design','jgbb-community'),'priority'=>35]);
    $wp_customize->add_setting('jgbb_hero_photo',['default'=>'','sanitize_callback'=>'esc_url_raw']);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'jgbb_hero_photo',['label'=>__('Homepage hero photograph (optional)','jgbb-community'),'section'=>'jgbb_home','settings'=>'jgbb_hero_photo']));
}
add_action('customize_register','jgbb_customize_register');

function jgbb_excerpt($words=23) { echo esc_html(wp_trim_words(get_the_excerpt(),$words,'…')); }
function jgbb_article_card() {
    ?>
    <article <?php post_class('jgbb-story-card'); ?>>
      <a class="jgbb-story-card__media" href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr(get_the_title()); ?>">
        <?php if (has_post_thumbnail()) { the_post_thumbnail('jgbb-card',['loading'=>'lazy']); } else { echo '<span class="jgbb-story-card__placeholder" aria-hidden="true">JGBB</span>'; } ?>
      </a>
      <div class="jgbb-story-card__body">
        <p class="jgbb-eyebrow"><?php echo esc_html(get_the_date()); ?> <span aria-hidden="true">•</span> <?php echo esc_html(jgbb_t('من أخبار الجالية','Aus dem Vereinsleben')); ?></p>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p class="jgbb-card-summary"><?php jgbb_excerpt(); ?></p>
        <a class="jgbb-text-link" href="<?php the_permalink(); ?>"><?php echo esc_html(jgbb_t('اقرأ التفاصيل','Mehr erfahren')); ?> <span aria-hidden="true">↗</span></a>
      </div>
    </article>
    <?php
}
