<?php
/**
 * Shared site header — included via get_template_part() on every page.
 * Detects the current page to highlight the active nav item.
 */
$ax_current = '';
if ( is_front_page() )                      $ax_current = 'home';
elseif ( is_page( 'products' ) )            $ax_current = 'products';
elseif ( is_page( 'solutions' ) )           $ax_current = 'solutions';
elseif ( is_page( 'about' ) )               $ax_current = 'company';
elseif ( is_page( array( 'blog', 'resources' ) ) || is_home() ) $ax_current = 'resources';
elseif ( is_page( 'contact' ) )             $ax_current = 'contact';
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php
// ── SEO META ──────────────────────────────────────────────────────────────
// Reads $GLOBALS['ax_seo'] set at the top of each page template.
// Skips entirely when Yoast SEO, Rank Math, or AIOSEO is active — those
// plugins output their own meta via wp_head() and must not be duplicated.
$_ax             = isset( $GLOBALS['ax_seo'] ) ? $GLOBALS['ax_seo'] : array();
$_ax_has_plugin  = defined( 'WPSEO_VERSION' ) || function_exists( 'rank_math' )
                   || class_exists( 'RankMath' ) || defined( 'AIOSEOP_VERSION' );
$_ax_title       = esc_attr( isset( $_ax['title'] )       ? $_ax['title']       : get_bloginfo( 'name' ) );
$_ax_desc        = esc_attr( isset( $_ax['description'] ) ? $_ax['description'] : get_bloginfo( 'description' ) );
$_ax_canonical   = esc_url(  isset( $_ax['canonical'] )   ? $_ax['canonical']   : ( ( is_ssl() ? 'https' : 'http' ) . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ) );
$_ax_og_image    = esc_url(  isset( $_ax['og_image'] )    ? $_ax['og_image']    : '' );
$_ax_og_type     = esc_attr( isset( $_ax['og_type'] )     ? $_ax['og_type']     : 'website' );
$_ax_noindex     = ! empty( $_ax['noindex'] );
?>
<?php if ( ! $_ax_has_plugin ) : ?>
<?php if ( $_ax_noindex ) : ?>
<meta name="robots" content="noindex,nofollow">
<?php endif; ?>
<meta name="description" content="<?php echo $_ax_desc; ?>">
<link rel="canonical" href="<?php echo $_ax_canonical; ?>">
<!-- Open Graph -->
<meta property="og:type"        content="<?php echo $_ax_og_type; ?>">
<meta property="og:title"       content="<?php echo $_ax_title; ?>">
<meta property="og:description" content="<?php echo $_ax_desc; ?>">
<meta property="og:url"         content="<?php echo $_ax_canonical; ?>">
<meta property="og:site_name"   content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
<?php if ( $_ax_og_image ) : ?>
<meta property="og:image"       content="<?php echo $_ax_og_image; ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<?php endif; ?>
<!-- Twitter Card -->
<meta name="twitter:card"        content="summary_large_image">
<meta name="twitter:title"       content="<?php echo $_ax_title; ?>">
<meta name="twitter:description" content="<?php echo $_ax_desc; ?>">
<?php if ( $_ax_og_image ) : ?>
<meta name="twitter:image"       content="<?php echo $_ax_og_image; ?>">
<?php endif; ?>
<?php endif; ?>
<!-- Organization JSON-LD (always present — safe alongside SEO plugins) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Axion Communications",
  "url": "<?php echo esc_url( home_url( '/' ) ); ?>",
  "logo": "<?php echo esc_url( home_url( '/' ) ); ?>logo.png",
  "telephone": "+18559829466",
  "email": "customercare@axionco.com",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "663 Cochran ST #100",
    "addressLocality": "Simi Valley",
    "addressRegion": "CA",
    "postalCode": "93065",
    "addressCountry": "US"
  },
  "sameAs": [
    "https://www.facebook.com/axioncommunications",
    "https://www.linkedin.com/company/axioncommunications",
    "https://www.youtube.com/@axioncommunications"
  ]
}
</script>
<?php if ( ! empty( $_ax['schema'] ) ) : ?>
<!-- Page-specific JSON-LD -->
<script type="application/ld+json"><?php echo wp_json_encode( $_ax['schema'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ); ?></script>
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class( 'axion-landing' ); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<header class="ax-header">
  <div class="ax-container ax-header-inner">

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ax-logo">
      <span class="ax-logo-mark">A</span><span class="ax-logo-text">Axion</span>
    </a>

    <nav class="ax-nav" aria-label="Primary">
      <ul class="ax-nav-list">
        <li class="<?php echo $ax_current === 'products'  ? 'ax-has-sub is-active' : 'ax-has-sub'; ?>">
          <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Products <span class="ax-caret">&#9662;</span></a>
          <ul class="ax-sub-menu">
            <li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>#softphone">Softphone</a></li>
            <li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>#sms">SMS</a></li>
            <li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>#chat">Team Chat</a></li>
            <li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>#meetings">Meetings</a></li>
            <li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>#ai">AI Analysis</a></li>
            <li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>#vfax">VFAX</a></li>
          </ul>
        </li>
        <li class="<?php echo $ax_current === 'solutions' ? 'ax-has-sub is-active' : 'ax-has-sub'; ?>">
          <a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>">Solutions <span class="ax-caret">&#9662;</span></a>
          <ul class="ax-sub-menu">
            <li><a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>#healthcare">Healthcare</a></li>
            <li><a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>#veterinary">Veterinary</a></li>
            <li><a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>#real-estate">Real Estate</a></li>
            <li><a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>#education">Education</a></li>
            <li><a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>#finance">Finance</a></li>
            <li><a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>#logistics">Logistics</a></li>
          </ul>
        </li>
        <li class="<?php echo $ax_current === 'company'   ? 'ax-has-sub is-active' : 'ax-has-sub'; ?>">
          <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Company <span class="ax-caret">&#9662;</span></a>
          <ul class="ax-sub-menu">
            <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a></li>
            <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
            <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a></li>
          </ul>
        </li>
        <li class="<?php echo $ax_current === 'resources' ? 'is-active' : ''; ?>">
          <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Resources</a>
        </li>
        <li><a href="<?php echo esc_url( home_url( '/our-network/' ) ); ?>">Our Network</a></li>
      </ul>
    </nav>

    <div class="ax-header-actions">
      <a href="tel:+18559829466" class="ax-phone">(855) 982-9466</a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ax-btn ax-btn-primary">Let's Get Started</a>
      <a href="#portal" class="ax-portal">Customer Portal</a>
      <button class="ax-burger" aria-label="Open menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>

  </div>
</header>
