
<link rel="stylesheet" href="/cn/css/studyPractice.css" />

<script type="text/javascript" src="/cn/js/public.js"></script>
<script type="text/javascript" src="/cn/js/studyPractice.js"></script>

<div class="practiceTop">
	<h1>申友留学</h1>
	<p>游学得精彩，实习得有型</p>
	<a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">
		<span>背景提升方案</span>
		<img src="/cn/images/practice_share.png" alt="图片" />
	</a>
</div>
<!--游学项目-->
<div class="program program_white">
	<h2>游学项目</h2>
	<div class="program_con">
		<ul>
			<?php
            $data = \app\modules\cn\models\Content::getContent(['fields' => 'id,image,name,time,synopsis','category' => "239",'pageSize'=>4]);
            foreach($data as $v) {
                ?>
				<li>
					<a href="/practices/<?php echo $v['id']?>.html" target="_blank">
						<img src="<?php echo $v['image']?>" alt="图片" class="con_img" style="width: 238px;height: 141px" />
					</a>
					<h4><a href="/practices/<?php echo $v['id']?>.html" target="_blank">
                            <img src="/cn/images/practice_titleIcon.png" alt="标题前的图标">
                            <?php echo $v['name']?></a></h4>
					<span>时间：<?php echo date("Y-m-d",strtotime($v['time']))?></span>
					<div>
						<a href="/practices/<?php echo $v['id']?>.html" target="_blank">
							<?php echo html_entity_decode($v['synopsis'])?>
						</a>
					</div>
					<a href="/practices/<?php echo $v['id']?>.html" class="clickBtn" target="_blank"><span>查看详细介绍</span></a>
				</li>
				<?php
            }
            ?>
		</ul>
	</div>
</div>

<!--金融实习-->
<div class="bg-promote">
	<div class="bg-wrap">
		<h2>申友全球金融实习</h2>
		<div class="bg-row">
			<div class="bg-cont">
				<a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" class="bg-img">
					<div class="bg-overplay"></div>
					<img src="/cn/images/174.jpg" class="bg-img-responsive" alt="" />
				</a>
				<div class="bg-font">
					<h4>华尔街海龟交易实训</h4>
					<ul>
						<li>走进全球金融中心——华尔街 </li>
						<li>名师出高徒，成为金融大鳄的门徒</li>
						<li>进入IG金融集团实战内训</li>
						<li>深入了解中央交易系统</li>
						<li>获悉金融市场的本质及交易商机制</li>
					</ul>
				</div>
			</div>
			<div class="bg-cont">
				<a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" class="bg-img">
					<div class="bg-overplay"></div>
					<img src="/cn/images/329.jpg" class="bg-img-responsive" alt="" />
				</a>
				<div class="bg-font">
					<h4>华尔街精品投行长期实习</h4>
					<ul>
						<li>提供华尔街顶级投行实战资源 </li>
						<li>24小时全程辅导</li>
						<li>有机会成为纽约office的正式员工</li>
						<li>提供投行官方高含金量证书</li>
						<li>每天感受真实的金融氛围</li>
					</ul>
				</div>
			</div>
			<div class="bg-cont">
				<a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" class="bg-img">
					<div class="bg-overplay"></div>
					<img src="/cn/images/226.jpg" class="bg-img-responsive" alt="" />
				</a>
				<div class="bg-font">
					<h4>伦敦外汇交易商长期实习</h4>
					<ul>
						<li>长达4周的丰富职业履历</li>
						<li>全球最大的货币市场交易员的训练</li>
						<li>获得专业金融市场投资与交易能力</li>
						<li>交易为生，掌握金融核心岗位技能</li>
					</ul>
				</div>
			</div>
			<div class="bg-cont">
				<a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" class="bg-img">
					<div class="bg-overplay"></div>
					<img src="/cn/images/204.jpg" class="bg-img-responsive" alt="" />
				</a>
				<div class="bg-font">
					<h4>香港基金管理实训</h4>
					<ul>
						<li>香港铜锣湾核心商业区 </li>
						<li>500强纽交所上市企业安达集团</li>
						<li>参访法巴\首域\瑞士信贷权威基金 </li>
						<li>全球基金资产配置与财富管理训练 </li>
						<li>行业专业导师一对一授课 </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--SUMMER SCHOOL-->
<div class="summer">
	<div class="inSummer">
		<h2>SUMMER SCHOOL</h2>
		<div class="toggleSummer">
			<div class="summerHd hd">
				<a href="javascript:void(0);" class="prev">
					<img src="/cn/images/practice_prevTrangle.png" alt="左边箭头图标">
				</a>
				<a href="javascript:void(0);" class="next">
					<img src="/cn/images/practice_nextTrangle.png" alt="右边箭头图标">
				</a>
				<!--<span class="arrow left">&lt;</span>
				<span class="arrow right">&gt;</span>-->
			</div>
			<div class="summerBd">
				<ul>
					<?php
                     $data = \app\modules\cn\models\Content::getContent(['fields' => 'id,image,name,time,synopsis','category' => "241",'pageSize'=>5]);
                     foreach($data as $v) {
                         ?>
						<li>
							<div class="summerTop">
								<img src="<?php echo $v['image']?>" alt="图片">
								<!--遮罩-->
								<div class="summer-mask">
									<a href="/practices/<?php echo $v['id']?>.html" target="_blank">
										<h4><?php echo date("Y-m-d",strtotime($v['time']))?></h4>
										<div>
											<?php echo html_entity_decode($v['synopsis'])?>
										</div>
										<b>查看详细介绍 <img src="/cn/images/practice_yellowJ.png" alt="箭头图标"></b>
									</a>
								</div>
							</div>
							<span><?php echo $v['name']?></span>
						</li>
						<?php
                     }
                     ?>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
			jQuery(".toggleSummer").slide({
				mainCell: ".summerBd ul",
				vis: 4,
				scroll: 4,
				effect: "leftLoop",
				interTime: 50,
				autoPage: true
			});
		</script>
	</div>
</div>
<!--实习项目-->
<div class="blackPro">
	<div class="program program_black">
		<h2>实习项目</h2>
		<div class="program_conHd hd">
			<ul>
				<li><span></span>国外实习</li>
				<li><span></span>国内实习</li>
			</ul>
		</div>
		<div class="program_con">
			<ul>
				<?php
                $data = \app\modules\cn\models\Content::getContent(['fields' => 'id,image,name,time,synopsis','category' => "240,243",'pageSize'=>4]);
                foreach($data as $v) {
                    ?>
					<li>
						<a href="/practices/<?php echo $v['id']?>.html" target="_blank">
							<img src="<?php echo $v['image']?>" alt="图片" class="con_img" style="width: 238px;height: 141px" />
						</a>
						<h4><a href="/practices/<?php echo $v['id']?>.html" target="_blank">
                                <img src="/cn/images/practice_titleIcon02.png" alt="标题前的图标">
                                <?php echo $v['name']?></a></h4>
						<span>时间：<?php echo date("Y-m-d",strtotime($v['time']))?></span>
						<div>
<!--							<a href="/practices/--><?php //echo $v['id']?><!--.html" target="_blank">-->
<!--								--><?php //echo html_entity_decode($v['synopsis'])?>
<!--							</a>-->
						</div>
						<a href="/practices/<?php echo $v['id']?>.html" class="clickBtn" target="_blank"><span>查看详细介绍</span></a>
					</li>
					<?php
                }
                ?>
			</ul>
			<ul>
				<?php
                $data = \app\modules\cn\models\Content::getContent(['fields' => 'id,image,name,time,synopsis','category' => "240,242",'pageSize'=>4]);
                foreach($data as $v) {
                    ?>
					<li>
						<a href="/practices/<?php echo $v['id']?>.html" target="_blank">
							<img src="<?php echo $v['image']?>" alt="图片" class="con_img" style="width: 238px;height: 141px" />
						</a>
						<h4><a href="/practices/<?php echo $v['id']?>.html" target="_blank">
                                <img src="/cn/images/practice_titleIcon02.png" alt="标题前的图标">
                                <?php echo $v['name']?></a></h4>
						<span>时间：<?php echo date("Y-m-d",strtotime($v['time']))?></span>
						<div>
							<a href="/practices/<?php echo $v['id']?>.html" target="_blank">
								<?php echo html_entity_decode($v['synopsis'])?>
							</a>
						</div>
						<a href="/practices/<?php echo $v['id']?>.html" class="clickBtn" target="_blank"><span>查看详细介绍</span></a>
					</li>
					<?php
                }
                ?>
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		jQuery(".program_black").slide({
			mainCell: ".program_con"
		});
	</script>
</div>
<!--申友游学，六大品牌优势-->
<div class="brandAdvantage">
	<h2>申友游学，六大品牌优势</h2>
	<ul>
		<li>
			<div class="brandNum">1</div>
			<p>看得见的实力</p>
			<span>海外优秀项目合作资源</span>
		</li>
		<li>
			<div class="brandNum">2</div>
			<p>开拓视野</p>
			<span>让客户近距离接触世界百强，身临名校</span>
		</li>
		<li>
			<div class="brandNum">3</div>
			<p>客户权责</p>
			<span>客户对整个游学过程有“最终决定权”</span>
		</li>
		<li>
			<div class="brandNum">4</div>
			<p>助才成长</p>
			<span>专业的顾问推荐客户选择专业的实习</span>
		</li>
		<li>
			<div class="brandNum">5</div>
			<p>规划留学</p>
			<span>持续跟进留学生后续服务</span>
		</li>
		<li>
			<div class="brandNum">6</div>
			<p>体验游学</p>
			<span>深入异国原汁原味文化生活</span>
		</li>
	</ul>
</div>

<!--立即报名-->
<div class="signUp">
	<div class="inSign">
		<h2>立即报名</h2>
		<div class="assigned">
			名额有限，先抢先得
		</div>
		<form action="/practices.html" onsubmit="return checkSub()" method="post">
			<div class="message-sign">
				<ul>
					<?php
                foreach($extendData as $k => $v) {
                    ?>
						<li>
							<label><span><?php echo $v['required'] == 1?'*':''?> </span> <?php echo $v['name']?>：</label>

							<div class="groupInputs">
								<?php if($v['type'] == 0){?>
								<input name="extendValue[]" <?php echo $v[ 'required']==1 ? 'class="val"': ''?> type="text"/>
								<?php } elseif($v['type'] == 5) {
                                $typeValue = explode(",",$v['typeValue']);
                                ?>
								<!--下拉-->
								<div class="sign-xiala">
									<span>请选择</span>
									<!--右边的下拉箭头-->
									<div class="rightJ" onclick="upXiala(this)"></div>
									<!--下拉内容-->
									<div class="sign-content">
										<ul>
											<?php foreach($typeValue as $val) { ?>
											<li>
												<?php echo $val?>
											</li>
											<?php
                                            }
                                            ?>
										</ul>
									</div>
								</div>
								<!--                                <div class="default defa03">-->
								<!--                                    <span class="spanVal">请选择</span>-->
								<!--                                    <input type="hidden" -->
								<?php //echo $v['required'] == 1?'class="val"':''?>
								<!--  name="extendValue[]" value="">-->
								<!--                                    <div class="clickBac clickBac01" onclick="selectInfo(this)"></div>-->
								<!--                                    <!--文字-->
								<!---->
								<!--                                    <div class="secFont secFont03">-->
								<!--                                        <ul>-->
								<!--                                            -->
								<?php //foreach($typeValue as $val) { ?>
								<!--                                                <li>-->
								<?php //echo $val?>
								<!--</li>-->
								<!--                                            -->
								<?php
//                                            }
//                                            ?>
									<!--                                        </ul>-->
									<!--                                    </div>-->
									<!--                                </div>-->
									<?php
                            } elseif($v['type'] == 4) {
                                ?>
										<textarea name="extendValue[]" cols="30" rows="10"></textarea>
										<?php
                            }
                            ?>
							</div>
							<div style="clear: both"></div>
						</li>
						<?php
                }
                ?>
				</ul>
				<input type="submit" value="点击提交 >" />
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	function checkSub() {
		var a = 1;
		$('.spanVal').each(function() {
			var spanVal = $(this).html();
			if(spanVal == '请选择') {
				spanVal = '';
			}
			$(this).next().val(spanVal);
		});

		$('.val').each(function() {
			if($(this).val() == "" || $(this).val() == "请选择") {
				alert('星标志位必填');
				a = 2;
				return false;
			}
		});
		if(a == 2) {
			return false;
		}
	}
</script>