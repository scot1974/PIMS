<html>

    <head>
        
        <title>Patient Management</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Righteous|Work+Sans" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <style type="text/css">
            
             ul{
                
                width:600px;
                margin:0px auto;
                background-color:#f5f5f5;
                list-style-type:none;
                padding:0px;
                margin-top: 20px;
                
                
            }
            
            .options a{
                text-decoration:none;
                display:block;
                padding:30px 30px 30px 100px;
                font-family: 'Righteous',cursive;
                font-size:20px;
                color:black;
                border-bottom: 1px solid #757575;
                
            }
            
            .options a:visited{
                color:black;
            }
            .options a:hover{
                color:white;
                background-color:#b6dde7;
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
            body{
                margin:0px;
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
            
            
            <h2>Patient Management Menu</h2>
            <center><a href="AdminFunctions.php" class="back">Click Here to go back to patient menu</a></center>
        
            <ul>
                <li class="options"><a href="PatientManagement.php">View Registered Patients</a></li>
                <li class="options"><a href="RegPatient.php">Register New Patient</a></li>
                
            </ul>
        
        
    </body>
</html>
