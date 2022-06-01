
const buttonPreImage = document.querySelector("#buttonPreImage");
const buttonNextImage = document.querySelector("#buttonNextImage");
const countImage = document.querySelector("#countImage");
const imageProduct = document.querySelector("#imageProduct");

buttonPreImage.addEventListener("click", () => {
    let index = document.querySelector("#indexImage");
    if (parseInt(index.innerHTML)<=1) {
        return;
    } else
    {
        index.innerHTML = parseInt(index.innerHTML)-1;
        const indexImage = document.querySelector("#image"+index.innerHTML);
        imageProduct.setAttribute('src',indexImage.value);
    }
})
buttonNextImage.addEventListener("click", () => {
    let index = document.querySelector("#indexImage");
    if (parseInt(index.innerHTML)>=parseInt(countImage.innerHTML)) {
        return;
    } else
    {
        index.innerHTML = parseInt(index.innerHTML)+1;
        const indexImage = document.querySelector("#image"+index.innerHTML);
        imageProduct.setAttribute('src',indexImage.value);
    }
})