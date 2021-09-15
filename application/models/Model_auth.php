<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_auth extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function check_username($username) 
	{
		if($username) {
			$sql = 'SELECT * FROM user WHERE user_name = ?';
			$query = $this->db->query($sql, array($username));
			$result = $query->num_rows();
			return ($result == 1) ? true : false;
		}

		return false;
	}

	/* 
		This function checks if the email and password matches with the database
	*/
	public function login($username, $password) {
		if($username && $password) {
			$sql = "SELECT * FROM user WHERE user_name = ?";
			$query = $this->db->query($sql, array($username));

			if($query->num_rows() == 1) {
				$result = $query->row_array();

                $sqlp = "SELECT * FROM user WHERE user_password = ?";
                $query = $this->db->query($sqlp, array(md5($password)));
				if($query->num_rows() == 1) {
					return $result;	
				}
				else {
					return false;
				}
			}
			else {
				return false;
			}
		}
	}
}
