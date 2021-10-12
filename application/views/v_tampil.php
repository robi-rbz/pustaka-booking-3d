<html>

<head>
     <title>Belajar CRUD</title>
</head>

<body>
     <center>
          <h1>Belajar CRUD dengan CodeIgniter</h1>
     </center>
     <center><?php echo anchor('crud/tambah', 'Tambah Data'); ?></center>
     <table style="margin: 20px auto;" border="1">
          <tr>
               <th>No</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>Pekerjaan</th>
               <th>Aksi</th>
          </tr>
          <?php
          $no = 1;
          foreach ($user as $u) {
          ?>
               <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $u->nama ?></td>
                    <td><?php echo $u->alamat ?></td>
                    <td><?php echo $u->pekerjaan ?></td>
                    <td><?php echo anchor('crud/edit', 'Edit '); ?><?php echo anchor('crud/hapus', 'Hapus'); ?></td>
               </tr>
          <?php } ?>
     </table>
</body>

</html>