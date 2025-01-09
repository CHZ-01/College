<html>
    <head>
        <title>TABLE VIEW</title>
        <style>
            body
            {
                margin: 0px;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 20px;
            }
            table
            {
                font-size: 20px;
                border-collapse: collapse;
            }
            table, th, td
            {
                border: 2px solid black;
            }            
        </style>
    </head>
    <body>
        <center>
            <?php
                $con=mysqli_connect("localhost","root","","exm");
                $sel="SELECT * FROM student";
                $qry=mysqli_query($con,$sel);
                $row=mysqli_num_rows($qry);

                if($row)
                {
                    echo "<table cellpadding='10px'>
                            <tr>
                                <th>SNO</th>
                                <th>RLNO</th>
                                <th>NAME</th>
                                <th>MARK</th>
                            </tr>";
                    
                    while($data=mysqli_fetch_object($qry))
                    {
                    echo   "<tr>
                                <td>$data->sno</td>
                                <td>$data->rno</td>
                                <td>$data->name</td>
                                <td>$data->mark</td>
                            </tr>";
                    }        
                    
                    echo "</table>";
                    
                }
            ?>
        </center>
    </body>
</html>