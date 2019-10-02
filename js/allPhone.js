$(document).ready(function() {
    var search = "";
    var filter = "";
    var page = "1";
    getPhone(search,filter,page);
    $("#btn-login").click(function () {
        filter = $("#filter").val();
        getPhone(search,filter,page);
    })
    $("#search").click(function () {
        search = $("#productSearch").val();
        getPhone(search,filter,page);
    })
})
function getPhone(search, filter, page) {
    if (window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }else{
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            $("#allPhone").html(xmlhttp.responseText);
            $("#currentPage .pageIndex").click(function () {
                page = this.value;
                getPhone(search,filter,page);
            })
        }
    }
    xmlhttp.open("GET","allPhone.php?search="+search+"&filter="+filter+"&page="+page,true);
    xmlhttp.send();
}