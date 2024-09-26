<div class="bg-white col-span-10 row-span-6 h-screen">
    <div class="max-w-4xl mx-auto">
        <div class="w-full text-center">
            <h1>Daily Activity Record</h1>
            <h1>Progammer</h1>
        </div>
        <div class="border">
            <div class="flex justify-between p-2 border bg-gray-500">
                <div>
                    <p>Tanggal <span class="ml-[1rem] mr-2">:</span> 12/12/2024 00:00:00 WIB</p>
                    <p>Shift <span class="ml-[2.4rem] mr-2">:</span> A</p>
                </div>
                <div>
                    <p>Main Prog <span class="ml-[1rem] mr-2">:</span> Machrus</p>
                    <p>Sub Prog <span class="ml-[1.5rem] mr-2">:</span> Ifah</p>
                </div>
            </div>
            <h3 class="ml-2">Record</h3>
            <div class="p-2 m-2">
                <form action="<?php echo site_url('bawahan/laporanharian/addRecordDoc') ?>">
                    <div class="border p-2" >
                        <button type="button" id="add-input" class="ml-2 px-2 py-1 bg-indigo-500 border border-black rounded-sm">Tambah Alteration</button>
                        <div class="flex items-start">
                            <label for="" class="ml-2 w-[200px]">Alteration</label>
                            <div class="flex flex-col w-full" id="balancing-container">
                                <input type="text" name="alteration[]" id="program" readonly placeholder="Masukan judul record" class="w-full border border-black rounded-sm my-1">
                            </div>
                        </div>
                        <div class="flex items-start my-2">
                            <label for="" class="ml-2 mr-[4.8rem]">Common Array</label>
                            <textarea name="common" id="" placeholder="Masukan common array" class="border border-black w-full"></textarea>
                        </div>
                        <div class="flex items-start my-2">
                            <label for="" class="ml-2 mr-[6.5rem]">Subcont</label>
                            <textarea name="subcont" id="" placeholder="Masukan subcont" class="border border-black w-full"></textarea>
                        </div>
                        <div class="flex items-start my-2">
                            <label for="" class="ml-2 mr-[8.5rem]">Info</label>
                            <textarea name="info" id="" placeholder="Masukan info" class="border border-black w-full"></textarea>
                        </div>
                        <!-- <div class="flex items-start my-2">
                            <label for="mesin" class="ml-2 mr-[8.5rem]">Pilih Mesin</label>
                            <select name="mesin" id="mesin">
                                <option value="yamaha">Yamaha</option>
                                <option value="panasonic">Panasonic</option>
                            </select>
                        </div> -->
                    </div>
                    <div class="w-full flex justify-center items-center gap-4 mt-4">
                        <button class="border rounded-md px-4 py-1 font-semibold bg-red-400">Batal</button>
                        <button class="border rounded-md px-4 py-1 font-semibold bg-green-500">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('balancing-container');

        // Function to open file dialog
        function openFolder(event) {
            
            if (event.target.matches("input[type='text'][name='alteration[]']")) { // Cek jika elemen yang diklik adalah input yang diinginkan
                const fileInput = document.createElement('input');
                fileInput.type = 'file';
                fileInput.style.display = 'none';

                fileInput.addEventListener('change', function() {
                    if (fileInput.files.length > 0) {
                        event.target.value = fileInput.files[0].name; // Set the input value to the selected file name
                    }
                });

                fileInput.click(); // Trigger the file input dialog
            }
        }

        // Attach the open folder function to the container, and it will handle all clicks on descendant inputs
        container.addEventListener('click', openFolder);

        // Function to dynamically add new input fields
        const addInputBtn = document.getElementById('add-input');

        if (addInputBtn) {
            addInputBtn.addEventListener('click', function() {
                const newInput = document.createElement('input');
                newInput.type = 'text';
                newInput.name = 'alteration[]';
                newInput.placeholder = 'Masukan judul record';
                newInput.className = 'w-full border border-black rounded-sm my-1';
                newInput.readOnly = true;

                // Append the new input inside the balancing container
                container.appendChild(newInput);
            });
        }
    });

</script>