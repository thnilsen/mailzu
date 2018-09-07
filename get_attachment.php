<?php
/**
* This file is the 'get attachment' functionality. Logged in users can:
* - download an attachment
*
* @author Christopher Kramer
* @version 2018-09-07
* @package MailZu
*
* Copyright (C) 2018 MailZu
* License: GPL, see LICENSE
*/

include_once('lib/Auth.class.php');
include_once('lib/MailMime.class.php');

// empty because MsgParseBody calls it but we don't want to print 
function MsgBodyPlainText() {}

/*
* Include MailEngine class
*/
include_once('lib/MailEngine.class.php');

if (!Auth::is_logged_in()) {
    Auth::print_login_msg();	// Check if user is logged in
}

$mail_id = CmnFns::get_mail_id();
$content_type = CmnFns::getGlobalVar('ctype', GET);
$recip_email = CmnFns::getGlobalVar('recip_email', GET);
$query_string = CmnFns::querystring_exclude_vars( array('mail_id','recip_email') );

$m = new MailEngine($mail_id,$recip_email);

if ( ! $m->msg_found) {
  CmnFns::do_error_box(translate('Message Unavailable'));

} else {

  MsgParseBody($m->struct);

  if(isset($fileContent[$_GET['fileid']])) {

     header('Content-Type: application/octet-stream');
     header("Content-Transfer-Encoding: Binary"); 
     header("Content-disposition: attachment; filename=\"" . basename($filelist[$_GET['fileid']]) . "\""); 
     echo $fileContent[$_GET['fileid']];
  }

}



