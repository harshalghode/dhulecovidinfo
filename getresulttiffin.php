<?php 
	session_start();
	require 'config.php';



        $q="SELECT * FROM tiffin ";
        $d=mysqli_query($conn,$q);
        $r=mysqli_num_rows($d);
       

            
              if($r){
                    
                        echo"<div class='container'>";
                        while($row = mysqli_fetch_assoc($d)){

                            echo "<div class='row border border-dark mt-3 pt-1 pb-2'>
                            <div class='col'>
                            <strong>$row[name]</strong> <br>
                            <span style='color:#2baf8a'>$row[number]</span><br>
                            <div class='pb-2'>$row[area]</div>
                            <span>Price: Rs.$row[price]/-<hr></span>
                            <span>Delivery: $row[delivery]<hr></span>
                            <span>Food: $row[food]</span>
                            </div>
                            </div>
                            
                        ";
                        }
                        echo "</div>";
                            
            }
            else{
                echo "<div class='row mt-5'><div class='col-12 text-center'>No Data Available</div></div>";

            }


?>    