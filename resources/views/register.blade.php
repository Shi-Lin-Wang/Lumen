<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign up</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <!--JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
  </head>
  <body>
    <div class="container">
      <br/>
      <form method="POST" action="/signup">
        <div>
          <input type="button" class="btn btn-primary" value="上一頁" onclick=" window.location = 'index.html'" style="float:right;">
        </div>
        <br/>
        <br/>
        <table class="table table-hover">
          <tbody>
            <tr>
              <td colspan="3" align="center"><h3>Sign up</h3></td>
            </tr>
            <tr>
              <td><label for="name">帳號：</label></td>
              <td colspan="2"><input type="text" class="form-control" name="account" placeholder="Enter Account"  style="width:350px;" required  autofocus></td>
            </tr>
            <tr>
              <td><label for="name">密碼：</label></td>
              <td colspan="2"> <input type="password" class="form-control" id="password" name="password"placeholder="Enter Password" style="width:350px;" required></td>
        </div></td>

            <tr>
              <td><label for="name">密碼確認：</label></td>
              <td><input type="password" class="form-control" id="signup-repeatPassword" name="repeatPassword" placeholder="Repeat Password" onkeyup="checkRepeatPassword()" style="width:350px;" required></td>
              <td style="width:90px;"><span id="checkRepeatPassword"></span></td>
            </tr>
            <tr>
              <td><label for="name">姓名：</label></td>
              <td colspan="2"><input type="text" class="form-control" name="myname" required="required" style="width:350px;"></td>
            </tr>

            <tr>
              <td><label for="email">Email：</label></td>
              <td colspan="2"><input type="email" class="form-control" name="email" required="required" style="width:350px; id='email' "></td>
            </tr>
            <tr>
              <td><label for="tel">行動電話：</label></td>
              <td colspan="2"><input type="text" class="form-control" name="phone" required="required" style="width:350px; id='tel'"></td>
            </tr>

            <tr>
              <td colspan="3" align="center">
                <input type="button" class="btn btn-warning" value="重置" onclick="location.reload()">
                <button style="cursor:pointer" type="submit" class="btn btn-primary">送出</button>
              </td>
            </tr>
          </tbody>
        </table>
        <hr>
      </form>
    </div>
  </body>
</html>
