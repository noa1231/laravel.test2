<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>管理システム</h2>
  <form action="{{ route('display') }}" method="get">
    <div>
      <label for="">お名前</label>
      <input type="text" name="fullname">
    </div>
    <button type="submit">検索</button>
  </form>
  <table>
    <tr>
      <th>お名前</th>
    </tr>
    @foreach($items as $item)
    <tr>
      <td>{{$item->fullname}}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>