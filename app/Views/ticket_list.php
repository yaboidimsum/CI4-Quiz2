<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>VoughtCinema</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body >

<header>
        <div class="px-16 py-8 bg-[#14213D] flex flex-row justify-between">
            <div>
                <a href="/" class="text-white font-semibold text-xl">
                    VoughtCinema
                </a>
            </div>
            <div class="flex flex-row gap-4">
            <a href="/ticket-list">
                    <h2 class="text-white font-semibold text-xl transition hover:text-[#FCA311]">History Transaction</h2>
                </a>
                <a href="/myticket">
                    <h2 class="text-white font-semibold text-xl transition hover:text-[#FCA311]">My Ticket</h2>
                </a>
            </div>
        </div>
    </header>

    <div class="container mx-auto mt-4">
  <?php
  if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
  }
  ?>
  <div class="mt-3">
    <table class="table-auto w-full border border-collapse border-gray-400" id="ticket-list">
      <thead>
        <tr>
          <th class="border p-2">Nomor</th>
          <th class="border p-2">Nama</th>
          <!-- <th class="border p-2">Sinopsis</th> -->
          <th class="border p-2">Bioskop</th>
          <th class="border p-2">Jadwal Tayang</th>
          <!-- <th class="border p-2">Gambar</th> -->
          <th class="border p-2">Jam Tayang</th>
          <th class="border p-2">Jumlah Tiket</th>
          <th class="border p-2">Tempat Duduk</th>
        </tr>
      </thead>
      <tbody>
          <?php if($users): ?>
          <?php $nomor = 1 ?> 
          <?php foreach($users as $user): ?>
          <tr>
            <td class="border p-2"><?php echo $nomor++; ?></td>
             <td class="border p-2"><?php echo $user['f_nama']; ?></td>
             <!-- <td class="border p-2"><?php echo $user['f_sinopsis']; ?></td> -->
             <td class="border p-2"><?php echo $user['f_bioskop']; ?></td>
             <td class="border p-2"><?php echo $user['f_jadwaltayang']; ?></td>
             <!-- <td class="border p-2"><?php echo $user['f_gambar']; ?></td> -->
             <td class="border p-2"><?php echo $user['t_jamtayang']; ?></td>
             <td class="border p-2"><?php echo $user['t_jumlahtiket']; ?></td>
             <td class="border p-2"><?php echo $user['t_tempatduduk']; ?></td>
             <td class="border p-2">
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
      $('#ticket-list').DataTable();
  });
</script>
</body>
</html>