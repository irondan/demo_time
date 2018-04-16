<?php

namespace Drupal\demo_time\Controller;

use Drupal\Core\Controller\ControllerBase;
use mikehaertl\pdftk\Pdf;


/**
 * An example controller.
 */
class DTFiveController extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  public function content() {

    // In my talk I made allusions to the idea that the best way to do this might be to use FPDI and FPDI_Protection
    // Loading tha tlibrary is a bit of a mess; since we're already using PDFtk this can be done a lot more simply

    $pdf = new Pdf($_SERVER['DOCUMENT_ROOT'] . base_path() .'/modules/custom/demo_time/files/html-sample.pdf');

    $pdf->setUserPassword('passW0RD');
    $pdf->passwordEncryption(128);

    $pdf->send();

    exit();

  }

}