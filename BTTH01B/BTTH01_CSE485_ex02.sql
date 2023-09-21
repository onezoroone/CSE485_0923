CREATE TABLE tacgia(
	ma_tgia INT UNSIGNED NOT null PRIMARY KEY,
	ten_tgia VARCHAR(100) NOT NULL,
	hinh_tgia VARCHAR(100)
)
CREATE TABLE theloai(
	ma_tloai INT UNSIGNED NOT null PRIMARY KEY,
	ten_tloai VARCHAR(50) NOT NULL
)

CREATE TABLE baiviet(
	ma_bviet INT UNSIGNED NOT null PRIMARY KEY,
	tieude VARCHAR(200) NOT NULL,
	ten_bhat VARCHAR(100) NOT NULL,
	ma_tloai INT UNSIGNED NOT NULL,
	tomtat TEXT NOT NULL,
	noidung TEXT,
	ma_tgia INT UNSIGNED NOT NULL,
	ngayviet DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	hinhanh VARCHAR(200),
	FOREIGN KEY(ma_tloai) REFERENCES theloai(ma_tloai),
	FOREIGN KEY(ma_tgia) REFERENCES tacgia(ma_tgia)
)
--a.Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình
SELECT
    ma_bviet, tieude, ten_bhat, ma_tgia, ten_tloai, ngayviet
FROM baiviet INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
WHERE ten_tloai = 'Nhạc trữ tình';

--b.Liệt kê các bài viết của tác giả “Nhacvietplus” 
SELECT
    ma_bviet, tieude, ten_bhat, ten_tgia, ma_tloai, ngayviet
FROM baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
WHERE ten_tgia = 'Nhacvietplus';

--c.Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào.
SELECT ten_tloai
FROM theloai LEFT JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
WHERE baiviet.ma_bviet IS NULL;

--d.Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên thể loại, ngày viết.
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai, baiviet.ngayviet
FROM baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai;

--e.Tìm thể loại có số bài viết nhiều nhất
SELECT theloai.ten_tloai, COUNT(*) AS so_bai_viet FROM baiviet
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
GROUP BY theloai.ten_tloai
ORDER BY so_bai_viet DESC LIMIT 2;

--f.Liệt kê 2 tác giả có số bài viết nhiều nhất
SELECT tacgia.ten_tgia, COUNT(*) AS so_bai_viet
FROM baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
GROUP BY tacgia.ten_tgia
ORDER BY so_bai_viet DESC LIMIT 2;

--g.Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em”
SELECT ma_bviet, tieude, ten_bhat
FROM baiviet
WHERE ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';

--h.Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em”
SELECT ma_bviet, tieude, ten_bhat
FROM baiviet
WHERE tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%' OR 
ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';

--i.Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên thể loại và tên tác giả
CREATE VIEW vw_Music AS
SELECT
    baiviet.ma_bviet AS MaBaiViet,
    baiviet.tieude AS TieuDeBaiViet,
    baiviet.ten_bhat AS TenBaiHat,
    theloai.ten_tloai AS TenTheLoai,
    tacgia.ten_tgia AS TenTacGia
FROM baiviet INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia;

--l.Bổ sung thêm bảng Users để lưu thông tin Tài khoản đăng nhập và sử dụng cho chức năng Đăng nhập/Quản trị trang web.
CREATE TABLE users(
	id INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(50) NOT NULL UNIQUE,
	PASSWORD VARCHAR(100) NOT NULL
)
