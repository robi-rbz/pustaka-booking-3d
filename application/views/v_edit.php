<html>

<head>
     <title>CRUD dengan CodeIgniter</title>
</head>

<body>


     <center>
          <h1>Belajar CRUD dengan CodeIgniter</h1>
          <h3>Form Input Data Baru</h3>
     </center>
     <?php foreach ($user as $u) { ?>
          <form action="<?php echo base_url() . 'crud/update'; ?>" method="post">
               <center>
                    <table>
                         <tr>
                              <input type="hidden" name="id" value="<?php echo $u->id ?>">
                              <td>Nama</td>
                              <td>:</td>
                              <td><input type="text" name="nama" id="" value="<?php echo $u->nama ?>"></td>
                         </tr>
                         <tr>
                              <td>Alamat</td>
                              <td>:</td>
                              <td><input type="text" name="alamat" id="" value="<?php echo $u->alamat ?>"></td>
                         </tr>
                         <tr>
                              <td>Pekerjaan</td>
                              <td>:</td>
                              <td><input type="text" name="pekerjaan" id="" value="<?php echo $u->pekerjaan ?>"></td>
                         </tr>
                         <tr>
                              <td><input type="submit" value="Simpan"></td>
                         </tr>
                    </table>
               </center>
          </form>
     <?php } ?>
</body>

</html>