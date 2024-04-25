<?php
        include('db.php');
        include('query.php');
        function comboFill($query){
                $database = new db();
               $table = $database->get_multi_row($query);
               foreach ($table as  $row){
                      echo ' <option value="'.$row["id"].'">'.$row["name"].'</option>';
               }
        }
        function insertReservation(){
               $rdate= DateTime::createFromFormat('m/d/Y', $_POST['date'])->format('Y/m/d');
              $database->others(sprintf(RESERVE_INSERT,$rdate->format(Y/m/d),$_POST['name'],$_POST['email'],$_POST['number'],$_POST['event'],$_POST['address']));
              $database->others(RESERVED_PHOTOGRAPHER_INSERT,$_POST['photographer'],$reserve);
              $database->others(RESERVED_ALBUM_INSERT,$_POST['album'],$reserve);
              $database->others(RESERVED_VIDEO_INSERT,$_POST['video'],$reserve);
        }

 ?>
