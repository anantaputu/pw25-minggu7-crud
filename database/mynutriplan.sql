-- Membuat database jika belum ada
CREATE DATABASE IF NOT EXISTS mynutriplan;
USE mynutriplan;

-- Membuat tabel crud_113
DROP TABLE IF EXISTS crud_113;
CREATE TABLE crud_113 (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  role ENUM('user','admin') DEFAULT 'user',
  created_at TIMESTAMP NOT NULL DEFAULT current_timestamp(),
  gender ENUM('male','female','havent choose yet') DEFAULT 'havent choose yet',
  PRIMARY KEY (id)
);

-- Menyisipkan data ke tabel crud_113
INSERT INTO crud_113 (id, name, email, password, role, created_at, gender) VALUES
  (1, 'akuAdmin', 'sugiartha1000@gmail.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'admin', '2025-04-29 17:02:12', 'havent choose yet'),
  (2, 'Ahmad Madani', 'ahmadmadani@gmail.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'user', '2025-04-29 17:04:42', 'male'),
  (3, 'Lalu Rifqi Ramadhan', 'lalurifqiramadhan@gmail.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'user', '2025-04-29 17:05:51', 'male'),
  (4, 'Wadis Freandly', 'wadisfreandly@gmail.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'user', '2025-04-29 17:07:28', 'male'),
  (6, 'Baiq Mutia Edel', 'baiqmutia@gmail.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'admin', '2025-04-29 21:41:53', 'male'),
  (12, 'Andi Wijaya', 'andi.wijaya01@example.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'user', '2025-04-29 22:52:11', 'male'),
  (13, 'Budi Santoso', 'budi.santoso02@example.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'admin', '2025-04-29 22:52:11', 'male'),
  (14, 'Citra Ayu', 'citra.ayu03@example.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'user', '2025-04-29 22:52:11', 'female'),
  (15, 'Dewi Lestari', 'dewi.lestari04@example.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'user', '2025-04-29 22:52:11', 'female'),
  (16, 'Eko Nugroho', 'eko.nugroho05@example.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'user', '2025-04-29 22:52:11', 'male'),
  (17, 'Fajar Maulana', 'fajar.maulana06@example.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'user', '2025-04-29 22:52:11', 'male'),
  (18, 'Gita Larasati', 'gita.larasati07@example.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'user', '2025-04-29 22:52:11', 'female'),
  (19, 'Hadi Pratama', 'hadi.pratama08@example.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'admin', '2025-04-29 22:52:11', 'male'),
  (20, 'Indah Sari', 'indah.sari09@example.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'user', '2025-04-29 22:52:11', 'female'),
  (21, 'Joko Susilo', 'joko.susilo10@example.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'user', '2025-04-29 22:52:11', 'male'),
  (22, 'Kiki Ramadhani', 'kiki.ramadhani11@example.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'user', '2025-04-29 22:52:11', 'female'),
  (23, 'Lina Oktaviani', 'lina.oktaviani12@example.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'user', '2025-04-29 22:52:11', 'female'),
  (24, 'Maman Suherman', 'maman.suherman13@example.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'user', '2025-04-29 22:52:11', 'male'),
  (25, 'Nina Kartika', 'nina.kartika14@example.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'admin', '2025-04-29 22:52:11', 'female'),
  (26, 'Oki Setiawan', 'oki.setiawan15@example.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'user', '2025-04-29 22:52:11', 'male'),
  (27, 'Putri Amelia', 'putri.amelia16@example.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'user', '2025-04-29 22:52:11', 'female'),
  (28, 'Rizal Hidayat', 'rizal.hidayat17@example.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'user', '2025-04-29 22:52:11', 'male'),
  (29, 'Sari Wulandari', 'sari.wulandari18@example.com', '$2y$10$x5.WbMR2LJyUgADqLe6uiOx0ex6UwH1RZ2saJ9kaaklhlPG7RolZq', 'user', '2025-04-29 22:52:11', 'female');
