<?php
/**
 * Template for the Blog/Resources page (slug: blog).
 * Displays the 12 most recent posts in a card grid.
 */
get_template_part( 'template-parts/ax-header' );
?>

<!-- ============ INNER HERO ============ -->
<section class="ax-inner-hero ax-inner-hero-sm">
  <div class="ax-container ax-inner-hero-inner">
    <p class="ax-eyebrow">Resources</p>
    <h1>Insights &amp; <span class="ax-grad">Best Practices</span></h1>
    <p class="ax-lead">Tips, guides, and news from the team at Axion Communications.</p>
  </div>
</section>

<!-- ============ BLOG GRID ============ -->
<section class="ax-section">
  <div class="ax-container">
    <?php
    $args = [
      'post_type'      => 'post',
      'post_status'    => 'publish',
      'posts_per_page' => 12,
    ];
    $posts = get_posts( $args );

    if ( ! empty( $posts ) ) : ?>
      <div class="ax-blog-grid">
        <?php foreach ( $posts as $post ) :
          setup_postdata( $post );
          $thumb = has_post_thumbnail( $post->ID ) ? get_the_post_thumbnail_url( $post->ID, 'large' ) : ''; ?>
          <article class="ax-blog-card">
            <a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" class="ax-blog-card-img">
              <?php if ( $thumb ) : ?>
                <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( get_the_title( $post->ID ) ); ?>">
              <?php else : ?>
                <div class="ax-placeholder" style="min-height:200px;">[Post Image]</div>
              <?php endif; ?>
            </a>
            <div class="ax-blog-card-body">
              <p class="ax-blog-date"><?php echo get_the_date( 'M j, Y', $post->ID ); ?></p>
              <h3><a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>"><?php echo esc_html( get_the_title( $post->ID ) ); ?></a></h3>
              <p class="ax-blog-excerpt"><?php echo wp_trim_words( get_the_excerpt( $post->ID ), 20, '…' ); ?></p>
              <a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" class="ax-link-arrow">Read more &rarr;</a>
            </div>
          </article>
        <?php endforeach;
        wp_reset_postdata(); ?>
      </div>
    <?php else : ?>
      <!-- Placeholder cards when no posts exist yet -->
      <div class="ax-blog-grid">
        <?php
        $placeholders = [
          ['5 Reasons to Switch from Legacy PBX to Cloud VoIP in 2025',           'Most businesses are still paying for hardware that costs more to maintain than replace. Here\'s why the switch to cloud is overdue.'],
          ['How AI Sentiment Analysis Is Changing the Way Teams Coach Agents',     'AI-powered call scoring is no longer a luxury reserved for enterprise contact centres. Here\'s how SMBs are using it today.'],
          ['HIPAA-Compliant VoIP: What Healthcare Providers Actually Need to Know','The rules aren\'t as complicated as they sound — but the penalties for getting it wrong are steep. A plain-English breakdown.'],
          ['The SMB Guide to VoIP Phone Number Porting',                           'Porting your number doesn\'t have to take weeks. We walk through the process step by step so you know what to expect.'],
          ['Softphone vs Desk Phone: Which One Is Right for Your Team?',           'The honest answer: it depends on your workflow. Here are the questions you should ask before deciding.'],
          ['How Axion Helped a California Veterinary Clinic Cut Missed Calls by 60%','A three-location practice was losing bookings to voicemail. Here\'s what they changed and how quickly they saw results.'],
        ];
        foreach ( $placeholders as $ph ) :
          list( $ttl, $exc ) = $ph; ?>
          <article class="ax-blog-card">
            <div class="ax-blog-card-img">
              <div class="ax-placeholder" style="min-height:200px;">[Post Image]</div>
            </div>
            <div class="ax-blog-card-body">
              <p class="ax-blog-date"><?php echo date( 'M j, Y' ); ?></p>
              <h3><?php echo $ttl; ?></h3>
              <p class="ax-blog-excerpt"><?php echo $exc; ?></p>
              <span class="ax-link-arrow" style="color:var(--ax-muted);">Coming soon</span>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
      <p style="text-align:center;color:var(--ax-muted);margin-top:32px;">Create posts in WP Admin → Posts to populate this page.</p>
    <?php endif; ?>
  </div>
</section>

<!-- ============ NEWSLETTER ============ -->
<section class="ax-section ax-urgency">
  <div class="ax-container ax-urgency-inner">
    <h2>Stay Ahead of the Curve</h2>
    <p>Monthly insights on VoIP, AI, and business communication. No spam. Unsubscribe any time.</p>
    <form style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;margin-top:8px;" onsubmit="event.preventDefault();alert('Wire up your email marketing plugin.');">
      <input type="email" placeholder="Your work email" required style="padding:14px 20px;border-radius:999px;border:0;font-size:1rem;min-width:280px;">
      <button type="submit" class="ax-btn ax-btn-accent ax-btn-lg">Subscribe</button>
    </form>
  </div>
</section>

<?php get_template_part( 'template-parts/ax-footer' ); ?>
