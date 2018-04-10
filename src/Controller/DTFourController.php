<?php

namespace Drupal\demo_time\Controller;

use Drupal\Core\Controller\ControllerBase;
use mikehaertl\pdftk\Pdf;


/**
 * An example controller.
 */
class DTFourController extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  public function content() {

    // Fill form with data array
    $pdf = new Pdf($_SERVER['DOCUMENT_ROOT'] . base_path() .'/modules/custom/demo_time/files/fillable.pdf');
    $pdf->fillForm([
      'Text1'=>'WOOOOOOOO!',
    ])
      ->needAppearances()
      ->send('filled.pdf');

    exit();
  }

}