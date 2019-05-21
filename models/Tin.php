<?php

require_once 'Database.php';

class Tin extends Database
{
	// function __construct()
	// {
	// 	# code...
	// }
	function Blog($num_of_tin)
	{
		$sql = "SELECT idTin, TieuDe, TomTat, urlHinh 
				FROM tin  
				WHERE AnHien = 1 
   				ORDER BY RAND() LIMIT 0,$num_of_tin";
   		$result = $this->db->query($sql);
   		if (!$result) 
   		{
   			die($this->db->error());
   		}
   		return $result;
	}

	function SanPhamMoi($num_product)
	{
		$sql = "SELECT idDT, TenDT, urlHinh,Gia 
				FROM dienthoai  
				WHERE AnHien = 1 
   				ORDER BY NgayCapNhat DESC LIMIT 0,$num_product";
   		$result = $this->db->query($sql);
   		if (!$result) 
   		{
   			die($this->db->error());
   		}
   		return $result;
	}

	function ListLoaiSP()
	{
		$sql = "SELECT idLoai, TenLoai, hinh 
				FROM loaisp  
				WHERE AnHien = 1
   				ORDER BY ThuTu DESC LIMIT 0,12";
   		$result = $this->db->query($sql);
   		if (!$result) 
   		{
   			die($this->db->error());
   		}
   		return $result;
	}
}

?>