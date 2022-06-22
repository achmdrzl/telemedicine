<?php
function render($link, $data)
{
  $a = get_instance();
  $a->load->view('admin/template/header');
  $a->load->view('admin/template/sidebar');
  $a->load->view($link, $data);
  $a->load->view('admin/template/footer');
}
