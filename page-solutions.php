<?php
/**
 * Template for the Solutions page (slug: solutions).
 */
$GLOBALS['ax_seo'] = array(
	'title'       => 'Industry Communication Solutions | Healthcare, Real Estate & More | Axion',
	'description' => 'Axion Communications serves healthcare, veterinary, real estate, education, high tech, consumer services, logistics, and finance with purpose-built VoIP and messaging workflows.',
	'og_type'     => 'website',
	'og_image'    => '', // Replace with full URL to a 1200×630 OG image
	'canonical'   => home_url( '/solutions/' ),
	'schema'      => array(
		'@context'    => 'https://schema.org',
		'@type'       => 'CollectionPage',
		'name'        => 'Axion Industry Solutions',
		'url'         => home_url( '/solutions/' ),
		'description' => 'Purpose-built communication solutions for 8 industry verticals.',
		'breadcrumb'  => array(
			'@type'           => 'BreadcrumbList',
			'itemListElement' => array(
				array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Home',      'item' => home_url( '/' ) ),
				array( '@type' => 'ListItem', 'position' => 2, 'name' => 'Solutions', 'item' => home_url( '/solutions/' ) ),
			),
		),
	),
);
get_template_part( 'template-parts/ax-header' );
?>

<!-- ============ INNER HERO ============ -->
<section class="ax-inner-hero">
  <div class="ax-container ax-inner-hero-inner">
    <p class="ax-eyebrow">Industry Solutions</p>
    <h1>Built for the Way <span class="ax-grad">Your Industry Works</span></h1>
    <p class="ax-lead">Generic VoIP doesn't cut it. Axion builds workflows around the specific pain points of your vertical — from HIPAA compliance to dispatch SMS to campus directories.</p>
    <div class="ax-cta-row" style="justify-content:center;">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ax-btn ax-btn-primary ax-btn-lg">Book a Demo</a>
    </div>
  </div>
</section>

<!-- ============ INDUSTRY DETAIL SECTIONS ============ -->
<?php
$industries = [
  [
    'healthcare', 'Healthcare',
    'HIPAA-Ready Communication for Healthcare Providers',
    'Patient communication is your lifeblood — but it comes with compliance requirements that standard VoIP providers ignore. Axion is purpose-built for the healthcare environment.',
    'Healthcare providers trust us for secure patient messaging, compliant call recording, and seamless integration with practice management systems.',
    ['HIPAA-compliant call recording &amp; archiving','Secure patient SMS reminders','VFax for prescriptions &amp; referrals','Integration with EHR / PMS systems','After-hours routing to on-call staff','AI transcription for clinical notes'],
  ],
  [
    'veterinary', 'Veterinary',
    'Purpose-Built for Veterinary Practices',
    'From appointment reminders to Covetrus integration, Axion is the communication platform that understands veterinary workflows.',
    'Vet practices using Axion report fewer missed calls, higher appointment attendance, and happier front-desk staff.',
    ['Covetrus integration (PIMS-native)','Automated appointment reminder SMS','HIPAA-ready for pet owner records','Multi-location call routing','Two-way client messaging','Missed call SMS auto-response'],
  ],
  [
    'real-estate', 'Real Estate',
    'Close More Deals with Mobile-First Communication',
    'Agents are never at their desks. Axion\'s softphone goes wherever you go — and makes sure every lead call reaches a real person.',
    'Real estate teams using Axion convert more leads because no call goes to voicemail during business hours.',
    ['Mobile softphone for agents on the go','Listing-specific phone numbers','Automated SMS follow-ups','Call recording for compliance','CRM integration (Salesforce, HubSpot)','Team presence &amp; availability'],
  ],
  [
    'education', 'Education',
    'Campus Communication That Scales',
    'From K-12 to universities, Axion replaces aging PBX infrastructure with a cloud platform that\'s easier to manage and more reliable.',
    'Education clients rely on us for parent-teacher communication, emergency broadcast SMS, and district-wide phone directories.',
    ['Campus-wide cloud PBX','Parent &amp; guardian SMS notifications','Emergency broadcast messaging','Staff presence &amp; directory','Department call routing','FERPA-aware archiving'],
  ],
  [
    'high-tech', 'High Tech',
    'An API-First Platform That Fits Your Stack',
    'Your team lives in Slack, Salesforce, and custom internal tools. Axion\'s REST APIs and pre-built integrations slot in without friction.',
    'High-tech companies choose Axion for its developer-friendly APIs, granular reporting, and enterprise reliability without enterprise complexity.',
    ['Full REST API access','Webhook event streaming','Salesforce &amp; HubSpot native connectors','Slack &amp; Teams integration','SSO / SAML support','99.999% uptime SLA'],
  ],
  [
    'consumer', 'Consumer Services',
    'Never Miss a Booking or Inquiry',
    'For salons, clinics, repair shops, and service businesses, every missed call is a missed booking. Axion\'s smart queues and SMS ensure every customer gets a response.',
    'Consumer service businesses cut missed call rate by over 60% in their first 90 days with Axion.',
    ['Smart call queuing','SMS auto-response for missed calls','Online booking SMS integration','Appointment reminder workflows','Front-desk softphone','After-hours voicemail-to-text'],
  ],
  [
    'logistics', 'Logistics',
    'Keep Drivers, Dispatch &amp; Customers Connected',
    'Logistics operations depend on split-second communication. Axion keeps dispatch, drivers, and customers in sync across every channel.',
    'Logistics companies use Axion to tie real-time call data to delivery records — improving accountability and customer satisfaction.',
    ['Dispatch hotlines with call recording','Driver SMS &amp; group messaging','Real-time location-based routing','Delivery confirmation SMS','Compliance call archiving','Multi-carrier number management'],
  ],
  [
    'finance', 'Finance',
    'Compliance-Grade Communication for Financial Services',
    'Regulators expect a complete, tamper-proof record of client communications. Axion makes compliance recording automatic — not an afterthought.',
    'Finance clients rely on Axion for SEC/FINRA-compliant recording, encrypted messaging, and audit-ready exports.',
    ['Automatic compliance call recording','Encrypted client messaging','Tamper-proof archive with audit log','On-demand call export for auditors','Role-based access controls','AI sentiment for adviser coaching'],
  ],
];

foreach ( $industries as $idx => $row ) :
  list( $id, $name, $title, $lead, $social_proof, $features ) = $row;
  $flip = ( $idx % 2 !== 0 );
?>
<section class="ax-section ax-industry-section <?php echo $flip ? 'ax-bg-soft' : ''; ?>" id="<?php echo esc_attr( $id ); ?>">
  <div class="ax-container ax-industry-detail <?php echo $flip ? 'ax-flip' : ''; ?>">
    <div class="ax-industry-detail-copy">
      <p class="ax-eyebrow"><?php echo $name; ?></p>
      <h2><?php echo $title; ?></h2>
      <p><?php echo $lead; ?></p>
      <p class="ax-social-proof"><em><?php echo $social_proof; ?></em></p>
      <ul class="ax-check-list">
        <?php foreach ( $features as $f ) : ?><li><?php echo $f; ?></li><?php endforeach; ?>
      </ul>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ax-btn ax-btn-primary" style="margin-top:16px;">Book a <?php echo $name; ?> Demo</a>
    </div>
    <div class="ax-industry-detail-visual">
      <div class="ax-placeholder" style="min-height:340px;">[<?php echo $name; ?> Screenshot]</div>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- ============ CTA ============ -->
<section class="ax-section ax-urgency">
  <div class="ax-container ax-urgency-inner">
    <h2>Don't See Your Industry?</h2>
    <p>Axion works for any business that communicates with customers. Tell us about yours and we'll show you how we fit.</p>
    <div class="ax-cta-row">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ax-btn ax-btn-accent ax-btn-lg">Book a Custom Demo</a>
      <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>" class="ax-btn ax-btn-ghost ax-btn-lg">See All Products</a>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/ax-footer' ); ?>
