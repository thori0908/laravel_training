@extends('layouts.formTemplate')

@section('body')
  <h1>フォーム > 確認</h1>
  {{ Form::open(array('url'=>'input', 'method'=>'GET')) }}
    <table>
      <tr>
        <td>名前：{{ $user->getFullname() }}
          {{ Form::hidden('lastname', $user['lastname'])}}
          {{ Form::hidden('firstname', $user['firstname'])}}
        </td>
      </tr>
      <tr>
        <td>性別：{{ $user['gender'] }}
          {{ Form::hidden('gender', $user['gender'])}}
      </tr>
      <tr> 
        <td>郵便番号：{{ $user['postcodeFirst'] }} - {{ $user['postcodeSecond'] }}
          {{ Form::hidden('gender', $user['gender'])}}
          {{ Form::hidden('postcodeFirst', $user['postcodeFirst'])}}
        </td>
      </tr>
      <tr> 
        <td>都道府県：{{ $pref_name }}</td>
          {{ Form::hidden('pref_id', $user['pref_id'])}}
        </td>
      </tr>
      <tr> 
        <td>メールアドレス：{{ $user['mailaddress'] }}</td>
          {{ Form::hidden('mailaddress', $user['mailaddress'])}}
        </td>
      </tr>
      <tr> 
        <td>趣味：
          {{ $user['hobbyMusic'] }} {{ $user['hobbyMovie'] }} {{ $user['hobbyOther'] }} {{ $user['hobbyOtherText'] }}
          {{ Form::hidden('hobbyMusic', $user['hobbyMusic'])}}
          {{ Form::hidden('hobbyMovie', $user['hobbyMovie'])}}
          {{ Form::hidden('hobbyOther', $user['hobbyOther'])}}
          {{ Form::hidden('hobbyOtherText', $user['hobbyOtherText'])}}
        </td>
      </tr>
      <tr> 
        <td>ご意見：{{ nl2br($user['opinion']) }}</td>
          {{ Form::hidden('opinion', $user['opinion'])}}
        </td>
      </tr>
    </table>
    {{ Form::submit('戻る', ['formaction'=>"input"])}}
    <br>
  {{ Form::close() }}
  {{ Form::open(array('url'=>'/complete', 'method'=>'POST')) }}
    {{ Form::hidden('lastname', $user['lastname'])}}
    {{ Form::hidden('firstname', $user['firstname'])}}
    {{ Form::hidden('mailaddress', $user['mailaddress'])}}
    {{ Form::hidden('prefecture', $user['prefecture'])}}
    {{ Form::submit('送信', ['formaction'=>"/complete"])}}
  {{ Form::close() }}
@stop
