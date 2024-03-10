<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>試験管ゲーム</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            .center{
                text-align: center;
            }
            .center * {
                margin-right: auto;
                margin-left: auto;
            }
        </style>
         </head>
    <body>
      <div class="center">
            
        <div style="
            color: #ffbf7f;
            background-color: #fff4f4;
            width: 600px;
            font-size: 80px;
        ">
            <p>ゲームクリア!</p>
        </div>
        
        <div style="
            color: limegreen;
            font-size: 40px;
        ">
            <p>～おめでとう～</p>
        </div>
        
         <div style="
            line-height: 10;
            
        ">
            <button onclick="location.href='https://8de5862b347a406e9e69ae721ca5bf5f.vfs.cloud9.ap-southeast-2.amazonaws.com/'">スタート画面に戻る</button>
        </div>

      </div>
      
    </body>
</html>