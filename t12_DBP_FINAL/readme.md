<h1> 데이터베이스 프로그래밍 기말 과제 </h1>
<h3> [ 채용 정보 서비스를 제공해 현 시대의 취업난에 도움이 되어보자 ] </h3>
<h3> T12 </h3>
20180887 강민진   20180990 이소윤   20180991 이영주   20172076 이지원


<h5> 1. 프로젝트 목적 </h5>
 현재 코로나 19 사태로 인해 취업준비생과 기업, 심지어는 단기 아르바이트 시장도 난항을 겪고 있는 상황입니다. 이러한 상황에서도 워크넷에서는 전국의 다양한 채용 정보를 제공하고 있습니다. 하지만 일반 시민들은 워크넷에서 채용정보를 제공한다는 것을 알지 못해서, 혹은 본인이 원하는 채용 정보에 맞는 내용을 찾지 못해 정보가 무용지물이 될 수 있는 상황입니다. 저희는 이러한 문제점을 보완하기 위해 워크넷에서 제공하는 채용정보를 원하는 내용별로 제공하는 서비스를 구현해보았습니다. 

<h5> 2. 서비스의 주요 기능 </h5>
 시민들이 가장 관심을 가지고 알아보고자 하는 내용을 기준으로 정보 출력을 구성해보았습니다. 가장 우선적으로 관심을 가질 것이라 생각했던 부분은 지역이었으며, 임금, 채용 마감일, 지원 자격이 가장 관심도가 높을 것으로 판단되었습니다. 
<ul>
<li> 지역별 채용 정보 출력 </li>
<li> 임금 형태별 채용 정보 출력 </li>
<li> 임금 형태별 TOP 15 </li>
<li> 마감일별 채용 정보 출력 </li>
<li> 지원자격별 채용 정보 </li>
</ul>
추가적으로 앱 보다는 웹으로 구현하는 것이 일반 시민들에게 접근이 더욱 용이할 것이라고 판단해 웹 형태로 구현했습니다. 또한 URL 주소를 제공하는 과정에서 하이퍼링크로 구현했으며 주소를 그대로 출력하는 것은 정돈되지 않은 감이 있어 ‘바로가기’ 하이퍼링크로 통일했습니다.

<h5> 3. 구축 환경 </h5>
 저희는 데이터베이스 프로그래밍 과목의 실습을 수행하며 배웠던 mysql, html, css, php 언어를 사용해 서비스를 구현했습니다. 또한 woobi 라는 무료 웹 호스팅 서비스를 통해 웹 호스팅 환경을 구현했습니다. 추가적으로 sql문 설명에 중복되는 채용 정보 제거를 위해 distinct 사용했습니다.
 
<h5> 4. 동작 화면 및 설명 </h5>

<h5> 1) Index.php</h5>

<img src = "https://github.com/yzo0o913/DBP_2020/blob/master/t12_DBP_FINAL/1.jpg"  width="600" height="370">

-> 가장 메인이라고 말할 수 있는 index 페이지를 다음과 같이 구현했습니다.

<h5> 2) 지역별 채용 정보 -> 각각 자치구를 입력했을 경우 </h5>

<img src = "https://github.com/yzo0o913/DBP_2020/blob/master/t12_DBP_FINAL/2.jpg"  width="600" height="370">
<img src = "https://github.com/yzo0o913/DBP_2020/blob/master/t12_DBP_FINAL/3.jpg"  width="600" height="370">
  
-> 각 자치구만 입력하면 그에 속하는 정보가 출력됩니다.

<h5> 3)	임금 형태별 채용 정보 </h5>

<img src = "https://github.com/yzo0o913/DBP_2020/blob/master/t12_DBP_FINAL/4.jpg"  width="600" height="370">
 
-> 임금 형태 별 정보는 시급, 월급, 연봉 순으로 조회되도록 기본 설정해 놓았습니다.

<h5> 4) 마감일 순 정보 조회 </h5>

<img src = "https://github.com/yzo0o913/DBP_2020/blob/master/t12_DBP_FINAL/5.jpg"  width="600" height="370">
 
다음과 같이 마감일이 임박한 30개의 채용정보를 출력하였습니다. 또 ‘입사 지원 바로가기 링크를 통해 지금 바로 지원하세요’ 라는 문구를 넣어 서비스 제공으로써 역할을 상기시켰습니다.

<h5> 5) 임금형태 별 정보 조회 </h5>

<img src = "https://github.com/yzo0o913/DBP_2020/blob/master/t12_DBP_FINAL/6.jpg"  width="600" height="370">
 
-> 임금 형태는 월급, 일급, 연봉으로 검색할 수 있고 각 형태에서 가장 높은 15개의 채용 정보를 출력하도록 구현했습니다.

<h5> 6) 지원 자격별 채용 정보 </h5>

<img src = "https://github.com/yzo0o913/DBP_2020/blob/master/t12_DBP_FINAL/7.jpg"  width="600" height="370">
 
-> 지원 자격별 채용 정보는 경력, 신입, 관계 없음을 선택할 수 있으며 그에 따른 정보를 출력하도록 구현했습니다.

<h5> 5. 역할 분담 </h5>

<ul> 
 <li> 20180887 강민진 </li>
웹 호스팅 담당
db 임포트 및 xml 파일 변환, 인코딩
 <li> 20180990 이소윤 </li>
db와 웹 페이지 연동 및 웹 페이지 프로그래밍, db 임포트
sql 쿼리 작성 및 career.php, closedt.php, local.php, salary.php 구현
 <li>	20180991 이영주 </li>
전체 시스템 취합 및 프로젝트 목표 확립, sql 쿼리 작성 및
소개 페이지 작성 
 <li>	20172076 이지원 </li>
sql 쿼리 작성 및 웹 페이지 프로그래밍
</ul>
<h5> + 저희는 연락을 빠르게 수행하기 위해 슬랙보다는 카카오톡 단체 채팅방에서 회의와 프로그래밍 진행상황을 공유하였으며 슬랙은 회의 내용을 요약해 간단히 작성해 놓았습니다.</h5>

<h5> 6. 데이터베이스 출처 : 워크넷 </h5>
http://openapi.work.go.kr/opi/opi/opia/wantedApi.do?authKey=WNKIECSDX2XT7JDKXLBUU2VR1HK&callTp=L&returnType=XML&startPage=1&display=10

<h5> 7. 웹 호스팅 주소 </h5>
http://dbpt12.woobi.co.kr/index.php 

<h5> 8. 웹 호스팅 영상 </h5>
https://youtu.be/ZuGC13up_Rk
