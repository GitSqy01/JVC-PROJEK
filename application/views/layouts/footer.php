<!-- <script>
    // Mendapatkan elemen input "Balancing Program"
    document.getElementById('program').addEventListener('click', openFolder);

    // Menambahkan event listener untuk klik pada input
   // Function to handle input click to open file dialog
   function openFolder(event) {
        const fileInput = document.createElement('input');
        fileInput.type = 'file';
        fileInput.style.display = 'none';
        
        fileInput.addEventListener('change', function () {
            if (fileInput.files.length > 0) {
                event.target.value = fileInput.files[0].name; // Set the input value to the selected file name
            }
        });

        fileInput.click(); // Trigger the file input dialog
    }

    // Event listener to add new input fields
    document.getElementById('add-input').addEventListener('click', function() {
        // Create new div to wrap the input
        const newDiv = document.createElement('div');
        newDiv.className = 'flex items-start mt-2';  // Add flex and items-start class

        // Create new input element
        const newInput = document.createElement('input');
        newInput.type = 'text';
        newInput.name = 'program[]';
        newInput.placeholder = 'Masukan judul record';
        newInput.className = 'w-full border border-black rounded-sm';
        newInput.readOnly = true;

        // Attach the open folder event to the new input
        newInput.addEventListener('click', openFolder);

        // Append the input to the new div
        newDiv.appendChild(newInput);

        // Insert the new div right below the first input
        const container = document.getElementById('balancing-container');
        container.insertBefore(newDiv, container.children[2]);
    });

    const addButton = document.querySelector('button[type="submit"]');
    const taskNumberInput = document.getElementById('taskNumber');
    const tbody = document.querySelector('table tbody');

    // Fungsi untuk menambahkan tugas
    function addTask() {
        // Membaca jumlah tugas yang akan ditambahkan
        const numTasks = parseInt(taskNumberInput.value, 10);
        for (let i = 0; i < numTasks; i++) {
            const row = tbody.insertRow();  // Membuat baris baru
            const cell1 = row.insertCell(0);  // Kolom No
            const cell2 = row.insertCell(1);  // Kolom Tugas
            const cell3 = row.insertCell(2);  // Kolom Aksi

            // Menentukan isi setiap sel
            cell1.textContent = tbody.rows.length;  // Nomor urut berdasarkan jumlah baris
            cell2.textContent = `Tugas ${tbody.rows.length}`;  // Nama tugas

            // Membuat tombol hapus
            const deleteButton = document.createElement('button');
            deleteButton.textContent = 'Hapus';
            deleteButton.className = 'px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600';
            deleteButton.onclick = function() {  // Menambahkan fungsi untuk menghapus baris
                tbody.removeChild(row);
            };

            cell3.appendChild(deleteButton);  // Menambahkan tombol ke sel
        }
    }

    // Menambahkan event listener ke tombol tambah
    addButton.addEventListener('click', function(event) {
        event.preventDefault();  // Menghentikan form dari submit
        addTask();  // Menjalankan fungsi untuk menambahkan tugas
    });


</script> -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Function to handle input click to open file dialog
    function openFolder(event) {
        const fileInput = document.createElement('input');
        fileInput.type = 'file';
        fileInput.style.display = 'none';

        fileInput.addEventListener('change', function () {
            if (fileInput.files.length > 0) {
                event.target.value = fileInput.files[0].name;
            }
        });

        fileInput.click();
    }

    // Handle click event on the 'Balancing Program' input
    const programInput = document.getElementById('program');
    if (programInput) {
        programInput.addEventListener('click', openFolder);
    }

    // Function to dynamically add new input fields
    const addInputBtn = document.getElementById('add-input');
    const firstInput = document.getElementById('program'); // Asumsikan input awal memiliki ID 'program'
    
    if (addInputBtn && firstInput) {
        addInputBtn.addEventListener('click', function() {
            const newInput = document.createElement('input');
            newInput.type = 'text';
            newInput.name = 'program[]';
            newInput.placeholder = 'Masukan judul record';
            newInput.className = 'w-full border border-black rounded-sm';
            newInput.readOnly = true;

            // Tempatkan input baru tepat setelah input 'program' awal
            firstInput.parentNode.insertBefore(newInput, firstInput.nextSibling);

            // Mungkin perlu tambahkan div atau pemisah jika diperlukan
            const divider = document.createElement('div');
            divider.className = 'mt-2'; // Memberikan margin atas
            firstInput.parentNode.insertBefore(divider, newInput.nextSibling);
        });
    }

    // Function to add tasks to the table
    const addButton = document.querySelector('button[type="submit"]');
    const taskNumberInput = document.getElementById('taskNumber');
    const tbody = document.querySelector('table tbody');
    if (addButton && taskNumberInput && tbody) {
        addButton.addEventListener('click', function(event) {
            event.preventDefault();
            const numTasks = parseInt(taskNumberInput.value, 10) || 0;
            for (let i = 0; i < numTasks; i++) {
                const row = tbody.insertRow();
                const cell1 = row.insertCell(0);
                const cell2 = row.insertCell(1);
                const cell3 = row.insertCell(2);

                cell1.textContent = tbody.rows.length;
                cell2.textContent = `Tugas ${tbody.rows.length}`;

                cell1.className = 'p-4 border-b border-gray-200';
                cell2.className = 'p-4 border-b border-gray-200';
                cell3.className = 'p-4 border-b border-gray-200';

                const deleteButton = document.createElement('button');
                deleteButton.textContent = 'Hapus';
                deleteButton.className = 'px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600';
                deleteButton.onclick = () => row.remove();

                cell3.appendChild(deleteButton);
            }
        });
    }
});
</script>

</body>

</html>