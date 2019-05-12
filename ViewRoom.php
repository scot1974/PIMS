<?php require 'db.php';?>
<html>

    <head>
    
        <title>View Rooms</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Righteous|Work+Sans" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

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
                margin: 0;
            }
            #room{
                
                display:inline-block;
            }
        
            #records{
                
                
                
                overflow:scroll;
                height:300px;
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
            #edit{
                margin-right: 10px;
            }
            
           
    </style>
        
    </head>
    
    <body>
    
        <h2>View Rooms</h2>
        <center><a href="Room-menu.php" class="back">Click Here to go back to room menu</a></center>
        
        <div id="records">
            
            <table>
            
                <thead>
            
                <tr>
                
                    <th>room_id</th> 
                    <th>room_name</th> 
                    <th>cost</th> 
                    <th>action</th>
                    
                </tr>
                </thead>
                <tbody>
                
                    <?php                      
                        $select="SELECT * FROM room";
                        $ret_sel=mysqli_query($con,$select);
                        if(!$ret_sel){
                            echo"<script>";
                            echo"alert('Error in establishing connection')";
                            echo"</script>";
                            die();
                        }
                        else{
                            while($rows=mysqli_fetch_assoc($ret_sel)){
                                echo"<tr>";
                                echo"<td>{$rows['room_id']}</td>";
                                echo"<td>{$rows['room_name']}</td>";
                                echo"<td>{$rows['room_cost']}</td>";
                                echo"<td><a id='edit' href='UpdateRoom.php?u_id={$rows['room_id']}'>Edit</a><a href=''>Delete</a></td>";
                                echo"</tr>";
                            }
                        }
                        
                        
                    
                        
                    ?>
                </tbody>
            </table>
        
            </div>
      
            
    </body>
</html>