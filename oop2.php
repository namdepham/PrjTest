<?php
    class NhanVien{
        var $ten;
        var $tuoi;
        var $diachi;
        var $tienluong;
        var $tongsogiolam;
        function inputinfo($ten,$tuoi,$diachi,$tienluong,$tongsogiolam){
            $this->ten = $ten;
            $this->tuoi=$tuoi;
            $this->diachi = $diachi;
            $this->tienluong= $tienluong;
            $this->tongsogiolam = $tongsogiolam;
        }
        function printInfo(){
            echo 'Tên: '.$this->ten;
            echo '<br>Tuổi: '.$this->tuoi;
            echo '<br>Địa chỉ: '.$this->diachi;
            echo '<br>Tiền lương: '.$this->tienluong;
            echo '<br>Tổng số giờ làm: '.$this->tongsogiolam;
        }
        function tinhThuong(){
            if ($this->tongsogiolam >=200) {
                $this->tienluong = $this->tienluong + ($this->tienluong)* 20/100  ;
            }
            elseif ($this->tongsogiolam >=100 && $this->tongsogiolam<200) {
                $this->tienluong =  $this->tienluong + ($this->tienluong)* 10/100;
            }
            else{
                $this->tienluong =  $this->tienluong = ($this->tienluong);
            }
        }
    }
    $nv1 = new NhanVien();
    $nv1 ->inputinfo('Phạm Hoài Nam',19,'196 Cầu Giấy',2000000,0);
    $nv1 ->tinhThuong();
    $nv1->printInfo();

?>
