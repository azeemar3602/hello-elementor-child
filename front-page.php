<?php
/**
 * Front Page Template - Axion-style landing page.
 * WordPress uses this file automatically as the site front page.
 */
$GLOBALS['ax_seo'] = array(
	'title'       => 'Axion Communications | All-In-One Business Communication Solutions',
	'description' => 'Crystal-clear VoIP, AI-driven insights, SMS, VFAX, and team chat — all in one cloud platform. Serving 2,400+ US businesses with 99.999% uptime and 24/7 live support.',
	'og_type'     => 'website',
	'og_image'    => '', // Replace with full URL to a 1200×630 OG image
	'canonical'   => home_url( '/' ),
	'schema'      => array(
		'@context'        => 'https://schema.org',
		'@type'           => 'WebSite',
		'name'            => 'Axion Communications',
		'url'             => home_url( '/' ),
		'description'     => 'All-in-one cloud business communication platform — VoIP, SMS, AI analytics, team chat, VFAX, and more.',
		'potentialAction' => array(
			'@type'       => 'SearchAction',
			'target'      => array(
				'@type'       => 'EntryPoint',
				'urlTemplate' => home_url( '/?s={search_term_string}' ),
			),
			'query-input' => 'required name=search_term_string',
		),
	),
);
get_template_part( 'template-parts/ax-header' );
?>

<!-- ============ HERO ============ -->
<section class="ax-hero">
  <div class="ax-container ax-hero-inner">
    <div class="ax-hero-copy">
      <p class="ax-eyebrow">Unified Business Communication</p>
      <h1>All-In-One Business <span class="ax-grad">Communication Solutions</span></h1>
      <p class="ax-lead">Crystal-clear VoIP calls, AI-driven insights, instant messaging, VFAX, advanced call management, and much more — all in one platform built to scale with your business.</p>
      <div class="ax-cta-row">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ax-btn ax-btn-primary ax-btn-lg">Book a Demo</a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ax-btn ax-btn-outline ax-btn-lg">Book a Discovery Call</a>
      </div>
      <ul class="ax-hero-points">
        <li>HD VoIP &amp; Softphone</li>
        <li>AI Call Insights</li>
        <li>SMS &amp; Team Chat</li>
        <li>24/7 Support</li>
      </ul>
    </div>
    <div class="ax-hero-visual" aria-hidden="true">
      <div class="ax-placeholder ax-placeholder-hero">[Product Screenshot]</div>
      <div class="ax-float-card ax-float-1">
        <div class="ax-float-dot ax-dot-green"></div>
        <div><strong>AI Sentiment</strong><span>+24% positive</span></div>
      </div>
      <div class="ax-float-card ax-float-2">
        <div class="ax-float-dot ax-dot-blue"></div>
        <div><strong>Live Calls</strong><span>312 active</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ FEATURES TABS ============ -->
<section class="ax-section ax-features" id="products">
  <div class="ax-container">
    <header class="ax-section-head">
      <p class="ax-eyebrow">Platform</p>
      <h2>Tap Into Features That Fuel Success</h2>
      <p class="ax-sub">One platform. Nine purpose-built modules. Every channel your team needs to win the customer.</p>
    </header>
    <div class="ax-tabs" data-ax-tabs>
      <div class="ax-tab-buttons" role="tablist">
        <button class="ax-tab-btn is-active" role="tab" data-tab="softphone">Softphone</button>
        <button class="ax-tab-btn" role="tab" data-tab="sms">SMS</button>
        <button class="ax-tab-btn" role="tab" data-tab="chat">Chat</button>
        <button class="ax-tab-btn" role="tab" data-tab="recordings">Recordings</button>
        <button class="ax-tab-btn" role="tab" data-tab="reports">Reports</button>
        <button class="ax-tab-btn" role="tab" data-tab="pbx">PBX</button>
        <button class="ax-tab-btn" role="tab" data-tab="vfax">VFax</button>
        <button class="ax-tab-btn" role="tab" data-tab="files">File Transfer</button>
        <button class="ax-tab-btn" role="tab" data-tab="meetings">Meetings</button>
      </div>
      <?php
      $tabs = [
        'softphone'  => ['Softphone',      'HD calling, smart search, and presence awareness in a unified desktop &amp; mobile app.',             ['HD voice quality','Presence indicators','Smart contact search','Click-to-dial anywhere']],
        'sms'        => ['SMS',             'Send professional business text messages and group SMS without losing the conversation thread.',       ['Two-way business SMS','Group messaging','Templated responses','Compliance archiving']],
        'chat'       => ['Chat',            'One-on-one and group messaging with file sharing — keep your team in sync.',                          ['Direct &amp; group chat','File sharing','Channels &amp; threads','Read receipts']],
        'recordings' => ['Recordings',      'AI sentiment analysis and transcription on every call you choose to record.',                        ['Automatic transcription','AI sentiment scoring','Searchable archive','Compliance retention']],
        'reports'    => ['Reports',         'Performance tracking and customized analytics dashboards across your whole team.',                    ['Real-time dashboards','Custom KPIs','Scheduled exports','Agent leaderboards']],
        'pbx'        => ['PBX',             'Call distribution, smart routing, and queueing to make sure no caller is left on hold.',             ['Smart routing rules','Queue management','IVR menus','Hunt groups']],
        'vfax'       => ['VFax',            'Cloud-based faxing with reusable templates — secure, compliant, and paperless.',                     ['Send/receive online','HIPAA-ready','Template library','Activity logs']],
        'files'      => ['File Transfer',   'Encrypted file storage and granular access controls for sharing inside &amp; outside the org.',      ['End-to-end encryption','Access controls','Version history','External share links']],
        'meetings'   => ['Meetings',        'Video meetings with screen sharing, recording, and built-in scheduling.',                            ['HD video meetings','Screen sharing','Cloud recording','Calendar integrations']],
      ];
      $first = true;
      foreach ( $tabs as $key => $data ) :
        list( $title, $desc, $bullets ) = $data; ?>
        <div class="ax-tab-panel <?php echo $first ? 'is-active' : ''; ?>" role="tabpanel" data-panel="<?php echo esc_attr( $key ); ?>">
          <div class="ax-tab-copy">
            <h3><?php echo $title; ?></h3>
            <p><?php echo $desc; ?></p>
            <ul class="ax-check-list">
              <?php foreach ( $bullets as $b ) : ?><li><?php echo $b; ?></li><?php endforeach; ?>
            </ul>
            <a href="<?php echo esc_url( home_url( '/products/#' . $key ) ); ?>" class="ax-link-arrow">See it in action &rarr;</a>
          </div>
          <div class="ax-tab-visual">
            <div class="ax-placeholder ax-placeholder-feature">[<?php echo $title; ?> Screenshot]</div>
          </div>
        </div>
      <?php $first = false; endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ INDUSTRY SOLUTIONS ============ -->
<section class="ax-section ax-industries" id="solutions">
  <div class="ax-container">
    <header class="ax-section-head">
      <p class="ax-eyebrow">Solutions by Industry</p>
      <h2>Built for the Way Your Industry Works</h2>
      <p class="ax-sub">Pain points are different in every vertical. Our platform meets each one with purpose-built workflows.</p>
    </header>
    <div class="ax-industry-grid">
      <?php
      $industries = [
        ['Healthcare',        'HIPAA-ready calls, secure messaging, and appointment workflows that keep patient data protected.',       'healthcare'],
        ['Veterinary',        'Practice-wide call routing, SMS reminders, and Covetrus integration for streamlined ops.',               'veterinary'],
        ['Real Estate',       'Mobile-first softphone, listing-line routing, and SMS that keeps deals moving while you\'re on the road.','real-estate'],
        ['Education',         'Campus-wide directories, parent-teacher SMS, and reliable conferencing for hybrid learning.',            'education'],
        ['High Tech',         'API-first platform that plugs into your existing CRM, ticketing, and analytics stack.',                  'high-tech'],
        ['Consumer Services', 'Front-desk-ready PBX with smart queues so no booking call goes unanswered.',                            'consumer'],
        ['Logistics',         'Dispatch SMS, driver hotlines, and reporting that ties calls to deliveries.',                           'logistics'],
        ['Finance',           'Compliance recording, archiving, and call-quality reporting your auditors will love.',                  'finance'],
      ];
      foreach ( $industries as $row ) :
        list( $name, $copy, $anchor ) = $row; ?>
        <article class="ax-industry-card">
          <div class="ax-industry-icon"><span><?php echo strtoupper( substr( $name, 0, 1 ) ); ?></span></div>
          <h3><?php echo $name; ?></h3>
          <p><?php echo $copy; ?></p>
          <a href="<?php echo esc_url( home_url( '/solutions/#' . $anchor ) ); ?>" class="ax-link-arrow">Learn more &rarr;</a>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ DEFINING FEATURES ============ -->
<section class="ax-section ax-defining">
  <div class="ax-container">
    <header class="ax-section-head ax-light">
      <p class="ax-eyebrow">Why Axion</p>
      <h2>What Makes Us Different</h2>
    </header>
    <div class="ax-feature-grid">
      <?php
      $defining = [
        ['Best-in-class Support',  'A real human on the line — 24/7 — backed by a team that knows your account.'],
        ['Cost-effective Cloud',   'Predictable monthly pricing, no PBX hardware, no surprise long-distance bills.'],
        ['Scale Without Limits',   'Add users, locations, or numbers in minutes. The platform grows with you.'],
        ['Innovation First',       'AI insights, sentiment, and analytics shipping in every release.'],
        ['Plays With Your Stack',  'Open APIs and pre-built integrations with Salesforce, Covetrus, and more.'],
        ['Enterprise Reliability', '99.999% uptime SLA on geo-redundant infrastructure.'],
      ];
      foreach ( $defining as $row ) :
        list( $h, $p ) = $row; ?>
        <div class="ax-feature-card">
          <div class="ax-feature-bullet"></div>
          <h3><?php echo $h; ?></h3>
          <p><?php echo $p; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ INTEGRATIONS ============ -->
<section class="ax-section ax-integrations">
  <div class="ax-container ax-integrations-inner">
    <div class="ax-integrations-copy">
      <p class="ax-eyebrow">Integrations</p>
      <h2>Seamlessly Connects to the Tools You Already Use</h2>
      <p>Salesforce, Covetrus, HubSpot, Slack, Microsoft Teams, Zendesk — and dozens more.</p>
      <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>" class="ax-btn ax-btn-primary">Explore Integrations</a>
    </div>
    <div class="ax-logo-wall">
      <?php for ( $i = 1; $i <= 8; $i++ ) : ?>
        <div class="ax-logo-tile">[Logo <?php echo $i; ?>]</div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- ============ TRUST / STATS ============ -->
<section class="ax-section ax-trust">
  <div class="ax-container">
    <div class="ax-stat-row">
      <div class="ax-stat"><span class="ax-stat-num">15+</span><span class="ax-stat-label">Years of Excellence</span></div>
      <div class="ax-stat"><span class="ax-stat-num">2,400+</span><span class="ax-stat-label">Active Client Accounts</span></div>
      <div class="ax-stat"><span class="ax-stat-num">99.999%</span><span class="ax-stat-label">Uptime SLA</span></div>
      <div class="ax-stat"><span class="ax-stat-num">24/7</span><span class="ax-stat-label">Live Support</span></div>
    </div>
    <div class="ax-trust-cta">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ax-btn ax-btn-primary">Book a Demo</a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ax-btn ax-btn-outline">Talk to Sales</a>
    </div>
  </div>
</section>

<!-- ============ URGENCY CTA ============ -->
<section class="ax-section ax-urgency">
  <div class="ax-container ax-urgency-inner">
    <h2>Stop Losing Calls, Clients &amp; Revenue</h2>
    <p>Every dropped call is a lost opportunity. Axion turns your communication stack into a competitive advantage.</p>
    <div class="ax-cta-row">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ax-btn ax-btn-accent ax-btn-lg">Book a Demo</a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ax-btn ax-btn-ghost ax-btn-lg">Book a Discovery Call</a>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section class="ax-section ax-faq" id="resources">
  <div class="ax-container">
    <header class="ax-section-head">
      <p class="ax-eyebrow">FAQ</p>
      <h2>Frequently Asked Questions</h2>
    </header>
    <div class="ax-faq-list" data-ax-faq>
      <?php
      $faqs = [
        ['How do I contact Axion Communications?',                'Call (855) 982-9466 or email customercare@axionco.com. We answer live, 24/7.'],
        ['What makes Axion different from other VoIP providers?', 'A single platform for voice, SMS, chat, fax, and AI — backed by white-glove human support and 99.999% uptime.'],
        ['Is Axion a good fit for small and mid-sized businesses?','Yes. Most of our customers are SMBs. Pricing scales per seat with no minimum.'],
        ['What are the benefits of switching to VoIP?',           'Lower cost, more features, mobility, and reliability that traditional PBX hardware cannot match.'],
        ['Do you offer reseller or partner programs?',            'Yes — we have dedicated channel and white-label programs. Get in touch via the contact page.'],
        ['How quickly can my team be onboarded?',                 'Most teams are fully live within 5 business days, including number porting and training.'],
      ];
      foreach ( $faqs as $i => $row ) :
        list( $q, $a ) = $row; ?>
        <details class="ax-faq-item"<?php echo $i === 0 ? ' open' : ''; ?>>
          <summary><span class="ax-faq-q"><?php echo $q; ?></span><span class="ax-faq-icon"></span></summary>
          <div class="ax-faq-a"><p><?php echo $a; ?></p></div>
        </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ TESTIMONIALS ============ -->
<section class="ax-section ax-testimonials">
  <div class="ax-container">
    <header class="ax-section-head">
      <p class="ax-eyebrow">Customer Stories</p>
      <h2>Trusted by Teams Across the U.S.</h2>
    </header>
    <div class="ax-testimonial-grid">
      <?php
      $reviews = [
        ['"Best business communication decision we made this year. Support is unmatched."', 'Sarah K.',   'Office Manager, Alaska'],
        ['"Migration was painless. We were fully live in less than a week."',               'Marcus T.',  'IT Director, California'],
        ['"The AI sentiment reports changed how we coach our agents. Game changer."',       'Priya R.',   'VP Operations, New York'],
        ['"99.999% uptime is real. We have not had a single outage in two years."',         'Daniel M.',  'Owner, California'],
      ];
      foreach ( $reviews as $r ) :
        list( $quote, $name, $role ) = $r; ?>
        <figure class="ax-testimonial-card">
          <div class="ax-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <blockquote><?php echo $quote; ?></blockquote>
          <figcaption><strong><?php echo $name; ?></strong><span><?php echo $role; ?></span></figcaption>
        </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ CONTACT / NEWSLETTER ============ -->
<section class="ax-section ax-contact" id="contact">
  <div class="ax-container ax-contact-inner">
    <div class="ax-contact-copy">
      <p class="ax-eyebrow">Get In Touch</p>
      <h2>Let's Build Something Better Together</h2>
      <p>Tell us about your business. A real human will reach out within one business day.</p>
      <ul class="ax-contact-info">
        <li><strong>Phone:</strong> <a href="tel:+18559829466">(855) 982-9466</a></li>
        <li><strong>Email:</strong> <a href="mailto:customercare@axionco.com">customercare@axionco.com</a></li>
        <li><strong>Address:</strong> 663 Cochran ST #100, Simi Valley, CA 93065</li>
      </ul>
    </div>
    <form class="ax-form" action="#" method="post" onsubmit="event.preventDefault(); alert('Wire up WPForms or Fluent Forms to handle submissions.');">
      <div class="ax-form-row">
        <label>Name <input type="text" name="name" required></label>
        <label>Email <input type="email" name="email" required></label>
      </div>
      <div class="ax-form-row">
        <label>Phone <input type="tel" name="phone"></label>
        <label>State <input type="text" name="state"></label>
      </div>
      <label class="ax-form-block">Message <textarea name="message" rows="4"></textarea></label>
      <label class="ax-form-check"><input type="checkbox" name="newsletter" checked> Subscribe me to the newsletter</label>
      <button type="submit" class="ax-btn ax-btn-primary ax-btn-lg">Send Message</button>
    </form>
  </div>
</section>

<?php get_template_part( 'template-parts/ax-footer' ); ?>
