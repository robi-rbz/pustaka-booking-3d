<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function penjumlahan($n1, $n2)
	{
		$this->load->model('Model_latihan1');
		$hasil = $this->Model_latihan1->jumlah($n1, $n2);
		echo "hasil Penjumlahan dari" . $n1 . "+" . $n2 . "=" . $hasil;

		// $this->load->view('view-latihan', $hasil);
	}
}
