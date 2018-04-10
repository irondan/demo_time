<?php

namespace Drupal\demo_time\Controller;

use Drupal\Core\Controller\ControllerBase;
use mikehaertl\pdftk\Pdf;


/**
 * An example controller.
 */
class DTTwoController extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  public function content() {

    // Example taken from https://packagist.org/packages/mikehaertl/php-pdftk

    // Combine pages from several files, demonstrating several ways how to add files
    $pdf = new Pdf([
      'A' => $_SERVER['DOCUMENT_ROOT'] . base_path() .'/modules/custom/demo_time/files/html-sample.pdf',                 // A is alias for file1.pdf
      'B' => $_SERVER['DOCUMENT_ROOT'] . base_path() .'/modules/custom/demo_time/files/image-sample.pdf',  // B is alias for file2.pdf
    ]);
    $pdf->send();

  }

}