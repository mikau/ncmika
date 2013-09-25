var clsCustomize = Class.create();
var customizeCls = Array();

clsCustomize.prototype = {
	initialize: function(id) {
		this.id = id;
	},
	widthZero: function() {
		//パラメータ設定
		var top_el = $(this.id);
		var params = new Object();
		params["param"] = "customize_action_admin_widthzero";
		params["method"] = "post";
		params["loading_el"] = top_el;
		params["top_el"] = top_el;
		params["target_el"] = top_el;
		params["callbackfunc"] = function(res){
			if (res == "error") {
				commonCls.alert(RegExp.$1);
				return;
			}	
			commonCls.alert("ブロックの最小幅を0にしました!");
		}.bind(this);
		
		commonCls.send(params);
	},
	widthFixCenter: function() {
		// 幅固定＋センタリング
		var top_el = $(this.id);
		var params = new Object();
		params["param"] = "customize_action_admin_widthfixcenter";
		params["method"] = "post";
		params["loading_el"] = top_el;
		params["top_el"] = top_el;
		params["target_el"] = top_el;
		params["callbackfunc"] = function(res){
			if (res == "error") {
				commonCls.alert(RegExp.$1);
				return;
			}	
			commonCls.alert("幅固定＋センタリングにしました!");
		}.bind(this);
		
		commonCls.send(params);
	}
}