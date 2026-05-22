<?php
/**
 * Template for the Privacy Policy page (slug: privacy).
 */
$GLOBALS['ax_seo'] = array(
	'title'       => 'Privacy Policy | Axion Communications',
	'description' => 'Learn how Axion Communications collects, uses, and protects your personal data. HIPAA-ready, SOC 2 Type II compliant, and CCPA/GDPR aware.',
	'og_type'     => 'website',
	'og_image'    => '',
	'canonical'   => home_url( '/privacy/' ),
	'schema'      => array(
		'@context'    => 'https://schema.org',
		'@type'       => 'WebPage',
		'name'        => 'Privacy Policy — Axion Communications',
		'url'         => home_url( '/privacy/' ),
		'description' => 'Privacy Policy for the Axion Communications platform. SOC 2, HIPAA-ready, CCPA compliant.',
		'breadcrumb'  => array(
			'@type'           => 'BreadcrumbList',
			'itemListElement' => array(
				array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Home',    'item' => home_url( '/' ) ),
				array( '@type' => 'ListItem', 'position' => 2, 'name' => 'Privacy', 'item' => home_url( '/privacy/' ) ),
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
    <h1>Privacy <span class="ax-grad">Policy</span></h1>
    <p class="ax-lead">Last updated: <?php echo date( 'F j, Y' ); ?></p>
  </div>
</section>

<!-- ============ PRIVACY CONTENT ============ -->
<section class="ax-section">
  <div class="ax-container ax-legal-wrap">

    <div class="ax-legal-toc">
      <h4>Contents</h4>
      <ol>
        <li><a href="#priv-intro">Introduction</a></li>
        <li><a href="#priv-collect">Information We Collect</a></li>
        <li><a href="#priv-use">How We Use Information</a></li>
        <li><a href="#priv-share">Sharing Information</a></li>
        <li><a href="#priv-cookies">Cookies</a></li>
        <li><a href="#priv-retention">Data Retention</a></li>
        <li><a href="#priv-security">Security</a></li>
        <li><a href="#priv-rights">Your Rights</a></li>
        <li><a href="#priv-children">Children's Privacy</a></li>
        <li><a href="#priv-changes">Changes to This Policy</a></li>
        <li><a href="#priv-contact">Contact Us</a></li>
      </ol>
    </div>

    <div class="ax-legal-body">

      <h2 id="priv-intro">1. Introduction</h2>
      <p>Axion Communications ("Axion," "we," "us," or "our") is committed to protecting your personal information. This Privacy Policy explains what data we collect, how we use it, and the choices you have regarding your information when you use our website and Services.</p>

      <h2 id="priv-collect">2. Information We Collect</h2>
      <p><strong>Account &amp; Contact Data:</strong> Name, email address, phone number, company name, billing address, and payment information provided during registration or purchase.</p>
      <p><strong>Usage Data:</strong> Call logs, message metadata, feature usage, and platform activity collected automatically as you use the Services.</p>
      <p><strong>Device &amp; Technical Data:</strong> IP address, browser type, operating system, device identifiers, and access times collected automatically via cookies and server logs.</p>
      <p><strong>Communications Content:</strong> Call recordings, voicemails, transcriptions, fax content, and messages you choose to store on the platform, processed only to deliver the Services you have requested.</p>

      <h2 id="priv-use">3. How We Use Information</h2>
      <p>We use your information to:</p>
      <ul style="margin:0 0 1em 24px;list-style:disc;color:var(--ax-ink-2);">
        <li>Provide, operate, and improve the Services;</li>
        <li>Process billing and send transactional communications;</li>
        <li>Respond to support requests and account inquiries;</li>
        <li>Send product updates and marketing communications (you may opt out at any time);</li>
        <li>Detect and prevent fraud, abuse, and security incidents;</li>
        <li>Comply with legal obligations.</li>
      </ul>

      <h2 id="priv-share">4. Sharing Information</h2>
      <p>We do not sell your personal information. We may share data with:</p>
      <ul style="margin:0 0 1em 24px;list-style:disc;color:var(--ax-ink-2);">
        <li><strong>Service Providers:</strong> Third-party vendors who assist in delivering the Services (e.g., cloud infrastructure, payment processing, analytics) under strict confidentiality obligations;</li>
        <li><strong>Legal Compliance:</strong> When required by law, subpoena, or government request;</li>
        <li><strong>Business Transfers:</strong> In connection with a merger, acquisition, or sale of assets, with appropriate notice to affected users.</li>
      </ul>

      <h2 id="priv-cookies">5. Cookies</h2>
      <p>We use cookies and similar tracking technologies to recognize returning visitors, understand site usage, and improve your experience. You can control cookies through your browser settings. Disabling cookies may affect certain functionality of our website.</p>

      <h2 id="priv-retention">6. Data Retention</h2>
      <p>We retain personal data for as long as your account is active or as needed to provide the Services. After account closure, we retain data for up to 90 days before permanent deletion, unless a longer retention period is required by law or agreed to in your service contract.</p>

      <h2 id="priv-security">7. Security</h2>
      <p>We implement industry-standard security measures including TLS encryption in transit, AES-256 encryption at rest, SOC 2 Type II controls, and role-based access restrictions. No method of electronic storage is 100% secure; we cannot guarantee absolute security, but we are committed to protecting your data.</p>

      <h2 id="priv-rights">8. Your Rights</h2>
      <p>Depending on your location, you may have the right to access, correct, delete, or port your personal data, and to object to or restrict certain processing. To exercise any of these rights, contact us at <a href="mailto:customercare@axionco.com">customercare@axionco.com</a>. We will respond within 30 days.</p>
      <p>California residents may have additional rights under the CCPA. Please contact us for a full disclosure of the categories of data collected and your opt-out options.</p>

      <h2 id="priv-children">9. Children's Privacy</h2>
      <p>The Services are not directed to individuals under the age of 16. We do not knowingly collect personal information from children. If you believe we have inadvertently collected such information, please contact us immediately.</p>

      <h2 id="priv-changes">10. Changes to This Policy</h2>
      <p>We may update this Privacy Policy from time to time. We will notify you of material changes via email or in-app notice. Continued use of the Services after notice constitutes acceptance of the updated Policy.</p>

      <h2 id="priv-contact">11. Contact Us</h2>
      <p>Questions or requests regarding this Privacy Policy:</p>
      <p><strong>Axion Communications — Privacy Team</strong><br>663 Cochran ST #100, Simi Valley, CA 93065<br>
      <a href="mailto:customercare@axionco.com">customercare@axionco.com</a><br>
      <a href="tel:+18559829466">(855) 982-9466</a></p>

    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/ax-footer' ); ?>
