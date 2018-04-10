<?php

namespace Drupal\demo_time\Controller;

use Drupal\Core\Controller\ControllerBase;


/**
 * An example controller.
 */
class DemoTimeController extends ControllerBase {

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
    $markup .= ' | ';
    $markup .= '<a href="/demotime/oneplus">Or see different markup here!</a>';

    $markup .= "<hr />";

    $markup .= "<h2>Demo 2: Combine two PDFs</h2>";
    $markup .= '<p><a href="/demotime/two">Click here to see the combination of the the previous two files!</a></p>';

    $markup .= '<hr />';

    $markup .= "<h2>Demo 3: Dump PDF into File Field</h2>";
    $markup .= '<p><a href="/demotime/three">Watch as the combined file gets saved to a file field!</a></p>';

    $markup .= '<hr />';

    $markup .= "<h2>Demo 4: Fill in a PDF Template</h2>";
    $markup .= '<p><a href="/demotime/four">Click here to fill in a template!</a></p>';

    $markup .= '<hr />';

    $markup .= "<h2>Demo 5: Put a Password on a PDF</h2>";
    $markup .= '<p><a href="/demotime/five">Password protect a PDF!</a></p>';

    $build = [
      '#markup' => $markup,
    ];
    return $build;

  }

}