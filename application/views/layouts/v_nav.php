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
                    <p class="text-gray-300 text-sm"><?php echo $this->session->userdata('bagian')  ?></p>
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
                        <li class="my-2 p-2 border-l-8 border-black bg-gray-200">
                            <a href="<?= base_url('index.php/bawahan/dailyreportresult'); ?>" class="text-gray-600 dark:text-gray-500 font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mx-2" fill="none" viewBox="0 0 24 24">
                                    <rect width="18" height="22" x="3" y="1" fill="black" stroke="#1976D2" stroke-width="2" rx="2"/>
                                    <path fill="white" d="M6 4H15V5H6zM6 7H18V8H6zM6 10H18V11H6zM6 13H12V14H6z"/>
                                    <path fill="white" d="M15 15C15 16.6569 13.6569 18 12 18C10.3431 18 9 16.6569 9 15C9 13.3431 10.3431 12 12 12C13.6569 12 15 13.3431 15 15Z"/>
                                    <path fill="white" d="M14 15C14 15.7956 13.6839 16.5587 13.1213 17.1213C12.5587 17.6839 11.7956 18 11 18V12C11.7956 12 12.5587 12.3161 13.1213 12.8787C13.6839 13.4413 14 14.2044 14 15Z"/>
                                </svg>
                                Daily Reports
                            </a>
                        </li>
                        <li class="my-2 p-2 border-l-8 border-black bg-gray-200">
                            <a href="<?= base_url('index.php/bawahan/dailytask'); ?>" class="text-gray-600 dark:text-gray-500 font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mx-2" fill="none" viewBox="0 0 24 24">
                                    <rect width="18" height="22" x="3" y="1" fill="black" stroke="#1976D2" stroke-width="2" rx="2"/>
                                    <path fill="white" d="M6 4H15V5H6zM6 7H18V8H6zM6 10H18V11H6zM6 13H12V14H6z"/>
                                    <path fill="white" d="M15 15C15 16.6569 13.6569 18 12 18C10.3431 18 9 16.6569 9 15C9 13.3431 10.3431 12 12 12C13.6569 12 15 13.3431 15 15Z"/>
                                    <path fill="white" d="M14 15C14 15.7956 13.6839 16.5587 13.1213 17.1213C12.5587 17.6839 11.7956 18 11 18V12C11.7956 12 12.5587 12.3161 13.1213 12.8787C13.6839 13.4413 14 14.2044 14 15Z"/>
                                </svg>
                                Monthly Reports
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