<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <h1>New student registration</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>
    <header>
         <h3>Registered students</h3>
        <class container="bg-danger" </class>
    </header>
       <body>

    <nav>
        <a href="form-daftar.php">[+] New add</a>
    </nav>

    <br>

    <table border="2" cellpadding="20">
    <thead>
        <tr>
         <th bgcolor="pink" rowspan="2">No</th>
         <th bgcolor="pink" rowspan="2">Name</th>
         <th bgcolor="pink" rowspan="2">Address</th>
         <th bgcolor="pink" rowspan="2">Gender</th>
         <th bgcolor="pink" rowspan="2">Religion</th>
         <th bgcolor="pink" rowspan="2">School</th>
         <th bgcolor="pink" rowspan="2">Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Delete</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>