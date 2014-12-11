
$(document).ready(function() {
    $('#formContrata').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                validators: {
                    notEmpty: {
                        message: 'El nombre es requerido.'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'El campo debe contener minimo 6 caracteres.'
                    },
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'La dirección de correo es requerida.'
                    },
                    emailAddress: {
                        message: 'La dirección de correo no es válida, por favor intente otra vez.'
                    },
                }
            },
            celular: {
                validators: {
                    digits: {
                        message: 'El celular solo acepta números'
                    },
                    notEmpty: {
                        message: 'El número de celular es requerido'
                    },
                }
            },
            telefono: {
                validators: {
                    digits: {
                        message: 'El campo de Teléfono fijo solo acepta números'
                    },
                    notEmpty: {
                        message: 'El número de Teléfono es requerido'
                    },
                }
            },
            terminos: {
                validators: {
                    notEmpty: {
                        message: 'Debes aceptar los terminos y condiciones'
                    },
                }
            },
        }
    });
    


});