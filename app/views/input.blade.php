@extends('layouts.formTemplate')

@section('body')
  <h1>フォーム > 入力</h1>
  {{ Form::open(array('url'=>'confirm', 'method'=>'POST')) }}
    <fieldset>
      <legend>フォーム</legend>
      <label for="name"> 名前：</label>
      {{ Form::text('lastname', $user->lastname, ['size'=>10]) }}
      {{ Form::text('firstname', $user->firstname, ['size'=>10]) }}
      <font color="#ff0000">
      </font> 
      <font color="#ff0000">
      </font> 
      <br>
      <label for="male">性別：</label>
      男性
      @if ( $user->gender == "男" ) 
          {{ Form::radio('gender',  '男', true) }}
      @else 
          {{ Form::radio('gender',  '男') }}
      @endif
      女性
      @if ( $user->gender == "女" ) 
          {{ Form::radio('gender',  '女', true) }}
      @else 
          {{ Form::radio('gender',  '女') }}
      @endif
      <font color="#ff0000">
      </font> 
      <br>  
      <label for="postcode">郵便番号：</label>
      {{ Form::text('postcodeFirst',  $user->postcodeFirst, ['size'=>4]) }}
      - {{ Form::text('postcodeSecond',  $user->postcodeSecond, ['size'=>3]) }}
      <font color="#ff0000">
      </font> 
      <br>
      <label for="prefecture">都道府県：</label>
      {{ Form::select('pref_id', array('default' => '--') + $pref_names, $user['pref_id']) }}
      <font color="#ff0000">
      </font> 
      <br>        
      <label for="mailaddress">メールアドレス：</label>
      {{ Form::text('mailaddress', $user->mailaddress, ['size'=>40]) }}
      <font color="#ff0000">
      </font> 
      <br>
      趣味：
      @if ( $user->hobbyMusic == "音楽鑑賞" ) 
          {{ Form::checkbox('hobbyMusic',  '音楽鑑賞', true) }}
      @else 
          {{ Form::checkbox('hobbyMusic',  '音楽鑑賞') }}
      @endif
      音楽鑑賞
      @if ( $user->hobbyMovie == "映画鑑賞" ) 
          {{ Form::checkbox('hobbyMovie',  '映画鑑賞', true) }}
      @else 
          {{ Form::checkbox('hobbyMovie',  '映画鑑賞') }}
      @endif
      映画鑑賞
      @if ( $user->hobbyOther == "その他" ) 
          {{ Form::checkbox('hobbyOther',  'その他', true) }}
      @else 
          {{ Form::checkbox('hobbyOther',  'その他') }}
      @endif
      その他
      {{ Form::text('hobbyOtherText', $user->hobbyOtherText, ['size'=>20]) }}
      <font color="#ff0000">
      </font> 
      <br>
      <label for="opinion">ご意見：</label>
      <textarea name="opinion" rows="2" cols="20" id="opinion">{{ $user->opinion }}</textarea><br>
      {{ Form::submit('確認') }}
    </fieldset>
  {{ Form::close() }}
@stop
