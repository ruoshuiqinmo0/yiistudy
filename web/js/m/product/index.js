;
var product_index_ops = {
    init:function(){
        this.sort_field = "default";
        this.sort = "";
        this.eventBind();
    },
    eventBind:function(){
        var that = this;
        $(".search_header .search_icon").click( function(){
            that.search();
        });

        $(".sort_box .sort_list li a").click( function(){
            that.sort_field = $(this).attr("data");
            if( $(this).find("i").hasClass("high_icon")  ){
                that.sort = "asc"
            }else{
                that.sort = "desc"
            }
            that.search();
        });
    },
    search:function(){
        var params = {
            kw:$(".search_header input[name=kw]").val(),
            sort_field:this.sort_field,
            sort:this.sort
        };

        window.location.href = common_ops.buildMUrl("/product/index",params);
    }
};
$(document).ready(function () {
    product_index_ops.init();
});