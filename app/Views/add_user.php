<!DOCTYPE html>
<html>

<head>
  <title>Codeigniter 4 Add User With Validation Demo</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>

    .form-container {
      max-width: 500px;
      width: 100%;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
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
                <a href="/film-list">
                    <h2 class="text-white font-semibold text-xl transition hover:text-[#FCA311]">Admin</h2>
                </a>
            </div>
        </div>
    </header>
  <div class="h-screen flex items-center justify-center">
    <div class="form-container">
      <form method="post" id="add_create" name="add_create" action="<?= site_url('/submit-form') ?>" class="bg-[#14213D] shadow-md rounded p-6">
        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-white">Name</label>
          <input type="text" name="f_nama" id="name" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <label for="sinopsis" class="block text-sm font-medium text-white">Sinopsis</label>
          <input type="text" name="f_sinopsis" id="sinopsis" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <label for="bioskop" class="block text-sm font-medium text-white">Bioskop</label>
          <input type="text" name="f_bioskop" id="bioskop" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <label for="jadwaltayang" class="block text-sm font-medium text-white">Jadwal Tayang</label>
          <input type="date" name="f_jadwaltayang" id="jadwaltayang" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <label for="gambar" class="block text-sm font-medium text-white">Gambar</label>
          <input type="text" name="f_gambar" id="gambar" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <button type="submit" class="w-full bg-[#FCA311] hover:bg-white hover:text-[#14213D] font-semibold text-white py-2 px-4 rounded-md transition ease-in-out">Insert Film</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          f_nama: {
            required: true,
          },
          f_sinopsis: {
            required: true,
          },
          f_bioskop: {
            required: true,
          },
          f_jadwaltayang: {
            required: true,
          },
          f_gambar: {
            required: true,
          },
        },
        messages: {
          f_nama: {
            required: "Name is required.",
          },
          f_sinopsis: {
            required: "Sinopsis is required.",
          },
          f_bioskop: {
            required: "Bioskop is required.",
          },
          f_jadwaltayang: {
            required: "Jadwal Tayang is required.",
          },
          f_gambar: {
            required: "Gambar is required.",
          },
        },
      });
    }
  </script>
</body>

</html>
