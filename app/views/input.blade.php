@extends('layouts.formTemplate')

@section('body')
  <h1>フォーム > 入力</h1>
  <form action="confirm" method="POST">
    <fieldset>
      <legend>フォーム</legend>
      <label for="name"> 名前：</label>
      <input type="text" name="lastname" size="10" id="name" value="{{ $user->lastname }}" >
      <input type="text" name="firstname" size="10" value="{{ $user->firstname }}">
      <font color="#ff0000">
      </font> 
      <font color="#ff0000">
      </font> 
      <br>
      <label for="male">性別：</label>
      男性<input type="radio" name="gender" value="男" id="male" @if ( $user->gender == "男" ) {{ 'checked' }} @endif >
      女性<input type="radio" name="gender" value="女" id="gender" @if ( $user->gender == "女" ) {{ 'checked' }}@endif >
      <font color="#ff0000">
      </font> 
      <br>  
      <label for="postcode">郵便番号：</label>
      <input type="text" name="postcodeFirst" size="3" id="postcode" value="{{ $user->postcodeFirst }}">
      - <input type="text" name="postcodeSecond" size="4" id="postcode" value="{{ $user->postcodeSecond }}">
      <font color="#ff0000">
      </font> 
      <br>
      <label for="prefecture">都道府県：</label>
      <select name="prefecture" id="prefecture">
        <option value="--">--</option>
        {{ $selectbox }}
      </select>
      <font color="#ff0000">
      </font> 
      <br>        
      <label for="mailaddress">メールアドレス：</label>
      <input type="text" name="mailaddress" size="40" id="mailaddress" value="{{ $user->mailaddress }}"><br>
      <font color="#ff0000">
      </font> 
      <br>
      趣味：
      <input type="checkbox" name="hobbyMusic" value="音楽鑑賞" id="music" @if ($user->hobbyMusic == "音楽鑑賞") {{ 'checked' }} @endif>音楽鑑賞
      <input type="checkbox" name="hobbyMovie" value="映画鑑賞" id="movie" @if ($user->hobbyMovie == "映画鑑賞") {{ 'checked' }} @endif>映画鑑賞
      <input type="checkbox" name="hobbyOther" value="その他" id="other"  @if ($user->hobbyOther == "その他") {{ 'checked' }} @endif>その他
      <input type="text" name="hobbyOtherText" size="20" id="othertext" value="{{ $user->hobbyOtherText }}">
      <font color="#ff0000">
      </font> 
      <br>
      <label for="opinion">ご意見：</label>
      <textarea name="opinion" rows="2" cols="20" id="opinion">{{ $user->opinion }}</textarea><br>
      <input type="submit" value="確認" id="opinion"><br>
    </fieldset>
  </form> 
@stop
