var request = require('request');


   request.post({
    url:'http://upark.thetruego.com/webapi-pi.php',
    form: {key: '1n~3c417B+Ca8Ti', func: "menos_un_cupo", id: "1", cupo: "34" }

  },function(err,httpResponse,body){
      console.log( err );
      console.log( httpResponse );
      console.log( body );
    })
