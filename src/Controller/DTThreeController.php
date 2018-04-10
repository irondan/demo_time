<?php

namespace Drupal\demo_time\Controller;

use Drupal\Core\Controller\ControllerBase;
use \Drupal\node\Entity\Node;
use \Drupal\file\Entity\File;
use mikehaertl\pdftk\Pdf;
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\RedirectResponse;


/**
 * An example controller.
 */
class DTThreeController extends ControllerBase {

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
    $pdf->execute();
    $content = file_get_contents( (string) $pdf->getTmpFile() );

    // Create file object from remote URL.
    $file = file_save_data($content, 'public://testfile.pdf', FILE_EXISTS_RENAME);

    // Create node object with attached file.
    $node = Node::create([
      'type'        => 'test',
      'title'       => 'Drupalcon Node!',
      'field_pdf_field' => [
        'target_id' => $file->id(),
        'alt' => 'A PDF',
        'title' => 'This combined PDF'
      ],
    ]);
    $node->save();

    $response = new RedirectResponse('/node/' . $node->id());
    $response->send();
    return;

  }

}