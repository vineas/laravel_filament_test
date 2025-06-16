# Laravel Filament Test

## 📌 Deskripsi Proyek

Aplikasi ini merupakan sistem manajemen bug/issue tracker yang dibangun menggunakan Laravel dan Filament. Aplikasi ini memiliki dua peran utama:

- **Admin**: Bertanggung jawab mengelola data master seperti *Status* dan *Severity*.
- **Developer**: Bertanggung jawab mencatat dan memperbarui *Task* (bugs, features, improvements, dll).

---

## 👥 Role & Fungsionalitas

### 🛠️ Admin
Admin memiliki akses penuh terhadap modul berikut:

- **Status Management**
  - Membuat status baru
  - Mengedit status
  - Menghapus status

- **Severity Management**
  - Membuat severity level baru
  - Mengedit severity
  - Menghapus severity

Semua fungsi ini diakses melalui **halaman Filament Admin Panel**.

### 👨‍💻 Developer
Developer memiliki akses ke halaman **Dashboard**, di mana mereka bisa:

- **Task Management**
  - Menambahkan task baru
  - Mengedit task yang ada
  - Menghapus task

---

## 🧩 Struktur Menu

- `/admin`: Untuk akses admin ke halaman Filament
- `/dashboard`: Untuk akses developer ke dashboard tugas mereka

---


## ⚙️ Teknologi yang Digunakan

- Laravel 11
- Filament Admin Panel
- MySQL / MariaDB
- Blade / Filament UI

---

## 🚀 Cara Menjalankan Proyek

1. Clone repository ini:
   ```bash
   git clone https://github.com/vineas/laravel_filament_test.git
