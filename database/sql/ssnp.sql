-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 27, 2023 at 11:21 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssnp`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Plastic 1.8 x 30m (15mm) ဇကာလိပ် ၄၈ လိပ် စစ်ကိုင်းသို့ အမှာပို့ပြီး ', 'https://scontent-sin6-3.xx.fbcdn.net/v/t39.30808-6/335276075_751641589709222_5942513123540665913_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=wfbDBf32rjwAX9hrhOL&_nc_ht=scontent-sin6-3.xx&oh=00_AfCYeEqWW-2xruwfPFlde1YO6NSYkck7dT0-J2JDoYpTvg&oe=642640C2,https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/336245953_1621505004947272_1700023666883723602_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=jhg44J4RoS0AX-89DUE&_nc_ht=scontent-sin6-2.xx&oh=00_AfARc8XPRW1ucfQ5cb0mcQHcpAjPJpwNBJAtkaZCRGvY8A&oe=642633C8,https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/336272319_1178871862817186_6893942931082210850_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=Bw1N9rvyq_sAX-gpzak&_nc_ht=scontent-sin6-2.xx&oh=00_AfDfZjfmQHZi6jI_xBuMjtb7TDoxP3tEF5aR3zod5JZNDA&oe=6425D1B5', NULL, NULL),
(2, 'Installation equipment and internal electric line @ Min Gone farm\r\n', 'https://scontent-sin6-4.xx.fbcdn.net/v/t39.30808-6/305644860_576577010928601_5834397988107732855_n.jpg?stp=cp6_dst-jpg_s600x600&_nc_cat=100&ccb=1-7&_nc_sid=730e14&_nc_ohc=hQsEn-crY6YAX9HNcYJ&_nc_ht=scontent-sin6-4.xx&oh=00_AfBFnwpvpu4BLu9AedQcPBAV9mork76NLMfh5PnynaZGXQ&oe=642554BF,https://scontent-sin6-1.xx.fbcdn.net/v/t39.30808-6/305440805_576577100928592_2061495750726207976_n.jpg?stp=cp6_dst-jpg&_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_ohc=YuO9jul6WysAX8fR8yW&_nc_ht=scontent-sin6-1.xx&oh=00_AfA5J29U-06S7O2_iJLP8RQZi-eC4QNwl9mWxMxVRPSYzQ&oe=64267776,https://scontent-sin6-3.xx.fbcdn.net/v/t39.30808-6/305405857_576577154261920_4002575689040082314_n.jpg?stp=cp6_dst-jpg&_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_ohc=vxwsISXajjUAX-3d5U0&_nc_ht=scontent-sin6-3.xx&oh=00_AfDXkRLywxMoLbs_aPRlIG4gW9o0i7OcclFrN1N7W5Df7A&oe=6425F010', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_27_052102_create_contacts_table', 1),
(7, '2023_03_27_054918_create_activities_table', 2),
(8, '2023_03_27_063127_create_products_table', 3),
(9, '2023_03_27_071732_create_services_table', 4),
(11, '2023_03_27_073727_create_projects_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_description`, `images`, `created_at`, `updated_at`) VALUES
(1, 'မွေးမြူ​ရေးခြံ မှာသုံးဖို့ plastic ဇကာများ, ဌက်​တွေ မဝင်နိုင်​အောင် ကာရံဖို့ ဇကာများနဲ့ ​နေ​​ရောင်ကာ အပူချိန်​လျော့ ဇကာများ ကို ပစ္စည်းမှန် ​စျေးသင့်စွာနဲ့ ဝယ်ယူနိုင်ပါပြီး ဇကာ ဆိုဒ်​လေး​တွေနဲ့ ​နေ​ရောင်ကာ ရာခိုင်နှုန်း​လေး​တွေကိုလဲ   ဇယား​လေးနဲ့ ​ပြောပြထားပါတယ်​နော် ဆက်သွယ်ဝယ်ယူလိုပါက ရုံးချိန်အတွင်း  ဖုန်း နံပါတ် 09 785327000 သို့ မေးမြန်းမှာယူနိုင်ပါသည် . ပစ္စည်းမှာယူပါက  ပစ္စည်းကြာချိန်က ၂ ပတ်ပါရှင့်\r\nမနက် ၈နာရီမှ ည​နေ ၅နာရီအတွင်း ပြန်လည်​ဖြေကြား​ပေးပါမည်ဖြစ်ပါသည်။\r\nကျေးဇူးတင်ပါသည်ရှင်။ ဌက် ဇကာ​လေးကို​တော့ comment ​လေးမှာ ဝင်ကြည့်​ပေးပါရှင့်', 'https://scontent-sin6-1.xx.fbcdn.net/v/t39.30808-6/336268039_568780878362255_4082579083569130540_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=Iqn3LRRVtWYAX_ILlNZ&_nc_ht=scontent-sin6-1.xx&oh=00_AfDwEDO8obYKtJBucsbbu2jI23qsvrzIx7wb0wtzKn5dVw&oe=642586B6,https://m.media-amazon.com/images/I/81ekuCBkqnL.__AC_SY300_SX300_QL70_ML2_.jpg,https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/336224627_158798677051790_1221992207620501125_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=-j7gunrIfiwAX9HcLIN&_nc_ht=scontent-sin6-2.xx&oh=00_AfC-V3kuWKceTLAkvqUm5KDt39K-ZvYY_VRBz3trLlrkyA&oe=64254A01,https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/336249128_209611464997654_8323108787831540108_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=pc1PKySQ0FcAX_4Ygs2&_nc_ht=scontent-sin6-2.xx&oh=00_AfCgtw6sinXL5RhtsdCCbzT1au1YQVz4PsZ2x4xM1_eSoQ&oe=6425386A', NULL, NULL),
(2, 'ကြက်​မွေးမြူ​ရေးခြံအတွက် ပြည်တွင်းပြည်ပမှ ကျွမ်းကျင် ပညာရှင်များ လုပ်သားများဖြင့် ပစ္စည်းများတပ်ဆင် ပြီး​သောပုံများဖြစ်ပါသည်.  \r\n​မွေးမြူ​ရေးခြံများ အဆင့်မြှင်တင်လိုပါက လိုအပ်ချက်များနှင့် ပစ္စည်းအ​ရေအတွက် ကုန်ကျစရိတ်များအတွက်လဲ ​ဆွေး​နွေး တိုင်ပင်နိုင်ပါသည်.\r\nမိမိတို့ ​မွေးမြူ​ရေးခြံများအတွက် ပစ္စည်းများ တပ်ဆင်ဝန်​ဆောင်မှု့ လိုလျှင်​သော်လည်း​ကောင်း ပစ္စည်းများမှာယူ ချင်လျင်​သော်လည်းကောင်း ရုံးချိန်အတွင်း ဖုန်းနံပါတ် ၀၉ ၇၈၅၃၂၇၀၀၀ သို့ ဆက်သွယ်​မေးမြန်းနိုင်ပါသည်', 'https://scontent-sin6-4.xx.fbcdn.net/v/t39.30808-6/332883458_894052518474516_8102627342052046194_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=hM0hbLoFhscAX9TNySr&_nc_ht=scontent-sin6-4.xx&oh=00_AfD-cu1e6RWnM6VjMozMd6R0YEVQkhNg9UaOmmdLQA-2zw&oe=6425A400,https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/332482154_733673011643321_6995240058697121321_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=_OLb0KgxQqEAX9l4LVD&_nc_ht=scontent-sin6-2.xx&oh=00_AfA79Xkyu59vzzTM2jO7rUfqN1xc8ebH2hg0JTdb6J1Mfg&oe=642653AC,https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/333093012_883852299388606_3473431276111956626_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=2NO1ofCjvnAAX_kXaJa&_nc_ht=scontent-sin6-2.xx&oh=00_AfBoKMs2q-oM2Y3mK-oRZgBc4Q-SkpX4L2Gty95ZNLeW5g&oe=6425DC51,https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/332479051_1682037005532116_4552173361526811713_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=Y5UFkadjFUwAX9MR0K7&_nc_ht=scontent-sin6-2.xx&oh=00_AfA4fPiJvOuzxw3QuAOpytbYx29K2tJJrrAA9GbGGI1CzA&oe=642623AD,https://scontent-sin6-3.xx.fbcdn.net/v/t39.30808-6/333047135_584816939919331_6237534656622044389_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=RQivxNjmDOIAX80TCy3&_nc_ht=scontent-sin6-3.xx&oh=00_AfDncKDX6XJItf_hHBpCZ5NDpby-zNppI-fPpdht7AiNMg&oe=6426782A,https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/333064644_1113810783347931_8752389288299884248_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=ez2JdJMxXk4AX9MErPH&_nc_ht=scontent-sin6-2.xx&oh=00_AfDcKbK3FNX-a5jgRcAeYN82__gl2fl9TiS-CK4T2Xh1Og&oe=64260863,https://scontent-sin6-3.xx.fbcdn.net/v/t39.30808-6/333097379_1423398425134903_8714043155480828516_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=oRtOESEXMXAAX8PHdbu&_nc_ht=scontent-sin6-3.xx&oh=00_AfA7DY0yjiJTH_ciJmVXAenkX5BkDcn9z4eKOrBgYPiKQA&oe=6425A1A8,https://scontent-sin6-4.xx.fbcdn.net/v/t39.30808-6/333081575_507121948259436_1986019179688467009_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=nt856QHMbCcAX9b-K0_&_nc_ht=scontent-sin6-4.xx&oh=00_AfCELhM7WkOM88adALoqTbXvUXl3G9XNhzawqIk7V-t3ZQ&oe=642672C1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_year` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_service` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `photo`, `images`, `location`, `project_year`, `type_of_service`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Engineering Project', 'စက်ရုံ လိုင်း​လေးတစ်ဖြတ်ပါ သံထည် အ​ဆောက်အဦး များ ​ဆောက်လုပ်လိုလျှင်​သော်လည်း​ကောင်း လျှပ်စစ်လိုင်းများ သွယ်တန်းလိုလျှင်​သော်လည်း​ကောင်း မီး​သတ်စနစ် တပ်ဆင်လိုလျှင်လည်း​ကောင်း MWR Engineering ကို သတိရလိုက်ပါ ပစ္စည်း အ​ရေအတွက် ကုန်ကျစရိတ်များနဲ့ ပုံစံဒီဇိုင်း ​ရေးဆွဲ တွက်ချက်ခြင်း ဝန်​ဆောင်မှု့များလဲ ရပါတယ်​နော် သိလို​သောအ​ကြောင်းအရာများကို ရုံးချိန် 8:00 AM to 5:00 PM (Monday to Saturday) အတွင်း 09785327000 သို့ ဆက်သွယ်​မေးမြန်းစုံစမ်းနိုင်ပါတယ် Page Messenger သို့ စာတိုများ​ပေးပို့ပြီးလဲစုံစမ်းနိုင်ပါတယ်ရှင်။', 'https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/333538670_5920966691357281_3682187148189271498_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=fePN5yZxDIIAX-5iaSV&_nc_ht=scontent-sin6-2.xx&oh=00_AfCJwPEybz2dBTSEc7F1wfF_MgR2VSwJPzeDWjSEh9e9sQ&oe=64257A71', 'https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/333538670_5920966691357281_3682187148189271498_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=fePN5yZxDIIAX-5iaSV&_nc_ht=scontent-sin6-2.xx&oh=00_AfCJwPEybz2dBTSEc7F1wfF_MgR2VSwJPzeDWjSEh9e9sQ&oe=64257A71,https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/333607051_1371912543637862_5256193041433350783_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=2M86d3M3CrsAX_Yci_1&_nc_ht=scontent-sin6-2.xx&oh=00_AfCz7scD3J3NTbD4If6KVncG6dNHHCWQJv4nfdsmIkcAXQ&oe=64272E97,https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/333312906_2395042140662821_5835306105671788572_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=rjUIxFtQLcwAX_l5Uyl&_nc_ht=scontent-sin6-2.xx&oh=00_AfC2ItdKIDuFjQ6dKNo62_zlZ-m0Psep5-YMfv9j2zzK8g&oe=6426376D,https://scontent-sin6-4.xx.fbcdn.net/v/t39.30808-6/334001600_1163447564371655_2891762092050573822_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=H8VQQOxpFzgAX-2sHho&_nc_ht=scontent-sin6-4.xx&oh=00_AfDmhvk8E9QOXwiCcNwm1zdbRMyjwBVtSN4ARwVOCORDCA&oe=6425E2F6', 'Yangon', '2023', 'Engineering Services', 'completed', NULL, NULL),
(2, 'Engineering Project', 'စက်ရုံ လိုင်း​လေးတစ်ဖြတ်ပါ သံထည် အ​ဆောက်အဦး များ ​ဆောက်လုပ်လိုလျှင်​သော်လည်း​ကောင်း လျှပ်စစ်လိုင်းများ သွယ်တန်းလိုလျှင်​သော်လည်း​ကောင်း မီး​သတ်စနစ် တပ်ဆင်လိုလျှင်လည်း​ကောင်း MWR Engineering ကို သတိရလိုက်ပါ ပစ္စည်း အ​ရေအတွက် ကုန်ကျစရိတ်များနဲ့ ပုံစံဒီဇိုင်း ​ရေးဆွဲ တွက်ချက်ခြင်း ဝန်​ဆောင်မှု့များလဲ ရပါတယ်​နော် သိလို​သောအ​ကြောင်းအရာများကို ရုံးချိန် 8:00 AM to 5:00 PM (Monday to Saturday) အတွင်း 09785327000 သို့ ဆက်သွယ်​မေးမြန်းစုံစမ်းနိုင်ပါတယ် Page Messenger သို့ စာတိုများ​ပေးပို့ပြီးလဲစုံစမ်းနိုင်ပါတယ်ရှင်။', 'https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/333538670_5920966691357281_3682187148189271498_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=fePN5yZxDIIAX-5iaSV&_nc_ht=scontent-sin6-2.xx&oh=00_AfCJwPEybz2dBTSEc7F1wfF_MgR2VSwJPzeDWjSEh9e9sQ&oe=64257A71', 'https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/333538670_5920966691357281_3682187148189271498_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=fePN5yZxDIIAX-5iaSV&_nc_ht=scontent-sin6-2.xx&oh=00_AfCJwPEybz2dBTSEc7F1wfF_MgR2VSwJPzeDWjSEh9e9sQ&oe=64257A71,https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/333607051_1371912543637862_5256193041433350783_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=2M86d3M3CrsAX_Yci_1&_nc_ht=scontent-sin6-2.xx&oh=00_AfCz7scD3J3NTbD4If6KVncG6dNHHCWQJv4nfdsmIkcAXQ&oe=64272E97,https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/333312906_2395042140662821_5835306105671788572_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=rjUIxFtQLcwAX_l5Uyl&_nc_ht=scontent-sin6-2.xx&oh=00_AfC2ItdKIDuFjQ6dKNo62_zlZ-m0Psep5-YMfv9j2zzK8g&oe=6426376D,https://scontent-sin6-4.xx.fbcdn.net/v/t39.30808-6/334001600_1163447564371655_2891762092050573822_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=H8VQQOxpFzgAX-2sHho&_nc_ht=scontent-sin6-4.xx&oh=00_AfDmhvk8E9QOXwiCcNwm1zdbRMyjwBVtSN4ARwVOCORDCA&oe=6425E2F6', 'Yangon', '2023', 'Engineering Services', 'completed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Apartment Design', 'https://media.architecturaldigest.com/photos/5e9f0a12d5eaf100086259e0/master/pass/Peter_Sandel_0222.jpg', NULL, NULL),
(2, 'Expert Mechanical', 'https://img.freepik.com/premium-vector/civil-engineering-tools-supervise-construction-planning-such-as-rulers-verniers-calipers-helmets-pencils-dividers-clamps-boots-plans-blueprint_1150-52771.jpg?w=2000', NULL, NULL),
(3, 'Architecture & Building', 'https://blog.ipleaders.in/wp-content/uploads/2021/06/Arch2O-architectural-sketching-10-architecture-sketching-tips-1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
