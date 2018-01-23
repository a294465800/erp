<include src="../template/header.html">
  @title = 项目明细清单
</include>

<div class="ui breadcrumb">
  <a class="section">项目立项管理</a>
  <div class="divider"> / </div>
  <div class="active section">项目明细清单</div>
</div>

<!-- 操作区域 -->
<div class="content-operation flex-row flex-between">
  <div>
    <a class="ui green button" href="#">
      <i class="icon download"></i>
      <span>Excel 导出</span>
    </a>
  </div>
  <div class="ui left action right input fluid flex-fluid">
    <div class="ui button white dropdown ">
      <input name="seartch-type" type="hidden">
      <div class="text">请选中搜索内容</div>
      <i class="dropdown icon"></i>
      <div class="menu">
        <div class="item" data-value="1">项目号</div>
        <div class="item" data-value="2">项目内容</div>
      </div>
    </div>
    <input type="text" placeholder="搜索内容" value="">
    <button class="ui button">搜索</button>
  </div>
</div>
<!-- / 操作区域 -->


<!-- 表格循环 -->
<div class="content-wrap">
  <table class="ui celled structured table">
    <thead>
      <tr>
        <th rowspan="2">类型</th>
        <th rowspan="2">项目</th>
        <th rowspan="2">内容</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td rowspan="4">基本</td>
        <td>项目号</td>
        <td>1234232</td>
      </tr>
      <tr>
        <td>项目内容</td>
        <td class="detail__content">这是项目内容这是项目内容这是项目内容这是项目内容</td>
      </tr>
      <tr>
        <td>项目经理</td>
        <td>程先生</td>
      </tr>
      <tr>
        <td>合同金额</td>
        <td>12,423,222 ￥</td>
      </tr>
      <tr>
        <td rowspan="2">
          <p>项目实际金额</p>
          <p>22,423,222 ￥</p>
        </td>
        <td>主合同金额</td>
        <td>12,423,222 ￥</td>
      </tr>
      <tr>
        <td>分包合同金额</td>
        <td>12,423,222 ￥</td>
      </tr>
      <tr>
        <td rowspan="6">金额相关</td>
        <td>验收金额</td>
        <td>12,423,222 ￥</td>
      </tr>
      <tr>
        <td>已开票请款</td>
        <td>12,423,222 ￥</td>
      </tr>
      <tr>
        <td>主合同收款</td>
        <td>12,423,222 ￥</td>
      </tr>
      <tr>
        <td>分包合同收款</td>
        <td>12,423,222 ￥</td>
      </tr>
      <tr>
        <td>应收账款</td>
        <td>12,423,222 ￥</td>
      </tr>
      <tr>
        <td>项目剩余未收款</td>
        <td>12,423,222 ￥</td>
      </tr>
      <tr>
        <td rowspan="5">
          <p>已发生成本</p>
          <p>12,423,222 ￥</p>
        </td>
        <td>领料成本</td>
        <td>12,423,222 ￥</td>
      </tr>
      <tr>
        <td>施工成本</td>
        <td>12,423,222 ￥</td>
      </tr>
      <tr>
        <td>报销项目成本</td>
        <td>12,423,222 ￥</td>
      </tr>
      <tr>
        <td>费用付款其他成本</td>
        <td>12,423,222 ￥</td>
      </tr>
      <tr>
        <td>退料成本</td>
        <td>12,423,222 ￥</td>
      </tr>
    </tbody>
  </table>
</div>
<!-- / 表格循环 -->

<include src="../template/footer.html">
  @js = ../../src/js/project_detail.js
</include>