angular.module("oficio").directive("uiOficios", function(){
    return {
        controller: function($scope, $element, $attrs){
            var oficios = [];
            this.registerOficio = function(oficio){
                oficios.push(oficio);
            }
            this.closeAll = function(){
                oficios.forEach(function(oficio){
                    oficio.isOpened = false;
                    oficio.isEditing = false;
                });
            }
        }
    };
});
angular.module("oficio").directive("uiOficio", function(){
    return {
        templateUrl: "view/oficio.html",
        transclude: true,
        scope: {
            numero: "@",
            ano: "@",
            data: "@",
            assunto: "@",
            destino: "@",
            autor: "@"
        },
        require: "^uiOficios",
        link: function(scope, element, attrs, ctrl){
            ctrl.registerOficio(scope);
            scope.open = function(){
                if (scope.isOpened == true){
                    scope.isOpened = false;
                    scope.isEditing = false;                    
                } else {
                    //scope.getTramites();                    
                    //ctrl.closeAll();                    
                    scope.isOpened = true;
                    scope.isEditing = false;                                        
                }
            };
        },
        controller: ['$scope','$element', '$http', '$attrs', '$transclude', function($scope, $element, $http, $attrs, $transclude) {
            /*                                                      
            $scope.delDocumento = function (data) { 
                if(confirm("Deseja realmente remover esse Documento?")){
                    $http.post("php/delDocumento.php", data)
                        .success(function(data, status, headers, config) {
                            $element.remove();
                            $scope.$destroy();
                            console.log("Del success");                        
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
                        });
                    }
                };  
            */                
            $scope.editOficio = function (data) {   
                if ($scope.isEditing){
                    $scope.isEditing = false;
                } else {
                    $scope.oficio = {};
                    $scope.oficio.ofiNumero = $scope.numero;
                    $scope.oficio.ofiAno = $scope.ano;
                    $scope.oficio.ofiDestino = $scope.destino;
                    $scope.oficio.ofiAssunto = $scope.assunto;  
                    $scope.oficio.usuario = $scope.autor;
                    $scope.oficio.ofiData = $scope.data;
                    $scope.isEditing = true;                    
                }
            };                                            
            $scope.editarOficio = function (data) {
                $scope.tempData = {};                
                $scope.tempData.ofiDestino = $scope.oficio.ofiDestino;
                $scope.tempData.ofiAssunto = $scope.oficio.ofiAssunto;  
                $scope.tempData.ofiData    = $scope.oficio.ofiData;     

                $http.post("php/putOficio.php", data)
                    .success(function(data, status, headers, config) {
                        console.log("Put success");     
                        console.log($scope);
                        $scope.destino = $scope.tempData.ofiDestino;
                        $scope.assunto = $scope.tempData.ofiAssunto;  
                        $scope.data    = $scope.tempData.ofiData; 
                        $scope.isEditing = false;                  
                        delete $scope.tempData;     
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
                    });
                };      
        }]
    };
});