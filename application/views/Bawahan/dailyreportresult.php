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
                        <th>Balancing Pogram</th>
                        <th>Info</th>
                        <th>Mesin</th>
                        <th>Tanggal</th>
                        <!-- <th>Keperawatan</th>
                        <th>Ketidakhadiran</th>
                        <th>Kegiatan</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    <?php foreach($report as $row) :?>
                        <tr>
                            <td class="p-4 border-b border-gray-200 text-left"><?= $no += 1 ?></td>
                            <!-- <td class="p-4 border-b border-gray-200"><?= $row['balancing_prog'] ?></td> -->
                            <td class="p-4 border-b border-gray-200 text-start">
                                <?php
                                // Pecahkan string 'balancing_prog' berdasarkan koma
                                $balancing_list = explode(',', $row['balancing_prog']);
                                // Tampilkan sebagai list dengan nomor urut
                                echo '<ol style="padding-left: 20px;">';
                                foreach ($balancing_list as $index => $balancing_item) {
                                    echo '<li style="list-style-type: decimal;">' . trim($balancing_item) . '</li>'; // trim untuk menghilangkan spasi yang berlebih
                                }
                                echo '</ol>';
                                ?>
                            </td>
                            <td class="p-4 border-b border-gray-200"><?= $row['info'] ?></td>
                            <td class="p-4 border-b border-gray-200">Mesin</td>
                            <td class="p-4 border-b border-gray-200"><?= $row['tanggal_input'] ?></td>
                            <td class="p-4 border-b border-gray-200">
                                <a href="<?php echo site_url('printer/print_report') ?>">Pint</a>
                            </td>
                            <!-- <td class="p-4 border-b border-gray-200">Perawatan Hardware</td>
                            <td class="p-4 border-b border-gray-200">Keperawatan</td>
                            <td class="p-4 border-b border-gray-200">Meeting</td> -->
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