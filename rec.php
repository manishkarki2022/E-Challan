<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="new.css">

    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" rel="stylesheet"> -->

    <!-- Html2Pdf -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js" integrity="sha512vDKWohFHe2vkVWXHp3tKvIxxXg0pJxeid5eo+UjdjME3DBFBn2F8yWOE0XmiFcFbXxrEOR1JriWEno5Ckpn15A==" crossorigin="anonymous">
    </script>

    <style>
        .heading {
            text-align: center;
            color: #2F8D46;
        }
    </style>

</head>
<?php 
$code = $_GET['code'];
$link = mysqli_connect("localhost", "root", "", "echallan");

 $result = mysqli_query($link, "Select *from userchallan where code = '{$code}'");
 $row = mysqli_fetch_assoc($result);

?>

<body>





    <!-- Form encrypted as text -->
    <form id="form-print" enctype="text/plain" class="form-control">
        <h2 class="heading"> E_challan Recipts</h2>
        <h3 style="text-align:center">Nepal Traffic <br> E-Challan System</h3>
        <hr><br><br>
        <hr>
        <img src="vidal.png" class="img">

        <label for="name">
		<strong id="lboxt" font_szire>Name        </strong>
		</label>
        <input class="form-control" type="text" name="Name" id="lbox" value="<?php echo $row['name'] ?>">
        <br>
        <br>

        <label for="Vehiclet">
		<strong id="lboxt">VehicleType : </strong>
		</label>
        <input class="form-control" type="text" name="Vehiclet" id="lbox" value="<?php echo $row['vehiclet'] ?>">
        <br>
        <br>

        <label for="License No.">
        <strong id="lboxt">License No  : </strong>
         </label>
        <input class="form-control" type="text" name="License" id="lbox" value="<?php echo $row['liscence'] ?>">
        <br>
        <br>

        <label for="Challan Date">
        <strong id="lboxt">Challan Date: </strong>
        </label>
        <input class="form-control" type="text" name="Challan data" id="lbox" value="<?php echo $row['date'] ?>">
        <br>
        <br>
        <hr class="veti" style="border-left:2px solid #000;height:400px">

        <label for="Place">
         <strong id="rboxt">Place       :</strong>
        </label>
        <input class="form-control" type="text" name="Place" id="rbox" value="<?php echo $row['place'] ?>">
        <br>
        <br>

        <label for="Vehicel No.">
        <strong id="rboxt">Vehicel No  : </strong>
        </label>
        <input class="form-control" type="text" name="Vehicel" id="rbox" value="<?php echo $row['vehicle'] ?>">
        <br>
        <br>

        <label for="Created By">
        <strong id="rboxt">Created By  : </strong>
        </label>
        <input class="form-control" type="text" name="created by" id="rbox" value="<?php echo $row['created'] ?>">
        <br>
        <br>

        <label for="Guilty for">
        <strong id="rboxt">Guilty for  : </strong>
        </label>
        <input class="form-control" type="text" name="Guilty for " id="rbox" value="<?php echo $row['guilty'] ?>">
        <hr class="hr2nd">
        <label for="Fine">
        <strong id="fine">Fine Amount  : </strong>
        </label>
        <input class="form-control" type="text" name="fine " id="fine" value="<?php echo $row['fine'] ?>">
        <br><br>
        <hr class="hr2nd">



        
    </form>
    <input type="button" class="button" onclick="GeneratePdf();" value="Print">

    <script>
        // Function to GeneratePdf
        function GeneratePdf() {
            var element = document.getElementById('form-print');
             var opt = {
                margin: -0.10,
                filename: 'myfile.pdf',
                image: { type: 'jpeg', quality: 0.9 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(element).set(opt).save();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
</body>

</html>