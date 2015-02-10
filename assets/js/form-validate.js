$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#defaultForm').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                
                validators: {
                    notEmpty: {
                        message: 'Por favor, Ingrese su nombre.'
                    }
                }
            },
            email_user: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, Ingrese un correo electrónico'
                    },
                    emailAddress: {
                        message: 'La dirección de correo que ingresó no es válida.'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, Ingrese su número de teléfono'
                    },
                    phone: {
                        country: 'countrySelectBox',
                        message: 'The value is not valid %s phone number'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, Ingrese su ciudad.'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, Ingrese su estado o región.'
                    }
                }
            },
            country: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, Ingrese su pais de residencia.'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
            agree: {
                validators: {
                    notEmpty: {
                        message: 'Debe aceptar los Términos y Condiciones para proceder con el envío.'
                    }
                }
            }
        }
    });
});