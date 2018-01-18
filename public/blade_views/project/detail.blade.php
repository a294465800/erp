<include src="../template/header.html">
  @title = 已立项清单
</include>

<div class="ui breadcrumb">
  <a class="section">项目立项管理</a>
  <div class="divider"> / </div>
  <div class="active section">已立项清单</div>
</div>

<!-- 操作区域 -->
<div class="content-operation flex-row flex-between">
  <div>
    <a class="ui primary button" href="../project/create.html">
      <i class="icon plus"></i>
      <span>新建立项</span>
    </a>
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
        <div class="item" data-value="3">甲方</div>
      </div>
    </div>
    <input type="text" placeholder="搜索内容" value="">
    <button class="ui button">搜索</button>
  </div>
</div>
<!-- / 操作区域 -->

<div class="content-wrap">

  <table class="ui striped table" id="projectDetailTable">
    <thead>
      <tr>
        <th>项目号</th>
        <th>立项日期</th>
        <th>项目内容</th>
        <th>项目经理</th>
        <th>合同金额</th>
        <th>实际金额</th>
        <th>甲方</th>
        <th>主合同金额</th>
        <th>发包单位</th>
        <th>分包合同金额</th>
        <th>合同约定完工日期</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>154376453254</td>
        <td>2017-12-01</td>
        <td>这是一大段内容</td>
        <td>张喜</td>
        <td>20万</td>
        <td>30万</td>
        <td>xx公司</td>
        <td>20万</td>
        <td>xx单位</td>
        <td>10万</td>
        <td>2018-02-14</td>
      </tr>
      <tr>
        <td>154236453254</td>
        <td>2017-12-01</td>
        <td>这是一大段内容</td>
        <td>张喜</td>
        <td>20万</td>
        <td>30万</td>
        <td>xx公司</td>
        <td>20万</td>
        <td>xx单位</td>
        <td>10万</td>
        <td>2018-02-14</td>
      </tr>
      <tr>
        <td>154376453254</td>
        <td>2017-12-01</td>
        <td>这是一大段内容</td>
        <td>张喜</td>
        <td>20万</td>
        <td>30万</td>
        <td>xx公司</td>
        <td>20万</td>
        <td>xx单位</td>
        <td>10万</td>
        <td>2018-02-14</td>
      </tr>
      <tr>
        <td>154376453254</td>
        <td>2017-12-01</td>
        <td>这是一大段内容</td>
        <td>张喜</td>
        <td>20万</td>
        <td>30万</td>
        <td>xx公司</td>
        <td>20万</td>
        <td>xx单位</td>
        <td>10万</td>
        <td>2018-02-14</td>
      </tr>
    </tbody>
  </table>
</div>

<include src="../template/footer.html">
  @js = ../../src/js/project_detail.js
</include>