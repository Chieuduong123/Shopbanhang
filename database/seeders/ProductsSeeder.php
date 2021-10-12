<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            "Giày sneaker prophere trắng sọc đen",
            "Giày Sneaker Alexander Mcqueen",
            "Nike Air Jordan 1 Low mix",
            "Balenciaga  Black Speed Sneakers",
            "Nike Air Force 1 Shadow",
            "Converse Chuck Taylor All Star",
            "Giày Puma Roma Vintage Màu Trắng",
            "Giày NIKE AIR FORCE 1 Shadow white",
            "Giày thể thao BALENCIAGA TRIPLE S BLACK Đen",
            "Giày thể thao adidas X lego",
            "Giày Sneaker MLB NY"
        ];
        $price = [
            "670000", "950000", "550000", "750000", "870000", "980000", "450000", "670000","990000", "659000", "780000"
        ];
        $count = [100,100,200,200,200,150,100,100, 200,100, 140];
        $description = [
            "Hàng luôn có sẵn + fullbox (box theo giày)
            Nhận hàng các bạn được kiểm tra hàng trước khi thanh toán", 
            "Giày Alexander McQueen Trắng đến từ thương hiệu Alexander Mcqueen, 
            nổi tiếng với những mẫu giày sneakers đế cao tôn dáng chủ nhân, phù hợp cho cả nam và nữ", 
            "Nike Air Jordan 1 Low ALT mix  hiện đã có sẵn tại Sneaker Daily Shop, đừng bỏ lỡ cơ hội của mình nhé!
            Cập nhật nhanh nhất lịch ra mắt của các mẫu giày mới nhất bằng cách theo dõi Sneaker Daily trên Facebook hoặc Instagram", 
            "Thiết kế giống vớ, Kỹ thuật đan 3D,Đế tương phản màu đen với miếng lót đế trong suốt màu vàng neon, 
            Đế công thái học với công nghệ Không có bộ nhớ, Logo màu trắng ở bên",
            "Chiếc Air Force 1 Shadow màu pastel này có thể nói là thiết kế dễ thương nhất của phong cách Nike dành cho nữ phổ biến.
             Swooshes màu tím pastel trải dài trên các lớp phủ ở phần upper.",
             "Mang trở lại phiên bản đế cao trong một diện mạo tối cơ bản, Converse Platform Canvas là sự kết hợp nhuần nhuyễn và hài hòa giữa đế Platform cao su dày dặn và Canvas Upper nhẹ thoáng, bền bỉ.",
             "Giày Thể Thao Puma Roma Vintage  được thiết kế với phong cách trẻ trung, khỏe khoắn, mang đậm phong phong cách thể thao đường phố đặc trưng của thương hiệu Puma.",
             "Nike Air Force 1 Shadow là phiên bản nâng cấp của mẫu giày kinh điển Nike Air Force 1, huyền thoại không tuổi của Nike. Nhưng với những cải tiến vượt bật cả về thiết kế lẫn công nghệ. Nike đã tạo ra một mẫu giày vô cùng độc đáo trên nền tảng của những giá trị xưa cũ.",
             "Toàn bộ các mẫu giày đều Fullbox + Phụ kiện đầy đủ, Full Size Nam Nữ với những mẫu mã mới nhất hiện nay. Còn chần chừ gì nữa mà không sắm ngay cho mình một đôi giày balen triple s đa dạng sắc màu, phá bỏ mọi giới hạn.",
            "Thỏa sức vui chơi. Đôi giày LEGO® này tôn vinh một trong những món đồ chơi được yêu thích nhất trên thế giới. Đôi giày chạy bộ thường ngày này giúp bé luôn thoải mái suốt giờ thể dục hay khi tập thể thao",
            "MLB Big Ball Chunky chính là “hot item” đến từ MLB Korea – hãng thời trang tại Hàn Quốc. Hãng này chuyên thiết kế và sản xuất tất cả từ quần áo, váy cho đến những phụ kiện như mũ, túi, tất,…. Tất cả đều lấy cảm hứng từ logo của những đội bóng thuộc MLB"
        ];
        $img = [
            'anh2.jpg', 
            '3207b2c167bd85d6cad3aa61dfee6afc.jpg', 
            '2ef74a7b628be0c0e4caaabb9ee93d27.jpg', 
            '4aefffbcc12f19595973526c4d2f5969.jpg',
            'baa3313843eb3be6b9b49f71c16ad204.jpg',
            'fa24e9c3624d2beebdda6adb575efb80.jpg',
            'anh10.jpg',
            '785650c759f88845cf73cb5725fb177c.jpg',
            'a25795f2297e5d942db43381d42debd5.jpg',
            '85d28ce0b23a52640b2b.jpg',
            'anh4.jpg'
        ];
        for ($i = 0; $i < count($name); $i++) {
            \DB::table('products')->insert([
                'name' => $name[$i],
                'price' => $price[$i],
                'count' => $count[$i],
                'description' => $description[$i],
                'img' => $img[$i]
            ]);
        }
    }
}