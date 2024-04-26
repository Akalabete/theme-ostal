
<?php 
        $phone_number = get_option('ostal_settings_field_phone_number');
        $email = get_option('ostal_settings_field_email');
        $mobile_number = get_option('ostal_settings_field_mobile_number');
      ?>

      <footer class="footer">
      <div class="footer-container">
        <div class="footer-item">
            <p>© <?php echo date('Y') . ' ' . __('Ostal Numérique', 'ostal'); ?></p>
            <p><?php echo $email; ?></p>
            <p><?php echo $phone_number; ?></p>
            <p><?php echo $mobile_number; ?></p>
        </div>
        <div class="footer-item">
            <p>by <a href="www.lacouralexandre.tech" target="_blank" id="webmaster">Dev'your synergy</a></p>
        </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>