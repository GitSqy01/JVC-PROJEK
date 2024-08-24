<div class="h-screen bg-red-500 grid place-items-center bg-cover bg-center bg-no-repeat" style="background-image: url('<?php echo base_url('assets/img/jvc.jpg'); ?>');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative z-10 grid place-items-center h-full">
        <div class="border w-[350px] text-center p-8 bg-white rounded-md shadow-lg">
            <h1 class="text-3xl font-bold text-blue-300">JVC KENWOOD</h1>
            <h1 class="text-2xl font-semibold my-2">LOGIN</h1>
            <form method="post" action="<?php echo site_url('login'); ?>" class="flex flex-col items-center">
                <input type="text" name="nik" id="nik" placeholder="Masukkan NIK Anda" class="my-4 py-2 px-8 rounded-sm text-sm text-center border border-gray-300">
                <?php echo form_error('nik', '<div class="text-danger">', '</div>'); ?>
                <input type="password" name="password" id="password" placeholder="Masukkan Password Anda" class="my-4 py-2 px-8 rounded-sm text-sm text-center border border-gray-300">
                <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
                <button type="submit" class="mt-2 border px-4 py-2 font-semibold rounded-sm bg-blue-500 text-white">Login</button>
            </form>



            <?php echo $this->session->flashdata('pesan') ?>
        </div>
    </div>