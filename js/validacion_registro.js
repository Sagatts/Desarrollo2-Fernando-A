//Validacion del registro, en donde se consigue el valor que esta dentro de los inputs, guardandolo en variables para validar. 
//Si hay un error salta un mensaje debajo del input correspondiente antes de enviar el formulario.
function validar_registro(){
    var sesion_user = document.getElementById('Sesion_usuario');
    var sesion_pass = document.getElementById('Sesion_contrasena');

    var mensajeErrorUser='';
    var mensajeErrorPass='';

    if (sesion_user===''){
        mensajeErrorUser = 'Por favor, ingrese su usuario';
    }

    if(sesion_pass===''){
        mensajeErrorPass = 'Por favor, ingrese su contraseña';
    }

    if(mensajeErrorUser !== '' || mensajeErrorPass !==''){
        return false;
    }

    return true;
}