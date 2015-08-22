<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

if (!function_exists('current_user')) {

  // get data user yang sedang login
  function current_user() {
    $CI = & get_instance();
    $CI->load->database();
    $CI->load->model('Users_model');
    $CI->load->library('session');

    $session_logged_in = $CI->session->userdata('logged_in');
    if (isset($session_logged_in)) {
      return $CI->Users_model->find_by_id($session_logged_in['session_usr_id']);
    }
  }

}

//FIX ME: change into instance method
if (!function_exists('set_flash_notice')) {

  function set_flash_notice($data_flash) {
    if (!empty($data_flash)) {
      $html = "<div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"alert alert-" . $data_flash['class'] . "\">"
              . "" . $data_flash['message'] . "</div>
                    </div>
                </div>";
      return $html;
    }
  }

}

//FIX ME: change into instance method
if (!function_exists('set_validation_error')) {

  function set_validation_error() {
    $message_validation = validation_errors();
    if (!empty($message_validation)) {
      $html = "<div class=\"row\">
                    <div class=\"col-md-8 col-sm-8\">
                        <div class=\"panel panel-danger\">
                            <div class=\"panel-heading\">
                                Pesan error
                            </div>
                            <div class=\"panel-body\">
                                " . $message_validation . "
                            </div>
                        </div>
                    </div>
                </div>";
      return $html;
    }
  }

}

if (!function_exists('convert_display_created_at')) {

  function convert_display_created_at($portofolio) {
    return date("d F Y", strtotime($portofolio['created_at']));
  }

}

if (!function_exists('convert_display_updated_at')) {

  function convert_display_updated_at($portofolio) {
    return date("d F Y", strtotime($portofolio['updated_at']));
  }

}


if (!function_exists('convert_display_obj_created_at')) {

  function convert_display_obj_created_at($obj) {
    return date("d F Y", strtotime($obj->created_at));
  }

}

if (!function_exists('convert_display_obj_updated_at')) {

  function convert_display_obj_updated_at($obj) {
    return date("d F Y", strtotime($obj->updated_at));
  }

}

if (!function_exists('get_image_by_version')) {

  function get_image_by_version($obj, $type, $upload_location, $default = 'application/assets/images/default_img2.png') {

    $file_path = $upload_location . $obj['id'] . "/$type/" . $obj['photo'];
    if (!is_file(FCPATH . $file_path)) {
      return base_url() . $default;
    } else {
      return base_url() . $file_path;
    }
  }

}

if (!function_exists('get_orig_img')) {

  function get_orig_img($obj, $upload_location, $field = 'photo', $default = 'application/assets/images/default_img2.png') {

    $file_path = $upload_location . $obj[$field];
    if (!is_file(FCPATH . $file_path)) {
      return base_url() . $default;
    } else {
      return base_url() . $file_path;
    }
  }

}

if (!function_exists('set_default_value')) {

  function set_default_value($field = '', $default = '', $method = NULL) {
    if (isset($method)) {
      if (isset($_GET[$field])) {
        $default = $_GET[$field];
      }
    } else {
      if (isset($_POST[$field])) {
        $default = $_POST[$field];
      }
    }
    return $default;
  }

}

if (!function_exists('ci_yield')) {

  function ci_yield() {
    $CI = & get_instance();
    $CI->load->view($CI->router->directory . $CI->router->class . '/' . $CI->router->method);
  }

}

if (!function_exists('rightside_tag_articles')) {

  function rightside_tag_articles($tags) {
    return explode(',', $tags);
  }

}

if (!function_exists('set_html_tag_articles')) {

  function set_html_tag_articles($tags) {
    $array_tags = explode(',', $tags);
    $join_html = array();
    foreach ($array_tags as $tag) {
      $join_html[] = "<a>$tag</a>";
    }
    $html = implode(' /', $join_html);
    return $html;
  }

}

if (!function_exists('get_skills_list')) {

  // get data user yang sedang login
  function get_skills_list($skills) {
    $skills_array = explode(',', $skills);

    $list = '<ul class="tag clearfix">';
    foreach ($skills_array as $skill) {
      $list .= '<li class="btn"><a href="#">' . $skill . '</a></li>';
    }
    $list .= '</ul>';
    return $list;
  }

}