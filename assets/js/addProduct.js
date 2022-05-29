

const addColorButton = document.querySelector('#addColorButton');
const addColorInput = document.querySelector('#addColorInput');
const listColor = document.querySelector('#listColor')
const indexColor = document.querySelector('#indexColor')

addColorButton.addEventListener('click', () => {
    document.querySelector('#typeButton').value = "add";
    if (addColorInput.value != "") {
        const li = document.createElement('div');
        const p = document.createElement('p');
        const buttonDelete = document.createElement('button');
        const i = document.createElement('i');

        p.innerHTML = addColorInput.value;
        p.className = "add__type-name";
        li.appendChild(p);


        buttonDelete.className = "add__type-delete";
        buttonDelete.addEventListener('click', () => {
            listColor.removeChild(li);
            indexColor.value--;
        })
        i.className = "fa-solid fa-xmark";
        buttonDelete.appendChild(i);

        li.appendChild(buttonDelete);


        li.className = "add__type-item";
        indexColor.value++;
        li.setAttribute('name',"color" + indexColor.value);
        listColor.appendChild(li);
        addColorInput.value = "";
    }
})

const listImage = document.querySelector('#listImage');
const indexImage = document.querySelector('#indexImage')

const image_input = document.querySelector("#image-input");
image_input.addEventListener("change", function () {
    for (i = 0; i < this.files.length; i++) {
        if (!this.files[i].type.match("image")) {
            continue;
        }
        const reader = new FileReader();
        const hidenURL = document.createElement('input');
        reader.addEventListener("load", () => {
            const uploaded_image = reader.result;
            const image = document.createElement('img');
            const buttonDelete = document.createElement('button');
            const i = document.createElement('i');
            const div = document.createElement('div');
           
            image.src = uploaded_image;
            image.className = "add__img-image";
            hidenURL.type = 'hidden';
            hidenURL.setAttribute('name',"image"+indexImage.value);

            buttonDelete.className = "add__img-delete";
            buttonDelete.addEventListener('click', () => {
                listImage.removeChild(div);
                indexImage.value--;
            })
            i.className = "fa-solid fa-xmark";
            buttonDelete.appendChild(i);

            div.appendChild(image);
            div.appendChild(buttonDelete);
            div.appendChild(hidenURL);


            div.className = "add__img-item";
            indexImage.value++;
            document.querySelector('#listImage').appendChild(div);
        });
        hidenURL.value = this.files[i]['name'];
        reader.readAsDataURL(this.files[i]);

    }
});

function IsSubmit() {
    const typeButton = document.querySelector('#typeButton').value;
    let kt = true;
    if (typeButton != "submit")
        return false;
    let nameProduct = document.forms["form"]["nameProduct"].value;
    let price= document.forms["form"]["price"].value;
    let detail = document.forms["form"]["detail"].value;
    
    if (nameProduct==="") {
        kt = false;
        alert("Please enter");
        document.forms["form"]["nameProduct"].style.border = "1px solid red";
    }
    if (price==="") {
        kt = false;
        document.forms["form"]["price"].style.border = "1px solid red";
    }
    if (detail==="") {
        kt = false;
        document.forms["form"]["detail"].style.border = "1px solid red";
    }
    if (!kt)
    {
        scroll(0,0);
    }
    return kt;
}

const submitButton = document.querySelector('#submitButton');

submitButton.onclick = function () {
    document.querySelector('#typeButton').value = "submit";
}


const cancelButton = document.querySelector('#cancelButton');

cancelButton.addEventListener("click", () => {
    document.querySelector('#typeButton').value = "cancel";
})
