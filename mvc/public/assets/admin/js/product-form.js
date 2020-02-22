document.writeln(
    '<script src="' +
    window.location.protocol +
    '//' + window.location.hostname +
    '/mvc/public/assets/admin/js/form-setting/validation-rule.js"></script>'
);

function checkProductFormValueBeforeSubmit()
{    
    var productName = $('#product-name');
    var link = $('#product-link');
    var productPrice = $('#product-price');
    var productSalePrice = $('#product-sale-price');
    var inventoryQuantity = $('#inventory-quantity');
    var productCategory = $('#product-category');
    var productBrand = $('#product-brand');    
    var productStatus = $('#product-status');
    var productPriority = $('#product-priority');

    //Non check CKEDITOR value
    var descritionValue = CKEDITOR.instances.description.getData();
    var contentValue = CKEDITOR.instances.content.getData();


    var productNameInputCheck = new InputCheck(productName, 'name');    
    var linkInputCheck = new InputCheck(link, 'link');
    var productPriceInputCheck = new InputCheck(productPrice, 'price');
    var productSalePriceInputCheck = new InputCheck(productSalePrice, 'price');
    var inventoryQuantityInputCheck = new InputCheck(inventoryQuantity, 'inventory');
    var productCategoryInputCheck = new InputCheck(productCategory, 'type_id');
    var productBrandInputCheck = new InputCheck(productBrand, 'type_id');
    var productStatusInputCheck = new InputCheck(productStatus, 'type_id');
    var productPriorityInputCheck = new InputCheck(productPriority, 'type_id');

    productNameInputCheck.publicSetErrorMessage('productName error');
    linkInputCheck.publicSetErrorMessage('link');
    productPriceInputCheck.publicSetErrorMessage('price');
    productSalePriceInputCheck.publicSetErrorMessage('price');
    inventoryQuantityInputCheck.publicSetErrorMessage('inventory');
    productCategoryInputCheck.publicSetErrorMessage('category');
    productBrandInputCheck.publicSetErrorMessage('brand');
    productStatusInputCheck.publicSetErrorMessage('status');
    productPriorityInputCheck.publicSetErrorMessage('priority');

    var inputCheckArray = [
        productNameInputCheck,
        linkInputCheck,
        productPriceInputCheck,
        productSalePriceInputCheck,
        inventoryQuantityInputCheck,
        productCategoryInputCheck,
        productBrandInputCheck,
        productStatusInputCheck,
        productPriorityInputCheck
    ];     

    var validForm = false;
    validForm = checkValidForm(inputCheckArray);

    console.log('Description:'+ descritionValue);
    console.log('Content:'+ contentValue);

    if (validForm == true) {
        $.ajax({
            url: window.location.protocol + '//' + window.location.hostname + '/admin/product/insertproduct',
            data: {
    
            },
            type: 'POST',
            success: function(rs) {
                console.log('AJAX:'+ rs);
                if (rs == '1') {
                    alert('Them thanh cong');
                } else {
                    alert('Them that bai');
                }
            },
            error: function(e) {
                console.log(e.status + " - " + e.statusText);
                //$(".content-grids").html(e.responseText);
            }
    
        });
    }    
    return false;
}