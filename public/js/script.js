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

// API Weather 
document.addEventListener("DOMContentLoaded", () => {
        const weatherBar = document.getElementById("weather-bar");
    const apiKey = "b284fea5b0c04676dd92b966fb0eb5b3"; // Ganti dengan API key OpenWeatherMap kamu

    if (!weatherBar) return;

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            async function (position) {
                const lat = position.coords.latitude;
                const lon = position.coords.longitude;

                try {
                    const response = await fetch(
                        `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${apiKey}&units=metric`
                    );
                    const data = await response.json();

                    const location = data.name;
                    const temp = data.main.temp;
                    const description = data.weather[0].description;
                    const icon = data.weather[0].icon;
                    const iconUrl = `https://openweathermap.org/img/wn/${icon}@2x.png`;

                    // Efek animasi masuk
                    weatherBar.classList.remove("animate-pulse");
                    weatherBar.classList.add("opacity-0");

                    // Tambahkan konten setelah fade
                    setTimeout(() => {
                        weatherBar.innerHTML = `
                            <div class="flex items-center space-x-4">
                                <img src="${iconUrl}" alt="${description}"
                                     class="w-12 h-12 transition transform scale-90 hover:scale-105 duration-300 ease-in-out drop-shadow">
                                <div>
                                    <div class="text-lg font-bold">${location}</div>
                                    <div class="text-sm capitalize">${description}, <span class="font-semibold">${temp}°C</span></div>
                                </div>
                            </div>
                        `;
                        weatherBar.classList.remove("opacity-0");
                        weatherBar.classList.add("opacity-100");
                    }, 300);
                } catch (error) {
                    console.error("Error fetching weather:", error);
                    weatherBar.textContent = "Gagal memuat data cuaca.";
                }
            },
            function (error) {
                console.error("Geolocation error:", error.code, error.message);
                weatherBar.textContent = "Tidak dapat mengakses lokasi Anda.";
            },
            {
                timeout: 10000,
            }
        );
    } else {
        weatherBar.textContent = "Browser tidak mendukung geolocation.";
    }
});

navigator.geolocation.getCurrentPosition(
    function (position) {
        console.log("Lokasi berhasil:", position);
    },
    function (error) {
        console.error("Geolocation error:", error.code, error.message); // ini yang penting
        weatherBar.textContent = "Tidak dapat mengakses lokasi Anda.";
    }
);