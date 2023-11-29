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
                <h2 class="text-white font-semibold text-xl">
                    VoughtCinema
                </h2>
            </div>
            <div>
                <a href="/myticket">
                    <h2 class="text-white font-semibold text-xl transition hover:text-[#FCA311]">My Ticket</h2>
                </a>
            </div>
        </div>
    </header>
    <div>
        <div class="h-screen flex items-center justify-center">
            <div class="bg-[#14213D] px-16 py-8 rounded-md w-[800px] flex flex-col justify-center items-center gap-4">
                <h2 class="text-white font-semibold">Selamat! Kamu mendapatkan promo dari pembelian tiket!</h2>
                <div class="flex flex-row gap-4 bg-white p-4 rounded-md">
                    <div class="flex flex-col gap-5"  >
                    <?php
                    // Shuffle the $users array to randomize the order
                    shuffle($users);

                    // Get a random key from the shuffled array
                    $randomKey = array_rand($users);

                    // Retrieve the corresponding user using the random key
                    $randomUser = $users[$randomKey];
?>    
                    
                    <div class="flex flex-row gap-2">
                        <h2 class="text-[#14213D] font-bold text-md">Promo</h2> <span class="text-[#14213D] font-bold text-md"><?php echo $randomUser['f_nama'] ?></span>
                    </div>
                        <p class="max-w-md text-sm text-justify"><?php echo $randomUser['f_sinopsis'] ?></p>
                        <div class="px-6 py-8 rounded-md flex justify-center items-center bg-[#FCA311]">
                            <h2 class="font-bold text-2xl">DOTS2023</h2>
                        </div>

                    </div>
                    <div>
                    <img src="<?php echo $randomUser['f_gambar']; ?>" class="object-cover w-[17rem] h-[17rem]"/>
                    </div>
                </div>
                    <p class="text-justify text-white font-md">Pembayaranmu sedang dipending, selesaikan pembayaran sesuai dengan metode pembayaran. Cek halaman tiket secara berkala untuk melihat tiket yang sudah kamu bayar</p>
                    <div class="flex flex-row gap-4">
                            <a href="/myticket" class="px-6 py-4 bg-[#FCA311] flex justify-center items-center rounded-md hover:text-[#FCA311] hover:bg-white transition ease-in-out text-[#14213D] font-bold text-md " >Cek Halaman Tiket</a>
                            <a href="/" class="bg-[#2F3E5D]  rounded-lg flex justify-center items-center  px-6 text-white font-semibold hover:bg-white hover:text-[#2F3E5D] transition ease-in-out outline outline-white" >Home</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>