if(document.querySelector("#BookTable") != null){
    const btnTable = document.querySelector("#BookTable");
    
    btnTable.addEventListener("click", function(){
        document.location.href = "/inputdining"
    })
}

if(JSON.parse(localStorage.getItem('Order'))){
    localStorage.removeItem('Order');
  } else if(JSON.parse(localStorage.getItem('OrderTable'))){
    localStorage.removeItem('OrderTable');
  }

  function Proposal(data){
    localStorage.setItem('OrderTable', JSON.stringify(data));

    document.location.href = "http://127.0.0.1:8000/inputdining";
  }