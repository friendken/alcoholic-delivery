<?php
require_once dirname(dirname(__FILE__)).'/core/Init.php';
require_once dirname(dirname(__FILE__)).'/classes/Contact.php';
require_once dirname(dirname(__FILE__)).'/core/Input.php';

$contacts = new Contact();

if (Input::exists('POST'))
{
  if (Input::get('contact_id')) {
    $contacts->delete(Input::get('contact_id'));
  }
}