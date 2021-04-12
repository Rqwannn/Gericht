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

            if(Status == 1){
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
            } else if(Status == 0){
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
                            <button type="submit" onclick="PayNowLink(${Id})">PayNow</button>
                            <button type="submit" onclick="DeleteOrderUser(${Id})">Delete Order</button>
                            <button type="submit" onclick="PayOnTheSpot(${Id})">Pay On The Spot</button>
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
                            <option value="${setNamaPesanan[index]} X ${setJumlahPesanan[index]}">${setNamaPesanan[index]} X ${setJumlahPesanan[index]}</option>
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

function PayOnTheSpot(Data){
    $.ajax({
        url : "http://127.0.0.1:8000/Api/PayProses.php",
        type : "POST",
        dataType : "JSON",
        data : {
            Id : Data
        },
        error : function (){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href>If there is a problem please report it!</a>'
              })
        },
        success : function (){
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
              
              Toast.fire({
                icon: 'success',
                title: 'The Order Has Been Made'
              })

            setTimeout(function(){
                document.location.href ="/order";
            }, 2200)
        }
    })
}

function PayRestaurant(Data){
    $.ajax({
        url : "http://127.0.0.1:8000/Api/PayTableProses.php",
        type : "POST",
        dataType : "JSON",
        data : {
            Id : Data
        },
        error : function (){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href>If there is a problem please report it!</a>'
              })
        },
        success : function (){
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
              
              Toast.fire({
                icon: 'success',
                title: 'The Order Has Been Made'
              })

            setTimeout(function(){
                window.location.reload();
            }, 2200)
        }
    })
}

function DeleteTableInfo(Data){
    Swal.fire({
        title: 'Are you sure?',
        text: "You will delete history forever!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'has been deleted.',
            'success'
          )

          setTimeout(function(){
            document.location.href = `/DeleteTable/${Data}`;
          }, 350)
        }
      })
}

function PayNowLink(data){
    document.location.href = `/order/${data}`;
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
  }