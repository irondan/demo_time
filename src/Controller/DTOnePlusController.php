<?php

namespace Drupal\demo_time\Controller;

use Drupal\Core\Controller\ControllerBase;
use Dompdf\Dompdf;


/**
 * An example controller.
 */
class DTOnePlusController extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  public function content() {

    $markup = '';

    $markup .= "<h2>Here's some different stuff</h2>";
    $markup .= '<div style="border: 1px solid #000000; background-color: cyan;">';
    $markup .= "<p>Even an image</p>";
    $markup .= '<img src="'. $_SERVER['DOCUMENT_ROOT'] . base_path() .'/modules/custom/demo_time/img/logo.png">';
    $markup .= '</div>';

    // Example direct from https://github.com/dompdf/dompdf

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml($markup);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('Letter', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();

    exit();
  }

}