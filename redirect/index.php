<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@serene_jp">
    <meta property="og:type" content="website">
    <meta property="og:site_name" contet="192.168.10.100:8888">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:image" content="http://192.168.10.100:8888/img/icon/150.png">
    <link rel="apple-touch-icon-precomposed" href="http://192.168.10.100:8888/img/icon/150.png">
    <meta name="msapplication-TileImage" content="http://192.168.10.100:8888/img/icon/150.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <link rel="shortcut icon" href="http://192.168.10.100:8888/favicon.ico" type="image/x-icon">
    <link rel="icon" href="http://192.168.10.100:8888/img/icon/16.png" sizes="16x16" type="image/png">
    <link rel="icon" href="http://192.168.10.100:8888/img/icon/32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="http://192.168.10.100:8888/img/icon/48.png" sizes="48x48" type="image/png">
    <link rel="icon" href="http://192.168.10.100:8888/img/icon/64.png" sizes="64x64" type="image/png">
    <title>リダイレクト - SereneLinux 公式サイト</title>
    <meta property="og:title" content="リダイレクト - SereneLinux 公式サイト">
    <meta name="description" content="リダイレクト - SereneLinux 公式サイト">
    <meta property="og:description" content="リダイレクト先のURLを確認してからアクセスしてください">
    <meta property="og:url" content="http://192.168.10.100:8888/">
    <link rel="canonical" href="http://192.168.10.100:8888/">
    <link rel="canonical" href="http://192.168.10.100:8888/">
    <link rel="alternate" href="http://192.168.10.100:8888/" hreflang="ja-jp">
    <link rel="alternate" href="http://192.168.10.100:8888/en/" hreflang="en-us">
    <link rel="alternate" href="http://192.168.10.100:8888/" hreflang="x-default">
    <link rel="stylesheet" href="/css/default.css">
    <link rel="stylesheet" href="/css/error.css">
</head>
<body>
  <input type="checkbox" name="gnav-bin" id="gnav-bin">
  <header id="head">
    <h1><a href="/"><img src="/img/icon/64.png" alt=""><span>SereneTeam</span></a></h1>
    <label class="gnav-open" for="gnav-bin"><i class="material-icons">menu_open</i></label>
    <nav id="gnav">
      <label class="gnav-close" for="gnav-bin"><i class="material-icons">close</i></label>
      <ul id="gnav-ul">
        <li><a href="/">ホーム</a></li>
        <li><a href="/forum/">フォーラム</a></li>
        <li><a href="/download/">ダウンロード</a></li>
        <li><a href="/blog/">ブログ</a></li>
        <li><a href="/link/">リンク</a></li>
        <li><a href="/donation/">寄付する</a></li>
        <li><a href="/team/">チーム</a></li>
      </ul>
    </nav>
  </header>
  <article id="main">
    <div>
        <h1>他のサイトに移動しようとしています。</h1>
        <p>移動する際はこちらをクリックしてください</p>
        <p><a href="<?=htmlspecialchars($_GET["r"], ENT_QUOTES, 'UTF-8');?>"><?=htmlspecialchars($_GET["r"], ENT_QUOTES, 'UTF-8');?></a></p>
    </div>
    <img src="/img/character/redirect.png" alt="水瀬玲音">
  </article>
  <a href="/en/redirect/?r=<?=htmlspecialchars($_GET["r"], ENT_QUOTES, 'UTF-8');?>" id="language">
    <img src="data:image/gif;base64,R0lGODdhIAARAPUAAAQujIRCRNze7BQ6lBQujOQCFAw2lPzm7AwujERerCxKnBw+lOTi7FxytIxubHSGvDxapKy21OwuPExmrGR6tAwyjGyCvJSizCRGnIyOjOQSJDRSpOzq9PRqdPz6/KSu1PS2vIRKTPze3BQ2lOQKHAQylIwqNAwylAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAAIAARAAAGr8DFhDAsKhTDRoDEbDqfTWFjMm1AJhMIZXMBeb/g8HexLSus5/NHxG6732wQQWGhk5EN8iAk6fv/gH0aeg8jFAZWZAAPER6Oj5CRjgwVJ4cWABQYWosADh2goaKjoQOXmSdYihYZYq5hCJ2HmpyHEQe4ubq7uCIEp4eqsyYFxcbHyMYCHMzNzs280boir9XWYaTZ2tugDJLf4OEMGoHl5ucaIHDr7O3X79ZQ8vP0TEEAOw==" alt="アメリカ国旗">
    <span>English</span>
  </a>
  <footer id="foot"><small>© 2019 SereneLinux</small></footer>
</body>
</html>