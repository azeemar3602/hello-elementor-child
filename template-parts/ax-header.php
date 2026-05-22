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
