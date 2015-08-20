<?php 
require_once('template/head.php');
require_once('template/top_navigation.php');
//require_once('template/body_header.php');
//require_once('template/navigation.php');
require_once('template/slider.php');
$this->load->view($page);
require_once('template/footer.php');

?>
