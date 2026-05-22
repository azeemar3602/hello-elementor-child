# Hello Elementor Child — Axion Landing

A WordPress child theme of **Hello Elementor** that replaces the homepage with a custom Axion-style landing page (header, hero, 9-feature tabs, industries, defining features, integrations, stats, urgency CTA, FAQ, testimonials, contact form, footer).

## Files

| File | Purpose |
|---|---|
| `style.css` | Theme header + all landing-page styles (design tokens, components, responsive) |
| `functions.php` | Enqueues parent style, child style, Google Font (Inter), and landing JS |
| `front-page.php` | Custom homepage template — WordPress auto-uses this on the front page |
| `assets/js/landing.js` | Features-tab switcher, FAQ accordion, mobile nav toggle, sticky-header shadow |
| `screenshot.png` | Theme preview in WP Admin |

## Deploy to your Hostinger site

You're targeting `navajowhite-rail-800232.hostingersite.com`. Use one of these methods:

### Option A — Hostinger File Manager (no FTP client)
1. Log in to hPanel for your Hostinger account.
2. Go to **Files → File Manager**.
3. Navigate to `public_html/wp-content/themes/`.
4. Either:
   - Upload this whole `hello-elementor-child` folder, OR
   - Zip it locally and use the **Upload Files** button, then right-click → **Extract**.
5. Make sure the parent theme `hello-elementor` is also present in `themes/` (it almost certainly is — Hello Elementor is the default with Elementor).

### Option B — FTP / SFTP (FileZilla, Cyberduck, etc.)
1. Get your SFTP credentials from hPanel → **Files → FTP Accounts**.
2. Connect and navigate to `public_html/wp-content/themes/`.
3. Upload the entire `hello-elementor-child` folder.

### Activate the theme
1. In WP Admin go to **Appearance → Themes**.
2. Find **Hello Elementor Child** → click **Activate**.
3. Visit the front page (`/`) — the new landing page should render.

### Set the homepage (only if not already)
WordPress uses `front-page.php` automatically regardless of the **Settings → Reading** choice, so no change is required. But if you want the WP Admin to reflect a "Home" page:
1. **Pages → Add New** → title `Home` → publish (blank is fine).
2. **Settings → Reading** → "Your homepage displays" = **A static page** → Homepage = `Home`.

## What you'll still need to do

1. **Swap placeholders for real images** — every `.ax-placeholder` and `.ax-logo-tile` block is a dashed-border placeholder. Edit `front-page.php` and replace those divs with `<img>` tags pointing to your media library.
2. **Wire the contact form** — the form has a stub submit handler. Replace with a real plugin (WPForms, Fluent Forms, Contact Form 7) or hook a custom REST endpoint.
3. **Logo** — the text "A" + "Axion" badge in the header/footer is a CSS-rendered stand-in. Replace `.ax-logo` markup with `<img src="..." alt="Axion">`.
4. **Tune the colors / font** — design tokens are at the top of `style.css` (`:root { --ax-primary, --ax-accent, ... }`). Change once, applies everywhere.

## Known differences from axioncommunications.com

This is a **structural and visual match**, not a 1:1 clone. Differences include:
- Placeholder images instead of real product screenshots
- Stub contact form (no CRM/email backend)
- Approximated color/font (Inter via Google Fonts vs. their custom typeface)
- No JS animations beyond tabs/FAQ/mobile nav
- Footer links go to `#` anchors — wire to real pages

Closing those gaps is straightforward but requires real asset files.

## Rollback

If anything looks wrong, switch back to the previous theme: **Appearance → Themes → Activate Hello Elementor** (the parent).
