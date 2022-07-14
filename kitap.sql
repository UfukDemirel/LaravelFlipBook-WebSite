-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Tem 2022, 13:17:05
-- Sunucu sürümü: 10.4.20-MariaDB
-- PHP Sürümü: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kitap`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `book_slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_comment` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_writer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_dimensions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_publisher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_paste` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_print` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_price` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `book_stock` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_emoji` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_flipbook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `books`
--

INSERT INTO `books` (`id`, `category_id`, `book_slug`, `book_comment`, `book_name`, `book_writer`, `book_number`, `book_dimensions`, `book_publisher`, `book_paste`, `book_print`, `book_image`, `book_language`, `book_price`, `created_at`, `updated_at`, `book_stock`, `book_emoji`, `book_flipbook`) VALUES
(2, 2, 'dune', 'Modern edebiyatın en epik mesih anlatılarından biri sayılan Dune, genç Paul Atreides\'in hikâyesini anlatır. Atreides\'in ailesi, evrendeki en önemli ve en değerli madde olan melanj \'baharatının\' tek kaynağı olarak bilinen Arrakis gezegeninin kontrolünü kabul etmiştir. İmpatorluğun güçleri Arrakis\'in kontrolü için birbirlerinin boğazına sarılırken, politika, din, ekoloji, teknoloji ve insani duyguların çok katmanlı, karmaşık etkileşiminden benzersiz bir hikâye doğacaktır.\r\n\r\nFrank Herbert\'ın yarattığı evren, yıllar boyunca milyonlarca okurun zihninde gerçekliğini kabul ettirdi ve bugün de ayakta.\r\n\r\nİyi bir bilimkurgu ve iyi bir edebiyat yapıtı okumak isteyen herkesin yolu Dune serisinde birleşiyor… İthaki\'nin yepyeni \"Bilimkurgu Klasikleri\" dizisi Dune efsanesiyle başlıyor…', 'DUNE', 'Frank Herbert', '712', '14 x 21', 'Tuğçe Nida Sevin', 'Karton Kapak', '2015', 'https://images-na.ssl-images-amazon.com/images/I/81ym3QUd3KL.jpg', 'Türkçe', '49', NULL, NULL, '20', 'https://img.icons8.com/external-flaticons-flat-flat-icons/64/000000/external-dune-in-the-wild-flaticons-flat-flat-icons.png', 'https://heyzine.com/flip-book/c0cfcea597.html'),
(3, 1, 'kibar-hırsız', 'Maurice Leblanc’ın 20. yüzyılda yarattığı Arsen Lüpen efsane bir karaktere, ölümsüz bir ‘hırsız’a can veriyor. Arsen Lüpen’i diğer polisiyelerden ayıran en önemli özellik, onun kanunun yanında değil suçlu tarafta bulunmasıdır. “Suçun Sherlock Holmes’ü” diye de anılan Arsen Lüpen esprili, zeki, oldukça centilmen ve özgüvenli bir hırsız olarak soyulmayı hak eden kişileri hedefine almıştır.\r\n\r\nZamanla efsaneye dönüşen Arsen Lüpen adı, yazarının dahi önüne geçiyor. Maurice Leblanc da yarattığı karakter hakkında “Lüpen beni her yerde takip ediyor. O benim gölgem değil, ben onun gölgesiyim,” diyor. Kibar Hırsız, sürükleyici maceraları ve kıvrak zekâsıyla işlediği suçlarla polisiyeseverleri eşsiz bir yolculuğa çıkarıyor.', 'Arsen Lüpen: Kibar Hırsız', 'Maurice Leblanc', '288', '13,5 x 21', 'Elif Bahar Bakırcı', 'Karton Kapak', '2021', 'https://cdn.timas.com.tr/urun/arsen-lupen---kontes-cagliostro-9786057470768.jpg', 'Türkçe', '49', NULL, NULL, '20', 'https://img.icons8.com/external-wanicon-lineal-color-wanicon/64/000000/external-magic-fairytale-wanicon-lineal-color-wanicon.png', NULL),
(4, 3, 'dijital_kale', 'Ulusal Güvenlik Teşkilatı dünyanın kaderini değiştirecek ve dijital ortamdaki tüm şifreli metinleri bilecek özel bir bilgisayar üretir. Ne var ki, günün birinde bu özel bilgisayar karşılaştığı esrarengiz bir şifreyi çözemez. Ve kriptoloji uzmanı, zeki ve güzel Susan Fletcher göreve çağrılır. Genç kadın korkunç bir gerçekle yüzleşir. Silahlarla ya da bombalarla değil, Amerika Birleşik Devletleri\'nin en güçlü haber alma örgütü olan Ulusal Güvenlik Teşkilatı çözülemez bir şifreyle rehin alınmıştır.\r\n\r\nSırlar ve yalanlar fırtınasına yakalanan Fletcher inandığı teşkilatı kurtarma savaşı verir. Dört bir yandan ihanete uğrayan güzel kadın yalnızca ülkesini değil, kendi canını ve sevdiği erkeği de kurtarmaya çalışır...', 'Dijital Kale', 'Dan Brown', '400', '13.5 x 21.5', 'Sezer Soner', 'Karton Kapak', '2010', 'https://img.kitapyurdu.com/v1/getImage/fn:42727/wh:true/wi:800', 'Türkçe', '49', NULL, NULL, '20', 'https://img.icons8.com/external-obivous-color-kerismaker/48/000000/external-digital-smart-home-color-obivous-color-kerismaker-10.png', 'https://heyzine.com/flip-book/76e7cc16c8.html'),
(5, 7, 'hayvan_cifligi', 'Bir çiftlikte yaşayan hayvanlar, kendilerini sömüren insanlara başkaldırıp çiftliğin yönetimini ele geçirir. Amaçları daha eşitlikçi bir topluluk oluşturmaktır. Aralarında en akıllı olan domuzlar, kısa sürede önder bir takım oluşturur; ama devrimi de yine onlar yolundan saptırır.', 'Hayvan Çifliği', 'George Orwell', '152', '12,5 x 19,5', 'Celal Üster', 'Yumuşak Kapak', '1945', 'https://cdn1.dokuzsoft.com/u/pelikankitabevi/img/b/9/7/9786051855585-1609940980.jpg', 'Türkçe', '49', NULL, NULL, '20', 'https://cdn-icons.flaticon.com/png/512/3397/premium/3397536.png?token=exp=1652358179~hmac=f5329aca4609a681a38557d4b109ab47', 'https://heyzine.com/flip-book/8958965e81.html');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` bigint(20) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`id`, `slug`, `image`, `name`, `created_at`, `updated_at`) VALUES
(1, 'aksiyon', '1.jpg', 'Aksiyon', NULL, NULL),
(2, 'bilim-kurgu', '2.jpg', 'Bilim Kurgu', NULL, NULL),
(3, 'macera', '3.jpg', 'Macera', NULL, NULL),
(4, 'gizem', '4.jpg', 'Gizem', NULL, NULL),
(5, 'fantastik', '5.jpg', 'Fantastik', NULL, NULL),
(6, 'psikoloji', '6.jpg', 'Psikoloji', NULL, NULL),
(7, 'roman', NULL, 'Roman', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `surname` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `subject` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `message` varchar(2000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `name`, `surname`, `email`, `subject`, `message`, `date`) VALUES
(1, 'Ufuk', 'Demirel', 'ufukdemirel234@gmail.com', 'Kitaplar', 'Kitaplarınız gerçekten olağanüstü indirimli !! :D', '2022-05-13 09:24:13');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(8,2) DEFAULT NULL,
  `situation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `order`
--

INSERT INTO `order` (`id`, `user_id`, `name`, `surname`, `address`, `phone`, `email`, `country`, `city`, `postcode`, `amount`, `situation`, `created_at`, `updated_at`) VALUES
(1, 5, 'Ufuk', 'Demirel', 'esentepe mahallesi', '05413441269', 'ufukdemirel234@gmail.com', 'Sarıçam', 'Adana', NULL, NULL, NULL, NULL, NULL),
(2, 4, 'Deniz', 'Demirel', 'esentepe mahallesi', '05413441269', 'demirelu456@gmail.com', 'Sarıçam', 'Adana', NULL, NULL, NULL, NULL, NULL),
(3, 5, 'Ufuk', 'Demirel', 'esentepe mahallesi', '05413441269', 'ufukdemirel234@gmail.com', 'Sarıçam', 'Adana', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `price` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `quantity` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siparis_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `order_details`
--

INSERT INTO `order_details` (`id`, `book_id`, `order_id`, `user_id`, `price`, `amount`, `quantity`, `name`, `siparis_id`, `created_at`, `updated_at`) VALUES
(1, 5, 23, 5, '49', NULL, '0', 'Hayvan Çifliği', 1, NULL, NULL),
(2, 4, 24, 5, '49', NULL, '0', 'Dijital Kale', 2, NULL, NULL),
(3, 2, 25, 5, '49', NULL, '0', 'DUNE', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ufukdemirel234@gmail.com', 'ryIjjNZ7a1Ek0CJ6DZS66jNVGBBp2ryZXsamHzHnHcryK4zWQnZy6RSunjjAKWXZ', '2022-07-14 06:05:58'),
('ufukdemirel234@gmail.com', '2T4X7zlUquR4c50e448LNhAsNLFLSIb69hmnDiWZSJRu4QFOsmWYXZO6o8ifd1nC', '2022-07-14 06:07:33'),
('ufukdemirel234@gmail.com', 'IwaXfM8vqe1wK0Z1lVb2z1gOKVS0xBa4KzdBrRKziM8HCJoztkGPiARhpZTRNHU6', '2022-07-14 06:09:39'),
('ufukdemirel234@gmail.com', 'w83yeGfMkecS8ZvEuBNqvCctpqQc9HYJzfgaRLrrqpCzaN0XSwcK0CUxKmflBlTF', '2022-07-14 06:09:53');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sharing`
--

CREATE TABLE `sharing` (
  `sharing_id` int(11) NOT NULL,
  `sharing_title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sharing_content` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sharing`
--

INSERT INTO `sharing` (`sharing_id`, `sharing_title`, `sharing_content`) VALUES
(1, '7/24 SERVİS', 'Günün her saatinde müşteri hizmetlerimizden bilgi ve yardım alabilirsiniz.'),
(2, 'PARA İADE GARANTİSİ', 'Memnun kalmadığınız herhangi bir ürünü iade edebilirsiniz.'),
(3, 'ÜCRETSİZ KARGO', 'Tamamen ücretsiz gönderimimiz ile içkinizin tadını daha da fazla çıkarabilirsiniz.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verify` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` int(255) DEFAULT NULL,
  `is_active` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `email_verify`, `cod`, `password`, `permission_level`, `phone`, `date`, `file`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Deniz', 'Demirel', 'demirelu456@gmail.com', 'zuyfBb', 'zuyfBb', '$2y$10$5KJvOvFC26HcQBgLK8.6weuq/aqTpbcfk1YG9lC3gx1etDcTqCQs6', 'admin', '05413441269', '2022-05-12 20:44:39', NULL, 1, NULL, NULL, NULL),
(5, 'Ufuk', 'Demirel', 'ufukdemirel234@gmail.com', 'wQ402k', 'wQ402k', '$2y$10$ObISCq82m20hkCl4cJRyuuOGkLg9OwINhWm8I61J0icnTJLKU6dRO', 'user', '05413441269', '2022-07-14 09:11:10', NULL, 1, NULL, NULL, NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `sharing`
--
ALTER TABLE `sharing`
  ADD PRIMARY KEY (`sharing_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sharing`
--
ALTER TABLE `sharing`
  MODIFY `sharing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
