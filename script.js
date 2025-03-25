// Khởi tạo bản đồ Leaflet
let map = L.map('map').setView([15.8700, 100.9925], 5); // Trung tâm Việt Nam

// Thêm bản đồ nền từ OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

// Gọi AJAX để lấy dữ liệu từ file JSON
fetch('data.json')
    .then(response => response.json()) // Chuyển dữ liệu thành JSON
    .then(data => {
        data.forEach(place => {
            let marker = L.marker([place.lat, place.lng]).addTo(map)
                .bindPopup(`<h3>${place.name}</h3><p>${place.info}</p>`); // Hiển thị popup khi click
        });
    })
    .catch(error => console.error("Lỗi khi tải dữ liệu:", error));