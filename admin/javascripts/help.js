var actuallyClicked=false;
function hideSearch() {
	$("#search").removeClass('showing-on');
	setTimeout(function () {
		$("#search").removeClass('showing-off');				
	}, 500);
	$("#searchLink").removeClass('active');
}
function hideMenu() {
	$("#tree").removeClass('showing-on');
	setTimeout(function () {
		$("#tree").removeClass('showing-off');				
	}, 500);
	$("#menuLink").removeClass('active');
}
var searchtimeout;
var ageinterval;
var age = 0;
function loadResults(val) {
	console.log('loading');
	$.ajax({
	  url: "./help.php",
		data:"search="+encodeURIComponent(val)
	}).done(function(data) {
		$("#search-results").html("");
		data = jQuery.parseJSON(data);
		for (var i = 0; i < data.length; i++) {
			$("#search-results").append('<a class="search-result" href="#'+data[i].id+'">'+data[i].title+'</a>');
		}
	});
}
$(document).ready(function(){
	$('#next-icon').click(function(){
		actuallyClicked=false;		
		if ($("#tree a.current").parent().next().find("a.article").length) {

			$("#tree a.current").parent().next().find("a.article:first").trigger('click');
		} else {
			$("#tree li:first a.article:first").trigger('click');
		}
		actuallyClicked=true;		
		
		return false;
	});
	$('#prev-icon').click(function(){
		actuallyClicked=false;		
		if ($("#tree a.current").parent().prev().find("a.article").length) {
			$("#tree a.current").parent().prev().find("a.article:last").trigger('click');
		} else {
			if ($("#tree a.current").parent().parent().parent().prev().find("a:last").length) {
				$("#tree a.current").parent().parent().parent().prev().find("a.article").last().trigger('click');
			} else {
				$("#tree a.article").last().trigger('click');				
			}
		}
		actuallyClicked=true;		
		return false;
	});
	$("#search-results").on('click','a',function(){
		actuallyClicked=false;		
		$("#tree a[href=\""+$(this).attr('href')+"\"]").trigger('click');
		actuallyClicked=true;		
	});
	$("#search-input input").on('keyup change selectionchange propertychange',function(){
		if ($("#search-results").html()=="") {
			$("#search-results").html('<div class="loader"></div>');			
		}
		if (age==0) {
			ageinterval=setInterval(function(){age = age+100;},100);			
		}

		clearTimeout(searchtimeout);
		
		var val = $(this).val();
		
		if (age>2000) {
			age=0;
			clearInterval(ageinterval);
			loadResults(val);
			return false;
		} 
		
		searchtimeout = setTimeout(function () {
			loadResults(val);

		}, 500);
	
		
		
	});
	$(document).click(function(e){
		if (!$(e.target).parents("#search").length || $(e.target).attr('id')=="search") {
			hideSearch();
		}
		if (!$(e.target).parents('#tree').length || $(e.target).attr('id')=="tree") {
			hideMenu();
		}
	});
	$("#tree a").click(function(){
		hideSearch();
		if ($("> .content",$(this).parent()).length){
			if ($(window).width()<=600) {
				hideMenu();
			}
			$("#topic-container-inner").html($("> .content",$(this).parent()).html());
			$('#tree .current').removeClass('current');
			$(this).addClass('current');
			if (actuallyClicked) {
  		      var t = $(this).text();
  		      window.history.pushState({}, t, '/admin/help.php'+$(this).attr("href"));				
			} else {
				$(this).parents("li").each(function(){
					$("> ul",$(this)).slideDown(0);				
					$(this).find(">a").addClass('expanded');
				});
				var t = $(this).offset().top;
				if (t>$("#tree").height()-20) {
					$("#tree").stop().animate({scrollTop:t}, '500', 'swing', function() { 
					});					
				}
			}
		} else {
			if ($("> ul:visible",$(this).parent()).length) {
				$("> ul",$(this).parent()).slideUp(200);	
				$(this).removeClass('expanded');
			} else {
				$("> ul",$(this).parent()).slideDown(200);				
				$(this).addClass('expanded');
			}

		}
		return false;
	});
	$("#searchLink").click(function(){
		if (!$("#search").hasClass('showing-on')) {
			$("#searchLink").addClass('active');
			$("#search").addClass('showing-off');
			setTimeout(function () {
			$("#search").addClass('showing-on');				
			}, 10);
			$('#search-input input').focus();
		} else {
			hideSearch();
		}
		return false;
	});
	$("a").click(function(){
		if ($(this).attr("href").indexOf('/popup')!==-1)  {
			alert('popup');
		}
		return false;
	});
	$("#menuLink").click(function(){
		if (!$("#tree").hasClass('showing-on')) {
			$("#menuLink").addClass('active');
			$("#tree").addClass('showing-off');
			setTimeout(function () {
			$("#tree").addClass('showing-on');				
			}, 10);
			$('#tree-input input').focus();
		} else {
			hideMenu();
		}
		return false;
	});
	if (window.location.href.indexOf("#")!==-1) {
		$("#tree a[href=\""+window.location.hash+"\"]").trigger('click');
	}
	
	actuallyClicked=true;		

});
window.onpopstate = function(){
	if (window.location.href.indexOf("#")!==-1) {
		actuallyClicked=false;		
		$("#tree a[href=\""+window.location.hash+"\"]").trigger('click');
		actuallyClicked=true;		
	}	
}