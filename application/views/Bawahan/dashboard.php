<div class="overflow-hidden h-screen">
    <div class="grid grid-cols-12 grid-flow-col">
        <!-- sidebar -->
        <div class="bg-[#4E31AA] col-span-2 row-span-12 h-screen text-center text-white">
            <div class="border border-blue-900 bg-[#3A1078] p-1">
                <h1 class="text-2xl font-semibold">Prod</h1>
                <h1 class="text-2xl font-semibold">Tech Support</h1>
            </div>
            <div class="flex flex-rows justify-center items-center gap-1 p-2">
                <span class="border inline-block rounded-full w-20 h-20 overflow-hidden p-2 bg-white">
                    <img src="<?= base_url('assets/img/profile.png') ?>" alt="Profile Image" class="bg-contain">
                </span>
                <div>
                    <p>Sandhika Galih</p>
                    <p class="text-gray-300">Progammer</p>
                </div>
            </div>
            <div>
                <h1 class="text-xl text-gray-500 bg-gray-800 p-2 my-4">Main Menu</h1>
                <div class="mt-8">
                    <ul class="text-start">
                        <li class="border-l-8 border-black bg-gray-200 p-2">
                            <a href="#" class="text-gray-600 dark:text-gray-500 font-semibold">
                                <img src="<?= base_url('assets/icons/dashboard.svg') ?>" alt="" class="h-6 w-6 inline-block mx-2">
                                Dashboard
                            </a>
                        </li>
                        <li class="my-2 p-2 border-l-8 border-black bg-gray-200">
                            <a href="#" class="text-gray-600 dark:text-gray-500 font-semibold">
                                <img src="<?= base_url('assets/icons/line.svg') ?>" alt="" class="h-6 w-6 inline-block mx-2">
                                Laporan Harian
                            </a>
                        </li>
                        <li class="p-2 border-l-8 border-black bg-gray-200">
                            <a href="#" class="text-gray-600 dark:text-gray-500 font-semibold">
                                <img src="<?= base_url('assets/icons/user.svg') ?>" alt="" class="h-6 w-6 inline-block mx-2">
                                User Manage
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- navbar -->
        <nav class="bg-[#4E31AA] col-span-10 row-span-1">
            <div class="flex justify-between items-center px-2 py-[1.06rem]">
                <img src="<?= base_url('assets/icons/bars-solid.svg') ?>" alt="" class="h-10 w-10">
                <h1 class="text-2xl font-bold">JVCKENWOOD</h1>
                <a href="#">
                    <img src="<?= base_url('assets/icons/exit.svg') ?>" alt="" class="h-6 w-6 inline-block ">
                    Keluar
                </a>
            </div>
        </nav>
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
                                <img src="<?= base_url('assets/img/profile.png')?>" alt="Profile Image" class="border border-black bg-cover">
                            </div>
                            <div class="">
                                <div class="">
                                    <p class="inline-block">Nama Lengkap</p>
                                    <span class="inline-block mx-4">:</span>
                                    <p class="inline-block">Sandhika Galih</p>
                                </div>
                                <div class="">
                                    <p class="inline-block">NIK</p>
                                    <span class="inline-block ml-24 mr-4">:</span>
                                    <p class="inline-block">122200001</p>
                                </div>
                                <div class="">
                                    <p class="inline-block">Jabatan</p>
                                    <span class="inline-block ml-[4.2rem] mr-4">:</span>
                                    <p class="inline-block">JR. Progammer</p>
                                </div>
                                <div class="">
                                    <p class="inline-block">Departemen</p>
                                    <span class="inline-block ml-[2.1rem] mr-4">:</span>
                                    <p class="inline-block">PPIC</p>
                                </div>
                                <div class="">
                                    <p class="inline-block">Leader</p>
                                    <span class="inline-block ml-[4.6rem] mr-4">:</span>
                                    <p class="inline-block">Mulayana</p>
                                </div>
                                <div class="">
                                    <p class="inline-block">Supervisor</p>
                                    <span class="inline-block ml-[2.9rem] mr-4">:</span>
                                    <p class="inline-block">Eko Hariyadi</p>
                                </div>
                                <div class="">
                                    <p class="inline-block">Jobdesk</p>
                                    <span class="inline-block ml-[4rem] mr-4">:</span>
                                    <p class="inline-block">Melakukan Perawatan Hardware</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>