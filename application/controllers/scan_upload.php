<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class scan_upload extends CI_Controller {

	function do_upload()
{ 
foreach ($_FILES["scandoc"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["scandoc"]["tmp_name"][$key];
        $name = $_FILES["scandoc"]["name"][$key];
        move_uploaded_file($tmp_name, "scan_uploads/$name");
    	
    	}
	}

redirect('site/scan_doc');	

	}

}