
var playerHTML = "<div class='videoPlayerWrapper jplayerThemePlayer'><div class=\"jplayer jp-jplayer\"></div><div class=\"videoloading\"></div><div class=\"jp-play-btn large\"></div><div class=\"videoplayer\"><div class=\"videoplayer_inner\"><div class=\"times\"><span class=\"jp-current-time\"></span><span class=\"time-sep\">/</span><span class=\"jp-duration\"></span></div><div class=\"jp-play\"></div><div class=\"jp-pause\"></div><div class=\"jp-progress\"><div class=\"jp-seek-bar\"><div class=\"jp-play-bar\"></div><span class=\"handle\"></span></div></div><div class='volume med'></div><div class=\"jp-full-screen\"></div><div class=\"jp-restore-screen\"></div></div></div></div>";
if(document.createStyleSheet) {
  document.createStyleSheet('/javascripts/jplayertheme/jplayer.css?v=1');
}
else {
  
  $("head").append("<link rel='stylesheet' href='/javascripts/jplayertheme/jplayer.css?v=1' />");
}
var jplayerdragging=false;

function makeVideo (obj,width,height,image,video,autostart,fullscreen) {

	var ext = video.split('.').pop();

	if (videoControlBar=="bottom"){
		height=height+24;
	}
	if (fullscreen) { 
		$("#"+obj+" .videoPlayerWrapper").css("width","100%").css("height","100%");
	} else {
		$("#"+obj+" .videoPlayerWrapper").css("width",width+"px").css("height",height+"px");	
	}
	$("#"+obj+" .videoPlayerWrapper").hover(function(){
		$(".videoplayer",$(this)).removeClass("hidden");
	},function(){
		if ($(".jplayer",$(this)).hasClass("playing")) {
			$(".videoplayer",$(this)).addClass("hidden");		
		}
	});
	$(".jp-play-btn",$("#"+obj)).click(function(){
		var playerid = $(this).parents(".jplayerInit").attr("id");
				if ($("#"+playerid+" .jplayer").hasClass("playing")) {
					$("#"+playerid+" .jplayer").jPlayer("pause");
				} else {
					$("#"+playerid+" .jplayer").jPlayer("play");					
				}

	});
	$(".volume",$("#"+obj)).click(function(){
		var playerid = $(this).parents(".jplayerInit").attr("id");
		if ($(this).hasClass("low")) {
			$("#"+playerid+" .jplayer").jPlayer("option","volume",0.5);
			$(this).removeClass("low").addClass("med");
			jplayervolume = 0.5;
		} else if ($(this).hasClass("med")) {
			$("#"+playerid+" .jplayer").jPlayer("option","volume",1);
			$(this).removeClass("med").addClass("high");
			jplayervolume = 1;
		} else if ($(this).hasClass("high")) {
			$("#"+playerid+" .jplayer").jPlayer("option","volume",0.1);
			$(this).removeClass("high").addClass("low");
			jplayervolume = 0.1;
		}
		createCookie("volume",jplayervolume);
	});
	$(".handle",$("#"+obj)).draggable({
		containment:"parent"
		,drag: function(event, ui) { 
	        var pos = $(this).position().left;	
			var pwidth = $(this).parent().width();
			var percent = pos / pwidth;
			if (percent!=0) {
				percent = percent*100;				
			}
			$(".jp-play-bar",$(this).parent()).css("width",percent+"%");
			if ($(this).parents(".videoPlayerWrapper").length) {
				var playerid = $(".jplayer",$(this).parents(".videoPlayerWrapper")).attr("id");
			}
			if ($(this).parents(".videoPlayerWrapper").length) {
				var playerid = $(".jplayer",$(this).parents(".videoPlayerWrapper")).attr("id");
			} else {
				var playerid = $(this).parents(".audioplayer").prev().attr("id");
			}
			$("#"+playerid).jPlayer("playHead",percent);
		 }
		,start: function(event,ui) {
			jplayerdragging=true;
		}
		,stop:function(event,ui) {
			jplayerdragging=false;
		}
		,axis:"x"
	});
	if (ext=="m4v") {
		var supplied="m4v";
	}
	if (ext=="mp3") {
		var supplied="mp3";
	}
	if (ext=="mp4") {
		var supplied="m4v";
	}
	if (ext=="mov") {
		var supplied="m4v";
	}
	if (ext=="m4a") {
		var supplied="m4a";
	}
	if (ext=="ogv") {
		var supplied="ogv";
	}
	if (ext=="oga") {
		var supplied="oga";
	}
	if (ext=="ogg") {
		var supplied="oga";
	}
	if (ext=="wav") {
		var supplied="wav";
	}
	if (ext=="webm") {
		var supplied="webmv";
	}
	if (ext=="webma") {
		var supplied="webma";
	}
	if (ext=="webmv") {
		var supplied="webmv";
	}
	$("#"+obj+" .jplayer").jPlayer({
		ready: function () {
			
			if (ext=="m4v") {
				$(this).jPlayer("setMedia", {
	        		m4v: video
	        		,poster: image
	        	});	
			}
			if (ext=="mp3") {
				$(this).jPlayer("setMedia", {
	        		m4v: video
	        		,poster: image
	        	});	
			}
			if (ext=="mp4") {
				$(this).jPlayer("setMedia", {
	        		m4v: video
	        		,poster: image
	        	});
			}
			if (ext=="mov") {
				$(this).jPlayer("setMedia", {
	        		m4v: video
	        		,poster: image
	        	});
			}
			if (ext=="m4a") {
				$(this).jPlayer("setMedia", {
	        		m4a: video
	        		,poster: image
	        	});
			}
			if (ext=="ogv") {
				$(this).jPlayer("setMedia", {
	        		ogv: video
	        		,poster: image
	        	});
			}
			if (ext=="oga") {
				$(this).jPlayer("setMedia", {
	        		oga: video
	        		,poster: image
	        	});
			}
			if (ext=="ogg") {
				$(this).jPlayer("setMedia", {
	        		oga: video
	        		,poster: image
	        	});
			}
			if (ext=="wav") {
				$(this).jPlayer("setMedia", {
	        		wav: video
	        		,poster: image
	        	});
			}
			if (ext=="webm") {
				$(this).jPlayer("setMedia", {
	        		webm: video
	        		,poster: image
	        	});
			}
			if (ext=="webma") {
				$(this).jPlayer("setMedia", {
	        		webma: video
	        		,poster: image
	        	});
			}
			if (ext=="webmv") {
				$(this).jPlayer("setMedia", {
	        		webmv: video
	        		,poster: image
	        	});
			}
			if (autostart) {
				$(this).jPlayer("play");
			}
    	},
    	supplied: supplied,
		swfPath: "/javascripts", 
		size: {
			width: width,
			height: height
		},
		volume: jplayervolume,
		fullScreen:fullscreen,
		cssSelectorAncestor: "#"+obj+" .videoPlayerWrapper"
		,play: function(event) {
			setTimeout(function() {
				$(".videoplayer",$(event.jPlayer.options['cssSelectorAncestor'])).addClass("hidden");
			}, 1000);
			$(this).addClass("playing");
			$(".videoloading,.jp-play-btn.large",$(event.jPlayer.options['cssSelectorAncestor'])).addClass("hidden");
		},
		pause: function(event) {
			$(".videoloading,.jp-play-btn.large",$(event.jPlayer.options['cssSelectorAncestor'])).removeClass("hidden");
			$(".videoplayer",$(event.jPlayer.options['cssSelectorAncestor'])).removeClass("hidden");		
			
			$(this).removeClass("playing");
		},
		timeupdate: function(event) {
			if (!jplayerdragging) {
				$(".handle",$(event.jPlayer.options['cssSelectorAncestor'])).css("left",$(".jp-play-bar",$(event.jPlayer.options['cssSelectorAncestor'])).width());			
			}
		}
	}); 
	
}
var jplayerVideoCounter=0;
var jplayervolume = 0.5;
$(window).load(function(){
	if (readCookie("volume")) {
		jplayervolume = readCookie("volume");
	}

	$(".bpe_video:not(.Popup_Video) img").each(function(){

		var img = this;
		var width = $(this).width();
		var height = $(this).height();
		var image = $(this).attr("src");
		var video = $(this).parent().attr("href");
		$(this).parent().after("<div id=\"video"+jplayerVideoCounter+"\" class='jplayerInit' data-poster='"+image+"' data-vid='"+video+"'>"+playerHTML+"</div>");
		$(this).parent().remove();
		
		makeVideo("video"+jplayerVideoCounter,width,height,image,video,false,false);

		jplayerVideoCounter++;
	});


});