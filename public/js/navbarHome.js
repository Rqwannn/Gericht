const idUser = document.querySelector(".idUser");
const WrapperAllOrder = document.querySelector(".infoAllOrder div");

if(WrapperAllOrder != null){
    $.ajax({
        url : "http://127.0.0.1:8000/Api/GetAllOrder.php",
        type : "POST",
        dataType : "JSON",
        data : {
            User : idUser.innerHTML
        },
        error : function(){
            alert("gagal")
        },
        success : function(result){
            WrapperAllOrder.innerHTML = result.setTotal;
        }
    })
}