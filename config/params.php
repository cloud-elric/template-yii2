<?php

return [
    'adminEmail' => 'admin@example.com',
    'developmentBy'=>'2 Geeks one Monkey',
    'company'=>'Nombre de compañia',
    'modUsuarios' => [
        'facebook'=>[
            'usarLoginFacebook'=>true,
            'APP_ID'=>'', // Identificador de la aplicación
            'APP_SECRET'=>'', // Clave secreta de la aplicación
            'CALLBACK_URL'=>'',
            'dataBasic'=>true, // Obtiene datos basicos del usuario como nombre, imagen, apellido, email
            'friends'=>false, // Visualiza a los amigos que esten usuando la aplicacion
            'permisosForzosos'=>'email, user_friends',
            'permisos'=>'public_profile, email, user_friends',
        ],
        'sesiones' => [ 
            'guardarSesion' => true, // Guardara el registro de sesiones del usuario
            'sesionUnicaPorUsuario' => true, // Solamente habra una sesión por usuario
            'cerrarPrimeraSesion' => true // Cierra la primera sesion abierta para una nueva sesion 
        ],
        'mandarCorreoActivacion' => false, // Envia correo electronico para activar la cuenta del usuario
            'email' => [ 
                'emailActivacion' => 'development@2gom.com.mx',
                'subjectActivacion' => 'Bienvenido',
                'emailRecuperarPass' => 'development@2gom.com.mx',
                'subjectRecuperarPass' => 'Recuperar contraseña' 
            ],
            'recueperarPass' => [ 
                'diasValidos' => 2, // Numero de dias que durara la recuperación de la contraseña
                'validarFechaFinalizacion' => true 
            ] // validar si la recuperación de contraseña validara la fecha de expiracion
     
    ] 
];
