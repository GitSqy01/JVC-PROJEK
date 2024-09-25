<div class="bg-white col-span-10 row-span-6 h-screen">
    <div class="max-w-4xl mx-auto">
        <div class="text-center my-2">
            <h1 class="text-2xl font-bold">Daily Report Result</h1>
        </div>
        <div>
            <table class="w-full table-auto border-collapse text-sm text-center">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border-b-2 border-gray-200 p-4 text-left">No</th>
                        <th>Alteration</th>
                        <th>Common Array</th>
                        <th>Subcont</th>
                        <th>Info</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    <?php foreach($report as $row) :?>
                        <tr>
                            <td class="p-4 border-b border-gray-200 text-left"><?= $no += 1 ?></td>
                            <td class="p-4 border-b border-gray-200"><?= $row['alteration'] ?></td>
                            <td class="p-4 border-b border-gray-200"><?= $row['common_array'] ?></td>
                            <td class="p-4 border-b border-gray-200"><?= $row['subcont'] ?></td>
                            <td class="p-4 border-b border-gray-200"><?= $row['info'] ?></td>
                            <td class="p-4 border-b border-gray-200">Print</td>
                        </tr>
                    <?php endforeach;?>
                    <!-- Baris untuk data hari berikutnya -->
                    <!-- <tr>
                        <td class="p-4 border-b border-gray-200">2022-03-28</td>
                        <td class="p-4 border-b border-gray-200">09:00 AM</td>
                        <td class="p-4 border-b border-gray-200">05:00 PM</td>
                        <td class="p-4 border-b border-gray-200">8 hours</td>
                        <td class="p-4 border-b border-gray-200">Pembaruan Software</td>
                        <td class="p-4 border-b border-gray-200">-</td>
                        <td class="p-4 border-b border-gray-200">Workshop Keamanan Cyber</td>
                    </tr> -->
                    <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
</div>