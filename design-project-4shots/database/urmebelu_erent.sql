-- MySQL dump 10.16  Distrib 10.1.31-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: urmebelu_erent
-- ------------------------------------------------------
-- Server version	10.1.31-MariaDB-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_8` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_9` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_10` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_11` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_12` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `image_7`, `image_8`, `image_9`, `image_10`, `image_11`, `image_12`, `created_at`, `updated_at`) VALUES (1,'image_1.jpg','image_2.jpg','image_3.jpg','image_4.jpg','image_5.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-05-10 13:17:00','2018-05-10 13:17:00'),(2,'image_1.jpg','image_2.jpg','image_3.jpg','image_4.jpg','image_5.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-05-10 13:23:24','2018-05-10 13:23:24'),(3,'image_1.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-05-10 13:29:10','2018-05-10 13:29:10'),(4,'image_1.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-05-10 13:34:16','2018-05-10 13:34:16'),(5,'image_1.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-05-10 13:39:18','2018-05-10 13:39:18'),(6,'image_1.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-05-10 13:41:59','2018-05-10 13:41:59'),(7,'image_1.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-05-10 13:48:03','2018-05-10 13:48:04'),(8,'image_1.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-05-10 13:56:19','2018-05-10 13:56:19');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES ('kbegmatov96@gmail.com','$2y$10$z1y9FM.ti7DQPBQsdfax3uUyAGazONVr4m6Dwvnmw5wI6HV52uqpW','2018-05-05 10:20:13'),('b.shaymonov@student.inha.uz','$2y$10$ZaywGHJYYgNZTIDvAlsz..mGyL.nDgJlCVl.ovH5GG.wU5/9cwOd2','2018-05-05 10:24:25'),('bekagoku81156@gmail.com','$2y$10$qi1SOYKIZTwulBfaqY6/9eJwb8ycIKwiMluOi1gUTQBQcXjUTUYze','2018-05-05 10:33:54'),('nodirbeknabiev98@gmail.com','$2y$10$hIGP/Ea2YztlTGT/a9znKuqIUoa8kW5HBk8NjTlbW6VTkJl9IhDDq','2018-05-08 05:23:47');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `price_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rooms` int(11) NOT NULL DEFAULT '0',
  `area` int(11) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `rating` int(11) NOT NULL DEFAULT '0',
  `votes` int(11) NOT NULL DEFAULT '0',
  `checked` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `title`, `description`, `category`, `address`, `price`, `price_type`, `rooms`, `area`, `views`, `rating`, `votes`, `checked`, `user_id`, `created_at`, `updated_at`) VALUES (1,'Avenue park','The entire territory of the entertainment complex \"Avenue Park\" is 30 000 sq.m. The hotel complex consists of 42 rooms, of which 36 are standard rooms and 6 deluxe rooms.  The rooms are for 2 people. Each room of the standard class is equipped with a shower cabin with a massage shower, a soft bed, furniture, air conditioning, a TV with satellite TV and an individual balcony. Windows in this room category overlook the patio.   Conditions in rooms and cottages Suites are equipped with an extra room, which also has upholstered furniture, an additional TV, a refrigerator, and a balcony. The windows of this room category overlook the Charvak reservoir. In addition to the hotel complex there are 6 four-bed fully equipped cottages located in the apple orchard.   Entertainment On the third floor of the hotel complex there is a restaurant with a summer veranda with a beautiful view of the reservoir.   On the territory of the \"Park Avenue\" there are 3 swimming pools, a large swimming pool for adults and a small one for children. Large indoor winter swimming pool. The pools are equipped with filtration, heating and lighting systems. There is a bar, both in the hotel complex and in the swimming pool. There is also a separate building of the Club, where there is a cinema, a conference room, a bar and a disco. Parking for cars, which is designed specifically for the convenience of visitors. The price includes breakfast, outdoor pool, sports equipment, disco.   Entertainment complex \"Avenue Park\" is a complex of club type, which indicates that access to its territory is allowed only to hotel guests.  The staff of the complex will do everything possible to ensure that the stay in the complex \"Avenue Park\" has left in your memory unforgettable impressions of the rest. The complex operates in year-round mode','Recreation areas','Tashkent region, Bostanlyk district, Yusufhona settlement.',1000000,'Sum',42,30000,11,0,0,0,7,'2018-05-10 13:17:00','2018-05-12 13:46:01'),(2,'Mountain resort \"Archazor\"','Mountain resort \"Archazor\", located in a picturesque corner at the foot of Chimgan mountain, in the only pine forest on this territory, is a unique place for the best and modern rest.  The peculiarity of the mountain resort \"Archazor\" is that the healing air with the aroma of a pine forest literally permeates the holidaymakers, filling the body with the curative power of nature itself. The beauty of the surrounding countryside and the long-awaited solitude with nature - that\'s what the \"Archazor\" surprises you from the first minutes. Each guest here is surrounded by an individual approach, impeccable service and quality of service, an atmosphere of coziness and warm hospitality.  All photos of the mountain resort \"Archazor\" in the gallery OTPUSK.UZ >>> What to do in Chimgan? >>>    2, 3-bed rooms Hotel \"Archazor\" includes eight rooms, of which 3 are triple rooms and 5 double rooms. The two-story building of the hotel complex harmoniously fits into the beautiful landscape of a country resort. Hotel \"Archazor\" is more than just a hotel with comfortable rooms and a home environment. It\'s a whole world in one hotel, located in a picturesque natural corner of Uzbekistan. Only here you will fully feel what a real holiday can be like!  The rooms include everything you need for your comfort and coziness. Room decor keeps the individuality of a country hotel bright. European sophistication of design and impeccable cleanliness will appeal to lovers of real country rest. The hotel rooms are equipped according to international hotel standards, which makes \"Archachor\" an attractive place for both residents of Uzbekistan and foreign tourists.  Room facilities: • Comfortable beds; • Heated floor (in winter); • Bathroom with shower; •	Satellite television; • Internal phone; • Safe; •	Mini bar. The room rate includes: •	Table tennis; •	Pool; • Badminton; •	Mini football. Cottages Also at your service are three European cottages for 4, 7 and 18 persons, located among a beautiful pine grove.  Cottage - \"for 18 people\" A modern two-storey cottage is an ideal place for a fun holiday company. • Facilities in the cottage: • Seven bedrooms with comfortable beds; • Two bathrooms with shower cabins; • Large fireplace room; • Billiard room; • Kitchen with all equipment; •	Satellite television; • DVD; • Karaoke; • Magnificent view from the balcony to Chimgan; • Internal phone. Cottage - \"for 7 people\" Seven-meter two-storey cottage among the pine grove attracts its unusual design.  Cottage facilities: • Three bedrooms with comfortable beds; • Two bathrooms with shower cabins; • Cozy lounge; • Kitchen with all equipment; •	Satellite television; • Heated floor (in winter); • Internal phone; • Magnificent view from the balcony to Chimgan.  Cottage - \"for 4 persons\" Four-bed modern one-storey cottage among a pine grove.  Cottage facilities: • Two bedrooms with comfortable beds; • Bathroom with shower; • Hall with soft sofas; •	Satellite television; • Kitchen with all equipment; • Heated floor (in winter); • Internal phone; • Magnificent view from the balcony to Chimgan. The cost of all cottages includes: •	Table tennis; •	Pool; • Badminton; •	Mini football; • Hearth (BBQ); • Topchan. Restaurant and bar: An exquisite restaurant on the territory of the mountain resort \"Archazor\" will not leave indifferent any gourmet. A qualified chef is always at your service. Entertainment: •	Satellite television; • Table tennis, badminton, a mini football field; • DVD, karaoke, music center (in cottages); • Billiards (use of billiards is at an additional cost); • Outdoor swimming pool (use of an outdoor swimming pool is included in the price). Working hours: 8: 00-20: 00. • Indoor swimming pool (use of indoor swimming pool is for an additional fee); • Sauna (use of the sauna is not included in the price). Towels and bath robe are included in the price of the sauna. Indoor pool and sauna operating mode: 80: 00-23: 00 Pool: A magnificent pool with filtration and heating will cool and give vivacity at any time of the day. The water in the pool is spring and very useful for lovers of swimming.','Recreation areas','Tashkent region, Bostanlyk district, Chimgan tract, Ugam-Chatkal National Park.',3000000,'Sum',56,33000,2,0,0,0,7,'2018-05-10 13:23:24','2018-05-11 17:23:58'),(3,'Mountain resort complex \"Layner\"','On the territory of the complex there are 8 residential two-story buildings, from them - 6 standard and 2 cases of a class \"lux\".  To services of Guests - 100 cozy and comfortable rooms of the following categories: • 48 Standard Twin (Standard rooms with separate beds); • 36 Standard Double (Standard rooms with one large bed); • 8 Luxe Double (Two-room suite with one large bed); • 4 Luxe Twin (Two-room suite with two separate beds); • 4 Deluxe Twin (Two-room junior suite with two separate beds). Room «STANDART» 36 sq / m - one-room The room is equipped with: chair chair, round coffee table, stationary chest of drawers, mirror, cupboard cupboard, LCD TV 42 \", bed with orthopedic mattress, bedside table, telephone, radio system, air conditioning, shower, sink, toilet, telephone, hairdryer, set towels (for hands, feet, bath), a set of personal hygiene (shampoo, soap, shower gel, other personal care items).   Room \"DELUXE\" 54 sq / m - two-room suite with two separate beds The room is equipped with: chair chair, round coffee table, stationary chest of drawers, mirror, cupboard cupboard, LCD TV 42 \", bed with orthopedic mattress, bedside table, telephone, radio system, air conditioning, shower, sink, toilet, telephone, hairdryer, set towels (for hands, feet, bath), a set of personal hygiene (shampoo, soap, shower gel, other personal care items). Sofa transformer (designed for 2 children, not more than 15 years).   Room \"LUXE\" 72 sq / m - two-room suite The room is equipped with: chair chair, round coffee table, stationary chest of drawers, mirror, cupboard cupboard, LCD TV 42 \", bed with orthopedic mattress, bedside table, telephone, radio system, air conditioning, shower, sink, toilet, telephone, hairdryer, set towels (for hands, feet, bath), a set of personal hygiene (shampoo, soap, shower gel, other personal care items), mini safe. Sofa transformer (designed for 2 children, not more than 15 years).','Recreation areas','Tashkent region, in the village of Chimgan, just 7 km from the Chimgan cable car.',1200000,'Sum',46,35000,1,0,0,0,7,'2018-05-10 13:29:10','2018-05-12 00:37:53'),(4,'\"GRAND & GLAMOR\"','Spend your weekend unforgettably, relaxing at the best summer residence Charvak! HOT POOL SOURCES Six bedrooms, large spacious hall, hall, indoor and outdoor swimming pool 6x4 (heated), sauna, summer and winter kitchen, BBQ, BBQ, bed, billiards, PLAYSTATION, WiFi, KARAOKE, Night Club, as well as morning cleaning. In order to improve the service for additional. fee added: Hookah of all kinds Round-the-clock taxi Night club Chef from restaurant Arbat  Inside and outside clean and tidy. Repair in the style of \"Euro\". All the best conditions are just for you! In the photo you can see the dacha in detail. The villa is located in Khujakent, 200 meters from Arbat.','Summer Cottage','Khujackent 200 meters from the Arbat.',1700000,'Sum',8,420,6,0,0,0,7,'2018-05-10 13:34:16','2018-05-12 13:45:01'),(5,'New Villa of Premium Class \"Heaven Villa\"','2 * 2 = 5 And if you can argue with this statement, the fact that our country residence is created specifically for your unforgettable vacation is undeniable! What is so surprising about it? To begin with, at your disposal will be 4 luxurious bedrooms with private bathrooms each and satellite TV in addition. But who is surprised at this now? Therefore, together with them at your service fireplace room, swimming pool, sauna, jacuzzi with a waterfall (!), A private viewing platform with an amazing view and surprisingly cozy atmosphere of a serene country life.','Summer Cottage','Tashkent region Bostanlik district makhal Arksoy street Humsan',1500000,'Sum',6,600,3,0,0,0,7,'2018-05-10 13:39:18','2018-05-11 17:53:27'),(6,'Charvak. The day near the Barrel. Cozy rest.','Without intermediaries .. Evrodacha works year-round .. Who was with us once, returns again. . A large pool of majolica with heating and filtration of 10.5 by 5 meters. 5 rooms: 4 bedrooms in each bathroom and shower. Sauna with indoor pool. Great hall with fireplace. Modern television. Tea house and barbecue, grill. Birches, pines, blue spruce, microclimate, cascading waterfall. At the weekend the price is negotiable. Welcome!','Summer Cottage','Gazalkent, Tashkent region',800000,'Sum',5,260,4,0,0,0,7,'2018-05-10 13:41:59','2018-05-12 12:25:37'),(7,'Sanatorium \"Zangiota Zam Zam\"','Sanatorium \"Zangiot Zam-Zam\" is located in the Tashkent region, not far from the historical and cultural complex \"Zangiot\", and specializes in the rehabilitation and treatment of kidney, digestive and urinary canal diseases, as well as metabolic and musculoskeletal disorders.  The sanatorium operates on the basis of a curative source of high-thermal (75 ° C), low-mineralized (m = 3.5 - 5.2 g / l), sulfate-chloride sodium, slightly alkaline (pH = 8.1) water, which is extracted from a well depth of 1960 m. This mineral water improves the work of the kidneys and liver, the removal of stones and sand from the kidneys, normalizes the work of the stomach, has anti-inflammatory, analgesic, alkalizing, immunocorrecting and strong diuretic effect.  Sanatorium complex \"Zangiot Zam-Zam\" occupies almost 10 hectares of well-groomed, landscaped territory, provides 4 meals a day and offers accommodation in cozy, modernly equipped rooms with a bathroom and a heating system that is responsible for the supply of hot and cold water. Treatment in the sanatorium \"Zangiot Zam-Zam\" is carried out on the basis of modern equipment.','Sanatoriums','Tashkent region, close to the historical and cultural complex \"Zangiota\"',800000,'Sum',32,10000,2,0,0,0,7,'2018-05-10 13:48:04','2018-05-12 00:37:06'),(8,'Sanatorium \"Humson Buloq\"','Sanatorium \"Humson Bulokq\" (\"Khumsan Bulak\") is located in the most beautiful mountain area of the Western Tien Shan, near the Ugam River, near the village of Khumsan, just 80 km from Tashkent. There are surprisingly picturesque landscapes (foothills of the Tien Shan, the gorge of the river Ugam, karst caves, Pustalikai waterfall), mild climate, ecologically clean mountain air, which have an additional therapeutic effect not only for the body, but also for the soul. Nearby is the azure Charvak reservoir.  Sanatorium \"Humson Buloq\" offers comfortable rest and full course of sanatorium treatment for people with diseases of the respiratory system, cardiovascular system, musculoskeletal system, etc. The health center \"Humson Bulok\" is equipped with the most modern highly effective medical equipment that allows conducting qualified physiotherapy and wellness procedures, including water procedures using spring water with minerals.  The unique location and climatic conditions, comfortable accommodation, modern treatment and recreation, full rest and useful entertainment - that\'s why many choose the sanatorium \"Humson Buloq\".','Sanatoriums','Mountainous area of the Western Tien-Shan, near the Ugam River, near the village of Khumsan, just 80 km from Tashkent',600000,'Sum',35,20000,0,0,0,0,7,'2018-05-10 13:56:19','2018-05-10 13:56:19');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(9) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number` (`number`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `number`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (1,'Kamronbek',977007024,'kbegmatov96@gmail.com','$2y$10$tICf9VgOejgBaDqqE9WNmeawvn2oEqVQzWOV6F/9J6v2.X3lNgrrK','7Dhow3dE0LmGNZf7LP6YVXSwQcO4t7vYYCN1TjC1vhyH0fHbiMsVxuAlKvmR','2018-04-29 10:17:27','2018-04-29 10:17:27'),(2,'Bekhzod',933841574,'b.shaymonov@student.inha.uz','$2y$10$K4LghgGai9xYmCVlCpWBH.tijcORQak9bjp8Ps0SbJWUj4Rdtti7m','h4Y0TgVetHeEpMwvJxljDYea6K6JIJc9uS2GF2TjsV02kDW4624zMVytExrD','2018-04-30 07:23:57','2018-04-30 07:23:57'),(3,'AzizAka',983106567,'A.abdulkhakov@student.inha.uz','$2y$10$UqbN7uNER.z4jLSgW/F.6uDaup/fNj9Gi8bWfHy8y58WDQ7xMYJ1a','LGEAIRgLIrVMUu3nVKDcd0dREVB4thC3Iy81kyssIs6Vyl4HnNkdrjVnfAiW','2018-05-05 03:34:19','2018-05-05 03:34:19'),(4,'Beka',971515151,'bekagoku81156@gmail.com','$2y$10$ad1pm3Pxo2Dn25PJy6RoV.N7AiCybKRHhHfCkmNgprVzPQS20vTX2',NULL,'2018-05-05 10:25:33','2018-05-05 10:25:33'),(5,'Nodirbek',935348708,'nodirbeknabiev98@gmail.com','$2y$10$8uwo1xptZFgx1jkZvKWlDeCi9HA1rldl5ziJcL4/Iwyko.P1JiIW6','H38fgKZVNhz5UNy1jY02iJlEc6wbywxjEB9RRv0Out11iKWUq2HC32JoTMKy','2018-05-08 03:46:21','2018-05-08 03:46:21'),(6,'Malika',978077456,'juraeva-malika@mail.ru','$2y$10$XHV1AZt9l2cl1C1zlbCzaeFxlbwNtJduOIVS0UwIYAxZlBfcuA0E.','3lpL6Cd2Aijmxdv1Vl3XEuKrRUJZzS8r9VlhnGc4lXLpNEfYxUgVRa8BtrBk','2018-05-09 05:45:03','2018-05-09 05:45:03'),(7,'Bek',955222222,'bek@mail.ru','$2y$10$geI9Hca5JmgGNWGXM/BPJO3iDrRlS34OLuPCNxvyh7ulSYq/1ees.',NULL,'2018-05-10 11:04:20','2018-05-10 11:04:20'),(8,'Kamron',946082408,'kamr96@list.ru','$2y$10$kprmanmzzjlg5qv45uN0HulgiaZL9xBDIdJILLurJyfOtSFuW.HoO',NULL,'2018-05-12 01:00:23','2018-05-12 01:00:23');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'urmebelu_erent'
--

--
-- Dumping routines for database 'urmebelu_erent'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-13 10:33:58
