class InputCheck extends ValidationRule {

    constructor(inputElement, checkType) {
        super();
        this.inputElement = inputElement;
        this.checkType = checkType;
        this.errorMessage = '';
        this.valid = false;
    }

    publicSetErrorMessage(errorMessage) {
        this.errorMessage = errorMessage;
    }

    publicCheckValid() {
        this.valid = super.protectedCheckInput(this.checkType, this.inputElement.val());
        return this.valid;
    }

    publicDisplayError() {
        this.publicCheckValid();
        if (this.valid == false) {
            var parentElement = this.inputElement.parent();
            parentElement.find('.alert').remove();
            parentElement.append(
                '<div class="alert alert-danger alert-dismissible fade show">'
                + '<button type="button" class="close" data-dismiss="alert">&times;</button>'
                + '<strong>Lỗi!</strong> '
                + this.errorMessage
                + '</div>'
            );
        }
    }
}

function checkValidForm(inputCheckArray) {
    var validForm = false;
    var inputCheckArrayLength = inputCheckArray.length;
    var countValid = 0;
    for (var i = 0; i < inputCheckArrayLength; i++) {
        if (inputCheckArray[i].publicCheckValid() == true) {
            countValid++;
        } else {
            inputCheckArray[i].publicDisplayError();
        }
    }
    //if all inputCheck is true  = inputCheck Array Length
    if (countValid == inputCheckArrayLength) {
        validForm = true;
    }
    console.log('ALL VALID FLAG:' + validForm);
    return validForm;
}

function convertStringToLink(element) {
    value = element.value;
    value = changeToNormalString(value);
    value = value.replace(/\ /g, '-');
    $('#product-link').val(value);
    return value;
}

function changeToNormalString(str) {
    str = str.toLowerCase();
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
    str = str.replace(/đ/g, "d");
    str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g, " ");
    str = str.replace(/ + /g, " ");
    str = str.trim();
    return str;
}