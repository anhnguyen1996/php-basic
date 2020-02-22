
function checkProductFormValueBeforeSubmit()
{
    var productName = $('#product-name').val();
    var link = $('#product-link').val();
    var productPrice = $('#product-price').val();
    var productSalePrice = $('#product-sale-price').val();
    var inventoryQuantity = $('#inventory-quantity').val();
    var productCategory = $('#product-category').val();
    var productBrand = $('#product-brand').val();    
    var productStatus = $('#product-status').val();
    var productPriority = $('#product-priority').val();
    var descrition = CKEDITOR.instances.description.getData();
    var content = CKEDITOR.instances.content.getData();
    
    
    var flagProductName = checkInput('name', productName);
    var flagLink = checkInput('link', link);
    var flagProductPrice = checkInput('price', productPrice);
    var flagProductSalePrice = checkInput('price', productSalePrice);
    var flagInventoryQuantity = checkInput('inventory', inventoryQuantity);
    var flagProductCategory = checkInput('type_id', productCategory);    
    var flagProductBrand = checkInput('type_id', productBrand);
    var flagProductStatus = checkInput('type_id', productStatus);
    var flagProductPriority = checkInput('type_id', productPriority);

    var flagArray = [
        flagProductName,
        flagLink,
        flagProductPrice,
        flagProductSalePrice,
        flagInventoryQuantity,
        flagProductCategory,
        flagProductBrand,
        flagProductStatus,
        flagProductPriority
    ];

    var invalid = false;
    var countTrueFlag = 0;
    var flagArrayLength = flagArray.length;
    for (var i = 0; i < flagArrayLength; i++) {
        if (flagArray[i] == true) countTrueFlag++;        
    }
    if(countTrueFlag == flagArrayLength) invalid = true;
    console.log('Description:'+ descrition);
    console.log('Content:'+ content);
    console.log('INVALID:' + invalid);
    if (invalid == true) {
        $.ajax({
            url: window.location.protocol + '//' + window.location.hostname + '/admin/product/insertproduct',
            data: {
    
            },
            type: 'POST',
            success: function(rs) {
                console.log('AJAX:'+ rs);
            },
            error: function(e) {
                console.log(e.status + " - " + e.statusText);
                //$(".content-grids").html(e.responseText);
            }
    
        });
    }    
    return false;
}

function checkInput(type, value)
{
    var invalid = false;
    var pattern = null;
    switch(type) {
        case 'name':                        
            pattern = /^[a-zA-Z0-9\ ]+$/g;
            if (value.search(pattern) == 0) {
                invalid = true;
            }            
            break;
        case 'link':                       
            pattern = /^[^\W_]+(\-[^\W_]+)*$/g;
            if (value.search(pattern) == 0) {
                invalid = true;
            }            
            break;
        case 'price':
            pattern = /^[1-2]*[0-9]{1,9}$/g;
            if (value.search(pattern) == 0) {
                invalid = true;
            }
            break;
        case 'inventory':
            pattern = /^[1-2]*[0-9]{1,9}$/g;
            if (value.search(pattern) == 0) {
                invalid = true;
            }
            break;
        case 'type_id':
            pattern = /^[1-2]*[0-9]{1,9}$/g;
            if (value.search(pattern) == 0) {
                invalid = true;
            }
            break;            
        default:
            invalid = false;
            break;
    }
    console.log(value);
    console.log(invalid);
    return invalid;
}

function convertStringToLink(element)
{
    value = element.value;    
    value = changeToNormalString(value);    
    value = value.replace(/\ /g, '-');
    $('#product-link').val(value);    
    return value;    
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