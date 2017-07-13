    //...........................................
    // Função genérica para o VFB
    //...........................................
    
    function doc_frwk(acao, ano, numero, param){
      switch (acao) {
        //editar documento(ano, numero)
        case 1:
          //div = id
          url = "pre_alterar.php?ano=" + ano + "&numero=" + numero;
        break;
        default: url = 'doc_oficio.php';
      }
      req = null;
      // Procura por um objeto nativo (Mozilla/Safari)
      if (window.XMLHttpRequest)
      {
	    req = new XMLHttpRequest();
        req.onreadystatechange = function() { processReqChange(numero, ano) };
        req.open("GET",url,true);
        req.send(null);
      }
      // Procura por uma versão ActiveX (IE)
      else if (window.ActiveXObject)
      {
        try
        {
	   	  req = new ActiveXObject("Msxml2.XMLHTTP");
          req.onreadystatechange = function() { processReqChange(numero, ano) };
          req.open("GET",url,true);
          req.send();
        }
        catch(e)
        {
		  try
		  {
			request = new ActiveXObject("Microsoft.XMLHTTP");
            req = new ActiveXObject("Microsoft.XMLHTTP");
            req.onreadystatechange = function() { processReqChange(numero, ano) };
            req.open("GET",url,true);
            req.send();
		  }
		  catch(e1)
		  {
			alert("Requisição: Seu browser não quer trabalhar hoje, dê folga para ele!");
		  }
        }
       }
    }

    function confirma(ano, numero)
    {
       if (window.confirm("Tem certeza que deseja excluir o documento?"))
       {
         window.location = "incluir.php?indice=2&ofi_ano=" + ano + "&ofi_numero=" + numero;
         return true;
       }
       return false;
    }
    
    function processReqChange(numero, ano){
      document.getElementById('id' + numero +'/' + ano).innerHTML = "<center><img src='imagens/loader01.gif' alt='Loading...'></center>";
      // verifica se o estado for "completado"
      if (req.readyState == 4){
        // verifica se o servidor retornar "OK"
        if (req.status == 200){
          // procura pela div e insere o conteúdo
          // retornado nela, como texto HTML
          document.getElementById('id' + numero +'/' + ano).innerHTML = req.responseText;
        }else{
          alert("Não foi possível recupear os dados:n" + req.statusText);
        }
      }
    }
