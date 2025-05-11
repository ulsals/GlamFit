//Toggle class active

// hamburger menu
const menu = document.querySelector ('.menu');
// ketika di klik
document.querySelector('#hamburger-menu').onclick = () => {
    menu.classList.toggle ('active');
};

//klik di luar sidebar untuk menghilangkan hambuger menu
const hamburger = document.querySelector('#hamburger-menu');
document.addEventListener('click', function(e){
    if (!hamburger.contains(e.target) && !menu.contains(e.target))
        menu.classList.remove('active');
    });

//modal pop up 
function openModal(id, nama, gambar) {
    document.getElementById('modalTitle').innerText = nama;
    document.getElementById('modalImage').src = gambar;
    document.getElementById('layananId').value = id;
    document.getElementById('orderModal').style.display = 'block';

    document.getElementById('jumlahInput').value = 1;
    document.getElementById('pesanModal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('orderModal').style.display = 'none';
}


window.onclick = function(event) {
    const modal = document.getElementById('orderModal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
}

// popup pesanan diterima

document.getElementById('pesanButton').addEventListener('click', function (e) {
    e.preventDefault(); // Mencegah submit default

    const form = document.getElementById('form-pesan');
    const nama = form.querySelector('input[name="nama"]').value.trim();
    const whatsapp = form.querySelector('input[name="whatsapp"]').value.trim();
    const tanggal_sewa = form.querySelector('input[name="tanggal_sewa"]').value;

    if (!nama || !whatsapp || !tanggal_sewa) {
        Swal.fire({
            icon: 'warning',
            title: 'Data Belum Lengkap',
            text: 'Silakan lengkapi semua data sebelum memesan.',
            confirmButtonText: 'OK'
        });
    } else {
        Swal.fire({
            icon: 'success',
            title: 'Pemesanan Berhasil!',
            text: 'Silakan tunggu konfirmasi pemesanan dari Admin GlamFit 😊',
            confirmButtonText: 'OK'
        }).then(() => {
            form.submit(); // Submit form setelah konfirmasi
        });
    }
});
