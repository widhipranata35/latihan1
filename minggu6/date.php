<?php
//date untuk menampilkan tanggal dengan format tertentu
echo date(
	"1, d-M-Y",
	time() -
		60 * 60 * 24 + 500
);
?>