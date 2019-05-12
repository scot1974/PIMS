<?php require 'db.php';?>
<html>

    <head>
    
        <title>Patient Management Information</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Righteous|Work+Sans" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script src="jquery.js"></script>
        <style>
    
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
            body{
                margin:0;
            }
            #inpatient{
               
                display:block;
                
                
            }
        #inpatient button{
             margin-left:400px;
            margin-bottom:10px;
            padding:10px 35px 10px 10px;
            box-shadow:5px 5px rgba(0,0,0,0.5);
            color:white;
            cursor:pointer;
            background-color:#b6dde7;
            border-style:outset;
            font-size:30px;
            font-family: 'Righteous'; 
            margin-top: 20px; 
        }
            #records{
                
                
                display:none;
                overflow:scroll;
                height:350px;
                width:100%;
                
            }
            
            #records th,td{
                padding: 10px;
                font-family: 'Righteous';
                font-size:20px;
                text-align: center;
                
            }
            #records table{
                                
                    
                    border-collapse: collapse;
                    width:100%;

            }
            #records th{
                                
                    background-color: #b6dde7;

            }
            
            #records tr:nth-child(even){
                background-color: #f2f2f2;
            }
            
             #outpatient{
                
                display:inline-block;
                
            }
        #outpatient button{
            margin-left:400px;
            margin-top:10px;
            margin-bottom:10px;
            padding:10px;
            box-shadow:5px 5px rgba(0,0,0,0.5);
            color:white;
            cursor:pointer;
            background-color:#b6dde7;
            border-style:outset;
            font-size:30px;
            font-family: 'Righteous';    
            
        }
            #records2{
                
                display:none;
                overflow:scroll;
                width:100%;
                height:350px;
                
            }
            
            #records2 th,td{
                padding: 10px;
                font-family: 'Righteous';
                font-size:20px;
                text-align: center;
                
            }
            #records2 table{
                                
                    
                    border-collapse: collapse;
                    width:100%;

            }
            #records2 th{
                                
                    background-color: #b6dde7;

            }
            
            #records2  tr:nth-child(even){
                background-color: #f2f2f2;
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
    
        <h2>Patient Management Information</h2>
        <div id="inpatient">
        <center><a href="AdminFunctions.php" class="back">Click Here to go back Admin Dashboard</a></center>
        
        
            <button id="inp">Inpatient Information</button>
        </div>
        
        <div id="records">
            
            <table>
            
                <thead>
            
                <tr>
                
                    <th>pid</th> 
                    <th>Name</th> 
                    <th>Date</th> 
                    <th>Email</th> 
                    <th>Phone</th> 
                    <th>Address</th> 
                    <th>Sex</th>
                    <th>Age</th> 
                    <th>No Of Days</th>
                    <th>Doctor_id</th>
                    <th>Room_id</th>
                   
                </tr>
                </thead>
                <tbody>
                
                    <?php                      
                        $select="SELECT * FROM inpatient";
                        $ret_sel=mysqli_query($con,$select);
                        if(!$ret_sel){
                            echo"<script>";
                            echo"alert('Error in establishing connection')";
                            echo"</script>";
                            die();
                        }
                        else{
                            while($rows=mysqli_fetch_assoc($ret_sel)){            echo"<tr>";
                                echo"<td>{$rows['pid']}</td>";
                                echo"<td>{$rows['pname']}</td>";
                                echo"<td>{$rows['pdate']}</td>";
                                echo"<td>{$rows['email']}</td>";
                                echo"<td>{$rows['phone']}</td>";
                                echo"<td>{$rows['address']}</td>";
                                echo"<td>{$rows['sex']}</td>";
                                echo"<td>{$rows['age']}</td>";
                                echo"<td>{$rows['nod']}</td>";
                                echo"<td>{$rows['doc_id']}</td>";
                                echo"<td>{$rows['room_id']}</td>";
                                
                                                
                            }
                            
                                
                           }

                    
                         function cost($test){
                                    if(!empty($test)){
                                        $con=mysql_connect("localhost","root","");
                                        $sel="select cost from tests where test_name='$test'";
                                        $retval=mysql_query($sel,$con);
                                        if(!$retval){
                                             /* echo"<script>";
                                             echo"alert('Error in retrieving values')";
                                             echo"</script>";*/
                                             echo(mysql_error());    
                                        }
                                        while($row=mysql_fetch_array($retval,MYSQL_ASSOC)){
                                            return $row['cost'];
                                        }

                                    }
                                    else{
                                        return 0;
                                    }
                                } 
                    ?>
                </tbody>
            </table>
        
            </div>
        
        
        <div id="outpatient">
        
            <button id="op"> Outpatient Information</button>
        </div>
        
        <div id="records2">
            
            <table>
            
                <thead>
            
                <tr>
                
                    <th>pid</th> 
                    <th>Name</th> 
                    <th>Date</th> 
                    <th>Email</th> 
                    <th>Phone</th> 
                    <th>Address</th> 
                    <th>Sex</th>
                    <th>Age</th> 
                    <th>Doctor id</th>
                    <th>Room id</th>
                   
                </tr>
                </thead>
                <tbody>
                
                   <?php                      
                        $select="SELECT * FROM outpatient";
                        $ret_sel=mysqli_query($con,$select);
                        if(!$ret_sel){
                            echo"<script>";
                            echo"alert('Error in establishing connection')";
                            echo"</script>";
                            die();
                        }
                        else{
                            while($rows=mysqli_fetch_assoc($ret_sel)){            echo"<tr>";
                                echo"<td>{$rows['pid']}</td>";
                                echo"<td>{$rows['pname']}</td>";
                                echo"<td>{$rows['pdate']}</td>";
                                echo"<td>{$rows['email']}</td>";
                                echo"<td>{$rows['phone']}</td>";
                                echo"<td>{$rows['address']}</td>";
                                echo"<td>{$rows['sex']}</td>";
                                echo"<td>{$rows['age']}</td>";
                                echo"<td>{$rows['doc_id']}</td>";
                                echo"<td>{$rows['room_id']}</td>";
                                
                                                
                            }
                            
                                
                           }
    
                    ?>
                </tbody>
            </table>
        
            
        </div>
        <script>
                $("#inp").click(function(){
                    $("#records").toggle(3000);
                });
                 $("#op").click(function(){
                    $("#records2").toggle(3000);
                });
                
            </script>
    </body>
</html>