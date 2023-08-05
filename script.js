//スクロールによるfade-inの関数

const target = document.querySelectorAll(".fade-in");
window.addEventListener("scroll", () => {
    for(let i = 0; i < target.length; i++){
        const distance = target[i].getBoundingClientRect().top; //現在の画面左上から要素までの距離
        const scroll = document.documentElement.scrollTop; //スクロール位置の取得
        const sum = distance + scroll;
        const windowHeight = window.innerHeight;
        if(scroll > sum - windowHeight + 10){
            target[i].classList.add("fade-in-active");
        }
    }
});

//worksの詳細を載せたモーダルに関する関数

const mask2 = document.querySelector("#mask2");
const work = document.querySelectorAll(".work-img");
const detail = document.querySelectorAll(".detail");
const body = document. querySelector("body");


for(let i = 0; i < detail.length; i++){
    work[i].addEventListener("click", () => {
        mask2.classList.remove("hide");
        detail[i].classList.remove("hide");
        body.classList.add("lock");            //モーダルが出てきたときに背景をスクロールできなくするため、bodyにlockクラスを追加
    });
}

mask2.addEventListener("click", () => {
    mask2.classList.add("hide");
    for(let i = 0; i < detail.length; i++){
        detail[i].classList.add("hide");    //maskをクリックすると、全てのdetailクラスに上から順にhideクラスをつけていく。重複した場合は無視される。
        body.classList.remove("lock");
        bars.classList.remove("hide");
    }
});

//ハンバーガーメニューに関する関数

const mask1 = document.querySelector("#mask1");
const bars = document.querySelector("#bars");
const xmark = document.querySelector("#xmark-icon");
const menuList = document.querySelector("#menu-list");
const menuListLi = document.querySelectorAll(".menu-list-li");
const windowWidth = window.innerWidth;



bars.addEventListener("click", () => {
    mask1.classList.remove("hide");
    menuList.classList.replace("hide", "open");
    bars.classList.add("hide");
    xmark.classList.remove("hide");  
});

for(let i = 0; i < menuListLi.length; i++){
    menuListLi[i].addEventListener("click", () => {
        mask1.classList.add("hide");
        menuList.classList.replace("open", "hide");
        bars.classList.remove("hide");
        xmark.classList.add("hide");
    });
}

xmark.addEventListener("click", () => {
    mask1.classList.add("hide");
    menuList.classList.replace("open", "hide");
    bars.classList.remove("hide");
    xmark.classList.add("hide");
});