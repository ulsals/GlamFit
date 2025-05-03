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

/document.getElementById('pesanButton').addEventListener('click', function () {
    Swal.fire({
        icon: 'success',
        title: 'Pemesanan Berhasil!',
        text: 'Silahkan Tunggu Konfirmasi Pemesanan dari Admin GlamFit 😊',
        confirmButtonText: 'OK'
    });
});