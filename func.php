<?php

$con=mysqli_connect("localhost","root","","pimsdb");
if(isset($_POST['login_submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM login where username='$username' and password='$password'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1){
        header("location:AdminFunctions.php");
    }
    else{
        echo "<script>alert('Error Login')</script>";
        echo "<script>wondow.open('index.php', '_self')</script>";
    }
}

if(isset($_POST['loign_submit']))

{
    $surname=$_POST['surname'];
    $firstname=$_POST['firstname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $sex=$_POST['sex'];
    $age=$_POST['age'];
    $doc_id=$_POST['doc_id'];
    $roo_id=$_POST['roo_id'];
    $query="insert into inpatient(pid,surname,firstname,email,contact,date,address,sex,age,doc_id,roo_id)
    values('$surname','$firstname','$email','$contact','$date','$address','$sex','$age','$doc_id','$roo_id')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Apponitment Registered.')</script>";
        echo "<script>wondow.open('index.php', '_self')</script>";
    }
}

function get_patient_details(){
    global $con;
    $query="select * from inpatient";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
        $pid=$row['pid'];
        $surname=$row['surname'];
        $firstname=$row['firstname'];
        $email=$row['email'];
        $contact=$row['contact'];
        $date=$row['date'];
        $address=$row['address'];
        $sex=$row['sex'];
        $age=$row['age'];
        $doc_id=$row['doc_id'];
        $roo_id=$row['roo_id'];

        echo " <tr>
                <td>$pid</td>
                <td>$fname</td>
                <td>$lname</td>
                <td>$email</td>
                <td>$contact</td>
                <td>$date</td>
                <td>$address</td>
                <td>$sex</td>
                <td>$age</td>
                <td>$doc_id</td>
                <td>$roo_id</td>
                
              </tr>";
        
    }
}


if(isset($_POST['register']) )
    {
        $sname=$_POST['sname'];
        $fname=$_POST['fname'];
        $email=$_POST['email'];
        $phno=$_POST['phno'];
        $address=$_POST['address'];
        $pdate=$_POST['pdate'];
        $sex=$_POST['sex'];
        
        if(!$con){
            echo"<script>";
            echo"alert('Error in establishing connection')";
            echo"</script>";
        }

        else{
        
        $query="INSERT INTO docapp (sname,fname,email,phno,address,,sex) VALUES ('$sname','$fname','$email','$phno','$address',$sex')";
            $result=mysqli_query($con,$query);
            if($result)
                {
                    echo "<script>alert('Apponitment Booked!!!.')</script>";
                    echo "<script>wondow.open('Registration.php', '_self')</script>";
                }
                
                
        
             }       
    }            
        

?>
                