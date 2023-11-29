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

    <div class="h-screen flex items-center justify-center">
    <div class="flex flex-row gap-8 justify-center items-center">
        <div>
                <img src="https://imagetolink.com/ib/Zd13peAJUq.png" alt="logo" width="500" height="500">
            </div>
            <div class="bg-[#14213D] p-16 flex flex-col rounded-md">
            <form action="/add-ticket" method="post" class="flex flex-col gap-2">
                <div class="flex flex-col gap-2">
                    <div class="flex flex-col gap-4">
                        <label class="text-white font-semibold text-xl" for="cars">Jam Tayang</label>
                        <select name="t_jamtayang" id="t_jamtayang" class="rounded-md px-4 py-2 w-[480px]">
                            <option value="07:00">07:00</option>
                            <option value="09:00">09:00</option>
                            <option value="11:00">11:00</option>
                            <option value="13:00">13:00</option>
                        </select>
                    </div>

                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-white font-semibold text-xl">Jumlah Tiket</h2>
                    <input name="t_jumlahtiket" id="t_jumlahtiket" type="text" placeholder="Masukan Jumlah Tiket" class="rounded-md px-4 py-2 w-[480px]">
                </div>
                
                <div class="flex flex-col gap-2">
                    <h2 class="text-white font-semibold text-xl">Tempat Duduk</h2>
                    <input name="t_tempatduduk" id="t_tempatduduk" type="text" placeholder="Masukan Tempat Duduk" class="rounded-md px-4 py-2 w-[480px]">
                </div>
                
                    <div class="flex flex-col gap-4">
                        <label class="text-white font-semibold text-xl" for="cars">Metode Pembayaran</label>
                        <select name="t_metodepembayaran" id="t_metodepembayaran" class="rounded-md px-4 py-2 w-[480px]">
                            <option value="Debit Card">Debit Card</option>
                            <option value="QRIS">QRIS</option>
                            <option value="Cash">Cash</option>
                        </select>
                    </div>
                
                <div class="flex flex-col gap-2">
                    <h2 class="text-white font-semibold text-xl">Masukan Kode Promo</h2>
                    <input name="t_promo" id="t-promo" type="text" placeholder="Masukan Kode Promo" class="rounded-md px-4 py-2 w-[480px]">
                </div>

                <button type='submit' onclick="window.location.href='/confirmation.php'" class="bg-[#FCA311] hover:bg-blue-500 text-white font-bold py-2 px-4 rounded transition ease-in-out">
                <a href="/confirmation">    
                Bayar
                </a>
                </button>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>