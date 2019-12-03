<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mchart extends CI_Model 
{
	public function datamhs()
	{
		return $this->db->count_all_results('data_mhs');
	}

	public function jmllk()
	{
		return $this->db->where(array('jk'=>'Laki-Laki'))->count_all_results('data_mhs');
	}

	public function jmlpr()
	{
		return $this->db->where(array('jk'=>'Perempuan'))->count_all_results('data_mhs');
	}

}