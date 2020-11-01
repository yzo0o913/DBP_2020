< 7주차 학습 회고 >

0. 과제 링크 :
https://youtu.be/s8z58O945aQ

1. 새로 배운 내용 : 
mysql에서 2개 이상의 테이블을 조인하여 결과를 얻는 쿼리문 작성을 연습했다.
또한 테이블을 꾸미는 코드를 새로 배웠으며 이를 이용해 쿼리문으로 얻은 결과를 테이블 형식으로 출력하는 방법을 익힐 수 있었다.

2. 문제가 발생하고 고민한 내용 :
과제를 하던 중에 원래는 부서를 입력받아 해당 부서의 부서 직원들을 모두 출력하는 기능을 만드려고 했다.
부서를 입력받아 직원을 출력하는 기능을 구현하던 와중에 dept_name을 string으로 받으려고 했는데 오류가 났다. 
오류도 오류이지만 위 기능을 구현하려면 너무 많은 부서원들을 출력해야 하기에 chrome 상에서 오류가 발생했고 
이에 다른 기능을 만들기로 했다.

3. 참고할 만한 내용 :
슬랙의 QNA 에서 git push 충돌이 일어나는 원인에 대해 고민하던 중 교수님이 올려주신 링크를 참고해 고쳐보았다.
https://dongza.tistory.com/7
그리고 동기 혜정이가 pull을 먼저 해야한다고 방식을 알려주어서 해당 코드로 push를 완료할 수 있었다.
git pull origin master --allow-unrelated-histories
git push origin master


4. 회고
+ :
직접 새로운 기능을 구현해보고 테이블도 꾸밀 수 있어서 흥미로웠다.
과제에 시행착오가 있었지만 다른 기능을 추가하는 방향으로 해서 금방 해낼 수 있어 좋았다.
- : 
dept_name을 string으로 받아서 부서원 10명을 출력하는 쿼리는 작성했으나 계속 오류가 나서 아쉽게도 다른 기능을 구현하기로 한 점이 아쉽다.
오류를 고치고 원하는 기능을 구현하고 싶다.
! : 
저번주에 git에서 충돌이 일어나서 vmware 에서  push 하지 못한 내용을 atom을 통해 새로운  php 코드로 만들어 올렸었다.
그래서 아쉬웠는데 이번 주에는 고쳐서 다 push 한 점이 가장 뿌듯하다. 