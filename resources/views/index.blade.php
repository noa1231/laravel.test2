<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>お問い合わせ</h2>
  <form action="{{ route('confirm') }}" method="post">
    @csrf
    <div>
      <label for="">お名前※</label>
      <input type="text" name="fullname">
      @error('fullname')
        <div>{{$message}}</div>
      @enderror
    </div>
    <div>
      <label for="">性別※</label>
      <input type="radio" name="gender" value="1" checked>男性
      <input type="radio" name="gender" value="2">女性
      @error('gender')
        <div>{{$message}}</div>
      @enderror
    </div>
    <div>
      <label for="">メールアドレス※</label>
      <input type="email" name="email" >
      @error('email')
        <div>{{$message}}</div>
      @enderror
    </div>
    <div>
      <label for="">郵便番号※</label>
      <input type="text" name="postcode">
      @error('postcode')
        <div>{{$message}}</div>
      @enderror
    </div>  
    <div>
      <label for="">住所※</label>
      <input type="text" name="address">
      @error('address')
        <div>{{$message}}</div>
      @enderror
    </div>
    <div>
      <label for="">建物名</label>
      <input type="text" name="building_name">
    </div>
    <div>
      <label for="">ご意見※</label>
      <textarea name="opinion" id="" cols="30" rows="10"></textarea>
      @error('opinion')
        <div>{{$message}}</div>
      @enderror
    </div>
    <input type="submit" value="確認">
  </form>
</body>
</html>