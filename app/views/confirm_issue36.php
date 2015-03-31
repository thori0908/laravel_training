<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>issue36</title>
</head>

<body>
  <h1>フォーム > 確認</h1>
  <form action="input" method="POST">
    <table>
      <tr>
        <td>名前：あああ
          <input type="hidden" name="lastname" value="ああ">
          <input type="hidden" name="firstname" value="いい">
        </td>
      </tr>
      <tr>
        <td>性別：男
          <input type="hidden" name="gender" value="">
      </tr>
      <tr> 
        <td>郵便番号：123-1234
          <input type="hidden" name="postcodeFirst" value="">
          <input type="hidden" name="postcodeSecond" value="">
        </td>
      </tr>
      <tr> 
        <td>都道府県：愛知県</td>
          <input type="hidden" name="prefecture" value="">
        </td>
      </tr>
      <tr> 
        <td>メールアドレス：aaaaaaa@qwerqwer</td>
          <input type="hidden" name="mailaddress" value="">
        </td>
      </tr>
      <tr> 
        <td>趣味：
         音楽鑑賞
        </td>
      </tr>
      <tr> 
        <td>ご意見：</td>
      </tr>
    </table>
    <input name="return"  type="submit" value="戻る" formaction="input">
    <br>
  </form>
  <form action="complete" method="POST">
    <input type="hidden" name="lastname" value="">
    <input type="hidden" name="firstname" value="">
    <input type="hidden" name="mailaddress" value="">
    <input type="hidden" name="prefecture" value="">
    <input type="submit" value="送信" formaction="complete">
  </form>
  <p>Copyright 2014</p>
</body>
</html>
