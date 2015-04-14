<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>issue37</title>
</head>

<body>
  <h1>フォーム > 確認</h1>
  <form action="input" method="GET">
    <table>
      <tr>
        <td>名前：{{ $user->getFullname() }}
          <input type="hidden" name="lastname" value="{{ $user['lastname'] }}">
          <input type="hidden" name="firstname" value="{{ $user['firstname'] }}">
        </td>
      </tr>
      <tr>
        <td>性別：{{ $user['gender'] }}
          <input type="hidden" name="gender" value="{{ $user['gender'] }}">
      </tr>
      <tr> 
        <td>郵便番号：{{ $user['postcodeFirst'] }} - {{ $user['postcodeSecond'] }}
          <input type="hidden" name="postcodeFirst" value="{{ $user['postcodeFirst'] }}">
          <input type="hidden" name="postcodeSecond" value="{{ $user['postcodeSecond'] }}">
        </td>
      </tr>
      <tr> 
        <td>都道府県：{{ $user['prefecture'] }}</td>
          <input type="hidden" name="prefecture" value="{{ $user['prefecture'] }}">
        </td>
      </tr>
      <tr> 
        <td>メールアドレス：{{ $user['mailaddress'] }}</td>
          <input type="hidden" name="mailaddress" value="{{ $user['mailaddress'] }}">
        </td>
      </tr>
      <tr> 
        <td>趣味：
          {{ $user['hobbyMusic'] }} {{ $user['hobbyMovie'] }} {{ $user['hobbyOther'] }} {{ $user['hobbyOtherText'] }}
          <input type="hidden" name="hobbyMusic" value="{{ $user['hobbyMusic'] }}">
          <input type="hidden" name="hobbyMovie" value="{{ $user['hobbyMovie'] }}">
          <input type="hidden" name="hobbyOther" value="{{ $user['hobbyOther'] }}">
          <input type="hidden" name="hobbyOtherText" value="{{ $user['hobbyOtherText'] }}">
        </td>
      </tr>
      <tr> 
        <td>ご意見：{{ $user['opinion'] }}</td>
          <input type="hidden" name="opinion" value="{{ $user['opinion'] }}">
        </td>
      </tr>
    </table>
    <input name="return"  type="submit" value="戻る" formaction="input">
    <br>
  </form>
  <form action="/complete" method="POST">
    <input type="hidden" name="lastname" value="{{ $user['lastname'] }}">
    <input type="hidden" name="firstname" value="{{ $user['firstname'] }}">
    <input type="hidden" name="mailaddress" value="{{ $user['mailaddress'] }}">
    <input type="hidden" name="prefecture" value="{{ $user['prefecture'] }}">
    <input type="submit" value="送信" formaction="/complete">
  </form>
  <p>Copyright 2014</p>
</body>
</html>
