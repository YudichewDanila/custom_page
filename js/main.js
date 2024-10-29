let styleNav = document.querySelector('.styleNav');
let btnNav = document.querySelector('.btnNav');
let backPanel = document.querySelector('.backPanel');
let exitBtn = document.querySelectorAll('.exitMethod');
let styleNav_colors = document.querySelector('.styleNav_colors');
let styleNav_fonts = document.querySelector('.styleNav_fonts');
let colorsBtn = document.querySelector('.colorsBtn');
let fontsBtn = document.querySelector('.fontsBtn');
let rangeImg = document.querySelector('.rangeImg');
let mainImg = document.querySelector('.mainImg');

rangeImg.onclick = function(e){
    console.log(e.target.value);
    mainImg.style.opacity = e.target.value / 10;
}

fontsBtn.addEventListener('click', function(event){
    styleNav_fonts.style.display = "block";
    styleNav_colors.style.display = "none";
});

colorsBtn.addEventListener('click', function(event){
    styleNav_fonts.style.display = "none";
    styleNav_colors.style.display = "block";
})



btnNav.addEventListener('click', function(event){
    styleNav.style.display = "block";
    backPanel.style.display = "block";
});
exitBtn.forEach(function(element) {
element.addEventListener('click', function(event){
    styleNav.style.display = "none";
    backPanel.style.display = "none";
});
});

$(document).ready(function () {
    $(".--bg-body").colorpicker();
    $(".--bg-header").colorpicker();
    $(".--color-btn").colorpicker();
    $(".--bg-cancel").colorpicker();
    $(".--color-mainText").colorpicker();
    $(".--color-price").colorpicker();
    $(".--bg-footer").colorpicker();
    $(".--color-footer").colorpicker();
    $(".--bg-loaderUp").colorpicker();
    $(".--bg-loaderDown").colorpicker();
});

const colorClasses = ['--bg-body', '--bg-header', '--bg-logoMega', '--color-logoMega', '--bg-icon_resolution', '--color-icon_resolution', '--bg-icon_time', '--color-icon_time', '--color-mainText', '--color-price', '--bg-footer', '--color-footer', '--bg-loaderUp', '--bg-loaderUpAfter', '--bg-loaderDown',  '--bg-btn', '--color-btn', '--bg-cancel', '--color-cancel'];

colorClasses.forEach(function(className) {
$(`.${className}`).colorpicker().on("change.color", function (event, color) {
let colorValue = $(`.${className}`).colorpicker("val");
document.documentElement.style.setProperty(className, colorValue);
});
});



