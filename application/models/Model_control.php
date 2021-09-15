<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Model_control extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function sendtoDB($data)
    {
        if ($data) {
            $insert = $this->db->insert('SensorData', $data);
            return ($insert == true) ? true : false;
        }
    }

    public function getSuhu($id = null)
    {
        if ($id) {
            $sql = "SELECT suhu, suhu1, suhu2, suhu3, suhu4, suhuLuar FROM SensorData WHERE id = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT suhu, suhu1, suhu2, suhu3, suhu4, suhuLuar FROM SensorData ORDER BY id DESC";
        $query = $this->db->query($sql);
        return $query->result_array();

        // database Localhost
        // if ($id) {
        //     $sql = "SELECT suhu, suhu1, suhu2, suhu3, suhu4, suhuLuar FROM temhumkiplam WHERE temp_hum_id = ?";
        //     $query = $this->db->query($sql, array($id));
        //     return $query->row_array();
        // }

        // $sql = "SELECT suhu, suhu1, suhu2, suhu3, suhu4, suhuLuar FROM temhumkiplam ORDER BY temp_hum_id DESC";
        // $query = $this->db->query($sql);
        // return $query->result_array();
    }

    public function getKelembaban($id = null)
    {
        if ($id) {
            $sql = "SELECT kelembaban, kelembaban1, kelembaban2, kelembaban3, kelembaban4, kelembabanLuar FROM SensorData WHERE id = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT kelembaban, kelembaban1, kelembaban2, kelembaban3, kelembaban4, kelembabanLuar FROM SensorData ORDER BY id DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
        
        // Database Localhost
        // if ($id) {
        //     $sql = "SELECT kelembaban, kelembaban1, kelembaban2, kelembaban3, kelembaban4, kelembabanLuar FROM temhumkiplam WHERE temp_hum_id = ?";
        //     $query = $this->db->query($sql, array($id));
        //     return $query->row_array();
        // }

        // $sql = "SELECT kelembaban, kelembaban1, kelembaban2, kelembaban3, kelembaban4, kelembabanLuar FROM temhumkiplam ORDER BY temp_hum_id DESC";
        // $query = $this->db->query($sql);
        // return $query->result_array();
    }

    public function getLampuKipas($id = null)
    {
        if ($id) {
            $sql = "SELECT outLampu, outKipas FROM SensorData WHERE id = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT outLampu, outKipas FROM SensorData ORDER BY id DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
        
        // Database Localhost
        // if ($id) {
        //     $sql = "SELECT outLampu, outKipas FROM temhumkiplam WHERE temp_hum_id = ?";
        //     $query = $this->db->query($sql, array($id));
        //     return $query->row_array();
        // }

        // $sql = "SELECT outLampu, outKipas FROM temhumkiplam ORDER BY temp_hum_id DESC";
        // $query = $this->db->query($sql);
        // return $query->result_array();
    }

    public function getSetPoint($id = null)
    {
        if ($id) {
            $sql = "SELECT setPointSuhu, setPointKelembaban FROM SensorData WHERE id = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT setPointSuhu, setPointKelembaban FROM SensorData ORDER BY id DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
        
        // Database localhost
        // if ($id) {
        //     $sql = "SELECT setPointSuhu, setPointKelembaban FROM temhumkiplam WHERE temp_hum_id = ?";
        //     $query = $this->db->query($sql, array($id));
        //     return $query->row_array();
        // }

        // $sql = "SELECT setPointSuhu, setPointKelembaban FROM temhumkiplam ORDER BY temp_hum_id DESC";
        // $query = $this->db->query($sql);
        // return $query->result_array();
    }
}
?>