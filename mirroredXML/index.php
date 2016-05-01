<?php
  // Best practice would be to cache the data retrieved from the external URL on your server to reduce calls.
  header('Content-type: application/xml');
  echo file_get_contents('https://www.exec-appointments.com/widget/jobs/;i=1');
?>