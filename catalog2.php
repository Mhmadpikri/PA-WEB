<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catalog</title>
    <link rel="stylesheet" href="catalog.css">
</head>
<body>
    <div class="drop" >
            <h3>Daftar Catalog Metropolis</h3>
            <div>
            <table border=1>
                <tr>
                    <th>NO</th>
                    <th>Tanggal Upload</th>
                    <th>Potongan</th>
                </tr>

                    <?php
                        require 'config2.php';
                        $result = $db->query("SELECT * FROM contoh");
                        
                        $i = 1;
                        while($row = mysqli_fetch_array($result)){
                    ?>
                <tr>
                    <td><?=$i?></td>
                    <td><?=$row['upload']?></td>
                    <td>
                        <img src="foto/<?=$row['foto']?>" alt="" width="300px">
                    </td>
                </tr>

                    <?php
                        $i++; }
                    ?>

            </table>
                        </div>
        </div>
</body>
</html>