<!DOCTYPE html>
<html>
<head>
  <title>Serendipity sign up</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
    <form name="sign up" action="memberSave.php" method="post">
        <table>
            <tr>
                <td>이름</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>아이디</td>
                <td><input type="text" name="ID" /></td>
            </tr>
            <tr>
                <td>비밀번호</td>
                <td><input type="password" name="pwd" /></td>
            </tr>
            <tr>
                <td>비밀번호 확인</td>
                <td><input type="text" name="pwd2" /></td>
            </tr>
            <tr>
                <td>생년월일</td>
                <td><select name="birthYear">
                        <option value="2000" selected>2000</option>
                        <option value="2001" selected>2001</option>
                        <option value="2002" selected>2002</option>
                        <option value="2003" selected>2003</option>
                        <option value="2004" selected>2004</option>
                    </select>
                    년
                    <select name="birthMonth">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    월
                    <select name="birthDay">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    일
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="완료" />
                <input type="reset" name="reset" value="리셋" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
