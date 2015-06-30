<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$config['action_base_dir'] = APPPATH.'actions';
$config['action_root_name'] = 'root';


define('ASSET_BASE_URL', 'http://vpnadmin.zenboss.com/static/asset');
define('ASSET_BASE_URL_HTTPS', 'https://vpnadmin.zenboss.com/static/asset');
// $config['asset_base_url'] = 'http://www.gamewt.com/static/asset/';
// $config['asset_base_url_https'] = 'https://www.gamewt.com/static/asset/';

define('STATIC_BASE_URL', 'http://vpnadmin.zenboss.com/static/');
define('STATIC_BASE_URL_HTTPS', 'https://vpnadmin.zenboss.com/static/');
// $config['static_base_url'] = 'http://www.gamewt.com/static/';
// $config['static_base_url_https'] = 'https://www.gamewt.com/static/';

define('GWT_ASSET_BASE_URL','//www.vpnboss.com/static/vpnboss/asset/');
define('GWT_ASSET_BASE_URL_HTTPS','https://www.vpnboss.com/static/vpnboss/asset/');
define('GWT_STATIC_BASE_URL','//www.vpnboss.com/static/vpnboss/');
define('GWT_STATIC_BASE_URL_HTTPS','https://www.vpnboss.com/static/vpnboss/');


$config['route_close_session_preg_list'] = null;

$config['route_open_session_preg_list'] = null;

$config['session_model_table_name'] = 'session';