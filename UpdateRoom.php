<?php require 'db.php';?>
<html>

    <head>
    
        <title>Update Rooms</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Righteous|Work+Sans" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <style>
        
            #room{
                width:600px;
                background-color: #f5f5f5;
                margin:0px auto;
                margin-top: 20px;
                
            }
            body{
                margin:0;
            }
            .head{
                width:100%;
                font-size:30px;
                text-align: center;
                text-shadow: 3px 4px rgba(0,0,0,0.2);
                background-color:#b6dde7;
                color:white;
                margin:0px;
                
            }
            #room input[type="text"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
               
               #room input[type="number"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            
            #room input[type="submit"]{
                
                width:100%;      
                padding:10px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                margin:20px 0px 0px 0px;
                color:white;
                background-color:#b6dde7;
                border-style:outset;
                border-radius:5px;
                cursor:pointer;
                font-weight:bold;
                
            }
            
            #room input[type="date"]{
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
            }
             #room input[type="radio"]{
                padding:10px;
                margin:10px 10px 10px 0px;
                
                
            }
             #room select{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            .form-fields{
                
                
                font-family: 'Righteous',cursive;
                font-size:20px;
                color:#757575;
                
                
            }
                      
            
             h2{
                
                height:80px;
                font-family: 'Righteous';
                font-size:50px;
                background-color:#b6dde7;
                color: whitesmoke;
                text-align: left;
                text-shadow: 4px 4px rgba(0,0,0,0.2);
                padding:10px 10px 5px 10px ;   
                
            } 
            #report-name{
                
                color:red;
            }
            #report-id{
                
                color:red;
            }
            .back{
                width:100%;
                font-size:20px;
                text-align: center;
                text-shadow: 2px 2px rgba(0,0,0,0.2);
                background-color:#b6dde7;
                color:white;
                margin-bottom: 20px;
                
                
            }
            a{
                text-decoration: none;
            }
            
        </style>
    </head>
    <body>
        <h2>Update Rooms</h2>
        <center><a href="Room-menu.php" class="back">Click Here to go back to room menu</a></center>
        <div id="room">
            <p class="head">Update Room Details</p>
            <?php 
             $_SESSION['u_id']="";
            if (isset($_GET['u_id'])) {
                $_SESSION['u_id']=$_GET['u_id'];
                  $u_id=$_GET['u_id'];
                  $sql="SELECT * FROM room WHERE room_id='$u_id'";
                  $query=mysqli_query($con,$sql);
                  if ($query) {
                     while ($rows=mysqli_fetch_assoc($query)) {
                        $room_name=$rows['room_name'];
                        $room_cost=$rows['room_cost'];
                   


            ?>
            <form action="UpdateRoom.php" method="post" onsubmit="return validateform()">
                <span class="form-fields">Room Name</span><br><input type="text" value="<?php echo $room_name; ?>" id="rm" name="rname"><br>
                <p id="report-name"></p>
                <span class="form-fields">Cost/Day</span><br><input type="text" name="cost" value="<?php echo $room_cost; ?>"><br>
                 <input type="Submit" name="updateBtn" value="Update Room">     
                             
                
            </form>
            <?php
              }
                  }
              }
              if (isset($_GET['u_id'])) {
                $_SESSION['u_id']=$_GET['u_id'];
                  $u_id=$_GET['u_id'];
                  if(isset($_POST['updateBtn'])){
         
               echo $u_id;
            die();
            $rname=$_POST['rname'];
            $cost=$_POST['cost'];
            if (!empty($rname) && !empty($cost)) {
               $upd="UPDATE room SET room_name='$rname',room_cost='$cost' WHERE  room_id='$u_id' ";
                $ret_upd=mysqli_query($con,$upd);
                if(!$ret_upd){
                    echo"<script>";
                    echo"alert('Error in updating room name')";
                    echo"</script>";
                    die();
                }
                else{
                    echo"<script>";
                    echo"alert('Room name successfully updated')";
                    echo"</script>";
                }
            }
            else{
                echo"<script>";
                    echo"alert('Room name and room cost cannot be empty')";
                    echo"</script>";
                    die();
            }
 
            
                
    }         
           
    
              }  




            ?>
            
        </div>
        
       
        <script type="text/javascript">
            
            function validateform(){
                
                var name=document.getElementById('rm').value;
                var room_id=document.getElementById('rid').value;
                var flag=1;
                if(/^[A-z ]*$/.test(name)==false){
                    document.getElementById('report-name').innerHTML="*Invalid name";
                    flag=0;
                }
                if(/^\d{4}*$/.test(room_id)==false){
                            document.getElementById('report-id').innerHTML="*Invalid Doctor ID";
                            flag=0;
                        }
                if(flag==0){
                    return false;
                }
                
         }
         </script> 
         <?php
          //; 
    
            
         ?>
            
               
    </body>
</html>