<?php require 'db.php';?>
<html>

    <head>
    
        <title>View Patient Records</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Righteous|Work+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        
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
            padding:10px;
            box-shadow:5px 5px rgba(0,0,0,0.5);
            color:white;
            cursor:pointer;
            background-color:#b6dde7;
            border-style:outset;
            font-size:30px;
            font-family: 'Righteous';  
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
        
    </style>
        
    </head>
    
    <body>
    
        <h2>View Patient Records</h2>
        <div id="inpatient">
        
            <button id="inp">Click here to view Inpatient Records</button>
        </div>
        
        <div id="records">
            
            <table>
            
                <thead>
            
                <tr>
                
                    <th>pid</th> 
                    <th>Surname</th>
                    <th>Firstname</th> 
                    <th>date</th> 
                    <th>email</th> 
                    <th>phone</th> 
                    <th>address</th> 
                    <th>sex</th>
                    <th>age</th> 
                    <th>doctor_id</th>
                    <th>room_id</th>
                    
                </tr>
                </thead>
                <tbody>
                
                <?php get_patient_details();?>
                </tbody>
            </table>
        
            </div>
        
        
        <div id="outpatient">
        
            <button id="op">Click here to view Outpatient records</button>
        </div>
        
        <div id="records2">
            
            <table>
            
                <thead>
            
                <tr>
                
                    <th>pid</th> 
                    <th>Surname</th>
                    <th>Firstname</th> 
                    <th>date</th> 
                    <th>email</th> 
                    <th>phone</th> 
                    <th>address</th> 
                    <th>sex</th>
                    <th>age</th> 
                    <th>doctor_id</th>
                   
                </tr>
                </thead>
                <tbody>
                
                <?php get_patient_details();?>    
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