document.writeln(
    '<script src="' +
    window.location.protocol +
    '//' + window.location.hostname +
    '/mvc/public/assets/admin/js/form-setting/form.js"></script>'
);

class ValidationRule {

    protectedCheckInput(type, value) {
        var invalid = false;
        var pattern = null;
        switch (type) {
            case 'name':
                pattern = /^[a-zA-Z][a-zA-Z0-9\ ]+$/g;
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
                pattern = /^[1-2]?[0-9]{1,9}$/g;
                if (value.search(pattern) == 0) {
                    invalid = true;
                }
                break;
            case 'inventory':
                pattern = /^[1-2]?[0-9]{1,9}$/g;
                if (value.search(pattern) == 0) {
                    invalid = true;
                }
                break;
            case 'type_id':
                pattern = /^[1-2]?[0-9]{1,9}$/g;
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
}