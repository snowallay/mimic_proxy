<html lang="ja"><head>
            <meta charset="UTF-8">
            <title>mimic proxy</title>
            <link rel="icon" type="image/svg+xml" href="/favicon.svg">
            <link rel=icon type="image/vnd.microsoft.icon" href="/favicon.ico">
<style type="text/css">
    .textbox-1 {
    width: 70%;favicon
    padding: 8px 5px;a
    border: 1px solid #969da3;
    border-radius: 22px;
    color: #333;
    font-size: 1.05em;
    line-height: 1.5;
    }

    .textbox-1::placeholder {
    color: #999;
    }


  .btn {
  width: 95px;
  height: 40px;
  padding: 10px 30px;
  background-color: #acc3fa;
  border-radius: 9px;
      border: 2px solid #98AFE6;

</style>


        </head>
        <body bgcolor="#FFFFFC">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
    <center>
        <img align="center" src="images/mimicbox.svg" <p=""><font size="7" face="Courier">mimic proxy</font><p></p> 
        <label for="url"></label>
        <input type="text" id="textbox" name="url" class="textbox-1" placeholder="    URLを入力してください" required="">
        <br>
        <br>
        <button type="submit" class="btn" id="textbox_button">GO!</button>

        <font face="Courier"><p id="test"></p></font>
        <script>
function butotnClick(){
    test.innerText = textbox.value + 'に飛ぶ！';
  var str1 = textbox.value;
  var result1 = str1.indexOf( 'https://' );
  if(result1 !== -1) {

    //見つかった場合
      var result3 = str1.substr( 8 );

  }
  else {

  //見つからなかった場合
  var result2 = str1.indexOf( 'http://' );
  if(result2 !== -1) {

    var result3 = str1.substr( 7 );

  }
  else {

//見つからなかった場合
  var result3 = textbox.value;
  }
  }
  let newwin = window.open(result3);
  }
  
  let textbox = document.getElementById('textbox');
  let test = document.getElementById('test');
  
  let textbox_button = document.getElementById('textbox_button');
  textbox_button.addEventListener('click', butotnClick);
  

</script>
    
    </center>
<?php
    $url = "https://github.com/snowallay/mimic_proxy/blob/7b1bdff7cfdb3eee19d01511b36de352a5ec174c/hello.txt";
    $output = file_get_contents($url);
    echo($output);
?>
<!--<iframe src="https://www.youtube.com/embed/RZPZ9qR1uMU?si=XDjH0rS-lELKYRXr?rel=0&autoplay=1" frameborder="0"
 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
 allowfullscreen ></iframe>-->
</body></html>
