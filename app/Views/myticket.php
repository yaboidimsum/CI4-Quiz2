<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoughtCinema</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
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
        <div class="grid grid-cols-2 gap-8 px-6 py-4">
    <?php
    function generateRandomCode() {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $code = '';

        for ($i = 0; $i < 5; $i++) {
            $code .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $code;
    }
    ?>
            <?php if($users): ?>
                <?php foreach($users as $user): ?>
                    <div class="bg-[#14213D] rounded-md px-6 py-6 flex flex-col justify-center items-center gap-4">
                    <h2 class="text-white font-semibold">Berikut adalah Tiket yang anda miliki</h2>
                    <div class="flex flex-row gap-4 bg-white p-6 rounded-md items-center">
                        <div class="flex flex-col gap-6">
                            <h2 class="text-[#14213D] font-bold text-2xl"><?= $user['f_nama']; ?></h2>
                            <div class="flex flex-row gap-4">
                                <p class="max-w-md text-justify"><?= $user['f_sinopsis']; ?></p>
                                 <div class="w-full">
                                <img src="<?php echo $user['f_gambar']; ?>">
                                 </div>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div>
                                    <h2 class="text-lg font-semibold ">Bioskop: </h2>
                                    <p class="text-sm font-medium"><?= $user['f_bioskop']; ?></p>
                                </div>
                                
                                <?php
                                    $combinedDateTime = $user['f_jadwaltayang'] . ' ' . $user['t_jamtayang'];
                                    $timestamp = strtotime($combinedDateTime);
                                    ?>
                                <!-- Format the combined timestamp -->
                                <div>
                                    <h2 class="text-lg font-semibold ">Waktu: </h2>
                                    <p class="text-sm font-medium"><?= date('Y-m-d H:i', $timestamp); ?></p>
                                </div>
                                
                                <div>
                                    <h2 class="text-lg font-semibold ">Code: </h2>
                                    <p class="text-sm font-medium"><?= generateRandomCode(); ?></p>
                                </div>
                                
                                <div>           
                                    <h2 class="text-lg font-semibold ">Jumlah Tiket: </h2>                         
                                    <p class="text-sm font-medium"><?= $user['t_jumlahtiket']; ?></p>
                                </div>
                                <div>
                                    <h2 class="text-lg font-semibold ">Tempat Duduk: </h2>
                                    <p class="text-sm font-medium"><?= $user['t_tempatduduk']; ?></p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    </div>

</body>
</html>
