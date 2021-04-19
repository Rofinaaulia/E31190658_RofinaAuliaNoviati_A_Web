<?php
 class Template { 
 protected $_ci; 
 function __construct() { 
 $this->_ci = &get_instance(); 
 } 
 function views($template = NULL, $data = NULL) { 
 if ($template != NULL) { 
 // Bagian $data['head'] untuk memanggil file head.php dari folder 
// Admin/_Template/ 
 // ['head'] data yang kita panggil dari file template.php dari folder 
// Admin/_Template/ 
 $data['head'] = $this->_ci->load->view('admin/head', $data, TRUE); 
 
// Bagian $data['topbar'] untuk memanggil file topbar.php dari folder 
// admin/ 
// ['topbar'] data yang kita panggil dari file template.php dari folder 
// admin/ 
 $data['topbar'] = $this->_ci->load->view('admin/topbar', $data, TRUE); 
 
// Bagian $data['sidebar'] untuk memanggil file sidebar.php dari folder 
// admin/ 
// ['sidebae'] data yang kita panggil dari file template.php dari folder 
// admin/ 
 $data['sidebar'] = $this->_ci->load->view('admin/sidebar', $data, TRUE); 
 
// ['konten'] data yang kita panggil dari file content.php dari folder 
// admin/ 
 $data['konten'] = $this->_ci->load->view($template, $data, TRUE); 
 
// Bagian $data['content'] untuk memanggil file content.php dari folder 
// admin/ 
// ['content'] data yang kita panggil dari file template.php dari folder 
// admin/ 
$data['content'] = $this->_ci->load->view('admin/content', $data, TRUE); 
 
// Bagian $data['footer'] untuk memanggil file footer.php dari folder 
// admin/ 
// ['footer'] data yang kita panggil dari file template.php dari folder 
// admin/ 
$data['footer'] = $this->_ci->load->view('admin/footer', $data, TRUE); 
 
 
// Bagian $data['template'] untuk menampilkan file template.php dari folder 
// admin/ 
// view('admin/Template', $data, TRUE); untuk memanggil $data diatas 
// seperti $data['head'], dll 
echo $data['Template']= $this->_ci->load->view('admin/overview', $data, TRUE); }}}?> 