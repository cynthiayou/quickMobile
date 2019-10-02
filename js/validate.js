$(document).ready(function() {
    $("#btn-login").hide();
    var u = false;
    var p = false;
    var r = false;
    var e = false;
    $("#username").blur(function(){
        var user = this.value.trim();
        u = false;
        if(user.length > 0){
            if (window.XMLHttpRequest){
                xmlhttp=new XMLHttpRequest();
            }else{
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function(){
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    $("#userError").text(xmlhttp.responseText);
                    if($("#userError").text().trim() === "OK"){
                        u = true;
                        allright();
                    }
                }
            }
            xmlhttp.open("GET","checkName.php?username="+user,true);
            xmlhttp.send();
        } else {
            $("#userError").text("Please input a username!");
        }


    })
	
	$("#key").blur(function(){
		var pass=this.value.trim();
		p = false;
	    if (pass.length >=8){
			$("#passwordError").text("OK");
			p = true;
		} else{
			$("#passwordError").text("Password must longer than 8 character!");
		}
		if(r) {
            $("#repasswordError").text("Please re-enter the right password");
            r = false;
        }
        allright();
	})
	$("#rekey").blur(function () {
	    var opass = $("#key").val().trim();
	    var repass = this.value.trim();
	    r = false;
	    if(p && opass === repass){
	        $("#repasswordError").text("OK");
	        r = true;
        } else {
            $("#repasswordError").text("Please re-enter the right password");
        }
        allright();


    })


	$("#email").blur(function(){
	    e = false;
		var email=this.value.trim();
		var Regx = new RegExp("^[a-zA-Z0-9_-]+@([a-zA-Z0-9_-]+\.)+[a-zA-Z0-9_-]+$");
		
		if (Regx.test(email)){
            if (window.XMLHttpRequest){
                xmlhttp=new XMLHttpRequest();
            }else{
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function(){
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    $("#emailError").text(xmlhttp.responseText);
                    if($("#emailError").text().trim() === "OK"){
                        e = true;
                        allright();
                    }
                }
            }
            xmlhttp.open("GET","checkEmail.php?email="+email,true);
            xmlhttp.send();
		} else{
			$("#emailError").text("Please input a right Email Address!");
		}
	})
    function allright() {
        if(u && p && r && e){
            $("#btn-login").show();
        } else {
            $("#btn-login").hide();
        }
    }
});
