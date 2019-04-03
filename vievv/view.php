
<!DOCTYPE html>
<html>
<head>
	<title>mvc</title>
</head>
<body>
  <h2>student list </h2>
  <table cellspacing="25px">
     <th>No</th>
     <th>Name</th>
     <th>Student Id</th>
     <th>Department</th>
     <th>CGPA</th>
     <th>Address</th>
       
       <?php

         $count=0;
         foreach ($student as $row) {
          $count++;
          ?> 
          
    <tr>
     	<td><?php echo $count; ?></td>
     	<td><?php echo $row['name'];?></td>
     	<td><?php echo $row['std_id'];?></td>
     	<td><?php echo $row['dept'];?></td>
     	<td><?php echo $row['cgpa'];?></td>
     	<td><?php echo $row['address'];?></td>

     </tr>


          <?php
         }
     
       ?>
    
  </table>
 
</body>
</html>