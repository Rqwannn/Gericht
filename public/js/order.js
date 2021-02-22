function btnDetail(DataId){

    $.ajax({
        url : "http://127.0.0.1:8000/Api/DetailOrder.php",
        type : "POST",
        dataType : "JSON",
        data : {
            Id : DataId
        },
        error : function(result){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href>Report A Problem?</a>'
              })
        },
        success : function(result){
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

            let setCard = `
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
                                <p>Waiting</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="textValue d-flex mt-3 mb-5">
                                <button type="submit" onclick="PayNowLink(${id_Order})">PayNow</button>
                                <button type="submit" onclick="DeleteOrderUser(${Id})">Delete Order</button>
                                <button type="submit">Pay On The Spot</button>
                            </div>
                        </div>
                    </div>
                `;

            wrapperFullInfo.innerHTML = setCard;

            const setAllOrder = document.querySelector(".wrapperOrder-Food");

            function getNumberPesanan() {
                for (let index = 0; index < setNamaPesanan.length; index++ ) {
                    $(setAllOrder).append(`
                            <option value="${setNamaPesanan[index]} X ${setJumlahPesanan[index]}">${setNamaPesanan[index]} X ${setJumlahPesanan[index]}</option>
                        `);
                }
            }

            getNumberPesanan();

            cardDetail.style.display = "block";
        }
    })
}

const closeBtn = document.querySelector(".closeBtn");

closeBtn.addEventListener("click", function(){
    const cardDetail = document.querySelector(".bgShowDetail");
    cardDetail.style.display = "none";
})

function DeleteOrderUser(Data){
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
                        }, 250);
                    },
                });
            }, 100);
        }
    });
}