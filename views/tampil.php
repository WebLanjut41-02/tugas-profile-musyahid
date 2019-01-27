<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url('application/views/assets/css') ?>/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('application/views/assets/css') ?>/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
       <div class="row">
        <div class="col-sm-6">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nama</th>
                <th><?php echo $nama ?></th>
              </tr>
            </thead>
            <tbody>
              <td>Email</td>
              <td><?php echo $email; ?></td>
            </tbody>
            <thead>
              <tr>
                <th>Telepon</th>
                <th><?php echo $telp; ?></th>
              </tr>
            </thead>
             <tbody>
              <td>Kategori</td>
              <td><?php echo $kategori; ?></td>
            </tbody>
            <thead>
              <tr>
                <th>Pesan</th>
                <th><?php echo $pesan; ?></th>
              </tr>
            </thead>
          </table>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>