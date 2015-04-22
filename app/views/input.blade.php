@extends('layouts.formTemplate')

@section('body')
  <h1>フォーム > 入力</h1>
  {{ Form::open(array('url'=>'confirm', 'method'=>'POST')) }}
    <fieldset>
      <legend>フォーム</legend>
      <label for="name"> 名前：</label>
      {{ Form::text('lastname',  $user->lastname, ['size'=>10]) }}
      {{ Form::text('firstname', $user->firstname, ['size'=>10]) }}
      {{ $errors->first('lastname','<font style="color:red">:message</font>') }}
      {{ $errors->first('firstname','<font style="color:red">:message</font>') }}
      <br>
      <label for="male">性別：</label>
      男性
      {{ Form::radio('gender', '男', $user->gender == '男') }}
      女性
      {{ Form::radio('gender', '女', $user->gender == '女') }}
      {{ $errors->first('gender','<font style="color:red">:message</font>') }}
      <br>  
      <label for="postcode">郵便番号：</label>
      {{ Form::text('postcodeFirst', $user->postcodeFirst, ['size'=>3]) }}
      - {{ Form::text('postcodeSecond', $user->postcodeSecond, ['size'=>4]) }}
      {{ $errors->first('postcodeFirst','<font style="color:red">:message</font>') }}
      {{ $errors->first('postcodeSecond','<font style="color:red">:message</font>') }}
      <br>
      <label for="prefecture">都道府県：</label>
      {{ Form::select('pref_id', array('default' => '--') + $pref_names, $user['pref_id']) }}
      {{ $errors->first('pref_id','<font style="color:red">:message</font>') }}
      <br>        
      <label for="mailaddress">メールアドレス：</label>
      {{ Form::text('mailaddress', $user->mailaddress, ['size'=>40]) }}
      {{ $errors->first('mailaddress','<font style="color:red">:message</font>') }}
      <br>
      趣味：
      {{ Form::checkbox('hobbyMusic', '音楽鑑賞', $user->hobbyMusic == "音楽鑑賞") }}
      音楽鑑賞
      {{ Form::checkbox('hobbyMovie', '映画鑑賞', $user->hobbyMovie == "映画鑑賞" ) }}
      映画鑑賞
      {{ Form::checkbox('hobbyOther', 'その他', $user->hobbyOther == "その他") }}
      その他
      {{ Form::text('hobbyOtherText', $user->hobbyOtherText, ['size'=>20]) }}
      {{ $errors->first('hobbyOtherText','<font style="color:red">:message</font>') }}
      <br>
      <label for="opinion">ご意見：</label>
      <textarea name="opinion" rows="2" cols="20" id="opinion">{{ $user->opinion }}</textarea><br>
      {{ Form::submit('確認') }}
    </fieldset>
  {{ Form::close() }}
@stop
