<?php
defined('BASEPATH') OR exit('No direct script access allowed');


require_once( BASEPATH .'database/DB.php' );

$db =& DB();
$query = $db->query( 'select slug from routes order by slug asc' );
$result = $query->result();

foreach( $result as $row )
{
    $route[ $row->slug ]                 = 'InitController/seccion';
    $route[ $row->slug.'/(:any)' ]         = 'InitController/seccion';
}

$route['default_controller'] = 'InitController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//print( "<pre>" . print_r( $route, TRUE) . "</pre>");