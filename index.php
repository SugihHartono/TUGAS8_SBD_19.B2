<?php
// Create database connection using config file
include("koneksi.php");
?>

<DOCTYPE html>
<html lang="en">
<head>    
    <title>Homepage</title>
</head>
 
<body>
    <?php
    $sql = 'SELECT * FROM kue';
    $result = mysqli_query($con, $sql);
?>    
<a href = tambah.php>Tambah</a>
    <table width='80%' border=1>
 <div>
    <tr>
        <th>Kode Kue</th> <th>Nama Kue</th> <th>Jenis Kue</th> <th>Harga</th><th>OPSI</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['kode_kue']."</td>";
        echo "<td>".$user_data['nama_kue']."</td>";
        echo "<td>".$user_data['jenis_kue']."</td>";
        echo "<td>".$user_data['harga_jual']."</td>";
        echo "<td><a href='ubah.php?id=$user_data[kode_kue]'>Edit</a> | <a href='hapus.php?id=$user_data[kode_kue]'>Delete</a></td></tr>";        
    }
    ?>
    </div>
    </table>
<?php
$sql = 'SELECT * FROM pembeli';
$result = mysqli_query($con, $sql);?>

<a href = tambah.php>Tambah</a>
    <table width='80%' border=1>
 <div>
    <tr>
        <th>NO HP</th> <th>Nama</th> <th>Alamat</th><th>OPSI</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['no_hp']."</td>";
        echo "<td>".$user_data['nama_pembeli']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td><a href='ubah.php?id=$user_data[no_hp]'>Edit</a> | <a href='hapus.php?id=$user_data[no_hp]'>Delete</a></td></tr>";        
    }
    ?>
    </div>
    </table>
    
    <?php
$sql = 'SELECT * FROM transaksi';
$result = mysqli_query($con, $sql);
?>

<a href = tambah.php>Tambah</a>
    <table width='80%' border=1>
    <div> 
    <tr>
        <th>ID</th> <th>No HP</th> <th>Kode Kue</th> <th>Berat (Kg)</th><th>Tanggal Transakasi</th><th>OPSI</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['no_hp']."</td>";
        echo "<td>".$user_data['kode_kue']."</td>";
        echo "<td>".$user_data['berat']."</td>";
        echo "<td>".$user_data['tanggal']."</td>";
        echo "<td><a href='ubah.php?id=$user_data[id]'>Edit</a> | <a href='hapus.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </div>
    </table>
</body>
</html>