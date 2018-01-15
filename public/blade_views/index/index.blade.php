<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- 全局依赖 ==== 所有页面都要有 -->
  <link rel="stylesheet" type="text/css" href="../../plugin/semantic/dist/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="../../dist/css/erp.css">
  <!-- /全局依赖 -->
  <title>首页</title>
</head>

<body id="index">
  <!-- 通用布局 === 复用 -->
  <div class="index-navbar ui menu blue-background">
    <span id="sidebarBtn" class="index-navbar-item-left pull-left">
      <i class="sidebar icon"></i>
      <span>森乾科技</span>
    </span>
    <div class="index-navbar-item-show right menu">
      <a class="item">
        <i class="user icon"></i>
        <span>管理员</span>
      </a>
      <a class="item">
        <i class="help circle icon"></i>
        <span>帮助</span>
      </a>
      <a class="item">
        <i class="sound icon"></i>
        <span>客服</span>
      </a>
      <a class="item">
        <i class="power icon"></i>
        <span>退出</span>
      </a>
    </div>
    <div class="index-navbar-item-hidden margin-right ui dropdown">操作
      <i class="dropdown icon"></i>
      <div class="menu">
        <a class="item" href="#">
          <i class="user icon"></i>
          <span>管理员</span>
        </a>
        <a class="item">
          <i class="help circle icon"></i>
          <span>帮助</span>
        </a>
        <a class="item">
          <i class="sound icon"></i>
          <span>客服</span>
        </a>
        <a class="item">
          <i class="power icon"></i>
          <span>退出</span>
        </a>
      </div>
    </div>
  </div>
  <div class="index-aside">
    <div class="ui vertical index-aside-style accordion menu">
      <div class="item">
        <div class="title">
          <span>
            <i class="icon home"></i>首页</span>
        </div>
      </div>
      <div class="item">
        <div class="title">
          <i class="dropdown icon"></i>
          <span>
            <i class="icon sticky note"></i>项目立项管理</span>
        </div>
        <div class="content">
          <div class="ui secondary vertical menu transition hidden">
            <a class="item">项目列表</a>
            <a class="item">新建立项</a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="title">
          <i class="dropdown icon"></i>
          <span>
            <i class="icon suitcase"></i>验收与收款管理</span>
        </div>
        <div class="content">
          <div class="ui secondary vertical menu">
            <a class="item">验收与收款清单</a>
            <a class="item">本月请款清单</a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="title">
          <i class="dropdown icon"></i>
          <span>
            <i class="icon shopping basket"></i>采购管理</span>
        </div>
        <div class="content">
          <div class="ui secondary vertical menu transition hidden">
            <a class="item">采购清单</a>
            <a class="item">采购立项清单</a>
            <a class="item">采购付款清单</a>
            <a class="item">采购收票清单</a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="title">
          <i class="dropdown icon"></i>
          <span>
            <i class="archive icon"></i>库存管理</span>
        </div>
        <div class="content">
          <div class="ui secondary vertical menu transition hidden">
            <a class="item">库存清单</a>
            <a class="item">采购收货清单</a>
            <a class="item">退料入货清单</a>
            <a class="item">领料出货清单</a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="title">
          <i class="dropdown icon"></i>
          <span>
            <i class="icon legal"></i>施工管理</span>
        </div>
        <div class="content">
          <div class="ui secondary vertical menu transition hidden">
            <a class="item">施工费清单</a>
            <a class="item">备案合同清单</a>
            <a class="item">完工请款清单</a>
            <a class="item">施工付款清单</a>
            <a class="item">施工收票清单</a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="title">
          <i class="dropdown icon"></i>
          <span><i class="icon ordered list"></i>报销与借款管理</span>
        </div>
        <div class="content">
          <div class="ui secondary vertical menu transition hidden">
            <a class="item">报销与借款清单</a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="title">
          <i class="dropdown icon"></i>
          <span>
            <i class="icon yen"></i>费用付款管理</span>
        </div>
        <div class="content">
          <div class="ui secondary vertical menu transition hidden">
            <a class="item">付款审批清单</a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="title">
          <i class="dropdown icon"></i>
          <span>
            <i class="icon database"></i>数据维护</span>
        </div>
        <div class="content">
          <div class="ui secondary vertical menu transition hidden">
            <a class="item">人员权限</a>
            <a class="item">供应商</a>
            <a class="item">物料</a>
            <a class="item">仓库</a>
            <a class="item">银行账户</a>
            <a class="item">施工队</a>
            <a class="item">报销费用类型</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /通用布局 -->

  <!-- 主体内容 === 不可复用 -->
  <div class="index-content">
    页面具体内容
    <i class="icon home"></i>
    <i class="icon sticky note"></i>
    <i class="archive icon"></i>
  </div>
  <!-- /主体内容 === 不可复用 -->

  <!-- 全局依赖 js === 通用 -->
  <script src="../../plugin/jquery/jquery.3.2.1.min.js"></script>
  <script src="../../plugin/semantic/dist/semantic.min.js"></script>
  <script src="../../dist/js/global.js"></script>
  <!-- / 全局依赖 js === 通用 -->

  <!-- 独立 js -->
  <script src="../../dist/js/index.js"></script>
  <!-- / 独立 js -->
</body>

</html>