<?php

namespace Drupal\demo_time\Controller;

use Drupal\Core\Controller\ControllerBase;
use Dompdf\Dompdf;


/**
 * An example controller.
 */
class DTOneController extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  public function content() {

    $markup = '';

    $markup .= "<h2>Demo 1: Make a PDF from HTML</h2>";
    $markup .= '<div style="border: 1px solid #000000; background-color: orange;">';
    $markup .= "<p>Click the link below to render this HTML to a PDF</p>";
    $markup .= '</div>';
    $markup .= '<a href="/demotime/one">Click here!</a>';

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