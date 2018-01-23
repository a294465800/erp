<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <include src="./commonCss.html"></include>

  <title>{{ title }}</title>
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
      <div class="item" id="navIndex">
        <a class="title" href="../index/index.html">
          <span>
            <i class="icon home"></i>首页</span>
        </a>
      </div>
      <div class="item" id="navProject">
        <div class="title">
          <i class="dropdown icon"></i>
          <span>
            <i class="icon sticky note"></i>项目立项管理</span>
        </div>
        <div class="content">
          <div class="ui secondary vertical menu">
            <a class="item detail" href="../project/detail.html">项目明细清单</a>
            <a class="item list" href="../project/list.html">已立项清单</a>
          </div>
        </div>
      </div>
      <div class="item" id="navBudget">
        <div class="title">
          <i class="dropdown icon"></i>
          <span>
            <i class="icon hashtag"></i>预算管理</span>
        </div>
        <div class="content">
          <div class="ui secondary vertical menu">
            <a class="item list">预算清单</a>
          </div>
        </div>
      </div>
      <div class="item" id="navCheck">
        <div class="title">
          <i class="dropdown icon"></i>
          <span>
            <i class="icon suitcase"></i>验收与收款管理</span>
        </div>
        <div class="content">
          <div class="ui secondary vertical menu">
            <a class="item check">验收与收款清单</a>
            <a class="item month">本月请款清单</a>
          </div>
        </div>
      </div>
      <div class="item" id="navBuy">
        <div class="title">
          <i class="dropdown icon"></i>
          <span>
            <i class="icon shopping basket"></i>采购管理</span>
        </div>
        <div class="content">
          <div class="ui secondary vertical menu">
            <a class="item list">采购清单</a>
            <a class="item project-list">采购立项清单</a>
            <a class="item pay-list">采购付款清单</a>
            <a class="item charge-list">采购收票清单</a>
          </div>
        </div>
      </div>
      <div class="item" id="navStock">
        <div class="title">
          <i class="dropdown icon"></i>
          <span>
            <i class="archive icon"></i>库存管理</span>
        </div>
        <div class="content">
          <div class="ui secondary vertical menu">
            <a class="item list">库存清单</a>
            <a class="item buy-list">采购收货清单</a>
            <a class="item return-list">退料入货清单</a>
            <a class="item get-list">领料出货清单</a>
          </div>
        </div>
      </div>
      <div class="item" id="navBuild">
        <div class="title">
          <i class="dropdown icon"></i>
          <span>
            <i class="icon legal"></i>施工管理</span>
        </div>
        <div class="content">
          <div class="ui secondary vertical menu">
            <a class="item list">施工费清单</a>
            <a class="item deal-list">备案合同清单</a>
            <a class="item finish-list">完工请款清单</a>
            <a class="item pay-list">施工付款清单</a>
            <a class="item get-list">施工收票清单</a>
          </div>
        </div>
      </div>
      <div class="item" id="navLoan">
        <div class="title">
          <i class="dropdown icon"></i>
          <span>
            <i class="icon ordered list"></i>报销与借款管理</span>
        </div>
        <div class="content">
          <div class="ui secondary vertical menu">
            <a class="item list">报销与借款清单</a>
          </div>
        </div>
      </div>
      <div class="item" id="navPay">
        <div class="title">
          <i class="dropdown icon"></i>
          <span>
            <i class="icon yen"></i>费用付款管理</span>
        </div>
        <div class="content">
          <div class="ui secondary vertical menu">
            <a class="item list">付款审批清单</a>
          </div>
        </div>
      </div>
      <div class="item" id="navData">
        <div class="title">
          <i class="dropdown icon"></i>
          <span>
            <i class="icon database"></i>数据维护</span>
        </div>
        <div class="content">
          <div class="ui secondary vertical menu">
            <a class="item auth">人员权限</a>
            <a class="item supplier">供应商</a>
            <a class="item materiel">物料</a>
            <a class="item warehouse">仓库</a>
            <a class="item bank">银行账户</a>
            <a class="item team">施工队</a>
            <a class="item payment">报销费用类型</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /通用布局 -->

  <!-- 主体内容 === 不可复用 -->
  <div class="index-content">