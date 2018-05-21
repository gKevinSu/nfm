<?php

namespace Component
{
	class DataBase{
		
		private $catalog;

		function __construct(){
			$this -> catalog = array();

         array_push($this->catalog,
            array('name'=>'国务院办公厅关于开展工程建设项目审批制度改革试点的通知',
               'date'=>'2018-5-18',
               'link'=>'http://www.gov.cn/zhengce/content/2018-05/18/content_5291843.htm',
               'keywords'=>'建设项目审批改革、精简环节',
               'from'=>'国务院办公厅',
               'context'=>'为贯彻落实党中央、国务院关于深化“放管服”改革和优化营商环境的部署要求，推动政府职能转向减审批、强监管、优服务，促进市场公平竞争，国务院决定开展工程建设项目审批制度改革试点。
'));

         array_push($this->catalog,
            array('name'=>'国务院办公厅关于开展工程建设项目审批制度改革试点的通知',
               'date'=>'2018-5-17',
               'link'=>'http://www.chinalaw.gov.cn/art/2018/5/17/art_15_208227.html',
               'keywords'=>'企业安全生产主体责任',
               'from'=>'中国政府法制信息网',
               'context'=>'为了进一步落实生产经营单位安全生产主体责任，预防和减少生产安全事故，保障人民群众生命和财产安全，促进经济发展和社会和谐，根据《中华人民共和国安全生产法》等法律、法规规定，结合本市实际，制定本规定。本规定自2018年7月1日起施行。《深圳市工业和商贸企业安全生产主体责任规定》同时废止。
'));
         array_push($this->catalog,
            array('name'=>'关于公布坪山区环境保护和水务局安全生产监管清单的公示',
               'date'=>'2018-5-16',
               'link'=>'http://www.szpsq.gov.cn/xxgk/jt/tzgg/201805/t20180516_11913730.htm',
               'keywords'=>'环保督查',
               'from'=>'坪山区环境保护和水务局',
               'context'=>'坪山区环境保护和水务局安全生产监管清单，详见附件。
'));

         array_push($this->catalog,
            array('name'=>'深圳市住房保障署、坪山区住房和建设局关于聚龙花园二期入住时间及租金标准等情况的说明',
               'date'=>'2018-5-11',
               'link'=>'http://www.szpsq.gov.cn/xxgk/jt/tzgg/201805/t20180510_11886582.htm',
               'keywords'=>'公租房、聚龙花园二期',
               'from'=>'坪山区住建局',
               'context'=>'预计于5月底可完成施工整改，6月15日前完成橱柜灶台安装，6月中下旬可办理入住。
'));

         array_push($this->catalog,
            array('name'=>'市经贸信息委关于组织实施2019年专项资金扶持计划（第一批）的通知',
               'date'=>'2018-5-9',
               'link'=>'http://www.szjmxxw.gov.cn/xxgk/xxgkml/qt/tzgg/201805/t20180509_11818717.htm',
               'keywords'=>'2019专项资金、新材料',
               'from'=>'市经信委',
               'context'=>'
　　为贯彻落实市政府战略性新兴产业和未来产业、提升企业竞争力等产业政策措施，我委决定组织实施2019年专项资金扶持计划（第一批），请符合相应条件的有关单位，认真准备，积极参与项目申请。

　　特此通知。
'));
         array_push($this->catalog,
            array('name'=>'关于对营业账簿减免印花税的通知',
               'date'=>'2018-5-3',
               'link'=>'http://www.chinatax.gov.cn/n810341/n810755/c3436361/content.html',
               'keywords'=>'减征印花税',
               'from'=>'财政部 税务总局',
               'context'=>'自2018年5月1日起，对按万分之五税率贴花的资金账簿减半征收印花税，对按件贴花五元的其他账簿免征印花税。
'));

      //function end      
	   }

		public function getCatalog(){
			return $this -> catalog;
		}
	}
}