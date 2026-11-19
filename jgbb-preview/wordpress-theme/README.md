# JGBB Community Modern — WordPress theme prototype

A self-contained *classic WordPress theme*, not a replacement for the existing WordPress installation. Its purpose is to redesign the front end while continuing to display existing WordPress **posts, pages, users, menus, images, content and plugin shortcodes**.

## What remains unchanged
- WordPress database, registered users, member information, payment details and admin dashboard.
- Existing registration, login and contact plugin shortcodes rendered by `the_content()` in `page.php`.
- Existing blog posts, categories, featured images, media, and photo galleries; plugins must remain active.
- Existing multilingual plugins (basic Polylang / WPML selector support), provided their existing menus and translations remain configured.

## Installation to a **staging clone** (never directly on live)
1. Back up database and `wp-content/uploads`, plugins and existing theme.
2. Create a WordPress staging clone and restore the backup there.
3. From **Appearance → Themes → Add New → Upload Theme**, upload `jgbb-community.zip` and activate it only on staging.
4. Assign the existing menus to `Primary navigation` and `Footer navigation`; verify translation-specific menus.
5. Set logo in **Appearance → Customize → Site Identity** and optionally hero photograph under **JGBB home design**.
6. Verify registration / login / account / password reset / contact / shortcodes, *including submission and emails*, in both languages. Test SEO paths, archives, photo galleries, galleries embedded as shortcodes, and mobile views.
7. Inspect Avada/Fusion/other theme-specific shortcodes or templates; these may require conversion or compatibility fixes. A different theme is **not** guaranteed to render those plugins identically without inspection.
8. Only after tests and stakeholder approval deploy with a maintenance window and rollback plan.

## Important
The original membership price tiers and bank details are **not edited or stored in this theme**; those stay in the original WordPress page. No frontend mock forms are connected to real data. The theme adds no new payment, QR, event-booking or donation backend. That would be a separate plugin/project.

## Preview
Open `preview/index.html` locally for a visual, bilingual demonstration without installing WordPress. The preview contains illustrative cards and a non-submitting form, and is *not* an operational copy of the site.

## Theme structure
- `front-page.php`: visual homepage pulling the latest existing WordPress posts
- `page.php`: existing content / forms / plugin shortcodes, styled
- `index.php`, `single.php`: current posts and events archive
- `header.php`, `footer.php`: responsive navigation, bilingual-friendly layout
- `functions.php`: menu registration, customizer options, post thumbnails, plugin-neutral helpers
- `assets/css/theme.css`: complete responsive design and form styling, including Ultimate Member

Theme is a proof of concept pending administrator access and production compatibility tests. No live site access or modifications were made.

## November 2026 showcase update
The ZIP includes a **local-only interactive HTML preview**, a native WordPress calendar page template, and an Arabic installation guide. No event booking, member records, payments or emails are changed. Test on staging before activation.
