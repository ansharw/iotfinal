<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Model_control extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // public function sendtoDB($data)
    // {
    //     if ($data) {
    //         $insert = $this->db->insert('SensorData', $data);
    //         return ($insert == true) ? true : false;
    //     }
    // }

    public function getAllData()
    {
        $sql = "SELECT suhu, suhu1, suhu2, suhu3, suhu4, suhuLuar, kelembaban, kelembaban1, kelembaban2, kelembaban3, kelembaban4, kelembabanLuar, setPointSuhu, setPointKelembaban, outLampu, outKipas, outPompa, date_format(waktu, '%Y-%m-%e %H:%i') as waktu FROM SensorData ORDER BY waktu DESC LIMIT 20";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getSuhu($id = null)
    {
        if ($id) {
            $sql = "SELECT suhu, suhu1, suhu2, suhu3, suhu4, suhuLuar, date_format(waktu, '%Y-%m-%e %H:%i') as waktu FROM SensorData WHERE id = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT suhu, suhu1, suhu2, suhu3, suhu4, suhuLuar, date_format(waktu, '%Y-%m-%e %H:%i') as waktu FROM SensorData ORDER BY id DESC";
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

    // public function getSuhuChart($id = null)
    // {
    //     if ($id) {
    //         $sql = "SELECT suhu, suhu1, suhu2, suhu3, suhu4, suhuLuar, date_format(waktu, '%Y-%m-%e %H:%i') as waktu FROM SensorData WHERE id = ?";
    //         $query = $this->db->query($sql, array($id));
    //         return $query->row_array();
    //     }

    //     $sql = "SELECT suhu, suhu1, suhu2, suhu3, suhu4, suhuLuar, date_format(waktu, '%Y-%m-%e %H:%i') as waktu FROM SensorData ORDER BY id DESC";
    //     $query = $this->db->query($sql);
    //     return $query->result_array();
    // }

    public function getKelembaban($id = null)
    {
        if ($id) {
            $sql = "SELECT kelembaban, kelembaban1, kelembaban2, kelembaban3, kelembaban4, kelembabanLuar, date_format(waktu, '%Y-%m-%e %H:%i') as waktu FROM SensorData WHERE id = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT kelembaban, kelembaban1, kelembaban2, kelembaban3, kelembaban4, kelembabanLuar, date_format(waktu, '%Y-%m-%e %H:%i') as waktu FROM SensorData ORDER BY id DESC";
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

    public function getLampu($id = null)
    {
        if ($id) {
            $sql = "SELECT outLampu, date_format(waktu, '%Y-%m-%e %H:%i') as waktu FROM SensorData WHERE id = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT outLampu, date_format(waktu, '%Y-%m-%e %H:%i') as waktu FROM SensorData ORDER BY id DESC";
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

    public function getKipas($id = null)
    {
        if ($id) {
            $sql = "SELECT outKipas, date_format(waktu, '%Y-%m-%e %H:%i') as waktu FROM SensorData WHERE id = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT outKipas, date_format(waktu, '%Y-%m-%e %H:%i') as waktu FROM SensorData ORDER BY id DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function getPompa($id = null)
    {
        if ($id) {
            $sql = "SELECT outPompa, date_format(waktu, '%Y-%m-%e %H:%i') as waktu FROM SensorData WHERE id = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT outPompa, date_format(waktu, '%Y-%m-%e %H:%i') as waktu FROM SensorData ORDER BY id DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getSetPoint($id = null)
    {
        if ($id) {
            $sql = "SELECT setPointSuhu, setPointKelembaban, date_format(waktu, '%Y-%m-%e %H:%i') as waktu FROM SensorData WHERE id = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT setPointSuhu, setPointKelembaban, date_format(waktu, '%Y-%m-%e %H:%i') as waktu FROM SensorData ORDER BY id DESC";
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

    public function getSetPointChart($id = null)
    {
        if ($id) {
            $sql = "SELECT setPointSuhu, setPointKelembaban, waktu FROM SensorData WHERE id = ? LIMIT 10";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT setPointSuhu, setPointKelembaban, waktu FROM SensorData ORDER BY id ASC LIMIT 10";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_data_tanggal($dates, $datesf)
    {
        if ($dates) {
            $sql = "SELECT suhu, suhu1, suhu2, suhu3, suhu4, suhuLuar, waktu, setPointSuhu FROM SensorData WHERE waktu LIKE $dates . '%' LIMIT 10";
            $query = $this->db->query($sql);
            return $query->row_array();
        } elseif($dates && $datesf) { 
            $sql = "SELECT suhu, suhu1, suhu2, suhu3, suhu4, suhuLuar, waktu, setPointSuhu FROM SensorData WHERE waktu BETWEEN $dates . '%' AND $datesf . '%' LIMIT 10";
            $query = $this->db->query($sql);
            return $query->row_array();
        }

        $sql = "SELECT suhu, suhu1, suhu2, suhu3, suhu4, suhuLuar, waktu, setPointSuhu FROM SensorData LIMIT 10";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getDataS($postData = null)
    {
        $response = array();
        // read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (waktu like '%" . $searchValue . "%' or suhu like '%" . $searchValue . "%' or suhu1 like '%" . $searchValue . "%' or suhu2 like'%" . $searchValue . "%' or suhu3 like'%" . $searchValue . "%' or suhu4 like'%" . $searchValue . "%' or suhuLuar like'%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('SensorData')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('SensorData')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('suhu, suhu1, suhu2, suhu3, suhu4, suhuLuar, date_format(waktu, "%Y-%m-%e %H:%i") as waktu');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('SensorData')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "waktu" => $record->waktu,
                "suhu" => $record->suhu,
                "suhu1" => $record->suhu1,
                "suhu2" => $record->suhu2,
                "suhu3" => $record->suhu3,
                "suhu4" => $record->suhu4,
                "suhuLuar" => $record->suhuLuar
            );
        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $totalRecordwithFilter,
            "data" => $data
        );

        return $response;
    }

    public function getDataK($postData = null)
    {
        $response = array();
        // read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (waktu like '%" . $searchValue . "%' or kelembaban like '%" . $searchValue . "%' or kelembaban1 like '%" . $searchValue . "%' or kelembaban2 like'%" . $searchValue . "%' or kelembaban3 like'%" . $searchValue . "%' or kelembaban4 like'%" . $searchValue . "%' or kelembabanLuar like'%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('SensorData')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('SensorData')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('kelembaban, kelembaban1, kelembaban2, kelembaban3, kelembaban4, kelembabanLuar, date_format(waktu, "%Y-%m-%e %H:%i") as waktu');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('SensorData')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "waktu" => $record->waktu,
                "kelembaban" => $record->kelembaban,
                "kelembaban1" => $record->kelembaban1,
                "kelembaban2" => $record->kelembaban2,
                "kelembaban3" => $record->kelembaban3,
                "kelembaban4" => $record->kelembaban4,
                "kelembabanLuar" => $record->kelembabanLuar
            );
        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $totalRecordwithFilter,
            "data" => $data
        );

        return $response;
    }

    public function getDataKp($postData = null)
    {
        $response = array();
        // read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (waktu like '%" . $searchValue . "%' or outKipas like '%" . $searchValue . "%') ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('SensorData')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('SensorData')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('outKipas, date_format(waktu, "%Y-%m-%e %H:%i") as waktu');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('SensorData')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "waktu" => $record->waktu,
                "outKipas" => $record->outKipas,
            );
        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $totalRecordwithFilter,
            "data" => $data
        );

        return $response;
    }

    public function getDataLm($postData = null)
    {
        $response = array();
        // read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (waktu like '%" . $searchValue . "%' or outLampu like '%" . $searchValue . "%') ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('SensorData')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('SensorData')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('outLampu, date_format(waktu, "%Y-%m-%e %H:%i") as waktu');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('SensorData')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "waktu" => $record->waktu,
                "outLampu" => $record->outKipas,
            );
        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $totalRecordwithFilter,
            "data" => $data
        );

        return $response;
    }

    public function getDataPm($postData = null)
    {
        $response = array();
        // read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (waktu like '%" . $searchValue . "%' or outPompa like '%" . $searchValue . "%') ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('SensorData')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('SensorData')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('outPompa, date_format(waktu, "%Y-%m-%e %H:%i") as waktu');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('SensorData')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "waktu" => $record->waktu,
                "outPompa" => $record->outPompa,
            );
        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $totalRecordwithFilter,
            "data" => $data
        );

        return $response;
    }
}
?>