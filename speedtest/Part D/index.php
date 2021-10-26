<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.css">
</head>
<body>

 <?php 
 $json = file_get_contents('./data.json'); 
 $obj = json_decode($json);
 foreach ($obj as $item) {
    //  var_dump($item);
     echo $item->id . '</br>';
     echo $item->age . '</br>';
     echo $item->name . '</br>';
     echo $item->gender . '</br>';
     echo $item->email . '</br>';
     echo $item->phone . '</br>';
     echo $item->address . '</br>';
     echo '</br>';
 }
 ?>
    
    <nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
    </nav>

</body>
</html>