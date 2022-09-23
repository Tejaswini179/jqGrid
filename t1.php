<?php
$con = mysqli_connect('localhost', 'root', '', 'task1');
$res = mysqli_query($con, 'Select * from user');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!-- <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/themes/redmond/jquery-ui.min.css">  
    <link rel="stylesheet" href="./css/ui.jqgrid.css">


</head>
<body>
<div class="container">

    <table id="myTable">
        <thead>
            <tr>
               
                <th>First Name</th>
                <th>Last name</th>
                <th>Date Of Birth </th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            
        <?php while ($row = mysqli_fetch_assoc($res)) { ?> 
            <tr>
                <td><?php echo $row['First_Name']; ?> </td>
                <td><?php echo $row['Last_Name']; ?></td>
                <td><?php echo $row['DOB']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                
            </tr> 
           <?php } ?>
            

        </tbody>
    </table>



    <script
  src="./js/jquery-1.7.2.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
  <script src="./js/i18n/grid.locale-en.js"></script>
  <script src="./js/jquery.jqGrid.min.js"></script>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

</body>
</div>
</html>