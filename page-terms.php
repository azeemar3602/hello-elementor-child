<?php
/**
 * Template for the Terms of Service page (slug: terms).
 */
$GLOBALS['ax_seo'] = array(
	'title'       => 'Terms of Service | Axion Communications',
	'description' => 'Read the Axion Communications Terms of Service that govern your use of our VoIP, SMS, and unified communications platform.',
	'og_type'     => 'website',
	'og_image'    => '',
	'canonical'   => home_url( '/terms/' ),
	'schema'      => array(
		'@context'    => 'https://schema.org',
		'@type'       => 'WebPage',
		'name'        => 'Terms of Service — Axion Communications',
		'url'         => home_url( '/terms/' ),
		'description' => 'Legal terms governing use of the Axion Communications platform.',
		'breadcrumb'  => array(
			'@type'           => 'BreadcrumbList',
			'itemListElement' => array(
				array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Home',  'item' => home_url( '/' ) ),
				array( '@type' => 'ListItem', 'position' => 2, 'name' => 'Terms', 'item' => home_url( '/terms/' ) ),
			),
		),
	),
);
get_template_part( 'template-parts/ax-header' );
?>

<!-- ============ INNER HERO ============ -->
<section class="ax-inner-hero ax-inner-hero-sm">
  <div class="ax-container ax-inner-hero-inner">
    <p class="ax-eyebrow">Legal</p>
    <h1>Terms of <span class="ax-grad">Service</span></h1>
    <p class="ax-lead">Last updated: <?php echo date( 'F j, Y' ); ?></p>
  </div>
</section>

<!-- ============ TERMS CONTENT ============ -->
<section class="ax-section">
  <div class="ax-container ax-legal-wrap">

    <div class="ax-legal-toc">
      <h4>Contents</h4>
      <ol>
        <li><a href="#terms-acceptance">Acceptance of Terms</a></li>
        <li><a href="#terms-services">Description of Services</a></li>
        <li><a href="#terms-account">Account Registration</a></li>
        <li><a href="#terms-payment">Payment &amp; Billing</a></li>
        <li><a href="#terms-use">Acceptable Use</a></li>
        <li><a href="#terms-ip">Intellectual Property</a></li>
        <li><a href="#terms-privacy">Privacy</a></li>
        <li><a href="#terms-liability">Limitation of Liability</a></li>
        <li><a href="#terms-termination">Termination</a></li>
        <li><a href="#terms-changes">Changes to Terms</a></li>
        <li><a href="#terms-contact">Contact</a></li>
      </ol>
    </div>

    <div class="ax-legal-body">

      <h2 id="terms-acceptance">1. Acceptance of Terms</h2>
      <p>By accessing or using any service provided by Axion Communications ("Axion," "we," "us," or "our"), you agree to be bound by these Terms of Service. If you do not agree to these terms, please do not use our services.</p>

      <h2 id="terms-services">2. Description of Services</h2>
      <p>Axion provides cloud-based business communication services including, but not limited to, VoIP telephony, SMS, team chat, virtual fax, call recording, AI analytics, video conferencing, and file transfer ("Services"). Services are provided on a subscription basis and may be updated or changed from time to time.</p>

      <h2 id="terms-account">3. Account Registration</h2>
      <p>To access the Services, you must register for an account and provide accurate, current, and complete information. You are responsible for maintaining the confidentiality of your account credentials and for all activity that occurs under your account. You must notify Axion immediately of any unauthorized use.</p>

      <h2 id="terms-payment">4. Payment &amp; Billing</h2>
      <p>Subscription fees are billed monthly or annually as selected at sign-up. All fees are non-refundable except as required by law. Axion reserves the right to change pricing with thirty (30) days' notice. Failure to pay may result in suspension or termination of your account.</p>

      <h2 id="terms-use">5. Acceptable Use</h2>
      <p>You agree not to use the Services to:</p>
      <ul style="margin:0 0 1em 24px;list-style:disc;color:var(--ax-ink-2);">
        <li>Transmit unsolicited commercial messages (spam) or automated calls in violation of applicable law;</li>
        <li>Harass, threaten, or harm any individual;</li>
        <li>Violate any applicable local, state, national, or international law;</li>
        <li>Attempt to interfere with or disrupt the Services or Axion's infrastructure;</li>
        <li>Reverse-engineer, decompile, or otherwise attempt to derive source code from the platform.</li>
      </ul>
      <p>Axion reserves the right to suspend any account that violates these standards without notice.</p>

      <h2 id="terms-ip">6. Intellectual Property</h2>
      <p>All content, software, trademarks, and intellectual property related to the Services are the exclusive property of Axion Communications or its licensors. Nothing in these Terms grants you a license to use Axion's trademarks, trade names, or branding without express written consent.</p>

      <h2 id="terms-privacy">7. Privacy</h2>
      <p>Your use of the Services is subject to our <a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">Privacy Policy</a>, which is incorporated into these Terms by reference. By using the Services, you consent to the data practices described therein.</p>

      <h2 id="terms-liability">8. Limitation of Liability</h2>
      <p>To the maximum extent permitted by law, Axion shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising from your use of or inability to use the Services. Axion's total liability for any claim arising out of these Terms shall not exceed the fees you paid in the three (3) months preceding the claim.</p>

      <h2 id="terms-termination">9. Termination</h2>
      <p>Either party may terminate the service agreement with thirty (30) days' written notice. Axion may suspend or terminate your account immediately for material breach of these Terms. Upon termination, your right to access the Services ceases and Axion may delete your data in accordance with our data retention policy.</p>

      <h2 id="terms-changes">10. Changes to Terms</h2>
      <p>Axion may update these Terms at any time. We will notify you of material changes via email or in-app notice at least fifteen (15) days before the changes take effect. Continued use of the Services after that date constitutes acceptance of the updated Terms.</p>

      <h2 id="terms-contact">11. Contact</h2>
      <p>Questions about these Terms? Contact us at:</p>
      <p><strong>Axion Communications</strong><br>663 Cochran ST #100, Simi Valley, CA 93065<br>
      <a href="tel:+18559829466">(855) 982-9466</a><br>
      <a href="mailto:customercare@axionco.com">customercare@axionco.com</a></p>

    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/ax-footer' ); ?>
