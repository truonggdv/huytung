-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2020 lúc 06:49 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banmaytinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(2, 'tungvathang', '1'),
(6, 'admin', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idsanpham` int(11) NOT NULL,
  `noidungbinhluan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `taikhoanbinhluan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`idsanpham`, `noidungbinhluan`, `taikhoanbinhluan`) VALUES
(16, 'rgr', 'test1'),
(16, 'ngu', 'test1'),
(16, 'hes lo', 'test1'),
(16, 'hes lo', 'test1'),
(16, 'hes lo', 'test1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsp`
--

CREATE TABLE `chitietsp` (
  `id_sp` int(100) NOT NULL,
  `tensp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(100) NOT NULL,
  `id_loaisp` int(100) NOT NULL,
  `thutu` int(100) NOT NULL,
  `thongtinnhanh` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsp`
--

INSERT INTO `chitietsp` (`id_sp`, `tensp`, `hinhanh`, `gia`, `id_loaisp`, `thutu`, `thongtinnhanh`) VALUES
(16, 'Laptop Huawei MateBook D 15 R5 3500U 8GB/256GB+1TB/Win10 (Boh-WAQ9R)', 'h1.jpg', 15990000, 9, 1, 'Thỏa sức sáng tạo với laptop Huawei MateBook D 15 - chiếc laptop học tập - văn phòng hoàn toàn mới đến từ nhà Huawei, MateBook D 15 mang đến thiết kế sang trọng, mỏng nhẹ và cấu hình mạnh mẽ cùng với vô vàn tính năng hiện đại để bạn khám phá.'),
(17, 'Laptop Asus Vivobook A412FA-EK223T i3-8145U/ 4GB/ 512GB/ 14\" FHD/ Win 10', 'h2.png', 11990000, 9, 1, 'Laptop Asus A412FA-EK223T là dòng Laptop có thiết kế nhỏ gọn và thời trang , cùng cấu hình đáp ứng tốt nhu cầu văn phòng'),
(18, 'Asus ROG Mothership GZ700GX-EV002R', 'h3.jpg', 178990000, 9, 1, 'Asus ROG Mothership GZ700 được trang bị CPU Core i9-9980HK cùng card đồ họa rời RTX 2080 hỗ trợ ép xung, Ổ cứng 3 x M.2 NVMe PCIE 3.0 x4 512GB SSD tốc độ đọc ghi lên tới 8700MB/s, ram 64GB DDR4 cho tốc độ xử lý đa nhiệm cực khủng.'),
(19, 'Lenovo Thinkpad T490S 14 inch / Core i5 8265U / RAM 8GB / SSD 256GB / 14″ FHD', 'h4.jpg', 23500000, 9, 1, 'Lenovo Thinkpad T490S – cỗ máy làm việc tuyệt vời.\r\nVới thiết kế mỏng nhẹ, bền bỉ, khả năng di động linh hoạt và hiệu năng cao, Lenovo Thinkpad T490S chính là model T – series tốt nhất của Lenovo từ trước đến nay.'),
(20, 'Surface Book 2 15 inch Core i7 RAM 16GB SSD 512GB', 'h5.jpg', 60000000, 9, 1, 'Với ngoại hình mỏng nhẹ như một chiếc laptop, có thể biến hình thành tablet chỉ trong \"một nốt nhạc\" và mang sức mạnh phần cứng không thua kém ai vậy còn điều gì mà bạn chưa hài lòng về Surface Book 2 15 inch Core i7 RAM 16GB SSD 512GB?'),
(21, 'Surface Pro X | SQ1 / RAM 16GB / SSD 512GB ( LTE )', 'h6.jpg', 51000000, 9, 1, 'Surface Pro X được thiết kế với bộ vi xử lý sử dụng chip hiện đại, mới nhất Qualcomm SQ1 dựa trên cấu trúc ARM và đồng thời thiết bị cũng được cải tiến về màn hình, thiết kế cùng nhiều tính năng được Microsoft nâng cấp hứa hẹn sẽ là sản phẩm mang đến cho người dùng sự tiện lợi và đa năng nhất.'),
(22, 'MÁY TÍNH XÁCH TAY MECHREVO S1 14-INCH', 'h7.jpg', 28610000, 9, 1, 'Máy tính xách tay mỏng và nhẹ MECHREVO S1, hiệu năng siêu mạnh, cấu hình i7 8550U + 8GB DDR4 + 256GB PCIE SSD + thẻ đồ họa MX150 (phiên bản máu đầy đủ), gam màu 72% NTSC Màn hình IPS 8 bit.'),
(34, 'PC Dell Inspiron 3881 MT ', 'h8.jpg', 27549000, 10, 1, 'PC Dell Inspiron 3881 MT (i7-10700F/16GB RAM/512GB SSD/GTX1660S/WL+BT/K+M/Win10) (MTI71213W-16G-512G)'),
(37, 'PC Dell XPS 8940', 'h9.jpg', 34599000, 10, 1, 'PC Dell XPS 8940 (i7-10700/8GB RAM/512GB SSD+1TB HDD/GTX1660Ti/DVDRW/WL+BT/K+M/Win 10) (70226565)\r\n'),
(38, 'PC GAMING ASUS ROG STRIX', 'h10.jpg', 119000000, 10, 2, 'PC GAMING ASUS ROG STRIX (I9 10850K/Z490/64GB RAM/500GB SSD/RTX 3090/850W/RGB)\r\n'),
(39, 'PC Asus ROG Huracan G21CN', 'h11.png', 28699000, 10, 2, 'PC Asus ROG Huracan G21CN (i5-9400F/8GB RAM/256GB SSD/RTX2060/Win 10) (G21CN-D-VN001T)\r\n'),
(40, 'PC HP EliteOne 800G4 AIO', 'h12.png', 35999000, 10, 2, 'PC HP EliteOne 800G4 AIO (i7-8700/8GB RAM/1TB HDD/RX 560/23.8FHD Touch/DVDWR/WL/K+M/Win 10) (4ZU47PA)\r\n'),
(41, 'PC ENTHUSIAST GAMING LIMITED 003', 'h12a.jpg', 209999000, 10, 1, 'PC ENTHUSIAST GAMING LIMITED 003 (I9 10900K/Z490/64GB RAM/2TB SSD/6TB HDD/RTX 2080Ti/1200W/Tản AIO ASUS RYUJIN 360/Win 10 Pro/ RGB)\r\n'),
(42, 'PC Asus Gaming Station GS30', 'h14.jpg', 85690000, 10, 1, 'PC Asus Gaming Station GS30 (i9-9900/64GB RAM (16*4)/256GB SSD+2TB HDD/RTX2080/K+M/Win 10 Pro) (GS30-9900003B)\r\n'),
(43, 'PC Lenovo Ideacentre AIO A340-22IWL', 'h15.jpg', 17389000, 10, 1, 'PC Lenovo Ideacentre AIO A340-22IWL (i5-10210U/4GB RAM/256GB SSD/21.5 inch FHD/DVDRW/WL+BT/K+M/Win 10) (F0EB00L3VN)\r\n'),
(46, 'Card màn hình Asus ROG-STRIX-RTX3090-24G-GAMING', 'l1.jpg', 53790000, 11, 1, 'Card màn hình Asus ROG Strix RTX 3090 24Gb Gaming là một trong những sản phẩm cao cấp nhất của Asus phục vụ cho nhu cầu gaming ở độ phân giải 4K 60Fps. Đây là card đồ họa sử dụng kiến trúc Ampare hoàn toàn mới cùng nhân RT thế hệ 2, nhân Tensor thế hệ 3, Nvidia RTX IO, VRAM GDDR6X và sản xuất trên tiến trình 8nm được Samsung làm riêng. '),
(47, 'Mainboard GIGABYTE Z490 AORUS XTREME WATERFORCE', 'l2.jpg', 29889000, 11, 2, 'Mainboard Z490 AORUS XTREME WATERFORCE là đỉnh cao trong thiết kế bo mạch chủ dành cho máy tính để bàn cá nhân của GIGABYTE trong năm nay. Đẹp mắt và trang bị những công nghệ mới nhất, nó được coi là một trong những sản phẩm có thể tận dụng sức mạnh của i9-10900K tốt nhất trên thị trường.'),
(48, 'RAM Desktop Gskill Trident Z RGB (F4-3600C18D-64GTZN) 64GB DDR4\r\n', 'l3.jpg', 8199000, 11, 2, 'Với thanh ánh sáng hoàn toàn tiếp xúc với đèn LED RGB rực rỡ, được kết hợp với thiết kế tản nhiệt RAM G.SKILL Trident Z RGB DDR4 16GB Bus 3600 từng đoạt giải thưởng và được chế tạo với các thành phần chất lượng cao nhất, bộ nhớ Ram PC G.SKILL Trident Z full length RGB DDR4 Bus 3600 kết hợp ánh sáng RGB sống động nhất với hiệu suất vượt trội.'),
(12, 'Ổ cứng SSD Plextor PX 1TM9PeY 1TB M.2 2280 PCIe NVMe Gen 3x4', 'l4.jpg', 5299000, 11, 1, 'Thiết kế chiếu sáng RGB rực rỡ mang lại hiệu ứng hình ảnh vô cùng lộng lẫy.\r\nĐược thiết kế đặc biệt để hài hòa với các nền tảng chơi game chuyên nghiệp.\r\nCó khả năng chịu được các chuyển động sốc và rung.\r\nECC 128 bit và Thuật toán giữ dữ liệu mạnh mẽ được sử dụng để đảm bảo dữ liệu được lưu trữ và truy xuất mà không gặp lỗi.\r\nCông nghệ LDPC mới nhất đảm bảo độ chính xác của dữ liệu & độ tin cậy của SSD.'),
(49, 'CPU Intel Xeon Platinum 8274 - Socket Intel LGA 3647\r\n', 'l5.jpg', 399099000, 11, 2, 'CPU Intel Xeon Platinum 8274 (3.2GHz turbo up to 4.0GHz, 24 nhân, 48 luồng, 35.75 MB Cache, 240W) - Socket Intel LGA 3647.\r\nDòng sản phẩm Intel Xeon Platinum dành cho đối tượng cần xây dựng những trung tâm dữ liệu lớn, đòi hỏi những linh kiện tốt nhất và những giải pháp chuyên nghiệp nhất. Những gì án lớn tầm cỡ các tập đoàn đa quốc gia và những công ty dịch vụ viễn thông nên tham khảo qua dòng sản phẩm này.'),
(13, 'Vỏ máy tính - case Jonsbo MOD 5 (Mid Tower)\r\n', 'l6.jpg', 12999000, 11, 2, 'Thiết kế độc đáo với độ hoàn thiện cực kỳ cao cấp. Jonsbo MOD 5 mang đậm phong cách gaming đem lại vẻ độc đáo cho góc làm việc của bạn.'),
(50, 'Nguồn Asus ROG Thor 1200W Platinum - RGB 1200W 80 Plus Platinum Full Modular\r\n', 'l7.jpg', 9189000, 11, 2, 'Trang bị quạt tản nhiệt 135mm với cánh quạt được thiết kế cấp bằng sáng chế nhằm kéo dài tối đa tuổi thọ của linh kiện'),
(14, 'PC Acer Aspire XC-885', 'h16.jpg', 18400000, 10, 1, 'PC Acer Aspire XC-885 (i7 8700/8G RAM/1TB HDD/GT730 2G/DVDRW/K+M/WL/DOS) (DT.BAQSV.014)\r\n'),
(9, 'Bộ phát wifi TP-Link Archer AX11000\r\n', 'b7.jpg', 15999000, 13, 1, 'Tốc độ Wi-Fi lên đến hơn 10 Gbps: 4804 Mbps (5 GHz Gaming) + 4804 Mbps (5 GHz) + 1148 Mbps (2.4 GHz).\r\nTự động Phát hiện và tối ưu hóa luồng dữ liệu game, đảm bảo trải nghiệm chơi game của bạn luôn ở mức tuyệt vời nhất.\r\nCung cấp Cổng WAN 2.5 Gbps và tám cổng LAN Gigabit, 2 cổng USB 3.0 Type A và Type C cung cấp kết nối tốc độ cực nhanh.'),
(8, 'Switch HPE 1920S 24G+2SFP PoE+ _JL385A\r\n', 'b8.jpg', 21999000, 13, 1, '12 cổng LAN RJ-45 10/100/1000 PoE+,\r\n12 cổng 10/100/1000 ports,\r\n2 cổng SFP 100/1000 Mbps,\r\nswitching capacity: 52 Gbps,\r\nPoE capability: 370W PoE+.'),
(7, 'Cân bằng tải Draytek Vigor 3900\r\n', 'b9.jpg', 425000, 13, 1, 'Multi-WAN Firewall Router & VPN Gateway chuyên nghiệp cho doanh nghiệp, khách sạn, phòng game.\r\n5 cổng WAN Gigabit (4 cổng WAN RJ-45 + 1 cổng quang trực tiếp SFP).\r\n3 cổng LAN Gigabit (2 cổng LAN RJ-45 + 1 cổng quang trực tiếp SFP), 2 cổng USB cho phép kết nối USB 3G/4G, Printer....'),
(6, 'Màn hình Dell S2719DGF\r\n', 'c2.jpg', 10989000, 21, 1, 'Hãy sẵn sàng để thưởng thức lối chơi nhập vai và hình ảnh sắc nét trên hầu như không biên giới 2K màn hình này. Powered by nghệ FreeSync và tốc độ làm tươi 144 Hz đáng kinh ngạc, cùng với nhanh như chớp 1ms thời gian đáp ứng, nó cung cấp một siêu mịn chơi game kinh nghiệm miễn phí của màn hình nó bị rách và chuyển động mờ. Dell S2716DGF cũng cung cấp một loạt các cổng để cho bạn dễ dàng kết nối màn hình của bạn với các thiết bị và thiết bị ngoại vi khác.'),
(5, 'Màn hình Asus XG32VQR ', 'c3.jpg', 16490000, 21, 2, 'Với công nghệ đèn độc quyền ASUS Aura Sync, Strix XG32VQR cho phép ánh sáng của môi trường xung quanh được đồng bộ với các bộ phận và thiết bị ngoại vi khác có hỗ trợ Aura. '),
(4, 'Màn hình Acer Predator XB3 XB273KP', 'c4.jpg', 36999000, 21, 2, 'Nitro XV273K là màn hình chơi game hoàn hảo. Ở độ phân giải 4K UHD, màn hình 27 \"này hỗ trợ DisplayHDR 400 và bao phủ gam màu 90% DCI-P3, thể hiện màu sắc rực rỡ nhất và chi tiết tốt nhất. Tốc độ làm mới lên đến 144Hz, phản hồi 4ms (GTG). Thời gian và khả năng tương thích NVIDIA G-SYNC, mang lại lối chơi mượt mà mà không ảnh hưởng đến các hiệu ứng thị giác. Và với các tính năng được thiết kế để mang lại sự thoải mái, tiện lợi và linh hoạt tối ưu, Nitro XV273K giúp bạn bảo đảm chiến thắng sau mỗi trận đấu.'),
(3, 'Màn hình Samsung S27F350FH', 'c5.png', 4299000, 21, 2, 'Màn hình siêu mỏng: với độ mỏng kinh ngạc 10mm, chỉ bằng một cây bút bi, màn hình mỏng hơn gấp hai lần màn hình Samsung thông thường. Chân đế tối giản: chân đế thanh lịch làm tăng vẻ đẹp của màn hình siêu mỏng. Kiểu dáng mặt sau: họa tiết ngang của mặt sau màn hình mang đến vẻ ngoài thời trang, hiện đại.'),
(2, 'Màn hình MSI Optix MAG271C\r\n', 'c1.png', 7999000, 21, 1, 'Với màn hình chơi game cong MSI Optix MAG271C. Được trang bị tốc độ Làm 144hz, bảng thời gian phản hồi 1ms, Optix MAG271C sẽ mang đến cho bạn lợi thế cạnh tranh mà bạn cần để hạ gục đối thủ. Được xây dựng với công nghệ FreeSync, MAG271C có thể phù hợp với tốc độ làm tươi màn hình với GPU của bạn để chơi game cực kỳ mượt mà. Hãy chắc chắn rằng bạn có thể đạt được điểm số của mình với tất cả các công nghệ mới nhất được tích hợp trong màn hình MSI Curved Gaming.\r\n\r\n'),
(51, 'Máy Photocopy Fuji Xerox DocuCentre-V 5070 CPS\r\n', 'b1.jpg', 138000000, 12, 1, 'Dòng máy photocopy Fuji Xerox V5070 CPS, tận dụng lợi thế của công nghệ trong smartphone và máy tính bảng bằng cách cho phép người sử dụng vận hành các thiết bị một cách trực quan, để sản xuất nhanh hơn và hiệu quả hơn.\r\n\r\nBốn động tác khác nhau - chạm, chạm đúp, kéo và gõ nhẹ - có thể được sử dụng để cuộn và chuyển đổi các chức năng một cách mượt mà và nhanh chóng.'),
(52, 'Máy in đa chức năng Brother MFC-T4500DW (A3 - in phun màu)\r\n', 'b2.jpg', 16500000, 12, 2, 'Máy in phun màu BROTHER MFC-T4500DW có thiết kế theo kiểu máy in phun màu, có kích thước 575mm x 477mm x 310mm phù hợp để sử dụng trong các văn phòng, khu vực làm việc hay tại không gian làm việc cá nhân tại nhà của người dùng. Ngoài ra, Máy in còn có thiết kế theo dạng máy in đa năng giúp cho người dùng có thể dễ dàng sử dụng máy in cho nhiều mục đích như In, Scan, Copy và Fax mang đến sự tiện nghi vượt trội tới người dùng khi sử dụng sản phẩm.'),
(53, 'Máy Chiếu Epson EB Z9750U với cường độ sáng 7.500 \r\n', 'b3.jpg', 129999000, 12, 1, 'Máy chiếu Epson EB-Z9750U là chiếc máy chiếu dành cho các địa điểm lớn với độ phân giải WUXGA và độ sáng lên tới 7.500 lumens, EB-Z9750U rất đơn giản để thiết lập và tận dụng những ưu điểm vượt trội của công nghệ 3LCD.'),
(54, 'Màn chiếu để sàn kéo tay di động Grandview Fantasy - 100 inch\r\n', 'b4.jpg', 6899000, 12, 0, 'Màn chiếu để sàn kéo tay di động Grandview Fantasy ( 2m03 x 1m52 ) - 100 inch'),
(55, 'Máy đếm tiền Silicon MC-9900N thiết kế thời trang, gọn nhẹ', 'b5.jpg', 7799000, 12, 1, 'Máy đếm tiền Silicon MC-9900N thiết kế thời trang, gọn nhẹ; máy đếm tiền tự tự động, đếm được cả tiền giấy và polime, máy có cả chức năng phân biệt tiền và giấy, phát hiện các loại tiền giả. Máy ấn định số đếm, đếm cộng dồn. Hiển thị màn hình LCD ( 2 mặt số ), có mặt số LED kéo dài. Silicon MC-9900N đang rất phổ biến trên thị trường và được người tiêu dùng ưa thích.\r\n\r\n'),
(56, 'Máy chấm công khuôn mặt Ronald Jack IFACE 602\r\n', 'b6.jpg', 8990000, 12, 1, 'Máy chấm công khuôn mặt Ronald Jack UFACE 602 được tích hợp camera độ phân giải cao và màn hình cảm ứng TFT 4.3 inch nên có thể chấm công bằng cách nhận dạng khuôn mặt, vân tay và thẻ một cách nhanh chóng và chính xác, hạn chế tối đa việc chấm công hộ như những loại máy chấm công bằng vân tay và thẻ thông thường.'),
(57, 'Bàn phím gaming Eblue Mazer EKM 768BKUS-IU Black\r\n', 'c6.jpg', 499000, 24, 1, 'Bàn phím giả cơ mới nhất đến từ E-Blue.\r\nPhát ra tiếng kêu Clicky vui tai.\r\nHệ thống Led Multi Colors, hiển thị từng khu vực.\r\nCó khả năng đổi màu led.\r\nTính năng Anti-Ghosting, cho phép nhận nhiều phím cùng một lúc.'),
(58, 'Bàn phím cơ Corsair K95 RGB Platinum Mechanical Cherry MX \r\n', 'c7.jpg', 4299000, 24, 1, 'Chiếc bàn phím Cao Cấp Nhất của Corsair, thương hiệu Mĩ.\r\nCorsair sử dụng 100% Switch phím cơ đến từ Cherry.\r\nĐược bổ sung thêm khu vực led viền trên rất đẹp.\r\nDãy phím Macro có thể gán nhiều chức năng đặc biệt trong game.\r\nTrang bị kê tay cho cảm giác gõ và chơi game thoải mái.'),
(59, 'Bàn phím cơ Realforce R2 RGB - Mechanical Topre 45gram', 'c8.jpg', 6479000, 24, 2, 'Bàn phím RealForce R2 RGB.\r\nThương hiệu bàn phím cơ cao cấp đến từ Nhật Bản.\r\nSwitch Topre cao cấp của Nhật Bản, phiên bản mới tương thích với keycap chân chữ thập thông thường.\r\nKeycaps Double shot xuyên led.\r\nTính năng tuỳ chỉnh độ nhạy.'),
(60, 'Chuột chơi game không dây Madcatz R.A.T Air Wireless\r\n', 'c9.jpg', 5999000, 24, 2, 'Chuột chơi game không dây Madcatz R.A.T Air Wireless\r\n'),
(61, 'Chuột Razer Viper Ultimate Wireless Gaming Mouse', 'c10.jpg', 4789000, 24, 3, 'Công nghệ Razer HyperSpeed.\r\nKết nối cả không dây và có dây.\r\nMắt đọc Razer Forcus+ 20.000 DPI.\r\nSwitch Razer Optical mouse-switch 70 triệu click.\r\nSiêu nhẹ 74 gram.\r\nLED RGB Chroma.'),
(63, 'Tai Nghe Dareu EH469 RGB \r\n', 'd1.jpg', 699000, 26, 1, 'Tai Nghe Dareu EH469 RGB.\r\nDriver: Φ50mm.\r\nHiệu ứng: giả lập 7.1.\r\nKết nối: USB.\r\nĐệm tai: da mềm.\r\nHeadband: kim loại.'),
(64, 'Loa Bluetooth Fenda F380X, FM - 2.1\r\n', 'd2.png', 1099000, 26, 1, 'Thiết kế màu đen sang trọng, bề ngoài chống gỉ sét và không in lại dấu vân tay. Loa thiết kế nhỏ gọn, dễ dàng sắp xếp, mang lại vẻ đẹp cho căn phòng của bạn.'),
(62, 'Webcam Logitech Conferencam Group\r\n', 'd3.jpg', 29999000, 27, 1, 'Giải pháp hội nghị truyền hình vừa túi tiền cho các phòng họp lên tới 14 người ( có thể lên tới 20 người khi dùng cùng mic mở rộng ).\r\nThấy mọi chi tiết với video HD và khả năng thu phóng 10 lần.\r\nCAMERA :Lấy nét tự động, quét ngang +/- 90° , Nghiêng +35° / -45 , Trường ngắm: Chéo: 90° , ngang: 82,1° , dọc: 52,2°.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `tenkhachhang` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangky`
--

INSERT INTO `dangky` (`tenkhachhang`, `matkhau`, `email`, `dienthoai`, `diachi`) VALUES
('hieu', 'hieu', 'tanhieufuture@gmail.com', 324234423, '43423'),
('123', '1342', '4234234', 42342, '4234'),
('t', 't', 'tantano@gmail.com', 1639576810, 't'),
('genie', '123', 'geniehan86@gmail.com', 1111111111, 'HY'),
('test1', 'a', 'test1@gmail.com', 369994444, 'abc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `tenkhachhang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`tenkhachhang`, `email`) VALUES
('tan', 'tanotan96@gmail.com'),
('tan', 'tanotan96@gmail.com'),
('tan', 'tanotan96@gmail.com'),
('tan', 'tanotan96@gmail.com'),
('tan', 'tanotan96@gmail.com'),
('tan', 'tanotan96@gmail.com'),
('tan', 'tanotan96@gmail.com'),
('tan', 'tanotan96@gmail.com'),
('tan', 'tanotan96@gmail.com'),
('tan', 'tanotan96@gmail.com'),
('tan', 'tanotan96@gmail.com'),
('tan', 'tanotan96@gmail.com'),
('tan', 'tanotan96@gmail.com'),
('tan', 'tanotan96@gmail.com'),
('', ''),
('t', 'tantano@gmail.com'),
('t', 'tantano@gmail.com'),
('t', 'tantano@gmail.com'),
('', ''),
('', ''),
('', ''),
('t', 'tantano@gmail.com'),
('t', 'tantano@gmail.com'),
('t', 'tantano@gmail.com'),
('', ''),
('t', 'tantano@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`hoten`, `email`, `sodienthoai`, `noidung`) VALUES
('tantano', 'tantano@gmail.com', '01639576810', 'tran ngoc tan');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id_loaisp` int(11) NOT NULL,
  `tenloaisp` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id_loaisp`, `tenloaisp`, `thutu`) VALUES
(9, 'Laptop', 1),
(10, 'Máy tính để bàn', 1),
(11, 'Linh kiện máy tính', 1),
(12, 'Thiết bị văn phòng', 1),
(13, 'Thiết bị mạng', 1),
(21, 'Màn hình', 2),
(24, 'Bàn phím, chuột', 2),
(26, 'Loa, tai nghe', 2),
(27, 'Webcam', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id_loaisp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `id_sp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id_loaisp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
