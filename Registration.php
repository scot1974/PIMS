<?php
        
    
                require 'db.php';
    if(isset($_POST['register']) )
    {
        $sname=$_POST['sname'];
        $fname=$_POST['fname'];
        $email=$_POST['email'];
        $phno=$_POST['phno'];
        $address=$_POST['address'];
        $pdate=$_POST['pdate'];
        $sex=$_POST['sex'];
        $docapp=$_POST['docapp'];

        
            if(!$con){
                echo"<script>";
                echo"alert('Error in establishing connection')";
                echo"</script>";
            }

            else{
        
            $query="INSERT INTO docapp (sname,fname,email,phno,address,pdate,sex,docapp) VALUES ('$sname','$fname','$email','$phno','$address','$pdate','$sex','$docapp')";
                 $result=mysqli_query($con,$query);
                if($result)
                {
                    echo "<script>alert('Apponitment Booked!!!.')</script>";
                    echo "<script>wondow.open('Registration.php', '_self')</script>";
                }
                
                
        
             }       

        function get_appointment_details(){
        global $con;
        $query="select * from docapp";
        $result=mysqli_query($con,$query);
        while ($row=mysqli_fetch_array($result)){
            $docapp_id=$row['docapp_id'];
            $sname=$row['sname'];
            $fname=$row['fname'];
            $email=$row['email'];
            $phno=$row['phno'];
            $address=$row['address'];
            $pdate=$row['pdate'];
            $sex=$row['sex'];
            $docapp=$row['docapp'];

            echo " <tr>
                <td>$docapp_id</td>
                <td>$fname</td>
                <td>$lname</td>
                <td>$email</td>
                <td>$phno</td>
                <td>$address</td>
                <td>$pdate</td>
                <td>$sex</td>
                <td>$docapp</>
                
              </tr>";
        
            }

        }
    }            
        
?>


<html>

    <head>
    
        <title>Registration</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Righteous|Work+Sans" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        
        <style type="text/css">
        
           h1{
                
                height:80px;
                font-family: 'Righteous';
                font-size:50px;
                background-color:#b6dde7;
                color: whitesmoke;
                text-align: left;
                text-shadow: 4px 4px rgba(0,0,0,0.2);
                padding:10px 10px 5px 10px ;   
                
            } 
            
            #reg{
                
                width:600px;
                margin-left:400px;
                background-color:#f5f5f5;
                padding:10px;
                margin-top: 20px;
               
                
            }
            #reg input[type="text"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            
            #reg input[type="password"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            
            #reg input[type="email"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            
            #reg input[type="tel"]{
                
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;
                
            }
            
            #reg input[type="submit"]{
                
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
                opacity:0.8;
                
            }
            
            #reg input[type="date"]{
                width:100%;
                box-sizing: border-box;
                border-style: outset;
                padding:10px;
                margin:10px 10px 10px 0px;
                border-radius:5px;
                font-family: 'Work Sans', sans-serif;
                font-size:20px;

            }
             #reg input[type="radio"]{
                padding:10px;
                margin:10px 10px 10px 0px;
                
                
            }
            .form-fields{
                
                
                font-family: 'Righteous',cursive;
                font-size:20px;
                color:#757575;
                
                
            }
            
            #report-username{
                
                color:red;
                
            }
            
            #report-pass1{
                
                color:red;
                
            }
            
            #report-pass2{
                
                color:red;
                
            }
            
            #report-pass3{
                
                color:red;
                
            }
            
            #report-email{
                
                color:red;
                
            }
            
            #report-phone{
                
                color:red;  
            }
            #report-dob{
                
                color:red;  
            }
            
            #Login{
                
               
                height:20px;
                display:inline-block;
                background-color:#b6dde7;
                color:white;
                text-decoration: none;
                padding: 10px 275px 10px 275px;
                margin-left:410px;
                
            }
            
            #Login:hover{
                
                color:white;
                background-color: black;
                
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
    
        <h1>BOOK APPOINTMENT</h1>
        <center><a href="index.php" class="back">Click Here to go back to Homepage</a></center>
        
        <div id="reg">
        
            <form action="Registration.php" method="post">
                <span class="form-fields">Surname</span><br><input type="text" name="sname" required ><br>
                <p id="report-username"></p>
                <span class="form-fields">Firstname</span><br><input type="text" name="fname" required ><br>
                <span class="form-fields">Email</span><br><input type="text" name="email" required><br>
                <p id="report-email"></p>
                <span class="form-fields">Contact number</span><br><input type="tel" name="phno" required><br>
                <p id="report-phone"></p>
                <span class="form-fields">Address</span><br><input type="text" name="address" required><br>
                <span class="form-fields">Date</span><br><input type="text" name="pdate" required><br>
                <span class="form-fields">Sex</span><br><input type="radio" name="sex" value="M" required><span class="form-fields">Male</span><br>
                <input type="radio" name="sex" value="F" required><span class="form-fields">Female</span><br>
                <select class="form-fields" name="docapp">
                    <option value="Dr Mouse From 6am to 12pm">Dr Mouse From 6am to 12pm</option>
                    <option value="Dr Scot From 12pm to 6pm">Dr Scot From 12pm to 6pm</option>
                </select>
                <input type="submit" name="register" value="Submit">  
                             
                
            </form>
        
        </div>
        

         
        
    </body>
</html>