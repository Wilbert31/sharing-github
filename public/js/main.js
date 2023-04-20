$(document).ready(function() {
    $('textarea').on('keyup keypress', function() {
       $(this).height(0);
       $(this).height(this.scrollHeight);
   }); 
   
   $("textarea").each(function(textarea) {
        $(this).height(0);
       $(this).height(this.scrollHeight);
   });   
});


function getCaret(el) { 
    if (el.selectionStart) { 
        return el.selectionStart; 
    } else if (document.selection) { 
        el.focus();
        var r = document.selection.createRange(); 
        if (r == null) { 
            return 0;
        }
        var re = el.createTextRange(), rc = re.duplicate();
        re.moveToBookmark(r.getBookmark());
        rc.setEndPoint('EndToStart', re);
        return rc.text.length;
    }  
    return 0; 
}

$('textarea').keyup(function (event) {
    if (event.keyCode == 13) {
        var content = this.value;  
        var caret = getCaret(this);          
        if(event.shiftKey){
            this.value = content.substring(0, caret - 1) + "\n" + content.substring(caret, content.length);
            event.stopPropagation();
        } else {
            this.value = content.substring(0, caret - 1) + content.substring(caret, content.length);
            $('form').submit();
            alert('submitted');
        }
    }
});

$(document).ready(function () {
    $('textarea').keypress(function () {
        var text = $('textarea').val();
        text = text.replace(/(?:(?:\r\n|\r|\n)\s*){3}/gm, "");
        $(this).val(text);
    });
});     


// sign up
$(document).ready(function(){	

    var firstName = $('#firstName');
    var firstNameErr = $('#firstNameErr');
    var lastName = $('#lastName');
    var lastNameErr = $('#lastNameErr');
    var emailSignup = $('#emailSignup');
    var emailSignupErr = $('#emailSignupErr');
    var passwordSignup = $('#passwordSignup');
    var passwordSignupErr = $('#passwordSignupErr');
    var confirmPasswordSignup = $('#confirmPasswordSignup');
    var confirmPasswordSignupErr = $('#confirmPasswordSignupErr');

	$('#signupForm').submit(function(){
            validateEmptyInput(firstName, firstNameErr, 'Please enter your First Name.');
            validateEmptyInput(lastName, lastNameErr, 'Please enter your Last Name.');
            validateEmptyInput(emailSignup, emailSignupErr, 'Please enter your Email Address.');
            
            validateEmail(emailSignup, emailSignupErr, 'Please enter a valid Email Address.');

            validateName(firstName, firstNameErr, 'Please check your First Name: only letters and spaces are allowed.');
            validateName(lastName, lastNameErr, 'Please check your Last Name: only letters and spaces are allowed.');

            validatePassword(passwordSignup, passwordSignupErr);
            validateConfirmPassword(passwordSignup, confirmPasswordSignup, confirmPasswordSignupErr);

            if(!firstNameErr.text() && !lastNamerErr.text() && !emailSignupErr.text() && !passwordSignupErr.text() && !confirmPasswordSignupErr.text()) {
                
                alert('test');
                // return true;
            }
            
        return false;
    });
});

function validateEmptyInput(id, errMessageId, errMessage){
    if(id.val() == ''){
        errMessageId.text(errMessage);
        id.addClass('is-invalid');
    } else {
        id.removeClass('is-invalid');
        errMessageId.text('');
    }
}

function validateName(nameId, errMessageId, errMessage){
    //regex expression - letters and spaces only:
    var nameChecker = /^[a-zA-Z\s]*$/;

    //Validation to the name input field
    if(!nameChecker.test(nameId.val())){ //
        errMessageId.text(errMessage);
        nameId.addClass('is-invalid');
    }
}

function validateEmail(emailId, errMessageId, errMessage){
    //regex expression - valid email only.
    var emailChecker = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(emailId.val() == ''){
        validateEmptyInput(emailId, errMessageId, 'Please enter your Email Address.');
    } else {
        if (!emailChecker.test(emailId.val())){
            errMessageId.text(errMessage);
            emailId.addClass('is-invalid');
        }
    }
}


function validatePassword(password, errMessageId){
    var upperChar = /^(?=.*?[A-Z])/;
    var lowerChar = /(?=.*?[a-z])/;
    var number = /(?=.*?[0-9])/;
    var sixChar = /[A-Za-z0-9]{6,}/;
    var specialChar = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]$/;

    if(password.val() == ''){
        validateEmptyInput(password, errMessageId, 'Please enter a Password.');
    }
    else if(!number.test(password.val())){
        errMessageId.text('Password must have altleast 1 number.');
        password.addClass('is-invalid');
    } 
    else if(!upperChar.test(password.val())){
        errMessageId.text('Password must have 1 upper case letter.');
        password.addClass('is-invalid');
    } 
    else if(!lowerChar.test(password.val())){
        errMessageId.text('Password must have 1 lower case letter.');
        password.addClass('is-invalid');
    } 
    else if(!sixChar.test(password.val())){
        errMessageId.text('Password must have altleast 6 character.');
        password.addClass('is-invalid');
    }
    else if(!specialChar.test(password.val())){
        errMessageId.text('Password must have altleast 1 special character.');
        password.addClass('is-invalid');
    }   else {
        password.removeClass('is-invalid');
        errMessageId.text('');
    }
}

function validateConfirmPassword(passwordId, confirmPasswordId, errMessageId){ 
    if(passwordId.val() != confirmPasswordId.val()){
        errMessageId.text('Password Do not match.');
        confirmPasswordId.addClass('is-invalid');
    } else {
        confirmPasswordId.removeClass('is-invalid');
        errMessageId.text('');
    }
} 