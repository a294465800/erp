<include src="../template/header.html">
  @title = 新建立项
</include>

<div class="ui breadcrumb">
  <a class="section">项目立项管理</a>
  <div class="divider"> / </div>
  <a class="section" href="../project/detail.html">已立项清单</a>
  <div class="divider"> / </div>
  <div class="active section">新建立项</div>
</div>

<div class="margin-top-20">
  <form class="ui form" action="">
    <!-- 基本信息表单 -->
    <h4 class="ui dividing header blue">基本信息</h4>
    <div class="form-wrap">
      <div class="inline fields">
        <div class="eight wide field fields">
          <label class="five wide field">立项日期</label>
          <input name="created_time" id="creatDate" type="text" placeholder="请选择立项日期" required>
        </div>
      </div>
      <div class="inline fields">
        <div class="eight wide field fields">
          <label class="five wide field">项目名</label>
          <input name="project_name" type="text" placeholder="请输入项目名">
        </div>
      </div>
      <div class="inline fields">
        <div class="eight wide field fields">
          <label class="five wide field">甲方</label>
          <input name="company_one" type="text" placeholder="请输入甲方">
        </div>
      </div>
      <div class="inline fields">
        <div class="eight wide field fields">
          <label class="five wide field">项目合同金额</label>
          <div class="ui right labeled input">
            <input name="total_price" type="number" placeholder="请输入项目合同金额">
            <div class="ui basic label">￥</div>
          </div>
        </div>
        <!-- <div class="ui medium tag labels">
          <span class="ui label orange">129,333,212.52 ￥</span>
        </div> -->
      </div>
      <div class="inline fields">
        <div class="eight wide field fields">
          <label class="five wide field">预计完工日期</label>
          <input name="finish_time" id="finishDate" type="text" placeholder="请选择预计完工日期">
        </div>
      </div>
      <div class="inline fields">
        <div class="eight wide field fields">
          <label class="five wide field">项目经理</label>
          <input name="project_charge" type="text" placeholder="请输入项目经理">
        </div>
      </div>
    </div>
    <!-- /基本信息表单 -->

    <!-- 中标情况 -->
    <h4 class="ui dividing header violet">合同中标情况</h4>
    <div class="form-wrap" id="winBid">
      <div class="win-item">
        <div class="win-remove-btn ui button red">
          <i class="icon remove"></i>
          <span>删除该项</span>
        </div>
        <div class="inline fields">
          <div class="eight wide field fields">
            <label class="five wide field">单位名称</label>
            <input name="winBid_name" type="text" placeholder="请输入单位名称" class="win-company">
          </div>
        </div>
        <div class="inline fields">
          <div class="eight wide field fields">
            <label class="five wide field">金额</label>
            <div class="ui right labeled input">
              <input name="total_price" type="number" placeholder="请输入金额">
              <div class="ui basic label">￥</div>
            </div>
          </div>
          <!-- <div class="ui medium tag labels">
            <span class="ui label orange">129,333,212.52 ￥</span>
          </div> -->
        </div>
        <div class="inline fields">
          <div class="eight wide field fields">
            <label class="five wide field">备注</label>
            <textarea name="project_remark" rows="2" placeholder="请输入备注"></textarea>
          </div>
        </div>
        <h4 class="ui horizontal divider header">
          <i class="icon travel"></i>
          <span class="ho_span">单位</span>
        </h4>
      </div>
      <div class="ui center aligned basic segment">
        <div class="ui blue labeled icon button" id="addNewBid">
          <span>新增中标单位</span>
          <i class="add icon"></i>
        </div>
      </div>
    </div>
    <!-- /中标情况 -->

    <!-- 分包情况 -->
    <h4 class="ui dividing header blue">分包情况</h4>
    <div class="form-wrap" id="divideBid">
      <div class="win-item">
        <div class="win-remove-btn ui button red">
          <i class="icon remove"></i>
          <span>删除该项</span>
        </div>
        <div class="inline fields">
          <div class="eight wide field fields">
            <label class="five wide field">发包单位</label>
            <input name="divide_name" type="text" placeholder="请输入发包单位" class="win-company">
          </div>
        </div>
        <div class="inline fields">
          <div class="eight wide field fields">
            <label class="five wide field">分包金额</label>
            <div class="ui right labeled input">
              <input name="divide_price" type="number" placeholder="请输入分包金额">
              <div class="ui basic label">￥</div>
            </div>
          </div>
          <!-- <div class="ui medium tag labels">
            <span class="ui label orange">129,333,212.52 ￥</span>
          </div> -->
        </div>
        <div class="inline fields">
          <div class="eight wide field fields">
            <label class="five wide field">备注</label>
            <textarea name="divide_remark" rows="2" placeholder="请输入备注"></textarea>
          </div>
        </div>
        <h4 class="ui horizontal divider header">
          <i class="icon travel"></i>
          <span class="ho_span">单位</span>
        </h4>
      </div>
      <div class="ui center aligned basic segment">
        <div class="ui blue labeled icon button" id="addNewDivideBid">
          <span>新增分包单位</span>
          <i class="add icon"></i>
        </div>
      </div>
    </div>
    <!-- / 分包情况 -->

    <!-- 项目实际情况 -->
    <h4 class="ui dividing header violet">项目实际情况</h4>
    <div class="form-wrap">
      <div id="detailItem">

        <input type="number" hidden id="projectMainFinalMoney">
        <input type="number" hidden id="projectDivideFinalMoney">

        <!-- 主合同 -->
        <div class="inline fields">
          <div class="eight wide field fields">
            <label class="five wide field">主合同金额</label>
            <div class="ui right labeled input">
              <input name="divide_price" type="number" placeholder="请输入主合同金额" id="projectMainMoney">
              <div class="ui basic label">￥</div>
            </div>
          </div>
          <!-- <div class="ui medium tag labels">
            <span class="ui label orange">129,333,212.52 ￥</span>
          </div> -->
        </div>
        <div class="field detail-item">
          <div class="four fields">
            <div class="field">
              <label>内容名称</label>
              <input class="project_item_name" type="text" name="project_item" placeholder="请输入内容名称">
            </div>
            <div class="field">
              <label>税率</label>
              <div class="ui right labeled input">
                <input type="number" name="project_item_tax" placeholder="税率">
                <div class="ui basic label">%</div>
              </div>
            </div>
            <div class="field">
              <label>金额</label>
              <div class="ui right labeled input">
                <input type="number" name="project_item_money" placeholder="金额">
                <div class="ui basic label">￥</div>
              </div>
            </div>
            <div class="field">
              <label class="invisible">按钮</label>
              <div class=" ui button red project-item-del">
                <i class="icon remove"></i>
                <span>删除该项</span>
              </div>
            </div>
          </div>
          <div class="field">
            <label>备注</label>
            <textarea name="divide_remark" rows="2" placeholder="请输入备注"></textarea>
          </div>
        </div>
        <div class="ui center aligned basic segment">
          <div class="ui blue labeled icon button" id="addBidNewItem">
            <span>新增内容</span>
            <i class="add icon"></i>
          </div>
        </div>
        <div class="inline fields">
          <div class="eight wide field fields">
            <label class="five wide field">后期追加或减少金额</label>
            <div class="ui right labeled input">
              <input name="project_extra_money" type="number" placeholder="请输入后期追加或减少金额" id="projectMainExtraMoney">
              <div class="ui basic label">￥</div>
            </div>
          </div>
          <!-- <div class="ui medium tag labels">
            <span class="ui label orange">129,333,212.52 ￥</span>
          </div> -->
        </div>
        <div class="ui center aligned basic segment">
          <div class="ui horizontal statistic orange">
            <div class="label">主合同金额： </div>
            <div class="value" id="projectMainFinalMoneyShow">0 ￥</div>
          </div>
        </div>
        <h4 class="ui horizontal divider header">
          <i class="icon file text"></i>
          <span class="ho_span">主合同</span>
        </h4>
        <!-- / 主合同 -->

        <div class="margin-top-50"></div>

        <!-- 分包合同 -->
        <div class="inline fields">
          <div class="eight wide field fields">
            <label class="five wide field">分包合同金额</label>
            <div class="ui right labeled input">
              <input name="divide_price" type="number" placeholder="请输入分包合同金额" id="projectDivideMoney">
              <div class="ui basic label">￥</div>
            </div>
          </div>
          <!-- <div class="ui medium tag labels">
            <span class="ui label orange">129,333,212.52 ￥</span>
          </div> -->
        </div>
        <div class="field detail-item">
          <div class="four fields">
            <div class="field">
              <label>内容名称</label>
              <input class="project_sub_item_name" type="text" name="project_item" placeholder="请输入内容名称">
            </div>
            <div class="field">
              <label>税率</label>
              <div class="ui right labeled input">
                <input type="number" name="project_sub_item_tax" placeholder="税率">
                <div class="ui basic label">%</div>
              </div>
            </div>
            <div class="field">
              <label>金额</label>
              <div class="ui right labeled input">
                <input type="number" name="project_sub_item_money" placeholder="金额">
                <div class="ui basic label">￥</div>
              </div>
            </div>
            <div class="field">
              <label class="invisible">按钮</label>
              <div class=" ui button red project-item-del">
                <i class="icon remove"></i>
                <span>删除该项</span>
              </div>
            </div>
          </div>
          <div class="field">
            <label>备注</label>
            <textarea name="divide_remark" rows="2" placeholder="请输入备注"></textarea>
          </div>
        </div>
        <div class="ui center aligned basic segment">
          <div class="ui blue labeled icon button" id="addBidDivideNewItem">
            <span>新增内容</span>
            <i class="add icon"></i>
          </div>
        </div>
        <div class="inline fields">
          <div class="eight wide field fields">
            <label class="five wide field">后期追加或减少金额</label>
            <div class="ui right labeled input">
              <input name="project_extra_money" type="number" placeholder="请输入后期追加或减少金额" id="projectDivideExtraMoney">
              <div class="ui basic label">￥</div>
            </div>
          </div>
          <!-- <div class="ui medium tag labels">
            <span class="ui label orange">129,333,212.52 ￥</span>
          </div> -->
        </div>
        <div class="ui center aligned basic segment">
          <div class="ui horizontal statistic orange">
            <div class="label">分包合同金额： </div>
            <div class="value" id="projectDivideFinalMoneyShow">0 ￥</div>
          </div>
        </div>
        <h4 class="ui horizontal divider header">
          <i class="icon file text"></i>
          <span class="ho_span">分包合同</span>
        </h4>
        <!-- /分包合同 -->
        <div class="ui center aligned basic segment">
          <div class="ui horizontal statistic orange">
            <div class="label">合计总合同金额： </div>
            <div class="value" id="projectTotalFinalMoneyShow">0 ￥</div>
          </div>
        </div>

      </div>
    </div>
    <!-- / 项目实际情况 -->

    <!-- 履约保证金情况 -->
    <h4 class="ui dividing header blue">履约保证金情况</h4>
    <div class="form-wrap">

    </div>
    <!-- / 履约保证金情况 -->
  </form>
</div>

<include src="../template/footer.html">
  @js = ../../src/js/project_create.js
</include>