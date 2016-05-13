<?php
header('Content-type: text/css');
ob_start("compress");

  function compress($buffer) {
    /* remove comments */
      $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);

      /* remove tabs, spaces, newlines, etc. */
      $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);

      return $buffer;
  }

  /* css files for compression */
  include('bootstrap.min.css');
  include('style.css');

ob_end_flush();
?>