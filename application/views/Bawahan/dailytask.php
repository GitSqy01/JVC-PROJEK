<div class="bg-white h-screen p-4 col-span-10 row-span-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Tugas Harian</h1>
        <div>
            <p class="text-md text-gray-600 mb-2">Tugas</p>
            <label for="taskNumber" class="block font-medium text-gray-700">Tambah Tugas</label>
            <input type="number" name="task" id="taskNumber" value="1" min="0"
                   class="w-full p-2 border border-gray-300 rounded-md shadow-sm mb-4">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Tambah</button>
        </div>
        <div class="mt-6">
            <table class="w-full table-auto border-collapse text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border-b-2 border-gray-200 p-4 text-left">No</th>
                        <th class="border-b-2 border-gray-200 p-4 text-left">Tugas</th>
                        <th class="border-b-2 border-gray-200 p-4 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-4 border-b border-gray-200">1</td>
                        <td class="p-4 border-b border-gray-200">Tugas 1</td>
                        <td class="p-4 border-b border-gray-200">
                            <button class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-4 flex justify-between">
            <button type="button" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">Bersihkan</button>
            <button type="button" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">Simpan</button>
        </div>
    </div>
</div>
