<?php
    include('config.php');
    $ngaynhan = $_POST['ngaynhan'];
    $ngaytra = $_POST['ngaytra'];
    $map = $_POST['map'];
    $hoten = $_POST['hoten'];
    $sdt = $_POST['sdt'];
    // $lenh1 = 'insert khach value (NULL,"'.$hoten.'","'.$sdt.'")';
    // $lenhkt = 'select mak from khach where hotenk = "'.$hoten.'" and sdt = "'.$sdt.'";'; // kiểm tra thông tin tồn tại chưa
    // $kqkt = mysqli_query($conn, $lenhkt);


    // function kt(){
    //     $lenhkt = 'select mak from khach where hotenk = "'.$hoten.'" and sdt = "'.$sdt.'";' // kiểm tra thông tin tồn tại chưa
    //     $kqkt = mysqli_query($conn, $lenhkt);
    //     return 
    // }
    // function themdp($mak){
    //     $lenh2 = 'insert ttdatphong value(NULL,1,"'.$mak.'","'.$map.'","'.$ngaynhan.'","'.$ngaytra.'",NULL,NULL,NULL)';
    //     mysqli_query($conn, $lenh2);
    // }

    $lenhkt = 'select mak from khach where hotenk = "'.$hoten.'" and sdt = "'.$sdt.'";'; 
    $lenh1 = 'insert khach value (NULL,"'.$hoten.'","'.$sdt.'")';
    mysqli_set_charset($conn, 'utf8');
    $kqkt = mysqli_query($conn, $lenhkt); // kiểm tra 
    if(mysqli_num_rows($kqkt) > 0){ // tồn tại k cần insert
        $laymak = mysqli_query($conn,$lenhkt);
        $rowkt = mysqli_fetch_assoc($laymak);
        $mak=$rowkt['mak'];
        $lenh2 = 'insert ttdatphong value(NULL,1,'.$mak.','.$map.',"'.$ngaynhan.'","'.$ngaytra.'",NULL,NULL,NULL)';
        $ktngay = "select * from phong 
                      where map not in(select map from ttdatphong 
                                               where (datphongtu <= '".$_POST['ngaynhan']."' and denngay >= '".$_POST['ngaynhan']."') or (datphongtu <= '".$_POST['ngaytra']."' and denngay >='".$_POST['ngaytra']."'))";
                                               $kqngay = mysqli_query($conn, $ktngay);
                                               $dem = 0;
                                               while($row3 = mysqli_fetch_assoc($kqngay)){
                                                   if($row3['map'] == $map){
                                                       $dem = $dem + 1;
                                                   }
                                               }
                                               if($dem==0){
                                                  echo '0';
                                               }else {
                                                   $kq2= mysqli_query($conn,$lenh2);
                                                  if($kq2){
                                                      echo '1';
                                                  }else echo '0';
                                               }
            
    }else{ // chưa tồn tại
             mysqli_query($conn, $lenh1);
             $laymak = mysqli_query($conn,$lenhkt);
             $rowkt = mysqli_fetch_assoc($laymak);
             $mak=$rowkt['mak'];
             $lenh2 = 'insert ttdatphong value(NULL,1,'.$mak.','.$map.',"'.$ngaynhan.'","'.$ngaytra.'",NULL,NULL,NULL)';
             $ktngay = "select * from phong 
                           where map not in(select map from ttdatphong 
                                                    where (datphongtu <= '".$_POST['ngaynhan']."' and denngay >= '".$_POST['ngaynhan']."') or (datphongtu <= '".$_POST['ngaytra']."' and denngay >='".$_POST['ngaytra']."'))";
                                                    $kqngay = mysqli_query($conn, $ktngay);
                                                    $dem = 0;
                                                    while($row3 = mysqli_fetch_assoc($kqngay)){
                                                        if($row3['map'] == $map){
                                                            $dem = $dem + 1;
                                                        }
                                                    }
                                                    if($dem==0){
                                                       echo '0';
                                                    }else {
                                                        $kq2= mysqli_query($conn,$lenh2);
                                                       if($kq2){
                                                           echo '1';
                                                       }else echo '0';
                                                    }
         
    }

?>