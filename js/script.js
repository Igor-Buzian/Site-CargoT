function show_window(){
    document.getElementsByClassName('open_popup')[0].style.display = "block";
}

document.getElementsByClassName('popup_close')[0].onclick = function(){
    document.getElementsByClassName('open_popup')[0].style.display = "none";
}

function show_schedule(){
    document.getElementsByClassName('schedule')[0].style.display = "block";
}

document.getElementsByClassName('cancel_schedule')[0].onclick = function(){
    document.getElementsByClassName('schedule')[0].style.display = "none";
}


  



$(document).ready(function(){
    $(".showPrice").click(function(){

        let hiddenInfo = $(this).siblings("div.trash2").children("span");

        if($(this).text() != "« Скрыть"){
            hiddenInfo.css("display", "inline");
            $(this).text("« Скрыть");
        }
        else {
            hiddenInfo.css("display", "none");
            $(this).text("Показать  »");
        }
    })

})




const hamb = document.querySelector("#hamb");
const popup = document.querySelector("#popup");
const body = document.body;
 
// Клонируем меню, чтобы задать свои стили для мобильной версии
const menu = document.querySelector("#menu").cloneNode(1);
 
// При клике на иконку hamb вызываем ф-ию hambHandler
hamb.addEventListener("click", hambHandler);
 
// Выполняем действия при клике ..
function hambHandler(e) {
  e.preventDefault();
  // Переключаем стили элементов при клике
  popup.classList.toggle("open");
  hamb.classList.toggle("active");
  body.classList.toggle("noscroll");
  renderPopup();
}
 
// Здесь мы рендерим элементы в наш попап
function renderPopup() {
  popup.appendChild(menu);
}
 
// Код для закрытия меню при нажатии на ссылку
const links = Array.from(menu.children);
 
// Для каждого элемента меню при клике вызываем ф-ию
links.forEach((link) => {
  link.addEventListener("click", closeOnClick);
});
 
// Закрытие попапа при клике на меню
function closeOnClick() {
  popup.classList.remove("open");
  hamb.classList.remove("active");
  body.classList.remove("noscroll");
}