$(document).ready(function() {
    getCart();
})
function getCart(){
    if (window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }else{
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            $("#products").html(xmlhttp.responseText);
            $("input:text").change(function () {
                var number = this.value;
                var product_id = this.id;
                updateCart(number, product_id);
            })
            $("button.btn-warning").click(function () {
                var product_id = this.id;
                var number = 0;
                updateCart(number, product_id);
            })
        }
    }
    xmlhttp.open("GET","cartDetail.php",true);
    xmlhttp.send();
}
function updateCart(number, product_id) {
    if (window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }else{
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            alert(xmlhttp.responseText);
            getCart();
        }
    }
    xmlhttp.open("GET","updateCart.php?product_id="+product_id+"&prod_num="+number,true);
    xmlhttp.send();
}