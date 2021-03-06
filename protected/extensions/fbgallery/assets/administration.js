function administration(){
    $(".sttip").bttooltip({
        design: "fbtooltip",
        hide: false
    });
    $("#showCPanel").click(function () {
        $(".formCPFB").show();
        $("#dialogCPAdministrator").dialog("open")
    });
    $(".fbLoadDefault").click(function () {
        $(this).prev().val($(this).attr("data-default"))
    });
    $(".toggleSetting").eq(0).addClass("toggleSettingActive");
    $(".toggleSetting").click(function () {
        $(".displaySetting, .rowForButtons").hide();
        $(".toggleSettingActive").removeClass("toggleSettingActive");
        var a = $(this).attr("id").replace("toggle", "set");
        $(this).addClass("toggleSettingActive");
        $("#" + a).show();
        $("#" + a).parent().find(".rowForButtons").show()
    });
    $(".loadDefaultFB").click(function () {
        $(".loadDefaultFBActive").removeClass("loadDefaultFBActive");
        $(this).addClass("loadDefaultFBActive");
        var b = $(this).attr("data-setting");
        var a = $(this).html();
        $(".displaySetting, .rowForButtons").hide();
        $(".configType").html(a);
        var c = $(".loadDefaultConf").attr("data-value") + " " + a;
        $(".loadDefaultConf").attr("data-type", b);
        $(".loadDefaultConf").val(c);
        $("#confirmationLoadDefault").show().next(".rowForButtons").show()
    });
    $(".loadDefaultConf").click(function () {
        $.ajax({
            type: "POST",
            url: location.href,
            data: "loadDefaultConfig=" + $(this).attr("data-type"),
            success: window.location.reload()
        })
    });
    $(".toggleNext").click(function () {
        $(".categoryList").hide("slow");
        $(this).next().toggle("slow")
    });
    $(".flash-success, .flash-error").click(function () {
        $(this).hide("slow")
    });
    $(".fbCPButton").click(function () {
        $(this).before('<div class="working"></div>')
    });
    $("#setGalleryAspect").show();
    $(".rowForButtons").eq(0).show();
    
	$("#setStandardShop").click(function(){
		$.ajax({ 
			type: "POST", 
			url: location.href, 
			data: "setStandardShop=true", 
			success:window.location.reload()
		});
	});
}