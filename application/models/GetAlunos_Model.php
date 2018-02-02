<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetAlunos_Model extends CI_Model {

	public function getTable() {
		return 'alunos';
	}

	public function getListAlunos(array $arrWhere = array()) {

		if($arrWhere) {
			$arrWhereAux = array();
			foreach($arrWhere as $intKey => $strValue) {
				$arrWhereAux[$intKey] = array($intKey => $strValue);
				$this->db->where($arrWhereAux[$intKey]);
			}
		}

		$strSQL = $this->db->get($this->getTable());

		return $strSQL->result(); 
	}
	
}