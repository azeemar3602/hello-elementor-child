<?php
/**
 * Template for the Products page (slug: products).
 */
$GLOBALS['ax_seo'] = array(
	'title'       => 'VoIP Products & Platform Features | Axion Communications',
	'description' => 'Explore Axion\'s 9 communication modules: HD Softphone, Business SMS, Team Chat, AI Call Recordings, Analytics Reports, Cloud PBX, VFax, File Transfer, and Video Meetings.',
	'og_type'     => 'website',
	'og_image'    => '', // Replace with full URL to a 1200×630 OG image
	'canonical'   => home_url( '/products/' ),
	'schema'      => array(
		'@context'    => 'https://schema.org',
		'@type'       => 'CollectionPage',
		'name'        => 'Axion Communications Products',
		'url'         => home_url( '/products/' ),
		'description' => 'Nine purpose-built communication modules unified in a single cloud platform.',
		'breadcrumb'  => array(
			'@type'           => 'BreadcrumbList',
			'itemListElement' => array(
				array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => home_url( '/' ) ),
				array( '@type' => 'ListItem', 'position' => 2, 'name' => 'Products', 'item' => home_url( '/products/' ) ),
			),
		),
	),
);
get_template_part( 'template-parts/ax-header' );
?>

<!-- ============ INNER HERO ============ -->
<section class="ax-inner-hero">
  <div class="ax-container ax-inner-hero-inner">
    <p class="ax-eyebrow">The Platform</p>
    <h1>One Platform. <span class="ax-grad">Every Channel.</span></h1>
    <p class="ax-lead">Nine purpose-built modules that cover every way your business communicates — unified in a single interface your team will actually love using.</p>
    <div class="ax-cta-row" style="justify-content:center;">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ax-btn ax-btn-primary ax-btn-lg">Book a Demo</a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ax-btn ax-btn-outline ax-btn-lg">Talk to Sales</a>
    </div>
  </div>
</section>

<!-- ============ PRODUCTS GRID ============ -->
<section class="ax-section">
  <div class="ax-container">
    <header class="ax-section-head">
      <p class="ax-eyebrow">All Modules</p>
      <h2>Built to Work Together</h2>
      <p class="ax-sub">Every module is available individually, but they're designed to shine as a suite — shared contacts, unified logs, single dashboard.</p>
    </header>
    <div class="ax-products-grid">
      <?php
      $products = [
        ['softphone',  'Softphone',      'HD Voice &amp; Calling',         'Make and receive crystal-clear HD calls from any device — desktop, mobile, or browser. Includes smart contact search, presence indicators, call transfer, hold music, and click-to-dial from any web page.',    ['HD audio on all devices','Presence &amp; availability','Smart contact search','Call transfer &amp; hold','Click-to-dial browser extension','Voicemail to email']],
        ['sms',        'SMS',            'Business Text Messaging',        'Two-way SMS from your business number. Send appointment reminders, order updates, and team broadcasts. Group SMS, templates, and full compliance archiving included.',                                          ['Two-way business SMS','Group messaging','Message templates','Auto-responders','MMS support','Compliance archiving']],
        ['chat',       'Team Chat',      'Internal Messaging',             'Real-time team messaging with channels, threads, and file sharing. Replaces consumer apps like WhatsApp for internal communication with a secure, searchable archive.',                                         ['Direct &amp; group chat','Channels &amp; threads','File &amp; image sharing','Message search','Read receipts','Guest access']],
        ['recordings', 'AI Recordings',  'Call Recording &amp; Analysis',  'Record calls automatically or on-demand, then let our AI transcribe and score every conversation for sentiment, keywords, and coaching opportunities.',                                                        ['Automatic &amp; on-demand recording','AI transcription','Sentiment analysis','Keyword alerts','Compliance retention','Manager coaching tools']],
        ['reports',    'Reports',        'Analytics &amp; Reporting',      'Real-time dashboards and scheduled reports across every channel. Track agent performance, call volumes, response times, and customer satisfaction — all in one view.',                                          ['Live dashboards','Custom KPI tracking','Agent leaderboards','Scheduled PDF exports','Historical trends','Multi-location rollups']],
        ['pbx',        'PBX',            'Phone System &amp; Routing',     'A full cloud PBX — IVR menus, hunt groups, call queues, and overflow routing — without a single piece of hardware in your office.',                                                                            ['IVR auto-attendant','Hunt groups','Call queues','Overflow routing','After-hours rules','Number porting']],
        ['vfax',       'VFax',           'Cloud Fax',                      'Send and receive faxes online. No fax machine, no dedicated phone line. HIPAA-ready for healthcare clients with full audit trails and customizable cover-sheet templates.',                                     ['Send/receive online','HIPAA-ready','Custom cover sheets','Template library','Delivery confirmation','Fax-to-email']],
        ['files',      'File Transfer',  'Secure File Sharing',            'Encrypted file storage with granular access controls. Share documents internally or with clients via secure links — no email attachments, no unsecured cloud drives.',                                           ['End-to-end encryption','Granular access controls','Version history','Expiring share links','Audit trail','Mobile access']],
        ['meetings',   'Meetings',       'Video Conferencing',             'HD video meetings with screen sharing, whiteboard, cloud recording, and built-in calendar scheduling. Works from browser — no client install required for guests.',                                             ['HD video &amp; audio','Screen sharing','Cloud recording &amp; transcription','Whiteboard','Calendar integrations','No client needed for guests']],
      ];
      foreach ( $products as $p ) :
        list( $id, $name, $subtitle, $desc, $features ) = $p; ?>
        <article class="ax-product-card" id="<?php echo esc_attr( $id ); ?>">
          <div class="ax-product-card-head">
            <div class="ax-industry-icon"><span><?php echo strtoupper( substr( $name, 0, 1 ) ); ?></span></div>
            <div>
              <h3><?php echo $name; ?></h3>
              <p class="ax-product-subtitle"><?php echo $subtitle; ?></p>
            </div>
          </div>
          <p><?php echo $desc; ?></p>
          <ul class="ax-check-list">
            <?php foreach ( $features as $f ) : ?><li><?php echo $f; ?></li><?php endforeach; ?>
          </ul>
          <div class="ax-placeholder ax-placeholder-product">[<?php echo $name; ?> Screenshot]</div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ INTEGRATIONS ============ -->
<section class="ax-section ax-integrations">
  <div class="ax-container ax-integrations-inner">
    <div class="ax-integrations-copy">
      <p class="ax-eyebrow">Integrations</p>
      <h2>Plug Into Your Existing Stack</h2>
      <p>Open REST APIs and pre-built connectors for Salesforce, HubSpot, Covetrus, Slack, Microsoft Teams, Zendesk, and dozens more. If your team uses it, we connect to it.</p>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ax-btn ax-btn-primary">Request an Integration</a>
    </div>
    <div class="ax-logo-wall">
      <?php for ( $i = 1; $i <= 8; $i++ ) : ?>
        <div class="ax-logo-tile">[Logo <?php echo $i; ?>]</div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="ax-section ax-urgency">
  <div class="ax-container ax-urgency-inner">
    <h2>See Every Module Live in 30 Minutes</h2>
    <p>Book a personalised demo and we'll walk through the features most relevant to your business.</p>
    <div class="ax-cta-row">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ax-btn ax-btn-accent ax-btn-lg">Book a Demo</a>
      <a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>" class="ax-btn ax-btn-ghost ax-btn-lg">View Industry Solutions</a>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/ax-footer' ); ?>
