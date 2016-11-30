<?php

/**
 * getSemester function.
 * 日本語の開講時期を英語に変換する．
 * 
 * @access public
 * @param string $jpSeme, 開講時期(ex 前期．前期(集中)．後期，後期(集中)，通年)
 * @return string, 開講時期の英語表記
 */
function getSemester($jpSeme) {

	$semester = '';
	
	if(($jpSeme == '前期')||($jpSeme == '前期(集中)')||($jpSeme == '前期(前半)')||($jpSeme == '前期(後半)')) {
		$semester = 'firstSemester';
	} else if(($jpSeme == '後期')||($jpSeme == '後期(集中)')||($jpSeme == '後期(前半)')||($jpSeme == '後期(後半)')) {
		$semester = 'secondSemester';
	} else if($jpSeme == '通年') {
		$semester = 'semester';
	}
	
	return $semester;
}

/**
 * getJPRegType function.
 * 英語の紐付けタイプを日本語に変換する．
 * 
 * @access public
 * @param string $regType, 開講時期(ex regtitlecode．regtatitlecode．regcptitlecode，reggstitlecode
 * @return string, 紐付けタイプの日本語表記
 */
function getJPRegType($regType) {

	$jpRegType = '';
	
	if($regType == 'regtitlecode') {
		$jpRegType = '履修コース';
	} else if($regType == 'regtatitlecode') {
		$jpRegType = 'TA';
	} else if($regType == 'regcptitlecode') {
		$jpRegType = 'CP';
	} else if($regType == 'reggstitlecode') {
		$jpRegType = 'GS';
	}
	
	return $jpRegType;
}


/**
 * getFiscalYear function.
 * 現在の年度を取得する．
 * 
 * @access public
 * @return int, 年度
 */
function getFiscalYear() {
	
	if(date('n') < 4) {
		return date('Y') - 1;
	} else {
		return date('Y');
	}
	
}

?>