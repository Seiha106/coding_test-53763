# 설명
이 문제의 목표는 클라이언트에서 jQuery Ajax를 통하여 데이터를 전송하고, 해당 PHP 서버에서 데이터에 알맞는 결과를 JSON 형태로 응답하는 것 입니다.

# 조건
1. 전송을 위해 입력 받는 input 태그의 id는 각각 'param1', 'param2'로 한다.
2. Ajax를 통한 요청의 처리 결과는 입력에 따라 아래와 같이 한다.

# 세부조건
- 두개의 input중 하나라도 입력이 없을 경우 `{ "error": true }`로 리턴
- input이 모두 입력되었고, 두 개의 값이 다른 경우 `{ "error": false, "result": false }`로 리턴
- input이 모두 입력되었고, 두 개의 값이 같은 경우 `{ "error": false, "result": true }`로 리턴
