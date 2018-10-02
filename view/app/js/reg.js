    function goReg() {
    var connect, form, response, result, user, pass, nombre, apellido, email, pass_dos, rol;
    user= __('user_reg').value;
    pass= __('pass_reg').value;
    pass_dos= __('pass_reg_dos').value;
    nombre= __('nombre_reg').value;
    apellido= __('apellido_reg').value;
    email= __('email_reg').value;
    rol= __('rol').value;
    
    //los valores son encriptados
    
    
        if (user !='' && pass !='' && pass_dos !='' && email !='' && apellido !='' && nombre !='') {
            if (pass == pass_dos) {
                form='user=' + user + '&pass=' + pass + '&email=' + email  + '&nombre=' + nombre + '&apellido=' + apellido + '&rol=' + rol;
                connect = window.XMLHttpRequest ? new XMLHttpRequest : new ActiveXObject('Microsoft.XMLHTTP');
                connect.onreadystatechange = function (){
                    if(connect.readyState == 4 && connect.status == 200){
                        if(connect.responseText == 1){
                            result = '<div class="alert alert-dismissible alert-success">';
                            result +='<h4>Registro completado</h4>';
                            result +='<p class="mb-0"><strong>Estamos redireccionandote...</strong>';
                            result +='</p>';
                            result +='</div>';
                            __('_AJAX_REG_').innerHTML = result;
                            
                            location.href='index.php';
                            location.reload();
                        }else{
                            __('_AJAX_REG_').innerHTML = connect.responseText;
                            location.href='index.php';
                            location.reload();
                        }
                        console.log(connect.responseText)
                    } else if (connect.readyState != 4){
                        result = '<div class="alert alert-dismissible alert-warning">';
                        result +=' <button type="button" class="close" data-dismiss="alert">x</button>';
                        result +='<h4>Procesando...</h4>';
                        result +='<p><strong>Estamos procesando tu registro</strong>';
                        result +='</p>';
                        result +='</div>'; 
                        __('_AJAX_REG_').innerHTML = result;  
                    }
                }
                connect.open('POST', 'ajax.php?mode=reg', true);
                connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                connect.send(form);
                        } else {
                            result = '<div class="alert alert-dismissible alert-danger">';
                            result +=' <button type="button" class="close" data-dismiss="alert">x</button>';
                            result +='<h4>ERROR</h4>';
                            result +='<p><strong>Las contrase�as no coinciden.</strong>';
                            result +='</p>';
                            result +='</div>'; 
                            __('_AJAX_REG_').innerHTML = result; 
            }
        }else{
            result = '<div class="alert alert-dismissible alert-danger">';
            result +=' <button type="button" class="close" data-dismiss="alert">x</button>';
            result +='<h4>ERROR</h4>';
            result +='<p><strong>Todos los campos deben estar llenos.</strong>';
            result +='</p>';
            result +='</div>'; 
            __('_AJAX_REG_').innerHTML = result; 
        }
    } 
    

function runScriptReg(e) {
    if (e.keyCode == 13) {
        goReg();
    }
}