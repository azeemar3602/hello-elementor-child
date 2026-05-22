<?php
/**
 * Template for the About page (slug: about).
 * WordPress auto-applies this when a page with slug "about" exists.
 */
$GLOBALS['ax_seo'] = array(
	'title'       => 'About Axion Communications | Cloud VoIP & UCaaS Since 2006',
	'description' => 'Meet the team behind Axion Communications. 15+ years delivering enterprise-grade VoIP, SMS, and AI analytics to 2,400+ businesses across the United States.',
	'og_type'     => 'website',
	'og_image'    => '', // Replace with full URL to a 1200×630 OG image
	'canonical'   => home_url( '/about/' ),
	'schema'      => array(
		'@context'    => 'https://schema.org',
		'@type'       => 'AboutPage',
		'name'        => 'About Axion Communications',
		'url'         => home_url( '/about/' ),
		'description' => 'Axion Communications was founded in 2006 with a mission to make business communication simple, reliable, and genuinely helpful.',
		'breadcrumb'  => array(
			'@type'           => 'BreadcrumbList',
			'itemListElement' => array(
				array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Home',  'item' => home_url( '/' ) ),
				array( '@type' => 'ListItem', 'position' => 2, 'name' => 'About', 'item' => home_url( '/about/' ) ),
			),
		),
	),
);
get_template_part( 'template-parts/ax-header' );
?>

<!-- ============ INNER HERO ============ -->
<section class="ax-inner-hero">
  <div class="ax-container ax-inner-hero-inner">
    <p class="ax-eyebrow">Our Story</p>
    <h1>Building the Future of <span class="ax-grad">Business Communication</span></h1>
    <p class="ax-lead">For over 15 years, Axion Communications has been helping businesses of every size ditch legacy hardware and move to a smarter, cloud-first communication stack.</p>
  </div>
</section>

<!-- ============ MISSION & VALUES ============ -->
<section class="ax-section">
  <div class="ax-container ax-about-mission">
    <div class="ax-about-mission-copy">
      <p class="ax-eyebrow">Our Mission</p>
      <h2>Communication That Works as Hard as You Do</h2>
      <p>We started Axion with a single belief: business communication should be simple, reliable, and genuinely helpful — not a source of dropped calls, missed messages, and IT headaches.</p>
      <p>Today, more than 2,400 businesses across the U.S. rely on our platform for every customer call, every team message, and every fax. We keep it that way with 99.999% uptime and real humans available 24/7.</p>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ax-btn ax-btn-primary">Talk to Our Team</a>
    </div>
    <div class="ax-about-mission-visual">
      <div class="ax-placeholder" style="min-height:380px;">[Office / Team Photo]</div>
    </div>
  </div>
</section>

<!-- ============ STATS ============ -->
<section class="ax-section ax-trust">
  <div class="ax-container">
    <div class="ax-stat-row">
      <div class="ax-stat"><span class="ax-stat-num">2006</span><span class="ax-stat-label">Year Founded</span></div>
      <div class="ax-stat"><span class="ax-stat-num">2,400+</span><span class="ax-stat-label">Active Clients</span></div>
      <div class="ax-stat"><span class="ax-stat-num">99.999%</span><span class="ax-stat-label">Uptime SLA</span></div>
      <div class="ax-stat"><span class="ax-stat-num">24/7</span><span class="ax-stat-label">Live Support</span></div>
    </div>
  </div>
</section>

<!-- ============ VALUES ============ -->
<section class="ax-section ax-defining">
  <div class="ax-container">
    <header class="ax-section-head ax-light">
      <p class="ax-eyebrow">Core Values</p>
      <h2>What We Stand For</h2>
    </header>
    <div class="ax-feature-grid">
      <?php
      $values = [
        ['People First',       'We build for the humans using our product — not for spec sheets or sales decks.'],
        ['Radical Reliability','Our infrastructure runs on geo-redundant data centers so your calls never drop.'],
        ['Honest Pricing',     'One predictable per-seat price. No surprise fees. No fine print.'],
        ['Always Improving',   'We ship AI features, integrations, and UX improvements every single month.'],
        ['Partner, Not Vendor','We learn your business. Our support team knows your account, not just a ticket number.'],
        ['Security Matters',   'SOC 2, HIPAA-ready, end-to-end encryption — because your data deserves protection.'],
      ];
      foreach ( $values as $v ) :
        list( $h, $p ) = $v; ?>
        <div class="ax-feature-card">
          <div class="ax-feature-bullet"></div>
          <h3><?php echo $h; ?></h3>
          <p><?php echo $p; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ TEAM ============ -->
<section class="ax-section">
  <div class="ax-container">
    <header class="ax-section-head">
      <p class="ax-eyebrow">Leadership</p>
      <h2>Meet the Team</h2>
      <p class="ax-sub">Real people. Deep expertise. Passionate about making communication simple.</p>
    </header>
    <div class="ax-team-grid">
      <?php
      $team = [
        ['CEO &amp; Co-Founder',      'Placeholder Name', 'Former telecom engineer with 20 years building enterprise phone systems.'],
        ['CTO',                        'Placeholder Name', 'Cloud architect who led VoIP infrastructure at a Fortune 500 before Axion.'],
        ['VP of Customer Success',     'Placeholder Name', '10 years of SaaS customer experience. Obsessed with response times under 60 seconds.'],
        ['Head of Product',            'Placeholder Name', 'Designs every feature from real customer feedback. Zero tolerance for confusing UX.'],
      ];
      foreach ( $team as $member ) :
        list( $role, $name, $bio ) = $member; ?>
        <div class="ax-team-card">
          <div class="ax-placeholder ax-placeholder-avatar">[Photo]</div>
          <h3><?php echo $name; ?></h3>
          <p class="ax-team-role"><?php echo $role; ?></p>
          <p class="ax-team-bio"><?php echo $bio; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="ax-section ax-urgency">
  <div class="ax-container ax-urgency-inner">
    <h2>Ready to See Axion in Action?</h2>
    <p>Book a 30-minute demo and we'll show you exactly how our platform fits your workflow.</p>
    <div class="ax-cta-row">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ax-btn ax-btn-accent ax-btn-lg">Book a Demo</a>
      <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>" class="ax-btn ax-btn-ghost ax-btn-lg">Explore Products</a>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/ax-footer' ); ?>
