<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap-3.4.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sinh viên</title>
</head>
<body>
<h1 style="text-align: center">Danh sách sản phẩm</h1>

    <?php
        $dssanpham = [];
        $dssanpham [] =[
            "name" => "Jordan 1 Low Blue",
            "price" => 6000000,
            "describe" => "Bên Ngoài: Da 100%, Đế: Cao Su 100%",
            "supplier_name"=> "Tinker Linn Hatfield"
        ];
    $dssanpham [] =[
        "name" => "Jordan 1 Travis Scott",
        "price" => 11190000,
        "describe" => "Bên Ngoài: Da 100%, Đế: Cao Su 100%",
        "supplier_name"=> "Tinker Linn Hatfield"
    ];
    $dssanpham [] =[
        "name" => "Jordan 1 Chicago",
        "price" => 7800000,
        "describe" => "Bên Ngoài: Da 100%, Đế: Cao Su 100%",
        "supplier_name"=> "Tinker Linn Hatfield"
    ];
    ?>
<div class="container">
<table class="table table-striped">
    <thead>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Describe</th>
        <th>Supplier_name</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($dssanpham as $sp){ ?>
        <tr>
            <td><?php echo $sp["name"]?></td>
            <td><?php echo $sp["price"]?></td>
            <td><?php echo $sp["describe"]?></td>
            <td><?php echo $sp["supplier_name"]?></td>
        </tr>
    <?php  } ?>
    </tbody>
</table>
</div>
</body>
</html>