-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 19, 2021 lúc 01:37 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chillingcoffee`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `maBai` int(11) NOT NULL,
  `maNV` int(11) NOT NULL,
  `maDanhmuc` int(11) NOT NULL,
  `tieuDe` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gioiThieu` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noiDung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `views` int(11) NOT NULL,
  `start_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`maBai`, `maNV`, `maDanhmuc`, `tieuDe`, `gioiThieu`, `noiDung`, `views`, `start_date`) VALUES
(7, 4, 15, 'Thức uống giải nhiệt', 'Nạp năng lượng cho buổi trưa hè nóng bức nào Order thức uống nhà mình đi vừa ngon vừa rẻ vừa tốt cho sức khoẻ lại còn đẹp da', 'Một cây trà nếu được trồng ở những vùng đất có độ cao và khí hậu khác nhau thì sẽ thu được những loại trà cũng khác nhau. Có thể thấy sự phức tạp đến từ phía bên trong, từ những thành phần cũng như cấu tạo hoá học độc nhất vô nhị mà chỉ mình cây trà có được. Thấu hiểu điều đó, để giữ trọn vị tươi nguyên, bảo toàn dưỡng chất tốt nhất, một búp và hai lá non thường được chúng tôi thu hái vào thời điểm sáng sớm. Tiếp đến, quy trình sản xuất để cho ra các sản phẩm trà chất lượng cũng được thực hiện khép kín.\r\n\r\nĐể có được một tách trà ngon thì từ quá trình thu hái lá trà cho đến quá trình sao chế và pha trà cũng cần phải chuẩn xác. Khi sao trà cần phải canh lửa vừa vặn, khi pha trà nhiệt độ nước cũng vừa phải. Để giờ đây, cầm trên tay tách trà ngát hương, nhâm nhi trọn vị trà truyền thống như là một cách thể hiện tâm tình đối với cuộc sống, cảm thụ hương vị tự nhiên toát ra từ lá trà, lòng an nhiên trước bao bộn bề.', 3, '2021-08-01'),
(8, 4, 15, ' Chè đậu đỏ', 'Chè đậu đỏ là một món ăn phổ biến tại Trung Quốc, thường thấy tại Trung Quốc đại lục, Hồng Kông và Đài Loan. Món ăn này thường được ăn lạnh vào mùa hè và ăn nóng vào mùa đông. Chè đậu đỏ còn sót lại cũng có thể được đông lạnh thành đá viên và là một món tráng miệng phổ biến.', 'Trong ẩm thực Quảng Đông, món chè đậu đỏ được làm đường đá, vỏ quýt phơi khô và hạt sen thường được phục vụ làm món tráng miệng vào cuối bữa ăn. Các biến thể khác được có thêm các thành phần như sago, bột sắn, nước cốt dừa, kem, sủi dìn hoặc gạo nếp cẩm. Hai loại đường có thường được sử dụng thay thế cho nhau là đường đá và đường cát.\r\n\r\nĐậu đỏ là loại thực phẩm bổ dưỡng. Chúng chứa hàm lượng protein, chất xơ và vitamin dồi dào mang lại nhiều lợi ích về sức khỏe và sắc đẹp cho người sử dụng. Đậu đỏ thường được chế biến ở dạng nguyên hạt hoặc xay ra thành bột đậu đỏ. Khi biết về những công dụng của bột đậu đỏ, có thể bạn sẽ rất hào hứng sử dụng loại nguyên liệu này.\r\n\r\nHàm lượng dinh dưỡng trong đậu đỏ giúp cải thiện tổng thể sức khỏe của người thường xuyên sử dụng. Không những thế, đậu đỏ và bột đậu đỏ còn có thể giúp bạn giảm cân; ổn định lượng đường trong máu và hạn chế nguy cơ mắc một số bệnh ung thư.\r\n\r\nMột trong những công dụng của bột đậu đỏ và đậu đỏ nguyên hạt là cung cấp cho cơ thể lượng protein cần thiết. Protein là thành phần chính trong cơ thể. Nó được tạo ra từ các axit amin để tạo ra các tế bào, mô, cơ và xương.', 11, '2021-07-28'),
(9, 1, 3, 'Freeship mùa dịch', 'Thèm nước nhưng lại ngại ra đường. Đừng lo vì chúng tôi đã sẵn sàng ship tận tay dù bạn ở nơi đâu !!! Ưu đãi cực lớn cho Tháng 7 này #freeship toàn bộ đơn hàng trên menu khi đặt hàng ngay hôm nay bạn nhé', 'Thèm nước nhưng lại ngại ra đường. Đừng lo vì ChillingCoffee đã sẵn sàng ship tận tay dù bạn ở nơi đâu !!!\r\nƯu đãi cực lớn cho Tháng 7 này #freeship toàn bộ đơn hàng trên menu khi đặt hàng ngay hôm nay bạn nhé \r\nInbox hoặc đặt hàng ngay nào\r\nYên tâm phòng chống dịch và đợi quà từ ChillingCoffee nhé !', 5, '2021-08-03'),
(10, 1, 13, 'Kombucha', 'Kombucha được cho là lần đầu tiên có nguồn gốc từ Trung Quốc, nơi đồ uống là truyền thống. Đến đầu thế kỷ 20, nó đã lan sang Đức, Nga và các khu vực khác của Đông Âu. Kombucha hiện được mua lại trên toàn cầu, và cũng được đóng chai và bán thương mại bởi các công ty khác nhau.', 'Kombucha được cho là có nguồn gốc từ Trung Quốc hoặc Nhật Bản. Loại trà này được tạo ra bằng bổ sung các chủng vi khuẩn đặc biệt, nấm men và đường vào trà đen hoặc xanh, sau đó trà được ủ, những chủng vi sinh vật này sẽ lên men trà trong một tuần hoặc lâu hơn.\r\n\r\nTrong quá trình này, vi khuẩn và nấm men tạo thành một lớp màng bao bọc nhìn giống như nấm trên bề mặt của trà. Đây là lý do tại sao kombucha còn được gọi là \"trà nấm\". Cả hai loại vi sinh vật này (vi khuẩn và nấm men) này là một thể cộng sinh (Symbiotic Colony of Bacteria and Yeast – SCOBY), và có thể được sử dụng để lên men tạo ra trà kombucha.\r\n\r\nQuá trình lên men tạo ra axit axetic (cũng được tìm thấy trong giấm) và một số hợp chất axit khác, một lượng cồn rất nhỏ và khí ga. Một lượng lớn vi khuẩn cũng phát triển trong hỗn hợp này. Mặc dù vẫn chưa có bằng chứng về lợi ích của chế phẩm sinh học của kombucha, nhưng nó có chứa một số loài vi khuẩn tạo axit lactic có thể có chức năng sinh học.\r\n\r\nProbiotic cung cấp cho hệ tiêu hoá các vi khuẩn có lợi, khỏe mạnh. Những vi khuẩn này có thể cải thiện nhiều khía cạnh của sức khỏe, bao gồm tiêu hóa, giảm viêm và thậm chí giảm cân. Vì lý do này, thêm đồ uống như kombucha vào chế độ ăn uống của bạn có thể cải thiện sức khỏe của bạn theo nhiều cách.\r\n\r\nTóm lại, Kombucha là một loại trà được tạo ra bằng cách lên men. Đây là một nguồn thực phẩm chứa nhiều lợi khuẩn và có nhiều lợi ích cho sức khỏe.\r\n\r\nTrà xanh là một trong những đồ uống tốt nhất cho sức khỏe. Điều này là do trà xanh chứa nhiều hợp chất hoạt tính sinh học, chẳng hạn như polyphenol, có chức năng như chất chống oxy hóa mạnh trong cơ thể. Kombucha làm từ trà xanh, vì vậy nó cũng chứa nhiều hợp chất thực vật có trong trà xanh và có lẽ tự hào có một số lợi ích tương tự như trà xanh.\r\n\r\nCác nghiên cứu cho thấy uống trà xanh thường xuyên có thể làm đốt cháy lượng calo dư thừa trong cơ thể, giảm mỡ bụng, cải thiện mức cholesterol, giúp kiểm soát lượng đường trong máu và nhiều lợi ích khác. Một số các nghiên cứu khác cũng cho thấy những người uống trà xanh có thể giảm nguy cơ ung thư tuyến tiền liệt, ung thư vú và ung thư đại tràng.\r\n\r\nKombucha được chế biến từ trà xanh, vì vậy nó có thể mang lại nhiều lợi ích sức khoẻ tương tự như trà xanh, ví dụ như giảm cân và kiểm soát đường huyết.\r\n\r\nChất chống oxy hóa là những có tác dụng bảo vệ cơ thể chống lại các gốc tự do do các phân tử này phản ứng có thể làm tổn thương các tế bào của cơ thể. Nhiều bằng chứng khoa học cho thấy chất chống oxy hóa có nguồn gốc từ thực phẩm và đồ uống tốt cho sức khỏe của chúng ta hơn bổ sung chất chống oxy hóa từ các loại thực phẩm chức năng.\r\n\r\nKombucha, đặc biệt là khi được làm bằng trà xanh, có tác dụng chống oxy hóa tại gan. Các nghiên cứu trên chuột cho thấy rằng uống kombucha thường xuyên giúp làm giảm chất độc tích tụ trong gan do hóa chất độc hại, trong một số trường hợp, hiệu quả thải độc ít nhất 70%. Mặc dù chưa có nghiên cứu nào được tiến hành trên con người tồn tại về hiệu quả này, nhưng có vẻ như đây là một lĩnh vực nghiên cứu đầy hứa hẹn cho những người mắc bệnh gan.\r\n\r\nTóm lại, Kombucha rất giàu các chất oxy hoá và các nghiên cứu cho thấy tác dụng bảo vệ gan trên chuột khỏi các chất độc có hại cho gan.\r\n\r\n', 2, '2021-08-08'),
(16, 2, 3, 'Mua 1 tặng 1 đơn đặt trước tự đến lấy', 'Nhập mã PICKUPNHE: Mua 01 tặng 01 với đơn hàng đặt trước và tự đến lấy\r\nÁp dụng trên toàn hệ thống The Coffee House', 'Nhập mã PICKUPNHE: Mua 01 tặng 01 với đơn hàng đặt trước và tự đến lấy\r\n\r\nÁp dụng trên toàn hệ thống The Coffee House\r\n\r\nÁp dụng khi đặt hàng qua tính năng PICK UP tại app The Coffee House\r\n\r\nDiễn ra đến 13/07.\r\n\r\nThủ đô của Cộng hòa Séc là một trong những điểm đến hàng đầu tại Châu Âu với kho tàng lịch sử, nghệ thuật, âm nhạc và kiến trúc phong phú. Con sông Vltava đẹp như một bức tranh, uốn lượn quanh thành phố với một vài cây cầu bắc ngang, mỗi cây cầu đều mang nét văn hóa hoặc kiến trúc hấp dẫn. Một trong những cây cầu nổi tiếng nhất trong số đó là Cầu Charles.', 0, '2021-08-24'),
(17, 1, 3, 'Thức uống giải nhiệt', 'Loài cá có 555 răng và rụng 20 chiếc mỗi ngày', 'Các nhà khoa học phát hiện cá mú bông Thái Bình Dương (Ophiodon elongatus) thay tới 20 chiếc răng mỗi ngày, Live Science hôm 15/11 đưa tin. Nghiên cứu mới công bố trên tạp chí Proceedings of the Royal Society B.\r\n\r\nCá mú bông Thái Bình Dương là loài ăn thịt sống ở bắc Thái Bình Dương. Khi trưởng thành, chúng đạt chiều dài khoảng 50 cm, nhưng một số con có thể dài tới 1,5 m. Chúng có tới 555 chiếc răng xếp trên hai bộ hàm. Thay vì răng cửa, răng hàm và răng nanh, cá mú bông có hàng trăm chiếc răng tí hon sắc nhọn. Đằng sau bộ hàm thứ nhất là bộ hàm phụ mà chúng dùng để nhai thức ăn, giống như cách con người sử dụng răng hàm.\r\n\r\nĐể tìm hiểu về tốc độ rụng răng của cá mú bông, Karly Cohen, nghiên cứu sinh ngành sinh học tại Đại học Washington và Emily Carr, sinh viên sinh học tại Đại học Nam Florida, theo dõi 20 con cá mú bông trong các bể nước của phòng thí nghiệm thuộc Đại học Washington. Vì răng chúng rất nhỏ nên việc xác định tốc độ rụng răng không hề đơn giản.\r\n\r\nNhóm nghiên cứu thả cá mú bông vào bể nước chứa thuốc nhuộm màu đỏ để nhuộm đỏ răng cá. Tiếp theo, họ chuyển chúng sang một bể chứa thuốc nhuộm màu xanh lá để nhuộm răng một lần nữa.\r\n\r\nSau đó, các chuyên gia tiến hành kiểm tra răng của đàn cá. Những chiếc răng tồn tại từ đầu thí nghiệm sẽ có màu đỏ và xanh, trong khi răng mới chỉ màu xanh. Sau khi kiểm tra tổng cộng 10.000 chiếc răng, họ xác định được tốc độ rụng, mọc răng của cá mú bông và loại răng nào bị thay thường xuyên nhất.', 0, '2021-11-16'),
(45, 1, 3, 'TRÀ VẢI TƯƠI DẦM – TƯƠI NGON, MÁT LẠNH', 'Người dân Bình Dương tắt điện, thắp nến tưởng niệm người qua đời vì COVID-19', 'Tại Chùa Hội An (phường Hòa Phú, TP Thủ Dầu Một) sẽ tổ chức Lễ cầu siêu và thắp 2.600 ngọn nến tưởng niệm.\r\n\r\nTại Nhà thờ Thánh Giuse (phường Phú Mỹ, TP Thủ Dầu Một) sẽ tổ chức Lễ cầu nguyện và rung chuông tưởng niệm.\r\n\r\nCác chùa, nhà thờ, cơ sở thờ tự của các tôn giáo trên địa bàn tỉnh hưởng ứng tổ chức các hoạt động tưởng niệm với nghi thức truyền thống của mỗi tôn giáo. Các gia đình trên toàn tỉnh sẽ tắt điện, thắp hương, thắp nến tưởng niệm.', 0, '2021-11-19'),
(46, 1, 3, 'Kombucha', 'Người dân Bình Dương tắt điện, thắp nến tưởng niệm người qua đời vì COVID-19', 'Tại Chùa Hội An (phường Hòa Phú, TP Thủ Dầu Một) sẽ tổ chức Lễ cầu siêu và thắp 2.600 ngọn nến tưởng niệm.\r\n\r\nTại Nhà thờ Thánh Giuse (phường Phú Mỹ, TP Thủ Dầu Một) sẽ tổ chức Lễ cầu nguyện và rung chuông tưởng niệm.\r\n\r\nCác chùa, nhà thờ, cơ sở thờ tự của các tôn giáo trên địa bàn tỉnh hưởng ứng tổ chức các hoạt động tưởng niệm với nghi thức truyền thống của mỗi tôn giáo. Các gia đình trên toàn tỉnh sẽ tắt điện, thắp hương, thắp nến tưởng niệm.', 0, '2021-11-19'),
(47, 1, 3, 'Thức uống giải nhiệt', 'Returns records that have matching values in both tables', ' Returns all records from the left table, and the matched records from the right table', 0, '2021-11-19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chinhanh`
--

CREATE TABLE `chinhanh` (
  `maCN` int(11) NOT NULL,
  `tenCN` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinhAnh` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `soDT` varchar(25) NOT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `trangThai` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 : Ẩn 1 : Hiện'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chinhanh`
--

INSERT INTO `chinhanh` (`maCN`, `tenCN`, `diaChi`, `hinhAnh`, `soDT`, `Create_at`, `Update_at`, `trangThai`) VALUES
(1, 'ChillingCoffee GV', '120 Bis Trường Chinh, TB', 'aboutcdc79.jpg', '455345399', '2021-08-07 07:40:13', '2021-08-07 07:40:13', 1),
(2, 'ChillingCoffee BT', '120 Bis Nơ Trang Long, Bình Thạnh', '', '455345399', '2021-08-03 02:06:00', NULL, 1),
(3, 'ChillingCoffee Bình Thạnh', '120 Bis Nơ Trang Long, Bình Thạnh', '', '455345399', '2021-08-06 19:36:22', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_hoadon`
--

CREATE TABLE `chitiet_hoadon` (
  `id` int(11) NOT NULL,
  `maHD` int(11) NOT NULL,
  `maTU` int(11) NOT NULL,
  `tenTU` varchar(255) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `giaTien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiet_hoadon`
--

INSERT INTO `chitiet_hoadon` (`id`, `maHD`, `maTU`, `tenTU`, `soLuong`, `giaTien`) VALUES
(90, 116, 68, 'Mocha', 2, 40000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_phieunhap`
--

CREATE TABLE `chitiet_phieunhap` (
  `id` int(11) NOT NULL,
  `maPN` int(11) NOT NULL,
  `maNL` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `giaNhap` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiet_phieunhap`
--

INSERT INTO `chitiet_phieunhap` (`id`, `maPN`, `maNL`, `amount`, `giaNhap`) VALUES
(4, 53, 1, 100, 150);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_baiviet`
--

CREATE TABLE `danhmuc_baiviet` (
  `maDanhmuc` int(11) NOT NULL,
  `tenDanhmuc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trangThai` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 : ẩn 1 : hiện'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc_baiviet`
--

INSERT INTO `danhmuc_baiviet` (`maDanhmuc`, `tenDanhmuc`, `trangThai`) VALUES
(3, 'Khuyến Mãi', 1),
(13, 'Sự Kiện', 1),
(15, 'Món Mới', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `maHA` int(11) NOT NULL,
  `maBai` int(11) DEFAULT NULL,
  `maTU` int(11) DEFAULT NULL,
  `img` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`maHA`, `maBai`, `maTU`, `img`) VALUES
(7, 45, NULL, 'CF-DA.jpeg'),
(8, 46, NULL, 'burger-1cc73f.jpg'),
(9, 47, NULL, 'burger-16817b.jpg'),
(10, NULL, 93, 'ts-king5d4bd.jpeg'),
(11, NULL, 95, 'burger-1d392e.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `maHD` int(11) NOT NULL,
  `maPT` int(11) NOT NULL,
  `maKH` int(11) NOT NULL,
  `maCN` int(11) NOT NULL,
  `tongTien` float NOT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Update_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`maHD`, `maPT`, `maKH`, `maCN`, `tongTien`, `Create_at`, `Update_at`) VALUES
(116, 1, 19, 1, 90000, '2021-11-13 20:23:05', '2021-11-13 20:23:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `maKH` int(11) NOT NULL,
  `nguoiNhan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numberPhone` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `userCus` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pwCus` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`maKH`, `nguoiNhan`, `numberPhone`, `address`, `email`, `userCus`, `pwCus`, `Create_at`, `Update_at`) VALUES
(19, 'nhi tran', '0906133597', '23 Trần Phú, Gò Vấp', 'nhittyps14724@fpt.edu.vn', 'remynhi', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-05 07:48:00', '2021-11-04 19:48:00'),
(20, 'Lê Quang Tuấn', '0894545435', '15 Quang Trung, GV', 'lequantuan@gmail.com', 'lequangtuan', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-15 05:56:41', NULL),
(21, 'Nguyễn Lâm Hạnh Túc', '0912345670', '234 Lê Lợi, Gò Vấp', 'lehanhtuc@gmail.com', 'lehanhtuc', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-15 05:57:55', NULL),
(22, 'Đinh Tiến Phương', '0910942343', '234 Lê Lợi, Gò Vấp', 'dinhtienphuong@gmail.com', 'dinhtienphuong', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-15 05:58:51', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaithucuong`
--

CREATE TABLE `loaithucuong` (
  `maLoai` int(11) NOT NULL,
  `tenLoai` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trangThai` tinyint(1) DEFAULT 1 COMMENT '0 : Ẩn 1 : Hiện'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaithucuong`
--

INSERT INTO `loaithucuong` (`maLoai`, `tenLoai`, `trangThai`) VALUES
(4, 'Yakult', 1),
(5, 'Café Phin', 1),
(6, 'Café Máy', 1),
(7, 'Trendy Fruit Tea', 1),
(8, 'Bubble Milk Tea', 1),
(9, 'Sinh Tố', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenlieu`
--

CREATE TABLE `nguyenlieu` (
  `maNL` int(11) NOT NULL,
  `tenNL` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `moTa` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `soLuong` int(11) NOT NULL,
  `donVi` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Kilogram',
  `ngaySX` date NOT NULL,
  `ngayHH` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguyenlieu`
--

INSERT INTO `nguyenlieu` (`maNL`, `tenNL`, `moTa`, `soLuong`, `donVi`, `ngaySX`, `ngayHH`) VALUES
(1, 'Cà Phê Arabica', '', 200, 'Kilogram', '2021-08-31', '2022-12-31'),
(2, 'Cà Phê Chồn', '', 150, 'Kilogram', '0000-00-00', '0000-00-00'),
(15, ' Cà Phê Catura', 'Cà phê Caturra là một dạng đột biến tự nhiên của giống cà phê Bourbon, với một biến đổi gen làm cây lùn hơn bình thường (dwarfism). Do có nguồn gốc trực tiếp từ cây cà phê Bourbon (giống Arabica) nên Caturra được thừa hưởng hoàn toàn ưu điểm về năng suất,', 0, 'Kilogram', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `maNCC` int(11) NOT NULL,
  `tenNCC` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `soDT` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`maNCC`, `tenNCC`, `email`, `soDT`, `diaChi`, `Create_at`, `Update_at`) VALUES
(15, '90S Coffee', 'info.90scoffee@gmail.com', '0967694444', '20 Đường số 3, P.Trường Thọ, TP.Thủ Đức', '2021-07-30 23:08:40', NULL),
(17, 'CTY CP Đại Tân Việt', 'contact@newviet.vn', '02862883535', '145 Tôn Thất Đạm, P. Bến Nghé, Q.1 Tp.HCM', '2021-08-03 03:39:43', NULL),
(18, 'Horecavn – Dụng Cụ Pha Chế ', 'thuy.do@horecavn.com', '0919906266', '48 Ngõ 279 Đội Cấn, Ba Đình, HN', '2021-08-03 03:40:40', NULL),
(19, 'THANH DIEU STORE', 'storethanhdieu@gmail.com', '0978999972', ' 250 Nguyễn Văn Tiết, K12, P.Phú Cường, TP.TDM, BD', '2021-08-03 03:41:43', NULL),
(20, 'CTY TNHH NAM NGUYỄN', 'info@namnguyeninfotech.com', '0938595973', '91A Nguyễn Thanh Tuyền, Phường 2, Q.Tân Bình, Tp.HCM', '2021-08-03 03:43:05', NULL),
(21, 'CTY CP BAO BÌ KLEUR', 'kleur.hcm@gmail.com', '02862547468', '180/36 Lý Thánh Tông, P.Hiệp Tân, Q.Tân Phú', '2021-08-03 03:43:52', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `maNV` int(11) NOT NULL,
  `tenNV` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gioiTinh` tinyint(1) NOT NULL COMMENT '1 : Nam . : Nữ',
  `ngaySinh` date NOT NULL,
  `diaChi` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `userNV` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pwNV` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `soDT` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Update_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trangThai` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 : Ẩn 1 : Hiện'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`maNV`, `tenNV`, `gioiTinh`, `ngaySinh`, `diaChi`, `avatar`, `userNV`, `pwNV`, `soDT`, `Create_at`, `Update_at`, `trangThai`) VALUES
(1, 'Việt Long', 1, '2001-06-27', 'Q9,TPHCM', 'longde60e.jpg', 'TongVietLong', 'vietlong2706', '0666666666', '2021-08-10 15:00:51', '2021-08-10 15:00:51', 1),
(2, 'Yến Nhi', 0, '1996-06-28', 'Q12,TPHCM', 'nhi3c8e6.jpg', 'YenNhiTran', 'nhi123456', '0932987529', '2021-08-10 14:52:58', '2021-08-10 14:52:58', 1),
(4, 'Thị Hương', 0, '2001-07-21', 'TP.TDM, BD', 'huong9189a.jpg', 'HuongNguyen', 'Huong123456', '0999999999', '2021-08-10 15:10:41', '2021-08-10 15:10:41', 1),
(5, 'Thanh KHương', 1, '1998-06-24', 'Q.BT, TP.HCM', 'khuong8f920.jpg', 'KhuongPham', 'Khuong123456', '0555555555', '2021-08-10 15:11:16', '2021-08-10 15:11:16', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhap`
--

CREATE TABLE `phieunhap` (
  `maPN` int(11) NOT NULL,
  `maNV` int(11) NOT NULL,
  `maNCC` int(11) NOT NULL,
  `maCN` int(11) NOT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Update_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phieunhap`
--

INSERT INTO `phieunhap` (`maPN`, `maNV`, `maNCC`, `maCN`, `Create_at`, `Update_at`) VALUES
(51, 1, 15, 1, '2021-08-07 03:51:43', '2021-08-07 15:51:43'),
(52, 4, 21, 2, '2021-08-07 04:09:25', '2021-08-07 16:09:25'),
(53, 2, 15, 1, '2021-08-09 21:41:37', '2021-08-10 09:41:37'),
(54, 2, 15, 1, '2021-11-13 04:15:32', '2021-11-13 16:15:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthuc_thanhtoan`
--

CREATE TABLE `phuongthuc_thanhtoan` (
  `maPT` int(11) NOT NULL,
  `tenPT` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `moTa` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinhDD` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Update_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trangThai` int(1) NOT NULL DEFAULT 1 COMMENT '0 : Ẩn 1 : Hiện'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phuongthuc_thanhtoan`
--

INSERT INTO `phuongthuc_thanhtoan` (`maPT`, `tenPT`, `moTa`, `hinhDD`, `Create_at`, `Update_at`, `trangThai`) VALUES
(1, 'Tiền Mặt', 'Hiện kim là tiền dưới hình thức vật chất của tiền tệ, chẳng hạn như tiền giấy và tiền kim loại.', '3d24fc5.jpeg', '2021-08-16 15:10:58', '2021-08-16 03:10:58', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thucuong`
--

CREATE TABLE `thucuong` (
  `maTU` int(11) NOT NULL,
  `maLoai` int(11) NOT NULL,
  `tenTU` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `moTa` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `donVi` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Ly',
  `donGia` float NOT NULL,
  `luotMua` int(11) NOT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `trangThai` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 : Ẩn 1 : Hiện'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thucuong`
--

INSERT INTO `thucuong` (`maTU`, `maLoai`, `tenTU`, `moTa`, `donVi`, `donGia`, `luotMua`, `Create_at`, `Update_at`, `trangThai`) VALUES
(64, 7, 'Trà đào', 'Trà đào là thức uống giải nhiệt được nhiều người yêu thích bởi vị chua chua, ngọt ngọt kèm thêm miếng đào ngâm tươi giòn giòn khiến bạn uống hoài không chán. Hãy cùng tham khảo cách làm trà đào ngâm tươi ngon tại nhà để giải khát mùa hè.', 'Ly', 30000, 1, '2021-11-05 05:48:52', '2021-11-05 05:48:52', 1),
(67, 7, 'Kombucha', 'Kombucha là một loại trà lên men nhờ có con giống Scoby - một loại nấm men được nuôi trong nước trà (trà đen hoặc trà xanh) có đường, để tạo ra loại đồ uống sủi bọt có tính axit nhẹ. Vì thế, loại đồ uống này cũng thỉnh thoảng được gọi là trà Kombucha.', 'Ly', 30000, 3, '2021-11-06 07:45:22', '2021-11-06 07:45:22', 1),
(68, 6, 'Mocha', 'Hãy quên đi những bộn bề cuộc sống để tìm thấy những niềm vui nho nhỏ từ ly Cà phê Espresso của Highlands Coffee. Bí quyết để cho ra hương vị đậm đà, tinh tế của một tách cà phê Espresso là phương pháp phối trộn độc đáo, công phu giữa hai loại cà phê Arab', 'Ly', 40000, 4, '2021-11-13 20:23:05', '2021-11-13 20:23:05', 1),
(70, 6, 'Espresso nóng', 'Espresso là café được pha bằng máy, sử dụng nước nóng nén bởi áp suất cao qua lớp bột cà phê được xay mịn. ', 'Ly', 40000, 8, '2021-11-12 21:42:30', '2021-11-12 21:42:30', 1),
(72, 5, 'Cà Phê Phin', 'Một thế hệ Cà Phê Phin Việt Nam hoàn toàn mới, phục vụ cho thế hệ trẻ đầy nhiệt huyết, độc lập và sáng tạo. Vẫn mang trong mình tinh tuý chắt lọc từ Cà Phê Phin Việt Nam nhưng êm chất Phin, kết hợp độc đáo cùng những vị ngon từ Kem Sữa - Hạnh Nhân - Choco', 'Ly', 20000, 1, '2021-11-05 06:02:18', '2021-11-05 06:02:18', 1),
(73, 5, 'Cà Phê Sữa', 'Hương vị cà phê Việt Nam đích thực! Từng hạt cà phê hảo hạng được chọn bằng tay, phối trộn độc đáo giữa hạt Robusta từ cao nguyên Việt Nam, thêm Arabica thơm lừng. Cà phê được pha từ Phin truyền thống, hoà cùng sữa đặc sánh và thêm vào chút đá tạo nên ly ', 'Ly', 20000, 0, '2021-11-05 06:02:21', '2021-11-05 06:02:21', 1),
(74, 6, 'Espresso ', 'Hãy quên đi những bộn bề cuộc sống để tìm thấy những niềm vui nho nhỏ từ ly Cà phê Espresso của Highlands Coffee. Bí quyết để cho ra hương vị đậm đà, tinh tế của một tách cà phê Espresso là phương pháp phối trộn độc đáo, công phu giữa hai loại cà phê Arab', 'Ly', 40000, 0, '2021-11-05 06:02:25', '2021-11-05 06:02:25', 1),
(75, 5, 'Cà Phê Dừa', 'Được lấy cảm hứng từ “Kem Tràng Tiền” – hương vị mà bất cứ người Hà Nội nào cũng nhớ, Sinh Tố Cộng Đổi Mới với phần cốt dừa đặc trưng là thức uống ngon nổi trội và được yêu thích nhất tại Cộng.\r\nCốt dừa béo ngậy, thơm ngọt kết hợp với cà phê đắng thanh, n', 'Ly', 30000, 0, '2021-11-05 06:02:32', '2021-11-05 06:02:32', 1),
(76, 8, 'Trà Sữa Chocolate', 'Trà sữa là đồ uống ra đời khoảng 30 năm trước tại Đài Loan. Đây là đồ uống sở hữu sự kết hợp giữa các nguyên liệu quen thuộc là trà, sữa và topping. Nhờ vậy, đồ uống với hương vị thơm ngon, vị thơm nhẹ của trà quyện trong cái béo ngọt của sữa, làm cho ngư', 'Ly', 20000, 5, '2021-11-05 06:02:35', '2021-11-05 06:02:35', 1),
(77, 8, ' Hồng trà sữa', 'Hồng trà sữa là một đồ uống thơm ngon với nguyên liệu chính là Hồng Trà, hồng trà sữa rất được nhiều các bạn trẻ yêu thích hầu như các quán trà sữa đều có món này, ta cùng nói thêm một tí về hồng trà cho các bạn biết nhé.\r\nHồng trà có độ Oxy hóa, được ủ t', 'Ly', 30000, 4, '2021-11-05 06:02:41', '2021-11-05 06:02:41', 1),
(78, 8, 'Trà Sữa Than Tre', 'Trà sữa than tre có nhiều tên gọi khác nhau như trà sữa bóng đêm hay trà sữa mun bởi màu đen huyền bí đặc trưng của tinh bột than tre. Bột than tre được nhiều người biết đến với công dụng làm đẹp cho da. Vì vậy sự kết hợp độc đáo này làm trà sữa than tre ', 'Ly', 35000, 7, '2021-11-06 17:39:13', '2021-11-06 17:39:13', 1),
(79, 4, 'Yakult Chanh Leo', 'Nước Chanh Yakult có vị chua chua, ngọt ngọt, thơm hương tinh dầu chanh rất đặc trưng. Cách làm Nước chanh yakult đơn giản, không chỉ giúp giải nhiệt mùa hè mà còn rất tốt cho sức khỏe. Vị chua của chanh kích thích vị giác giúp bữa cơm gia đình thêm ngon ', 'Ly', 30000, 0, '2021-11-04 18:01:19', '2021-11-05 06:01:19', 1),
(80, 4, 'Yakult ', 'Nước Chanh Yakult có vị chua chua, ngọt ngọt, thơm hương tinh dầu chanh rất đặc trưng. Cách làm Nước chanh yakult đơn giản, không chỉ giúp giải nhiệt mùa hè mà còn rất tốt cho sức khỏe. Vị chua của chanh kích thích vị giác giúp bữa cơm gia đình thêm ngon ', 'Ly', 30000, 0, '2021-11-05 06:02:51', '2021-11-05 06:02:51', 1),
(81, 9, 'Dưa Dừa Dứa', 'Một ly sinh tố dừa ngon lành với sự hòa quyện hoàn hảo giữa vị mát lạnh của đá bào và vị béo ngậy của dừa và sữa sẽ giúp bạn giải nhiệt hiệu quả trong những ngày hè nóng nực như thế này. Với các công thức pha sinh tố dưới đây, bây giờ, bạn hoàn toàn có th', 'Ly', 35000, 0, '2021-11-05 06:02:54', '2021-11-05 06:02:54', 1),
(82, 9, 'Sinh Tố Dâu', 'Dâu tây là trái cây có màu sắc đẹp mắt, vị chua ngọt ngon miệng nên được nhiều người yêu thích. Loại trái cây này ngoài ăn trực tiếp, có thể được ứng dụng để làm bánh ngọt, pha chế thức uống. Sinh tố dâu tây sữa chua là một biến tấu đặc biệt từ loại quả n', 'Ly', 35000, 1, '2021-11-11 07:09:36', '2021-11-11 07:09:36', 1),
(83, 4, 'Yakult Dưa Leo', 'Nước Chanh Yakult có vị chua chua, ngọt ngọt, thơm hương tinh dầu chanh rất đặc trưng. Cách làm Nước chanh yakult đơn giản, không chỉ giúp giải nhiệt mùa hè mà còn rất tốt cho sức khỏe. Vị chua của chanh kích thích vị giác giúp bữa cơm gia đình thêm ngon ', 'Ly', 20000, 0, '2021-11-05 06:03:01', '2021-11-05 06:03:01', 1),
(91, 4, 'Yakult Xoài', 'Thủ đô của Cộng hòa Séc là một trong những điểm đến hàng đầu tại Châu Âu với kho tàng lịch sử, nghệ thuật, âm nhạc và kiến trúc phong phú. Con sông Vltava đẹp như một bức tranh, uốn lượn quanh thành phố với một vài cây cầu bắc ngang, mỗi cây cầu đều mang ', 'Ly', 40000, 0, '2021-11-05 06:03:05', '2021-11-05 06:03:05', 1),
(93, 4, 'What is PTE Academic Exam?', 'giải thích thuật ngữ wordpress Hàm file trong php Hàm thời gian trong php Hàm xử lý chuỗi trong php mô hình BOM Nhận dữ liệu từ form trong php thuật ngữ wordpress', 'Ly', 40000, 0, '2021-11-18 18:55:52', '2021-11-18 18:55:52', 1),
(94, 4, 'trà đào', 'giải thích thuật ngữ wordpress Hàm file trong php Hàm thời gian trong php Hàm xử lý chuỗi trong php mô hình BOM Nhận dữ liệu từ form trong php thuật ngữ wordpress', 'Ly', 40000, 0, '2021-11-18 18:30:57', NULL, 1),
(95, 4, 'trà đào', 'giải thích thuật ngữ wordpress Hàm file trong php Hàm thời gian trong php Hàm xử lý chuỗi trong php mô hình BOM Nhận dữ liệu từ form trong php thuật ngữ wordpress', 'Ly', 40000, 0, '2021-11-18 18:32:20', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai_hoadon`
--

CREATE TABLE `trangthai_hoadon` (
  `maTT` int(11) NOT NULL,
  `MaHD` int(11) NOT NULL,
  `tenTT` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `trangthai_hoadon`
--

INSERT INTO `trangthai_hoadon` (`maTT`, `MaHD`, `tenTT`, `Create_at`) VALUES
(44, 116, 'Chờ Xác Nhận', '2021-11-13 20:23:05'),
(45, 116, 'Đang Chuẩn Bị', '2021-11-13 20:23:24'),
(46, 116, 'Đang Giao', '2021-11-13 20:23:30'),
(47, 116, 'Đã Giao', '2021-11-13 20:29:50');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`maBai`),
  ADD KEY `fk_bv_nv` (`maNV`),
  ADD KEY `fk_bv_dmbv` (`maDanhmuc`);

--
-- Chỉ mục cho bảng `chinhanh`
--
ALTER TABLE `chinhanh`
  ADD PRIMARY KEY (`maCN`);

--
-- Chỉ mục cho bảng `chitiet_hoadon`
--
ALTER TABLE `chitiet_hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cthd_hd` (`maHD`),
  ADD KEY `fk_cthd_tu` (`maTU`);

--
-- Chỉ mục cho bảng `chitiet_phieunhap`
--
ALTER TABLE `chitiet_phieunhap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ctpn_pn` (`maPN`),
  ADD KEY `fk_ctpn_nl` (`maNL`);

--
-- Chỉ mục cho bảng `danhmuc_baiviet`
--
ALTER TABLE `danhmuc_baiviet`
  ADD PRIMARY KEY (`maDanhmuc`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`maHA`),
  ADD KEY `fk_ha_tu` (`maTU`),
  ADD KEY `fk_ha_bv` (`maBai`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`maHD`),
  ADD KEY `fk_hd_pttt` (`maPT`),
  ADD KEY `fk_hd_kh` (`maKH`),
  ADD KEY `fk_hd_cn` (`maCN`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKH`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `userCus` (`userCus`);

--
-- Chỉ mục cho bảng `loaithucuong`
--
ALTER TABLE `loaithucuong`
  ADD PRIMARY KEY (`maLoai`);

--
-- Chỉ mục cho bảng `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  ADD PRIMARY KEY (`maNL`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`maNCC`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`maNV`),
  ADD UNIQUE KEY `userNV` (`userNV`);

--
-- Chỉ mục cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`maPN`),
  ADD KEY `fk_pn_nv` (`maNV`),
  ADD KEY `fk_pn_ncc` (`maNCC`),
  ADD KEY `fk_pn_cn` (`maCN`);

--
-- Chỉ mục cho bảng `phuongthuc_thanhtoan`
--
ALTER TABLE `phuongthuc_thanhtoan`
  ADD PRIMARY KEY (`maPT`);

--
-- Chỉ mục cho bảng `thucuong`
--
ALTER TABLE `thucuong`
  ADD PRIMARY KEY (`maTU`),
  ADD KEY `fk_tu_ltu` (`maLoai`);

--
-- Chỉ mục cho bảng `trangthai_hoadon`
--
ALTER TABLE `trangthai_hoadon`
  ADD PRIMARY KEY (`maTT`),
  ADD KEY `fk_tthd_hd` (`MaHD`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `maBai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `chinhanh`
--
ALTER TABLE `chinhanh`
  MODIFY `maCN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `chitiet_hoadon`
--
ALTER TABLE `chitiet_hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT cho bảng `chitiet_phieunhap`
--
ALTER TABLE `chitiet_phieunhap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `danhmuc_baiviet`
--
ALTER TABLE `danhmuc_baiviet`
  MODIFY `maDanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `maHA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `maHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `maKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `loaithucuong`
--
ALTER TABLE `loaithucuong`
  MODIFY `maLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  MODIFY `maNL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `maNCC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `maNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `maPN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `phuongthuc_thanhtoan`
--
ALTER TABLE `phuongthuc_thanhtoan`
  MODIFY `maPT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `thucuong`
--
ALTER TABLE `thucuong`
  MODIFY `maTU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT cho bảng `trangthai_hoadon`
--
ALTER TABLE `trangthai_hoadon`
  MODIFY `maTT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `fk_bv_dmbv` FOREIGN KEY (`maDanhmuc`) REFERENCES `danhmuc_baiviet` (`maDanhmuc`),
  ADD CONSTRAINT `fk_bv_nv` FOREIGN KEY (`maNV`) REFERENCES `nhanvien` (`maNV`);

--
-- Các ràng buộc cho bảng `chitiet_hoadon`
--
ALTER TABLE `chitiet_hoadon`
  ADD CONSTRAINT `fk_cthd_hd` FOREIGN KEY (`maHD`) REFERENCES `hoadon` (`maHD`),
  ADD CONSTRAINT `fk_cthd_tu` FOREIGN KEY (`maTU`) REFERENCES `thucuong` (`maTU`);

--
-- Các ràng buộc cho bảng `chitiet_phieunhap`
--
ALTER TABLE `chitiet_phieunhap`
  ADD CONSTRAINT `fk_ctpn_nl` FOREIGN KEY (`maNL`) REFERENCES `nguyenlieu` (`maNL`),
  ADD CONSTRAINT `fk_ctpn_pn` FOREIGN KEY (`maPN`) REFERENCES `phieunhap` (`maPN`);

--
-- Các ràng buộc cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `fk_ha_bv` FOREIGN KEY (`maBai`) REFERENCES `baiviet` (`maBai`),
  ADD CONSTRAINT `fk_ha_tu` FOREIGN KEY (`maTU`) REFERENCES `thucuong` (`maTU`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hd_cn` FOREIGN KEY (`maCN`) REFERENCES `chinhanh` (`maCN`),
  ADD CONSTRAINT `fk_hd_kh` FOREIGN KEY (`maKH`) REFERENCES `khachhang` (`maKH`),
  ADD CONSTRAINT `fk_hd_pttt` FOREIGN KEY (`maPT`) REFERENCES `phuongthuc_thanhtoan` (`maPT`);

--
-- Các ràng buộc cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `fk_pn_cn` FOREIGN KEY (`maCN`) REFERENCES `chinhanh` (`maCN`),
  ADD CONSTRAINT `fk_pn_ncc` FOREIGN KEY (`maNCC`) REFERENCES `nhacungcap` (`maNCC`),
  ADD CONSTRAINT `fk_pn_nv` FOREIGN KEY (`maNV`) REFERENCES `nhanvien` (`maNV`);

--
-- Các ràng buộc cho bảng `thucuong`
--
ALTER TABLE `thucuong`
  ADD CONSTRAINT `fk_tu_ltu` FOREIGN KEY (`maLoai`) REFERENCES `loaithucuong` (`maLoai`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `trangthai_hoadon`
--
ALTER TABLE `trangthai_hoadon`
  ADD CONSTRAINT `fk_tthd_hd` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`maHD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
