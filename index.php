<?php
$pageTitle = 'Nexcent | Lessons and insights from 8 years';
include __DIR__ . '/includes/header.php';
?>
<section class="hero-section" id="home">
  <div class="container hero-layout">
    <div class="hero-copy">
      <h1>Lessons and insights <span>from 8 years</span></h1>
      <p class="hero-description">Where to grow your business as a photographer: website or social media?</p>
      <a class="button" href="#blog">Register<span>→</span></a>
    </div>
    <div class="hero-art"><img src="assets/Illustration.png" alt="Illustration representing digital collaboration"></div>
  </div>
  <div class="hero-dots" aria-hidden="true"><span class="selected"></span><span></span><span></span></div>
</section>
<section class="clients-section section-pad">
  <div class="container">
    <div class="section-heading"><h2>Our Clients</h2><p>We have been working with some Fortune 500+ clients</p></div>
    <div class="client-logos">
      <?php for ($i = 1; $i <= 7; $i++): ?><img src="assets/Logo<?= $i === 1 ? '' : ' (' . ($i - 1) . ')'; ?>.png" alt="Client logo <?= $i; ?>"><?php endfor; ?>
    </div>
  </div>
</section>
<section class="community-section section-pad" id="community">
  <div class="container">
    <div class="section-heading"><h2>Manage your entire community<br>in a single system</h2><p>Who is Nextcent suitable for?
</p></div>
    <div class="feature-grid">
      <article class="feature-card"><div class="feature-icon"><img src="assets/Icon3.png" alt=""></div><h3>Membership<br>Organisations</h3><p>Our membership management software provides full automation of membership renewals and payments</p></article>
      <article class="feature-card"><div class="feature-icon"><img src="assets/Icon (1).png" alt=""></div><h3>National<br>Associations</h3><p>Our membership management software provides full automation of membership renewals and payments</p></article>
      <article class="feature-card"><div class="feature-icon"><img src="assets/Icon (2).png" alt=""></div><h3>Clubs And<br>Groups</h3><p>Our membership management software provides full automation of membership renewals and payments</p></article>
    </div>
  </div>
</section>
<section class="split-section section-pad" id="services">
  <div class="container split-layout">
    <div class="split-art"><img src="assets/rafiki.png" alt="People collaborating on a digital project"></div>
    <div class="split-copy"><h2>The unseen of spending three years at Pixelgrade</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet justo ipsum. Sed accumsan quam vitae est varius fringilla. Pellentesque placerat vestibulum lorem sed porta. Nullam mattis tristique iaculis. Nullam pulvinar sit amet risus pretium auctor. Etiam quis massa pulvinar, aliquam quam vitae, tempus sem. Donec elementum pulvinar odio.</p><a class="button" href="#contact">Learn more <span>→</span></a></div>
  </div>
</section>
<section class="stats-section section-pad">
  <div class="container stats-layout">
    <div class="stats-intro"><h2>How to design your site footer like we did <span>business reinvent itself</span></h2><p>Meaningful work. Measurable progress.</p></div>
    <div class="stats-grid">
      <div class="stat-item"><span class="stat-symbol">▦</span><div><strong>2,245,341</strong><small>Projects supported</small></div></div>
      <div class="stat-item"><span class="stat-symbol">♙</span><div><strong>46,328</strong><small>Happy customers</small></div></div>
      <div class="stat-item"><span class="stat-symbol">⌂</span><div><strong>828,867</strong><small>Ideas brought to life</small></div></div>
      <div class="stat-item"><span class="stat-symbol">◷</span><div><strong>1,926,436</strong><small>Hours of dedication</small></div></div>
    </div>
  </div>
</section>
<section class="split-section split-reverse section-pad" id="portfolio">
  <div class="container split-layout">
    <div class="split-art"><img src="assets/pana.png" alt="Illustration of a team reviewing a project"></div>
    <div class="split-copy"><h2>Helping a local business reinvent itself</h2><p>From the first idea to the final detail, we focus on the small decisions that make a digital experience feel effortless. Our process keeps your goals and your customers at the centre.</p><a class="button" href="#contact">Explore our work <span>→</span></a></div>
  </div>
</section>
<section class="testimonial-section section-pad">
  <div class="container testimonial-layout">
    <div class="testimonial-mark">“</div>
    <div><p class="testimonial-quote">Maecenas dignissim justo eget nulla rutrum molestie. Maecenas lobortis sem dui, vel rutrum risus tincidunt ullamcorper. Proin eu enim metus. Vivamus sed libero ornare, tristique quam in, gravida enim. Nullam ut molestie arcu, at hendrerit elit. Morbi laoreet elit at ligula molestie, nec molestie mi blandit. Suspendisse cursus tellus sed augue ultrices, quis tristique nulla sodales. Suspendisse eget lorem eu turpis vestibulum pretium. Suspendisse potenti. Quisque malesuada enim sapien, vitae placerat ante feugiat eget. Quisque vulputate odio neque, eget efficitur libero condimentum id. Curabitur id nibh id sem dignissim finibus ac sit amet magna.</p><p class="testimonial-author">Tim Smith <span>British Dragon Boat Racing Association</span></p>
      <div class="testimonial-bottom"><div class="mini-logos"><?php for ($i = 1; $i <= 5; $i++): ?><img src="assets/Logo<?= $i === 1 ? '' : ' (' . ($i - 1) . ')'; ?>.png" alt="Partner logo"><?php endfor; ?></div><a href="#contact" class="text-link">Meet our clients →</a></div>
    </div>
  </div>
</section>
<section class="blog-section section-pad" id="blog">
  <div class="container">
    <div class="section-heading"><h2>Caring is the new marketing</h2><p>The Nextcent blog is the best place to read about the latest membership insights, trends and more. See who's joining the community, read about how our community are increasing their membership income and lot's more.​</p></div>
    <div class="blog-grid">
      <article class="blog-card"><img src="assets/image 18.png" alt="Person working on a laptop from home"><div class="blog-card-content"><h3>Creating Streamlined Safeguarding Processes with <br> OneRen</h3><a href="#contact">Read more →</a></div></article>
      <article class="blog-card"><img src="assets/image 19.png" alt="Business analytics and planning on a laptop"><div class="blog-card-content"><h3>What are your safeguarding responsibilities and how can you manage them?</h3><a href="#contact">Read more →</a></div></article>
      <article class="blog-card"><img src="assets/image 20.png" alt="Workspace with a laptop and digital content"><div class="blog-card-content"><h3>Revamping the Membership Model with Triathlon <br>Australia</h3><a href="#contact">Read more →</a></div></article>
    </div>
  </div>
</section>
<section class="cta-section" id="contact"><div class="container cta-inner"><h2>Pellentesque suscipit <br> fringilla libero eu.</h2><a class="button" href="#services">Explore features <span>→</span></a></div></section>
<?php include __DIR__ . '/includes/footer.php'; ?>
