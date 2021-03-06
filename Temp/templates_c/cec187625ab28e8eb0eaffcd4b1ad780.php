<?php /*a:3:{s:59:"/website/talk/App/HttpController/Views/Admin/admin/add.html";i:1530869960;s:63:"/website/talk/App/HttpController/Views/Admin/public/header.html";i:1531102388;s:63:"/website/talk/App/HttpController/Views/Admin/public/footer.html";i:1531101896;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- login -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- endlogin -->
    <meta name="renderer" content="webkit">

    <title> <?php echo htmlentities($title); ?></title>

    <meta name="keywords" content="">
    <meta name="description" content="">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/admin/css/animate.css" rel="stylesheet">
    <link href="/admin/css/style.css?v=4.1.0" rel="stylesheet">
    
    <script src="/admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="/admin/js/bootstrap.min.js?v=3.3.6"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery.form/4.2.2/jquery.form.min.js"></script>
    <script>
        var SCOPE = {
            'add_url':'add',
            'edit_url':'edit',
            'del_url':'del',
            'image_url':'Api/Tool/upload',
            'status_url':'status',
            'login_url':'/Login/index',
            'index_url':'/Index/index"',
            'register_url':'/Register/index',
        };
    </script>



</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
             <div class="col-sm-6" style="width: 100%;">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>添加管理员</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="form_basic.html#">选项1</a>
                                </li>
                                <li><a href="form_basic.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal m-t" action="#" id="x-form">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">用户名：</label>
                                <div class="col-sm-8">
                                    <input id="username" name="username" class="form-control" type="text" aria-required="true" aria-invalid="true" class="error">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">昵称:</label>
                                <div class="col-sm-8">
                                    <input id="nickname" name="nickname" class="form-control" type="text" aria-required="true" aria-invalid="true" class="error">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">密码：</label>
                                <div class="col-sm-8">
                                    <input id="password" name="password" class="form-control" type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">确认密码：</label>
                                <div class="col-sm-8">
                                    <input id="repassword" name="repassword" class="form-control" type="password">
                                    <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 请再次输入您的密码</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">E-mail：</label>
                                <div class="col-sm-8">
                                    <input id="email" name="email" class="form-control" type="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="checkbox" id="agree" name="agree"> 我已经认真阅读并同意《H+使用协议》
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-3">
                                    <button  onclick="addData();return false;">提交</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- 全局js -->
    
    <!-- 全局js -->
    <script src="/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/admin/js/plugins/layer/layer.min.js"></script>
    <!-- <script type="text/javascript" src="/js/jquery.min.js"></script> -->
    <!-- 自定义js -->
    <script src="/admin/js/hAdmin.js?v=4.1.0"></script>
    <script type="text/javascript" src="/admin/js/index.js"></script>
    <script type="text/javascript" src="/admin/js/common.js"></script>
    <!--&lt;!&ndash; 第三方插件 &ndash;&gt;-->
    <!--<script src="/js/plugins/pace/pace.min.js"></script>-->
    <!--&lt;!&ndash; Flot &ndash;&gt;-->
    <script src="/admin/js/plugins/flot/jquery.flot.js"></script>
    <script src="/admin/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/admin/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/admin/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- 自定义js -->
    <script src="__STATIC__/js/content.js?v=1.0.0"></script>

    <!-- jQuery Validation plugin javascript-->
    <script src="__STATIC__/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="__STATIC__/js/plugins/validate/messages_zh.min.js"></script>

    <script src="__STATIC__/js/demo/form-validate-demo.js"></script>

    
    

</body>

</html>
