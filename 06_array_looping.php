
<?php

//  $students = [  
//                     ['sid'=>"001", 'firstName'=>'Akash','lastName'=>'Sharma','address'=>'butwal-09, Milanchowk','phone_no'=>'9847519009'], 
//                     ['sid'=>"002", 'firstName'=>'Ashika','lastName'=>'Thapa','address'=>'butwal-11, Devinagar','phone_no'=>'9847519008'],  
//                     ['sid'=>"003", 'firstName'=>'Bikash','lastName'=>'Yadav','address'=>'butwal-06, Nepaljung Road','phone_no'=>'9847519001','marks'=>['c'=>45,'java'=>20,'python'=>80] ]];
                     require_once("06_array_data.php");

//                     echo $students[2]["phone_no"];			
  ?>  




    <style>
th,td{
    text-align: center;
    border: 1px solid black;
}
table{
  width:100%;
}
    </style>
    
    
  <table style="border: 1px solid black">
<tr>
    <th>S.N.</th>
    <th>Student ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>Phone No.</th>
 </tr>
<?php $i=1 ?>
 <?php foreach ($students as $student){?>
 <tr>
     <td><?php echo $i++;?></td>
     <td><?php echo $student['sid'];?></td>
     <td><?php echo $student['firstName']." ".$student['lastName'];?></td>
     <td><?php echo $student['address'];?></td>
     <td><?php echo $student['phone_no'];?></td>
 </tr>
<?php } ?>

  </table>

<ol>
  <?php foreach ($students as $student) {?>
    <li><?php echo $student['firstName']." ".$student['lastName'];?> </li>
    <?php } ?>
 </ol>

<ol>
  <?php foreach ($students[2] ['marks'] as $k=>$m) {?>
    <li><?php echo $k." = ".$m;?> </li>
    <?php } ?>
 </ol>


