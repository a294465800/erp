<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- 全局依赖 ==== 所有页面都要有 -->
  <link rel="stylesheet" type="text/css" href="../../plugin/semantic/dist/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="../../dist/css/erp.css">
  <script src="../../plugin/jquery/jquery.3.2.1.min.js"></script>
  <script src="../../plugin/semantic/dist/semantic.min.js"></script>
  <!-- /全局依赖 -->
  <title>登录</title>
</head>

<body id="login">
  <div class="ui middle aligned center aligned grid">
    <div class="column">
      <h2 class="ui blue image header">
        <div class="content">登录</div>
      </h2>
      <form class="ui large form ">
        <div class="ui stacked segment">
          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input id="phoneValidate" type="text" name="phone" placeholder="输入登录手机号">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input type="password" name="password" placeholder="输入密码">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input action">
              <i class="keyboard icon"></i>
              <input type="text" name="sms" placeholder="验证码">
              <button class="ui button disabled blue" id="smsBtn">获取验证码</button>
            </div>
          </div>
          <div class="ui fluid large blue submit button">登录</div>
        </div>

        <div class="ui error message"></div>

      </form>
    </div>
  </div>

  <!-- 独立 js === 每个页面独有-->
  <script src="../../dist/js/login.js"></script>
  <!-- /独立 js -->
</body>

</html>