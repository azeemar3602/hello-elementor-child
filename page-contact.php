<?php
/**
 * Template for the Contact page (slug: contact).
 */
$GLOBALS['ax_seo'] = array(
	'title'       => 'Contact Axion Communications | (855) 982-9466 | Simi Valley, CA',
	'description' => 'Get in touch with Axion Communications. Call (855) 982-9466, email customercare@axionco.com, or fill out our form. A real human responds within one business day.',
	'og_type'     => 'website',
	'og_image'    => '', // Replace with full URL to a 1200×630 OG image
	'canonical'   => home_url( '/contact/' ),
	'schema'      => array(
		'@context'    => 'https://schema.org',
		'@type'       => 'ContactPage',
		'name'        => 'Contact Axion Communications',
		'url'         => home_url( '/contact/' ),
		'description' => 'Reach Axion Communications by phone, email, or contact form. 24/7 live support.',
		'breadcrumb'  => array(
			'@type'           => 'BreadcrumbList',
			'itemListElement' => array(
				array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Home',    'item' => home_url( '/' ) ),
				array( '@type' => 'ListItem', 'position' => 2, 'name' => 'Contact', 'item' => home_url( '/contact/' ) ),
			),
		),
	),
);
get_template_part( 'template-parts/ax-header' );
?>

<!-- ============ INNER HERO ============ -->
<section class="ax-inner-hero ax-inner-hero-sm">
  <div class="ax-container ax-inner-hero-inner">
    <p class="ax-eyebrow">Get in Touch</p>
    <h1>Let's <span class="ax-grad">Talk</span></h1>
    <p class="ax-lead">A real person will respond within one business day. No robots, no runaround.</p>
  </div>
</section>

<!-- ============ CONTACT MAIN ============ -->
<section class="ax-section ax-contact">
  <div class="ax-container ax-contact-inner">
    <div class="ax-contact-copy">
      <p class="ax-eyebrow">Contact Information</p>
      <h2>Reach Us Any Way You Like</h2>
      <p>Whether you want a quick call, a product demo, or just have a question — we're here.</p>
      <ul class="ax-contact-info">
        <li><strong>Phone:</strong> <a href="tel:+18559829466">(855) 982-9466</a></li>
        <li><strong>Email:</strong> <a href="mailto:customercare@axionco.com">customercare@axionco.com</a></li>
        <li><strong>Address:</strong> 663 Cochran ST #100, Simi Valley, CA 93065</li>
        <li><strong>Support Hours:</strong> 24/7 — 365 days a year</li>
        <li><strong>Sales Hours:</strong> Mon–Fri 8am–6pm PT</li>
      </ul>

      <div class="ax-contact-options">
        <div class="ax-contact-option">
          <h4>Book a Demo</h4>
          <p>30 minutes. We'll walk you through the platform live and answer every question.</p>
        </div>
        <div class="ax-contact-option">
          <h4>Discovery Call</h4>
          <p>Tell us about your business and we'll recommend the right fit. No pressure.</p>
        </div>
        <div class="ax-contact-option">
          <h4>Customer Support</h4>
          <p>Already a client? Call or email and a specialist picks up — no ticket queue.</p>
        </div>
      </div>
    </div>

    <form class="ax-form" action="#" method="post" onsubmit="event.preventDefault(); alert('Wire up WPForms or Fluent Forms to handle submissions.');">
      <h3 style="margin-bottom:20px;">Send Us a Message</h3>
      <div class="ax-form-row">
        <label>First Name <input type="text" name="first_name" required></label>
        <label>Last Name  <input type="text" name="last_name"  required></label>
      </div>
      <div class="ax-form-row">
        <label>Email  <input type="email" name="email" required></label>
        <label>Phone  <input type="tel"   name="phone"></label>
      </div>
      <div class="ax-form-row">
        <label>Company <input type="text" name="company"></label>
        <label>State   <input type="text" name="state"></label>
      </div>
      <label class="ax-form-block" style="margin-bottom:16px;">
        I'm interested in
        <select name="interest" style="width:100%;padding:12px 14px;border:1px solid var(--ax-line);border-radius:10px;font-size:.95rem;margin-top:6px;font-family:var(--ax-font);">
          <option value="">— Select one —</option>
          <option>Book a Demo</option>
          <option>Discovery Call</option>
          <option>Pricing Information</option>
          <option>Technical Support</option>
          <option>Partnership / Reseller</option>
          <option>Other</option>
        </select>
      </label>
      <label class="ax-form-block">Message <textarea name="message" rows="5" placeholder="Tell us a bit about your business and what you're looking for..."></textarea></label>
      <label class="ax-form-check"><input type="checkbox" name="newsletter" checked> Keep me updated with tips and product news</label>
      <button type="submit" class="ax-btn ax-btn-primary ax-btn-lg" style="margin-top:8px;">Send Message</button>
    </form>
  </div>
</section>

<!-- ============ MAP PLACEHOLDER ============ -->
<section class="ax-section" style="padding-top:0;">
  <div class="ax-container">
    <div class="ax-placeholder" style="min-height:320px;border-radius:var(--ax-radius-lg);">[Google Maps embed — 663 Cochran ST #100, Simi Valley, CA 93065]</div>
  </div>
</section>

<?php get_template_part( 'template-parts/ax-footer' ); ?>
