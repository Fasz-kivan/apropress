<?php
defined( 'ABSPATH' ) || exit;

$rocket_cookie_hash = 'fd7fc32626021988581b20456cf6528d';
$rocket_logged_in_cookie = 'wordpress_logged_in_fd7fc32626021988581b20456cf6528d';
$rocket_cache_mobile_files_tablet = 'desktop';
$rocket_cache_mobile = 1;
$rocket_cache_reject_uri = '/apropress(/(.+/)?feed/?.+/?|/(?:.+/)?embed/|/kosar/(.*)|/kosar-2/|/wc-api/v(.*)|/(index\.php/)?wp\-json(/.*|$))';
$rocket_cache_reject_cookies = 'wordpress_logged_in_.+|wp-postpass_|wptouch_switch_toggle|comment_author_|comment_author_email_';
$rocket_cache_reject_ua = 'facebookexternalhit';
$rocket_cache_query_strings = array();
$rocket_secret_cache_key = '63d416278732f434454266';
$rocket_cache_ssl = 1;
$rocket_do_caching_mobile_files = 0;
$rocket_cache_ignored_parameters = array(
  'utm_source' => 1,
  'utm_medium' => 1,
  'utm_campaign' => 1,
  'utm_expid' => 1,
  'utm_term' => 1,
  'utm_content' => 1,
  'mtm_source' => 1,
  'mtm_medium' => 1,
  'mtm_campaign' => 1,
  'mtm_keyword' => 1,
  'mtm_cid' => 1,
  'mtm_content' => 1,
  'pk_source' => 1,
  'pk_medium' => 1,
  'pk_campaign' => 1,
  'pk_keyword' => 1,
  'pk_cid' => 1,
  'pk_content' => 1,
  'fb_action_ids' => 1,
  'fb_action_types' => 1,
  'fb_source' => 1,
  'fbclid' => 1,
  'campaignid' => 1,
  'adgroupid' => 1,
  'adid' => 1,
  'gclid' => 1,
  'age-verified' => 1,
  'ao_noptimize' => 1,
  'usqp' => 1,
  'cn-reloaded' => 1,
  '_ga' => 1,
  'sscid' => 1,
);
$rocket_cache_mandatory_cookies = '';
$rocket_cache_dynamic_cookies = array();
