function $_GET(q,s) { 
	s = s ? s : window.location.search; 
	var re = new RegExp('&'+q+'(?:=([^&]*))?(?=&|$)','i'); 
	return (s=s.replace('/^?/','&').match(re)) ? (typeof s[1] == 'undefined' ? '' : 
		decodeURIComponent(s[1])) : undefined; 
}
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}
 
