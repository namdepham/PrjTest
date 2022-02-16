<?php
    class SoHoc 
    {
        var $number1;
        var $number2;
        function input($number1, $number2){
            $this->number1 = $number1;
            $this->number2 = $number2;
        }
        function print(){
            echo 'Số thứ nhất là: '.$this->number1;
            echo '<br>Số thứ hai là: '.$this->number2;
        }
        function add(){
            $tong = $this->number1 + $this->number2;
            echo '<br>Tổng là: '.$tong;
            
        }
        function substract(){
            $hieu = $this->number1 - $this->number2;
            echo '<br> Hiệu là: '.$hieu;
        }
        function multiply(){
            $nhan = $this->number1 * $this->number2;
            echo '<br> Nhân là: '.$nhan;
        }
        function division(){
            $chia = $this->number1 / $this->number2;
            echo '<br> Chia là: '.$chia;
        }
    }
    $so1 = new SoHoc();
    $so1->input(5,1);
    $so1->print();
    $so1->add();
    $so1->substract();
    $so1->multiply();
    $so1->division();
    
    
?>