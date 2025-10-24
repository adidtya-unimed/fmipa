<?php
defined('FMIPA_APP') or exit('Forbidden...!');

if (!function_exists('ifPOST')) {
	function ifPOST($params)
	{
		$arr_params = [];

		if (!is_array($params)) {
			$arr_params[] = $params;
		} else {
			$arr_params = $params;
		}

		foreach ($arr_params as $param) {
			if (!isset($_POST[$param])) {
				return false;
			}
		}

		return true;
	}
}

if (!function_exists('getTanggal')) {
	function getTanggal($tgl)
	{
		if ($tgl == "") {
			return "";
		}

		$bulan = array(
			0 => '00',
			1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		$split = explode('-', $tgl);
		return $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];
	}
}

if (!function_exists('getTanggal2')) {
	function getTanggal2($tgl)
	{
		if ($tgl == "") {
			return "";
		}

		$bulan = array(
			0 => '00',
			1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		$split = explode('-', $tgl);
		return $bulan[(int)$split[1]] . ' ' . $split[0];
	}
}

if (!function_exists('pageTitle')) {
	function pageTitle($title, $show)
	{
		echo '<div class="page-title dark-background" style="background-image: url(assets/website/img/gedung-fmipa.jpg);">
      <div class="container position-relative">
        <h1>' . $title . '</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Beranda</a></li>
            <li class="current">' . $show . '</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->';
	}
}

if (!function_exists('getHari')) {
	function getHari($tgl)
	{
		switch ($tgl) {
			case 'Sun':
				$hari_ini = "Minggu";
				break;

			case 'Mon':
				$hari_ini = "Senin";
				break;

			case 'Tue':
				$hari_ini = "Selasa";
				break;

			case 'Wed':
				$hari_ini = "Rabu";
				break;

			case 'Thu':
				$hari_ini = "Kamis";
				break;

			case 'Fri':
				$hari_ini = "Jumat";
				break;

			case 'Sat':
				$hari_ini = "Sabtu";
				break;

			default:
				$hari_ini = "Tidak di ketahui";
				break;
		}

		return $hari_ini;
	}
}

if (!function_exists('ifGET')) {
	function ifGET($params)
	{
		$arr_params = [];

		if (!is_array($params)) {
			$arr_params[] = $params;
		} else {
			$arr_params = $params;
		}

		foreach ($arr_params as $param) {
			if (!isset($_GET[$param])) {
				return false;
			}
		}

		return true;
	}
}

if (!function_exists('header_tampil')) {
	function header_tampil($nama)
	{
		echo "
		<div class='header'>
			<div class='menu-toggle-btn'>
				<a href='#'>
					<i class='bi bi-list'></i>
				</a>
			</div>
			<div class='page-title'>{$nama}</div>

			<!-- Header mobile buttons -->
			<div class='header-mobile-buttons'>
				<a href='#' class='search-bar-btn'>
					<i class='bi bi-search'></i>
				</a>
				<a href='#' class='actions-btn'>
					<i class='bi bi-three-dots'></i>
				</a>
			</div>
			<!-- ./ Header mobile buttons -->
		</div>
		";
	}
}
