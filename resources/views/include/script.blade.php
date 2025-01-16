{{-- script --}}

 <!-- jQuery -->
 <script src="{{ asset('style/js/jquery.js') }}"></script>

 <!-- Bootstrap Core JavaScript -->
 <script src="{{ asset('style/js/bootstrap.min.js') }}"></script>

 <!-- Morris Charts JavaScript -->
 <script src="{{ asset('style/js/plugins/morris/raphael.min.js') }}js/plugins/morris/raphael.min.js"></script>
 <script src="{{ asset('style/js/plugins/morris/morris.min.js') }}"></script>
 <script src="{{ asset('style/js/plugins/morris/morris-data.js') }}"></script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 

 {{-- <script>
    // Get the modal
    const modal = document.getElementById('editModal');

    // Function to open modal
    function openModal(id, name, email, phone, date, time, guests, message) {
        modal.style.display = "block";
        document.getElementById('pasien-id').value = id;
        document.getElementById('pasien-name').value = name;
        document.getElementById('pasien-email').value = email;
        document.getElementById('pasien-phone').value = phone;
        document.getElementById('pasien-date').value = date;
        document.getElementById('pasien-time').value = time;
        document.getElementById('pasien-guests').value = guests;
        document.getElementById('pasien-message').value = message;
    }

    // Function to close modal
    function closeModal() {
        modal.style.display = "none";
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        if (event.target == modal) {
            closeModal();
        }
    }

    const modal = document.getElementById('editModal');
    const updateForm = document.getElementById('updateForm');

    function openModal(id, NIK, nama_pasien, tanggal_lahir, alamat, jenis_kelamin, penyakit, asuransi, kondisi) {
        modal.style.display = "block";
        
        // Set form action dengan route yang benar
        updateForm.action = `/admin/dashboard/update/${id}`;
        
        // Set form values sesuai dengan struktur tabel
        document.getElementById('pasien-id').value = id;
        document.getElementById('pasien-nama_pasien').value = nama_pasien;
        document.getElementById('pasien-tanggal_lahir').value = tanggal_lahir;
        document.getElementById('pasien-alamat').value = alamat;
        document.getElementById('pasien-jenis_kelamin').value = jenis_kelamin;
        document.getElementById('pasien-penyakit').value = penyakit;
        document.getElementById('pasien-asuransi').value = asuransi;
        document.getElementById('pasien-kondisi').value = kondisi;
    }

    function closeModal() {
        modal.style.display = "none";
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        if (event.target == modal) {
            closeModal();
        }
    }

    // Handling success/error messages
    @if(session('success'))
        alert("{{ session('success') }}");
    @endif

    @if(session('error'))
        alert("{{ session('error') }}");
    @endif
</script> --}}