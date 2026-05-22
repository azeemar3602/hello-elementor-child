<?php
/**
 * Shared site footer — included via get_template_part() on every page.
 */
?>
<!-- ============ FOOTER ============ -->
<footer class="ax-footer">
  <div class="ax-container ax-footer-grid">

    <div class="ax-footer-brand">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ax-logo ax-logo-light">
        <span class="ax-logo-mark">A</span><span class="ax-logo-text">Axion</span>
      </a>
      <p>Business communication, reinvented for the cloud era.</p>
      <ul class="ax-social">
        <li><a href="#" aria-label="Facebook">f</a></li>
        <li><a href="#" aria-label="LinkedIn">in</a></li>
        <li><a href="#" aria-label="YouTube">yt</a></li>
        <li><a href="#" aria-label="X">x</a></li>
      </ul>
    </div>

    <div>
      <h4>Product</h4>
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Business Communication</a></li>
        <li><a href="<?php echo esc_url( home_url( '/products/#phone-system' ) ); ?>">Phone System</a></li>
        <li><a href="<?php echo esc_url( home_url( '/products/#sms' ) ); ?>">SMS</a></li>
        <li><a href="<?php echo esc_url( home_url( '/products/#meetings' ) ); ?>">Meetings</a></li>
        <li><a href="<?php echo esc_url( home_url( '/products/#ai' ) ); ?>">AI Analysis</a></li>
        <li><a href="<?php echo esc_url( home_url( '/products/#chat' ) ); ?>">Team Chat</a></li>
        <li><a href="<?php echo esc_url( home_url( '/products/#vfax' ) ); ?>">VFAX</a></li>
      </ul>
    </div>

    <div>
      <h4>Solutions</h4>
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/solutions/#healthcare' ) ); ?>">Healthcare</a></li>
        <li><a href="<?php echo esc_url( home_url( '/solutions/#veterinary' ) ); ?>">Veterinary</a></li>
        <li><a href="<?php echo esc_url( home_url( '/solutions/#real-estate' ) ); ?>">Real Estate</a></li>
        <li><a href="<?php echo esc_url( home_url( '/solutions/#education' ) ); ?>">Education</a></li>
        <li><a href="<?php echo esc_url( home_url( '/solutions/#high-tech' ) ); ?>">High Tech</a></li>
        <li><a href="<?php echo esc_url( home_url( '/solutions/#consumer' ) ); ?>">Consumer</a></li>
      </ul>
    </div>

    <div>
      <h4>Company</h4>
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
        <li><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">Terms</a></li>
        <li><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">Privacy</a></li>
        <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a></li>
      </ul>
    </div>

    <div class="ax-footer-contact">
      <h4>Contact</h4>
      <p><a href="tel:+18559829466">(855) 982-9466</a></p>
      <p><a href="mailto:customercare@axionco.com">customercare@axionco.com</a></p>
      <p>663 Cochran ST #100<br>Simi Valley, CA 93065</p>
    </div>

  </div>
  <div class="ax-footer-bar">
    <div class="ax-container ax-footer-bar-inner">
      <p>&copy; <?php echo date( 'Y' ); ?> Axion Communications. All rights reserved.</p>
      <ul class="ax-footer-legal">
        <li><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">Terms</a></li>
        <li><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">Privacy</a></li>
      </ul>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
