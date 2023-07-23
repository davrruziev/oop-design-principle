

<?php

    class Report
    {
        public function show( array $data){
            echo $this->crateReport($data);
        }

        public function saveToFile(array $data){

           file_put_contents("report.txt",$this->crateReport($data));

        }

        public  function crateReport( array $data){

            $report = "Report:" . $this->formatName($data["name"]). "</br>";
            $report .= "Product:". $this->formatName($data["product"])."</br>";
            $report .=  "Start Date:". $this->formatDate($data["startDate"])."</br>";
            $report .= "End Date:". $this->formatDate($data["endDate"])."</br>";
            $report .=  "Total:". $this->total($data['total']);
           $report .=  "AverAge x day:".floor($this->total($data['total'])/365)."</br>";
            $report .=  "AverAge x week:".floor($this->total($data['total'])/52)."</br>";
            $report .=  "AverAge x month:".floor($this->total($data['total'])/12)."</br>";
            return $report;
        }

        public function formatName($name){
            return ucwords(strtolower($name));
        }

        public function formatDate($date){
            return date("Y/m/d",$date);
        }

       public function total($total){
            return  $total;
       }

    }

    $report = new Report();
     $report->saveToFile();



