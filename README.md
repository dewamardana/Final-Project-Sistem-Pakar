# 🧠 Sistem Pakar Deteksi Kesehatan Mental (Certainty Factor / Weighted Rule-Based)

Aplikasi web sistem pakar (Laravel) untuk mendeteksi indikasi kondisi kesehatan mental berdasarkan gejala yang dipilih pengguna, menggunakan metode berbasis **bobot penilaian (weighted rule / certainty factor)**. Dikerjakan sebagai project kelompok.

## 📌 Deskripsi

Sistem ini mengimplementasikan metode sistem pakar klasik: pengguna menjawab/memilih sejumlah **gejala (`Gejala`)**, sistem mencocokkannya dengan **basis aturan (`Aturan`)** yang menghubungkan gejala dengan kemungkinan **kondisi/penyakit (`Penyakit`)**, lalu menghitung tingkat keyakinan diagnosis menggunakan **bobot penilaian (`BobotPenilaian`)** — pendekatan yang mirip metode Certainty Factor, umum digunakan pada sistem pakar diagnosis kesehatan.

## ✨ Fitur Utama (berdasarkan struktur kode)

- 📋 **Manajemen Basis Pengetahuan** — admin mengelola data gejala (`GejalaController`), penyakit/kondisi (`PenyakitController`), dan aturan relasi gejala–kondisi (`AturanController`)
- ⚖️ **Bobot Penilaian** — `BobotPenilaianController` mengatur nilai bobot/tingkat kepastian tiap gejala terhadap suatu kondisi — inti dari mesin inferensi sistem pakar ini
- 📝 **Konsultasi Interaktif** — pengguna melakukan sesi konsultasi (`Konsultasi`), memilih gejala yang dialami (`KonsultasiGejala`), lalu sistem menghasilkan hasil diagnosis (`KonsultasiHasil`)
- 📊 **Dashboard** — ringkasan data untuk admin (`DashboardController`)
- 🔐 **Autentikasi** — login/registrasi pengguna (`AuthContoller`)

## 🔄 Alur Kerja Sistem

```
Pengguna pilih gejala (Gejala) → dicocokkan dengan Aturan (Gejala ↔ Penyakit)
   → dihitung menggunakan Bobot Penilaian → tersimpan sebagai Konsultasi + KonsultasiGejala
   → hasil akhir diagnosis tersimpan di KonsultasiHasil
```

## ⚙️ Teknologi

- **Framework:** Laravel 12 (PHP)
- **Method:** Rule-based expert system dengan pembobotan (weighted certainty)

## 🚀 Cara Menjalankan

```bash
git clone https://github.com/dewamardana/Final-Project-Sistem-Pakar.git
cd Final-Project-Sistem-Pakar
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run dev &
php artisan serve
```
