<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Studio Wizard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!--css-->
    <link rel="stylesheet" type="text/css" href= {{ asset ("/LTE/dist/css/AdminLTE.css")}}>
    <!-- Bootstrap 3.3.6 -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    html {
      background-color: #d3d3d3;
    }
    .wrapper {
      background-color: #d3d3d3;
    }
  </style>

</head>


<!-- jQuery 2.2.3 -->
<script src= {{ asset ("/LTE/plugins/jQuery/jquery-2.2.3.min.js")}}></script>
<!-- Bootstrap 3.3.6 -->
<script src= {{ asset ("/LTE/bootstrap/js/bootstrap.min.js")}}></script>
<!-- SlimScroll -->
<script src= {{ asset ("/LTE/plugins/slimScroll/jquery.slimscroll.min.js")}}></script>
<!-- FastClick -->
<script src= {{ asset ("/LTE/plugins/fastclick/fastclick.js")}}></script>
<!-- AdminLTE App -->
<script src= {{ asset ("/LTE/dist/js/app.min.js")}}></script>
<!-- AdminLTE for demo purposes -->
<script src= {{ asset ("/LTE/dist/js/demo.js")}}></script>
</body>
</html>
