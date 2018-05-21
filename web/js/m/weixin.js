;
var weixin_jssdk_ops = {
    init:function(){
        this.initJSconfig();
    },
    initJSconfig:function(){
        var that = this;
        $.ajax({
            url:'/weixin/jssdk/index?url='+encodeURIComponent(location.href.split('#')[0]),
            type:'GET',
            dataType:'json',
            success:function(data){
                if(data.code == 200) {
                    var appId = data.data.appId;
                    var timestamp = data.data.timestamp;
                    var nonceStr = data.data.nonceStr;
                    var signature = data.data.signature;
                    wx.config({
                        debug: false,
                        appId: appId,
                        timestamp: timestamp,
                        nonceStr: nonceStr,
                        signature: signature,
                        jsApiList: [
                           'onMenuShareTimeline','onMenuShareAppMessage','chooseWXPay'
                        ]
                    });

                    var res_data = data;
                    wx.ready( function(){
                        var share_info = eval('(' + $("#share_info").val() + ')');
                        var share_url = location.href.split('#')[0];
                        var title = share_info.title?share_info.title:window.document.title;
                        var desc = share_info.desc?share_info.desc:window.document.title;

                        share_url = decodeURIComponent( share_url );

                        title = decodeURIComponent(title);
                        desc = decodeURIComponent(desc);

                        wx.onMenuShareTimeline( {
                            title: title,
                            imgUrl: decodeURIComponent( share_info.img_url ),
                            link: share_url,
                            success: function () {
                                that.sharedSuccess();
                            },
                            cancel: function () {

                            }
                        } );

                        wx.onMenuShareAppMessage({
                            title: title,
                            desc: desc,
                            link: share_url,
                            imgUrl: decodeURIComponent(share_info.img_url),
                            type: 'link',
                            success: function () {
                                that.sharedSuccess();
                            },
                            cancel: function () {
                            }
                        });

                    });

                    wx.error(function(res){
                        var msg = '';
                        for( var idx in res ){
                            msg += idx + ":" + res[idx];
                        }

                        msg += ",resp:" + that.json2str( res_data );

                        var data = {
                            'message':msg,
                            'url':window.location.href,
                            'error':'wechat-jssdk'
                        };
                        
                        $.ajax({
                            url:"/error/capture",
                            type:'post',
                            data:data
                        });
                    });
                }
            }
        });
    },
    wxPay:function(json_data){
        wx.ready(function(){
            wx.chooseWXPay(json_data);
        });
    },
    json2str:function json2str(o) {
        var arr = [];
        var fmt = function(s) {
            if (typeof s == 'object' && s != null) return json2str(s);
            return /^(string|number)$/.test(typeof s) ? "'" + s + "'" : s;
        };
        for (var i in o) arr.push("'" + i + "':" + fmt( o[i] ) );
        return '{' + arr.join(',') + '}';
    },
    sharedSuccess:function(){
        $.ajax({
            url:common_ops.buildMUrl("/default/shared"),
            type:'POST',
            dataType:'json',
            data:{
                url:window.location.href
            }
        });
    }
};

$(document).ready(function(){
    weixin_jssdk_ops.init();
});
