<html>

    <head>
    
        <title>View Doctor Records</title>
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
           
            #records{
                
                position: relative;
                top:40px;
                overflow:scroll;
                width:100%;
                height:400px;
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
            
            
           
    </style>
        
    </head>
    
    <body>
    
        <h2>View Doctor Records</h2>
         <center><a href="AdminFunctions.php" class="back">Click Here to go back Admin Dashboard</a></center>
        
        <div id="records">
            
            <table>
            
                <thead>
            
                <tr>
                
                    <th>doc_id</th> 
                    <th>doc_name</th> 
                    <th>email</th> 
                    <th>phone</th> 
                    <th>address</th> 
                    <th>sex</th>
                    <th>specialization</th>
                    <th>age</th> 
                </tr>
                </thead>
                <tbody>
                <?php require 'db.php';?>
                
                    <?php                      
                        $select="SELECT * FROM regdoctor";
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
                                echo"<td>{$rows['doc_id']}</td>";
                                echo"<td>{$rows['doc_name']}</td>";
                                echo"<td>{$rows['email']}</td>";
                                echo"<td>{$rows['phone']}</td>";
                                echo"<td>{$rows['address']}</td>";
                                echo"<td>{$rows['sex']}</td>";
                                echo"<td>{$rows['specialization']}</td>";
                                echo"<td>{$rows['age']}</td>";
                                

                                
                                
                            }
                        }
                        
                        
                    
                        
                    ?>
                </tbody>
            </table>
        
            </div>
      
            
    </body>
</html>