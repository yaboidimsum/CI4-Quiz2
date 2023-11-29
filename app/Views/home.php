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

    <div class="px-6 py-6">
        <div class="grid grid-cols-2 gap-8">
        <?php foreach($users as $user): ?>
            <div class="flex flex-row gap-8">
                <div>
                    <img src="<?php echo $user['f_gambar']; ?>" class="w-[17rem] h-[17rem] object-contain"/> 
                </div>
                <div class="flex flex-col gap-2">
                    <h1 class="text-[#2F3E5D] text-2xl font-bold "><?php echo $user['f_nama']; ?></h1>
                    <div>
                        <h2 class="text-[#2F3E5D] font-bold text-lg">Sinopsis</h2>
                        <p class="max-w-md text-sm font-medium text-justify text-[#2F3E5D]"><?php echo $user['f_sinopsis']; ?></p>
                    </div>
                    <div class="flex flex-row gap-8">
                        <div class="flex flex-col gap-2">
                            <h1 class="text-[#2F3E5D] font-bold text-md">Bioskop:</h1>
                            <h3 class="font-medium text-md text-[#2F3E5D] "><?php echo $user['f_bioskop']; ?></h3>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h1 class="text-[#2F3E5D] font-bold text-md">Jadwal Tayang:</h1>
                            <h3 class="font-medium text-md text-[#2F3E5D] "><?php echo $user['f_jadwaltayang']; ?></h3>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h1 class="text-[#2F3E5D] font-bold text-md">Harga</h1>
                            <h3 class="font-medium text-md text-[#2F3E5D] ">25.000</h3>
                        </div>
                    </div>
                    <div class="flex flex-row gap-8">
                        <a href="/ticket-form" class="bg-[#FCA311] rounded-lg px-4 py-2 text-[#2F3E5D] font-semibold hover:bg-[#2F3E5D] hover:text-[#FCA311] transition ease-in-out">
                            Beli Tiket
                        </a>
                        <button id="reviewBtn" onclick="toggleReviewForm()" class="bg-white rounded-lg px-4 py-2 text-[#2F3E5D] font-semibold hover:bg-[#2F3E5D] hover:text-white transition ease-in-out outline outline-[#2F3E5D]">
                             Review
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div id="reviewForm" class="hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg w-96">
        <label for="reviewInput" class="text-[#2F3E5D] font-bold text-md">Your Review:</label>
        <textarea id="reviewInput" class="w-full h-32 border border-[#2F3E5D] p-2 mt-2 resize-none"></textarea>
        <div class="flex flex-row gap-6">
            <button onclick="submitReview()" class="mt-4 bg-[#FCA311] rounded-lg px-4 py-2 text-[#2F3E5D] font-semibold hover:bg-[#2F3E5D] hover:text-[#FCA311] transition ease-in-out">
                Submit Review
            </button>
            <button onclick="closeReviewForm()" class="mt-2 bg-white text-[#2F3E5D] font-semibold hover:text-red-500 transition ease-in-out">
                Close
            </button>
        </div>
    </div>
        </div>
    </div>
</div>

<script>
    function toggleReviewForm() {
        var reviewForm = document.getElementById('reviewForm');
        reviewForm.classList.toggle('hidden');
    }

    function submitReview() {
        // Add logic to handle review submission
        // You can use the content of the textarea with document.getElementById('reviewInput').value
        // For now, just close the review form
        closeReviewForm();
    }

    function closeReviewForm() {
        var reviewForm = document.getElementById('reviewForm');
        reviewForm.classList.add('hidden');
    }
</script>

</body>
</html>