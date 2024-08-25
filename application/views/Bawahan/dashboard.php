<!-- content -->
<div class="bg-white col-span-10 row-span-6 h-screen">
    <div class="p-4">
        <h1 class="text-xl font-semibold">Dashboard</h1>
        <div class="mt-4">
            <div class="border border-black w-[650px]">
                <div class="border border-black flex justify-center items-center">
                    <div class="text-center w-40">
                        <h1>Profile</h1>
                    </div>
                    <div class="w-full h-8 bg-gray-800"></div>
                </div>
                <div class="flex justify-start gap-4 p-2">
                    <div class="w-[200px] h-[200px] p-2">
                        <img src="<?= base_url('assets/img/') . $user['image']; ?>" alt="Profile Image" class="border border-black bg-cover">
                    </div>
                    <div class="">
                        <div class="">
                            <p class="inline-block">Nama Lengkap</p>
                            <span class="inline-block mx-4">:</span>
                            <p class="inline-block"><?= $user['nama']; ?></p>
                        </div>
                        <div class="">
                            <p class="inline-block">NIK</p>
                            <span class="inline-block ml-24 mr-4">:</span>
                            <p class="inline-block"><?= $user['nik']; ?></p>
                        </div>
                        <div class="">
                            <p class="inline-block">Jabatan</p>
                            <span class="inline-block ml-[4.2rem] mr-4">:</span>
                            <p class="inline-block"><?= $user['bagian']; ?></p>
                        </div>
                        <div class="">
                            <p class="inline-block">Departemen</p>
                            <span class="inline-block ml-[2.1rem] mr-4">:</span>
                            <p class="inline-block"><?= $user['departement']; ?></p>
                        </div>
                        <div class="">
                            <p class="inline-block">Leader</p>
                            <span class="inline-block ml-[4.6rem] mr-4">:</span>
                            <p class="inline-block"><?= $user['leader']; ?></p>
                        </div>
                        <div class="">
                            <p class="inline-block">Supervisor</p>
                            <span class="inline-block ml-[2.9rem] mr-4">:</span>
                            <p class="inline-block"><?= $user['supervisor']; ?></p>
                        </div>
                        <div class="">
                            <p class="inline-block">Jobdesk</p>
                            <span class="inline-block ml-[4rem] mr-4">:</span>
                            <p class="inline-block"><?= $user['jobdesk']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>