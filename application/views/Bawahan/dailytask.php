<div class="bg-white h-[530px] p-4 col-span-10 row-span-6 overflow-y-scroll">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Tugas Harian</h1>
        <div>
            <div>
                <p><span id="percenTask">0%</span> dari <span id="totalTask">0</span> tugas</p>
            </div>
        </div>
        <div>
            <p class="text-md text-gray-600 mb-2">Tugas</p>
            <label for="taskNumber" class="block font-medium text-gray-700">Tambah Tugas</label>
            <input type="number" name="task" id="taskNumber" value="1" min="0"
                   class="w-full p-2 border border-gray-300 rounded-md shadow-sm mb-4">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600" id="">Tambah</button>
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
                    <!-- <tr>
                        <td class="p-4 border-b border-gray-200">1</td>
                        <td class="p-4 border-b border-gray-200">
                            <input type="text" placeholder="Masukan task">
                        </td>
                        <td class="p-4 border-b border-gray-200">
                            <button class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Hapus</button>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
        <div class="mt-4 flex justify-between">
            <button type="button" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">Bersihkan</button>
            <button type="button" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">Simpan</button>
        </div>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function() {

const addButton = document.querySelector('button[type="submit"]');
const taskNumberInput = document.getElementById('taskNumber');
const tbody = document.querySelector('table tbody');
let totalTask = document.getElementById('totalTask');
let percenTask = document.getElementById('percenTask');

let completedTasks = 0; // Counter untuk tugas yang selesai

// Fungsi untuk menambahkan tugas
function addTask() {
    const numTasks = parseInt(taskNumberInput.value, 10) || 0;
    for (let i = 0; i < numTasks; i++) {
        const row = tbody.insertRow();
        const cell1 = row.insertCell(0);
        const cell2 = row.insertCell(1);
        const cell3 = row.insertCell(2);

        cell1.textContent = tbody.rows.length;
        cell1.className = 'p-4 border-b border-gray-200';
        
        const inputTask = document.createElement('input');
        inputTask.type = 'text';
        inputTask.name = `task[]`;
        inputTask.placeholder = 'Masukan tugas';
        inputTask.className = 'w-full border border-black rounded-sm';
        
        cell2.appendChild(inputTask);
        cell2.className = 'p-4 border-b border-gray-200';

        // Tombol selesai
        const finishButton = document.createElement('button');
        finishButton.textContent = 'Selesai';
        finishButton.className = 'mr-2 px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600';
        finishButton.onclick = () => {
            if(!row.classList.contains('completed')){
                completedTasks += 1;
                finishButton.disabled = true;
                finishButton.className = 'cursor-not-allowed mr-2 px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600';
                row.className = 'completed';
                updatePercentage(); // Memperbarui persentase setelah menandai tugas sebagai selesai
            }
        }
        cell3.appendChild(finishButton);

        // Tombol hapus
        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Hapus';
        deleteButton.className = 'px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600';
        deleteButton.onclick = () => {
            if (row.classList.contains('completed')) {
                completedTasks -= 1; // Mengurangi hitungan tugas selesai jika tugas tersebut telah diselesaikan
            }
            row.remove();
            updateTaskCount();
        }
        cell3.appendChild(deleteButton);
        cell3.className = 'p-4 border-b border-gray-200';

        updateTaskCount();
    }
}

// Memperbarui jumlah tugas dan persentase
function updateTaskCount() {
    const rowCount = tbody.rows.length;
    totalTask.textContent = rowCount.toString();
    updatePercentage();
}

// Memperbarui persentase tugas yang selesai
function updatePercentage() {
    if (totalTask.textContent === "0") {
        percenTask.textContent = "0%";
    } else {
        let percentage = (completedTasks / parseInt(totalTask.textContent)) * 100;
        percenTask.textContent = `${percentage.toFixed(2)}%`;
    }
}

// Event listener untuk tombol tambah
addButton.addEventListener('click', function(event) {
    event.preventDefault();
    addTask();
});
});
</script>
