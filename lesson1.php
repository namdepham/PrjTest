<?php
    class Student{
        var $id; //Khai báo các thuộc tính bằng biến 
        var $name;
        var $avgMark;

        function walk(){
            echo '<br> Walk, Run, Eat,...';
        }
        function learning(){
            echo '<br> Online, Offline...';
        }
        function showInfo(){
            echo '<br> ID: '.$this->id;
            echo '<br> Name: '.$this->name;
            echo '<br> avgMark: '.$this->avgMark;
        }
        function inputInfo($id,$name,$avgMark){
            $this->id = $id;
            $this->name = $name;
            $this->avgMark = $avgMark;
        }
    }
   
    $st =new Student(); //Tạo một đối tượng bằng cách đặt tên biến
    $st->learning();// Truy cập vào phương thức của lớp đối tượng
  
    $st-> id = 2;// gắn cho thuộc tính id
    $st->inputInfo(2,'lala',9);
    $st->showInfo();
    // tạo 1 đối tượng khác
    $st2 = new Student();
    $st2->inputInfo(3,3,3);
    $st2->showInfo();

   

?>