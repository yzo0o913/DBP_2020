< 11주차 학습 회고 >

0. 과제 링크 :
https://youtu.be/ErsoQFQjUzw

1. 새로 배운 내용 : 
hr 계정에 있는 테이블로 sql 문을 작성해보았다.
이클립스를 이용해 java 언어로 데이터베이스와 연동하고 select, insert, update, delete 기능을 구현했다.
롤백과 트랜젝션의 개념을 익혔다. 

2. 문제가 발생하고 고민한 내용 :
한 번 수정된 데이터베이스에 같은 쿼리로 접근하여 오류가 생겼다.
이는 롤백기능과 추가 쿼리 작성을 통해 수정할 수 있었다.

3. 참고할 만한 내용 :
DB 접속 이후 자원 반납
● select, update, insert, delete 할 때 마다 db 연결하고 종료해서, 자원을 반납하자 
● Connection, Statement, ResultSet 객체를 사용한 뒤 close() 메소드를 호출해서 자원을 반납하기 
● 반납하지 않으면 DB서버가 해당 SQL문의 결과를 계속 저장하고 있어야 하므로 메모리 낭비 발생

4. 회고
+ :
employees 테이블이 아닌 countries 테이블을 처음 사용해보아서 흥미로웠다.
sql developer가 아닌 eclips workstation을 사용해 기존 제공되는 기본 데이터 베이스의 내용을 변경해볼 수 있어 좋았다.  
- : 
z로 시작하는 나라를 찾고 싶었는데 없어서 korea 의 id를 zz로 설정한 것이 아쉬웠다.
! : 
롤백 기능을 이용해 데이터를 복구시킬 수 있어 편리했다.
