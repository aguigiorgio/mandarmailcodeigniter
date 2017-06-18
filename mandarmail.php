private function mandarmail(){
			$this->load->library("email");
			$configGmail = array(
        		'protocol' => 'smtp',
        		'smtp_host' => 'ssl://smtp.gmail.com',
        		'smtp_port' => 465,
        		'smtp_user' => 'correo electrónico ( no es necesario poner correo@gmail.com sino solo correo)',
			'smtp_pass' => 'contraseña del correo electrónico',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n",
			'validation'=> TRUE,
			);
      			#aquí se guarda la configuración
			$this->email->initialize($configGmail);
			$this->email->from('Correo que lo envía (aquí si poner el correo completo correo@correo.com');
			$this->email->subject('asunto del mensaje o titulo');
			$this->email->message('lo que se quiera poner, aquí puede ir html');
			$this->email->to('destinatario');
      			#esta función dejarla tal cual, no se le mueve
			$this->email->send();
			}
	
