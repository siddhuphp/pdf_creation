<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pdf_creation extends CI_Controller {

	public function index()
	{
		$mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>Hello world!</h1>');
        $mpdf->Output();
	}

    public function sample()
	{
		$mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>Hello world!</h1>');
        $mpdf->Output();
	}

    public function with_html_page()
	{
		$mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('html_to_pdf',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
	}

    public function with_html_page_data()
	{
		$mpdf = new \Mpdf\Mpdf();
        $data["data"] = ["name"=>"Siddhu","age"=>"29"];
        $html = $this->load->view('html_to_pdf',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
	}

    public function save_file()
	{
        /* 
            D => dowonload
            F => save only
            $mpdf->Output("FilePath",F);
        */

		$mpdf = new \Mpdf\Mpdf();
        $data["data"] = ["name"=>"Siddhu","age"=>"29"];
        $html = $this->load->view('html_to_pdf',$data,true);
        $mpdf->WriteHTML($html);
        $file_path = "assets/pdf/my_pdf.pdf";
        $mpdf->Output($file_path,"F");
	}
}
