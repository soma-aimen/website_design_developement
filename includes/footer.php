</main>
<footer class="site-footer">
  <div class="container footer-main">
    <div class="footer-brand-column">
      <a class="footer-brand" href="#home" aria-label="Nexcent home">
        <span class="footer-logo-wrap"><img src="assets/Icon.png" alt="Nexcent logo"></span>
        <span>Nexcent</span>
      </a>
      <p class="footer-copyright">Copyright © <?= date('Y'); ?> Nexcent.<br>All rights reserved.</p>
      <div class="social-links" aria-label="Social media">
        <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
          <img src="assets/TIcons.png" alt="">
        </a>
        <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
          <img src="assets/IIcons.png" alt="">
        </a>
        <a href="https://www.whatsapp.com/" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
          <img src="assets/WIcons.png" alt="">
        </a>
        <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
          <img src="assets/YIcons.png" alt="">
        </a>
      </div>
    </div>
    <div class="footer-links-column">
      <h3>Company</h3>
      <a href="#home">About us</a>
      <a href="#blog">Blog</a>
      <a href="#portfolio">Our work</a>
      <a href="#portfolio">Pricing</a>
      <a href="#community">Community</a>
    </div>
    <div class="footer-links-column">
      <h3>Support</h3>
      <a href="#services">Features</a>
      <a href="#services">Help center</a>
      <a href="#home">Privacy policy</a>
      <a href="#home">Terms of service</a>
    </div>
    <div class="footer-newsletter">
      <h3>Stay up to date</h3>
      <form class="newsletter-form">
        <label class="visually-hidden" for="newsletter-email">Your email address</label>
        <input id="newsletter-email" type="email" placeholder="Your email address" autocomplete="email">
        <button type="button" aria-label="Subscribe to newsletter">
          <svg class="newsletter-send-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <path d="M22 2 11 13"></path>
            <path d="m22 2-7 20-4-9-9-4 20-7Z"></path>
          </svg>
        </button>
      </form>
    </div>
  </div>
</footer>
<script src="javascript/nexcent.js" defer></script>
</body>
</html>
