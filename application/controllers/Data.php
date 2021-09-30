<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function sendData()
    {
        $api_key_value = "te23Hbef3UnH";
        
        // $api_key = $suhu = $suhu1 = $suhu2 = $suhu3 = $suhu4 = $suhuLuar = $kelembaban = $kelembaban1 = $kelembaban2 = $kelembaban3 = $kelembaban4 = $kelembabanLuar = "";
        
        $api_key = $suhu = $suhu1 = $suhu2 = $suhu3 = $suhu4 = $suhuLuar = $kelembaban = $kelembaban1 = $kelembaban2 = $kelembaban3 = $kelembaban4 = $kelembabanLuar = $setPointSuhu = $setPointKelembaban = $outLampu = $outKipas = $outPompa = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $api_key = $this->input->post("api_key");
            if ($api_key == $api_key_value) {
                // suhu
                $suhu = $this->input->post('suhu');
                $suhu1 = $this->input->post('suhu1');
                $suhu2 = $this->input->post('suhu2');
                $suhu3 = $this->input->post('suhu3');
                $suhu4 = $this->input->post('suhu4');
                $suhuLuar = $this->input->post('suhuLuar');
                // kelembaban
                $kelembaban = $this->input->post('kelembaban');
                $kelembaban1 = $this->input->post('kelembaban1');
                $kelembaban2 = $this->input->post('kelembaban2');
                $kelembaban3 = $this->input->post('kelembaban3');
                $kelembaban4 = $this->input->post('kelembaban4');
                $kelembabanLuar = $this->input->post('kelembabanLuar');
                // setpoint
                $setPointKelembaban = $this->input->post('setPointKelembaban');
                $setPointSuhu = $this->input->post('setPointSuhu');
                $outLampu = $this->input->post('outLampu');
                $outKipas = $this->input->post('outKipas');
                $outPompa = $this->input->post('outPompa');

                // $data = [
                //     'suhu' => $suhu,
                //     'suhu1' => $suhu1,
                //     'suhu2' => $suhu2,
                //     'suhu3' => $suhu3,
                //     'suhu4' => $suhu4,
                //     'suhuLuar' => $suhuLuar,
                //     'kelembaban' => $kelembaban,
                //     'kelembaban1' => $kelembaban1,
                //     'kelembaban2' => $kelembaban2,
                //     'kelembaban3' => $kelembaban3,
                //     'kelembaban4' => $kelembaban4,
                //     'kelembabanLuar' => $kelembabanLuar,
                //     // 'setPointSuhu' => $setPointSuhu,
                //     // 'setPointKelembaban' => $setPointKelembaban,
                //     // 'outLampu' => $outLampu,
                //     // 'outKipas' => $outKipas
                // ];
                
                // $this->model_control->sendtoDB($data);
                // $add = $this->model_control->sendtoDB($data);
                
                $sql = "INSERT INTO SensorData2 (suhu, suhu1, suhu2, suhu3, suhu4, suhuLuar, kelembaban, kelembaban1, kelembaban2, kelembaban3, kelembaban4, kelembabanLuar, setPointKelembaban, setPointSuhu, outLampu, outKipas, outPompa) VALUES ('" . $suhu . "', '" . $suhu1 . "', '" . $suhu2 . "', '" . $suhu3 . "', '" . $suhu4 . "', '" . $suhuLuar . "', '" . $kelembaban . "', '" . $kelembaban1 . "', '" . $kelembaban2 . "', '" . $kelembaban3 . "', '" . $kelembaban4 . "', '" . $kelembabanLuar . "', '" . $setPointKelembaban . "', '" . $setPointSuhu . "', '" . $outLampu . "', '" . $outKipas . "', '" . $outPompa . "')";
                
                if ($this->db->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $this->db->error();
                }

                // if ($add === TRUE) {
                //     echo "Data added to database";
                // } else {
                //     $error = $this->db->error();
                //     echo $error;
                // }

                // $sql = "INSERT INTO temhumkiplam (suhu, suhu1, suhu2, suhu3, suhu4, suhuLuar, kelembaban, kelembaban1, kelembaban2, kelembaban3, kelembaban4, kelembabanLuar, setPointKelembaban, setPointSuhu, outLampu, outKipas) VALUES ('" . $suhu . "', '" . $suhu1 . "', '" . $suhu2 . "', '" . $suhu3 . "', '" . $suhu4 . "', '" . $suhuLuar . "', '" . $kelembaban . "','" . $kelembaban1 . "', '" . $kelembaban2 . "', '" . $kelembaban3 . "', '" . $kelembaban4 . "', '" . $kelembabanLuar . "', '" . $setPointKelembaban . "', '" . $setPointSuhu . "', '" . $outLampu . "', '" . $outKipas . "')";
            } else {
                echo "Wrong API Key provided";
            }
        } else {
            echo "No data posted with HTTP POST.";
        }
    }

}
