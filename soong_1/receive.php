<?php
  //받는 페이지
  echo $chk_age[0].$name[0]."</br>";
  echo $chk_sex[0].$name[0]."</br>";
  echo $job.$options[$job.$selectedIndex]."</br>";
  $abc="";
  for($i=0;$i<count($chkbox);$i++){
    echo$chkbox[$i].$name[$i]."</br>";
	$abc=$abc.",".$chkbox[$i].$name[$i];
  }
  echo$today_time = date("m_d_H_i_s",time());
  //제목을 현재 시간으로 가지는 텍스트 파일을 불러옵니다. 파일이 존재하지 않는다면 새로 생성합니다.
  //파일안에 받은 정보들을 저장합니다.
  //저장하는 폴더와 파일에 파일쓰기 권한을 주어야 동작합니다.
  $file = fopen("/host/home3/notitle1121/html/research/".$today_time."."."txt", "w");
  fwrite($file, $chk_age[0].$name[0].",".$chk_sex[0].$name[0].",".$job.$options[$job.$selectedIndex].$abc);
?>
