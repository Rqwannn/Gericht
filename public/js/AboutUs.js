if(JSON.parse(localStorage.getItem('Order'))){
  localStorage.removeItem('Order');
} else if(JSON.parse(localStorage.getItem('OrderTable'))){
  localStorage.removeItem('OrderTable');
}