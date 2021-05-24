
<?php 
	session_start();
	require 'config.php';



        $q="SELECT * FROM hospital WHERE availablewithoxygen > 0";
        $d=mysqli_query($conn,$q);
        $r=mysqli_num_rows($d);
       

            
              if($r){
                echo"<table class='table table-striped text-muted' id='mytable'>
                    <tbody>
                    <tr class='text-center'>
                                <th></th>
                                <th>Without Oxygen</th>
                                <th>With Oxygen</th>
                                <th>ICU Without Ventilator</th>
                                <th>ICU With Ventilator</th>
                                </tr>
                    ";  
                        while($row = mysqli_fetch_assoc($d)){
                            
                            echo "
                                <tr class='text-center'>
                                <td>
                                <div class='accordion'>
                                <div class='contentBx'>
                                <div class='text-primary pb-1' style='margin-top:-5px;  cursor: pointer;' ><i class='label pt-1 border border-success rounded-circle'></i>&nbsp;$row[name]</div>
                                <div class='content'>
                                Phone: $row[number] <br>
                                Address: $row[address]
                                </div>
                                </div>
                                </div>                                                                
                                </td>
                                <style>
                                *{
                                    padding:0;
                                }
                                .accordion .contentBx .label{
                                    cursor: pointer;
                                }
                                .accordion .contentBx .label::before{
                                    content: '+';
                                    color:green;
                                    font-size: 1.5em;
                                                                       
                                }
                                .accordion .contentBx.active .label::before{
                                    content: '-';
                                    color:red;
                                    font-size: 1.6em;
                                    padding-left: 1px;
                                    padding-right: 1px;
                                    }
                                .accordion .contentBx .content{
                                    height: 0;
                                    overflow:hidden;
                                    transition: 0.5s;
                                    overflow-y: auto;
                                }
                                .accordion .contentBx.active .content{
                                    height: auto;
                                    padding: auto;
                                    
                                }   
                                </style>

                                <script>
        const accordion = document.getElementsByClassName('contentBx');
        for(i = 0; i<accordion.length; i++){
            accordion[i].addEventListener('click', function(){
                this.classList.toggle('active')
            })
        }
    </script>

                                 <td>";
                                    //$row[availablewithoutoxygen] / $row[totalwithoutoxygen]
                                    $an=$row['availablewithoutoxygen']/$row['totalwithoutoxygen'];
                                    $ans=ceil($an*100);
                                    if($ans>=60){
                                        echo" <span class='bg-success p-1 border rounded text-white'>$row[availablewithoutoxygen]</span> / $row[totalwithoutoxygen]";
                                    }
                                    if($ans<60 AND $ans>30){
                                        echo"<span class='bg-warning p-1 border rounded text-white'>$row[availablewithoutoxygen]</span> / $row[totalwithoutoxygen]";
                                    }
                                    if($ans<30 AND $ans>1){
                                        echo"<span class='bg-danger p-1 border rounded text-white'>$row[availablewithoutoxygen]</span> / $row[totalwithoutoxygen]";
                                    }
                                    if($ans<1){
                                        echo"<span class='bg-dark p-1 border rounded text-white'>$row[availablewithoutoxygen]</span> / $row[totalwithoutoxygen]";
                                    }

                          echo "</td>
                                <td>";
                                    //$row[availablewithoxygen] / $row[totalwithoxygen]
                                    $an=$row['availablewithoxygen']/$row['totalwithoxygen'];
                                    $ans=ceil($an*100);
                                    if($ans>=60){
                                        echo" <span class='bg-success p-1 border rounded text-white'>$row[availablewithoxygen]</span> / $row[totalwithoxygen]";
                                    }
                                    if($ans<60 AND $ans>30){
                                        echo"<span class='bg-warning p-1 border rounded text-white'>$row[availablewithoxygen]</span> / $row[totalwithoxygen]";
                                    }
                                    if($ans<30 AND $ans>1){
                                        echo"<span class='bg-danger p-1 border rounded text-white'>$row[availablewithoxygen]</span> / $row[totalwithoxygen]";
                                    }
                                    if($ans<1){
                                        echo"<span class='bg-dark p-1 border rounded text-white'>$row[availablewithoxygen]</span> / $row[totalwithoxygen]";
                                    }

                        echo  "</td>
                               <td>";
                                    //$row[availableicu] / $row[totalicu]
                                    $an=$row['availableicu']/$row['totalicu'];
                                    $ans=ceil($an*100);
                                    if($ans>=60){
                                        echo" <span class='bg-success p-1 border rounded text-white'>$row[availableicu]</span> / $row[totalicu]";
                                    }
                                    if($ans<60 AND $ans>30){
                                        echo"<span class='bg-warning p-1 border rounded text-white'>$row[availableicu]</span> / $row[totalicu]";
                                    }
                                    if($ans<30 AND $ans>1){
                                        echo"<span class='bg-danger p-1 border rounded text-white'>$row[availableicu]</span> / $row[totalicu]";
                                    }
                                    if($ans<1){
                                        echo"<span class='bg-dark p-1 border rounded text-white'>$row[availableicu]</span> / $row[totalicu]";
                                    }

                          echo "</td>
                               <td>";
                                    
                                    $an=$row['availableicuwithventilators']/$row['totalicuwithventilators'];
                                    $ans=ceil($an*100);
                                    if($ans>=60){
                                        echo" <span class='bg-success p-1 border rounded text-white'>$row[availableicuwithventilators]</span> / $row[totalicuwithventilators]";
                                    }
                                    if($ans<60 AND $ans>30){
                                        echo"<span class='bg-warning p-1 border rounded text-white'>$row[availableicuwithventilators]</span> / $row[totalicuwithventilators]";
                                    }
                                    if($ans<30 AND $ans>1){
                                        echo"<span class='bg-danger p-1 border rounded text-white'>$row[availableicuwithventilators]</span> / $row[totalicuwithventilators]";
                                    }
                                    if($ans<1){
                                        echo"<span class='bg-dark p-1 border rounded text-white'>$row[availableicuwithventilators]</span> / $row[totalicuwithventilators]";
                                    }
                                
                           echo "</td></tr> ";
                        }
                    echo "</tbody>
                </table>";
            }
            else{
                echo "<div class='row mt-5'><div class='col-12 text-center'>No Data Available</div></div>";

            }







    ?>