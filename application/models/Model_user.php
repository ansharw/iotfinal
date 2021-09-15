<?php

class Model_user extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

    public function create($data)
    {
        if ($data) {
            $insert = $this->db->insert('user', $data);
            return ($insert == true) ? true : false;
        }
    }
}
