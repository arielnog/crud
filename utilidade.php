if (!preg_match("/^[a-zA-Z \S]*$/",$nome)) {
        echo "Only letters and white space allowed";
      }else

      
      if(!preg_match("/^[a-zA-Z ]*$/",$nome_2)){
        $nome_2Err = "Only letters and white space allowed";
      }else 
      
      if(!preg_match("/^[a-zA-Z ]*$/",$logradouro)){
        $nome_2Err = "Only letters and white space allowed";
      }else 
      
      if(!preg_match("/^[0-9 ]*$/",$cep)){
        $nome_2Err = "Only letters and white space allowed";
      }else 
      
      if(!preg_match("/^[0-9 ]*$/",$num)){
        $nome_2Err = "Only letters and white space allowed";
      }else 
      
      if(!preg_match("/^[a-zA-Z0-9 ]*$/",$complemento)){
        $nome_2Err = "Only letters and white space allowed";
      }else 
      
      if(!preg_match("/^[0-9 ]*$/",$cel)){
        $nome_2Err = "Only letters and white space allowed";
      }