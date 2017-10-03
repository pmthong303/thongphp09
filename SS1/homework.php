<html>
   <head>
      <title>Ví dụ chương trình PHP</title>
   </head>
   <body>
      <?php
         $arrSinhvien = array();
         $arrSinhvien[0] = array("Phan Minh Thông","male","1994", "Bách Khoa");
         $arrSinhvien[1] = array("Nguyễn Văn Nam","male","1995","Bách Khoa");
         $arrSinhvien[2] = array("Đỗ Thế Trung","male","1996","Duy Tân");
         $arrSinhvien[3] = array("Lê Quý Nhạn","male","1994","Duy Tân");
         $arrSinhvien[4] = array("Nguyễn Ngọc Anh","female","1996","Bách Khoa");
         $arrSinhvien[5] = array("Nguyễn Văn Ronaldol","male","1985","Out of school");
         
         
         // Cau 1
         echo "Câu 1: In ra danh sách những người họ nguyễn <br>";
         foreach($arrSinhvien as $sinhvien){
           $hoten = explode(' ', $sinhvien[0]);
           if($hoten[0] == "Nguyễn"){
            
             echo '<pre>';
            
            print_r($sinhvien);
            echo $sinhvien[0]."<br>";
           }
         }
         // Cau 2
             
         echo "Câu 2:In ra danh sách các bạn Nam có tên có chữ 'a' <br>";
         foreach($arrSinhvien as $sinhvien){
           $hoten = explode(' ', $sinhvien[0]);
           
           $count = count($hoten);
           $count = $count - 1;
           //
           
           if((strlen(strstr($hoten[$count], 'a')) > 0 || strlen(strstr($hoten[$count], 'A'))> 0) && $sinhvien[1] == 'male'){
             print_r($sinhvien);
           }
         }
         // Cau 3
         
         echo "Câu 3:  In ra danh sách những bạn học Duy Tân <br>";
         foreach($arrSinhvien as $sinhvien){
           if($sinhvien[3] == "Duy Tân"){
             print_r($sinhvien);
             echo $sinhvien[0]."<br>";
           }
         }
         
         // Cau 4
         echo "Câu 4: In ra danh sách những bạn đã ra trường (đi làm) <br>";
         foreach($arrSinhvien as $sinhvien){
           if($sinhvien[2]  < "1994"){
             print_r($sinhvien);
           }
         }
         // Cau 5
         echo "Câu 5 Sắp xếp danh sách sinh viên theo aphabe : <br>";
         foreach ($arrSinhvien as $sinhvien) {
            $sapxep = explode(' ', $sinhvien[0]);
            $count = count($sapxep);
          	$count = $count - 1;
             ksort($sapxep[$count]);
             print_r($sinhvien);
             
         }
        
         ?>
   </body>
</html>
        
         
         
         
           
         
         