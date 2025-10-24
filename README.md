
# 🏡 **Lapor Kades Desa Mojoagung**

Sistem **Lapor Kades** adalah aplikasi pelaporan masyarakat Desa Mojoagung berbasis web yang dibangun menggunakan **Laravel 12** dan **FilamentPHP**.  
Tujuan dari sistem ini adalah memberikan wadah bagi masyarakat untuk menyampaikan laporan, aduan, dan saran kepada pemerintah desa secara cepat, mudah, dan transparan.

---

## 🚀 **Fitur Utama**

### 👥 **Untuk Masyarakat**
- Mengirim laporan secara online (berisi deskripsi, foto, dan lokasi).
- Melihat status laporan: *Diproses, Selesai, atau Ditolak*.
- Melihat riwayat laporan yang sudah dikirim.
- Fitur **Share Lokasi Otomatis (Shareloc)** untuk menunjukkan posisi pelapor.

### 🧑‍💼 **Untuk Admin / Kades**
- Dashboard ringkasan laporan masuk.
- Manajemen kategori laporan (contoh: Infrastruktur, Keamanan, Pelayanan).
- Notifikasi laporan baru.
- Update status laporan dan beri tanggapan.
- Laporan rekap berdasarkan kategori dan waktu.

### 🔔 **Tambahan Fitur**
- Notifikasi real-time menggunakan Filament Notifications.
- Upload gambar bukti laporan.
- Integrasi icon dan tampilan responsif berbasis Tailwind CSS.
- Mode multi-role (Admin & User) menggunakan **Spatie Laravel Permission**.
- Halaman **FAQ** (Pertanyaan yang Sering Diajukan).

---

## 🧰 **Teknologi yang Digunakan**

| Komponen | Teknologi |
|-----------|------------|
| Framework | Laravel 12 |
| Admin Panel | FilamentPHP v3 |
| UI | Tailwind CSS |
| Database | MySQL |
| Permission | Spatie Laravel Permission |
| Icons | Heroicons |
| Server | PHP 8.3+, Apache / Nginx |

---

## ⚙️ **Instalasi & Setup**

### 1️⃣ Clone Repository
```bash
git clone https://github.com/username/lapor-desa.git
cd lapor-desa
```

### 2️⃣ Install Dependencies
```bash
composer install
npm install && npm run build
```

### 3️⃣ Konfigurasi `.env`
Salin file contoh environment dan sesuaikan:
```bash
cp .env.example .env
php artisan key:generate
```

Atur koneksi database:
```env
DB_DATABASE=lapor_desa
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Migrasi Database & Seeder
```bash
php artisan migrate --seed
```

### 5️⃣ Jalankan Server
```bash
php artisan serve
```

Akses di browser:  
👉 `http://127.0.0.1:8000`

---

## 🧑‍💻 **Struktur Proyek Utama**

```
app/
 ├── Filament/
 │   ├── Resources/
 │   │   └── Laporans/
 │   ├── Pages/
 │   └── Widgets/
 ├── Models/
 │   └── Laporan.php
resources/
 ├── views/
 │   ├── front/
 │   │   └── faq.blade.php
 │   └── dashboard/
routes/
 ├── web.php
database/
 ├── seeders/
public/
 ├── img/
 └── css/
```

---

## 💡 **Contoh Role & Login**

| Role | Email | Password |
|------|--------|-----------|
| Admin | admin@lapordesa.com | admin123 |
| User | user@lapordesa.com | user123 |

---

## 🧾 **Lisensi**
Proyek ini dilisensikan di bawah [MIT License](LICENSE).

---

## 🤝 **Kontribusi**
1. Fork repository ini.
2. Buat branch fitur baru:  
   ```bash
   git checkout -b fitur-baru
   ```
3. Commit perubahanmu:  
   ```bash
   git commit -m "Menambahkan fitur X"
   ```
4. Push ke branch:  
   ```bash
   git push origin fitur-baru
   ```
5. Buat Pull Request.

---

## 📞 **Kontak**
Wa : 085748138557
email : dickyumum27@gmail.com
