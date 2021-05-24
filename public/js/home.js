$(".contenrAllMenu").owlCarousel({
    margin: 20,
    loop: true,
    autoWidth: true,
    items: 4,
    autoplay: true,
    autoplayTimeout: 5000,
});

if(JSON.parse(localStorage.getItem('Order'))){
    localStorage.removeItem('Order');
} else if(JSON.parse(localStorage.getItem('OrderTable'))){
    localStorage.removeItem('OrderTable');
}

const getDataOrder = document.querySelectorAll(".orderTrendingMenu");

for ([index, result] of getDataOrder.entries()) {
    result.addEventListener("click", function (event) {
        Swal.fire({
            title: "Are you sure?",
            text: "You will fill in further if this is the menu you ordered!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Right!",
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    "Success!",
                    "Please check the bottom menu page.",
                    "success"
                );

                setTimeout(function () {
                    const setData = {
                        Nama: event.target.dataset.order,
                        Jumlah: 1,
                        Status: event.target.dataset.status,
                    };

                    localStorage.setItem("Order", JSON.stringify(setData));
                    document.location.href = "/menu";
                }, 1500);
            }
        });
    });
}

function ConfirmPayment(){
    const idUser = document.querySelector('.idUser');
    const EmailUser = document.querySelector('.EmailUser');
    const HargaPremium = document.querySelector('.HargaPremium');
    Swal.fire({
        title: 'Are you sure?',
        text: "You will immediately be directed to the payment method!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, do it!'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url : 'http://127.0.0.1:8000/PremiumMember',
                type : 'POST',
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                dataType : 'JSON',
                data : {
                    Nama : idUser.innerHTML,
                    Email : EmailUser.innerHTML,
                    Harga : parseInt(HargaPremium.innerHTML)
                },
                success : function (result) {
                    console.log(result);
                    window.open(result.redirect_url, '_blank').focus();
                      Swal.fire({
                        title: 'Success',
                        text: "Thank You For Becoming A Premium Member..",
                        icon: 'success',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'To The Home Page',
                        cancelButtonText: 'Stay Here'
                      }).then((result) => {
                        if (result.isConfirmed) {
                           document.location.href = '/home';
                        } else if(!result.isConfirmed){
                            window.location.reload();
                        }
                      })
                },
                error : function (e) {
                    console.log(e);
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Something went wrong!",
                        footer: "<a href>If there is a problem please report it!</a>",
                    });
                }
            })
        }
    })
}