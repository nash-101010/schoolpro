<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arcade</title>
    <?php 
        include("include.php");
    ?>
    <script src="jquery.min.js"></script>
</head>
<body id="index" class="bg_index container">
    <div id="app">
        <div class="h60"></div>
        <h1>模式選擇</h1>
        <div class="h30"></div>
        <div class="fc" id="app">
            <a href="normal.html" @click="standard_mode"  class="helloworld well">
                <img src="icon/multiplayer.png" alt="">
            </a>
            <a href="#" @click="game_mode"  class="helloworld well">
                <img src="icon/poker-game.png" alt="">
            </a>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>
  var api = "http://192.168.0.64:5000"

  var app = new Vue({
    el: '#app',
    data() {
      return {
        mode_one: "standard_mode",
        mode_two: "game_mode",
      }
    },
    methods: {
      // postToApi() {
      //   console.log("sdf")
      // },
      standard_mode() {
        var array = {
          usermode_one: this.mode_one,
        }
        $.post(api, {
          usermode_one: this.mode_one
        })
      },
      game_mode() {
        var array = {
          usermode_two: this.node_two
        }
        $.post(api, {
          usermode_two: this.mode_two
        })
      }
    }
  })
</script>
</html>