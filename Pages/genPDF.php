<?php

require_once 'C:\xampp\htdocs\projet\vendor/autoload.php'; //we've assumed that the dompdf directory is in the same directory as your PHP file. If not, adjust your autoload.inc.php i.e. first line of code accordingly.

// reference the Dompdf namespace

use Dompdf\Dompdf;

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->set_option('chroot', getcwd()); //assuming HTML file is in the root folder
    try {

        $dompdf->loadHtmlFile("inscription.html");

       // $dompdf->getCanvas();
        //$dompdf->loadDOM('div');
    } catch (\Dompdf\Exception $e) {
        print $e;
    }

// Render the HTML as PDF
    $dompdf->render();

    $dompdf->stream("portfolio.pdf");

//Save to disk
    //$output = $dompdf->output();
    //file_put_contents("Portfolio.pdf", $output);







