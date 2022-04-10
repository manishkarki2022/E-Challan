<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
    <h1>List of Traffics</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>S NO</th>
                <th>Name</th>
                
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                
                

            </tr>
        </thead>
        <tbody>
            <?php
            $servername ="localhost";
            $username ="root";
            $password ="";
            $database ="mystore";
            $connection=new mysqli($servername,$username,$password,$database);
            if ($connection->connect_error){
                die("Connection Failed ". $connection->connect_error);
            }
            $sql="SELECT * FROM employees";
            $result=$connection->query($sql);
            if(!$result){
                die("Invalid Query:".$connection->connect_error);
            }
            while($row=$result->fetch_assoc()){
                echo "<tr>
                <td>  ".$row["id"]."   </td>
                <td>".$row["first_name"]." </td>
                
                <td>".$row["email"]." </td>
                <td>".$row["phone"]." </td>
                <td>".$row["address"]." </td>
                <td>
                    
                </td>
            </tr>";
                
            }
 




           
            ?>
        </tbody>
    </table>
    <Form action="Admin DashBoard.html">

        <input type="submit" value="Back" class="view">

    </Form>
</body>
</html>