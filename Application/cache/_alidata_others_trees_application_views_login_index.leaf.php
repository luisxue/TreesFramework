<?php
    //带有额外的html标签的恶意的文档标题
    $maliciousTitle = '</title><script>alert(1)</script>';
    //恶意的css类名
    $className = ';`(';
    //恶意的css字体名
    $fontName = 'Verdana"</style>';
    //恶意的Javascript文本
    $javascriptText = "';</script>Hello";
    //创建转义实例对象
    $e = new Phalcon\Escaper();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title><?php echo $e->escapeHtml("apptrees") ?></title>
  <meta name="keywords" content="apptrees" />
  <meta name="description" content="apptrees" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">

  <?php echo $this->tag->stylesheetLink('ui/style/bootstrap.css'); ?><!-- Stylesheets -->
  <link rel="stylesheet" href="ui/style/font-awesome.css">
  <link href="ui/style/style.css" rel="stylesheet">
  <link href="ui/style/bootstrap-responsive.css" rel="stylesheet">
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="ui/img/favicon/favicon.png">
        		
<body>
<!-- Form area -->
<div class="admin-form">
  <div class="container">
    
    <div class="row">
      <div class="col-md-12">
        <!-- Widget starts -->
            <div class="widget worange">
              <!-- Widget head -->
              <div class="widget-head" style="font-size: 30px">
                <i class="icon-lock" style=""></i> 
                登陆
              </div>

              <div class="widget-content">
                <div class="padd">
                  <!-- Login form -->
                   <?php echo $this->tag->form(array('loginv', 'onSubmit' => 'return beforeSubmit(this);', 'class' => 'form-horizontal')); ?>
                    <!-- Account -->
                    <div class="form-group">
                      <label class="control-label col-lg-3" for="inputEmail" style="font-size: 18px">账户：</label>
                      <div class="col-lg-9">
                        <input style="font-size: 18px" type="text" class="form-control" id="inputEmail" placeholder="Account" name="Account">
                      </div>
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                      <label class="control-label col-lg-3" for="inputPassword" style="font-size: 18px">密码：</label>
                      <div class="col-lg-9" >
                        <input style="font-size: 18px" type="password" class="form-control" id="inputPassword" placeholder="Password" name="Password">
                      </div>
                    </div>
                    <!-- Remember me checkbox and sign in button -->
                    <div class="form-group">
          <div class="col-lg-9 col-lg-offset-3">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> 记住账户
                        </label>
            </div>
          </div>
          </div>
                        <div class="col-lg-9 col-lg-offset-2">
              <button type="submit" class="btn btn-danger">登 陆</button>
              <button type="reset" class="btn btn-default">重 置</button>
            </div>
                    <br />
                  </form>
          
        </div>
                </div>
              
                <div class="widget-foot" style="text-align: center;">
                  2010-2015 &copy; <a href="#">Apptrees.com</a>
                </div>
            </div>  
      </div>
    </div>
  </div> 
</div>
  
<!-- JS -->
<script src="ui/js/jquery.js"></script>
<?php echo $this->tag->javascriptInclude('ui/js/bootstrap.js'); ?>
                                                               
</body>
</html>