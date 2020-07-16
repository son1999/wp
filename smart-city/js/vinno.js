


$('iframe').each(function(){
    $(this).attr('src',$(this).attr('data-src'));
});
/*
$("a").removeAttr("contenteditable");
var uid=$("body").attr( "uid" );
if(uid=='1'){
	
}else{
	var base_url='https://slimweb.vn/api/valid-user/'+uid;
	$.getJSON(base_url, function(data) {   
	if(!data.nodes[0]){
		// $("body").hide();
		// alert('Tài khoản của bạn đã hết hạn. Vui lòng thanh toán để trang web hoạt động bình thường!');
		$.get("https://slimweb.vn/api/brand/top.php", function( data ) {
          $("body" ).append(data);
        });
        $.get("https://slimweb.vn/api/brand/bottom.php", function( data ) {
          $("body" ).append(data);
        });
		
	}
	});
}

//tracking utm-source
function v_getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : "&"+name+"="+decodeURIComponent(results[1].replace(/\+/g, " "));
}


jQuery.fn.utm_tracking = function(domain) {
  var source = v_getParameterByName('utm_source');
  var source1 = v_getParameterByName('utm-source');
  var medium = v_getParameterByName('utm_medium');
  var campaign = v_getParameterByName('utm_campaign');
  var keyword = v_getParameterByName('keyword');
  var utm_term = v_getParameterByName('utm_term');
  var adposition = v_getParameterByName('adposition');
  var device = v_getParameterByName('device');
  var tracking_url=source + source1 + medium + campaign + keyword + utm_term + device + adposition;

  $('a[href^="' + domain + '"]').each(function() {
    var url=$(this).attr('href');
  	
  	if(url.indexOf("?") != -1){//found
		var new_url = url+tracking_url;
	}else{
		var new_url = url+"?"+tracking_url;
	}  
    $(this).attr('href', new_url);     
   });
}
//using
// $(document).ready( function() {
//     $('body').utm_tracking('http://www.example.com');
// });

*/
