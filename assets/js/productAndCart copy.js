
const countProduct = document.querySelector("#countProduct");
const total = document.querySelector("#total");
const tickAll = document.querySelector("#tickAll");

for (let i = 0; i < countProduct.value; i++) {

    const id = i + 1;
    const product = document.querySelector("#product" + id);
    const price = product.querySelector("#price");
    const countProduct = product.querySelector("#countProduct");
    const tick = product.querySelector("#tick");
    const totalPriceProduct = product.querySelector("#totalPriceProduct");
    countProduct.addEventListener("input", () => {
        totalPriceProduct.innerHTML = (countProduct.value * price.innerHTML.slice(0, -3)) + " VNĐ";
        LoadTotal();
    })
    tick.onchange = function(){
        LoadTotal();
    }
}
tickAll.onchange = function()
{
        for (let i = 0; i < countProduct.value; i++) {

            const id = i + 1;
            const product = document.querySelector("#product" + id);
            const tick = product.querySelector("#tick");
            tick.checked = tickAll.checked;
        }
        LoadTotal();
}

function LoadTotal() {
    let t = 0;
    for (let i = 0; i < countProduct.value; i++) {

        const id = i + 1;
        const product = document.querySelector("#product" + id);
        const totalPriceProduct = product.querySelector("#totalPriceProduct");
        const tick = product.querySelector("#tick");
        if (tick.checked) 
        {
            t += parseInt((totalPriceProduct.innerHTML.slice(0, -3)));
        }
        
    }
    total.innerHTML = t+" VNĐ";
}
function CheckCountProduct(){
    for (let i = 0; i < countProduct.value; i++) {
        const id = i + 1;
        const product = document.querySelector("#product" + id);
        const tick = product.querySelector("#tick");
        if (tick.checked) 
        {
            return true;
        }
    }
    return false;
}