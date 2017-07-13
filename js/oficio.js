var oficio = angular.module("oficio", ["ngAnimate"]);
oficio.controller("oficioCtrl", function ($scope, $http) {
    console.log("Carregou o script...");
    $scope.oficios = [];
    $scope.form = {};    
    $scope.usuario = null;
    $scope.cadastrador = {
        status:  false,
        inativo: "Ativar cadastro...",
        ativo:   "Desativar cadastro..."
    };    
    $scope.ativarCadastro = function () {
        $scope.cadastrador.status = !$scope.cadastrador.status;    
        $scope.oficio = {}; 
        $scope.oficio.usuario = $scope.usuario.nome;
    }; 
    $scope.criterioDeOrdenacao = "ofi_numero";
    $scope.direcaoDaOrdenacao = true;    
    $scope.ordenarPor = function (campo) {
        $scope.criterioDeOrdenacao = campo;
        $scope.direcaoDaOrdenacao = !$scope.direcaoDaOrdenacao;              
    };    
    $scope.getUsuario = function (login, senha) {
        console.log("Entrou no getUsuario");
        $http.get("php/getUsuario.php?login=" + login + "&senha=" + senha)
            .success(function(data, status, headers, config) {
                if (data != null){
                    $scope.usuario = data;
                    if ($scope.usuario.nome == null) {
                        $scope.usuario.error = true;
                    }
                }
                console.log(data, status);                                        
            })
            .error(function(data, status, headers, config) {
                switch(status) {
                    case 401: {
                        $scope.message = "You must be authenticated!"
                    break;
                    }
                    case 500: {
                        $scope.message = "Something went wrong!";
                    break;
                    }
                }
            console.log(data, status);
        });
    };     
    $scope.getOficios = function () {
        $scope.ano = 2017;
        console.log("Entrou no getOficios");
        $http.get("php/getOficios.php")
            .success(function(data, status, headers, config) {
                if (data != null){
                    $scope.oficios = data;
                }
                console.log(data, status);                                        
            })
            .error(function(data, status, headers, config) {
                switch(status) {
                    case 401: {
                        $scope.message = "You must be authenticated!"
                    break;
                    }
                    case 500: {
                        $scope.message = "Something went wrong!";
                    break;
                    }
                }
            console.log(data, status);
        });
    };     
    $scope.getOficios();
    $scope.getOficios2016 = function () {
        $scope.ano = 2016;        
        console.log("Entrou no getOficios 2016");
        $http.get("php/getOficios2016.php")
            .success(function(data, status, headers, config) {
                if (data != null){
                    $scope.oficios = data;
                }
                console.log(data, status);                                        
            })
            .error(function(data, status, headers, config) {
                switch(status) {
                    case 401: {
                        $scope.message = "You must be authenticated!"
                    break;
                    }
                    case 500: {
                        $scope.message = "Something went wrong!";
                    break;
                    }
                }
            console.log(data, status);
        });
    };     
    $scope.getOficios2015 = function () {
        $scope.ano = 2015;        
        console.log("Entrou no getOficios 2015");
        $http.get("php/getOficios2015.php")
            .success(function(data, status, headers, config) {
                if (data != null){
                    $scope.oficios = data;
                }
                console.log(data, status);                                        
            })
            .error(function(data, status, headers, config) {
                switch(status) {
                    case 401: {
                        $scope.message = "You must be authenticated!"
                    break;
                    }
                    case 500: {
                        $scope.message = "Something went wrong!";
                    break;
                    }
                }
            console.log(data, status);
        });
    };    
    $scope.getOficios2014 = function () {
        $scope.ano = 2014;        
        console.log("Entrou no getOficios 2014");
        $http.get("php/getOficios2014.php")
            .success(function(data, status, headers, config) {
                if (data != null){
                    $scope.oficios = data;
                }
                console.log(data, status);                                        
            })
            .error(function(data, status, headers, config) {
                switch(status) {
                    case 401: {
                        $scope.message = "You must be authenticated!"
                    break;
                    }
                    case 500: {
                        $scope.message = "Something went wrong!";
                    break;
                    }
                }
            console.log(data, status);
        });
    };       
    $scope.getOficios2013 = function () {
        $scope.ano = 2013;        
        console.log("Entrou no getOficios 2013");
        $http.get("php/getOficios2013.php")
            .success(function(data, status, headers, config) {
                if (data != null){
                    $scope.oficios = data;
                }
                console.log(data, status);                                        
            })
            .error(function(data, status, headers, config) {
                switch(status) {
                    case 401: {
                        $scope.message = "You must be authenticated!"
                    break;
                    }
                    case 500: {
                        $scope.message = "Something went wrong!";
                    break;
                    }
                }
            console.log(data, status);
        });
    };     
    $scope.getOficios2012 = function () {
        $scope.ano = 2012;        
        console.log("Entrou no getOficios 2012");
        $http.get("php/getOficios2012.php")
            .success(function(data, status, headers, config) {
                if (data != null){
                    $scope.oficios = data;
                }
                console.log(data, status);                                        
            })
            .error(function(data, status, headers, config) {
                switch(status) {
                    case 401: {
                        $scope.message = "You must be authenticated!"
                    break;
                    }
                    case 500: {
                        $scope.message = "Something went wrong!";
                    break;
                    }
                }
            console.log(data, status);
        });
    };     
    $scope.getOficios2011 = function () {
        $scope.ano = 2011;        
        console.log("Entrou no getOficios 2011");
        $http.get("php/getOficios2011.php")
            .success(function(data, status, headers, config) {
                if (data != null){
                    $scope.oficios = data;
                }
                console.log(data, status);                                        
            })
            .error(function(data, status, headers, config) {
                switch(status) {
                    case 401: {
                        $scope.message = "You must be authenticated!"
                    break;
                    }
                    case 500: {
                        $scope.message = "Something went wrong!";
                    break;
                    }
                }
            console.log(data, status);
        });
    };     
    $scope.getOficios2010 = function () {
        $scope.ano = 2010;        
        console.log("Entrou no getOficios 2010");
        $http.get("php/getOficios2010.php")
            .success(function(data, status, headers, config) {
                if (data != null){
                    $scope.oficios = data;
                }
                console.log(data, status);                                        
            })
            .error(function(data, status, headers, config) {
                switch(status) {
                    case 401: {
                        $scope.message = "You must be authenticated!"
                    break;
                    }
                    case 500: {
                        $scope.message = "Something went wrong!";
                    break;
                    }
                }
            console.log(data, status);
        });
    };     
    $scope.getOficios2009 = function () {
        $scope.ano = 2009;        
        $scope.oficios = [];
        console.log("Entrou no getOficios 2009");
        $http.get("php/getOficios2009.php")
            .success(function(data, status, headers, config) {
                if (data != null){
                    $scope.oficios = data;
                }
                console.log(data, status);                                        
            })
            .error(function(data, status, headers, config) {
                switch(status) {
                    case 401: {
                        $scope.message = "You must be authenticated!"
                    break;
                    }
                    case 500: {
                        $scope.message = "Something went wrong!";
                    break;
                    }
                }
            console.log(data, status);
        });
    };     
    $scope.cadastrarOficio = function (oficio) {
        $scope.oficios.push(angular.copy(oficio));                    
        addOficio(oficio);                    
        delete($scope.oficio);        
        $scope.ativarCadastro();  
        $scope.form.oficioForm.$setPristine();           
    };  
    var addOficio = function (data) {
        data.ofiAutor = $scope.usuario.nome;
        data.ofiMatricula = $scope.usuario.matricula;
        data.ofiEmail = $scope.usuario.login;
        console.log(data);
        $http.post("php/postOficio.php", data)
            .success(function(data, status, headers, config) {
                console.log("Post success");
                $scope.getOficios();                                                            
            })
            .error(function(data, status, headers, config) {
                $scope.ativarCadastro();                
                switch(status) {
                    case 401: {
                        $scope.message = "You must be authenticated!"
                    break;
                    }
                    case 500: {
                        $scope.message = "Something went wrong!";
                    break;
                    }
                }
            });
        };
});