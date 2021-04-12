if(document.querySelector("#BookTable") != null){
    const btnTable = document.querySelector("#BookTable");
    
    btnTable.addEventListener("click", function(){
        document.location.href = "/inputdining"
    })
}

if(JSON.parse(localStorage.getItem('Order'))){
    localStorage.removeItem('Order');
  }