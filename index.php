<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">  
    <title>Language Translator</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome CDN Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script>
      function cls() {
        // console.log(from+" "+to);
        // let from = document.getElementById('from').value = "";
        let to = document.getElementById('to').vlaue = "";
        // console.log(from+" "+to);
      }
    </script>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="text-input">
          <textarea spellcheck="false" class="from-text" placeholder="Enter text" id="from"></textarea>
          <textarea spellcheck="false" readonly disabled class="to-text" placeholder="Translation" id="to"></textarea>
        </div>
        <ul class="controls">
          <li class="row from">
            <div class="icons">
              <i id="from" class="fas fa-volume-up"></i>
              <i id="from" class="fas fa-copy"></i>
            </div>
            <select></select>
          </li>
          <li class="exchange"><i class="fas fa-exchange-alt"></i></li>
          <li class="row to">
            <select></select>
            <div class="icons">
              <i id="to" class="fas fa-volume-up"></i>
              <i id="to" class="fas fa-copy"></i>
            </div>
          </li>
        </ul>
      </div>
      <button>Translate Text</button>
      <button onclick="location.reload()">Clear</button>
    </div>
    <script src="countries.js"></script>
    <script src="script.js"></script>
  </body>
</html>