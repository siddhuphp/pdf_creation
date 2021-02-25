<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pdf_creation extends CI_Controller {

	public function index()
	{
		echo "Lord ganesh ki jai";
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>Hello world!</h1>');
        $mpdf->Output();
	}
}
