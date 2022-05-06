<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>内容確認</h2>
  <form action="{{ route('create') }}" method="post">
    @csrf
    <div>
      <label for="">お名前</label>
      <input type="hidden" name="fullname">{{ $input['fullname'] }}
    </div>
    <div>
      <label for="">性別</label>
      <input type="hidden" name="gender" >{{ $input['gender'] }}
    </div>
    <div>
      <label for="">メールアドレス</label>
      <input type="hidden" name="email" >{{ $input['email'] }}
    </div>
    <div>
      <label for="">郵便番号</label>
      <input type="hidden" nema="postcode">{{ $input['postcode'] }}
    </div>
    <div>
      <label for="">住所</label>
      <input type="hidden" name="address">{{ $input['address'] }}
    </div>
    <div>
      <label for="">建物名</label>
      <input type="hidden" name="building_name">{{ $input['building_name'] }}
    </div>
    <div>
      <label for="">ご意見</label>
      <input type="hidden" name="building_name">{{ $input['opinion'] }}  
    </div>
    <input type="submit" value="送信">
    <div>
      <a href="{{ route('index') }}">修正する</a>
    </div>
</form>
</body>
</html>