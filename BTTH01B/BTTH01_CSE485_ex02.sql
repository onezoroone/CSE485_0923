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
--a.
SELECT
    ma_bviet, tieude, ten_bhat, ma_tgia, ten_tloai, ngayviet
FROM baiviet INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
WHERE ten_tloai = 'Nhạc trữ tình';

--b.
SELECT
    ma_bviet, tieude, ten_bhat, ten_tgia, ma_tloai, ngayviet
FROM baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
WHERE ten_tgia = 'Nhacvietplus';

--c.
SELECT ten_tloai
FROM theloai LEFT JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
WHERE baiviet.ma_bviet IS NULL;

--d.
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai, baiviet.ngayviet
FROM baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai;

--e.
SELECT theloai.ten_tloai, COUNT(*) AS so_bai_viet FROM baiviet
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
GROUP BY theloai.ten_tloai
ORDER BY so_bai_viet DESC LIMIT 2;

--f.
SELECT tacgia.ten_tgia, COUNT(*) AS so_bai_viet
FROM baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
GROUP BY tacgia.ten_tgia
ORDER BY so_bai_viet DESC LIMIT 2;

--g.
SELECT ma_bviet, tieude, ten_bhat
FROM baiviet
WHERE ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';

--h.
SELECT ma_bviet, tieude, ten_bhat
FROM baiviet
WHERE tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%' OR 
ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';
