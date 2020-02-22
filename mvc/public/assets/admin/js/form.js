function validateForm() {    
    var invalid = true;
    var productNameElement = $("#product-name");  
    var productNameValue =  productNameElement.val(); 
    var productPriceElement = $("#product-price");
    var productPriceValue = productPriceElement.val();    
    var errorArray = [];
    var countError = 0;

    var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
    if (productNameValue.length < 1 || format.test(productNameValue)) {        
        invalid = false;
        errorArray[countError++] = "Tên sản phẩm không hợp lệ (Không chứa ký tự đặc biệt)";        
    }
    convertStringToLink(productNameValue);
    
    if (!validateUnsignedInteger(productPriceValue)) {
        invalid = false;
        errorArray[countError++] = "Giá sản phẩm không hợp lệ (Giá là đơn vị số dương)";
    }

    if (!validateUnsignedInteger(productPriceValue)) {
        invalid = false;
        errorArray[countError++] = "Giá sản phẩm không hợp lệ (Giá là đơn vị số dương)";
    }
    
    displayErrorList(errorArray);
    return invalid;
}


function displayErrorList(errorArray) {
    $("#error-message-list").empty();
    for (var i = 0; i < errorArray.length; i++) {
        $("#error-message-list").append("<li style='color:red'>" + errorArray[i] + "</li>");    
    }    
}

function validateText(fieldValue) {
    var invalid = true;
    var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
    if(fieldValue.length < 1 || format.test(fieldValue)) {
        invalid = false;
    }
    return invalid;
}

function validateUnsignedInteger(fieldValue) {
    var invalid = true;    
    fieldValue = parseInt(fieldValue);    
    if(!Number.isInteger(fieldValue) || fieldValue < 0) {    
        invalid = false;
    }        
    return invalid;
}

function convertStringToLink()
{
    var productName = document.getElementById('product-name').value;
    productName = changeToNormalString(productName);    
    productName = productName.replace(/ /g, '-');    
    var productLink = document.getElementById('product-link');
    productLink.value = productName;    
}



function changeToNormalString(str) {    
    str = str.toLowerCase();
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a"); 
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e"); 
    str = str.replace(/ì|í|ị|ỉ|ĩ/g,"i"); 
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); 
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u"); 
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y"); 
    str = str.replace(/đ/g,"d");
    str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g," ");
    str = str.replace(/ + /g," ");
    str = str.trim(); 
    return str;
}