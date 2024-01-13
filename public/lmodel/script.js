let icon1 = document.getElementById("icon1");
let menu1 = document.getElementById("menu1");
const showMenu1 = (flag) => {
    if (flag) {
        icon1.classList.toggle("rotate-180");
        menu1.classList.toggle("hidden");

    }
};
let icon2 = document.getElementById("icon2");

const showMenu2 = (flag) => {
    if (flag) {
        icon2.classList.toggle("rotate-180");
        menu2.classList.toggle("hidden");

    }
};
let Main = document.getElementById("Main");
let open = document.getElementById("open");
let close = document.getElementById("close");

const showNav = (flag) => {
    if (flag) {
        Main.classList.toggle("-translate-x-full");
        Main.classList.toggle("translate-x-0");
        open.classList.toggle("hidden");
        close.classList.toggle("hidden");
    }
};

function Menu(e) {
    let list = document.querySelector('ul');
    e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('w-screen'), list.classList.add('opacity-100'), list.classList.add('h-screen')) : (e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
}