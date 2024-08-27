<script>
    // Mendapatkan elemen input "Balancing Program"
    const programInput = document.getElementById('program');

    // Menambahkan event listener untuk klik pada input
    programInput.addEventListener('click', () => {
        // Membuka dialog file
        const fileInput = document.createElement('input');
        fileInput.type = 'file';

        fileInput.onchange = () => {
            // Mendapatkan nama file yang dipilih
            const fileName = fileInput.files[0].name;
            // Memasukkan nama file ke dalam input "Balancing Program"
            programInput.value = fileName;
        };

        // Memicu klik pada input file (membuka dialog file)
        fileInput.click();
    });
</script>

</body>

</html>