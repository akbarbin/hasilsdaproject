<?php

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