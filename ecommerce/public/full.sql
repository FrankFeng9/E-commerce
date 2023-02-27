-- MariaDB dump 10.19  Distrib 10.5.17-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: laravel_ecommerce_224
-- ------------------------------------------------------
-- Server version	10.5.17-MariaDB-1:10.5.17+maria~ubu2004

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `returnorder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orders` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reports` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alluser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adminuserrole` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(25) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Admin','admin@gmail.com','2021-02-02 15:36:52','$2y$10$twsbCV520lCCm13sRudA9.8b.E3XcVvSk1KIDdvQ5X2SkcabnRsTK','34343434','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1',1,'sr6Hftw9CjYwcz73dMMLD3toRTVw54Bxci5CgkQvwfLMLHQWbEhutr2EmwZm',NULL,'upload/admin_images/20221108074244.jpeg','2021-02-02 15:36:52','2022-11-07 23:42:11'),(2,'test','test@gmail.com',NULL,'$2y$10$BriM5goGI3sRlwtlwTyiBulr7k94DtKIfKtHujowg/L7V31xEOapu','43434343',NULL,NULL,'1',NULL,NULL,NULL,'1',NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,2,NULL,NULL,'upload/admin_images/1748608765066410.jpg','2022-11-04 15:07:48','2022-11-04 15:07:48'),(5,'why','why@test.com',NULL,'$2y$10$ag9NrB1DKoVHeUEBuyN5J.5lENezRl2A8dO5peA7lDG4.n9WqgAvy','15095311111',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,NULL,NULL,'upload/admin_images/1747444024404922.jpeg','2022-10-22 18:40:28','2022-10-22 18:40:28'),(6,'test_admin','test_admin@admin.com',NULL,'$2y$10$8wsu9JRuYmdQ1VIX8oSuYeKLam2qgT/rjpIUZ3JPjnYhkorIqQZAi','123123','1','1','1','1','1','1','1','1','1','1','1','1','1','1','0',2,NULL,NULL,'upload/admin_images/1748925224047818.jpeg','2022-11-08 02:57:47','2022-11-08 02:57:47'),(7,'test_admin3','test_admin2@admin.com',NULL,'$2y$10$8lp8vTFTpsTH70ItO0BUm.JnbeKBnbsvRTP4S4DWcE6Qq4HfPdluC','111','1','1','1','1','1','1','1','1','1','1','1','1','1','1','0',2,NULL,NULL,'upload/admin_images/1748442887157059.jpeg','2022-11-02 19:16:30','2022-11-02 19:16:30'),(9,'test_new_admin','test_new_admin@gmail.com',NULL,'$2y$10$mt9yqSIXKXyUMFVmKX/NqODzHtNEHlwuuYg6dKxwwxrAsYH2lsnVe','657-888-99888','1','1','1','1','1','1','1','1','1','1','1','1','1','1','0',2,NULL,NULL,'upload/admin_images/1748608741667328.jpg','2022-11-04 15:07:26','2022-11-04 15:07:26'),(10,'haha','haha@test.com',NULL,'$2y$10$nROymL38rKwsJbsTnAQ2augP3R69/wrhMxj4hneXHi4Yk2pleFfjq','12435','1','1','1','1','1','1','1','1','1','1','1','1','1','1','0',2,NULL,NULL,'upload/admin_images/1748925244298957.jpeg','2022-11-08 02:58:06',NULL);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billing_address`
--

DROP TABLE IF EXISTS `billing_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billing_address` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billing_address`
--

LOCK TABLES `billing_address` WRITE;
/*!40000 ALTER TABLE `billing_address` DISABLE KEYS */;
INSERT INTO `billing_address` VALUES (2,1,'aa','bb','aaa','1123','bbb','123','10','111','A1A 1A2','2022-10-26 07:30:06','2022-10-26 07:48:49'),(3,1,'aaa','bb','dd','ee','ff','gg','11','cc','B1B 5D5','2022-10-26 07:53:48','2022-10-26 07:54:49'),(4,1,'aaa','bb','dd','ee','ff','gg','11','cc','B1B 2D2','2022-10-26 07:54:38','2022-10-26 07:54:38');
/*!40000 ALTER TABLE `billing_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_post_categories`
--

DROP TABLE IF EXISTS `blog_post_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_post_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `blog_category_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_name_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_post_categories`
--

LOCK TABLES `blog_post_categories` WRITE;
/*!40000 ALTER TABLE `blog_post_categories` DISABLE KEYS */;
INSERT INTO `blog_post_categories` VALUES (1,'Tech','तकनीक','tech','तकनीक',NULL,NULL),(2,'Wealth','पैसा','wealth','पैसा','2021-03-24 13:03:37',NULL),(3,'Technology','प्रौद्योगिकी','technology','प्रौद्योगिकी','2021-03-24 13:04:25',NULL),(4,'Marketing222','विपणन222','marketing222','विपणन222','2021-03-24 13:14:38','2021-03-24 13:14:38');
/*!40000 ALTER TABLE `blog_post_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_posts`
--

DROP TABLE IF EXISTS `blog_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `post_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_details_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_details_hin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_posts`
--

LOCK TABLES `blog_posts` WRITE;
/*!40000 ALTER TABLE `blog_posts` DISABLE KEYS */;
INSERT INTO `blog_posts` VALUES (1,3,'What is Lorem Ipsum?','ट्विटर स्वचालित अनुवाद का परीक्षण कर रहा है','what-is-lorem-ipsum?','ट्विटर-स्वचालित-अनुवाद-का-परीक्षण-कर-रहा-है','upload/post/1695147561533345.jpg','<p>Here at CBD For The People, we don&#39;t release a product until certain that it can be the best option on the market. For years, our customers have been asking us why we&#39;ve yet to introduce gummies to our product lineup, despite gummies being one of the most popular types of hemp products since cannabidiol first hit the scene years ago.&nbsp;&nbsp;</p>\r\n\r\n<p>Well, our answer is simple. Our company has been spending years hard at work figuring out how to ensure that our gummies outshine the competition by being the most effective, delicious and high-quality options on the market.&nbsp;&nbsp;</p>\r\n\r\n<p>And, at long last, we can finally introduce to you our Gummy NOIDS, which we can confidently say are unlike any other CBD gummies that you will find today. These gummies result from amazing dedication to ensuring that the formula itself meets our incredibly high standards.</p>\r\n\r\n<p>&nbsp;What makes CBD FTP Gummy NOIDS the real deal?</p>\r\n\r\n<p>CBD FTP Gummy NOIDS is the perfect way to consume hemp each day in edible form, and they have what it takes to give you the hemp experience you&#39;re looking for.</p>\r\n\r\n<p>Full spectrum hemp:&nbsp;FTP Gummy NOIDS are made with full-spectrum hemp extract, which shouldn&#39;t surprise anyone who has been a customer of ours for a while. We only use full-spectrum hemp extract because research has shown that it is simply the best way to consume the hemp plant. Full-spectrum hemp naturally contains every naturally occurring chemical compound in the hemp plant&#39;s buds; each compound is incredibly useful in its way, playing an important role in delivering desirable properties to the body.</p>\r\n\r\n<p>Full-spectrum hemp extract also offers the entourage effect, which has to do with the synergistic advantage of taking all of the compounds together at once. Full-spectrum hemp is generally more effective, as each compound boosts the bioavailability of the others through this natural synergistic process.</p>\r\n\r\n<p>Dark and unrefined:&nbsp;CBD For The People&nbsp;believes that hemp should be unrefined and uncut, which is why we do not engage in all of the purification processes used by other companies. Purification sounds good in theory, but its real aim is to weaken hemp&#39;s natural taste and give it an attractive color to appeal to the masses more. These processes ultimately dilute the plant&#39;s chemical compounds and take away from the entourage effect.&nbsp;&nbsp;&nbsp;</p>','<p>सीबीडी फॉर द पीपल पर, हम किसी उत्पाद को तब तक जारी नहीं करते हैं जब तक कि यह बाजार पर सबसे अच्छा विकल्प न हो। सालों से, हमारे ग्राहक हमसे पूछते रहे हैं कि क्यों हम अभी तक अपने उत्पाद लाइनअप के लिए गमियों को पेश करना चाहते हैं, गमियों को सबसे लोकप्रिय प्रकार के भांग उत्पादों में से एक होने के बावजूद, क्योंकि कैनबिडिओल ने सबसे पहले इस दृश्य को हिट किया।</p>\r\n\r\n<p>खैर, हमारा जवाब आसान है। हमारी कंपनी वर्षों से मेहनत कर रही है कि कैसे यह सुनिश्चित करें कि हमारी gummies बाजार पर सबसे प्रभावी, स्वादिष्ट और उच्च गुणवत्ता वाले विकल्प बनकर प्रतिस्पर्धा को बढ़ावा दे।</p>\r\n\r\n<p>और, लंबे समय तक, हम अंत में आपको हमारे गमी एड्स से परिचित करा सकते हैं, जिसे हम विश्वास के साथ कह सकते हैं कि किसी भी अन्य सीबीडी गमियों के विपरीत हैं जो आपको आज मिलेंगे। इन गमियों का परिणाम अद्भुत समर्पण से यह सुनिश्चित करने के लिए है कि सूत्र स्वयं हमारे अविश्वसनीय उच्च मानकों को पूरा करता है।</p>\r\n\r\n<p>क्या सीबीडी एफ़टीपी गमी एड्स असली सौदा है?</p>\r\n\r\n<p>CBD FTP Gummy NOIDS हर दिन खाद्य रूप में गांजा का सेवन करने का एक सही तरीका है, और आपके पास वह गांजा अनुभव है जिसे आप खोज रहे हैं।</p>\r\n\r\n<p>फुल स्पेक्ट्रम हैम्प: एफ़टीपी गमी एड्स फुल-स्पेक्ट्रम हैम्प एक्सट्रैक्ट के साथ बनाये जाते हैं, जो किसी को भी आश्चर्यचकित नहीं करना चाहिए जो कुछ समय के लिए हमारा ग्राहक रहा है। हम केवल पूर्ण-स्पेक्ट्रम गांजा निकालने का उपयोग करते हैं क्योंकि अनुसंधान से पता चला है कि यह भांग के पौधे का उपभोग करने का सबसे अच्छा तरीका है। फुल-स्पेक्ट्रम हेम्प में स्वाभाविक रूप से हेम प्लांट की कलियों में हर प्राकृतिक रूप से पाए जाने वाले रासायनिक यौगिक होते हैं; प्रत्येक यौगिक अपने तरीके से अविश्वसनीय रूप से उपयोगी है, जो शरीर को वांछनीय गुण प्रदान करने में महत्वपूर्ण भूमिका निभा रहा है।</p>\r\n\r\n<p>फुल-स्पेक्ट्रम हेम्प एक्सट्रैक्ट भी प्रभाव प्रदान करता है, जो सभी यौगिकों को एक साथ लेने के सहक्रियात्मक लाभ के साथ करना है। पूर्ण-स्पेक्ट्रम गांजा आम तौर पर अधिक प्रभावी होता है, क्योंकि प्रत्येक यौगिक इस प्राकृतिक तालमेल प्रक्रिया के माध्यम से दूसरों की जैव उपलब्धता को बढ़ाता है।</p>\r\n\r\n<p>डार्क एंड अनरिफाइंड: सीबीडी फॉर द पीपल का मानना ​​है कि गांजा अपरिष्कृत और अपरिष्कृत होना चाहिए, यही कारण है कि हम अन्य कंपनियों द्वारा उपयोग किए जाने वाले सभी शुद्धिकरण प्रक्रियाओं में संलग्न नहीं होते हैं। शुद्धिकरण सिद्धांत में अच्छा लगता है, लेकिन इसका असली उद्देश्य भांग के प्राकृतिक स्वाद को कमजोर करना है और इसे बड़े पैमाने पर लोगों के लिए अपील करने के लिए एक आकर्षक रंग देना है। ये प्रक्रियाएं अंततः पौधे के रासायनिक यौगिकों को पतला कर देती हैं और अंतःस्रावी प्रभाव से दूर ले जाती हैं।</p>','2021-03-24 21:23:23',NULL),(2,3,'These CBD Gummies Are Full Spectrum And Flavorful','ये CBD Gummies फुल स्पेक्ट्रम और फ्लेवरफुल हैं','these-cbd-gummies-are-full-spectrum-and-flavorful','ये-CBD-Gummies-फुल-स्पेक्ट्रम-और-फ्लेवरफुल-हैं','upload/post/1695147664666717.jpg','<p>Here at CBD For The People, we don&#39;t release a product until certain that it can be the best option on the market. For years, our customers have been asking us why we&#39;ve yet to introduce gummies to our product lineup, despite gummies being one of the most popular types of hemp products since cannabidiol first hit the scene years ago.&nbsp;&nbsp;</p>\r\n\r\n<p>Well, our answer is simple. Our company has been spending years hard at work figuring out how to ensure that our gummies outshine the competition by being the most effective, delicious and high-quality options on the market.&nbsp;&nbsp;</p>\r\n\r\n<p>And, at long last, we can finally introduce to you our Gummy NOIDS, which we can confidently say are unlike any other CBD gummies that you will find today. These gummies result from amazing dedication to ensuring that the formula itself meets our incredibly high standards.</p>\r\n\r\n<p>&nbsp;What makes CBD FTP Gummy NOIDS the real deal?</p>\r\n\r\n<p>CBD FTP Gummy NOIDS is the perfect way to consume hemp each day in edible form, and they have what it takes to give you the hemp experience you&#39;re looking for.</p>\r\n\r\n<p>Full spectrum hemp:&nbsp;FTP Gummy NOIDS are made with full-spectrum hemp extract, which shouldn&#39;t surprise anyone who has been a customer of ours for a while. We only use full-spectrum hemp extract because research has shown that it is simply the best way to consume the hemp plant. Full-spectrum hemp naturally contains every naturally occurring chemical compound in the hemp plant&#39;s buds; each compound is incredibly useful in its way, playing an important role in delivering desirable properties to the body.</p>\r\n\r\n<p>Full-spectrum hemp extract also offers the entourage effect, which has to do with the synergistic advantage of taking all of the compounds together at once. Full-spectrum hemp is generally more effective, as each compound boosts the bioavailability of the others through this natural synergistic process.</p>\r\n\r\n<p>Dark and unrefined:&nbsp;CBD For The People&nbsp;believes that hemp should be unrefined and uncut, which is why we do not engage in all of the purification processes used by other companies. Purification sounds good in theory, but its real aim is to weaken hemp&#39;s natural taste and give it an attractive color to appeal to the masses more. These processes ultimately dilute the plant&#39;s chemical compounds and take away from the entourage effect.&nbsp;&nbsp;&nbsp;</p>','<p>सीबीडी फॉर द पीपल पर, हम किसी उत्पाद को तब तक जारी नहीं करते हैं जब तक कि यह बाजार पर सबसे अच्छा विकल्प न हो। सालों से, हमारे ग्राहक हमसे पूछते रहे हैं कि क्यों हम अभी तक अपने उत्पाद लाइनअप के लिए गमियों को पेश करना चाहते हैं, गमियों को सबसे लोकप्रिय प्रकार के भांग उत्पादों में से एक होने के बावजूद, क्योंकि कैनबिडिओल ने सबसे पहले इस दृश्य को हिट किया।</p>\r\n\r\n<p>खैर, हमारा जवाब आसान है। हमारी कंपनी वर्षों से मेहनत कर रही है कि कैसे यह सुनिश्चित करें कि हमारी gummies बाजार पर सबसे प्रभावी, स्वादिष्ट और उच्च गुणवत्ता वाले विकल्प बनकर प्रतिस्पर्धा को बढ़ावा दे।</p>\r\n\r\n<p>और, लंबे समय तक, हम अंत में आपको हमारे गमी एड्स से परिचित करा सकते हैं, जिसे हम विश्वास के साथ कह सकते हैं कि किसी भी अन्य सीबीडी गमियों के विपरीत हैं जो आपको आज मिलेंगे। इन गमियों का परिणाम अद्भुत समर्पण से यह सुनिश्चित करने के लिए है कि सूत्र स्वयं हमारे अविश्वसनीय उच्च मानकों को पूरा करता है।</p>\r\n\r\n<p>क्या सीबीडी एफ़टीपी गमी एड्स असली सौदा है?</p>\r\n\r\n<p>CBD FTP Gummy NOIDS हर दिन खाद्य रूप में गांजा का सेवन करने का एक सही तरीका है, और आपके पास वह गांजा अनुभव है जिसे आप खोज रहे हैं।</p>\r\n\r\n<p>फुल स्पेक्ट्रम हैम्प: एफ़टीपी गमी एड्स फुल-स्पेक्ट्रम हैम्प एक्सट्रैक्ट के साथ बनाये जाते हैं, जो किसी को भी आश्चर्यचकित नहीं करना चाहिए जो कुछ समय के लिए हमारा ग्राहक रहा है। हम केवल पूर्ण-स्पेक्ट्रम गांजा निकालने का उपयोग करते हैं क्योंकि अनुसंधान से पता चला है कि यह भांग के पौधे का उपभोग करने का सबसे अच्छा तरीका है। फुल-स्पेक्ट्रम हेम्प में स्वाभाविक रूप से हेम प्लांट की कलियों में हर प्राकृतिक रूप से पाए जाने वाले रासायनिक यौगिक होते हैं; प्रत्येक यौगिक अपने तरीके से अविश्वसनीय रूप से उपयोगी है, जो शरीर को वांछनीय गुण प्रदान करने में महत्वपूर्ण भूमिका निभा रहा है।</p>\r\n\r\n<p>फुल-स्पेक्ट्रम हेम्प एक्सट्रैक्ट भी प्रभाव प्रदान करता है, जो सभी यौगिकों को एक साथ लेने के सहक्रियात्मक लाभ के साथ करना है। पूर्ण-स्पेक्ट्रम गांजा आम तौर पर अधिक प्रभावी होता है, क्योंकि प्रत्येक यौगिक इस प्राकृतिक तालमेल प्रक्रिया के माध्यम से दूसरों की जैव उपलब्धता को बढ़ाता है।</p>\r\n\r\n<p>डार्क एंड अनरिफाइंड: सीबीडी फॉर द पीपल का मानना ​​है कि गांजा अपरिष्कृत और अपरिष्कृत होना चाहिए, यही कारण है कि हम अन्य कंपनियों द्वारा उपयोग किए जाने वाले सभी शुद्धिकरण प्रक्रियाओं में संलग्न नहीं होते हैं। शुद्धिकरण सिद्धांत में अच्छा लगता है, लेकिन इसका असली उद्देश्य भांग के प्राकृतिक स्वाद को कमजोर करना है और इसे बड़े पैमाने पर लोगों के लिए अपील करने के लिए एक आकर्षक रंग देना है। ये प्रक्रियाएं अंततः पौधे के रासायनिक यौगिकों को पतला कर देती हैं और अंतःस्रावी प्रभाव से दूर ले जाती हैं।</p>','2021-03-24 21:23:36',NULL),(3,1,'Fintech Startup Qraft Technologies','फिनटेक स्टार्टअप क्राफ्ट टेक्नोलॉजीज','fintech-startup-qraft-technologies','फिनटेक-स्टार्टअप-क्राफ्ट-टेक्नोलॉजीज','upload/post/1695147735524570.png','<p>Here at CBD For The People, we don&#39;t release a product until certain that it can be the best option on the market. For years, our customers have been asking us why we&#39;ve yet to introduce gummies to our product lineup, despite gummies being one of the most popular types of hemp products since cannabidiol first hit the scene years ago.&nbsp;&nbsp;</p>\r\n\r\n<p>Well, our answer is simple. Our company has been spending years hard at work figuring out how to ensure that our gummies outshine the competition by being the most effective, delicious and high-quality options on the market.&nbsp;&nbsp;</p>\r\n\r\n<p>And, at long last, we can finally introduce to you our Gummy NOIDS, which we can confidently say are unlike any other CBD gummies that you will find today. These gummies result from amazing dedication to ensuring that the formula itself meets our incredibly high standards.</p>\r\n\r\n<p>&nbsp;What makes CBD FTP Gummy NOIDS the real deal?</p>\r\n\r\n<p>CBD FTP Gummy NOIDS is the perfect way to consume hemp each day in edible form, and they have what it takes to give you the hemp experience you&#39;re looking for.</p>\r\n\r\n<p>Full spectrum hemp:&nbsp;FTP Gummy NOIDS are made with full-spectrum hemp extract, which shouldn&#39;t surprise anyone who has been a customer of ours for a while. We only use full-spectrum hemp extract because research has shown that it is simply the best way to consume the hemp plant. Full-spectrum hemp naturally contains every naturally occurring chemical compound in the hemp plant&#39;s buds; each compound is incredibly useful in its way, playing an important role in delivering desirable properties to the body.</p>\r\n\r\n<p>Full-spectrum hemp extract also offers the entourage effect, which has to do with the synergistic advantage of taking all of the compounds together at once. Full-spectrum hemp is generally more effective, as each compound boosts the bioavailability of the others through this natural synergistic process.</p>\r\n\r\n<p>Dark and unrefined:&nbsp;CBD For The People&nbsp;believes that hemp should be unrefined and uncut, which is why we do not engage in all of the purification processes used by other companies. Purification sounds good in theory, but its real aim is to weaken hemp&#39;s natural taste and give it an attractive color to appeal to the masses more. These processes ultimately dilute the plant&#39;s chemical compounds and take away from the entourage effect.&nbsp;&nbsp;&nbsp;</p>','<p>सीबीडी फॉर द पीपल पर, हम किसी उत्पाद को तब तक जारी नहीं करते हैं जब तक कि यह बाजार पर सबसे अच्छा विकल्प न हो। सालों से, हमारे ग्राहक हमसे पूछते रहे हैं कि क्यों हम अभी तक अपने उत्पाद लाइनअप के लिए गमियों को पेश करना चाहते हैं, गमियों को सबसे लोकप्रिय प्रकार के भांग उत्पादों में से एक होने के बावजूद, क्योंकि कैनबिडिओल ने सबसे पहले इस दृश्य को हिट किया।</p>\r\n\r\n<p>खैर, हमारा जवाब आसान है। हमारी कंपनी वर्षों से मेहनत कर रही है कि कैसे यह सुनिश्चित करें कि हमारी gummies बाजार पर सबसे प्रभावी, स्वादिष्ट और उच्च गुणवत्ता वाले विकल्प बनकर प्रतिस्पर्धा को बढ़ावा दे।</p>\r\n\r\n<p>और, लंबे समय तक, हम अंत में आपको हमारे गमी एड्स से परिचित करा सकते हैं, जिसे हम विश्वास के साथ कह सकते हैं कि किसी भी अन्य सीबीडी गमियों के विपरीत हैं जो आपको आज मिलेंगे। इन गमियों का परिणाम अद्भुत समर्पण से यह सुनिश्चित करने के लिए है कि सूत्र स्वयं हमारे अविश्वसनीय उच्च मानकों को पूरा करता है।</p>\r\n\r\n<p>क्या सीबीडी एफ़टीपी गमी एड्स असली सौदा है?</p>\r\n\r\n<p>CBD FTP Gummy NOIDS हर दिन खाद्य रूप में गांजा का सेवन करने का एक सही तरीका है, और आपके पास वह गांजा अनुभव है जिसे आप खोज रहे हैं।</p>\r\n\r\n<p>फुल स्पेक्ट्रम हैम्प: एफ़टीपी गमी एड्स फुल-स्पेक्ट्रम हैम्प एक्सट्रैक्ट के साथ बनाये जाते हैं, जो किसी को भी आश्चर्यचकित नहीं करना चाहिए जो कुछ समय के लिए हमारा ग्राहक रहा है। हम केवल पूर्ण-स्पेक्ट्रम गांजा निकालने का उपयोग करते हैं क्योंकि अनुसंधान से पता चला है कि यह भांग के पौधे का उपभोग करने का सबसे अच्छा तरीका है। फुल-स्पेक्ट्रम हेम्प में स्वाभाविक रूप से हेम प्लांट की कलियों में हर प्राकृतिक रूप से पाए जाने वाले रासायनिक यौगिक होते हैं; प्रत्येक यौगिक अपने तरीके से अविश्वसनीय रूप से उपयोगी है, जो शरीर को वांछनीय गुण प्रदान करने में महत्वपूर्ण भूमिका निभा रहा है।</p>\r\n\r\n<p>फुल-स्पेक्ट्रम हेम्प एक्सट्रैक्ट भी प्रभाव प्रदान करता है, जो सभी यौगिकों को एक साथ लेने के सहक्रियात्मक लाभ के साथ करना है। पूर्ण-स्पेक्ट्रम गांजा आम तौर पर अधिक प्रभावी होता है, क्योंकि प्रत्येक यौगिक इस प्राकृतिक तालमेल प्रक्रिया के माध्यम से दूसरों की जैव उपलब्धता को बढ़ाता है।</p>\r\n\r\n<p>डार्क एंड अनरिफाइंड: सीबीडी फॉर द पीपल का मानना ​​है कि गांजा अपरिष्कृत और अपरिष्कृत होना चाहिए, यही कारण है कि हम अन्य कंपनियों द्वारा उपयोग किए जाने वाले सभी शुद्धिकरण प्रक्रियाओं में संलग्न नहीं होते हैं। शुद्धिकरण सिद्धांत में अच्छा लगता है, लेकिन इसका असली उद्देश्य भांग के प्राकृतिक स्वाद को कमजोर करना है और इसे बड़े पैमाने पर लोगों के लिए अपील करने के लिए एक आकर्षक रंग देना है। ये प्रक्रियाएं अंततः पौधे के रासायनिक यौगिकों को पतला कर देती हैं और अंतःस्रावी प्रभाव से दूर ले जाती हैं।</p>','2021-03-24 21:23:41',NULL);
/*!40000 ALTER TABLE `blog_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=214 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (3,'Apple','apple','upload/brand/1691209870345575.png',NULL,NULL),(203,'ASUS','ASUS','','2022-10-24 22:05:09','2022-10-24 22:05:09'),(204,'HP','HP','','2022-10-24 22:05:09','2022-10-24 22:05:09'),(205,'Acer','Acer','','2022-10-24 22:05:09','2022-10-24 22:05:09'),(206,'Lenovo','Lenovo','','2022-10-24 22:05:09','2022-10-24 22:05:09'),(207,'Dell','Dell','','2022-10-24 22:05:09','2022-10-24 22:05:09'),(208,'Logitech','Logitech','','2022-10-24 22:05:09','2022-10-24 22:05:09'),(209,'fff','fff','',NULL,NULL),(210,'test brand','test-brand','',NULL,NULL),(213,'dfddf','dfddf','',NULL,NULL);
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (103,'All-In-One','all-in-one','','2022-10-24 22:05:09','2022-10-24 22:05:09'),(104,'Desktop','desktop','','2022-10-24 22:05:09','2022-10-24 22:05:09'),(105,'Laptop','laptop','','2022-10-24 22:05:09','2022-10-24 22:05:09'),(106,'Accessories','Accessories','','2022-10-24 22:05:09','2022-10-24 22:05:09');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coupons` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_discount` int(11) NOT NULL,
  `coupon_validity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupons`
--

LOCK TABLES `coupons` WRITE;
/*!40000 ALTER TABLE `coupons` DISABLE KEYS */;
INSERT INTO `coupons` VALUES (1,'HAPPY NEW YEAR',201,'2021-03-30',1,'2021-03-03 16:05:26','2021-03-03 16:05:26'),(2,'TEST',20,'2021-02-10',1,'2021-03-03 15:46:50',NULL),(4,'HAPPY LEARNING',30,'2021-03-30',1,'2021-03-03 16:05:53',NULL),(5,'EASY LEARNING',20,'2021-04-30',1,'2021-04-10 14:06:18',NULL);
/*!40000 ALTER TABLE `coupons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2021_02_02_203839_create_sessions_table',1),(7,'2021_02_02_212221_create_admins_table',2),(8,'2021_02_09_054528_create_brands_table',3),(9,'2021_02_09_111701_create_categories_table',4),(10,'2021_02_09_121910_create_sub_categories_table',5),(11,'2021_02_16_183944_create_sub_sub_categories_table',6),(12,'2021_02_16_204006_create_products_table',7),(13,'2021_02_16_205349_create_multi_imgs_table',7),(14,'2021_02_20_204829_create_sliders_table',8),(15,'2021_03_02_194613_create_wishlists_table',9),(16,'2021_03_03_211157_create_coupons_table',10),(17,'2021_03_03_222308_create_ship_divisions_table',11),(18,'2021_03_09_183956_create_ship_districts_table',12),(19,'2021_03_09_194733_create_ship_states_table',13),(20,'2021_03_11_201106_create_shippings_table',14),(21,'2021_03_14_203654_create_orders_table',15),(22,'2021_03_14_203901_create_order_items_table',15),(23,'2021_03_24_183649_create_blog_post_categories_table',16),(24,'2021_03_24_194838_create_blog_posts_table',17),(25,'2021_03_24_223430_create_site_settings_table',18),(26,'2021_03_26_194141_create_seos_table',19),(27,'2021_03_27_192140_create_reviews_table',20);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `multi_imgs`
--

DROP TABLE IF EXISTS `multi_imgs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `multi_imgs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `photo_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=316 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `multi_imgs`
--

LOCK TABLES `multi_imgs` WRITE;
/*!40000 ALTER TABLE `multi_imgs` DISABLE KEYS */;
INSERT INTO `multi_imgs` VALUES (14,5,'upload/products/multi-image/1692434756683622.jpeg','2021-02-22 16:06:00',NULL),(15,5,'upload/products/multi-image/1692434757242803.jpeg','2021-02-22 16:06:00',NULL),(16,5,'upload/products/multi-image/1692434757798923.jpeg','2021-02-22 16:06:01',NULL),(21,8,'upload/products/multi-image/1692435198442301.jpeg','2021-02-22 16:13:01',NULL),(22,8,'upload/products/multi-image/1692435198812554.jpeg','2021-02-22 16:13:01',NULL),(25,10,'upload/products/multi-image/1692435397186949.jpeg','2021-02-22 16:16:10',NULL),(26,10,'upload/products/multi-image/1692435397621306.jpeg','2021-02-22 16:16:11',NULL),(27,11,'upload/products/multi-image/1692435522145178.jpeg','2021-02-22 16:18:09',NULL),(28,11,'upload/products/multi-image/1692435522521654.jpeg','2021-02-22 16:18:10',NULL),(29,11,'upload/products/multi-image/1692435522990857.jpeg','2021-02-22 16:18:10',NULL),(30,12,'upload/products/multi-image/1696782744767125.jpeg','2021-04-11 15:55:24',NULL),(31,12,'upload/products/multi-image/1696782745223009.jpeg','2021-04-11 15:55:25',NULL),(32,12,'upload/products/multi-image/1696782745738394.jpeg','2021-04-11 15:55:25',NULL),(33,12,'upload/products/multi-image/1696782746215973.jpeg','2021-04-11 15:55:26',NULL),(34,201,'upload/products/multi-image/1747676801088295.jpeg','2022-10-25 08:14:38',NULL),(35,202,'upload/products/multi-image/1747676985619364.jpeg','2022-10-25 08:17:34',NULL),(36,202,'upload/products/multi-image/1747676985698196.jpeg','2022-10-25 08:17:34',NULL),(37,202,'upload/products/multi-image/1747676985775204.jpeg','2022-10-25 08:17:34',NULL),(38,101,'upload/product_img/001_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(39,101,'upload/product_img/001_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(40,101,'upload/product_img/001_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(41,102,'upload/product_img/002_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(42,102,'upload/product_img/002_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(43,102,'upload/product_img/002_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(44,103,'upload/product_img/003_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(45,103,'upload/product_img/003_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(46,103,'upload/product_img/003_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(47,104,'upload/product_img/004_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(48,104,'upload/product_img/004_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(49,105,'upload/product_img/005_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(50,105,'upload/product_img/005_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(51,105,'upload/product_img/005_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(52,106,'upload/product_img/006_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(53,106,'upload/product_img/006_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(54,106,'upload/product_img/006_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(55,107,'upload/product_img/007_p1.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(56,108,'upload/product_img/008_p1.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(57,108,'upload/product_img/008_p2.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(58,109,'upload/product_img/009_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(59,109,'upload/product_img/009_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(60,109,'upload/product_img/009_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(61,110,'upload/product_img/010_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(62,110,'upload/product_img/010_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(63,110,'upload/product_img/010_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(64,111,'upload/product_img/011_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(65,111,'upload/product_img/011_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(66,111,'upload/product_img/011_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(67,112,'upload/product_img/012_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(68,112,'upload/product_img/012_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(69,112,'upload/product_img/012_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(70,113,'upload/product_img/013_p1.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(71,113,'upload/product_img/013_p2.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(72,113,'upload/product_img/013_p3.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(73,114,'upload/product_img/014_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(74,114,'upload/product_img/014_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(75,115,'upload/product_img/015_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(76,115,'upload/product_img/015_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(77,116,'upload/product_img/016_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(78,116,'upload/product_img/016_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(79,116,'upload/product_img/016_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(80,117,'upload/product_img/017_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(81,117,'upload/product_img/017_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(82,117,'upload/product_img/017_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(83,118,'upload/product_img/018_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(84,118,'upload/product_img/018_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(85,119,'upload/product_img/019_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(86,119,'upload/product_img/019_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(87,119,'upload/product_img/019_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(88,120,'upload/product_img/020_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(89,120,'upload/product_img/020_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(90,120,'upload/product_img/020_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(91,121,'upload/product_img/021_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(92,121,'upload/product_img/021_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(93,121,'upload/product_img/021_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(94,122,'upload/product_img/022_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(95,122,'upload/product_img/022_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(96,122,'upload/product_img/022_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(97,123,'upload/product_img/023_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(98,123,'upload/product_img/023_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(99,123,'upload/product_img/023_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(100,124,'upload/product_img/024_p1.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(101,124,'upload/product_img/024_p2.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(102,125,'upload/product_img/025_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(103,125,'upload/product_img/025_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(104,125,'upload/product_img/025_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(105,126,'upload/product_img/026_p1.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(106,126,'upload/product_img/026_p2.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(107,126,'upload/product_img/026_p3.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(108,127,'upload/product_img/027_p1.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(109,127,'upload/product_img/027_p2.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(110,127,'upload/product_img/027_p3.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(111,128,'upload/product_img/028_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(112,128,'upload/product_img/028_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(113,128,'upload/product_img/028_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(114,129,'upload/product_img/029_p1.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(115,129,'upload/product_img/029_p2.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(116,129,'upload/product_img/029_p3.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(117,130,'upload/product_img/030_p1.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(118,130,'upload/product_img/030_p2.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(119,130,'upload/product_img/030_p3.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(120,131,'upload/product_img/031_p1.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(121,131,'upload/product_img/031_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(122,131,'upload/product_img/031_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(123,132,'upload/product_img/032_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(124,132,'upload/product_img/032_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(125,132,'upload/product_img/032_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(126,133,'upload/product_img/033_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(127,133,'upload/product_img/033_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(128,133,'upload/product_img/033_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(129,134,'upload/product_img/034_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(130,134,'upload/product_img/034_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(131,135,'upload/product_img/035_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(132,135,'upload/product_img/035_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(133,136,'upload/product_img/036_p1.png','2022-10-25 20:06:27','2022-10-25 20:06:27'),(134,136,'upload/product_img/036_p2.png','2022-10-25 20:06:27','2022-10-25 20:06:27'),(135,136,'upload/product_img/036_p3.png','2022-10-25 20:06:27','2022-10-25 20:06:27'),(136,137,'upload/product_img/037_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(137,137,'upload/product_img/037_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(138,137,'upload/product_img/037_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(139,138,'upload/product_img/038_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(140,138,'upload/product_img/038_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(141,138,'upload/product_img/038_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(142,139,'upload/product_img/039_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(143,139,'upload/product_img/039_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(144,139,'upload/product_img/039_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(145,140,'upload/product_img/040_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(146,140,'upload/product_img/040_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(147,140,'upload/product_img/040_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(148,141,'upload/product_img/041_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(149,141,'upload/product_img/041_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(150,141,'upload/product_img/041_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(151,142,'upload/product_img/042_p1.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(152,142,'upload/product_img/042_p2.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(153,142,'upload/product_img/042_p3.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(154,143,'upload/product_img/043_p1.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(155,143,'upload/product_img/043_p2.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(156,143,'upload/product_img/043_p3.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(157,144,'upload/product_img/044_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(158,144,'upload/product_img/044_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(159,144,'upload/product_img/044_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(160,145,'upload/product_img/045_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(161,145,'upload/product_img/045_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(162,145,'upload/product_img/045_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(163,146,'upload/product_img/046_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(164,146,'upload/product_img/046_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(165,146,'upload/product_img/046_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(166,147,'upload/product_img/047_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(167,147,'upload/product_img/047_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(168,147,'upload/product_img/047_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(169,148,'upload/product_img/048_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(170,148,'upload/product_img/048_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(171,148,'upload/product_img/048_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(172,149,'upload/product_img/049_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(173,149,'upload/product_img/049_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(174,149,'upload/product_img/049_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(175,150,'upload/product_img/050_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(176,150,'upload/product_img/050_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(177,150,'upload/product_img/050_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(178,151,'upload/product_img/051_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(179,151,'upload/product_img/051_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(180,151,'upload/product_img/051_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(181,152,'upload/product_img/052_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(182,152,'upload/product_img/052_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(183,152,'upload/product_img/052_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(184,153,'upload/product_img/053_p1.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(185,153,'upload/product_img/053_p2.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(186,153,'upload/product_img/053_p3.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(187,154,'upload/product_img/054_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(188,154,'upload/product_img/054_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(189,154,'upload/product_img/054_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(190,155,'upload/product_img/055_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(191,155,'upload/product_img/055_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(192,155,'upload/product_img/055_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(193,156,'upload/product_img/056_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(194,156,'upload/product_img/056_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(195,156,'upload/product_img/056_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(196,157,'upload/product_img/057_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(197,157,'upload/product_img/057_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(198,157,'upload/product_img/057_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(199,158,'upload/product_img/058_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(200,158,'upload/product_img/058_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(201,158,'upload/product_img/058_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(202,159,'upload/product_img/059_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(203,159,'upload/product_img/059_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(204,159,'upload/product_img/059_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(205,160,'upload/product_img/060_p1.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(206,160,'upload/product_img/060_p2.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(207,160,'upload/product_img/060_p3.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(208,161,'upload/product_img/061_P1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(209,161,'upload/product_img/061_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(210,161,'upload/product_img/061_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(211,162,'upload/product_img/062_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(212,162,'upload/product_img/062_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(213,162,'upload/product_img/062_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(214,163,'upload/product_img/063_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(215,163,'upload/product_img/063_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(216,163,'upload/product_img/063_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(217,164,'upload/product_img/064_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(218,164,'upload/product_img/064_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(219,164,'upload/product_img/064_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(220,165,'upload/product_img/065_p1.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(221,165,'upload/product_img/065_p2.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(222,165,'upload/product_img/065_p3.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(223,166,'upload/product_img/066_p1.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(224,166,'upload/product_img/066_p2.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(225,166,'upload/product_img/066_p3.jpeg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(226,167,'upload/product_img/067_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(227,167,'upload/product_img/067_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(228,167,'upload/product_img/067_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(229,168,'upload/product_img/068_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(230,168,'upload/product_img/068_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(231,168,'upload/product_img/068_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(232,169,'upload/product_img/069_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(233,169,'upload/product_img/069_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(234,169,'upload/product_img/069_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(235,170,'upload/product_img/070_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(236,170,'upload/product_img/070_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(237,170,'upload/product_img/070_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(238,171,'upload/product_img/071_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(239,171,'upload/product_img/071_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(240,171,'upload/product_img/071_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(241,172,'upload/product_img/072_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(242,172,'upload/product_img/072_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(243,172,'upload/product_img/072_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(244,173,'upload/product_img/073_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(245,173,'upload/product_img/073_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(246,173,'upload/product_img/073_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(247,174,'upload/product_img/074_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(248,174,'upload/product_img/074_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(249,174,'upload/product_img/074_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(250,175,'upload/product_img/075_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(251,175,'upload/product_img/075_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(252,175,'upload/product_img/075_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(253,176,'upload/product_img/076_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(254,176,'upload/product_img/076_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(255,176,'upload/product_img/076_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(256,177,'upload/product_img/077_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(257,177,'upload/product_img/077_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(258,177,'upload/product_img/077_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(259,178,'upload/product_img/078_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(260,178,'upload/product_img/078_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(261,178,'upload/product_img/078_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(262,179,'upload/product_img/079_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(263,179,'upload/product_img/079_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(264,179,'upload/product_img/079_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(265,180,'upload/product_img/080_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(266,180,'upload/product_img/080_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(267,180,'upload/product_img/080_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(268,181,'upload/product_img/081_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(269,181,'upload/product_img/081_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(270,181,'upload/product_img/081_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(271,182,'upload/product_img/082_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(272,182,'upload/product_img/082_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(273,182,'upload/product_img/082_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(274,183,'upload/product_img/083_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(275,183,'upload/product_img/083_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(276,184,'upload/product_img/084_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(277,184,'upload/product_img/084_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(278,185,'upload/product_img/085_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(279,185,'upload/product_img/085_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(280,186,'upload/product_img/086_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(281,186,'upload/product_img/086_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(282,187,'upload/product_img/087_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(283,187,'upload/product_img/087_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(284,188,'upload/product_img/088_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(285,188,'upload/product_img/088_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(286,189,'upload/product_img/089_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(287,189,'upload/product_img/089_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(288,190,'upload/product_img/090_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(289,190,'upload/product_img/090_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(290,191,'upload/product_img/091_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(291,191,'upload/product_img/091_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(292,192,'upload/product_img/092_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(293,192,'upload/product_img/092_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(294,193,'upload/product_img/093_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(295,193,'upload/product_img/093_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(296,193,'upload/product_img/093_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(297,193,'upload/product_img/093_p4.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(298,194,'upload/product_img/094_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(299,194,'upload/product_img/094_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(300,195,'upload/product_img/095_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(301,195,'upload/product_img/095_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(302,196,'upload/product_img/096_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(303,196,'upload/product_img/096_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(304,196,'upload/product_img/096_p3.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(305,197,'upload/product_img/097_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(306,197,'upload/product_img/097_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(307,198,'upload/product_img/098_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(308,198,'upload/product_img/098_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(309,199,'upload/product_img/099_p1.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(310,199,'upload/product_img/099_p2.jpg','2022-10-25 20:06:27','2022-10-25 20:06:27'),(311,200,'upload/product_img/100_p1.png','2022-10-25 20:06:27','2022-10-25 20:06:27'),(312,200,'upload/product_img/100_p2.png','2022-10-25 20:06:27','2022-10-25 20:06:27'),(314,203,'upload/products/multi-image/1748467164318748.jpeg','2022-11-03 01:37:07',NULL),(315,203,'upload/products/multi-image/1748467164377267.jpeg','2022-11-03 01:37:07',NULL);
/*!40000 ALTER TABLE `multi_imgs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT INTO `order_items` VALUES (1,1,9,'red','Small','1',1200.00,'2021-03-14 16:25:18',NULL),(2,2,9,'red','Small','1',1200.00,'2021-03-14 16:32:16',NULL),(3,2,8,'red','Small','1',1500.00,'2021-03-14 16:32:16',NULL),(4,4,9,'red','Small','2',1200.00,'2021-03-15 14:12:18',NULL),(5,5,9,'red','Small','1',1200.00,'2021-03-15 17:52:28',NULL),(6,6,4,'red','Small','1',400.00,'2021-03-15 17:55:27',NULL),(7,7,8,'red','Small','1',1500.00,'2021-03-15 17:57:23',NULL),(8,8,7,'red','Small','2',1200.00,'2021-04-10 13:24:25',NULL),(9,9,9,'red','Small','1',1200.00,'2021-04-10 13:26:00',NULL),(10,10,9,'red','Small','2',1200.00,'2021-04-10 13:26:58',NULL),(11,11,12,'red','Small','4',1100.00,'2021-04-11 16:09:37',NULL),(12,13,200,'','','1',566.99,'2022-11-06 22:53:29',NULL),(13,13,199,'','','1',1999.99,'2022-11-06 22:53:29',NULL),(14,14,200,'','','1',566.99,'2022-11-06 23:28:27',NULL),(15,14,201,'','','1',2000.00,'2022-11-06 23:28:27',NULL),(16,15,200,'','','1',566.99,'2022-11-07 01:16:16',NULL),(17,15,201,'','','1',2000.00,'2022-11-07 01:16:16',NULL),(18,16,201,'','','3',2000.00,'2022-11-07 18:20:03',NULL),(19,16,200,'','','1',566.99,'2022-11-07 18:20:03',NULL),(20,17,203,'','','2',234.00,'2022-11-07 22:06:48',NULL),(21,18,203,'','','2',234.00,'2022-11-07 22:20:01',NULL),(22,19,203,'','','2',234.00,'2022-11-07 22:25:07',NULL),(23,20,198,'','','1',549.99,'2022-11-08 07:07:28',NULL),(24,20,200,'','','1',566.99,'2022-11-08 07:07:28',NULL),(25,21,198,'','','1',549.99,'2022-11-08 07:49:41',NULL),(26,21,127,'','','1',1209.99,'2022-11-08 07:49:41',NULL),(27,21,123,'','','1',749.99,'2022-11-08 07:49:41',NULL),(28,22,198,'','','1',549.99,'2022-11-08 07:59:07',NULL),(29,22,127,'','','1',1209.99,'2022-11-08 07:59:07',NULL),(30,22,123,'','','1',749.99,'2022-11-08 07:59:07',NULL);
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `division_id` bigint(20) unsigned NOT NULL,
  `district_id` bigint(20) unsigned NOT NULL,
  `state_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` int(11) DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picked_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivered_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `return_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_company` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_apt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_province` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_postal_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_subtotal` decimal(10,2) NOT NULL DEFAULT 0.00,
  `amount_tax` decimal(10,2) NOT NULL DEFAULT 0.00,
  `amount_ship` decimal(10,2) NOT NULL DEFAULT 0.00,
  `ship_method` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,1,1,1,'User','user@gmail.com','232323233',3433434,'dsfsdafsd','card_1IV2N7ALc6pn5BvMpVhkE3iq','Stripe','txn_1IV2N8ALc6pn5BvM6eHoAiGV','usd',840.00,'604e8d4cdd003','EOS62246852','14 March 2021','March','2021',NULL,NULL,NULL,NULL,NULL,NULL,'26 March 2021','2','Broken Product','delivered','2021-03-14 16:25:18','2021-03-26 15:48:14','','','','','','','','','','','','','','','','','',0.00,0.00,0.00,0),(2,1,1,1,1,'User','user@gmail.com','232323233',3434344,'test','card_1IV2TrALc6pn5BvMAqQzyGcM','Stripe','txn_1IV2TtALc6pn5BvM9tIbusWv','usd',1890.00,'604e8eef4c099','EOS20726967','14 March 2021','March','2021',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'processing','2021-03-14 16:32:16',NULL,'','','','','','','','','','','','','','','','','',0.00,0.00,0.00,0),(3,1,1,1,1,'User','user@gmail.com','232323233',23223,'fdsfsdfa','card_1IVMfGALc6pn5BvM6Zjbjj3p','Stripe','txn_1IVMfJALc6pn5BvMeUywpmVU','usd',840.00,'604fbe03c727a','EOS45273629','15 March 2021','March','2021',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'delivered','2021-03-15 14:05:29','2021-03-30 15:45:11','','','','','','','','','','','','','','','','','',0.00,0.00,0.00,0),(4,1,1,1,1,'User','user@gmail.com','232323233',3433434,'dfsfsdf','card_1IVMlsALc6pn5BvMWTUsDN2v','Stripe','txn_1IVMluALc6pn5BvMV3FCTZYz','usd',1680.00,'604fbf9d4ab8e','EOS89888482','15 March 2021','March','2021',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'delivered','2021-03-15 14:12:14','2021-03-30 15:37:18','','','','','','','','','','','','','','','','','',0.00,0.00,0.00,0),(5,1,1,1,1,'User','user@gmail.com','232323233',434343,'sadfasdf','Cash On Delivery','Cash On Delivery',NULL,'Usd',840.00,NULL,'EOS12797593','15 March 2021','March','2021',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'delivered','2021-03-15 17:52:24','2021-03-29 13:35:09','','','','','','','','','','','','','','','','','',0.00,0.00,0.00,0),(6,1,1,1,1,'User','user@gmail.com','232323233',434343,'sdfsdfasdf','Cash On Delivery','Cash On Delivery',NULL,'Usd',280.00,NULL,'EOS92948923','15 March 2021','March','2021',NULL,NULL,NULL,NULL,NULL,NULL,'26 March 2021','1','Wrong Product','delivered','2021-03-15 17:55:24','2021-03-26 15:18:29','','','','','','','','','','','','','','','','','',0.00,0.00,0.00,0),(7,1,1,1,1,'User','user@gmail.com','232323233',343434,'sdfsadfasd','card_1IVQHhALc6pn5BvMgewlcR5w','Stripe','txn_1IVQHjALc6pn5BvMa65krkYi','usd',1500.00,'604ff45df3f31','EOS12420971','15 March 2021','March','2021',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'confirm','2021-03-15 17:57:20','2021-03-20 13:36:45','','','','','','','','','','','','','','','','','',0.00,0.00,0.00,0),(8,1,1,1,1,'User','user@gmail.com','232323233',3434,'nice','card_1IemPbALc6pn5BvMzT3Vd62S','Stripe','txn_1IemPfALc6pn5BvMftO9UxWx','usd',2400.00,'6071fb58a749a','EOS83852139','10 April 2021','April','2021',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'pending','2021-04-10 13:24:15',NULL,'','','','','','','','','','','','','','','','','',0.00,0.00,0.00,0),(9,1,1,1,1,'User','user@gmail.com','232323233',3434,'great','card_1IemRLALc6pn5BvMjDrFp9qK','Stripe','txn_1IemRNALc6pn5BvMJAVH7MVf','usd',1200.00,'6071fbc405eef','EOS96007355','10 April 2021','April','2021',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'pending','2021-04-10 13:25:57',NULL,'','','','','','','','','','','','','','','','','',0.00,0.00,0.00,0),(10,1,1,5,3,'User','user@gmail.com','232323233',5555,'test','Cash On Delivery','Cash On Delivery',NULL,'Usd',2400.00,NULL,'EOS64839072','10 April 2021','April','2021',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'pending','2021-04-10 13:26:55',NULL,'','','','','','','','','','','','','','','','','',0.00,0.00,0.00,0),(11,1,1,1,1,'User','user@gmail.com','232323233',43434,'test','card_1IfBT6ALc6pn5BvMAbh7Z9RQ','Stripe','txn_1IfBT9ALc6pn5BvMM6UlAzvw','usd',5120.00,'607373946d53a','EOS31288249','11 April 2021','April','2021',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'processing','2021-04-11 16:09:30','2021-04-11 16:19:47','','','','','','','','','','','','','','','','','',0.00,0.00,0.00,0),(12,1,1,1,1,'user11','user@gmail.com','232323233',12345,'sdfs','card_1M1A8jFoyekJx5dtOG4lQXiD','Stripe','txn_3M1A8lFoyekJx5dt1ulgfXjl','usd',2000.00,'6367c9222953f','EOS35295872','06 November 2022','November','2022',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'pending','2022-11-06 06:48:04',NULL,'','','','','','','','','','','','','','','','','',0.00,0.00,0.00,0),(13,1,0,0,0,'','','cc',NULL,NULL,'card_1M1PCyFoyekJx5dtWOz8oYvQ','Stripe','txn_3M1PCyFoyekJx5dt0DcOyGr1','usd',2566.98,'6368ab6495dfb','EOS56769515','07 November 2022','November','2022',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'pending','2022-11-06 22:53:25',NULL,'aa','bb','123','cc','dd','city','9','A1A 1A2','vcc','dcc','cccc','add','acc','dctiy','11','fcc','A1A 1A1',0.00,0.00,0.00,0),(14,1,0,0,0,'','','cc',NULL,NULL,'card_1M1PkoFoyekJx5dtw4krvnPn','Stripe','txn_3M1PkpFoyekJx5dt0JKX7KI3','usd',2566.99,'6368b396a224c','EOS11818701','07 November 2022','November','2022',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'succeeded','2022-11-06 23:28:24','2022-11-07 00:28:43','aa','bb','dd','ee','ff','city','12','B1B 2D2','aaa','dd','ads','sdf','sdf','dctiy','13','sdf','A1A 1A1',0.00,0.00,0.00,0),(15,1,0,0,0,'','','cc',NULL,NULL,'card_1M1RR9FoyekJx5dtheAi8vrT','Stripe','txn_3M1RRAFoyekJx5dt1Rgejr2w','usd',2566.99,'6368ccdbb87b1','EOS88289499','07 November 2022','November','2022',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'succeeded','2022-11-07 01:16:13',NULL,'aa','bb','dd','ee','ff','city','10','B1B 2D2','vcc','dcc','company','address','apt','city','14','fcc','Z1Z 3Z3',0.00,0.00,0.00,0),(16,1,0,0,0,'','','cc',NULL,NULL,'card_1M1hPuFoyekJx5dtzxzDLXCU','Stripe','txn_3M1hPvFoyekJx5dt1SJ4gPm2','usd',7420.70,'6369bccea507c','EOS11560884','08 November 2022','November','2022',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'succeeded','2022-11-07 18:20:00',NULL,'aa','bb','dd','ee','ff','city','11','Z5Z 6Z6','aa','bb','dd','ee','ff','city','11','cc','Z5Z 6Z6',6566.99,853.71,9.99,0),(17,1,0,0,0,'user11','user@gmail.com','15346',NULL,NULL,'card_1M1kxKFoyekJx5dt2GyVNQjs','Stripe','txn_3M1kxLFoyekJx5dt0DdSIxoq','usd',528.84,'6369f1f31d552','EOS68819476','08 November 2022','November','2022',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'succeeded','2022-11-07 22:06:44',NULL,'first_name231231','last_name','Company','address','apt','city','14','A1A 1A2','first_name231231','last_namexxx','Company','address','apt','city','14','15346','A1A 1A2',468.00,60.84,23.99,4),(18,1,0,0,0,'user11','user@gmail.com','15346',NULL,NULL,'card_1M1lA8FoyekJx5dtIuzfT1HD','Stripe','txn_3M1lA9FoyekJx5dt0JV1sAgi','usd',528.84,'6369f50c7d323','EOS81936035','08 November 2022','November','2022',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'succeeded','2022-11-07 22:19:57',NULL,'first_name231231','last_name','Company','address','apt','city','14','A1A 1A2','first_name231231','last_name','Company','address','apt','city','14','15346','A1A 1A2',468.00,60.84,23.99,4),(19,1,0,0,0,'user11','user@gmail.com','15346',NULL,NULL,'card_1M1lF2FoyekJx5dtFNQp7TSO','Stripe','txn_3M1lF3FoyekJx5dt09dN85ue','usd',552.83,'6369f63c934d5','EOS48663942','08 November 2022','November','2022',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'succeeded','2022-11-07 22:25:02',NULL,'first_name231231','last_name','Company','address','apt','city','14','A1A 1A2','first_name231231','last_name','Company','address','apt','city','14','15346','A2B 3B3',468.00,60.84,23.99,4),(20,1,0,0,0,'user11','user@gmail.com','15346',NULL,NULL,'card_1M1tOVFoyekJx5dtp1yl2FMh','Stripe','txn_3M1tOYFoyekJx5dt1MuYV3mq','usd',1262.19,'636a70aa273e2','EOS64607130','08 November 2022','November','2022',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'succeeded','2022-11-08 07:07:23',NULL,'first_name','last_name','Company','address','apt','city','14','A1A 1A2','first_name','last_name','Company','address','apt','city','14','15346','A1A 1A2',1116.98,145.21,0.00,1),(21,1,0,0,0,'user11','user@gmail.com','cc',NULL,NULL,'card_1M1u3LFoyekJx5dte4pnMvHG','Stripe','txn_3M1u3OFoyekJx5dt1C3LcXkv','usd',2846.26,'636a7a8dc1d9c','EOS78589869','08 November 2022','November','2022',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'succeeded','2022-11-08 07:49:35',NULL,'aa','bb','dd','ee','ff','city','11','Z5Z 6Z6','aa','bb','dd','ee','ff','city','11','cc','Z5Z 6Z6',2509.97,326.30,9.99,2),(22,1,0,0,0,'user11','user@gmail.com','cc',NULL,NULL,'card_1M1uCVFoyekJx5dtxpVHHzfu','Stripe','txn_3M1uCXFoyekJx5dt1vcPj6wz','usd',2836.27,'636a7cc530ab9','EOS42945694','08 November 2022','November','2022',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,'succeeded','2022-11-08 07:59:02',NULL,'aa','bb','dd','ee','ff','city','11','Z5Z 6Z6','aa','bb','dd','ee','ff','city','11','cc','Z5Z 6Z6',2509.97,326.30,0.00,1);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
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
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('user@gmail.com','$2y$10$dSEt79KznbV4QqY6HO..perPzZM3fPUy2J4rrQQWPG7kEX/17A7MG','2021-03-15 13:42:13');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) NOT NULL,
  `product_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tags_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` decimal(20,2) unsigned NOT NULL,
  `discount_price` decimal(20,2) unsigned NOT NULL DEFAULT 0.00,
  `os` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_descp_en` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_descp_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_thambnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot_deals` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `special_offer` int(11) DEFAULT NULL,
  `special_deals` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=204 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (5,2,7,7,10,'Printed Men Hooded Neck Orange','printed-men-hooded-neck-orange','322343243','0','Hooded Neck','Small,Midium','red,Black',399.00,300.00,'','','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dum','<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>\r\n\r\n<p>and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>','upload/products/thambnail/1692434756119029.jpeg',NULL,0,NULL,0,1,'2021-02-27 14:47:36','2021-02-27 14:47:36'),(8,2,8,11,22,'Epson L3100 Multi-function','epson-l3100-multi-function','3223432444','200','test,','Small,Midium,Large','red,Black,Amet',2000.00,1500.00,'','','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dum','<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>','upload/products/thambnail/1692435198078978.jpeg',NULL,1,1,NULL,1,'2021-02-24 15:50:04','2021-02-24 15:50:04'),(10,1,8,11,24,'Samsung 24 inch Curved Full','samsung-24-inch-curved-full','32234326546','400','test',NULL,'red,Black,Amet',1200.00,1100.00,'','','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dum','<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>','upload/products/thambnail/1692435396611543.jpeg',NULL,1,NULL,1,1,'2021-02-27 18:01:40','2021-02-27 18:01:40'),(11,1,8,11,23,'Samsung 26.5 inch LED Backlit','samsung-26.5-inch-led-backlit','322343255','400','test,','Small,Midium,Large','red,Black,Amet',2000.00,0.00,'','','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dum','<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n&nbsp;</p>','upload/products/thambnail/1692435521667396.jpeg',NULL,NULL,1,NULL,1,'2021-02-24 15:32:57','2021-02-24 15:32:57'),(12,3,7,7,10,'Lenovo Yoga Smart Tab','lenovo-yoga-smart-tab','234234','200','Lenovo','Small,Midium','red,Black,Blue',1200.00,1100.00,'','','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dum','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>','upload/products/thambnail/1696782743225057.jpeg',NULL,0,NULL,0,0,'2021-04-11 15:55:24',NULL),(101,3,103,0,0,'Apple iMac 27\" Retina 5K Computer (2020 Model)','101','194749','','','','',2599.99,0.00,'Mac OS','Home','The New (2020) 27-inch iMac now comes packed with the latest processors, faster memory, powerful graphics, and ultrafast SSD storage. And the gorgeous Retina 5K display is better than ever with True Tone technology. With macOS and all its built-in apps, the 27-inch iMac is the total creative package—powered up.','27-inch (diagonal) 5120-by-2880 Retina 5K display\nTenth-generation 6-core Intel Core i5\n8GB of 2666MHz DDR4 RAM\nAMD Radeon Pro 5300 graphics\n256GB of Ultrafast SSD storage\nTwo Thunderbolt 3 (USB-C) ports\nFour USB-A ports\nGigabit Ethernet port\n1080p FaceTime HD camera\n802.11ac Wi-Fi and Bluetooth 5.0\nMagic Mouse 2\nMagic Keyboard','upload/product_img/001_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(102,3,103,0,0,'Apple iMac 24\" (Spring 2021) - Pink','102','649485','','','','',1599.99,0.00,'Mac OS','Business','Enjoy reliable, fast performance with the Apple iMac. Powered by the Apple M1 chip and 8GB of RAM, it can easily handle multitasking so you can work efficiently on your projects. Its 4.5K Retina display with P3 wide colour gamut brings your content to life in sharp detail, and it comes complete with a Magic Keyboard and a Magic Mouse so you can get started right away.','8-core Apple M1 chip along with 8GB of RAM delivers fast performance so you can efficiently accomplish your daily tasks\n256GB solid state drive (SSD) offers plenty of storage for all your files, photos, videos, and games\n24\" 4.5K Retina display with 4480 x 2520 native resolution and P3 wide colour gamut brings your content to life\nWi-Fi 6 and Ethernet port provide fast and reliable connectivity\nTwo Thunderbolt/USB 4 ports allow you to connect peripheral devices\nIncludes a Magic Keyboard and a Magic Mouse so you can get started right away','upload/product_img/002_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(104,3,104,0,0,'Apple Mac mini 512GB (MGNT3VC/A) ','104','226566','','','','',1299.99,0.00,'Mac OS','Home','The Apple M1 chip takes Mac mini, the most versatile, do-it-all Mac desktop, to a whole new level. Up to 3 times faster CPU performance, up to 6 times faster graphics, a powerful Neural Engine with up to 15 times faster machine learning, and super-fast unified memory -- all in an ultra-compact design. Create, work and play with speed and power beyond anything you ever imagined','Apple-designed M1 chip for a giant leap in CPU, GPU, and machine-learning performance\n8-core CPU packs up to 3 times faster performance to fly through workflows quicker than ever\n16-core Neural Engine for advanced machine learning\n8GB of unified memory so everything you do is fast and fluid\n512GB of super-fast SSD storage launches apps and opens files in an instant\nAdvanced cooling system sustains breakthrough performance\n8-core GPU with up to 6 times faster graphics for graphics-intensive apps and games\nNext-generation Wi-Fi 6 for faster connectivity\nTwo Thunderbolt/USB 4 ports, one HDMI 2.0 port, two USB-A ports, and Gigabit Ethernet\nmacOS Big Sur with a bold new design and major app updates for Safari, Messages, and Maps\nUltra-compact 7.7-inch-square design in silver','upload/product_img/004_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(105,3,104,0,0,'Apple Mac Studio 512GB (MJMV3VC/A)','105','228234','','','','',2499.99,0.00,'Mac OS','Business','Say hello to standout productivity with this Apple Mac Studio computer. A remarkably compact productivity powerhouse with advanced connectivity for your studio setup, it\'s supercharged by the ferociously fast M1 Max and 512GB of superfast solid state drive, so you and your team can push the boundaries of creativity.','Powered by a M1 Max chip for a giant leap in CPU, GPU and machine learning performance\n10-core CPU packs up to 3.8x faster performance to make everything you do fast and fluid (based on testing conducted using preproduction Mac Studio systems)\n24-core GPU with up to 4.5x faster performance for the most demanding pro workflows (based on testing conducted using preproduction Mac Studio systems)\n512GB of superfast SSD storage launches apps and opens files in an instant\n16-core Neural Engine for advanced machine learning\n32GB of unified memory to push the boundaries of what’s possible on Mac\nFast Wi-Fi 6 wireless connectivity\nFour Thunderbolt 4 ports, two USB-A ports, HDMI 2.0 port, 10Gb Ethernet port, SDXC card slot, 2 USB-C ports, and a 3.5mm headphone jack\nmacOS Monterey lets you connect, share and create like never before, with exciting FaceTime updates and a redesigned Safari\nRemarkably compact 7.7-inch-square, 3.7-inch-tall design','upload/product_img/005_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(109,203,104,0,0,'ASUS ROG Strix G10CE Gaming PC','109','267984','','','','',1499.99,0.00,'Windows','Gaming','Level up your gaming experience with this ASUS ROG Strix G10CE PC. It features a transparent side panel and is powered by Intel Core i5-11400F processor, 16GB of DDR4 RAM, and NVIDIA GeForce RTX 3060 graphics card to run the most demanding games and applications with no lag and fuss. The 512GB solid state drive offers the required space for storing all your games and media files','2.6GHz Intel Core i5-11400F processor and 16GB of DDR4 RAM make this gaming PC powerful enough to handle latest games\n512GB solid state drive provides enough space to store all your files, media and games\nDedicated NVIDIA GeForce RTX 3060 graphics card and 12GB of DDR6 video memory guarantees extremely smooth and fluid gaming videos\nWi-Fi 5(802.11ac) and Bluetooth 5.0 offer multiple options for network and connectivity\nOne 3.5mm combo audio jack, two USB 3.2 Gen 1 Type-A, one RJ45 LAN for LAN insert (10 / 100 / 1000), one HDMI 1.4, two display ports, two PS2, three audio jacks, two USB 2.0 Type-A, four USB 3.2 Gen 1 Type-A provide array of options for connecting external devices\nVR ready capability allows you to use various virtual reality gears\nHigh definition 7.1 channel audio output allows you to enjoy high quality audio during gaming\n','upload/product_img/009_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(112,203,104,0,0,'ASUS ProArt Station PD5 Desktop PC','112','120206','','','','',2299.99,0.00,'Windows','Business','Multitask effortlessly with this ASUS ProArt Station PD5 desktop computer. Powered by Intel Core i7-11700 processor, 32GB on board RAM, and NVIDIA GeForce RTX 3060 graphics, this PC offers swift and smooth performance. Its expansion slots, HD 7.1 channel audio output, Intel B560 chipset, and VR ready configuration lets you experience new elements and increase computer’s functionality','Intel Core i7-11700 processor and 32GB of DDR4 SO-DIMM on board RAM which can be upgradeable to 128GB let you smoothly multitask and offer superior performance\n512GB M.2 NVMe PCIe 3.0 SSD provides lot of space to store your files, media, and other applications\nNVIDIA GeForce RTX 3060 graphics with dedicated graphic card and 128GB DDR6 video memory configuration offer best graphic visuals and renders high-quality images to the display\n10/100/1000 GbE, non-vPro Ethernet port, Integrated Wi-Fi 6 (802.11ax) and dual band Bluetooth 5.2 offer wired and wireless options for networking with compatible devices\nConnect to external devices through two USB 3.2 Gen 1 Type-C, twelve USB 3.2 Gen 1 Type-A, four USB 2.0 Type-A, one 3.5mm combo audio jack,RJ45 Gigabit Ethernet, HDMI 1.4, two Display port 1.2, one 7.1 channel audio (3 ports), two PS2, and 2-in-1 SD/MMC card reader that offer multiple options for data transfers\n','upload/product_img/012_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(113,203,104,0,0,'Asus PN50-BBR065MD Desktop Computer','113','989047','','','','',580.46,0.00,'Windows','Home','Asus PN50-BBR065MD Desktop Computer - AMD Ryzen 5 4500U Hexa-core (6 Core) DDR4 SDRAM - Mini PC - Black - AMD Radeon Vega 7 Graphics DDR4 SDRAM','Powered by the latest AMD Ryzen™ 4000 Series Renoir Mobile Processor with Radeon™ Vega 7 Graphics\nSupport up to 4 displays simultaneously with 4K resolution\nSupport up to 8K UHD at 60 Hz through DisplayPort Dual-Mode (DP++)\nDual USB 3.2 Gen 2 Type-C port for data transfer, power delivery and DisplayPort functionality\nSupport INTEL® WI-FI 6 (GIG+) + BT 5.0\nConfigurable Ports support DP1.4/VGA/LAN/COM options','upload/product_img/013_p1.jpeg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(115,204,104,0,0,'HP OMEN 25L Gaming PC','115','458023','','','','',2399.99,0.00,'Windows','Gaming','Delve into your favourite gaming world with the HP Omen 25L gaming PC. Boasting a dedicated NVIDIA GeForce RTX 3070 graphics card of 8GB GDDR6 video memory, this computer churns out realistic visuals with high frame rates for all the latest AAA titles. Plus, its AMD Ryzen 7 5700G processor and 16GB RAM deliver ample power to process multiple workflows at once.','3.80GHz AMD Ryzen 7 5700G processor along with 16GB (2 x 8GB) of HyperX DDR4-3200 XMP SDRAM that is expandable up to 64GB produce impressive performance for gaming, video editing, and other demanding workflows\n512GB PCIe NVMe M.2 solid state drive (SSD) provides plenty of space for storing your digital collection including games, music, photos, videos, documents, and more\nDedicated NVIDIA GeForce RTX 3070 graphics card with 8GB of GDDR6 video memory delivers smooth and tear-free visuals\nIntel Wi-Fi 6 AX 200 (2x2) and 10/100/1000 Base-T network Ethernet port allow flexible, high-speed internet access from wireless routers and wired broadband connections for seamless online gaming','upload/product_img/015_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(117,204,104,0,0,'HP Desktop PC - Natural Silver','117','704095','','','','',899.99,0.00,'Windows','Home','Complement your work space and experience ultra-fast performances with the HP Pavilion desktop PC. It is powered by the AMD Ryzen 5 5600G processor to ensure optimal processing and you can enjoy high-quality visuals, thanks to its AMD Radeon graphics. The 12GB DDR4 improves the frames rates and the 512GB PCIe NVMe M.2 SSD offers ample space for all your data and files','AMD Ryzen 5 5600G 16 MB L3 cache processor with a clock rate of 3.90GHz ensures power-efficient processing to deliver boosted performance\n12GB DDR4-3200 SDRAM memory (1 x 8GB, 1 x 4GB) enables easy data access and allows the applications to work at their fullest\n512GB PCIe NVMeM.2 solid state drive provides space for storing enormous amount of data and boots the PC into an interface for easy navigation\nAMD Radeon Graphics runs multiple tasks concurrently and delivers ultra-clear visuals without missing out any detail\nSupports 802.11a/b/g/n/ac (1x1) Wi-Fi and Bluetooth combo and MU-MIMO technology to guarantee uninterrupted wireless communication at high speeds','upload/product_img/017_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(119,204,103,0,0,'HP ENVY 34\" All-in-One PC - Turbo Silver','119','319905','','','','',3499.99,0.00,'Windows','Business','The HP Envy 34\" All-In-One PC with Intel Core i7-11700 processor is ideal for everyday projects, multi-media entertainment, and more. NVIDIA GeForce RTX 3080 graphics with 8GB GDDR6 dedicated memory and NVIDIA Max-Q technology let you enjoy incredible visuals. Integrated Wi-Fi and Bluetooth provide reliable wired and wireless connectivity options.','2.5GHz 11th Generation Intel Core i7-11700 processor and 32GB DDR4-2400 SDRAM memory provide incredible power for everyday computing\n1TB PCIe NVMe M.2 Solid State Drive offers tonnes of room to store your favourite movies, photos, videos, files, and more\n34\" diagonal non-touch, WUHD IPS display with 5120 x 2160 native resolution, 500 nits brightness, anti-reflection, 98% DCI-P3colour gamut, and micro edges on 3 sides, presents amazing picture quality and offers a wider colour range and high contrast\nNVIDIA GeForce RTX 3080 graphics with 8GB GDDR6 dedicated memory and NVIDIA Max-Q technology deliver rich, vibrant imagery and immersive visuals\n10/100/1000 Base-T Network Ethernet port, integrated Wi-Fi 802.11a/b/g/n/ac (2x2), and Bluetooth offer reliable wired and wireless options for networking with compatible devices','upload/product_img/019_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(120,205,104,0,0,'Acer Nitro Gaming PC','120','354809','','','','',1699.99,0.00,'Windows','Gaming','Experience solid performance and advanced features essential for your gaming rig with the Acer Nitro gaming PC. Built with 12th Gen Intel Ci5-12400F processor and NVIDIA RTX 3060 graphics that deliver blazing-fast video output with highly-immersive graphics and visuals, while Windows 11 OS provides easy UI and advanced security features for data protection.','12th Gen Intel Ci5-12400F processor with 16GB of DDR4 3200 MHz UDIMM RAM delivers a powerful performance to handle demanding games, video editing software, and daily multitasking efficiently\n1TB 7200RPM hard drive gives you plenty of space to store images, documents, while the 512GB solid state drive has a blazing-fast read and write times\nNVIDIA RTX 3060 graphics with dedicated graphic card and 12GB VRAM delivers blazing-fast video output with highly-immersive graphics and visuals\n10/100/1000 ethernet port, integrated Wi-Fi 6E (802.11ax/ac/a/b/g/n), and Bluetooth 5.2 offer seamless connectivity through wired and wireless networks\n','upload/product_img/020_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(122,205,104,0,0,'Acer Aspire TC Desktop PC','122','123831','','','','',799.99,0.00,'Windows','Home','Assembled with high-performance hardware, the Acer Aspire TC Desktop PC has everything you need for fast and smooth operation. Powered by an Intel Core i5 CPU with 8GB RAM, it handles all kinds of tasks from browsing to moderate gaming with ease. The integrated 802.11ax Wi-Fi and Bluetooth 5.2 provide reliable connectivity to wireless networks and wireless devices.','2.5GHz Intel Core i5-12400 hexa-core CPU and 8GB DDR4 3200MHz UDIMM RAM are a powerful combo for completing your tasks at maximum velocity\n256GB solid state drive for high-speed storage that offers boosted performance and rapid file operation\nIntegrated 10/100/1000 Ethernet and 802.11ax/ac/a/b/g/n Wi-Fi 6 for blazing fast connectivity to wired and wireless networks\nIntegrated Bluetooth 5.2 lets you connect to wireless speakers, wireless headsets, smartphones, and other compatible devices\nTwo USB 3.2 Gen 1 Type-A ports, 1 USB 3.2 Gen 1 Type-C port, 4 USB 2.0 Type-A ports, 2 HDMI ports, 1 LAN port, and 5 audio jacks for plugging in various peripherals from input devices to external storage','upload/product_img/022_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(123,205,103,0,0,'Acer Aspire C 24\" All-in-One PC','123','460044','','','','',749.99,0.00,'Windows','Home','Bring this Acer Aspire C 24\" all-in-one PC to your home for efficient day-to-day computing experience. Powered by an Intel core i3-1115G4 processor and 8GB of DDR4 RAM, it keeps your multitasking, photo editing, and other demanding workflows running smooth and lag-free. With built-in Alexa support, you can create to-do lists for streamlined productivity.','3.0GHz powerful Intel core i3-1115G4 processor and 8GB of DDR4 2666 MHz soDIMM RAM along with integrated Intel UHD graphics deliver enough power to handle multitasking, photo editing, and other workflows efficiently without any lag\n512GB solid state drive (SSD) gives ample storage space for all your digital files like movies, photos, videos, documents, and more with quick retrieval times\n23.8\" wide viewing LCD display with FHD 1920 x 1080 resolution and Acer ExaColor technology presents your content in lifelike detail\nNarrow-bezel design with up to 88% screen-to-body ratio offers a distraction-free viewing experience while watching movies and videos\nIntegrated wireless Wi-Fi 6 AX201 connectivity and RJ-45 Ethernet port enable high-speed internet access via wireless routers or wired broadband connections','upload/product_img/023_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(125,206,103,0,0,'Lenovo IdeaCentre AIO 3i Intel Desktop','125','559166','','','','',1099.99,0.00,'Windows','Business','The IdeaCentre AIO 3i (27″ Intel) all-in-one PC is engineered for heavy workload in a compact, space-saving chassis. Up to 12th Gen Intel® Core™ processors deliver performance for relentless multitasking. A robust solid-state drive allows the whole family to store movies, songs and photos with fast boot times, file transfers and system responsiveness','27″ all-in-one PC powered by 12th Generation Intel® Core™ processors i5-1240P, Iris Xe Graphics, 16GB RAM , 512GB HD Drive\n\n·Vivid IPS FHD display feature\n\n·Harman Kardon®-certified speakers deliver room-filling audio\n\n·Convenient facial login using high resolution webcam with built-in infrared sensor','upload/product_img/025_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(126,206,104,0,0,'Lenovo Legion Tower 7i ','126','887801','','','','',2999.99,0.00,'Windows','Gaming','12th Gen Intel® Core™ processors use an innovative design to match your workloads to new, specialized Performance and Efficient cores, giving you superior gaming even when multitasking. Chat, browse, stream, record—and play—without skipping a beat or having background tasks disrupt your game at the wrong moment','12th Gen Intel® Core™ processors i7-12700K\nNVIDIA® GeForce® RTX™ 30 Series graphics\nAlder Lake-S Z690 motherboard 16GB RAM, 1TB HD\nLegion Coldfront 4.0 cooling','upload/product_img/026_p1.jpeg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(127,206,103,0,0,'Lenovo ThinkCentre M90a Desktop','127','867882','','','','',1209.99,0.00,'Windows','Business','Perfect for a front office or work from home professional Smarter security safeguards your system|As part of our ThinkShield security solutions, we offer a combination of hardware and software that work together to keep your system and your data safe. The ThinkCentre M90a all-in-one boasts smart USB ports to prevent unauthorized people from uploading files, while a chassis intrusion switch detects any attempts to remove the system cover.','Adjustable 23.8\" FHD display\nState-of-the-art, all-in-one desktop PC\nDesigned on Intel vPro® platform\ni5-10500, UHD Graphics, 8GB, 256GB, Win 10 Pro\nEquipped with noise-cancelling mic—ideal for VOIP calls','upload/product_img/027_p1.jpeg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(128,207,103,0,0,'Dell Inspiron 24\" All-in-One PC','128','661869','','','','',1099.99,0.00,'Windows','Home','Designed to meet your computing needs, the Dell Inspiron 24\" all-in-one desktop PC keeps your productivity going efficiently. Backed by AMD Ryzen 5 5625U hexacore processor and 12GB of DDR4 RAM, this computer can handle your multitasking with ease. Its AMD Radeon graphics with shared memory offers excellent visuals and satisfies all your video editing works.','2.3GHz AMD Ryzen 5 5625U hexacore processor, 12GB of 3200MHz DDR4 RAM, and AMD Radeon graphics with shared graphics memory deliver powerful performance for your multitasking and video editing works\n512GB M.2 PCIe NVMe solid state drive (SSD) allows you to store your movies, games, photos, music, and other digital files\n24-inch FHD Infinity touch display with 1920 x 1080 native resolution and narrow border design gives you an immersive viewing experience virtually from any perspective\n','upload/product_img/028_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(130,207,104,0,0,'Dell - Inspiron Compact Desktop','130','265406','','','','',849.99,0.00,'Windows','Home','The new Inspiron Compact Desktop with responsive features in a modern design empowers you to stay connected with the people and content key to your day-to-day life. It features the latest 12th Generation Intel®processors and 16GB memory.','12th Generation Intel® Core™ i7-12700\nPowerful 12-core processing performance. The Intel® Turbo Boost technology delivers dynamic extra power when you need it, while increasing energy efficiency when you don\'t.\n16GB system memory for intense multitasking and gaming\nReams of high-bandwidth DDR4 RAM to smoothly run your graphics-heavy PC games and video-editing applications, as well as numerous programs and browser tabs all at once.\n512GB solid state drive (SSD)\nWhile offering less storage space than a hard drive, a flash-based SSD has no moving parts, resulting in faster start-up times and data access, no noise, and reduced heat production and power draw on the battery.\n','upload/product_img/030_p1.jpeg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(133,207,104,0,0,'Alienware Aurora R14 Gaming PC','133','873930','','','','',3299.99,0.00,'Windows','Gaming','Relish the high octane performance offered by the Alienware Aurora Ryzen Edition R14 gaming PC. Embedded with an AMD Ryzen 7 CPU with 32GB RAM and an NVIDIA RTX GPU, this configuration packs quite a punch that can take down the toughest games and applications. The futuristic design style includes space efficiency, cable management, and tool-less accessibility','3.8GHz AMD Ryzen 7 5800X octa-core CPU with 32GB 3466MHz DDR4 XMP RAM are a powerful combination that can handle heavy workloads and multi-task with zero lag\n1TB M.2 NVMe PCIe solid state drive offers vast and high speed storage for tons of data\n8GB GDDR6 NVIDIA GeForce RTX 3070 Ti graphics card grants you blazing fast frame rates and superior detail in resolutions as high as 4K\nIntegrated 802.11AX MediaTek MT7921 Wi-Fi 6 2x2 MIMO and Realtek 2.5 Gigabit Ethernet are capable of uncompromising network speeds\nIntegrated Bluetooth 5.2 for pairing with wireless peripherals such as Bluetooth keyboard and mouse, Bluetooth headsets, Bluetooth speakers, and more','upload/product_img/033_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(140,3,105,0,0,'Apple MacBook Pro 13.3\" w/ Touch Bar (Fall 2020)','140','574130','','','','',1699.95,0.00,'Mac OS','Business','The Apple M1 chip redefines the 13\" MacBook Pro. Featuring an 8-core CPU that flies through complex workflows. Incredible 8-core GPU that crushes graphics-intensive tasks and enables super-smooth gaming. An advanced 16-core Neural Engine for more machine learning power. Super-fast unified memory for fluid performance. And the longest-ever battery life in a Mac at up to 20 hours.','Apple-designed M1 chip for a giant leap in CPU, GPU, and machine-learning performance\n8-core CPU delivers up to 2.8 times faster performance to fly through workflows quicker than ever\n16-core Neural Engine for advanced machine learning\n8GB of unified memory so everything you do is fast and fluid\nActive cooling system sustains incredible performance\n256GB of super-fast SSD storage launches apps and opens files in an instant\n8-core GPU with up to 5 times faster graphics for graphics-intensive apps and games\n13.3-inch Retina display with 500 nits of brightness for vibrant colours and incredible image detail','upload/product_img/040_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(141,3,105,0,0,'Apple MacBook Air 13.6\" w/ Touch ID (2022)','141','783879','','','','',1499.99,0.00,'Mac OS','Home','Apple’s thinnest and lightest notebook gets supercharged with the Apple M2 chip. The M2 chip starts the next generation of Apple silicon, with even more of the speed and power efficiency of M1. So you can get more done faster with a more powerful 8‑core CPU. Create captivating images and animations with up to a 8-core GPU and work with more streams of 4K and 8K ProRes video.','Apple-designed M2 chip for a giant leap in CPU, GPU and machine learning performance\nGo longer than ever with up to 18 hours of battery life (Battery life varies by use and configuration)\n8-core CPU delivers up to 3.5x faster performance\n8-core GPU cores with up to 5x faster graphics for graphics-intensive apps and games\n16-core Neural Engine for advanced machine learning\n8GB of unified memory so everything you do is fast and fluid\nSuperfast SSD storage launches apps and opens files in an instant','upload/product_img/041_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(145,203,105,0,0,'ASUS TUF A17 17.3\" Gaming Laptop ','145','981506','','','','',899.99,0.00,'Windows','Gaming','Combining high performance and speed, the ASUS TUF A17 is a worthy choice for portable gaming. Boasting an AMD Ryzen 5 CPU with 16GB RAM and an NVIDIA GTX GPU, this laptop provides everything you need to play the toughest AAA games at maximum settings. It also comes with integrated Wi-Fi and Bluetooth for seamless connectivity to wireless networks and compatible devices.','3.0GHZ AMD Ryzen 5 4600H hexa-core CPU with 16GB DDR4 RAM are a formidable duo that can tackle AAA games, video rendering projects, 3D modelling tasks, and more\n512GB M.2 PCIe 3.0 NVMe solid state drive provides safe storage at high speeds that further boosts performance\n4GB GDDR6 NVIDIA GeForce GTX 1650 graphics card delivers fantastic visuals with fluid frames and detailed textures that make your gameplay more immersive\n17.3\" IPS-Type display with 144Hz refresh rate and 1920 x 1080 resolution boasts incredible picture quality with vivid colours\nIntegrated 10/100/1000 Ethernet and 802.11ax Wi-Fi 6 provide reliable connectivity to wired and wireless networks at mind-blowing speeds','upload/product_img/045_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(146,203,105,0,0,'ASUS ZenBook Pro  15.6\" Touchscreen 2-in-1 Laptop','146','362652','','','','',1499.99,0.00,'Windows','Home','Unleash your creativity! The powerful Zenbook Pro 15 Flip OLED laptop offers incredible performance with an Intel EVO Platform Core i7-12700H processor and 16GB of DDR5 RAM. Its 15.6\" 2.8K OLED touchscreen display delivers cinema grade 100% DCI-P3 colour gamut and is Pantone Validated for amazingly accurate image quality.','2.3GHz 12th generation Intel Evo Platform Core i7-12700H processor and 16GB of LPDDR5 RAM provide excellent performance to handle your multitasking easily and efficiently\n512GB M.2 NVMe PCIe solid state drive (SSD) lends more space for your movies, games, software, and important project files with quick retrieval and loading times\nIntel Iris Xe graphics with integrated video memory configuration delivers crisp and detailed visuals for everyday tasking as well as entertainment\n15.6-inch 120 Hz OLED NanoEdge bezel touch display, with a 2880 x 1620 native resolution and 100% DCI P3 colour gamut, presents your movies and games in vivid colour and excellent picture quality\nDual band Wi-Fi 6E (802.11ax) offers a secured wireless network for smooth browsing and downloads while Bluetooth 5.2 lets you pair your compatible devices like smartphones, tablets, wireless headphones, and more','upload/product_img/046_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(147,203,105,0,0,'ASUS ROG Strix G17 17.3\" Gaming Laptop','147','309609','','','','',1399.95,0.00,'Windows','Gaming','Dive into the action with this ASUS ROG Strix G17 17.3\" Gaming Laptop. It boasts an 8-core 3.2Ghz AMD Ryzen 7 5800H processor and 16GB of RAM, plus an NVIDIA GeForce RTX 3050 Ti 4GB GDDR6 with ROG Boost graphics card, so all of your games are sure to be stunning. At the same time, the 17.3\" Full HD 1920x1080 display will immerse you in the on-screen action.','Overclockable 8-core 3.2Ghz AMD Ryzen 7 5800H processor and 16GB of RAM can handle intense games without breaking a sweat\n512GB SSD holds plenty of files, saved games, and more\nNVIDIA GeForce RTX 3050 Ti 4GB GDDR6 with ROG Boost graphics card creates stunning visuals\n17.3\" Full HD 1920x1080 display immerses you in the on-screen action\nBackwards-compatible Wi-Fi 6 (802.11ax) and Bluetooth 5.1 (Dual band) 2*2 make wireless connectivity easy\n4S1P 4-cell Li-ion battery with 56Wh of life lasts throughout your marathon gaming sessions','upload/product_img/047_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(148,203,105,0,0,'ASUS VivoBook 15 X515 15.6\" Laptop','148','880283','','','','',999.99,0.00,'Windows','Home','Enjoy fast performance with this 15.6-inch ASUS VivoBook 15 X515 laptop. It\'s equipped with an Intel Core i5-1135G7 processor and 16GB of RAM to help you complete work and personal tasks with ease. It also offers a generous 1TB solid-state drive for local storage, a NanoEdge bezel display, and an ergonomic keyboard with fingerprint security.','2.4GHz quad-core Intel Core i5-1135G7 processor and 16GB of DDR4 RAM deliver fast, reliable performance for work and personal tasks\n1TB solid-state drive gives you plenty of space to store important files and applications\n15.6-inch anti-glare 60 Hz NanoEdge bezel display screen supports resolutions of up to 1920 x 1080 for clear, vivid viewing\nWi-Fi 5 (802.11ac) and Bluetooth 4.1 (Dual band) 1*1 compatibility enable easy wireless connection to compatible devices','upload/product_img/048_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(149,204,105,0,0,'HP 15.6\" Laptop - Natural Silver','149','977212','','','','',899.99,0.00,'Windows','Home','Bring efficiency to your home office with this 15.6-inch HP laptop. With its Intel Core i5-1235U processor with 1.3GHz processing speed and 16GB of RAM, you\'ll speed through important work and personal tasks. The generous 1TB storage drive lets you store all of your necessary files, and the 720p webcam and microphone allow you to take calls with crystal clear audio and video.','1.3GHz processing speed with 4.4GHz CPU boost provides power for work, entertainment, and all other things you love\n12th Generation Intel Core i5-1235U processor and 16GB of DDR4-3200 MHz RAM deliver fast, reliable performance\n1TB solid-state drive gives you plenty of space to store important files and applications\n15.6-inch FHD display screen supports resolutions of up to 1920 x 1080 for crisp text and vivid colour','upload/product_img/049_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(150,204,105,0,0,'HP ENVY 17\" Touchscreen Laptop ','150','971934','','','','',1699.99,0.00,'Windows','Home','A perfect mix of performance and versatility, the HP ENVY 17\" laptop will certainly leave you in awe. Designed with an Intel Core i7-1255U with 16GB RAM, it wields plenty of power for your everyday computing tasks while the 17\" FHD microedge touchscreen offers streamlined navigation and brilliant visuals. Built-in Wi-Fi and Bluetooth provide high speed wireless connectivity.','4.7GHz Intel Core i7-1255U 10-core CPU and 16GB DDR4 3200MHz RAM effortlessly handles all your operations fast and lag-free\n1TB M.2 PCIe NVMe SSD provides blistering fast storage that can reduce system boot times, file saving times, and more so you can complete your work faster\n4GB NVIDIA GeForce RTX 2050 GDDR6 dedicated GPU provides a powerful performance boost in handling graphics-intensive tasks like photo editing, video editing, 3D modelling, casual gaming, and more\n17.3\" IPS multitouch-enabled touchscreen with FHD 1920 x 1080 native resolution treats your eyes to sharp images and bright colours','upload/product_img/050_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(151,204,105,0,0,'HP Victus 16\" Gaming Laptop','151','448224','','','','',1799.99,0.00,'Windows','Gaming','Designed for serious gamers, the HP Victus 16\" gaming laptop lets you game like never before. This laptop harnesses efficient power to take on demanding titles with the 12th Generation Intel Core i7-12700H processor and renders vivid graphics with the NVIDIA GeForce RTX 3060 GPU. Thanks to its 16GB RAM and 1TB SSD, data storage and multitasking is a breeze','12th Generation Intel Core i7-12700H processor with 4.7GHz clock rate gives enough power to run graphic-rich games and apps with minimal lag\n16GB DDR5 4800 MHz RAM (2 x 8GB) and the 1TB PCIe NVMe M.2 SSD offer ample storage space for improving load times and multitasking\nNVIDIA GeForce RTX 3060 Laptop GPU with dedicated 6GB GDDR6 delivers higher frame rates for handling latest games\n16.1-inch diagonal, FHD (1920 x 1080), 144Hz, IPS, micro-edge, anti-glare display delivers smooth visuals without screen tearing and freezing','upload/product_img/051_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(156,205,105,0,0,'Acer Swift X 14\" Laptop - Gold ','156','652484','','','','',1399.99,0.00,'Windows','Business','The Acer Swift X 14\" laptop is made for serious content creators, who demand exceptional power and performance. Its AMD Ryzen 7 5700U processor, 16 GB of DDR4 RAM, and dedicated NVIDIA GeForce RTX 3050 graphic card ensure an extremely fluid performance. The 512GB solid state drive provides ample space for your storage needs and 56Wh capacity li-ion battery keeps the device running for more than 10 hours.','AMD Ryzen 7 5700U processor and 16GB of DDR4 RAM offer an incredibly smooth and fast performance\n512 GB solid state drive provides generous space for storing your file, media and applications\nDedicated NVIDIA GeForce RTX 3050 graphics card ensures smooth and fluid visuals\n14-inch IPS display with a 1920 x 1080 resolution let you enjoy visuals in superior clarity and rich colours\nWi-Fi 6 (802.11ax) and Bluetooth 5.2 provide reliable options for wireless connectivity\n56Wh capacity four-cell li-ion battery with up to 14 hours lifetime never keeps you worried about the battery getting drained in middle of your work','upload/product_img/056_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(158,204,105,0,0,'HP ZBook Studio x360 G5 15.6\" Touchscreen 2 in 1 Mobile Workstation','158','463948','','','','',2811.99,0.00,'Windows','Business','Reimagine your creative process with a versatile laptop that gives you the latest convertible design you\'ll want with the pro-grade performance you need. Windows 10 Pro or other operating systems available Intel Core i5 2.30 GHz processor provides great performance, immersive multimedia and rapid loading of programsWith 8 GB DDR4 SDRAM memory, you can multitask seamlessly between various applications without issue15.6\" display with 1920 x 1080 resolution showcases movies, games and photos with impressive clarity','HP ZBook Studio x360 G5 15.6\" Touchscreen 2 in 1 Mobile Workstation \n1920 x 1080 - Core i5 i5-8300H \n8 GB RAM - 256 GB SSD \nWindows 10 Pro 64-bit \nIntel UHD Graphics 630\n In-plane Switching (IPS) Technology','upload/product_img/058_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(159,205,105,0,0,'Acer Nitro 5 15.6\" Gaming Laptop','159','483896','','','','',849.99,0.00,'Windows','Gaming','Take your portable gaming to the next level with the Acer Nitro 5 Gaming Laptop. Its powerful package consists of an Intel Core i5 CPU and 12GB RAM with an NVIDIA GTX GPU to deliver accelerated performance in gaming, video rendering, and other intensive tasks. The 15.6” FHD IPS display treats your eyes to impressive visuals that make your gameplay fun and immersive.','2.5GHz Intel Core i5-10300 quad-core CPU and 12GB RAM are a formidable combination that can tackle demanding games and intensive applications with ease\n512GB PCIe SSD offers high speed storage while also boosting your in-game performance with faster loading times\nNVIDIA GTX 1650 graphics card lets you max out the visuals in all your games for a thrilling and engaging gaming experience\n15.6-inch IPS display with FHD 1920 x 1080 native resolution steals your focus with amazing picture quality and natural-looking colours','upload/product_img/059_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(160,205,105,0,0,'Acer Porsche Design Book RS 14\" Touchscreen Laptop','160','399615','','','','',1749.99,0.00,'Windows','Business','The Acer Porsche Design laptop is sure to exceed expectations with its charismatic design and serious performance. Powered by 11th Gen Intel Core i7-1165G7 processor and 16GB DDR4X RAM for seamless computing sessions, its lightweight design boasts carbon fiber cover, the unibody hinge, the ultra-thin chassis, and the 14\" Full HD IPS touchscreen for refined computing experience.','2.8GHz 11th Gen Quadcore Intel Core i7-1165G7 processor with 12MB processor cache and 16GBDDR4XRAM deliver top class computing speeds to ease your workload\n1TB PCIe SSD ensures secure storage of all your documents, files, and folders while providing increased performance\nDedicated 2GB NVIDIA MX350 provides optimal creativity and faster gaming\n14-inch Full HD IPS touchscreen display with 1920 x 1080 native resolution keeps you hooked with its wide viewing angles, screen consistency, sharp pictures, improved contrast, and easy user-experience','upload/product_img/060_p1.jpeg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(166,206,105,0,0,'Lenovo ThinkPad P52 Workstation 15.6\" Laptop','166','372446','','','','',1049.99,0.00,'Windows','Business','The ThinkPad P52 offers a stunning 15.6\" FHD display. Colors are super-vibrant with 100% Adobe color gamut and 400 nit. Whether you\'re creating multimedia or simply enjoying it, you’ll definitely appreciate the upgraded visuals!','Lenovo ThinkPad P52 Workstation 15.6\" Laptop\nCore i7-8850H / 2.60 GHz \n16 GB Memory / 512 GB SSD \nQuadro P1000 4 GB  \nWindows 10 Pro','upload/product_img/066_p1.jpeg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(167,206,105,0,0,'Lenovo Legion 5i 15.6\" Gaming Laptop','167','451124','','','','',2299.99,0.00,'Windows','Gaming','Powerful gaming performance doesn’t have to mean you’re tethered to a desk. Enjoy freedom and portability with the Lenovo Legion 5i gaming laptop. It comes well-equipped with a 15.6” display, Intel Core i7 processor, a 512GB SSD, 16GB of RAM, and a NVIDIA GeForce RTX 3070 Ti graphics card to give you a tactical advantage.','Intel Core i7-12700H processor and 16GB of DDR5 RAM provides incredible power for gaming, work, and everyday productivity\n512GB SSD offers plenty of storage space for your files, along with speedy load times that won’t slow you down\nNVIDIA GeForce RTX 3070 Ti graphics card with 8GB of dedicated memory delivers ray tracing and advanced DLSS so every frame is rendered in amazing clarity\n15.6-inch display with a 1920 x 1080 resolution brings all of your visuals to life\nWi-Fi 6E (802.11AX) and integrated Bluetooth ensure smooth and seamless wireless connections','upload/product_img/067_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(169,206,105,0,0,'Lenovo IdeaPad Flex 5i 14\" Touchscreen 2-in-1 Laptop','169','316563','','','','',999.99,0.00,'Windows','Home','A flexible design with mighty performance, the Lenovo IdeaPad Flex 5i 2-in-1 laptop is an excellent choice for your on-the-go productivity. It is powered by an Intel Core i5 CPU paired with 8GB of RAM for completing tasks at a maximum velocity. The 14\" FHD touchscreen is great for an easy-touch navigation and superior-clarity visuals.','2.4GHz quad-core Intel Core i5-1135G7 processor with 8GB of RAM delivers all the power your need to handle tough tasks with ease\n512GB SSD storage offers plenty of storage and ensures a faster loading of applications, games, and movies\nIntel Iris Xe Graphics provides a boost for graphic intensive applications for gaming, photo editing, video editing, and more\n14 inch touchscreen with a 1920 x 1080 native resolution and narrow bezel treats your eyes with bright and crisp images\nIntegrated 2x2 802.11ax Wi-Fi for connecting to wireless networks and Integrated Bluetooth for pairing with compatible devices for file transfers, audio streaming, and more','upload/product_img/069_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(171,207,105,0,0,'Dell XPS 15.6\" Touchscreen Laptop - White','171','542324','','','','',2899.99,0.00,'Windows','Home','The Dell XPS 15.6\" touchscreen laptop is a perfect combination of performance, productivity, and versatility. Powered by an Intel Core i7 CPU with 12GB RAM and an NVIDIA GPU, it delivers incredible performance that can handle any task. This laptop boasts a stunning 3.5K OLED touchscreen for smooth touch navigation and impressive visuals.','2.3GHz Intel Core i7-12700H 14-core CPU with 16GB 4800MHz RAM is more than capable of handling all your tasks at maximum velocity\n1TB M.2 NVMe Solid State Drive gives you vast and fast storage for tons of files and data\n4GB NVIDIA RTX 3050 GDDR6 graphics card delivers robust graphics performance for your content creation projects such as photo editing, video rendering, 3D modelling, and more\n15.6\" anti-reflecting InfinityEdge Display with 3.5K 3456 x 2160 native resolution at 60Hz treats your eyes to incredibly sharp images in brilliant colours','upload/product_img/071_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(172,207,105,0,0,'Dell Inspiron 3511 15.6\" Touchscreen Laptop','172','486830','','','','',699.99,0.00,'Windows','Home','The Dell Inspiron 3511 laptop is designed to help you streamline your productivity. Powered by a 11th gen Intel Core i5 CPU and 8GB RAM, it offers reliable performance to help you tackle your busiest days while the 15.6\" FHD touchscreen ensures immersive viewing and smooth navigation. This laptop also comes with integrated Wi-Fi and Bluetooth for wireless connectivity.','2.4GHz Intel Core i5-1135G7 quad-core CPU and 8GB DDR4 3200MHz RAM provide accelerated performance for multi-tasking, entertainment, productivity, and more\n256GB M.2 NVMe PCIe solid state drive ensures incredibly fast file handling speeds and secure storage\n15.6\" anti-glare LED touchscreen display with slim bezels and FHD 1920 x 1080 native resolution produces crystal clear images and bright colours\nIntegrated Wi-Fi (802.11ac) provides wide coverage and blazing fast wireless speeds over wireless networks\nIntegrated Bluetooth 5.0 lets you pair with compatible Bluetooth devices for streaming audio, file sharing, and more','upload/product_img/072_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(173,207,105,0,0,'Dell G15 15.6\" Gaming Laptop -Black','173','534920','','','','',1699.99,0.00,'Windows','Gaming','Get the power to take on any gaming challenges with the Dell G15 15.6\" gaming laptop. Built with the 12th Gen Intel Core i7-12700H processor and NVIDIA GeForce RTX 3060 graphics, this laptop takes your gaming performance to the peak level. It features 16GB DDR5 RAM and 512GB SSD that improve the frame rates and is enhanced with an optimal cooling system to let you game flawlessly for prolonged hours','Dynamic 12th Generation Intel Core i7-12700H processor with 24MB Cache, 14 cores and a clock speed up to 4.7 GHz assures seamless multitasking and excellent responsiveness\n16GB (2x8GB) DDR5, 4800MHz RAM and the 512GB M.2 PCIe Gen 4 offer enough storage space for all your games and enhances the load times for lag-free gaming\nNVIDIA GeForce RTX 3060 6GB GDDR6 graphics delivers life-like images and allows playing games at resolutions up to 1440p\n15.6\" FHD (1920 x 1080) 120Hz 250 nits anti-glare LED backlit narrow border display gives a wide viewing angle and retains color reproduction for immersive visualization','upload/product_img/073_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(174,207,105,0,0,'Alienware m15 R7 15.6\" Gaming Laptop','174','915148','','','','',2899.99,0.00,'Windows','Gaming','If you’re serious about gaming, the Dell Alienware m15 R7 gaming laptop delivers the power you need in a portable package. Equipped with a 14-core Intel Core i7 processor and 16GB of RAM, it has the ability to run virtually any game without lag. The 1TB SSD offers plenty of storage space while the NVIDIA GeForce RTX 3070 Ti graphics card brings the action to life.','1.7GHz Intel Core i7-12700H 14-core processor and 16GB Dual-Channel DDR5 4800MHz RAM deliver the power you need for your most resource-intensive games\n1TB PCIe M.2 Solid State Drive (SSD) provides tonnes of storage space, along with speedy and enhanced performance\nNVIDIA GeForce RTX 3070 Ti graphics card with 8GB GDDR6 memory enables real-time interactive ray tracing for rich lighting and true-to-life environments\n15.6-inch FHD (1920 x 1080) 360Hz display with a 1ms refresh rate, ComfortView Plus, NVIDIA G-SYNC, and Advanced Optimus brings every scene to life\nKiller AX1675i and Bluetooth 5.2 allow for reliable wireless connections to your home network or compatible devices','upload/product_img/074_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(184,3,106,0,0,'Apple Magic Mouse -White','184','307226','','','','',99.99,0.00,'','Home','The Apple Magic Mouse is wireless and rechargeable, with an optimized foot design that lets it glide smoothly across your desk. The Multi-Touch surface allows you to perform simple gestures such as swiping between web pages and scrolling through documents smoothly.','Ready to go right out of the box, pairing automatically with your Mac via Bluetooth\nWireless and rechargeable mouse pairs automatically with your Mac via Bluetooth\nFeatures a long-lasting internal rechargeable battery so you’ll eliminate the use of traditional batteries\nLightweight construction, optimized foot design, and fewer moving parts (thanks to its built-in battery and continuous bottom shell) make for more effortless tracking and smoother, more fluid movement across the surfaces','upload/product_img/084_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(186,208,106,0,0,'Logitech MX Vertical Ergonomic Wireless Optical Mouse','186','159355','','','','',129.99,0.00,'','Business','Take the strain out of your computing experience with this Logitech wireless mouse. Angled at an ergonomist-recommended 57 degrees to improve wrist posture and reduce muscle strain, this mouse comes with a high-precision 4000-dpi sensor to reduce hand movements, which minimizes fatigue.','Ergonomic vertical design with a 57-degree angle lessens pressure on your wrist, minimizing fatigue and allowing you to click and draw for longer\nIntuitive thumb rest positioning for comfort and ease of use\n4000-dpi optical sensor enhances accuracy and minimizes hand movements, reducing fatigue and improving productivity\nCursor speed switch makes it a snap to adjust cursor speed and accuracy on the fly\nContoured design and a textured rubber surface for comfort and tactility','upload/product_img/086_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(188,208,106,0,0,'Logitech G502 X PLUS 25000 DPI Wireless Optical Gaming Mouse','188','255783','','','','',219.99,0.00,'','Gaming','Take your gaming accuracy and speed to the next level with this Logitech G502 X PLUS gaming mouse. It features hybrid optical-mechanical Lightforce switches for superior speed and sharp response. The Lightsync RGB with vibrant 8-LED lighting enables dynamic and customizable lighting according to your game play. The Lightspeed wireless offers reliable and speedy wireless connectivity.','Wireless mouse featuring Lightspeed wireless technology that enables superior connectivity with enhanced reliability and faster response\nDesigned for right-handed use\nHero 25K gaming sensor delivers excellent DPI performance up to 25000 dpi, allowing you to achieve accuracy with zero smoothing\nThirteen programmable buttons (including scroll wheel) and five memory profiles let you set up the mouse for different game play\nInnovative hybrid optical-mechanical Lightforce switches guarantee reliability and speed with crisp response\nNew DPI-shift button, featuring a removable and reversible button, allows for optimal customization according to your grip and other needs','upload/product_img/088_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(190,3,106,0,0,'Apple Magic Keyboard - White','190','532480','','','','',119.99,0.00,'','Business','Stay productive and work comfortably for hours with the Apple Magic keyboard. It boasts a compact profile with an ergonomic QWERTY layout for a familiar typing experience. You can quickly and easily charge the battery by connecting the USB-C to lightning cable to the USB-C port of your device for added convenience.','Wireless keyboard automatically connects with your Mac via Bluetooth, so you can start working right away\nBuilt-in rechargeable battery lasts for about a month between charges based on the usage\nIncludes a woven USB-C to lightning cable for charging the battery in a quick and efficient way','upload/product_img/090_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(191,208,106,0,0,'Logitech K380 TKL Bluetooth Keyboard - Rose','191','686705','','','','',39.99,0.00,'','Home','Compatible with multiple Apple devices, this lightweight keyboard is an ideal accessory for working on the go. You can pair it with up to 3 Apple devices and can seamlessly switch between them in a snap. Its compact build and scooped scissor keys promote better posture and smooth typing. It comes with preinstalled batteries that last for up to 2 years, depending on use.','Bilingual membrane keyboard with scooped, low-profile scissor keys allow for smooth, quiet, and fluid typing in a healthy posture and with less reach\nPairs with up to 3 devices and lets you switch between your MacBook, iPad, or iPhone with a simple tap\nCompact and lightweight build offers the comfort of laptop-style typing wherever you go','upload/product_img/091_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(192,208,106,0,0,'Logitech G915 TKL Mechanical Tactile Keyboard','192','496264','','','','',282.98,0.00,'','Gaming','Boost your gaming performance with this Logitech G915 TKL keyboard. In a slim and durable design, this tenkeyless gaming keyboard has low-profile mechanical switches that offer all the superior capabilities of a traditional switch, but at just half the height. LIGHTSPEED wireless allows for a highly fast and seamless wireless connection.','Low-profile mechanical switches offer the precision, speed, and performance of traditional switches at half the height\nGL Tactile switch type provides a discernible tactile bump for precise and instant feedback\nLIGHTSYNC technology offers dynamic RGB lighting that synchronises to any content\nCustomise the light of each key from 16.8 million colours using the Logitech G HUB software\nLIGHTSPEED wireless technology delivers reliable, ultra-fast 1ms wireless connectivity that keeps you away from the clutter of wires\nTenkeyless design offers more space for mouse movement, while the back side of the keyboard provides space to keep your USB receiver for enhanced portability','upload/product_img/092_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(197,205,106,0,0,'Acer 31.5\" FHD Curved VA LED FreeSync Gaming Monitor','197','699254','','','','',399.99,0.00,'','Gaming','Hook up your gaming rig with the Acer 31.5\" gaming monitor to enjoy an immersive gaming experience. Boasting a sleek 31.5\" display in a curved profile with FHD resolution of 1920 x 1080, it offers great visuals and a wide field of view. It also comes with special vision technology to reduce strain on your eyes during prolonged gaming sessions.','31.5\" LED-backlit LCD with Full HD 1920 x 1080 delivers realistic images with superior clarity and a high level of detail\nCurved display provides a wide field of view that improves eye comfort to give you a competitive edge while gaming\n165Hz refresh rate can reduce perceived motion blur while preserving every detail in fast action scenes\nAMD Freesync compatible monitor works in tandem with your AMD graphics card to deliver smooth and flawless gameplay without any screen-tearing and stuttering','upload/product_img/097_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(198,207,106,0,0,'Dell 23.8\" FHD 75Hz 4ms GTG IPS LED Monitor with Webcam','198','186242','','','','',549.99,0.00,'','Home','Enjoy exceptional visuals and crisp motion clarity with the Dell Full HD IPS LED monitor. It features a 23.8\" Full HD IPS LED display with 75Hz refresh rate which offers clear text, sharp pictures, and brilliant colours. It boasts dual 5W speakers and a height adjustable stand with tilt, swivel, and pivot mechanisms for viewing convenience.','23.8-inch screen with 16:9 aspect ratio and FHD 1920 x 1080 screen resolution is ideal for entertainment, productivity, and more\n75Hz refresh rate and 4ms GTG response time lets you enjoy amazing motion performance without any visual distortion\nAMD FreeSync technology works with your AMD GPU for smooth framerates and crisp motion without screen tearing or ghosting\nIPS LED Edgelight display with 99% of sRGB colour gamut and 1000:1 static contrast ratio, offers excellent colour reproduction for most of the natural looking scenes','upload/product_img/098_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(199,3,106,0,0,'Apple Studio Display 27\" 5K Retina Monitor','199','161552','','','','',1999.99,0.00,'','Business','The Apple Studio display offers you productivity like you\'ve never seen before. You and your team can get more done with an expansive 27-inch 5K Retina display with a 12MP ultra wide camera with Center Stage, studio-quality mics and a six-speaker sound system. Pairs beautifully with any Mac, so you can focus on pushing the boundaries of your creativity.','Expansive 27-inch 5K Retina display with 600 nits of brightness, support for one billion colours and P3 wide colour (Screen size is measured diagonally)\n5120 x 2880 native resolution\n12MP Ultra Wide camera with Center Stage for more engaging video calls\nStudio-quality three-mic array for crystal-clear calls and voice recordings\nSix-speaker sound system with Spatial Audio for an unbelievable listening experience','upload/product_img/099_p1.jpg',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(200,204,106,0,0,'HP 27\" QHD 5ms GTG IPS LED Monitor','200','366547','','','','',566.99,0.00,'','Business','Meticulously crafted to surpass every design standard, the HP Z27q G3 QHD Display is composed of authentic aluminum and delivers an impressive, frameless viewing experience. Bring your ideas to life with remarkable color accuracy in precise Quad HD resolution. Refine your work experience and transform your PC into a powerhouse with this 27 inch diagonal screen monitor.','Meticulously crafted to surpass every design standard, the HP Z27q G3 QHD Display is composed of authentic aluminum and delivers an impressive, frameless viewing experience. Bring your ideas to life with remarkable color accuracy in precise Quad HD resolution. Refine your work experience and transform your PC into a powerhouse with this 27 inch diagonal screen monitor.\nOut of the box, you get remarkable color accuracy from screen to screen. Achieve precise, vibrant detail with 99% sRBG color gamut and Quad HD resolution.\nThis stunning 27-inch diagonal screen monitor is meticulously crafted with a razor-thin profile and frameless design. Get ultimate comfort with 4-way ergonomic adjustability.','upload/product_img/100_p1.png',0,0,0,0,1,'2022-10-24 22:18:49','2022-10-25 20:06:27'),(201,204,104,0,0,'这是测试笔记本','201','584571','','','','',2000.00,0.00,'Windows','Home','aaaasdfsdfaaaasdfsdfaaaasdfsdfaaaasdfsdfaaaasdfsdf','<p>Product DetailsProduct DetailsProduct <span style=\"color:#3498db\">DetailsProduct DetailsProduct</span> DetailsProduct Details</p>','upload/products/thambnail/1747676801006797.jpeg',0,0,0,0,1,'2022-10-25 08:14:38','2022-10-25 08:14:38'),(202,204,104,0,0,'这是测试','','282818','','','','',2000.00,0.00,'Windows','Home','sadfsadfsdf','<p>Product DetailsProduct DetailsProduct Details</p>\r\n\r\n<p>Product Details</p>\r\n\r\n<p>Product Details</p>\r\n\r\n<p>Product Details</p>\r\n\r\n<p>Product Details</p>','upload/products/thambnail/1747676985539686.jpeg',0,0,0,0,1,'2022-11-03 08:18:29','2022-11-03 08:18:29'),(203,209,105,0,0,'fff 111','','313739','','','','',234.00,0.00,'Mac OS','Gaming','aadfdf','<p>Product Detailssdsfsdf</p>','upload/products/thambnail/1748467631931689.jpeg',0,0,0,0,1,'2022-11-04 12:17:25','2022-11-04 12:17:25');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reviews_product_id_foreign` (`product_id`),
  KEY `reviews_user_id_foreign` (`user_id`),
  CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,10,1,'Really It Is very nice product','nice product','0','2021-03-27 13:55:16',NULL),(2,10,1,'This Best Samsung Product Review','Best Samsung Product','1','2021-03-27 13:56:40','2021-03-27 15:03:52'),(3,11,1,'Size is very big','Samsung Monitor is nice','1','2021-03-27 13:57:26','2021-03-27 15:02:14'),(4,11,1,'TESTFTESTFTESTFTESTF','test','1','2021-03-27 14:23:08','2021-03-27 15:03:22'),(6,10,1,'test Review','test','1','2021-04-11 16:16:03','2021-04-11 16:16:32');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seos`
--

DROP TABLE IF EXISTS `seos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seos`
--

LOCK TABLES `seos` WRITE;
/*!40000 ALTER TABLE `seos` DISABLE KEYS */;
INSERT INTO `seos` VALUES (1,'Best Choice Online Shop','Best Choice','Best Choice online shop, Best Product, Best ecommerce Store','Meta Description',';',NULL,'2022-10-05 23:23:48');
/*!40000 ALTER TABLE `seos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('02zUH1BKZ13q6GLv31zsrzxf2EM2aIdzRs7FDlxc',NULL,'180.101.245.248','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTGJPRjZpT0tUa3RHa3pCQUg1RTBYb3JyVUhGU1djVXlFUWtFZGttMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L3Byb2R1Y3Qvdmlldy9tb2RhbC8xOTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1667920325),('1cOJClKEoReTkiRrQ37rQxQ2BN6vSMfXzv5LJkiV',NULL,'1.13.140.46','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoicWpRY1VNdGRPZHF6elBYejA4ODg1VTB2c0p0NWRtMk5SYldSTngzaiI7czo3OiJtZXNzYWdlIjtzOjIzOiJZb3UgTmVlZCB0byBMb2dpbiBGaXJzdCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjI6e2k6MDtzOjc6Im1lc3NhZ2UiO2k6MTtzOjEwOiJhbGVydC10eXBlIjt9fXM6MTA6ImFsZXJ0LXR5cGUiO3M6NToiZXJyb3IiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUyOiJodHRwOi8vNDIuMTkzLjE4NS4yMTg6ODExNS91c2VyL2ludm9pY2VfZG93bmxvYWQvJTIwIjt9fQ==',1667939903),('2aQtGLCOMckVqOv9YbOuNYhxTsUNQmhBJh6CEEf8',1,'38.34.35.27','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTo4OntzOjY6Il90b2tlbiI7czo0MDoiMk4wWjZZRkg5S1htTEx3UUhRYmJxWWFmRlN0NUFUSWxFNlpXc1hVbSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L3VzZXIvb3JkZXIvZGV0YWlsLzIyIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDNyQklqVUVOQWpYVlhtOG44cXN0ZnV2azV3azF0OWIvQ0luNmNIZDJ1akk1UjkyRHFUVDFDIjtzOjQ6ImNhcnQiO2E6MTp7czo3OiJkZWZhdWx0IjtPOjI5OiJJbGx1bWluYXRlXFN1cHBvcnRcQ29sbGVjdGlvbiI6Mjp7czo4OiIAKgBpdGVtcyI7YTozOntzOjMyOiIyNGIzMWYwN2YxZjhjZmZjYTgyZTMzOGE2Yjg3OTA4ZSI7TzozMjoiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0iOjExOntzOjU6InJvd0lkIjtzOjMyOiIyNGIzMWYwN2YxZjhjZmZjYTgyZTMzOGE2Yjg3OTA4ZSI7czoyOiJpZCI7czozOiIxOTgiO3M6MzoicXR5IjtzOjE6IjEiO3M6NDoibmFtZSI7czo1NToiRGVsbCAyMy44IiBGSEQgNzVIeiA0bXMgR1RHIElQUyBMRUQgTW9uaXRvciB3aXRoIFdlYmNhbSI7czo1OiJwcmljZSI7ZDo1NDkuOTk7czo2OiJ3ZWlnaHQiO2Q6MTtzOjc6Im9wdGlvbnMiO086Mzk6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtT3B0aW9ucyI6Mjp7czo4OiIAKgBpdGVtcyI7YTozOntzOjU6ImltYWdlIjtzOjI5OiJ1cGxvYWQvcHJvZHVjdF9pbWcvMDk4X3AxLmpwZyI7czo1OiJjb2xvciI7TjtzOjQ6InNpemUiO047fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9czo3OiJ0YXhSYXRlIjtpOjA7czo0OToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGFzc29jaWF0ZWRNb2RlbCI7TjtzOjQ2OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AZGlzY291bnRSYXRlIjtpOjA7czo4OiJpbnN0YW5jZSI7czo3OiJkZWZhdWx0Ijt9czozMjoiMWM0ZjhlOTNiYmI2NGI2ZGE0YWVjNGJmNzBhNjJhYjkiO086MzI6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtIjoxMTp7czo1OiJyb3dJZCI7czozMjoiMWM0ZjhlOTNiYmI2NGI2ZGE0YWVjNGJmNzBhNjJhYjkiO3M6MjoiaWQiO3M6MzoiMTI3IjtzOjM6InF0eSI7czoxOiIxIjtzOjQ6Im5hbWUiO3M6MzE6Ikxlbm92byBUaGlua0NlbnRyZSBNOTBhIERlc2t0b3AiO3M6NToicHJpY2UiO2Q6MTIwOS45OTtzOjY6IndlaWdodCI7ZDoxO3M6Nzoib3B0aW9ucyI7TzozOToiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW1PcHRpb25zIjoyOntzOjg6IgAqAGl0ZW1zIjthOjM6e3M6NToiaW1hZ2UiO3M6MzA6InVwbG9hZC9wcm9kdWN0X2ltZy8wMjdfcDEuanBlZyI7czo1OiJjb2xvciI7TjtzOjQ6InNpemUiO047fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9czo3OiJ0YXhSYXRlIjtpOjA7czo0OToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGFzc29jaWF0ZWRNb2RlbCI7TjtzOjQ2OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AZGlzY291bnRSYXRlIjtpOjA7czo4OiJpbnN0YW5jZSI7czo3OiJkZWZhdWx0Ijt9czozMjoiN2FlNWRkYmM2MmE1NTQ5ZDE1NTZkMDgzYjJkOWJlZTQiO086MzI6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtIjoxMTp7czo1OiJyb3dJZCI7czozMjoiN2FlNWRkYmM2MmE1NTQ5ZDE1NTZkMDgzYjJkOWJlZTQiO3M6MjoiaWQiO3M6MzoiMTIzIjtzOjM6InF0eSI7czoxOiIxIjtzOjQ6Im5hbWUiO3M6MzE6IkFjZXIgQXNwaXJlIEMgMjQiIEFsbC1pbi1PbmUgUEMiO3M6NToicHJpY2UiO2Q6NzQ5Ljk5O3M6Njoid2VpZ2h0IjtkOjE7czo3OiJvcHRpb25zIjtPOjM5OiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbU9wdGlvbnMiOjI6e3M6ODoiACoAaXRlbXMiO2E6Mzp7czo1OiJpbWFnZSI7czoyOToidXBsb2FkL3Byb2R1Y3RfaW1nLzAyM19wMS5qcGciO3M6NToiY29sb3IiO047czo0OiJzaXplIjtOO31zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fXM6NzoidGF4UmF0ZSI7aTowO3M6NDk6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQBhc3NvY2lhdGVkTW9kZWwiO047czo0NjoiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGRpc2NvdW50UmF0ZSI7aTowO3M6ODoiaW5zdGFuY2UiO3M6NzoiZGVmYXVsdCI7fX1zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fX1zOjE0OiJjaGVja291dF9zdG9yZSI7YToxMTp7czo2OiJfdG9rZW4iO3M6NDA6IjJOMFo2WUZIOUtYbUxMd1FIUWJicVlhZkZTdDVBVElsRTZaV3NYVW0iO3M6MTA6ImZpcnN0X25hbWUiO3M6MjoiYWEiO3M6OToibGFzdF9uYW1lIjtzOjI6ImJiIjtzOjU6InBob25lIjtzOjI6ImNjIjtzOjc6ImNvbXBhbnkiO3M6MjoiZGQiO3M6NzoiYWRkcmVzcyI7czoyOiJlZSI7czozOiJhcHQiO3M6MjoiZmYiO3M6NDoiY2l0eSI7czo0OiJjaXR5IjtzOjg6InByb3ZpbmNlIjtzOjI6IjExIjtzOjExOiJwb3N0YWxfY29kZSI7czo3OiJaNVogNlo2IjtzOjE0OiJwYXltZW50X21ldGhvZCI7czo2OiJzdHJpcGUiO31zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',1667923149),('3koam7lGzovGCQMeL1A7ToLLoHFlNKISvHXUYqGP',NULL,'220.196.160.117','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoia1JEb0tTMG9KaWpVMXFndDlndHhWcnlRVUFQdExtUmc4VkxuTUpHYyI7czo3OiJtZXNzYWdlIjtzOjE4OiJQbGVhc2UgbG9naW4gZmlyc3QiO3M6NjoiX2ZsYXNoIjthOjI6e3M6MzoibmV3IjthOjA6e31zOjM6Im9sZCI7YToyOntpOjA7czo3OiJtZXNzYWdlIjtpOjE7czoxMDoiYWxlcnQtdHlwZSI7fX1zOjEwOiJhbGVydC10eXBlIjtzOjc6Indhcm5pbmciO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM4OiJodHRwOi8vNDIuMTkzLjE4NS4yMTg6ODExNS9wcm9kdWN0L2FkZCI7fX0=',1667952317),('5hdkB9wA9poP8qTBRp2ofr3MLDhvQiSKxwwm2Wz3',NULL,'180.101.245.246','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRkFCeXlGdFFwTFRMbmlvcUM1dzJLamtOWUhvY21IZzhDZ3NVVEQyciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L2FkbWluL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667952317),('69PivucPT4yNp1cQdFsNAVTl0vX73DI9b8tQY3xr',NULL,'180.101.245.251','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoia0RKWGt3QnZQQklqSllPcVNhWEc3RHFxZjlDR3lJWnIydk85OXRHbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L2JpbGwtZ2V0L2FqYXg/aWQ9LTEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1667920811),('7LgCb3H74Ir2gH55aTILJwqXUgvd38O4DCKYrhTj',NULL,'220.196.160.154','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWE9wQlF5ZmtEeGtMdEpYWUQ3QWJzY2wzWDVUQkNoeG1aSGxzZUo1NCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L2FkbWluL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667922761),('9ckmQxg1Zh7OaTgVShfNsr4eL9kFb4vehPi6GHR0',NULL,'220.196.160.144','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiejVzRHFXOXo2eWlOa1JMVm05MXU0WlNTb0dxRFhuN2hISWlOR2puSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667921539),('amlsOUkDRBSN9zIgal9t5UKMFM1hvhMCeASiFrN8',NULL,'180.163.220.68','Mozilla/5.0 (Linux; U; Android 8.0.0; zh-cn; Mi Note 2 Build/OPR1.170623.032) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/10.1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMkJHcFY3a0VDVEk2ZTZYSGhOaDJzRDJna1RjNUwwMTdrOUxWZjRmcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667945784),('bsjeYrzA4pqJt24IHfYbOazQFsWBelIalo9LW0w5',NULL,'180.163.220.66','Mozilla/5.0 (Linux; U; Android 8.0.0; zh-cn; Mi Note 2 Build/OPR1.170623.032) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/10.1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVloybTlBdDYxZW50MUhZN0NKQm9ZUGJrU1pLMjM2ZHcza0VYRlhndyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667945771),('cTt3tPVyXJ5nTnUaWjXNGXd4YECqCEuMg96uI3EK',NULL,'42.236.10.125','Mozilla/5.0 (Linux; U; Android 8.0.0; zh-cn; Mi Note 2 Build/OPR1.170623.032) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/10.1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQmY1ZlBzTlJPdngyUVhSWmVTRjRjWE5ydk5mZ0RLdXNtSEdCWnV2QyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L2FkbWluL2xvZ2luIjt9fQ==',1667945766),('DefCH48NzNEh5TJgCEiP2KCMPkL9mrEtqDPXLgzJ',NULL,'220.196.160.83','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoidkZLb0hPSFVSajQ3Q2wyVlpwN0w4cEFNb1UweU5CRkJaaENYeVBmQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L2FkbWluL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667922766),('dttJTFyCSv0KHsuvNcEe9jcbU4yUhnRfokg6F9f1',NULL,'220.196.160.45','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSGNra0hnMTI4RHpwdlVMM1ViZ05tRnA5M2had1h0OEYwQTNBTmxqUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTQ3OiJodHRwOi8vNDIuMTkzLjE4NS4yMTg6ODExNS9zaG9wP2JyYW5kPUFjZXImY2F0ZWdvcnk9QWNjZXNzb3JpZXMmY29sbGFwc2VGaXZlPTEmY29sbGFwc2VPbmU9MSZjb2xsYXBzZVNlY29uZD0xJnByaWNlX3JhbmdlPTEwJTJDMzUwMCZzb3J0X2J5PWRlZmF1bHQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1667919680),('eS2jYIsdvbQ4vlJAitXQfsF5tCRmyDBhqf8ZPdrT',NULL,'220.196.160.154','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoia3Z1dVp6OEt3ZzVnQ0ZmelhOU2FVRmZ4ODc4Tlg3d0dDcG1sbHlNVCI7czo3OiJtZXNzYWdlIjtzOjE4OiJQbGVhc2UgbG9naW4gZmlyc3QiO3M6NjoiX2ZsYXNoIjthOjI6e3M6MzoibmV3IjthOjA6e31zOjM6Im9sZCI7YToyOntpOjA7czo3OiJtZXNzYWdlIjtpOjE7czoxMDoiYWxlcnQtdHlwZSI7fX1zOjEwOiJhbGVydC10eXBlIjtzOjc6Indhcm5pbmciO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQxOiJodHRwOi8vNDIuMTkzLjE4NS4yMTg6ODExNS9wcm9kdWN0L21hbmFnZSI7fX0=',1667922761),('FRz4eIELjxFOZItgMRmZKHbJyZtuY1aLE25IIybW',NULL,'54.187.205.235','Stripe/1.0 (+https://stripe.com/docs/webhooks)','YToyOntzOjY6Il90b2tlbiI7czo0MDoibTFxZ1Q2R2ZHdWJlWXQxaHVDWXlzNGFNeTNPcXlveGZGM0hYcEZCUyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667922450),('GMj0e5KVurROfDE8IFTp9SSyvyeL4YH6RIwjfYFD',NULL,'220.196.160.95','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRHhGM2pFM1JGalBZUXBSSjZ0WFFHbWpad003OUZnY0lHS3BRdFRMTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667939903),('IAFyYbSbZseajQWjOOD58rToWxNo6tEu2mm385yT',NULL,'180.101.244.12','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoicXRkeHJjNXdiNlF3NXEyT2lmWXNrMzBrbk1nUlRDN1p2S0pFNUtYVyI7czo3OiJtZXNzYWdlIjtzOjIzOiJZb3UgTmVlZCB0byBMb2dpbiBGaXJzdCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjI6e2k6MDtzOjc6Im1lc3NhZ2UiO2k6MTtzOjEwOiJhbGVydC10eXBlIjt9fXM6MTA6ImFsZXJ0LXR5cGUiO3M6NToiZXJyb3IiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ3OiJodHRwOi8vNDIuMTkzLjE4NS4yMTg6ODExNS91c2VyL3NoaXBwaW5nL2VkaXQvOCI7fX0=',1667920407),('IN1zCZFR1o1o2yEehc4NzEPCn07f7wW4a2tVYB2K',NULL,'1.13.140.49','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiM2NvNElKTnB1dDk2dkdxTHRnZWxURk1pZ3ZadWppSGJsam9nbVdZMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667920408),('ItxKxyAbvEES1LKU1tw0qOMeCCvY8hmhwSxTeamY',NULL,'180.163.220.66','Mozilla/5.0 (Linux; U; Android 8.0.0; zh-cn; Mi Note 2 Build/OPR1.170623.032) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/10.1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiN0djWmJneG13NWVUNXFKMThzaTN1Zkx1ZkZkRnRmbE1MYVBwdVFyeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667945784),('j7XiXQ1oS2oQGmnkAeuktr4yDcIvo3ADA2cCBIoO',NULL,'59.83.208.105','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3dYcXk0RHloWmtOVjlWQll6U1ZNRkg2SnpuYUhTU3JEbDA0Q2xBQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L2FkbWluL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667921691),('jMH62RNz1TAhAkvuohjq6YnltyhuwUJm96QiS8Pa',NULL,'180.163.220.67','Mozilla/5.0 (Linux; U; Android 8.0.0; zh-cn; Mi Note 2 Build/OPR1.170623.032) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/10.1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoicFoyNXk1c1BhT1lteXFsUzREOXp4SDFZemFVbGg2N1RhcHR4N0kzSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667945766),('JwB5fBjvyixSTcWE0DFf8V1WgObVI8rNpEiXXvRu',NULL,'54.187.205.235','Stripe/1.0 (+https://stripe.com/docs/webhooks)','YToyOntzOjY6Il90b2tlbiI7czo0MDoiYWZvUWRXZndubFM2Skd5ZmVwRElhVklCR29iNTNlamhsTlpNNnB6MCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667923144),('kidKtlrtB4c701feH46l0VzymwHx3mOqTAedB2Gm',NULL,'220.196.160.144','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoibFhjbnJyRnNBWmhXQXdUSjlMRHFRS3M3Nlh2UHc5WUhqbWVRbnZQViI7czo3OiJtZXNzYWdlIjtzOjIzOiJZb3UgTmVlZCB0byBMb2dpbiBGaXJzdCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjI6e2k6MDtzOjc6Im1lc3NhZ2UiO2k6MTtzOjEwOiJhbGVydC10eXBlIjt9fXM6MTA6ImFsZXJ0LXR5cGUiO3M6NToiZXJyb3IiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUxOiJodHRwOi8vNDIuMTkzLjE4NS4yMTg6ODExNS91c2VyL2ludm9pY2VfZG93bmxvYWQvMTgiO319',1667921539),('LNV442zXbNG4sVcCfMsf1LF9FxtQZJMczuvccq8q',NULL,'180.101.245.251','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZk5YRnYzRGFTdHh5VXoyUjI5MnBmRjNSNlMzOUdNTWp5amQySkNXbiI7czo3OiJtZXNzYWdlIjtzOjIzOiJZb3UgTmVlZCB0byBMb2dpbiBGaXJzdCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjI6e2k6MDtzOjc6Im1lc3NhZ2UiO2k6MTtzOjEwOiJhbGVydC10eXBlIjt9fXM6MTA6ImFsZXJ0LXR5cGUiO3M6NToiZXJyb3IiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQwOiJodHRwOi8vNDIuMTkzLjE4NS4yMTg6ODExNS91c2VyL3dpc2hsaXN0Ijt9fQ==',1667935963),('m02APrlZQCXFUZBF4qzDHISsxHulmhovwviXrgSL',NULL,'54.187.216.72','Stripe/1.0 (+https://stripe.com/docs/webhooks)','YToyOntzOjY6Il90b2tlbiI7czo0MDoiOEpBeDdSeEVTZ3p5ejhjRVVUcVBkWVd3eFZuZTNUNW9GNk5KQlY1MyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667920044),('Mosw9UUfB8ED3jxI8kMnhoDkEyLBDm75ZDreMujs',NULL,'116.163.55.234','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoibTJnOXp4bUY5NTBHdVdjSkR5Vk96WXYyQUdCVXdzZ2duS1ZMNGh5VSI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCQzckJJalVFTkFqWFZYbThuOHFzdGZ1dms1d2sxdDliL0NJbjZjSGQydWpJNVI5MkRxVFQxQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTk6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L29yZGVycy9wZW5kaW5nL29yZGVycy9kZXRhaWxzLzE1Ijt9czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=',1667918337),('mt1ZWBUyivPPjx8lWWQL58x4YTqCv1kxBIpLE8bF',NULL,'220.196.160.117','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRXd1T0dZN0ZMRjFXWDdwVWhESWcwd0hXNjUxNUdhblZzVmRPNU5WVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTQ4OiJodHRwOi8vNDIuMTkzLjE4NS4yMTg6ODExNS9yZWNvbW1lbmQ/YnJhbmQ9YXBwbGUmY29sbGFwc2VGaXZlPTEmY29sbGFwc2VGb3VyPTEmY29sbGFwc2VTZWNvbmQ9MSZwcmljZV9yYW5nZT0xMCUyQzM1MDAmc29ydF9ieT1kZWZhdWx0JnVzYWdlPUJ1c2luZXNzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667928137),('ndcBHCdoS6x38DpO2W6SgZs70h7GK6HDvyhr7TP7',NULL,'220.196.160.83','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSVRkRDdIYkRUdG5pb291S2pvN3dTeWZyZXNtTlJTc3owRmFwYWIyMyI7czo3OiJtZXNzYWdlIjtzOjE4OiJQbGVhc2UgbG9naW4gZmlyc3QiO3M6NjoiX2ZsYXNoIjthOjI6e3M6MzoibmV3IjthOjA6e31zOjM6Im9sZCI7YToyOntpOjA7czo3OiJtZXNzYWdlIjtpOjE7czoxMDoiYWxlcnQtdHlwZSI7fX1zOjEwOiJhbGVydC10eXBlIjtzOjc6Indhcm5pbmciO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQzOiJodHRwOi8vNDIuMTkzLjE4NS4yMTg6ODExNS9wcm9kdWN0L2VkaXQvMjAwIjt9fQ==',1667922766),('nSoXYhorhAsH2GUzFB8NhrRs9GfCcKEWtxvqxto2',NULL,'220.196.160.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWm1pME5qQmJGb1JHQm9FY2Y4enBaY1NtYVozczNiVGNuQm5xcjBkWCI7czo3OiJtZXNzYWdlIjtzOjE4OiJQbGVhc2UgbG9naW4gZmlyc3QiO3M6NjoiX2ZsYXNoIjthOjI6e3M6MzoibmV3IjthOjA6e31zOjM6Im9sZCI7YToyOntpOjA7czo3OiJtZXNzYWdlIjtpOjE7czoxMDoiYWxlcnQtdHlwZSI7fX1zOjEwOiJhbGVydC10eXBlIjtzOjc6Indhcm5pbmciO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQzOiJodHRwOi8vNDIuMTkzLjE4NS4yMTg6ODExNS9wcm9kdWN0L2VkaXQvMTk3Ijt9fQ==',1667928378),('Ofi7JhPa7ia5zymaGLt1KQYyxGXsdJJ59murowAA',NULL,'220.196.160.151','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoicWY0RTJNZFptNFNRejJpenBOUVZSMDhTSmIzQ0twOExWV1BvenE0YSI7czo3OiJtZXNzYWdlIjtzOjE4OiJQbGVhc2UgbG9naW4gZmlyc3QiO3M6NjoiX2ZsYXNoIjthOjI6e3M6MzoibmV3IjthOjA6e31zOjM6Im9sZCI7YToyOntpOjA7czo3OiJtZXNzYWdlIjtpOjE7czoxMDoiYWxlcnQtdHlwZSI7fX1zOjEwOiJhbGVydC10eXBlIjtzOjc6Indhcm5pbmciO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQwOiJodHRwOi8vNDIuMTkzLjE4NS4yMTg6ODExNS9jYXRlZ29yeS92aWV3Ijt9fQ==',1667921690),('oQBtw8XlDKVH7qGE1c7xPjXYrKdpLlQ6J7orAFCS',NULL,'1.13.138.225','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoicGdyTEYxQ2thbHZNT0ZRaFR6MW5xMXM5UGM1NHlEMDRCTEF3U1A1NCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667921540),('PcVt4pZX3zBQ4XPxqRYNHqDPGYBqhyAIXfQ4OrFK',NULL,'180.101.244.16','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ0FxYWlxVjA1V21WVWs0YWV3Yms3aEpndzJIN09adm8zclhnNXV5NSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L3NoaXAtZ2V0L2FqYXg/aWQ9MTUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1667920956),('pwHK8BjNnnjMaC14pUoFnTYO5z4d0CgxeztL4x2n',NULL,'180.101.244.15','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNGF2aFBtcTd0amVaZ1h0MEdPSDR4Q3lQTHBNOEdTMVd4M1EzWHZrVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODM6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L21pbmljYXJ0L3Byb2R1Y3QtcmVtb3ZlL2VjNGU4YjY0ODQ3YjBlMmNlNGM4NzYzODQzZTg0NjY2Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667922726),('PYIZTE2e9zvNGXbXQqVxltHOXH3qjOWS9PPn556M',NULL,'1.13.139.243','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWmZBandHTWNuTTFWYmFoYlAydHgzRTV3QW9wMnVHS2xUZUx6NnEydyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667939904),('Qc9o8a2rfaz0SBLNeyp2fFswjrhGa3uQC7WmWvAs',NULL,'59.83.208.107','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoidXNFOVJYc2x6ajEzM0RvR0U2aXVORDd3bW9pcGdJNkNVZzIzSHhUUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODM6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L21pbmljYXJ0L3Byb2R1Y3QtcmVtb3ZlLzc1YjY5MDhlNGM0ZDJjYjZhNTIwMmM4MGE0YWZhZGNjIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667922500),('RIS8tl5JPcJjTjRKW1NAFZwCTAieI0o7shQy6l48',NULL,'180.101.245.248','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTTQzek5PbzFVWXFRUmRCbGF2dGpYd0E1REdFZFVGNUhOa0pqb1JsSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTY6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L3JlY29tbWVuZD9jYXRlZ29yeT1sYXB0b3Amb3M9V2luZG93cyZwcmljZV9yYW5nZT01MCUyQzE5OTkmdXNhZ2U9SG9tZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1667927666),('RYJZbOxYXN0zDtb9cGB3xszYszfXSuJ71w9eWXkk',NULL,'180.101.245.253','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmYwc3hDT0Y5aDNXMGVadmZsZVJudHBRNVVhcmZZelkzeWQ2Y3ZkOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODM6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L21pbmljYXJ0L3Byb2R1Y3QtcmVtb3ZlL2VjNGU4YjY0ODQ3YjBlMmNlNGM4NzYzODQzZTg0NjY2Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667922725),('s8P8Z2As7MG87cIoUcPvWBr0qf3CRm1TrJWHBYfg',NULL,'180.101.244.15','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiOThvNVpJc2YxWVc4dVZoM1V4WFpYMGJIQmh2ZHE5QWxJRUFQRG9GeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L3Byb2R1Y3Qvdmlldy9tb2RhbC8xMjciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1667922739),('Sbm1h13pnXZZqsSiG9c3p5wj7Ii9NdAsXQiFA74R',NULL,'180.163.220.4','Mozilla/5.0 (Linux; U; Android 8.0.0; zh-cn; Mi Note 2 Build/OPR1.170623.032) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/10.1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ1hZeEtDVEVYNGF1MXdLNjVwRGhMWWJpQ0tGSXVQM0dXempTNm9lNSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L2FkbWluL2xvZ2luIjt9fQ==',1667945771),('senruzWRH1t22uKkuOs1EvDCYz2Qh7JwrQ881Nnz',NULL,'1.13.140.116','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiN05aRFN2ZU9SdGQ2T0k5eWUyQ1pKUFR1WlVpTVB2djBoaWg1MG1JOCI7czo3OiJtZXNzYWdlIjtzOjIzOiJZb3UgTmVlZCB0byBMb2dpbiBGaXJzdCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjI6e2k6MDtzOjc6Im1lc3NhZ2UiO2k6MTtzOjEwOiJhbGVydC10eXBlIjt9fXM6MTA6ImFsZXJ0LXR5cGUiO3M6NToiZXJyb3IiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUyOiJodHRwOi8vNDIuMTkzLjE4NS4yMTg6ODExNS91c2VyL2ludm9pY2VfZG93bmxvYWQvJTIwIjt9fQ==',1667921539),('SYthQuRwtQ4YSMwfRN6C4nEeq8fBNFJ74fu6HlQa',NULL,'1.13.138.19','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiakR1VFJBSEh5Z0pVZGtuVUpZM2E2UGNia1Z5NDljNjF3Q09XV2E5eCI7czo3OiJtZXNzYWdlIjtzOjIzOiJZb3UgTmVlZCB0byBMb2dpbiBGaXJzdCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjI6e2k6MDtzOjc6Im1lc3NhZ2UiO2k6MTtzOjEwOiJhbGVydC10eXBlIjt9fXM6MTA6ImFsZXJ0LXR5cGUiO3M6NToiZXJyb3IiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ5OiJodHRwOi8vNDIuMTkzLjE4NS4yMTg6ODExNS91c2VyL3NoaXBwaW5nL2VkaXQvJTIwIjt9fQ==',1667920407),('trhsluHZSCG8uxeCScHp0BrXizFvotBIH6tDUmBg',NULL,'180.101.245.246','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWU9FM3NSM1ZwVHNDOWZiVGsyeXRwQTA1RDNTZ3FXTXE1Zm1OWGxobCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L2FkbWluL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667928378),('vxjezEdFO25apLJ8ndtAt73jXx4oQC3OxjE3LJs5',NULL,'220.196.160.75','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiYVRLZjFTWlBOR3RobmkzM3JpcktYbFV2c0xQWEtrcjcwZTBrQlE1cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667920407),('wdrNH9q5y5YEWP776JrRxSY86fbeoY3sGMpphpZk',NULL,'180.101.245.250','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiT0xBTmo4SHd5SmJ6d2M3R1JncjRhT09WMUl4QlNITzU5STRXbGZXMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTQzOiJodHRwOi8vNDIuMTkzLjE4NS4yMTg6ODExNS9zaG9wP2NvbGxhcHNlRml2ZT0xJmNvbGxhcHNlT25lPTEmY29sbGFwc2VTZWNvbmQ9MSZjb2xsYXBzZVRoaXJkPTEmb3M9TWFjJTIwT1MmcHJpY2VfcmFuZ2U9MTAlMkMzNTAwJnNvcnRfYnk9ZGVmYXVsdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1667920272),('wGlgUvomAsrWLmWOWeegn42k8PuiYLDwqnMSfGS5',NULL,'116.163.55.234','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQktUdEJYUW5NRkROQWlBVjNNTlQ4MmxtdnZKZzljZHVoQTlhRG91byI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1Ijt9czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=',1667958945),('x2SnHGTHoO5XYjDOtAiDycFaoGz41r7osGfjEWSy',NULL,'220.196.160.95','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQVdKd0k0anpPbkJYQkFBUlZYdzl4M2RtOEtoWDF5Qk4waktvQWE1RyI7czo3OiJtZXNzYWdlIjtzOjIzOiJZb3UgTmVlZCB0byBMb2dpbiBGaXJzdCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjI6e2k6MDtzOjc6Im1lc3NhZ2UiO2k6MTtzOjEwOiJhbGVydC10eXBlIjt9fXM6MTA6ImFsZXJ0LXR5cGUiO3M6NToiZXJyb3IiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUxOiJodHRwOi8vNDIuMTkzLjE4NS4yMTg6ODExNS91c2VyL2ludm9pY2VfZG93bmxvYWQvMTkiO319',1667939903),('Xua8SGWhoJeUSPk3go6sGpxqxeulW6QZz0K43FDk',NULL,'220.196.160.154','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ0Fxdkp6Q0cwdnI4RHFuYnU5Tkt0Z1IzdjdkNUNtdGZJd3o2QjZFVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667935963),('Y6wm0mIOZ5LjiZzapSeWAiaj7wAvFQQavsKsK9d5',NULL,'220.196.160.124','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoicGdSV0kzRzhpbnVsYlhObk5BUXZSeG5ndnczM2JMaHpuOEhUQ0pyQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODM6Imh0dHA6Ly80Mi4xOTMuMTg1LjIxODo4MTE1L21pbmljYXJ0L3Byb2R1Y3QtcmVtb3ZlLzc1YjY5MDhlNGM0ZDJjYjZhNTIwMmM4MGE0YWZhZGNjIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667922500),('YbDHmWasNMYm07MERlMeUK9QJt8BiSCU9QkraIsM',NULL,'54.187.205.235','Stripe/1.0 (+https://stripe.com/docs/webhooks)','YToyOntzOjY6Il90b2tlbiI7czo0MDoiUDZsUkVDNWtuOVFGM0l1QU42enFqQmVTdmJkOWVWOEhORHpIbUw0TiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1667922575);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ship_districts`
--

DROP TABLE IF EXISTS `ship_districts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ship_districts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `division_id` bigint(20) unsigned NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ship_districts`
--

LOCK TABLES `ship_districts` WRITE;
/*!40000 ALTER TABLE `ship_districts` DISABLE KEYS */;
INSERT INTO `ship_districts` VALUES (1,1,'Gazipur','2021-03-09 13:14:54',NULL),(2,1,'Faridpur','2021-03-09 13:15:23',NULL),(3,2,'Rangamati','2021-03-09 13:15:40',NULL),(4,8,'Feni333','2021-03-09 13:30:35','2021-03-09 13:30:35'),(5,1,'Rajbari','2021-03-09 13:16:02',NULL);
/*!40000 ALTER TABLE `ship_districts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ship_divisions`
--

DROP TABLE IF EXISTS `ship_divisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ship_divisions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `division_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ship_divisions`
--

LOCK TABLES `ship_divisions` WRITE;
/*!40000 ALTER TABLE `ship_divisions` DISABLE KEYS */;
INSERT INTO `ship_divisions` VALUES (1,'Dhaka','2021-03-03 16:34:42',NULL),(2,'Chittagong','2021-03-03 16:34:52',NULL),(4,'Mymensingh','2021-03-09 12:15:33',NULL),(5,'Khulna','2021-03-09 12:15:39',NULL),(6,'Rajshahi','2021-03-09 12:15:45',NULL),(7,'Rangpur','2021-03-09 12:15:51',NULL),(8,'Sylhet','2021-03-09 12:15:55',NULL);
/*!40000 ALTER TABLE `ship_divisions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ship_provinces`
--

DROP TABLE IF EXISTS `ship_provinces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ship_provinces` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `province_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` decimal(6,2) unsigned NOT NULL DEFAULT 100.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ship_provinces`
--

LOCK TABLES `ship_provinces` WRITE;
/*!40000 ALTER TABLE `ship_provinces` DISABLE KEYS */;
INSERT INTO `ship_provinces` VALUES (9,'Alberta',5.00,NULL,NULL),(10,'British Columbia',12.00,NULL,NULL),(11,'Manitoba',12.00,NULL,NULL),(12,'New Brunswick',15.00,NULL,NULL),(13,'Newfoundland and Labrador',15.00,NULL,NULL),(14,'Northwest Territories',5.00,NULL,NULL),(15,'Nova Scotia',15.00,NULL,NULL),(16,'Nunavut',5.00,NULL,NULL),(17,'Ontario',13.00,NULL,NULL),(18,'Prince Edward Island',15.00,NULL,NULL),(19,'Quebec',14.98,NULL,NULL),(20,'Saskatchewan',11.00,NULL,NULL),(21,'Yukon',5.00,NULL,NULL);
/*!40000 ALTER TABLE `ship_provinces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ship_states`
--

DROP TABLE IF EXISTS `ship_states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ship_states` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `division_id` bigint(20) unsigned NOT NULL,
  `district_id` bigint(20) unsigned NOT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ship_states`
--

LOCK TABLES `ship_states` WRITE;
/*!40000 ALTER TABLE `ship_states` DISABLE KEYS */;
INSERT INTO `ship_states` VALUES (1,1,1,'Sreepur','2021-03-09 14:06:53',NULL),(2,5,2,'Bhanga4444','2021-03-09 14:24:05','2021-03-09 14:24:05'),(3,1,5,'Mohonpur','2021-03-09 14:08:05',NULL);
/*!40000 ALTER TABLE `ship_states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shipping_address`
--

DROP TABLE IF EXISTS `shipping_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shipping_address` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shipping_address`
--

LOCK TABLES `shipping_address` WRITE;
/*!40000 ALTER TABLE `shipping_address` DISABLE KEYS */;
INSERT INTO `shipping_address` VALUES (3,1,'aa','bb','dd','ee','ff','city','11','cc','Z5Z 6Z6','2022-11-07 06:30:42','2022-11-07 06:30:42'),(4,1,'first_name','last_name','Company','address','apt','city','14','15346','A1A 1A2','2022-11-07 06:33:18','2022-11-07 06:33:18'),(8,1,'first_name3','last_name','Company','address','apt','city','14','15346','A1A 1A2','2022-11-07 06:33:18','2022-11-07 06:33:18'),(9,1,'first_name4','last_name','Company','address','apt','city','14','15346','A1A 1A2','2022-11-07 06:33:18','2022-11-07 06:33:18'),(10,1,'first_name5','last_name','Company','address','apt','city','14','15346','A1A 1A2','2022-11-07 06:33:18','2022-11-07 06:33:18'),(11,1,'first_name6','last_name','Company','address','apt','city','14','15346','A1A 1A2','2022-11-07 06:33:18','2022-11-07 06:33:18'),(13,1,'first_name8','last_name','Company','address','apt','city','14','15346','A1A 1A2','2022-11-07 06:33:18','2022-11-07 06:33:18'),(14,1,'first_name9','last_name','Company','address','apt','city','14','15346','A1A 1A2','2022-11-07 06:33:18','2022-11-07 06:33:18'),(15,1,'Frank','F','','770 Bay','','Toronto','9','647-762-7966','M5V 1M8','2022-11-08 07:10:02','2022-11-08 07:10:02');
/*!40000 ALTER TABLE `shipping_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_settings`
--

DROP TABLE IF EXISTS `site_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_settings`
--

LOCK TABLES `site_settings` WRITE;
/*!40000 ALTER TABLE `site_settings` DISABLE KEYS */;
INSERT INTO `site_settings` VALUES (1,'upload/logo/1745921970519783.jpg','647- 656 8931',NULL,'Support@bestchoice.com','377325 Yonge St, Toronto, ON     L4P 0E8','Anytown, CA 12345 USA','https://www.facebook.com/ele','https://twitter.com/ele','https://www.linkedin.com/ele','https://www.youtube.com/ele',NULL,'2022-10-06 06:04:08');
/*!40000 ALTER TABLE `site_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slider_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (1,'upload/slider/1745946608161568.jpg',NULL,NULL,1,NULL,'2022-10-06 05:58:22'),(2,'upload/slider/1745946616461043.jpg',NULL,NULL,1,NULL,'2022-10-06 05:58:26'),(4,'upload/slider/1745946623872583.jpg',NULL,NULL,1,NULL,'2022-10-06 05:58:32');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_categories`
--

DROP TABLE IF EXISTS `sub_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_name_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_categories`
--

LOCK TABLES `sub_categories` WRITE;
/*!40000 ALTER TABLE `sub_categories` DISABLE KEYS */;
INSERT INTO `sub_categories` VALUES (11,8,'Computer Peripherals','कंप्यूटर परिधीय','computer-peripherals','कंप्यूटर-परिधीय',NULL,NULL),(12,8,'Mobile Accessory','मोबाइल एक्सेसरी','mobile-accessory','मोबाइल-एक्सेसरी',NULL,NULL),(13,8,'Gaming','गेमिंग','gaming','गेमिंग',NULL,NULL),(17,10,'Televisions','टेलीविजन','televisions','टेलीविजन',NULL,NULL),(18,10,'Washing Machines','वाशिंग मशीन','washing-machines','वाशिंग-मशीन',NULL,NULL),(19,10,'Refrigerators','रेफ्रिजरेटर','refrigerators','रेफ्रिजरेटर',NULL,NULL);
/*!40000 ALTER TABLE `sub_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_sub_categories`
--

DROP TABLE IF EXISTS `sub_sub_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_sub_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_name_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_sub_categories`
--

LOCK TABLES `sub_sub_categories` WRITE;
/*!40000 ALTER TABLE `sub_sub_categories` DISABLE KEYS */;
INSERT INTO `sub_sub_categories` VALUES (22,8,11,'Printers','प्रिंटर','printers','प्रिंटर',NULL,NULL),(23,8,11,'Monitors','मॉनिटर्स','monitors','मॉनिटर्स',NULL,NULL),(24,8,11,'Projectors','प्रोजेक्टर','projectors','प्रोजेक्टर',NULL,NULL),(25,8,12,'Plain Cases','सादे मामले','plain-cases','सादे-मामले',NULL,NULL),(26,8,12,'Designer Cases','डिजाइनर मामले','designer-cases','डिजाइनर-मामले',NULL,NULL),(27,8,12,'Screen Guards','स्क्रीन गार्ड','screen-guards','स्क्रीन-गार्ड',NULL,NULL),(28,8,13,'Gaming Mouse','गेमिंग माउस','gaming-mouse','गेमिंग-माउस',NULL,NULL),(29,8,13,'Gaming Keyboars','गेमिंग कीबार','gaming-keyboars','गेमिंग-कीबार',NULL,NULL),(30,8,13,'Gaming Mousepads','गेमिंग माउसपैड','gaming-mousepads','गेमिंग-माउसपैड',NULL,NULL),(40,10,17,'Big Screen TVs','बिग स्क्रीन टीवी','big-screen-tvs','बिग-स्क्रीन-टीवी',NULL,NULL),(41,10,17,'Smart TVs','स्मार्ट टीवी','smart-tvs','स्मार्ट-टीवी',NULL,NULL),(42,10,17,'OLED TVs','ओएलईडी टीवी','oled-tvs','ओएलईडी-टीवी',NULL,NULL),(43,10,18,'Washer Dryers','वॉशर ड्रायर','washer-dryers','वॉशर-ड्रायर',NULL,NULL),(44,10,18,'Washer Only','वॉशर ओनली','washer-only','वॉशर-ओनली',NULL,NULL),(45,10,18,'Energy Efficient','ऊर्जा कुशल','energy-efficient','ऊर्जा-कुशल',NULL,NULL),(46,10,19,'Single Door','एकल दरवाजा','single-door','एकल-दरवाजा',NULL,NULL),(47,10,19,'Double Door','डबल डोर','double-door','डबल-डोर',NULL,NULL),(48,10,19,'Mini Rerigerators','मिनी रेयरिगरेटर्स','mini-rerigerators','मिनी-रेयरिगरेटर्स',NULL,NULL);
/*!40000 ALTER TABLE `sub_sub_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_seen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'user11','user@gmail.com','232323233','2022-11-08 15:59:08',NULL,'$2y$10$3rBIjUENAjXVXm8n8qstfuvk5wk1t9b/CIn6cHd2ujI5R92DqTT1C',NULL,NULL,'BHOyrJg7pAmXgEC5dHjYPJIDBR9OUYdCv27n1nUsqtZzcMEtvuK2n21ecBrc',NULL,'202102072204download.jpg','2021-02-02 14:54:02','2022-11-08 07:59:08',NULL),(2,'Kazi Ariyan','ariyan@gmail.com','2983923892222',NULL,NULL,'$2y$10$MExaejZQX4NtGPhetUYXM.pznu.qFlIEDTDltM0aYXS5jmd4wgev2',NULL,NULL,'d41vViPTDlet10gfPHureVsIH8C8aDnEtFX0CJ5Fj6rGLbrLYr9TOg8Ew0jq',NULL,'202102072202ariyan.jpg','2021-02-07 13:54:27','2022-11-02 09:34:29','2022-11-02 09:34:29'),(3,'aaa','aaa@aaa.com',NULL,NULL,NULL,'$2y$10$.Y5NPC5kghfQaIS11SjWguJgAQKs7f5Q1pmGA2WmjMV0nnBqlH2uC',NULL,NULL,NULL,NULL,NULL,'2022-10-23 09:12:45','2022-10-23 09:12:45',NULL),(4,'aaa2','aaa2@aaa.com',NULL,'2022-10-23 17:22:23',NULL,'$2y$10$M2GkiU06f6sgcv1ZFztnIedtb1FyM8x/AhOtdifyPlxJcHHscr9Ha',NULL,NULL,NULL,NULL,'20221023172022.jpeg','2022-10-23 09:16:02','2022-10-23 09:22:23',NULL),(5,'yxz','526263611@qq.com',NULL,'2022-10-24 14:39:39',NULL,'$2y$10$301jtkk7bonoWCNKrWNFTeVo2gKWnJW7ifnnv0/3ib/3YRBHiuyIy',NULL,NULL,'Crj0fLnKHVADDyjHeknLCl09gyTE7LDwxfqHzHqTKUMydJUYWBYhlNnA2l0g',NULL,NULL,'2022-10-24 06:13:38','2022-10-24 09:03:35',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wishlists`
--

DROP TABLE IF EXISTS `wishlists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wishlists` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wishlists`
--

LOCK TABLES `wishlists` WRITE;
/*!40000 ALTER TABLE `wishlists` DISABLE KEYS */;
INSERT INTO `wishlists` VALUES (14,1,12,'2021-04-11 16:06:02',NULL),(15,1,200,'2022-11-02 07:10:45',NULL),(18,1,133,'2022-11-03 08:08:33',NULL),(19,1,130,'2022-11-03 08:08:37',NULL),(20,1,203,'2022-11-04 15:12:40',NULL),(21,1,126,'2022-11-04 15:12:56',NULL),(23,1,201,'2022-11-07 14:31:33',NULL);
/*!40000 ALTER TABLE `wishlists` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-09 11:16:38
