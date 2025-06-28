-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2023 at 10:30 AM
-- Server version: 10.3.38-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 8.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knowledgekingdom`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievers`
--

CREATE TABLE `achievers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievers`
--

INSERT INTO `achievers` (`id`, `name`, `image`, `address`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Naman Shrivastava', 'public/image/admin/achievers/nLbqe90EZ504kVY5ZddblECQVCKZLg0yqKgXnl81.jpg', 'Sheffield Hallam University, UK', '1', '2023-07-04 06:28:37', '2023-07-09 23:41:31'),
(3, 'Rohan Parashar', 'public/image/admin/achievers/FHa5a70aQUbJVbb8N7Ww4biJQ8H9UyhJKaNmMfW1.jpg', 'University of Liverpool, United Kingdom', '1', '2023-07-04 06:29:18', '2023-07-09 23:42:00'),
(4, 'Ketan Singh Parihar', 'public/image/admin/achievers/4irbIhPK159SMNI8RdWo0guhi0Sx41PHcMEx8MKt.jpg', 'University College Dublin, Ireland', '1', '2023-07-04 06:29:57', '2023-07-09 23:42:31'),
(5, 'Ram Kishore Baghel', 'public/image/admin/achievers/ZFOQJoyp3nXYvEcgxW18E2lHGA3gO4tA4YwdW6fa.jpg', 'Bangor University, UK', '1', '2023-07-04 06:30:34', '2023-07-09 23:43:05'),
(6, 'Ikram Shakeel', 'public/image/admin/achievers/suJsZnplK8wMXPRBEGvpiJePzicpKA8ilKzbJVt2.jpg', 'Arden University, Germany', '1', '2023-07-04 06:35:02', '2023-07-09 23:43:37'),
(7, 'Chris George', 'public/image/admin/achievers/lUGXXKk0pr0xbnr0Dg5h7uuA1jmFApi07xv4hydd.jpg', 'Trinity Western University, Canada', '1', '2023-07-04 06:35:42', '2023-07-09 23:44:03'),
(8, 'Simran Raghuwanshi', 'public/image/admin/achievers/j0dK25W05ynr3Pc7g2wBvCXf9ZOKIIFaL32gvv9D.jpg', 'National College of Ireland, Ireland', '1', '2023-07-04 06:36:43', '2023-07-09 23:44:33'),
(9, 'Raghvendra Singh Thakur', 'public/image/admin/achievers/TYHI94x3KwFx6qsvX15bROUoQ2ESMRsSBWQAc1EM.jpg', 'Leeds Beckett University, UK', '1', '2023-07-09 23:46:48', '2023-07-09 23:46:48'),
(10, 'Gaurav Debnath', 'public/image/admin/achievers/RsjzHQeYnWZ8Fw0V01g8ktFo8eMiUhJPCuRLpBH8.jpg', 'San Jose State University, USA', '1', '2023-07-09 23:47:18', '2023-07-09 23:47:18'),
(11, 'Shailendra Patel', 'public/image/admin/achievers/lv8x5KUvD8KzraYEjX7lXsncYiiwfovpUHpiqMeE.jpg', 'Dublin Business School, Ireland', '1', '2023-07-09 23:48:12', '2023-07-09 23:48:12'),
(12, 'Shivika Gupta', 'public/image/admin/achievers/Fl24MGsIUPlhjisbh8Jw643nzUO9RnVnFuQOR5L1.jpg', 'Dublin Business School, Ireland', '1', '2023-07-09 23:49:04', '2023-07-09 23:49:04'),
(13, 'Gautam Kumar', 'public/image/admin/achievers/PuE413D1f06pS3cAPRZVs2YcRTfy8kk4eOOWLvHL.jpg', 'Dublin Business School, Ireland', '1', '2023-07-09 23:49:29', '2023-07-09 23:49:29'),
(14, 'Robin Thomas', 'public/image/admin/achievers/hcgmTtmxRIjVrgKDW7CX5uYxT5NPQX9hr62VKyV5.jpg', 'Trinity College Dublin, Ireland', '1', '2023-07-09 23:49:58', '2023-07-09 23:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `admin_image` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `admin_image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'knowledgekingdom01@gmail.com', 'public/image/admin/admin-profile/rMg5amnkFcoBl6wAOFAASfuKJcp85Ygjfzuqyycc.png', NULL, '$2y$10$PvoW1e.9e4hOQJ5XaZEYAeSPZMskD.XfG5zPhfNhYEeiULY9COobq', 'jnZaGXH7rplZgUgWsYzjviAUB6M8EuxzMScG3RDwtSAKFSB6aPpVp2SihA9h', NULL, '2023-09-23 11:14:15');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `banner` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` text NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_descripation` text DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `banner`, `description`, `date`, `meta_title`, `meta_descripation`, `meta_keyword`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Study in Canada: All you need to Know.', 'study-in-canada-all-you-need-to-know', 'public/image/admin/blog/3Gd3otK6cPYr7magejKoAzikf5Tyt5AUVctHFCGO.jpg', '<p><strong>Planning to study abroad, but not sure where?</strong></p>\r\n\r\n<p>Well, you have come to the best place. Canada is the best place for you to study abroad.</p>\r\n\r\n<p>Why? In this article, we will list all the reasons to prove why Canada is the best place to study abroad.</p>\r\n\r\n<p>With a range of glacial peaks, ice peaks, green vegetation and scenic wonders for students to experience new scenery. Every academic year, approx lakhs of students apply to various Canadian colleges and universities to pursue masters and doctorate course. The Canadian education system is almost the same as the American education system is the major reason for being famous among Indian students.</p>\r\n\r\n<p><strong>Why pursue Higher studies in Canada?</strong></p>\r\n\r\n<p>With a class of living, education system and cost of education, Canada is considered the most sought after country to study Higher studies abroad.</p>\r\n\r\n<p>Below are the reasons to consider Canada amongst other nations.</p>\r\n\r\n<hr />\r\n<p><strong>The Beauty</strong></p>\r\n\r\n<p>Enjoying the best scenery of winter and fall, Canada is famous for its breath-taking views complimented by skyscrapers. A Developed country with growing high income and successful democracy, making it an ideal place for a foreign student to study.</p>\r\n\r\n<hr />\r\n<p><strong>Work while you study</strong></p>\r\n\r\n<p>As an international student in Canada, it gets tough on your finances to manage tuition and living expense. To support, the Canadian government and Universities has enabled working part-time 20 hours per week and 40 hours during holidays. There are even universities and colleges offering an on-campus internship to relieve the burden. You can directly work under companies as paid interns and gain practical knowledge. You can also work as a teacher, taxi driver or even a chef.</p>\r\n\r\n<hr />\r\n<p><strong>Scholarship and Visa</strong></p>\r\n\r\n<p>Canadian universities and colleges offer tons of scholarships for students. A degree from Canadian Universities is equivalent to one from the USA and any other European country in consideration. To top that, the government work to help students living low-cost by providing subsidies.</p>\r\n\r\n<p>Also, Canada gives 3 years of post-work visa for a 2-year study program. Meanwhile, you just have to get a full-time job in any field and you could apply for Permanent residency post the work visa.</p>\r\n\r\n<hr />\r\n<p><strong>Safety and Racism</strong></p>\r\n\r\n<p>Racism is one of the biggest struggles students around the world are facing. Canada is one of the countries where students can freely go and live without the fear of it. Canada is known for its diverse population.</p>\r\n\r\n<p>Apart from that, Canada is one of the countries with the local crime rate. The Canadian government works with other nations embassies to ensure safety and support for International students.</p>\r\n\r\n<hr />\r\n<p><strong>Selective Options</strong></p>\r\n\r\n<p>Students aspiring to study in Canada have a selective offer to choose between College or University. Where Universities offer Masters and Bachelors Degree course, colleges only give diploma courses for both Bachelors and Masters specialization. In Universities, you will get the entire degree of a particular field, for instance- Masters in Mechanical Engineering. Whereas in colleges you have to choose from a wide range of specialization from any field, for example- Certification program in Machine Design (a sub-specialization of Mechanical engineering).</p>\r\n\r\n<p>Budget and Course duration also varies in both the options.</p>\r\n\r\n<hr />\r\n<p><strong>Below is the list of few Universities and colleges in Canada which are affordable yet easy to get i</strong>n-</p>\r\n\r\n<ul>\r\n	<li>York University</li>\r\n	<li>Dalhousie University</li>\r\n	<li>University of Regina</li>\r\n	<li>University of Canada West</li>\r\n	<li>Vancouver Island University</li>\r\n	<li>Fanshawe College</li>\r\n	<li>Niagara College</li>\r\n	<li>Seneca College</li>\r\n	<li>Sheridan College</li>\r\n</ul>', '2023-07-08', NULL, NULL, NULL, 1, '2023-07-08 07:29:51', '2023-07-10 05:49:53'),
(3, 'Why Masters in the UK is the best choice?', 'why-masters-in-the-uk-is-the-best-choice', 'public/image/admin/blog/bM8EZjcSJV1DQR8BkWgAEWmJ8EXdoTDJ6DWns4uD.jpg', '<p>United Kingdom- Famous for its rich culture and art, has been one of the favourite destinations amongst Indian youth for quite a long time. Its rich history linked to around the world has been an attractor for the world.</p>\r\n\r\n<p>Any undergrad looking for global education and want to acquire quality education might consider the United kingdom the best option as it offers cheaper education and world-renowned universities.</p>\r\n\r\n<p>Here are some compelling reasons one should consider that no one tells you:</p>\r\n\r\n<p>Short term courses</p>\r\n\r\n<p>As compared to the USA and Canada, Uk hosts courses which are short term and are world recognized. So two years of a Masters degree in America will be equal to one year&#39;s master&#39;s program in the UK. Some eligibility criteria might alter but that is to compensate for one year&#39;s course. This will help you save your money on tuition fees but time to reach the desired job for which you are taking the course.</p>\r\n\r\n<hr />\r\n<p><strong>Part-Time Job</strong></p>\r\n\r\n<p>Most Universities in the USA do not allow the students to work off-campus during the first semester of the course. Why is it a setback, one may question? On-campus, jobs are difficult to get as the crowd is big and jobs are less. However, in the UK, you can get permission to work part-time from the very beginning of the course initiation. Many students even go a week or month prior just to save some chunks of money before the course commences.</p>\r\n\r\n<p>Even in some cases, Universities have student counsel which helps students get a part-time job and accommodation during the orientation program. This contributes to a welcoming nature, the UK is famous among students.</p>\r\n\r\n<p>As per the Student Policy, an international student can work 20 hours per week part-time and 40 hours per week during the semester break.</p>\r\n\r\n<hr />\r\n<p><strong>Health care for Students</strong></p>\r\n\r\n<p>Europe is famous for its world-class health care facilities. Whether it&#39;s France, Spain or any other European member. Apart from Medical Insurance, you have to take as a student, there are many other facilities the UK gives to its guest students. As an International Undergrad student, you will have access to the health care facility of the UK government. You will have the leverage of getting free medical assistance in case of emergency while studying through the National Health Services (NHS).</p>\r\n\r\n<p>To avail that service there would be some formalities you have to take care of and pay a small amount to International health surcharge (IHS).</p>\r\n\r\n<p>To get detailed information contact Knowledge Kingdom counsellors.</p>\r\n\r\n<hr />\r\n<p><strong>Travel, Travel, Travel!</strong></p>\r\n\r\n<p>COVID-19 breakdown might have broken the backbone of tourism around the world, but European countries are bringing new and effective ways to eradicate the hurdles while keeping the safety of people first.</p>\r\n\r\n<p>The UK is in short reach to almost all major travel destinations. Be it France or Spain or Germany. Take a train or a flight and get away from studies for a quick weekend break. The distance might be from 400 to 1200 kilometres and to be honest living in a vast country like India we are already used to long travels like these. You can travel and make memories while studying the country.</p>\r\n\r\n<hr />\r\n<p><strong>Financial Freedom</strong></p>\r\n\r\n<p>British universities are always in favour of helping bright minds. They have multiple scholarships, bursaries and grants to help students lessen the burden of tuition fees. Also because the courses are of short duration, so saves a lot of money from tuition fees.</p>\r\n\r\n<p>Even before the university initiates the fee submission for Visa, they give some per cent of fees waiver based on the student profile.</p>\r\n\r\n<p>The UK is considered the best among the top countries around the world, But most of the universities prefer a partnership with the local consultants to help students get to them.</p>\r\n\r\n<p>The Knowledge Kingdom is one of the counsellors in Bhopal helping students from past 10+ years pursue their higher studies in their dream universities and that too free. Need help, request a callback.</p>', '2023-07-08', NULL, NULL, NULL, 1, '2023-07-08 07:30:54', '2023-07-10 05:50:06'),
(4, 'Common IELTS Mistake and How to avoid them?', 'common-ielts-mistake-and-how-to-avoid-them', 'public/image/admin/blog/05jNnXehW41yYHr9H0IPCmhPoLa0OXjEqzd9eClL.jpg', '<p>We are Human beings, and we are bound to make mistakes. Mistakes are a natural part of our life. It helps us grow and learn what not to do next. However, while attempting the IELTS examination, every mistake we make takes away our points, and each point is valuable if we want to get into our dream university. By losing marks, you lose your chance of getting admissions(and we do not want that)!</p>\r\n\r\n<p>So we take the Mock Test!</p>\r\n\r\n<p>The main motive of the mock test is to test your thinking, writing and listening abilities under the time boundation, to make it as stressful as a test can get. To maintain the same mindset at the test centre as in your home, we try to mock the same scenario, But eventually, our mind is aware of the fact that it is in a safe space. So to make it easy for you, in this article, we are listing five common mistakes which the majority of students make in an IELTS examination from which you could take a lesson and strategize to avoid them.</p>\r\n\r\n<hr />\r\n<p>Spelling mistakes and Vocabulary stuffing-</p>\r\n\r\n<p>Spelling, Grammar and tone of the sentences are the first thing that is noticed. Spelling mistakes have to be avoided at any cost. If you are not sure of any word spelling, do not use it. Try using its synonym that is easy to write, or try to change the sentence. Most&nbsp;<strong>IMPORTANTLY-</strong>&nbsp;Review your answers before moving on to next.</p>\r\n\r\n<p>Moreover, Most people try to use a lot of fancy words which sometimes do not even fit in with the scenario depicted by the writer. Try using Vocabulary is limit, whereas minimal use of Vocabulary will raise questions on your abilities. Try to find your perfect balance and stick to that in the exam.</p>\r\n\r\n<hr />\r\n<p>Time and its management-</p>\r\n\r\n<p>Time is the most crucial aspect of the IELTS exam. Most people do not attempt mock tests in time limit and end up submitting the paper incomplete and panicking. Remember, Always practice in the time boundation. It will enhance your ability to think quicker and smarter.</p>\r\n\r\n<p>It is essential to mark time for every question and prepare a strategy for it. You do not want to waste time on a doubtful question and end-up leaving an answer which you are proficient in. Time is the essence!</p>\r\n\r\n<p><strong>Special Tip-</strong>&nbsp;Skip the question if it seems difficult to answer and move to the next one. Come back again on it and you will have time to think.</p>\r\n\r\n<hr />\r\n<p>Mispronunciation and Fumble-</p>\r\n\r\n<p>IELTS exams are created in such a way that it tests a student&#39;s ability to understand the local language of any English speaking country. So, consequently, they would be using a lot of accents and would expect that you respectively pronounce the word they are meant to be. More importantly, it will not cause you loss of points but may cause confusion, which might lose you points.</p>\r\n\r\n<p><strong>Special Tip-&nbsp;</strong>Try practising speaking with a friend or in front of a mirror. Even if the other person is not willing to participate. This will help you gain confidence in public speaking, which is most important for avoiding mispronunciation.</p>\r\n\r\n<hr />\r\n<p>Losing Focus and Panicking-</p>\r\n\r\n<p>Focus is the key in the listening and speaking section. Most students lose their focus in the listening section and start panicking, eventually ruining the entire section of the listening test. If you lose focus, try to find the next possible phrase said by the voice and continue rather than predicting the previous answers.</p>\r\n\r\n<p><strong>Special Tip-&nbsp;</strong>Try reading Biographies and classic literature. They will help you gain hold of your focus. Read at least 50 pages daily if you are a beginner.</p>\r\n\r\n<hr />\r\n<p>Transition in the sentence-</p>\r\n\r\n<p>This applies to both speaking and writing. Your words and sentences should be in flow with professionalism in tone. There should not be fragmented sentences.</p>\r\n\r\n<p>While speaking, try to be slow rather than speaking quickly and then taking a long pause. Try engaging with the test taker, making it a conversation.</p>\r\n\r\n<p>While writing, try to be more engaging. As mentioned in the previous section. Reading Novels can be helpful. Try writing down your thoughts and what you did throughout the day as a daily practice. This will help! Try to learn local slang and jokes are generally used in every country. This will make an impression.</p>\r\n\r\n<p><strong>Special Tip-&nbsp;</strong>Try watching English news channels or International English Television series.</p>', '2023-07-10', NULL, NULL, NULL, 1, '2023-07-09 23:53:13', '2023-07-10 05:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `bussiness_settings`
--

CREATE TABLE `bussiness_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `email_1` varchar(255) DEFAULT NULL,
  `email_2` varchar(255) DEFAULT NULL,
  `phone_1` varchar(255) DEFAULT NULL,
  `phone_2` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `map` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bussiness_settings`
--

INSERT INTO `bussiness_settings` (`id`, `site_name`, `favicon`, `logo`, `email_1`, `email_2`, `phone_1`, `phone_2`, `address`, `map`, `facebook`, `twitter`, `instagram`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'Knowledge Kingdom', 'public/image/admin/bussiness-setting/Vvswbse0qQ1zoGaX0ubIwWXEyo32GYZUgm86a46A.png', 'public/image/admin/bussiness-setting/XrPcbO3YXtSC35tD7yhrz9RWnFyaq5w4oXBhq4dP.jpg', 'knowledgekingdom01@gmail.com', 'knowledgekingdom01@gmail.com', '+91 9893484938', '9340419025', '8-A, First Floor, Metro Plaza, Bittan Market, E-5, Arera Colony, Bhopal, Madhya Pradesh- 462016', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29333.686136702865!2d77.429991!3d23.217209!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c4256dc0c8381%3A0x3454ec19d7b087c!2sKnowledge%20Kingdom%20-%20Study%20Abroad%20Consultants%20in%20Bhopal!5e0!3m2!1sen!2s', 'https://www.facebook.com/', 'https://twitter.com/i/flow/login?redirect_after_login=%2Flogin', 'https://www.instagram.com/', 'https://in.linkedin.com/?original_referer=https%3A%2F%2Fwww.google.com%2F', NULL, '2023-07-17 06:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `coachings`
--

CREATE TABLE `coachings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `logo` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` text NOT NULL,
  `exam_detail` text NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_descripation` text DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coachings`
--

INSERT INTO `coachings` (`id`, `title`, `slug`, `logo`, `image`, `short_desc`, `exam_detail`, `meta_title`, `meta_descripation`, `meta_keyword`, `status`, `created_at`, `updated_at`) VALUES
(4, 'IELTS Coaching Bhopal', 'ielts-coaching-bhopal', 'public/image/admin/coachings/g1yeFcQLXVs2MMN7nqk6BsVYMfqMecHIvt1Yfv0g.png', 'public/image/admin/coachings/Z42HGoAZyMWTzXxW7mDxkzh6eBhInsvpf7KkXUCl.jpg', '<p><strong>International English Language Testing System</strong></p>\r\n\r\n<p>International English Language Testing System tests the complete range of English language skills. It is a paper based test for English aptitude at any level for foreign universities. This exam is conducted worldwide by British Council, UK, and IDP, Australia. IELTS test Classes in Bhopal are available in two formats academic and general. For admissions to educational Institutions, an academic module is required and the general module is for immigration. It is an internationally-recognized system for testing English language skills in listening, reading, writing and speaking.</p>', '<ul>\r\n	<li>Total Time - 2hrs 45mins</li>\r\n	<li>Reading Section: 3 Sections, Time Allotted – 20 mins. for each section</li>\r\n	<li>Listening Section: 4 Section, Time Allotted – 30 mins</li>\r\n	<li>Speaking Section: 11 to 15 mins</li>\r\n	<li>Writing Section: 2 Sections, Time Allotted – 20 mins for one section and 40 mins for other section</li>\r\n	<li>IELTS is out of 9.0 bands</li>\r\n	<li>Fees Structure : Rs. 7000/-</li>\r\n	<li>Duration : 3 Month</li>\r\n</ul>', 'IELTS Coaching Bhopal', 'IELTS Coaching Bhopal', 'IELTS Coaching Bhopal', 1, '2023-07-08 06:44:48', '2023-09-27 10:14:53'),
(5, 'TOEFL Coaching Bhopal', 'toefl-coaching-bhopal', 'public/image/admin/coachings/1TzTxeDejBKSc3z3AJCr5FsSPvmqiKAFRHG4n60C.png', 'public/image/admin/coachings/HTi33bJM9S4k5rmgBSnehvHl42r9Vwz0C9jr2hwY.jpg', 'Test of English as a Foreign Language is an Internet Based Test for English aptitude at any level for foreign universities. It measures the ability of non-native speakers of English to use and understand English as it is spoken, written and heard in college and university settings. This exam is conducted worldwide by a US organization named ETS i.e. Educational Testing Services, New Jersey, USA.TOEFL Coaching in Bhopal', '<ul>\r\n	<li>Total Time: 4hrs</li>\r\n	<li>Reading Section: 36 &ndash;70 questions, Time Allotted &ndash; 60 to 100 mins.</li>\r\n	<li>Listening Section: 34-51 questions, Time Allotted &ndash; 60 to 90 mins.</li>\r\n	<li>Speaking Section: 6 Tasks, Time Allotted &ndash; 20 mins.</li>\r\n	<li>Writing Section: 2 Tasks, Time Allotted &ndash; 50 mins.</li>\r\n	<li>TOEFL iBT is out of 120</li>\r\n	<li>Fees Structure: Rs. 7000/-</li>\r\n	<li>Duration: 3 Month</li>\r\n</ul>', 'TOEFL Coaching Bhopal', 'TOEFL Coaching Bhopal', 'TOEFL Coaching Bhopal', 1, '2023-07-08 06:45:57', '2023-07-10 06:31:16'),
(6, 'GRE Coaching Bhopal', 'gre-coaching-bhopal', 'public/image/admin/coachings/I6NXHzxwyoBJCtbsHXIoV3SluB56E0KAXNc6v5k8.png', 'public/image/admin/coachings/IQnLG1CL9bJ1OnWHnpwp6Lr6m7VadRCjmM0ugdxm.jpg', '<p>Graduate Record Examination is the required qualifying test, on the score of which most of the US Institutions generally take a decision for admission for all the graduate programs i.e all MS/MA programs (viz. Engineering/Science/Arts/Architecture as well as Ph.D.)</p><p><strong>GRE Question Structure</strong></p><p>There are two particular types of GRE Tests. One is the Computer-Delivered Test, and the other is the Paper-Delivered Test. The following breaks down what you can expect from each type:</p><ul>	<li>The Paper-Delivered Test</li>	<li>Computer-Delivered Test</li></ul>', '<ul>\r\n	<li>Total Time: 3hrs 45mins.</li>\r\n	<li>Fees Structure: Rs. 18,000/-</li>\r\n	<li>Duration: 5 Month</li>\r\n</ul>', 'GRE Coaching Bhopal', 'GRE Coaching Bhopal', 'GRE Coaching Bhopal', 1, '2023-07-08 06:48:10', '2023-07-10 06:31:23'),
(7, 'SAT Coaching Bhopal', 'sat-coaching-bhopal', 'public/image/admin/coachings/gMbFg5M1mY4OnsF3PeYkyizdcdWd4qUYCBU8H1O9.png', 'public/image/admin/coachings/BkutmhmMfRdFJdnn9R2zEuWcjRYQLsvRGjPk7STf.jpg', '<p>Scholastic Aptitude Test (SAT) is the required qualifying test, on the score of which most of the US Institutions generally take a decision for admission for all the undergraduate programs. Many universities also require you to take SAT-Subject tests. The SAT test evaluates the written, verbal and mathematical skills of the candidates. The SAT is owned and governed by the College Board, a nonprofitable private organization in the United States of America. It is developed and administered by the Educational Testing Service on behalf of the College Board.</p><p>There are two types of SAT</p><ul>	<li>SAT General Test</li>	<li>SAT Subject Test &ndash; It is designed to measure a secondary school student&rsquo;s proficiency in a particular subject.</li></ul><p>The New pattern of SAT, which is due to be revised in 2016, takes 3 hours and 50 minutes to complete. The scores of the SAT range from 400 to 1600, amalgamating test results from two sections each of 800-point: Critical Reading, and Mathematics.</p>', '<ul>\r\n	<li>Critical Reading: 70 mins. (two 25-mins. sections and one 20-mins. section)</li>\r\n	<li>Evidence-Based Reading and Writing- Total Marks- 800 (Reading Test- 65 minutes and Writing Test- 35 Minutes)</li>\r\n	<li>Mathematics- Total Marks- 800 (No Calculator - 25 questions, Time Allotted - 25 minutes, Calculator - 38 questions, Time Allotted - 55 minutes)</li>\r\n	<li>Essay (Optional and Separate)- Score 2 to 8 scale (SAT without Essay - 3 hours</li>\r\n	<li>SAT with Essay - 3 hours and 50 minutes)</li>\r\n	<li>SAT score is out of 1600</li>\r\n	<li>SAT Score is valid for 5 years</li>\r\n	<li>Fee Structure- 18000/-</li>\r\n	<li>Duration- 5 months</li>\r\n	<li>Nature of Exam- Paper Based Test (PBT)</li>\r\n</ul>', 'SAT Coaching Bhopal', 'SAT Coaching Bhopal', 'SAT Coaching Bhopal', 1, '2023-07-08 06:49:16', '2023-07-10 06:31:30'),
(8, 'GMAT Coaching Bhopal', 'gmat-coaching-bhopal', 'public/image/admin/coachings/wk6nojwP69o74XrzdShMlmzhh7coTIcbgEgeu9dU.png', 'public/image/admin/coachings/LYk1W0N6j97gXlcJTez1hlR33f6VS6rPileaImFR.jpg', '<p>Graduate Management Admission Test (GMAT) is an entrance test for admissions to quality business programs offered by eminent business schools worldwide. Administered by Graduate Management Admission Council, GMAT is a computer adaptive test that broadly assesses your analytical, writing, verbal, quantitative and reading skills.</p><p>Prospective students who want to apply to management programs like MBA can appear for GMAT for up to 5 times in any 12-month period. However, they cannot apply more than once in any 16-day period.</p>', '<ul>\r\n	<li>Fees Structure: Rs. 18,000/-</li>\r\n	<li>Duration: 5 Month</li>\r\n	<li>Validity of scores: 5 years</li>\r\n	<li>Exam Fee: US$ 250</li>\r\n	<li>Additional Test Score Reporting Fees: US $35</li>\r\n</ul>\r\n\r\n<p><strong>Exam Pattern details: (Total Time : 3 hrs 30 Mins.)</strong></p>\r\n\r\n<ul>\r\n	<li>Analytical Writing Assessment: 1 Argument essay, Time Allotted &ndash; 30 mins.</li>\r\n	<li>Integrated Reasoning: 12 questions, Time Allotted &ndash; 30 mins.</li>\r\n	<li>Quantitative Section: 37 questions, Time allotted &ndash; 75 mins.</li>\r\n	<li>Verbal Section: 41 questions, Time allotted &ndash; 75 mins.</li>\r\n	<li>GMAT score is out of 800.</li>\r\n</ul>', 'GMAT Coaching Bhopal', 'GMAT Coaching Bhopal', 'GMAT Coaching Bhopal', 1, '2023-07-08 06:51:22', '2023-07-10 06:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nisha uikey', 'Nishauikey1997@gmail.com', 'sdad', 'dsad', 'sadsadsad', 0, '2023-07-18 03:31:35', '2023-07-18 03:31:35'),
(2, 'Nisha uikey', 'Nishauikey1997@gmail.com', 'sdad', 'dsad', 'sadsadsad', 0, '2023-07-18 03:33:35', '2023-07-18 03:33:35'),
(3, 'Pooja Baghel', 'poojabaghel651@gmail.com', '876654656', 'ddklkjsad', 'sdisnduuroiur uroiurioue', 0, '2023-07-18 03:34:09', '2023-07-18 03:34:09'),
(4, 'Pooja Baghel', 'poojabaghel651@gmail.com', '876654656', 'ddklkjsad', 'sdisnduuroiur uroiurioue', 0, '2023-07-18 03:38:02', '2023-07-18 03:38:02'),
(5, 'Pooja Baghel', 'poojabaghel651@gmail.com', '876654656', 'ddklkjsad', 'sdisnduuroiur uroiurioue', 0, '2023-07-18 03:39:46', '2023-07-18 03:39:46'),
(6, 'kishan', 'Nishauikey1997@gmail.com', '879841', 'ddklkjsad', 'aidiasoiudoiusa', 0, '2023-07-18 03:40:12', '2023-07-18 03:40:12'),
(7, 'kishan', 'Nishauikey1997@gmail.com', '879841', 'ddklkjsad', 'aidiasoiudoiusa', 0, '2023-07-18 04:11:42', '2023-07-18 04:11:42'),
(8, 'Nisha uikey', 'nishauikey886@gmail.com', '9424361843', 'demo', 'cxzczxxzczx', 0, '2023-07-18 05:05:46', '2023-07-18 05:05:46'),
(9, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'fdbeaebee', 0, '2023-07-18 06:27:43', '2023-07-18 06:27:43'),
(10, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'fdbeaebee', 0, '2023-07-18 06:27:45', '2023-07-18 06:27:45'),
(11, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'fdbeaebee', 0, '2023-07-18 06:27:46', '2023-07-18 06:27:46'),
(12, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'fdbeaebee', 0, '2023-07-18 06:27:46', '2023-07-18 06:27:46'),
(13, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'fdbeaebee', 0, '2023-07-18 06:27:47', '2023-07-18 06:27:47'),
(14, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'fdbeaebee', 0, '2023-07-18 06:27:47', '2023-07-18 06:27:47'),
(15, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'fdbeaebee', 0, '2023-07-18 06:27:48', '2023-07-18 06:27:48'),
(16, NULL, NULL, NULL, NULL, NULL, 0, '2023-07-18 06:28:51', '2023-07-18 06:28:51'),
(17, NULL, NULL, NULL, NULL, NULL, 0, '2023-07-18 06:28:51', '2023-07-18 06:28:51'),
(18, NULL, NULL, NULL, NULL, NULL, 0, '2023-07-18 06:28:57', '2023-07-18 06:28:57'),
(19, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'gfndgndntdegnb', 0, '2023-07-18 06:29:06', '2023-07-18 06:29:06'),
(20, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'gfndgndntdegnb', 0, '2023-07-18 06:29:07', '2023-07-18 06:29:07'),
(21, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'gfndgndntdegnb', 0, '2023-07-18 06:29:07', '2023-07-18 06:29:07'),
(22, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'gfndgndntdegnb', 0, '2023-07-18 06:29:07', '2023-07-18 06:29:07'),
(23, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'gfndgndntdegnb', 0, '2023-07-18 06:29:08', '2023-07-18 06:29:08'),
(24, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'gfndgndntdegnb', 0, '2023-07-18 06:29:08', '2023-07-18 06:29:08'),
(25, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'gfndgndntdegnb', 0, '2023-07-18 06:29:08', '2023-07-18 06:29:08'),
(26, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'gfndgndntdegnb', 0, '2023-07-18 06:29:08', '2023-07-18 06:29:08'),
(27, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'gfndgndntdegnb', 0, '2023-07-18 06:29:10', '2023-07-18 06:29:10'),
(28, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'gfndgndntdegnb', 0, '2023-07-18 06:29:10', '2023-07-18 06:29:10'),
(29, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'gfndgndntdegnb', 0, '2023-07-18 06:29:10', '2023-07-18 06:29:10'),
(30, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'gfndgndntdegnb', 0, '2023-07-18 06:29:11', '2023-07-18 06:29:11'),
(31, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'gfndgndntdegnb', 0, '2023-07-18 06:29:13', '2023-07-18 06:29:13'),
(32, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'gfndgndntdegnb', 0, '2023-07-18 06:29:14', '2023-07-18 06:29:14'),
(33, 'Rampratap Mishra', 'ram9999mishra@gmail.com', '08718948415', 'bdfabad', 'gfndgndntdegnb', 0, '2023-07-18 06:29:14', '2023-07-18 06:29:14'),
(34, 'Nisha uikey', 'nishauikey1997@gmail.com', '9407352907', 'test to', 'dsdsad sdsadas', 0, '2023-07-19 04:38:35', '2023-07-19 04:38:35'),
(35, 'Nisha uikey', 'Nishauikey1997@gmail.com', '748596135', 'test', 'xxz€zx', 0, '2023-09-23 01:13:39', '2023-09-23 01:13:39');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `logo` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `universities` text NOT NULL,
  `hightlights` text NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_descripation` text DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `home_status` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `title`, `slug`, `logo`, `image`, `description`, `universities`, `hightlights`, `meta_title`, `meta_descripation`, `meta_keyword`, `home_status`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Study In Australia', 'study-in-australia', 'public/image/admin/countries/ebsrPg0K4a9Zi5GlK9SR5xH9A8pjWS6IV1YQgeOl.png', 'public/image/admin/countries/renXOPLGrcNUxEyZJ6BbiwMsOVHPReoGePBhTkAF.jpg', '<h1>Study In Australia</h1>', '<ul>\r\n	<li>Queensland University of Technology (CRICOS Code 00213J)</li>\r\n	<li>Griffith University (CRICOS Code 00233E)</li>\r\n	<li>University of South Australia (CRICOS Code 00121B)</li>\r\n	<li>Swinburne University of Technology (CRICOS Code 00111D)</li>\r\n	<li>James Cook University, Brisbane (CRICOS Code 00117J)</li>\r\n	<li>University of Tasmania (CRICOS Code 00586B)</li>\r\n	<li>University of Canberra (CRICOS Code 00212K)</li>\r\n	<li>Western Sydney University (CRICOS Code 00917K)</li>\r\n	<li>Edith Cowan University (CRICOS Code 00279B)</li>\r\n	<li>Federation University (CRICOS Code VIC 00103D)</li>\r\n	<li>Central Queensland University (CRICOS Code &ndash; 00219C)</li>\r\n	<li>Southern Cross University Sydney Educo Global (CRICOS Code NSW 01241G)</li>\r\n	<li>Latrobe University Sydney Campus (CRICOS Code NSW 02218K)</li>\r\n	<li>Curtin University Sydney Campus (CRICOS Code NSW 02637B)</li>\r\n	<li>Macquarie University City Campus (CRICOS Code 00002J)</li>\r\n	<li>Charles Darwin University, Melbourne (CRICOS Code 00300K (VIC)</li>\r\n	<li>University of Southern Queensland Education Centre (Sydney) (NSW) 02225M</li>\r\n	<li>Charles Sturt University Study Centre (Sydney &amp; Melbourne) (00005F (NSW), 01947G (VIC) and 02960B (ACT)</li>\r\n	<li>Charles Sturt University, Wagga Wagga Campus (00005F (NSW)</li>\r\n	<li>University of Sunshine Coast, Australia (01595D)</li>\r\n	<li>Education Centre Australia &ndash; Victoria University Sydney Campus (CRICOS Code 02475D)</li>\r\n</ul>', '<ul>\r\n	<li>1 yr work permit.</li>\r\n	<li>Economic options available.</li>\r\n	<li>20 hr/week part time.</li>\r\n	<li>Fastest growing company in Australia by BRW magazine</li>\r\n	<li>Australia provides value for money by offering shorter and more intensive courses.</li>\r\n	<li>The Association of Australian Education Representatives in India (AAERI)</li>\r\n</ul>', 'Study In Australia', 'Study In Australia', 'Study In Australia', 1, 1, '2023-07-08 05:06:24', '2023-09-27 10:12:24'),
(4, 'Study In Canada', 'study-in-canada', 'public/image/admin/countries/MB1lDQq0cU5DA5EA7kZK6X9kzwmvH4nlI8BHQTJ7.png', 'public/image/admin/countries/LfTuzGGr5WmdHIyTzeNsgfe7aiB6ozSaKUEp8G1A.jpg', 'Knowledge Kingdom is one of the best solutions for all your Overseas Education requirements. We offer Career Counseling, Consultancy, Admissions, and Visas. Consultants for Study in Canada. The Canadian education system is qualitative and ranks amongst the best in the world.', '<ul>\r\n	<li>York University, Toronto, Ontario 2 Dalhousie University, Halifax, Nova Scotia (M.Engg in Internetworking and all UG courses only)</li>\r\n	<li>University of Regina, Regina, Saskatchewan</li>\r\n	<li>University of Manitoba, Winnipeg, Manitoba (only UG)</li>\r\n	<li>Wilfrid Laurier University, university in Waterloo, Ontario</li>\r\n	<li>Lakehead University, Thunder Bay, Ontario</li>\r\n	<li>University of Northern British Columbia, Prince George, British Columbia</li>\r\n	<li>Thompson Rivers University, Kamloops, British Columbia</li>\r\n	<li>Trent University, Peterborough, Ontario</li>\r\n	<li>Trinity Western University, Private university in Langley Township, British Columbia</li>\r\n	<li>Royal Roads University, Victoria, British Columbia</li>\r\n	<li>Fairleigh Dickinson University, Vancouver, British Columbia</li>\r\n	<li>Simon Fraser University through Fraser International College, Burnaby, British Columbia (Only for Under Graduate courses)</li>\r\n	<li>The university of Manitoba through International College of Manitoba, Winnipeg, Manitoba (Only for Under Graduate courses)</li>\r\n	<li>Vancouver Island University, Nanaimo, British Columbia</li>\r\n	<li>University of Canada West, British Columbia</li>\r\n	<li>New York Institute of Technology, Vancouver, British Columbia</li>\r\n	<li>King&rsquo;s University College, London, Ontario</li>\r\n	<li>Cape Breton University, Sydney, Nova Scotia</li>\r\n	<li>Capilano University, North Vancouver, British Columbia</li>\r\n	<li>CANADIAN &ndash; PUBLIC COMMUNITY COLLEGES</li>\r\n	<li>Kwantlen Polytechnic University, Surrey, British Columbia</li>\r\n	<li>The university of the Fraser Valley, Public university in British Columbia, Canada</li>\r\n	<li>Mount Allison University, University in Sackville, New Brunswick</li>\r\n	<li>Seneca College, Toronto, Ontario</li>\r\n	<li>George Brown College, Toronto, Ontario</li>\r\n	<li>Sheridan College, Oakville, Ontario</li>\r\n	<li>Douglas College, Vancouver, British Columbia</li>\r\n	<li>Algonquin College, Ottawa, Ontario</li>\r\n	<li>Niagara College, Welland, Ontario</li>\r\n	<li>Fanshawe College, London, Ontario</li>\r\n	<li>Georgian College, Barrie, Ontario</li>\r\n	<li>Cambrian College, Sudbury, Ontario</li>\r\n</ul>', '<ul>\r\n	<li>Public colleges ( Govt.funded universities) offers PG diplomas of 1 yr, 2yr &amp; 3 yr duration with low fees structure.</li>\r\n	<li>Get work permit for 1 yr ,2 yr, 3 yr depending upon the course.</li>\r\n	<li>Can apply for PR after completion of course.</li>\r\n	<li>IELTS required.*</li>\r\n	<li>Co-op options available.</li>\r\n</ul>', 'Study In Canada', 'Study In Canada', 'Study In Canada', 1, 1, '2023-07-08 05:10:02', '2023-09-27 09:12:17'),
(5, 'Study In Cyprus', 'study-in-cyprus', 'public/image/admin/countries/rRh6jyCMl7TlhPnUVvGi92ssPE6AEw4fnlHu5H1u.png', 'public/image/admin/countries/587HX6CUvwTHrwwSvzthagEgvN4sm87LmetVzSai.jpg', '<p>Cyprus &ndash; officially the Republic of Cyprus is an island country in the Eastern Mediterranean sea, east of Greece, west of Syria and north of Egypt &amp; south of Turkey. It is a beautiful island in the northeastern basin of the Mediterranean Sea, at the crossroads of Europe, Asia, and Africa. Cyprus has diverse multicultural environments. There are approximately 45000 students of different nationalities studying in Cyprus.</p>\r\n\r\n<p>The universities in Cyprus offer quality higher education, and the country has been taking measures to increase research, funding and interest in higher education. Universities in this country offer a wide variety of subjects in which the students can earn diplomas and degree. You will surely find a course related to your favorite subject. The country provides internationally recognized degrees. It offers affordable tuition fees and moderate living expenses. The visa process is also straightforward.</p>\r\n\r\n<p>The cuisine and culture of Cyprus are one of the best in all Europe. Cyprus has a high percentage of English speaking population. Just like India, Cyprus too has a rich historical heritage about which you can learn while you study there. You can visit the ancient castles, monuments, archeological sites, and vibrant vineyards. Staying in Cyprus should be the least of your worries. Both on-campus and off-campus accommodations are available.</p>', '<ul>\r\n	<li>University of Central Lancashire (UCLAN)</li>\r\n	<li>University of Nicosia</li>\r\n	<li>CTL Euro College</li>\r\n	<li>Larnaca College</li>\r\n	<li>Intercollege</li>\r\n</ul>', '<ul>\r\n	<li>Bachelor and Master&rsquo;s degree in Cyprus is recognized world-wide.</li>\r\n	<li>The main language of instruction in English.</li>\r\n	<li>The standard of living in Cyprus is high and yet the living costs are affordable.</li>\r\n	<li>The country is very safe and the crime rates are extremely low.</li>\r\n	<li>Credits can be transferred to all other European Union countries as well as US and Canada.</li>\r\n	<li>Scholarships are provided to all International students that cover up to forty percent of tuition fees.</li>\r\n</ul>', 'Study In Cyprus', 'Study In Cyprus', 'Study In Cyprus', 0, 1, '2023-07-08 05:11:56', '2023-09-27 09:43:52'),
(6, 'Study In France', 'study-in-france', 'public/image/admin/countries/vrLT7zCqeLij9Lk9PmWi8W0zHY6G3bhEjSeAtWNZ.png', 'public/image/admin/countries/FEjutg3tdxilXHY5J6ObovxgpioeE3pntHHAhoLs.jpg', 'France', '<ul>\r\n	<li>ESC Dijon / Burgundy School of Business</li>\r\n	<li>Grenoble Ecole de Management</li>\r\n	<li>EM Normandie</li>\r\n	<li>Novancia Business School Paris</li>\r\n	<li>EM Strasbourg Business School</li>\r\n	<li>Telecom Ecole de Management</li>\r\n	<li>INSEEC</li>\r\n	<li>Shiller International (Paris)</li>\r\n	<li>ESIGELEC, Graduate School of Engineering</li>\r\n	<li>Institut sup&eacute;rieur d&rsquo;&eacute;lectronique de Paris (ISEP)</li>\r\n	<li>Le Cordon Bleu</li>\r\n</ul>', '<p><strong>Visa</strong></p>\r\n\r\n<ul>\r\n	<li>Sufficiency of funds and proficiency of English are two major criteria for VISA success.</li>\r\n	<li>Overseas health insurance of 90 days with a cover of 30000 EUR is required for VISA.</li>\r\n	<li>With France VISA, the student can travel anywhere in Europe except the UK.</li>\r\n	<li>High VISA success.</li>\r\n	<li>No requirement of Blocked account.</li>\r\n	<li>VISA processing time is 15-20 days.</li>\r\n</ul>\r\n\r\n<p><strong>Entry criteria</strong></p>\r\n\r\n<ul>\r\n	<li>Academics percentages from 55%- 70% and above.</li>\r\n	<li>Fluency in English.</li>\r\n</ul>\r\n\r\n<p><strong>Intakes</strong></p>\r\n\r\n<ul>\r\n	<li>Most courses start in winter intake (sept/Oct), however, some may even have summer intake(March/April).</li>\r\n</ul>\r\n\r\n<p><strong>Admission Process</strong></p>\r\n\r\n<ul>\r\n	<li>Documents Required.</li>\r\n	<li>A copy of passport first and last page.</li>\r\n	<li>Resume/ CV</li>\r\n	<li>Academic documents 10th onwards (Mark sheets or Transcripts).</li>\r\n	<li>School Leaving Certificate and Degree Certificate.</li>\r\n	<li>Two letters of recommendation.</li>\r\n	<li>Statement of Purpose.</li>\r\n</ul>', 'Study In France', 'Study In France', 'Study In France', 0, 1, '2023-07-08 05:20:42', '2023-09-27 09:13:43'),
(7, 'Study In Germany', 'study-in-germany', 'public/image/admin/countries/vmkYc1J1CQoraRJesruC1xEJ1nXNoHspbb333bcp.png', 'public/image/admin/countries/cuGACpNz2hWxRabEOOclBqtD0P9cQ7zD3QZR0eIZ.jpg', '<p>Germany is an attractive place to study and German university degrees are highly respected by employers worldwide. Germany is one of the major hub of Engineering and Automobile studies. It is politically safe and welcoming country. The cost of living in Germany is reasonable as compared to the other countries in Europe. The country has good employment rates and has Europe&rsquo;s highest economy. If you choose to study in Germany, you will be learning about the latest technological advances and trends in your particular subject.</p>\r\n\r\n<p>Germany has abolished tuition fees for undergraduate &amp; post graduate students in most of the public German universities. Which means both domestic and international students at public universities in Germany can study for free, with just a small fee to cover administration and other costs per semester.</p>\r\n\r\n<p>Tuition free education in the public universities of Germany is the number one reason of studying there. German degrees are known for quality and are immensely valued in the job market. The German visa is valid for 27 Schengen countries including Austria, Denmark, France and others.</p>', '<ul>\r\n	<li>Schiller International University</li>\r\n	<li>Technical University of Munich</li>\r\n	<li>Technical University of Berlin</li>\r\n	<li>University of Hagen</li>\r\n	<li>RWTH Achen University</li>\r\n	<li>International Academy of Students</li>\r\n	<li>New European College</li>\r\n	<li>Cologne Business School</li>\r\n	<li>Hochschule Bremen &ndash; University of Applied Sciences</li>\r\n	<li>International School of Management</li>\r\n	<li>Eurasia Institute</li>\r\n	<li>GISMA Business School</li>\r\n	<li>IAS International Academy of Students, L&uuml;beck</li>\r\n</ul>', '<ul>\r\n	<li>Public Universities offers free of cost Education.</li>\r\n	<li>1 year work permit.</li>\r\n	<li>20 hr/week part time job.</li>\r\n	<li>A proper internship</li>\r\n	<li>Educational quality of Germany is of extremely high standard.</li>\r\n	<li>Largest University System of Europe.</li>\r\n	<li>There is a range of subjects that the students can choose to study from literature to music and also sports.</li>\r\n	<li>A high degree of importance is placed on research as opposed to theoretic study</li>\r\n	<li>Students can form groups to study and subsequently present their papers, although group diplomas are not awarded.</li>\r\n	<li>Students are encouraged to apply for jobs, even when they are studying which makes them comfortable in the overall working conditions of the German work culture much before they take on their first true job.</li>\r\n	<li>Since the education system lays particular importance on research and practical aspects, there is overall encouragement to innovate and apply for patents more than anywhere else in the world.</li>\r\n</ul>', 'Study In Germany', 'Study In Germany', 'Study In Germany', 0, 1, '2023-07-08 05:22:42', '2023-09-27 09:14:18'),
(8, 'Study In Ireland', 'study-in-ireland', 'public/image/admin/countries/1yzUmfzCh2usIY3rfRRTyDswaUz9qVtxniZqdNwL.png', 'public/image/admin/countries/9sGy2qHFCTbs3MElygSyk2KCP8UEaxgh3pxfEipB.jpg', '<p>Study in Ireland is equal to studying in one of the friendliest and secure countries. Ireland is known for its best education systems in the world for higher education. The international students have the benefit of choosing from over thousands of internationally recognized qualifications. Students have access to excellent research opportunities in world-leading industries.</p>\r\n\r\n<p>It is home to many of the world&rsquo;s top high-performance companies such as Google, Facebook, Twitter, Apple etc. it&rsquo;s also a hub for the world&rsquo;s largest IT, Pharma and Finance companies offering excellent employment opportunities for international students. Majority of the international students are keen on getting admission in Ireland as it is an English-speaking country. The cost of education in Ireland ranges between 9000 Euros to 25000 Euros per year. The tuition fees in Irish Universities are reasonable as compared to other popular study destinations.</p>', '<ul>\r\n	<li>Trinity College Dublin</li>\r\n	<li>University College Dublin, Dublin</li>\r\n	<li>University College Cork, Cork</li>\r\n	<li>Maynooth University, Maynooth</li>\r\n	<li>Dublin Business School, Dublin</li>\r\n	<li>Technical University of Dublin, Dublin</li>\r\n	<li>University of Limerick, Limerick</li>\r\n	<li>Dublin City University, Dublin</li>\r\n	<li>National College of Ireland</li>\r\n	<li>Griffith College, Dublin.</li>\r\n	<li>National University of Ireland Galway</li>\r\n</ul>', '<ul>\r\n	<li>Ireland has emerged as a very promising country because of two strengths &ndash; the medium of instruction and cheaper costs.</li>\r\n	<li>More attractive for students is visa, which is easy to obtain than any other countries.</li>\r\n	<li>Irish universities offer program right from the certificate level to the doctorate level &amp; in almost all fields of study.</li>\r\n	<li>Ireland is an emerging country, which is now spreading its wings.</li>\r\n	<li>One year work permits after completion of course.</li>\r\n	<li>20 hr/week part time.</li>\r\n	<li>Scholarship opportunities.</li>\r\n	<li>2 Years post study work permit</li>\r\n	<li>Most of the Irish universities are ranked among the best in the world and they offer programs in many areas so that there is a course suited to every student.</li>\r\n	<li>Ireland is the ideal place for English speakers as students would not have to learn a second language and will be able to have the study abroad experience without the difficulties faced in a non-English speaking country.</li>\r\n	<li>Ireland&rsquo;s capital - Dublin is a vibrant and youthful city that has a strong combination of culture and history. Restaurants and music of Dublin is second to none.</li>\r\n	<li>For lovers of art, the Galway Art Festival is something that cannot be missed. It is one of Ireland&rsquo;s most important annual events and every art aficionado should see it.</li>\r\n</ul>', 'Study In Ireland', 'Study In Ireland', 'Study In Ireland', 0, 1, '2023-07-08 05:24:27', '2023-09-27 09:44:31'),
(9, 'Study In New Zealand', 'study-in-new-zealand', 'public/image/admin/countries/J9WUmTozkDtBkCZXmnfJvNAhTHvi0618Xhkjwco1.png', 'public/image/admin/countries/R4zW4Z2TgZnawCLPlpUItcAmpD82QrSGXWjC67a8.jpg', 'Zealand', '<ul>\r\n	<li>University of Waikato Hamilton</li>\r\n	<li>University of Otago, Dunedin</li>\r\n	<li>University of Canterbury, Christchurch</li>\r\n	<li>The University of Auckland, Auckland</li>\r\n	<li>University of Otago, Dunedin</li>\r\n	<li>Massey University, Palmerston North</li>\r\n	<li>Victoria University of Wellington, Wellington</li>\r\n	<li>Lincoln University, Lincoln, Canterbury</li>\r\n	<li>Unitec Istitute of Technology, Auckland</li>\r\n	<li>UUNZ Institute of Business, Auckland</li>\r\n	<li>AIS St Helens, Auckland</li>\r\n	<li>AUT University, Auckland</li>\r\n	<li>Lincoln University, Lincoln, Canterbury</li>\r\n	<li>University of Waikato Hamilton</li>\r\n	<li>Wellington Institute of technology (Weltec), Wellington</li>\r\n	<li>Otago Polytechnic, Auckland</li>\r\n	<li>Pacific International Hotel Management School (PIHMS), New Plymouth</li>\r\n	<li>Christchurch Polytechnic Institute of Technology (CPIT), Christchurch</li>\r\n	<li>Waiariki Institute of Technology, Rotorua (Mokoia) (2hour 53 minutes from Auckland)</li>\r\n	<li>Whiteria, Auckland Campus</li>\r\n	<li>Otago Polytechnic, Dunedin</li>\r\n	<li>Southern Institute of Technology (SIT), Invercargill</li>\r\n	<li>Manukau Institute of Technology (MIT), Auckland</li>\r\n	<li>Waikato Institute of Technology (Wintec), Hamilton</li>\r\n	<li>University of Waikato, Hamilton</li>\r\n	<li>Whitireia Institute of Technology, Wellington, Auckland</li>\r\n	<li>Whiteria, Auckland and Porirua Campus</li>\r\n	<li>AWI, Auckland</li>\r\n	<li>Auckland Institute of Studies</li>\r\n	<li>Royal Business College, Auckland</li>\r\n	<li>Nelson Marlborough Institute of Technology (NMIT), Nelson Campus</li>\r\n	<li>National Tertiary Education Consortium (Ntec), Auckland, Christchurch, Tauranga</li>\r\n	<li>Queens Academic Group, Auckland</li>\r\n	<li>North Tec, Whangarei and Auckland</li>\r\n	<li>Cornell, Auckland</li>\r\n	<li>International Academy of New Zealand, Auckland</li>\r\n	<li>International College of Auckland</li>\r\n	<li>Auckland University Of Technology (AUT), Auckland</li>\r\n	<li>Western Institute Of Technology at Taranaki (WITT), New Plymouth</li>\r\n	<li>Lifeway College, Warkworth</li>\r\n</ul>', 'Zealand', 'Study In New Zealand', 'Study In New Zealand', 'Study In New Zealand', 0, 1, '2023-07-08 05:26:45', '2023-09-27 09:14:59'),
(10, 'Study In Singapore', 'study-in-singapore', 'public/image/admin/countries/97eHzQQFvTB7vseylMwO1fW7AMXkG44HCTGqb8NY.png', 'public/image/admin/countries/0bXCtXWEQDJhglL3mWuTarXOyA7w5fjcjsKAEcYd.jpg', '<p>Singapore is one of the best places in Asia to pursue Business Management, Computing &amp; IT, and Hospitality or Tourism courses. The universities in Singapore are globally recognized and encourage independent learning, high quality education, multiple intakes, possibility of admission &amp; visa without IELTS. It maybe a small country, but scope for higher education in Singapore is significant. English is the officially designated language for the education system.</p>\r\n\r\n<p>Singapore is an amazing place with dynamic economy. It has been top rated country in term of doing business across the world. It is not only one of the most economic options but also one of the safest places in Asia to pursue higher studies. Additionally, institutions from the USA, UK and Australia have opened satellite campuses in Singapore to offer their courses at a subsidized cost. International student&rsquo;s desires to pursue education in Singapore will enjoy access to world-class technology in conducive learning environment.</p>', '<ul>\r\n	<li>James Cook University (JCU)</li>\r\n	<li>Management Development Institute of Singapore</li>\r\n	<li>Raffles College of Higher Education</li>\r\n	<li>Kaplan Higher Education Academy</li>\r\n	<li>Nanyang Institute of Management</li>\r\n	<li>London School of Business and Finance, Singapore</li>\r\n	<li>East Asia Institute of Management (EASB)</li>\r\n	<li>M2 Academy</li>\r\n	<li>SIM Global Education</li>\r\n	<li>American Center of Education.</li>\r\n	<li>S P Jain School of Global Management &ndash; Dubai, Singapore &amp; Sydney</li>\r\n	<li>Curtin University of Technology, Singapore (Curtin, Singapore)</li>\r\n	<li>Dimensions International College, Singapore</li>\r\n	<li>Amity Global Business School</li>\r\n</ul>', '<ul>\r\n	<li>Singapore is also a hot-bed of technological and IT invention and innovation. It has been named the most innovative country throughout the entire Asia Pacific region</li>\r\n	<li>It&rsquo;s a global business hub More than 7000 Multinational Corporations (MNC) alongside 1,00,000 small and medium enterprises (SME) have set up their base in Singapore</li>\r\n	<li>Singapore is an amazing place with dynamic economy. It has been top rated country in term of doing business across the world.</li>\r\n	<li>High standards of living are something that student can be assured of.</li>\r\n	<li>It is one of the most attractive countries for foreigners seeking highly-skilled work and being a hub for business and high-tech industries in South-East Asia</li>\r\n	<li>Fastest visa process with minimal financial documents, affordable tuition fees and living expenses, paid-unpaid internships are the beneficial aspects</li>\r\n	<li>They offer international students a high probability of in-country employment after graduation.</li>\r\n</ul>', 'Study In Singapore', 'Study In Singapore', 'Study In Singapore', 0, 1, '2023-07-08 05:28:40', '2023-09-27 10:13:34'),
(11, 'Study In USA', 'study-in-usa', 'public/image/admin/countries/hMGQ3MtpOiVn700Y7Y6Y9VMzs3i9bFkg5JZOqbKE.png', 'public/image/admin/countries/1SStvIrlFGIl5Wodk4DSLvySONPYhWtu68PmESal.jpg', 'USA', '<ul>\r\n	<li>Oregon State University, Corvallis, Oregon. &ndash; (Tier I Research University)</li>\r\n	<li>Colorado State University, Fort Collins, Colorado (Tier I Research University)</li>\r\n	<li>The university of South Florida, Tampa, Florida &ndash; (-Tier I Research University)</li>\r\n	<li>George Mason University, Virginia</li>\r\n	<li>Ohio University, Athens, Ohio. (Only UG)</li>\r\n	<li>University of Tennessee, Knoxville</li>\r\n	<li>University of Colorado Denver, Colorado</li>\r\n	<li>University of Idaho, Moscow, Idaho</li>\r\n	<li>The university of Albany, The State University of New York, Washington Ave: Albany (SUNY Albany)</li>\r\n	<li>Claremont Graduate University, University in Claremont, California</li>\r\n	<li>Brandeis International Business School, in Waltham, Massachusetts</li>\r\n	<li>San Jose State University, San Jose, California</li>\r\n	<li>San Francisco State University, San Francisco, California</li>\r\n	<li>The university of St. Thomas, Minnesota</li>\r\n	<li>Kent State University, Kent, Ohio.</li>\r\n	<li>The State University of New York at New Paltz (SUNY New Paltz )</li>\r\n	<li>Montana State University, Bozeman, Montana</li>\r\n	<li>Wright State University, Dayton, Ohio</li>\r\n	<li>Wichita State University, Wichita, Kansas</li>\r\n	<li>University of New Mexico- Albuquerque, New Mexico</li>\r\n	<li>Auburn University at Montgomery , University in Montgomery</li>\r\n	<li>Arkansas State University, Jonesboro, Arkansas</li>\r\n	<li>Auburn University, Alabama</li>\r\n	<li>University of Kansas, Lawrence, Kansas. (UG)</li>\r\n	<li>The university of South Carolina, Columbia, South Carolina</li>\r\n</ul>', 'USA', 'Study In USA', 'Study In USA', 'Study In USA', 1, 1, '2023-07-08 05:30:35', '2023-09-27 10:13:46'),
(12, 'Study In UK', 'study-in-uk', 'public/image/admin/countries/h7gtdjOyXPhUTcMStar4oX9kRJCaM834N5kB0s4K.png', 'public/image/admin/countries/DUZFvxRycc49w0uLkcYzJjWPcAdkFh76QXlXInN4.jpg', 'UK', '<ul>\r\n	<li>University of Surrey, Surrey</li>\r\n	<li>University of Leicester, Leicester</li>\r\n	<li>University of Birmingham, Birmingham</li>\r\n	<li>Heriot-Watt University, Edinburg</li>\r\n	<li>University of Glasgow, Glasgow</li>\r\n	<li>Newcastle University, Newcastle upon Tyne</li>\r\n	<li>Queen Mary, University of London, London</li>\r\n	<li>University of Liverpool, Liverpool</li>\r\n	<li>Queen&rsquo;s University Belfast, Belfast</li>\r\n	<li>Coventry University, Coventry</li>\r\n	<li>Oxford Brookes University, Oxford</li>\r\n	<li>INTO City University, London (Except Business School and Law School)</li>\r\n	<li>University of Huddersfield, Huddersfield</li>\r\n	<li>University of Chester, Chester</li>\r\n	<li>The University of Northampton, Northampton</li>\r\n	<li>University of Lincoln, Lincoln</li>\r\n	<li>The university of Hertfordshire, Public university in Hatfield, England</li>\r\n	<li>University of Stirling, Stirling</li>\r\n	<li>Northumbria University, Newcastle</li>\r\n	<li>University of Plymouth, Devon</li>\r\n	<li>De Montfort University</li>\r\n	<li>Birmingham City University, Birmingham</li>\r\n	<li>University of Essex, Colchester</li>\r\n	<li>University of Sunderland, Sunderland</li>\r\n	<li>University of Greenwich, London</li>\r\n	<li>Sheffield Hallam University, Sheffield</li>\r\n	<li>Bangor University, Bangor</li>\r\n	<li>University of Teesside, Tees Valley</li>\r\n	<li>The university of South Wales (formerly known as University of Glamorgan), Pontypridd</li>\r\n	<li>Anglia Ruskin University</li>\r\n	<li>The university of West of Scotland</li>\r\n	<li>INTO Gloucestershire, Gloucestershire</li>\r\n	<li>Queen Margaret University, Edinburgh, Scotland</li>\r\n	<li>University of West London, London</li>\r\n	<li>Edinburgh Napier University, Edinburgh, Scotland</li>\r\n</ul>', 'UK', 'Study In UK', 'Study In UK', 'Study In UK', 1, 1, '2023-07-08 05:32:09', '2023-09-27 10:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `c_m_s_settings`
--

CREATE TABLE `c_m_s_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_intro` text DEFAULT NULL,
  `where_we_offer` text DEFAULT NULL,
  `what_we_offer` text DEFAULT NULL,
  `history` text DEFAULT NULL,
  `who_we_are` text DEFAULT NULL,
  `overseas_consultant` text DEFAULT NULL,
  `team_content` text DEFAULT NULL,
  `our_advisors` text DEFAULT NULL,
  `education_advisors` text DEFAULT NULL,
  `why_us_arr` text DEFAULT NULL,
  `contact_text` text DEFAULT NULL,
  `feedback_text` text DEFAULT NULL,
  `press_release_text` text DEFAULT NULL,
  `new_hightlights_text` text DEFAULT NULL,
  `video_gallery_text` text DEFAULT NULL,
  `upcoming_event_text` text DEFAULT NULL,
  `scholarship_text` text DEFAULT NULL,
  `results_text` text DEFAULT NULL,
  `iets_exam_text` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `home_title` varchar(255) DEFAULT NULL,
  `home_subtitle` varchar(255) DEFAULT NULL,
  `about_home` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_m_s_settings`
--

INSERT INTO `c_m_s_settings` (`id`, `about_intro`, `where_we_offer`, `what_we_offer`, `history`, `who_we_are`, `overseas_consultant`, `team_content`, `our_advisors`, `education_advisors`, `why_us_arr`, `contact_text`, `feedback_text`, `press_release_text`, `new_hightlights_text`, `video_gallery_text`, `upcoming_event_text`, `scholarship_text`, `results_text`, `iets_exam_text`, `created_at`, `updated_at`, `home_title`, `home_subtitle`, `about_home`) VALUES
(1, '<p>At the Knowledge Kingdom, our core activity lies in assisting students and guide them to make the perfect choice with regard to pursuing education to Study Abroad Consultants in Bhopal. Knowledge Kingdom not only gives the right direction to the students for choosing their courses but also advise the best country for the students for their best career.</p>\r\n\r\n<p>Sometimes students are confused about which course they prefer and in which country they have to go to. That&rsquo;s why we also provide career counselling and personal counselling, so the doubt of the students should be clear.</p>', '<p>We provide vital information regarding higher education in various countries such as UK, USA, Canada, Australia, NewZealand, Singapore, Ireland, France, Germany, Dubai, Switzerland, Malaysia and many more. Knowledge Kingdom, a pioneer in the field of &ldquo;GLOBAL EDUCATION&rdquo; and has brought the concept of overseas education to the doorstep of every student.</p>\r\n\r\n<p>Our exquisite branch network and association with leading institutions worldwide and unblemished reputation help us to deliver you the top quality education services. In addition to professional academic and career counselling.</p>', 'Knowledge Kingdom also offers various students quality services such as aptitude testing, course and university selection, streamlined application process guidance and assistance, admission and visa guidance, accommodation assistance at best price, test prep for IELTS, TOEFL, PTE, GMAT, GRE, SAT. We also provide bank loan help, travel assistance with an economical fare, foreign exchange assistance, medical and travel insurance and comprehensive pre-departure guidance and provide assistance at each step.', 'Knowledge Kingdom has organized over 400 educational fairs and exhibitions across India in the past 11 years and proved itself top overseas education consultant in Bhopal. Knowledge Kingdom represents a wide portfolio of reputed international institutions &amp; works closely with several organizations, high commissions &amp; education bodies.', 'Knowledge Kingdom is India&rsquo;s Leading Overseas Education Consultancy and has helped thousands of students achieve their dreams. The group of experts at Knowledge Kingdom whole up to more than 450 people crosswise over different offices. Despite students/parents knowing what they wish to study and where they usually avail our professional services to ensure better quality and hassle-free application process thus allowing them and give them chance to focus on their academics and job. We have sent more than 3000 students in the last 10 years and we are 11-year-old Study Abroad Consultancy in Bhopal.', 'We are growing not only in Bhopal and we are No 1. Overseas consultant in Bhopal. The people in the team are dedicated towards the students; needs and fulfil commitments given to the students. Our counsellors have travelled abroad for training and also have been trained by visiting international experts to guide students professionally in selecting the right course at the ideal institution with an economical fee structure.', 'The management team of Knowledge Kingdom are highly qualified professionals having rich experience in the field of overseas education. The two partners have studied, worked and lived abroad and undergo specialized training at various universities around the globe. This knowledge and experience of overseas education have been systematically and successfully downloaded to its large team of academic advisors. Overseas education Our team is passionate about helping students for establishing their successful careers and leaves no stone unturned to ensure great results which makes us the best Foreign Education Consultants in Bhopal.', '<p>Live by a strict code of ethics and present a set of values that are not merely etched in stone but are woven into the very fabric of the organization which is very essential. The meticulous training regime and internal certification process at Knowledge Kingdom ensure that all our advisors have surpassed industry benchmarks before they commence counselling and guide the students for their career. They simplify the process and assist students and parents through the maze of information overload and assist the right match to achieve the goals that the students have set out.</p>\r\n\r\n<p><strong>Being the best study abroad consultants in Bhopal, we also provide free consultants.</strong></p>', 'The passionate team of Knowledge Kingdom, the backbone of the organization, consists of dynamic and professionals counsellors, who have vast and deep professional experience in the field of advising students about the various study options available in India and abroad, keeping their academic profile and needs in mind.', '<ul>\r\n	<li>Representatives of different universities from UK, USA, Canada, Australia, New Zealand, Singapore, Ireland, France, Germany, Switzerland, Malaysia and many more.</li>\r\n	<li>Choice of Universities/ Colleges with affordable and economical tuition fees and hassle-free admissions.</li>\r\n	<li>There are IELTS registration center for IDP</li>\r\n	<li>We also provide personalized coaching for IELTS, PTE, TOEFL, GRE, GMAT, SAT and ACT. through preparatory material and CDs by an experienced trainer and a well-equipped digital library.</li>\r\n	<li>An experienced team of professional and experienced counsellors and mentors that personally assist students and parents in the application and visa process to the representative university. We are the best visa consultant in Bhopal.</li>\r\n	<li>Full focus on matching the profile of students with the right institution and destination.</li>\r\n	<li>Hosting direct interviews with the university representatives.</li>\r\n	<li>Helping in understanding the visa processes.</li>\r\n	<li>Full assistance on travel, accommodation &amp; foreign exchange.</li>\r\n	<li>Experienced and professional leadership Team with substantial experience and background in the field of education</li>\r\n	<li>Knowledge Kingdom prides itself on its personalized attention to students and parents and consciously seeks to avoid an assembly line approach to counselling students.</li>\r\n	<li>Exhaustive information in the form of library CD&rsquo;s, brochures, academic guides, application forms etc.</li>\r\n	<li>We Organize many international education fairs in India.</li>\r\n	<li>We also assist students with follow on academic programs to post completion of their primary academic programs.</li>\r\n	<li>We have a strong understanding of international post-study work opportunities, jobs, opening economic and industry trends and permanent residency policies.</li>\r\n	<li>Over the years has placed several thousand students enrol at their desired institutions, make successful careers and successfully established themselves overseas.</li>\r\n	<li>All Students across India have trusted the Knowledge Kingdom for their career decisions and placements.</li>\r\n	<li>Our student and parent testimonials speak of unmatched service experiences with full assistance to all process.</li>\r\n</ul>', NULL, NULL, 'uykljhkljkljlk', 'jjkkljl', 'hgjhghjggjh', NULL, '<p>Don&rsquo;t let a great opportunity to slip out of your hands.</p>\r\n\r\n<p>We know you have doubts about study overseas program, cost of moving abroad and even- increasing international student fees, the matter of a study abroad course is really expensive which will make you think twice. What you may not be aware of is Knowledge Kingdom has a plan for you; we are associated with various organizations who intend to support students who wish to study abroad. The availability of scholarship assistance is like a blessing in disguise.</p>\r\n\r\n<p>Scholarships can be a useful means to sustain your existence in a foreign country. With the aim to support inspirational and life ambitioned students who have a dream to make their family proud we are connected with these organizations who intend to provide scholarships to these students. But one needs to prove themselves worthy enough to get the scholarship. We are fully intent you to get the scholarship and ensure than you are eligible to apply for the scholarship. Below are the list of scholarships and organizations we are connected with, there are various options available through which one can get scholarship, for full information regarding the scholarship contact our office or visit knowledge kingdom, you don&rsquo;t have to worry Knowledge kingdom is here to make your dreams turn into a reality by supporting you with full means, either its study or financial needs, knowledge kingdom is here to help you get to your dreams.</p>\r\n\r\n<p>With you for you always, be a part of knowledge kingdom and fly high!</p>', '<p>Until you spread your wings you have no idea how high you&rsquo;ll fly, once you spread your wings you will reach new heights of glory.</p>\r\n\r\n<p>Want to hear some amazing stories! For many year knowledge kingdom have trained students for various study abroad entrance exams like IELTS, TOEFL, GRE, GMAT, SAT, students have proven to be determined and focused about the exams and their will to study in a foreign institution. Below are the short amazing, inspiring and proof of determination stories of our student&rsquo;s victory and an example of how knowledge kingdom has become the leading overseas consultancy of Bhopal. We hope these stories may inspire you to take up your dream and reach your goal. With the support of our team and with the help of the amazing faculty, students of knowledge kingdom have scored golden stars in their results. Results are the simple and the most powerful way to show the world how capable you are, to show the world that you are not less than anyone. Let the world be negative about your decision and you just prove them how capable you are.</p>\r\n\r\n<p>Having a positive attitude towards your abilities will lead you to success. Hard work and determination are the 2 main objects which will help you lead to your goals. Knowledge kingdom is here to make your will more strong. Students of knowledge kingdom have proven that the will to succeed is the key to all your answers, here is a glimpse of success that our students achieved in the path of reaching their goals!</p>', NULL, NULL, '2023-07-08 04:15:07', 'Welcome to Knowledge Kingdom', 'STUDY ABROAD CONSULTANCY IN BHOPAL', 'Knowledge Kingdom is a leading Study Abroad Consultants, Study Overseas Consultants in Bhopal. We being the Overseas Education Consultants offers students with the opportunity to study overseas. With the guidance and support of our team, many students have completed their wish to study in foreign universities.<br />\r\n<br />\r\nBeing the supreme Foreign Education Consultants in Bhopal, we offer students&nbsp;<a href=\"https://knowledgekingdom.in/ielts-coaching-bhopal\">IELTS classes in Bhopal</a>,&nbsp;<a href=\"https://knowledgekingdom.in/toefl-coaching-bhopal\">TOEFL classes in Bhopal</a>,&nbsp;<a href=\"https://knowledgekingdom.in/sat-coaching-bhopal\">SAT classes in Bhopal</a>,&nbsp;<a href=\"https://knowledgekingdom.in/gre-coaching-bhopal\">GRE classes in Bhopal</a>, and&nbsp;<a href=\"https://knowledgekingdom.in/gmat-coaching-bhopal\">GMAT classes in Bhopal</a>, in performing the best we nurture them. Knowledge Kingdom provides students with guidance and counselling to make the right decision according to their interest.<br />\r\n<br />\r\nBeing authorised with various foreign institution we advise our students about the educational facilities provided. Knowledge Kingdom gives the best possible service to their students and gives them the guarantee to help them in getting the best career orientated universities.');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_cat` varchar(255) DEFAULT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `faq_cat`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', 'When is the right time for submitting the Application?', 'iuyiy yiuy  yyy i iyiu iuyiuy yiuyui', 1, '2023-07-05 12:45:36', '2023-07-05 13:03:39');

-- --------------------------------------------------------

--
-- Table structure for table `faq_categories`
--

CREATE TABLE `faq_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_categories`
--

INSERT INTO `faq_categories` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(3, 'ABOUT APPLICATION', 1, '2023-07-05 06:20:20', '2023-07-05 06:20:20'),
(4, 'ENTRY REQUIREMENTS', 1, '2023-07-05 06:20:38', '2023-07-05 06:20:38'),
(5, 'ABOUT PROGRAM & CLASSES', 1, '2023-07-05 06:20:55', '2023-07-05 06:20:55'),
(6, 'INTERNATIONAL STUDENTS', 1, '2023-07-05 06:21:14', '2023-07-05 06:21:14');

-- --------------------------------------------------------

--
-- Table structure for table `featureds`
--

CREATE TABLE `featureds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featureds`
--

INSERT INTO `featureds` (`id`, `title`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Progressive Program', 'public/image/admin/featured/RjOvXoFFGx5Yht1H2trcLEZvUkfgjZMkpiV3CeY1.png', '1', '2023-07-04 00:58:15', '2023-07-04 00:58:15'),
(3, 'Best Career Counselling', 'public/image/admin/featured/QqsPgBHc0N0OSEWXGURplmPmKACvyNuzQTpAfMp2.png', '1', '2023-07-04 00:58:37', '2023-07-04 00:58:37'),
(4, 'Top University and Courses', 'public/image/admin/featured/gMcGb5mHCjCf3ePibuPL6RUQw74UfJCWbbKSPddT.png', '1', '2023-07-04 00:58:55', '2023-07-04 00:58:55'),
(5, 'Study Abroad Consultancy', 'public/image/admin/featured/uEGxWbrlhPgficvcVsD3uEZZAbthhGKm2aelXgUt.png', '1', '2023-07-04 00:59:20', '2023-07-04 00:59:20'),
(6, 'Visa and Other Services', 'public/image/admin/featured/w2zfFDDZvHUcZKTj58n2Yt7LIP4kX7DORPArBdVT.png', '1', '2023-07-04 01:04:42', '2023-07-04 01:04:42');

-- --------------------------------------------------------

--
-- Table structure for table `finance_banks`
--

CREATE TABLE `finance_banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `finance_banks`
--

INSERT INTO `finance_banks` (`id`, `title`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(3, 'AXIS Bank', 'public/image/admin/finance-bank/8OgNgLj9LOvUJTj8RqthNlMF8K7g8xhlWcrpUR4e.jpg', 1, '2023-07-05 00:18:49', '2023-07-05 00:18:49'),
(4, 'BOM', 'public/image/admin/finance-bank/1AA4t1Hx8Zd7IEf49GpWdwFC0PfDOFQHPeCWsPDT.jpg', 1, '2023-07-05 00:19:27', '2023-07-05 00:19:27'),
(5, 'RBL Bank', 'public/image/admin/finance-bank/DSXz6Mwp7KFAJHhgZftG5dNzWhCUZ1eWpmyWZEpe.jpg', 1, '2023-08-24 04:56:24', '2023-08-24 04:56:24'),
(6, 'Ebix Cash World Money', 'public/image/admin/finance-bank/4M17NiwbTIoCUg2hy3xOslXeb704ZaNs1yfFSGZo.jpg', 1, '2023-08-24 04:57:45', '2023-08-24 04:57:45'),
(7, 'HDFC Creadila', 'public/image/admin/finance-bank/miMUgZelQCnF9m7dF9vyb1ArBkaGvcnWeOTdhqQ7.jpg', 1, '2023-08-24 04:58:14', '2023-08-24 04:58:14'),
(8, 'Bank of Baroda', 'public/image/admin/finance-bank/Wv2PCaZ0c27XygQTTARYSUmxLy03HhwT33nKY1nK.jpg', 1, '2023-08-24 04:58:41', '2023-08-24 04:58:41'),
(9, 'Avanse', 'public/image/admin/finance-bank/fGIpyRaIT2RRHiaXwXI26peh1DyBmx0uyFBbC56O.jpg', 1, '2023-08-24 05:13:17', '2023-08-24 05:13:17'),
(10, 'Flywire', 'public/image/admin/finance-bank/WNT5wscP6MdNMkvgBTLkT6BG5R7d1rrItisSzjmC.jpg', 1, '2023-08-24 05:13:42', '2023-08-24 05:13:42'),
(11, 'Remitx', 'public/image/admin/finance-bank/BBS9mrfv5jKrPklkJMlqUgKSK8yNxTLLb2jkC2hh.jpg', 1, '2023-08-24 05:14:08', '2023-08-24 05:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `free_tests`
--

CREATE TABLE `free_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `free_tests`
--

INSERT INTO `free_tests` (`id`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Nisha uikey', '9479462327', 'Nishauikey1997@gmail.com', '2023-07-15 04:43:46', '2023-07-15 04:43:46'),
(2, 'Rampratap Mishra', '08718948415', 'ram9999mishra@gmail.com', '2023-07-18 06:39:54', '2023-07-18 06:39:54'),
(3, 'Rampratap Mishra', '08718948415', 'ram9999mishra@gmail.com', '2023-07-18 06:39:59', '2023-07-18 06:39:59'),
(4, 'Rampratap Mishra', '08718948415', 'ram9999mishra@gmail.com', '2023-07-18 06:40:07', '2023-07-18 06:40:07'),
(5, 'Rampratap Mishra', '08718948415', 'ram9999mishra@gmail.com', '2023-07-19 00:36:51', '2023-07-19 00:36:51'),
(6, 'Rampratap Mishra', '08718948415', 'ram9999mishra@gmail.com', '2023-07-19 00:36:56', '2023-07-19 00:36:56'),
(7, 'Nisha uikey', '9407352907', 'Nishauikey1997@gmail.com', '2023-09-22 23:43:21', '2023-09-22 23:43:21'),
(8, 'Nisha uikey', '9479462327', 'Nishauikey1997@gmail.com', '2023-09-23 01:18:32', '2023-09-23 01:18:32'),
(9, NULL, NULL, NULL, '2023-09-23 02:06:49', '2023-09-23 02:06:49'),
(10, NULL, NULL, NULL, '2023-09-23 11:04:14', '2023-09-23 11:04:14'),
(11, NULL, NULL, NULL, '2023-09-24 14:47:02', '2023-09-24 14:47:02'),
(12, NULL, NULL, NULL, '2023-09-26 22:27:02', '2023-09-26 22:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_27_165959_create_admins_table', 2),
(6, '2023_06_30_061250_create_bussiness_settings_table', 3),
(7, '2023_06_30_072431_create_c_m_s_settings_table', 4),
(8, '2023_06_30_105841_create_sliders_table', 5),
(9, '2023_06_30_110747_create_featureds_table', 6),
(10, '2023_06_30_111736_create_news_updates_table', 7),
(11, '2023_06_30_112037_create_achievers_table', 7),
(12, '2023_06_30_112402_create_testimonials_table', 7),
(13, '2023_06_30_112823_create_countries_table', 7),
(14, '2023_06_30_113050_create_blogs_table', 7),
(15, '2023_06_30_113807_create_coachings_table', 7),
(16, '2023_06_30_114230_create_finance_banks_table', 8),
(17, '2023_06_30_114458_create_photo_galleries_table', 8),
(18, '2023_06_30_114752_create_video_galleries_table', 8),
(19, '2023_06_30_115036_create_faq_categories_table', 8),
(20, '2023_06_30_115159_create_faqs_table', 8),
(21, '2023_07_07_110922_create_contacts_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `news_updates`
--

CREATE TABLE `news_updates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_updates`
--

INSERT INTO `news_updates` (`id`, `title`, `date`, `link`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Nearly two lakh Indians studied in US in 2017-18', '2016-03-19', 'https://timesofindia.indiatimes.com/india/indian-students-to-benefit-from-improved-uk-post-study-visa-offer/articleshow/68441862.cms', '0', '2023-07-04 05:55:55', '2023-07-04 05:55:55'),
(4, 'Changes to general skilled migration nomination policies', '2019-02-19', 'https://migration.sa.gov.au/skilled-migrants/changes-to-general-skilled-migration-nomination-policies', '0', '2023-07-04 05:57:27', '2023-07-04 05:57:27'),
(5, 'Indian students to benefit from improved UK post-study visa offer', '2019-03-16', 'https://timesofindia.indiatimes.com/india/indian-students-to-benefit-from-improved-uk-post-study-visa-offer/articleshow/68441862.cms', '1', '2023-07-04 05:58:26', '2023-07-04 05:58:26'),
(6, 'Changes to general skilled migration nomination policies', '2019-02-28', 'https://migration.sa.gov.au/skilled-migrants/changes-to-general-skilled-migration-nomination-policies', '1', '2023-07-04 05:59:53', '2023-07-04 05:59:53'),
(7, 'Canada’s immigration policies fetching a massive number of Indian students', '2017-04-07', 'https://www.hotcoursesabroad.com/india/blog/increase-in-indian-students-in-canada/', '1', '2023-07-04 06:02:12', '2023-07-04 06:02:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('knowledgekingdom01@gmail.com', '$2y$10$CvIOTloJe4Qn3jzSu0Njc.aTOCKkuiFMgfn32t94VwgtRpRH9zWyy', '2023-09-23 11:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo_galleries`
--

CREATE TABLE `photo_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gallery_type` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_modals`
--

CREATE TABLE `seo_modals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_descripation` text DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_modals`
--

INSERT INTO `seo_modals` (`id`, `page_name`, `meta_title`, `meta_descripation`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Home', 'Home', 'Home', '2023-07-17 01:36:28', '2023-09-27 10:10:55'),
(2, 'About Us', 'About Us', 'About Us', 'About Us', '2023-07-17 04:57:09', '2023-09-27 10:09:22'),
(3, 'Our Team', 'Our Team', 'Our Team', 'Our Team', '2023-07-17 04:57:21', '2023-09-27 10:09:54'),
(4, 'Why Us', 'Why Us', 'Why Us', 'Why Us', '2023-07-17 04:57:35', '2023-09-27 10:10:25'),
(5, 'Testimonials', 'Testimonials', 'Testimonials', 'Testimonials', '2023-07-17 04:57:53', '2023-09-27 10:20:03'),
(6, 'Achievers', 'Achievers', 'Achievers', 'Achievers', '2023-07-17 04:58:08', '2023-09-27 10:20:25'),
(7, 'Blogs', 'Blogs', 'Blogs', 'Blogs', '2023-07-17 04:58:22', '2023-09-27 10:21:15'),
(8, 'Contact Us', 'Contact Us', 'Contact Us', 'Contact Us', '2023-07-17 04:58:48', '2023-09-27 10:21:50'),
(9, 'Faqs', 'Faqs', 'Faqs', 'Faqs', '2023-07-17 04:59:02', '2023-09-27 10:22:30');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `slider_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `status`, `slider_type`, `created_at`, `updated_at`) VALUES
(2, 'slider-1', 'public/image/admin/slider/gDBs8ZupIaGKM58ln1JA0LRX8Ttj3K1WqIdrHRio.jpg', '1', 'slider_type1', '2023-06-30 06:59:02', '2023-07-04 02:02:21'),
(3, 'slider-2', 'public/image/admin/slider/MQRXz6Dsot5uoJTQOJdUSYZFAw7Fv7vWZCsUJlBf.jpg', '1', 'slider_type1', '2023-07-03 00:35:00', '2023-07-04 02:02:36'),
(4, 'slider-3', 'public/image/admin/slider/xAPHSAse6E1BGSGdmn8JosHyEx1t59wlqzjNJKLu.jpg', '1', 'slider_type1', '2023-07-04 02:03:03', '2023-07-04 02:03:03'),
(5, 'slider-4', 'public/image/admin/slider/dGvTmyLX5adhV1bhoCDFFGmEcATIAwuJWJPegWE8.jpg', '1', 'slider_type1', '2023-07-04 02:03:17', '2023-07-04 02:03:17'),
(6, 'slider-5', 'public/image/admin/slider/XtpMciBmT3eQ0JATSkIaW5LfYDpbQgEqT3BID8tM.jpg', '1', 'slider_type1', '2023-07-04 02:03:36', '2023-07-04 02:03:36'),
(7, 'slider-6', 'public/image/admin/slider/9QluiBNc8yFZ6D23SJ8zY1nSkbf14QRBwUiZPJNG.jpg', '1', 'slider_type1', '2023-07-04 02:03:51', '2023-07-04 02:03:51'),
(8, 'Home slider 2', 'public/image/admin/slider/H3vOQ9Ij8iXdSYBz8BQhJf94BJTgg3qGl5UFBEUg.jpg', '1', 'slider_type2', '2023-08-24 06:36:33', '2023-08-24 06:36:33'),
(9, 'Home Slider 2', 'public/image/admin/slider/oTMBW0vVlTft4lysOPuVRXByNISKA8kzQu4KC2Zz.jpg', '1', 'slider_type2', '2023-08-24 06:37:44', '2023-08-24 06:37:44'),
(10, 'Home Slider 2', 'public/image/admin/slider/jcE5xLOrOah3L1ifvNojZ1FxIi5DuKOyj4lbvzS3.jpg', '1', 'slider_type2', '2023-08-24 06:38:12', '2023-08-24 06:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `address`, `description`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Amir Lodi', 'public/image/admin/testimonial/lhw58qCvRYCoa5EzUf3UEksqVL6EeXXDYxxLX11N.jpg', 'University of Birmingham, UK', '<p>Knowledge Kingdom has done a very good job in getting me a UK student visa. They gave me a list of universities which suits my profile, which are all in the top ranking. I am not able to find the program containing the subject as major. But they have given me various universities offering these programs and they got offer letter from all the universities without any failure. And also they helped me in all aspects like choosing a better University, as well as the subject which have a better scope in that particular country. They have done all the job from the start till the end i.e., course selection, application filing, till getting VISA. Successfully enrolled in my dream university. Highly recommended.</p>\r\n\r\n<p>Special thanks to Shilpa ma&rsquo;am for daily follow-ups.</p>', 1, '2023-07-08 06:56:48', '2023-07-08 06:56:48'),
(6, 'Mayank Singh Choudhary', 'public/image/admin/testimonial/AB07IUcNgdAGvFI7UQwg0YFKP6zLwIjXdRJjkeuW.jpg', 'Sheffield Hallam University, UK', 'I would like to thank Knowledge Kingdom and the entire team, especially Mani Mam for helping me gets my visa for UK. She helped me find the right university and course which I would not have found without her. If I had any queries, she would always reply promptly and with the right answer, no matter how many times I called her. I would also like to thank the supporting staff they kept me updated about the progress of my university application and visa.', 1, '2023-07-08 06:57:32', '2023-07-08 06:57:32'),
(7, 'Robin Thomas', 'public/image/admin/testimonial/VImFZ67PGVUCFXpcizsZ1cjJKx0oGYEgh4mkqAa4.jpg', 'Trinity College Dublin, Ireland', 'If you want to go abroad, Knowledge Kingdom is the right place for you, that have helped me to get in one of the best universities in the world and they have made the complete process so easy for me, Knowledge Kingdom doesn&rsquo;t just give you a university; it gives you a world based opportunity as well I&rsquo;m glad I was a part of Knowledge Kingdom. The services provided especially in the visa filing were exemplary. I would definitely refer my friends, relatives or any acquaintance to Knowledge Kingdom.', 1, '2023-07-08 06:58:16', '2023-07-08 06:58:16'),
(8, 'Harsha Choudhary', 'public/image/admin/testimonial/cOdHEBxfVylBWYA8Y9BQUGUEUdFYzKyb4H82XDr7.jpg', 'University of Liverpool, UK', '<p>First of all, I&#39;m so glad &amp; excited to talk about Knowledge Kingdom, which is the most professional &amp; dedicated to their service excellence. I took their service. This is the best, trustworthy, well-organised foreign study consultant.</p>\r\n\r\n<p>I would like to give my heartiest thanks &amp; gratitude to Knowledge Kingdom and especially to Mani Mam, who is the most helpful, patient, proficient and friendly as well. I got UK student visa with the assistant of them and I believe I made the right choice. I had an amazing experience in the institute. Very co-operative staff. Special thanks to Mani ma&#39;am and Shilpa ma&#39;am.</p>\r\nI would recommend those who want to pursue foreign education to choose Knowledge Kingdom. They are really so reliable.', 1, '2023-07-08 06:59:11', '2023-07-08 06:59:11'),
(9, 'Masra Rahman', 'public/image/admin/testimonial/7uw00BfeTR1pEPYUXrUoUN9xzVOQc9o7AEXdCynp.jpg', 'University of Greenwich, UK', 'I would like to extend my gratitude and appreciation to everyone working in Knowledge Kingdom. It has played a pivotal role in helping me in my journey to the UK. I have good respect for the members of Knowledge Kingdom since they handled everything professionally and it was done on time. Once again thank you so much for everything.', 1, '2023-07-08 06:59:48', '2023-07-08 06:59:48'),
(10, 'Aditya Dhaked', 'public/image/admin/testimonial/Hr0NTQSTDakHAx7PWDU8O74dvzRgc4SDvOAWEPVL.jpg', 'Dublin Business School, Ireland', 'My experience with Knowledge Kingdom has been amazing. My counselor very meticulously planned my application and visa process and guided me well about the pre and post departure. This wouldn&rsquo;t have been possible without Knowledge Kingdom. Thank you for tolerating all my fears, answering all my queries and doubts and bringing the confidence in me. Thank you for all the efforts and support and for making my dream comes true!', 1, '2023-07-08 07:00:28', '2023-07-08 07:00:28'),
(11, 'Ankita Pathak', 'public/image/admin/testimonial/RVSW1zkJDLU30KV2Y8xoMoGDRd7yqxvXaHa0XBY1.jpg', 'Staffordshire University, UK', 'Knowledge Kingdom was referred to me by a friend. I got all the guidance and support from team Knowledge Kingdom. All the counselors are very well qualified. They all have gone through the whole visa process themselves, which makes them even more suited for providing guidance. I cannot thank the team enough for all their help and highly recommend Knowledge Kingdom to any college applicant.', 1, '2023-07-08 07:01:15', '2023-07-08 07:01:15'),
(12, 'Majinder Singh Natt', 'public/image/admin/testimonial/2JcVuoyr837QeXk3g6e2fYICqJrzdCd4d8WK1y5X.jpg', 'Fleming College, Canada', 'I was fortunate enough to walk straight up to Knowledge Kingdom and get everything done under one roof. You have always been welcoming and whatever doubts I have had, you have cleared them in a courteous way rather than condescending. You have helped me when I needed, replied to me emails without delay and without fail, helped me arrange all the required documents in advance so that I don&rsquo;t have any troubles, helped me prepare for my visa and apart from all this, you have also been helpful with my family who were very concerned about me all this while. For this reason having an understanding counselor is really important. I and always be grateful for guiding me all this time.', 0, '2023-07-08 07:06:27', '2023-07-08 07:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nisha uikey', 'nishauikey1997@gmail.com', NULL, '$2y$10$f6D0Fl.9mFtbuORs2r1rgum.n876nTYrekiQsSaCLcllJKoS.ypT2', 'RbwiBLgxApH1u4m8pKVB5XAKn9HxyUN9NsSGvBv1w9Lc5G06ygvedYN0igfB', '2023-06-27 04:57:03', '2023-07-01 04:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

CREATE TABLE `video_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_galleries`
--

INSERT INTO `video_galleries` (`id`, `title`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'jhuiiu jhjjkjkjk', 'https://timesofindia.indiatimes.com/india/indian-students-to-benefit-from-improved-uk-post-study-visa-offer/articleshow/68441862.cms', 1, '2023-07-06 03:33:42', '2023-07-06 03:36:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievers`
--
ALTER TABLE `achievers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bussiness_settings`
--
ALTER TABLE `bussiness_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coachings`
--
ALTER TABLE `coachings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_m_s_settings`
--
ALTER TABLE `c_m_s_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_categories`
--
ALTER TABLE `faq_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featureds`
--
ALTER TABLE `featureds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_banks`
--
ALTER TABLE `finance_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `free_tests`
--
ALTER TABLE `free_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_updates`
--
ALTER TABLE `news_updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_modals`
--
ALTER TABLE `seo_modals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_galleries`
--
ALTER TABLE `video_galleries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievers`
--
ALTER TABLE `achievers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bussiness_settings`
--
ALTER TABLE `bussiness_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coachings`
--
ALTER TABLE `coachings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `c_m_s_settings`
--
ALTER TABLE `c_m_s_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faq_categories`
--
ALTER TABLE `faq_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `featureds`
--
ALTER TABLE `featureds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `finance_banks`
--
ALTER TABLE `finance_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `free_tests`
--
ALTER TABLE `free_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `news_updates`
--
ALTER TABLE `news_updates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_modals`
--
ALTER TABLE `seo_modals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video_galleries`
--
ALTER TABLE `video_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
