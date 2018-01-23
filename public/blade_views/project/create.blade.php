<include src="../template/header.html">
  @title = 新建立项
</include>

<div class="ui breadcrumb">
  <a class="section">项目立项管理</a>
  <div class="divider"> / </div>
  <a class="section" href="../project/list.html">已立项清单</a>
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
          <input name="signDate" id="createDate" type="text" placeholder="请选择立项日期" required>
        </div>
        <div class="eight wide field fields">
          <label class="five wide field">项目名</label>
          <input name="name" type="text" placeholder="请输入项目名" required>
        </div>
      </div>
      <div class="inline fields">
        <div class="eight wide field fields">
          <label class="five wide field">甲方</label>
          <input name="partyA" type="text" placeholder="请输入甲方" required>
        </div>
        <div class="eight wide field fields">
          <label class="five wide field">项目合同金额</label>
          <div class="ui right labeled input">
            <input name="amount" type="number" placeholder="请输入项目合同金额" required>
            <div class="ui basic label">￥</div>
          </div>
        </div>
      </div>
      <div class="inline fields">
        <div class="eight wide field fields">
          <label class="five wide field">预计完工日期</label>
          <input name="completeDate" id="completeDate" type="text" placeholder="请选择预计完工日期" required>
        </div>
        <div class="eight wide field fields">
          <label class="five wide field">项目经理</label>
          <input name="manager" type="text" placeholder="请输入项目经理" required>
        </div>
      </div>
    </div>
    <!-- /基本信息表单 -->

    <!-- 中标情况 -->
    <h4 class="ui dividing header violet">合同中标情况</h4>
    <div class="form-wrap" id="winBid">
      <div class="win-item data-dom" data-id=1 data-index=0 data-name="masterCompany[index]">
        <div class="inline fields">
          <div class="eight wide field fields">
            <label class="five wide field">单位名称</label>
            <input name="masterCompany[index].name" type="text" placeholder="请输入单位名称" class="win-company" required>
          </div>
          <div class="eight wide field fields">
            <label class="five wide field">金额</label>
            <div class="ui right labeled input">
              <input name="masterCompany[index].amount" type="number" placeholder="请输入金额" required>
              <div class="ui basic label">￥</div>
            </div>
          </div>
        </div>
        <div class="inline fields">
          <div class="eight wide field fields">
            <label class="five wide field">备注</label>
            <textarea name="masterCompany[index].remark" rows="2" placeholder="请输入备注"></textarea>
          </div>
          <div class="eight wide field fields relative">
            <div class="win-remove-btn ui button red">
              <i class="icon remove"></i>
              <span>删除该项</span>
            </div>
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
      <div class="win-item data-dom" data-id=1 data-index=0 data-name="subCompany[index]">
        <div class="inline fields">
          <div class="eight wide field fields">
            <label class="five wide field">发包单位</label>
            <input name="subCompany[index].name" type="text" placeholder="请输入发包单位" class="win-company" required>
          </div>
          <div class="eight wide field fields">
            <label class="five wide field">分包金额</label>
            <div class="ui right labeled input">
              <input name="subCompany[index].amount" type="number" placeholder="请输入分包金额" required>
              <div class="ui basic label">￥</div>
            </div>
          </div>
        </div>
        <div class="inline fields">
          <div class="eight wide field fields">
            <label class="five wide field">备注</label>
            <textarea name="subCompany[index].remark" rows="2" placeholder="请输入备注"></textarea>
          </div>
          <div class="eight wide field fields relative">
            <div class="win-remove-btn ui button red">
              <i class="icon remove"></i>
              <span>删除该项</span>
            </div>
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
        <!-- 主合同 -->
        <div class="contract-item">
          <div class="inline fields data-dom" data-id=1 data-index=0 data-name="masterContract[0].details[0]">
            <div class="eight wide field fields">
              <label class="five wide field">主合同金额</label>
              <div class="ui right labeled input">
                <input name="masterContract[0].amount" type="number" placeholder="请输入主合同金额" required>
                <div class="ui basic label">￥</div>
              </div>
            </div>
          </div>
          <div class="field detail-item data-dom" data-id=1 data-index=0 data-name="masterContract[0].details[0]">
            <div class="three fields">
              <div class="field">
                <label>内容名称</label>
                <div class="ui fluid search selection dropdown">
                  <input type="hidden" class="real-search" name="masterContract[0].details[0].name" required>
                  <i class="dropdown icon"></i>
                  <div class="default text">请选择内容</div>
                  <div class="menu" id="contentSelects">
                    <div class="item" data-value="内容一">内容一</div>
                    <div class="item" data-value="内容二">内容二</div>
                    <div class="item" data-value="内容三">内容三</div>
                  </div>
                </div>
              </div>
              <div class="field">
                <label>税率</label>
                <div class="ui fluid search selection dropdown">
                  <input type="hidden" class="real-search" name="masterContract[0].details[0].tax" required>
                  <i class="dropdown icon"></i>
                  <div class="default text">请选择税率</div>
                  <div class="menu" id="taxSelects">
                    <div class="item" data-value="5%">5%</div>
                    <div class="item" data-value="9%">9%</div>
                    <div class="item" data-value="17%">17%</div>
                  </div>
                </div>
              </div>
              <div class="field">
                <label>金额</label>
                <div class="ui right labeled input">
                  <input type="number" name="masterContract[0].details[0].amount" placeholder="金额" required>
                  <div class="ui basic label">￥</div>
                </div>
              </div>
            </div>
            <div class="two fields">
              <div class="field">
                <label>备注</label>
                <textarea name="masterContract[0].details[0].remark" rows="2" placeholder="请输入备注"></textarea>
              </div>
              <div class="field relative">
                <label class="invisible">按钮</label>
                <div class=" ui button red project-item-del">
                  <i class="icon remove"></i>
                  <span>删除该项</span>
                </div>
              </div>
            </div>
          </div>
          <div class="ui center aligned basic segment">
            <div class="ui blue labeled icon button addBidNewItem">
              <span>新增内容</span>
              <i class="add icon"></i>
            </div>
          </div>
        </div>
        <div class="ui center aligned basic segment">
          <div class="ui blue labeled icon button" id="addNewMasterAppend">
            <span>新增后期追加</span>
            <i class="add icon"></i>
          </div>
        </div>
        <div class="inline-center">
          <div class="ui button teal checkContract" data-name="masterContract">
            <i class="icon yen"></i>
            <span>核对主合同金额</span>
          </div>
        </div>
        <div class="check-result">
        </div>
        <h4 class="ui horizontal divider header">
          <i class="icon file text"></i>
          <span class="ho_span">主合同</span>
        </h4>
        <!-- / 主合同 -->

        <div class="margin-top-50"></div>

        <!-- 分包合同 -->
        <div class="contract-item">
          <div class="inline fields">
            <div class="eight wide field fields">
              <label class="five wide field">分包合同金额</label>
              <div class="ui right labeled input">
                <input name="subContract[0].amount" type="number" placeholder="请输入分包合同金额" required>
                <div class="ui basic label">￥</div>
              </div>
            </div>
          </div>
          <div class="field detail-item data-dom" data-id=1 data-index=0 data-name="subContract[0].details[0]">
            <div class="three fields">
              <div class="field">
                <label>内容名称</label>
                <div class="ui fluid search selection dropdown">
                  <input type="hidden" class="real-search" name="subContract[0].details[0].name" required>
                  <i class="dropdown icon"></i>
                  <div class="default text">请选择内容</div>
                  <div class="menu">
                    <div class="item" data-value="内容一">内容一</div>
                    <div class="item" data-value="内容二">内容二</div>
                    <div class="item" data-value="内容三">内容三</div>
                  </div>
                </div>
              </div>
              <div class="field">
                <label>税率</label>
                <div class="ui fluid search selection dropdown">
                  <input type="hidden" class="real-search" name="subContract[0].details[0].tax" required>
                  <i class="dropdown icon"></i>
                  <div class="default text">请选择税率</div>
                  <div class="menu">
                    <div class="item" data-value="5%">5%</div>
                    <div class="item" data-value="9%">9%</div>
                    <div class="item" data-value="17%">17%</div>
                  </div>
                </div>
              </div>
              <div class="field">
                <label>金额</label>
                <div class="ui right labeled input">
                  <input type="number" name="subContract[0].details[0].amount" placeholder="金额" required>
                  <div class="ui basic label">￥</div>
                </div>
              </div>
            </div>
            <div class="two fields">
              <div class="field">
                <label>备注</label>
                <textarea name="subContract[0].details[0].remark" rows="2" placeholder="请输入备注"></textarea>
              </div>
              <div class="field relative">
                <label class="invisible">按钮</label>
                <div class=" ui button red project-item-del">
                  <i class="icon remove"></i>
                  <span>删除该项</span>
                </div>
              </div>
            </div>
          </div>
          <div class="ui center aligned basic segment">
            <div class="ui blue labeled icon button addBidDivideNewItem">
              <span>新增内容</span>
              <i class="add icon"></i>
            </div>
          </div>
        </div>
        <div class="ui center aligned basic segment">
          <div class="ui blue labeled icon button" id="addNewSubAppend">
            <span>新增后期追加</span>
            <i class="add icon"></i>
          </div>
        </div>
        <div class="inline-center">
          <div class="ui button teal checkContract" data-name="subContract">
            <i class="icon yen"></i>
            <span>核对分包合同金额</span>
          </div>
        </div>
        <div class="check-result">
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
    <div id="marginsItem">
      <div class="field data-dom" data-id=1 data-index=0 data-name="margins[index]">
        <div class="three fields">
          <div class="field">
            <label>支付日期</label>
            <input type="text" id="margins0" name="margins[index].date" placeholder="请选择日期" required>
          </div>
          <div class="field">
            <label>支付金额</label>
            <div class="ui right labeled input">
              <input type="number" name="margins[index].amount" placeholder="金额" required>
              <div class="ui basic label">￥</div>
            </div>
          </div>
          <div class="field">
            <label>收款人</label>
            <input type="text" name="margins[index].payee" placeholder="请输入收款人" required>
          </div>
        </div>
        <div class="two fields">
          <div class="field">
            <label>回收条件</label>
            <textarea name="margins[index].recycle" rows="2" placeholder="请输入回收条件"></textarea>
          </div>
          <div class="field relative">
            <label class="invisible">按钮</label>
            <div class=" ui button red project-item-del">
              <i class="icon remove"></i>
              <span>删除该项</span>
            </div>
          </div>
        </div>
        <h4 class="ui horizontal divider header ">
          <i class="icon remove bookmark"></i>
        </h4>
      </div>
      <div class="ui center aligned basic segment">
        <div class="ui blue labeled icon button" id="addMarginItem">
          <span>新增保证金情况</span>
          <i class="add icon"></i>
        </div>
      </div>
    </div>
    <!-- / 履约保证金情况 -->

    <!-- 收款条件 -->
    <h4 class="ui dividing header violet">收款条件</h4>
    <div id="paymentConditionItem">
      <div class="field data-dom" data-id=1 data-index=0 data-name="paymentConditions[index]">
        <div class="two fields">
          <div class="field">
            <label>收款比例</label>
            <div class="ui right labeled input">
              <input type="number" name="paymentConditions[index].rate" placeholder="请输入收款比例" required>
              <div class="ui basic label">%</div>
            </div>
          </div>
          <div class="field">
            <label>预计金额</label>
            <div class="ui right labeled input">
              <input type="number" name="paymentConditions[index].expected" placeholder="请输入预计金额" required>
              <div class="ui basic label">￥</div>
            </div>
          </div>
        </div>
        <div class="two fields">
          <div class="field">
            <label>收款条件</label>
            <textarea name="paymentConditions[index].condition" rows="2" placeholder="请输入收款条件"></textarea>
          </div>
          <div class="field relative">
            <label class="invisible">按钮</label>
            <div class=" ui button red project-item-del">
              <i class="icon remove"></i>
              <span>删除该项</span>
            </div>
          </div>
        </div>
        <h4 class="ui horizontal divider header ">
          <i class="icon remove bookmark"></i>
        </h4>
      </div>
      <div class="ui center aligned basic segment">
        <div class="ui blue labeled icon button" id="addConditionItem">
          <span>新增收款条件</span>
          <i class="add icon"></i>
        </div>
      </div>
    </div>
    <!-- 收款条件 -->

    <!-- 合同 -->
    <h4 class="ui dividing header blue">合同</h4>
    <div class="ui center aligned basic segment">
      <div id="contarctFiles"></div>
      <div>
        <input type="file" id="contractUpload" hidden>
        <label for="contractUpload" class="ui blue labeled icon button">
          <i class="upload icon"></i>
          <span>上传合同</span>
        </label>
      </div>
    </div>
    <!-- /合同 -->

    <div class="inline-center">
      <button class="ui button green large" type="submit">
        <i class="icon hand pointer"></i>
        <span>提交</span>
      </button>
    </div>
  </form>
</div>

<include src="../template/footer.html">
  @js = ../../src/js/project_create.js
</include>