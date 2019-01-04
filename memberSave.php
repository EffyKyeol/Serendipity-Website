<?php
    include "../include/dbConnect.php";

    $memberId = $_POST['memberId'];
    $memberName = $_POST['memberName'];
    $memberPw = $_POST['memberPw'];
    $memberPw2 = $_POST['memberPw2'];
    $memberBirthDay = $_POST['memberBirthDay'];

    //PHP에서 유효성 재확인

    //아이디 중복검사.
    $sql = "SELECT * FROM member WHERE memberId = '{$memberId}'";
    $res = $dbConnect->query($sql);
    if($res->num_rows >= 1){
        echo '이미 존재하는 아이디가 있습니다.';
        exit;
    }

    //비밀번호 일치하는지 확인
    if($memberPw !== $memberPw2){
        echo '비밀번호가 일치하지 않습니다.';
        exit;
    }else{
        //비밀번호를 암호화 처리.
        $memberPw = md5($memberPw);
    }

    //닉네임, 생일 그리고 이름이 빈값이 아닌지
    if($memberBirthDay == '' || $memberName == ''){
        echo '생일을 입력하지 않았습니다.';
    }

    //이제부터 넣기 시작
    $sql = "INSERT INTO member VALUES('','{$memberId}','{$memberName}','{$memberNickName}','{$memberPw}','{$memberEmailAddress}','{$memberBirthDay}');";

    if($dbConnect->query($sql)){
        echo '회원가입 성공';
    }
?>
