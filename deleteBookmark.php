<?php
  header('Content-type: application/json');
  $xml = @simplexml_load_file(substr($_SERVER["REQUEST_URI"],strpos($_SERVER["REQUEST_URI"],'?')+1).'&'.$HTTP_RAW_POST_DATA);
  echo json_encode(array('success' => isset($xml->{'Success'})));
?>
