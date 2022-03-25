<meta property="og:image" content="https://icdn.dantri.com.vn/thumb_w/770/2022/03/01/hacker-nga-1646146686700.jpg">
<meta property="og:title" content="Không phải virus đừng sợ ^^">
<meta property="og:description" content="Câu trả lời của bạn sẽ giúp mình biết bạn đối với mình như thế nào?">
<div class='box-love'>
  <span>Bạn có yêu mình không</span>
  <div class='box'>
    <button id="love">Yêu</button>
    <button id="no-love">Không Yêu</button>
  </div>
</div>

<style>
  .box-love {
    width: 500px;
    height: 300px;
    position: relative;
  }

  .box {
    position: absolute;
    top: 40%;
    left: 35%
  }

  button {
    border: none;
    border-radius: 4px;
    padding: 8px;
    background: red;
    color: #fff;
    outline: none;
    text-transform: uppercase;
    font-weight: bold;
  }

  button:hover {
    cursor: pointer;
    opacity: 0.6;
  }

  span {
    position: absolute;
    top: 30%;
    left: 25%;
    text-align: center;
    display: block;
    margin-bottom: 8px;
    font-size: 20px;
    color: rgb(248, 4, 4);
    text-transform: uppercase;
    font-weight: bold;
  }

  .move {
    transform: translate(-200%, -200%);
    transition: 0.01s;
  }
</style>
<script>
  var love = document.getElementById("love");
  var no_love = document.getElementById("no-love");

  love.addEventListener("click", myFunction);
  function myFunction() {
    alert('Mình Biết Mà ahihi')
  }

  no_love.addEventListener("mouseover", lovefunction);
  function lovefunction() {
    no_love.classList.toggle('move')
  }
</script>