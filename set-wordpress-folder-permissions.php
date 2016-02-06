<?php
  // define a list of wordpress root folder.
  $wp = array(
    '/var/www/justyy.com/',
    '/var/www/helloacm.com/',
    '/var/www/codingforspeed.com/'
  );
  
  foreach ($wp as $site) {
    echo "Processing $site ...\n";
    chmod($site, 0755);
    chmod($site . 'wp-includes', 0755);
    chmod($site . 'wp-admin', 0755);
    chmod($site . 'wp-admin/js', 0755);
    chmod($site . 'wp-admin', 0755);
    chmod($site . 'wp-content/themes', 0755);
    chmod($site . 'wp-content/plugins', 0755);
    chmod($site . 'wp-content', 0755);
    chmod($site . 'wp-content/uploads', 0755);
    chmod($site . 'wp-config.php', 0444);
    chmod($site . '.htaccess', 0444);
  }
  
  echo "Done.\n";
  ?>
