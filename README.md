# DEMO TIME!

A Drupal 8 module demonstrating some Stupid PDF Tricks. Created for the PDFs in Drupal session at DrupalCon Nashville 2018.

You can view the slidedeck here: https://docs.google.com/presentation/d/1gIe-8luEgM-XdGSu4Ch59z91plDaz8xCHsVI-xJ06FQ/edit?usp=sharing

## Necessary Libraries

This session is mostly based around the libraries used to implement this functionality. Here are the component libraries you'll need to pull in to get this running, use composer to install:

- dompdf/dompdf
- setasign/fpdi
- setasign/fpdi-protection
- mikehaertl/php-pdftk
          
### But Wait! There's more!

This module also leans heavily on the PDFtk binary, so make sure that's installed on your machine. You can find the binaries here: https://www.pdflabs.com/tools/pdftk-server/

## Not-So-Necessary Libraries

Many libraries were referenced in the talk but are not actually use in this module. Here they are if you're looking to implement them:

- mikehaertl/phpwkhtmltopdf
- h4cc/wkhtmltopdf-amd64 (there's also an i386 version; use this to install wkhtmltopdf without having to fiddle with the library!)
- tecnickcom/tcpdf
- mpdf/mpdf

### Drupal Modules

Some Drupal modules referenced during the talk:

- drupal/printable (Will not install with a current version of DOMPDF)
- drupal/entity_print
- drupal/fillpdf
