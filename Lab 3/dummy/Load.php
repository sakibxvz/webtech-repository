<!DOCTYPE html>  
 <html>  
      <body>  
        <div class="container" style="width:500px;">              
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Name</th> 
                               <th>E-mail</th>  
                               <th>User name</th>                          
                               <th>Gender</th> 
                               <th>Date of birth</th>   
                          </tr>  
                          <?php   
                          $data = file_get_contents("data.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                              if ($row["username"]=="hi") {
                                   echo '<tr>
                               <td>'.$row["name"].'</td>
                               <td>'.$row["e-mail"].'</td>
                               <td>'.$row["username"].'</td>
                               <td>'.$row["gender"].'</td>
                               <td>'.$row["dob"].'</td>
                               </tr>'; 
                              }
                                
                          }  
                          ?>  
                     </table>  
                   </div>
                 </div>
      </body>  
 </html>  