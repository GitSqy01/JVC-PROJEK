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
                    <img src="<?= base_url('assets/img/') . $user['image']; ?>" alt="Profile Image" class="bg-contain">
                </span>
                <div>
                    <p><?php echo $this->session->userdata('nama')  ?></p>
                    <p class="text-gray-300"><?php echo $this->session->userdata('bagian')  ?></p>
                </div>
            </div>

            <div>
                <h1 class="text-xl text-gray-500 bg-gray-800 p-2 my-4">Main Menu</h1>
                <div class="mt-8">
                    <ul class="text-start">
                        <li class="border-l-8 border-black bg-gray-200 p-2">
                            <a href="<?= base_url('index.php/bawahan/dashboard'); ?>" class="text-gray-600 dark:text-gray-500 font-semibold">
                                <img src="<?= base_url('assets/icons/dashboard.svg') ?>" alt="" class="h-6 w-6 inline-block mx-2">
                                Dashboard
                            </a>
                        </li>
                        <li class="my-2 p-2 border-l-8 border-black bg-gray-200">
                            <a href="<?= base_url('index.php/bawahan/laporanharian') ?>" class="text-gray-600 dark:text-gray-500 font-semibold">
                                <img src="<?= base_url('assets/icons/line.svg') ?>" alt="" class="h-6 w-6 inline-block mx-2">
                                Laporan Harian
                            </a>
                        </li>
                        <li class="p-2 border-l-8 border-black bg-gray-200">
                            <a href="<?= base_url('index.php/bawahan/dailytask'); ?>" class="text-gray-600 dark:text-gray-500 font-semibold">
                                <img src="<?= base_url('assets/icons/user.svg') ?>" alt="" class="h-6 w-6 inline-block mx-2">
                                Daily Tasks
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
                <a href="<?= base_url('index.php/login/logout') ?>">
                    <img src="<?= base_url('assets/icons/exit.svg') ?>" alt="" class="h-6 w-6 inline-block ">
                    Keluar
                </a>
            </div>
        </nav>