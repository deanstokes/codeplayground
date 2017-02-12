<?php
  [...]
  $post_data['destination'] = 'https://www.youtube.com/channel/UCHK4HD0ltu1-I212icLPt3g';
  $post_data['slashtag'] = 'A_NEW_SLASHTAG';
  $post_data['title'] = 'Rebrandly YouTube channel';
  $ch = curl_init('https://api.rebrandly.com/v1/links');
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'apikey: df35d3a5c9944e589b41e9b0a4efa4bb',
      'Content-Type: application/json'
  ));
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
  $result = curl_exec($ch);
  curl_close($ch);
  $response = json_decode($result, true);
  print "Short URL is: " . $response['shortUrl'];
?>
