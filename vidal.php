<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="vidal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<?php 
$code = $_GET['code'];
$link = mysqli_connect("localhost", "root", "", "echallan");

 $result = mysqli_query($link, "Select *from userchallan where code = '{$code}'");
 $row = mysqli_fetch_assoc($result);

?>

<body>
    <section class="text">
        <div class="row">
            <div class="one">
                <img src="vidal.png">
            </div>
            <div class="two">
                <h1>E-CHALLAN SYSTEM</h1>
            </div>

            <div class="three">
                <h2>Login</h2>
            </div>
        </div>

<form id ="form-print" enctype="text/plain" 
          class="form-control">
  

    </section>
    <section class="new">
        <h5>Nepal Police</h5>
        <h5>Kathmandu Traffic Police</h5>
        <h5>E-Challan System</h5>

    </section>
    <section class="line">
        <hr>
        <br><br>
        <hr>

        <div class="challan">
            <div id="col">
                <ul>
                    <h4>Name :</h4><input type="text" class="boxname" value="<?php echo $row['name'] ?>">
                    <h4>Vehicle type :</h4> <input type="text" class="boxname" value="<?php echo $row['vehiclet'] ?>">
                    <h4>License No. : </h4><input type="text" class="boxname" value="<?php echo $row['liscence'] ?>">
                    <h4>Challan Date : </h4><input type="text" class="boxname" value="<?php echo $row['date'] ?>">
                </ul>
            </div>
            <div id="column">
                <ul>
                    <h4>Place: </h4><input type="text" class="boxname" value="<?php echo $row['place'] ?>">
                    <h4>Vehicle No : </h4><input type="text" class="boxname" value="<?php echo $row['vehicle'] ?>">
                    <h4>Created By: </h4><input type="text" class="boxname" value="<?php echo $row['created'] ?>">
                    <h4>Guilty For: </h4><input type="text" class="boxname" value="<?php echo $row['guilty'] ?>">
                </ul>
            </div>
        </div>
        <hr>
        <div class="final">
            <h4 class="fine" style="position: absolute;left: 71%; top: 64%;">Fine Amount NRs : </h4><input type="text" style="position: absolute;left: 82%; top: 66%;border: none; class="boxname" value="<?php echo $row['fine'] ?>">
            <br>
            <br>
            <hr>
    </section>
    <input type="button" name="" class="hero-btn" value="Print">
    </form>
    
       
   <script>          
        // Function to GeneratePdf
        function GeneratePdf() {
            var element = document.getElementById('form-print');
            html2pdf(element);
        }
    </script>
        <script src=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity=
"sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" 
        crossorigin="anonymous">
    </script>


</body>

</html>