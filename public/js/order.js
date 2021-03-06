function btnDetail(DataId) {

    $.ajax({
        url: "http://127.0.0.1:8000/Api/DetailOrder.php",
        type: "POST",
        dataType: "JSON",
        data: {
            Id: DataId,
        },
        error: function (result) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: "<a href>Report A Problem?</a>",
            });
        },
        success: function (result) {
            let Id = result.Id;
            let Nama = result.Nama;
            let Email = result.Email;
            let TotalHarga = result.Total_Harga;
            let Status = result.Konfirmasi;
            let KodePemesanan = result.kode_pemesanan;
            let TanggalPesan = result.Tanggal_Pesanan;
            let Nama_Pesanan = result.Nama_Pesanan;
            let Jumlah_Pesanan = result.Jumlah_Pesanan;

            let setTanggal = TanggalPesan.split(" ");
            let getTanggal = setTanggal[0];

            let setNamaPesanan = Nama_Pesanan.split(",");
            let setJumlahPesanan = Jumlah_Pesanan.split(",");

            let id_Order = `id_order-${Id}`;

            const cardDetail = document.querySelector(".bgShowDetail");

            const wrapperFullInfo = document.querySelector(
                ".contentPaymentDetail"
            );

            let setCard = ``;

            if (Status == 1) {
                setCard = `
                <div class="row">
                    <div class="col-md-12">
                        <div class="textValue mb-3">
                            <p>Email Name</p>
                            <p>${Email}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="textValue mb-3">
                            <p>Order Name</p>
                            <p>${Nama}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="textValue mb-3">
                            <p>Order Number</p>
                            <p>${KodePemesanan}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="textValue mb-3">
                            <p>Total</p>
                            <p>$ ${TotalHarga}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="textValue mb-3">
                            <p>Date</p>
                            <p>${getTanggal}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="textValue mb-3">
                            <p>Your Order</p>
                            <select class="form-select wrapperOrder-Food" aria-label="Default select example">
                                <option selected>Click For Detail</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="textValue mb-3">
                            <p>Status</p>
                            <p class='text-success'>Paid Off</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="textValue d-flex mt-3 mb-5">
                            <button style='display:none;'></button>
                            <button type="submit" onclick="DeleteOrderUser(${Id})">Delete Order</button>
                        </div>
                    </div>
                </div>
            `;
            } else if (Status == 0) {
                setCard = `
                <div class="row">
                    <div class="col-md-12">
                        <div class="textValue mb-3">
                            <p>Email Name</p>
                            <p>${Email}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="textValue mb-3">
                            <p>Order Name</p>
                            <p>${Nama}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="textValue mb-3">
                            <p>Order Number</p>
                            <p>${KodePemesanan}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="textValue mb-3">
                            <p>Total</p>
                            <p>$ ${TotalHarga}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="textValue mb-3">
                            <p>Date</p>
                            <p>${getTanggal}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="textValue mb-3">
                            <p>Your Order</p>
                            <select class="form-select wrapperOrder-Food" aria-label="Default select example">
                                <option selected>Click For Detail</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="textValue mb-3">
                            <p>Status</p>
                            <p class='text-warning'>Waiting</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="textValue d-flex mt-3 mb-5">
                            <button type="submit" onclick="PayNowLink(event, ${Id})">PayNow</button>
                            <button type="submit" onclick="DeleteOrderUser(${Id})">Delete Order</button>
                            <button type="submit" onclick="PayOnTheSpot(event, ${Id})">Pay On The Spot</button>
                        </div>
                    </div>
                </div>
            `;
            }

            wrapperFullInfo.innerHTML = setCard;

            const setAllOrder = document.querySelector(".wrapperOrder-Food");

            function getNumberPesanan() {
                for (let index = 0; index < setNamaPesanan.length; index++) {
                    $(setAllOrder).append(`
                            <option value="${setNamaPesanan[index]} X ${setJumlahPesanan[index]}">${setNamaPesanan[index]} - ${setJumlahPesanan[index]}</option>
                        `);
                }
            }

            getNumberPesanan();

            cardDetail.style.display = "block";
        },
    });
}

const closeBtn = document.querySelector(".closeBtn");

closeBtn.addEventListener("click", function () {
    const cardDetail = document.querySelector(".bgShowDetail");
    cardDetail.style.display = "none";
});

function DeleteOrderUser(Data) {
    Swal.fire({
        title: "Are you sure?",
        text: "You will delete it permanently!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            setTimeout(function () {
                $.ajax({
                    url: "http://127.0.0.1:8000/Api/DeleteOrder.php",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        id: Data,
                    },
                    error: function () {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong!",
                            footer:
                                "<a href>Please report if there is a problem?</a>",
                        });
                    },
                    success: function () {
                        Swal.fire(
                            "Deleted!",
                            "Your order has been deleted.",
                            "success"
                        );
                        setTimeout(function () {
                            window.location.reload();
                        }, 300);
                    },
                });
            }, 100);
        }
    });
}

function PayConfirmation(Data) {
    $.ajax({
        url: "http://127.0.0.1:8000/Api/ConfirmProses.php",
        type: "POST",
        dataType: "JSON",
        data: {
            Id: Data,
        },
        error: function () {},
        success: function () {
            Swal.fire("Success", "Thank you for ordering", "success");
            setTimeout(function () {
                window.location.reload();
            }, 300);
        },
    });
}

function PayOnTheSpot(event, Data) {
    const getInput = event.target.parentNode.parentNode.parentNode.childNodes[11].childNodes[1].querySelector('.wrapperOrder-Food');
    let namaPesanan = "";
    let jmlPesanan = "";

    for(let index = 0; index < getInput.options.length; index++){
        if(index > 0){
            const getData = getInput.options[index].innerHTML;
            const pisahData = getData.split("-");
            const setName = pisahData[0].trim(" ");
            const setJml = pisahData[1].trim(" ");

            namaPesanan += `${setName},`;
            jmlPesanan += `${setJml},`;
        }
    }

    $.ajax({
        url: "http://127.0.0.1:8000/Api/PayProses.php",
        type: "POST",
        dataType: "JSON",
        data: {
            Id: Data,
            nama : namaPesanan,
            jml : jmlPesanan
        },
        error: function (e) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: "<a href>If there is a problem please report it!</a>",
            });
        },
        success: function (result) {
            if(result.status == false){
                Swal.fire({
                    title: 'Oppss.',
                    text: `${result.massage}`,
                    icon: 'error',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Close'
                  }).then((result) => {
                    if (result.isConfirmed) {
                    }
                  })
            } else {
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener("mouseenter", Swal.stopTimer);
                        toast.addEventListener("mouseleave", Swal.resumeTimer);
                    },
                });
                Toast.fire({
                    icon: "success",
                    title: "The Order Has Been Made",
                });
    
                setTimeout(function () {
                    document.location.href = "/order";
                }, 2200);
            }
        },
    });
}

function PayRestaurant(event, Data) {
    const getInput = event.target.parentNode.parentNode.parentNode.childNodes[5].childNodes[1].querySelector('.NameOfTable');

    $.ajax({
        url: "http://127.0.0.1:8000/Api/PayTableProses.php",
        type: "POST",
        dataType: "JSON",
        data: {
            Id: Data,
            namaTable : getInput.innerHTML
        },
        error: function (e) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: "<a href>If there is a problem please report it!</a>",
            });
        },
        success: function (result) {
            if(result.status == false){
                Swal.fire({
                    title: 'Oppss.',
                    text: `${result.massage}`,
                    icon: 'error',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Close'
                  }).then((result) => {
                    if (result.isConfirmed) {
                    }
                  })
                } else {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener("mouseenter", Swal.stopTimer);
                            toast.addEventListener("mouseleave", Swal.resumeTimer);
                        },
                    });

                    Swal.fire({
                        title: 'Success.',
                        text: `The Order Has Been Made, the order will be forfeited in three hours`,
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Close'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function () {
                                window.location.reload();
                            }, 2200);
                        }
                    })
                }
        },
    });
}

function DeleteTableInfo(Data) {
    Swal.fire({
        title: "Are you sure?",
        text: "You will delete history forever!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire("Deleted!", "has been deleted.", "success");

            setTimeout(function () {
                document.location.href = `/DeleteTable/${Data}`;
            }, 350);
        }
    });
}

$(".WrapperInfoOrder").owlCarousel({
    margin: 20,
    loop: true,
    autoWidth: true,
    items: 4,
    autoplay: true,
    autoplayTimeout: 5000,
});

$(".WrapperInfoTable").owlCarousel({
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

function PayNowLink(event, Data) {
    const getInput = event.target.parentNode.parentNode.parentNode.childNodes[11].childNodes[1].querySelector('.wrapperOrder-Food');
    let namaPesanan = "";
    let jmlPesanan = "";

    for(let index = 0; index < getInput.options.length; index++){
        if(index > 0){
            const getData = getInput.options[index].innerHTML;
            const pisahData = getData.split("-");
            const setName = pisahData[0].trim(" ");
            const setJml = pisahData[1].trim(" ");

            namaPesanan += `${setName},`;
            jmlPesanan += `${setJml},`;
        }
    }

    $.ajax({
        url: "http://127.0.0.1:8000/midtrans",
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        dataType: "JSON",
        data: {
            id: Data,
            nama : namaPesanan,
            jml : jmlPesanan
        },
        error: function (e) {
            console.log(e);
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: "<a href>If there is a problem please report it!</a>",
            });
        },
        success: function (result) {
            if(result.status == false){
                Swal.fire({
                    title: 'Oppss.',
                    text: `${result.massage}`,
                    icon: 'error',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Close'
                  }).then((result) => {
                    if (result.isConfirmed) {
                    }
                  })
            } else {
                window.open(result.redirect_url, '_blank').focus();
                Swal.fire({
                    title: 'Success',
                    text: "Thank you For Completing The Payment.",
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Close'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.reload();
                    }
                  })
            }
        },
    })
}

function PayTableNow(event, data){
    const getInput = event.target.parentNode.parentNode.parentNode.childNodes[5].childNodes[1].querySelector('.NameOfTable');
    const idTable = data;
    Swal.fire({
        title: 'Are you sure?',
        text: "You will go directly to the payment menu!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, do it!'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url : 'http://127.0.0.1:8000/TablePayment',
                type : "POST",
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                dataType : 'JSON',
                data : {
                    id : idTable,
                    namaTable : getInput.innerHTML
                },
                success : function (result) {
                    if(result.status == false){
                        Swal.fire({
                            title: 'Oppss.',
                            text: `${result.massage}`,
                            icon: 'error',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Close'
                          }).then((result) => {
                            if (result.isConfirmed) {
                            }
                          })
                        } else {
                            window.open(result.redirect_url, '_blank').focus();
                            Swal.fire({
                                title: 'Success',
                                text: "Thank you For Completing The Payment.",
                                icon: 'success',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Close'
                              }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.reload();
                                }
                              })
                        }
                },
                error : function (e){
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

const cardPageOrder = document.querySelectorAll('.cardPage-Order');
const WrapperOverflow = document.querySelector('.WrapperOverflow');

if(cardPageOrder.length < 7){
    WrapperOverflow.style.height = 'auto';
    WrapperOverflow.style.paddingBottom = '20px';
}
