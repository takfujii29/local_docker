<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>食べたもの登録</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="/css/reset.css" rel="stylesheet" type="text/css">
  </head>

  <body>
  <a href="/sugar/{{ Auth::user()->id }}">list</a>
      <div class="main">
        <div class="title">
          <h2>メニュー登録</h2>
        </div>
        <div class="result">
          <h3 class="subtitle">登録糖質</h3>
          <span id="result">0 g</span>
        </div>

        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif


      </div>
  </body>
</html>