const NameFood = [
    "Fettuccine Alfredo",
    "Linguine Alle Vongole",
    "Chicken Saltimbocca",
    "Shrimp Fra Diavolo",
    "Bouillabasse",
    "Fettuccine Alfredo",
];
const ImgFood = [
    "fettuccine-alfredo.jpg",
    "Linguine-alle-vongole.jpg",
    "chicken-saltimbocca.jpg",
    "Shrimp-Fra-Diavolo.jpg",
    "Bouillabasse.jpg",
    "fettuccine-alfredo.jpg",
];
const HargaFood = ["57", "64", "77", "72", "66", "69", "57"];

const Wrapper = document.querySelector(".slide-trending-food");

let CardArray = [];

function CardFood(Name, Img, Harga) {
    return `<div class="col-md-3">
    <div class="card-trending-food d-flex justify-content-center flex-column mb-3">
        <div class="header-trending-food d-flex justify-content-center mt-3">
            <img src="http://127.0.0.1:8000/img/${Img}" class="rounded-circle" alt="">
        </div>
        <div class="text-left content-trending-food mt-4">
            <h5 class="text-white fw-bold" style="font-size: 17px;">${Name}</h5>
            <h5 class="text-white mt-3" style="font-size: 15px; line-height: 27px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
        </div>
        <div class="d-flex justify-content-between mb-2 mt-3 text-white harga-trending-food">
            <h5>$${Harga}</h5>
            <div class="d-flex justify-content-between" style="cursor: pointer;">
                <i class="fas fa-plus mt-1" style="transform: translateX(-60%)"></i>
                <h5>Add To Cart</h5>
            </div>
        </div>
    </div>
</div>`;
}

let cekValue = true;

let noName = 0;
let noImg = 0;
let noHarga = 0;

while (cekValue) {
    if (noName == 6 && noImg == 6 && noHarga == 6) {
        cekValue == false;
        break;
    } else {
        let setCard = CardFood(
            NameFood[noName],
            ImgFood[noImg],
            HargaFood[noHarga]
        );

        CardArray.push(setCard);

        let JoinArray = CardArray.join("");

        Wrapper.innerHTML = JoinArray;

        noName++;
        noImg++;
        noHarga++;
    }
}

// Slide Show

const IconRight = document.querySelector(".slide-food-right");
const IconLeft = document.querySelector(".slide-food-left");

let IndexSlide = 0;

function ClickRight() {
    if (IndexSlide >= 0) {
        const CardSlideFood = document.querySelectorAll(".card-trending-food");
        [...CardSlideFood].forEach((value, index) => {
            value.style.transform = "translateX(-112.5%)";
        });

        if (IndexSlide == 0) {
            CardArray.shift();

            IndexSlide = 1;

            let setCard = CardFood(
                NameFood[IndexSlide],
                ImgFood[IndexSlide],
                HargaFood[IndexSlide]
            );

            CardArray.push(setCard);

            IndexSlide++;

            let JoinArray = CardArray.join("");

            setTimeout(() => {
                Wrapper.innerHTML = JoinArray;
            }, 400);
        } else if (IndexSlide == 5) {
            CardArray.shift();

            IndexSlide = 0;

            let setCard = CardFood(
                NameFood[IndexSlide],
                ImgFood[IndexSlide],
                HargaFood[IndexSlide]
            );

            IndexSlide++;

            CardArray.push(setCard);

            let JoinArray = CardArray.join("");

            setTimeout(() => {
                Wrapper.innerHTML = JoinArray;
            }, 400);
        } else {
            CardArray.shift();

            let setCard = CardFood(
                NameFood[IndexSlide],
                ImgFood[IndexSlide],
                HargaFood[IndexSlide]
            );

            IndexSlide++;

            CardArray.push(setCard);

            let JoinArray = CardArray.join("");

            setTimeout(() => {
                Wrapper.innerHTML = JoinArray;
            }, 400);
        }
    }
}

function ClickLeft() {
    if (IndexSlide <= 4) {
        const CardSlideFood = document.querySelectorAll(".card-trending-food");
        [...CardSlideFood].forEach((value, index) => {
            value.style.transform = "translateX(112.5%)";
        });

        if (IndexSlide == 0) {
            CardArray.pop();

            IndexSlide = 5;

            IndexSlide--;

            let setCard = CardFood(
                NameFood[IndexSlide],
                ImgFood[IndexSlide],
                HargaFood[IndexSlide]
            );
            CardArray.unshift(setCard);

            let JoinArray = CardArray.join("");

            setTimeout(() => {
                Wrapper.innerHTML = JoinArray;
            }, 400);
        } else {
            CardArray.pop();

            IndexSlide--;

            let setCard = CardFood(
                NameFood[IndexSlide],
                ImgFood[IndexSlide],
                HargaFood[IndexSlide]
            );
            CardArray.unshift(setCard);

            let JoinArray = CardArray.join("");

            setTimeout(() => {
                Wrapper.innerHTML = JoinArray;
            }, 400);
        }
    }
}
