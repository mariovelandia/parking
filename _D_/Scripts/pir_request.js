var request = require('request');
var five = require("johnny-five");
var Raspi = require("raspi-io");
var board = new five.Board(
			{
     			io: new Raspi()
			});

board.on("ready", function() 
{

     var pir = new five.Motion('P1-7');


  	pir.on("calibrated", function() 
  	{
    	console.log("Sensor calibrado");
  	});

  	motion.on("motionstart", function() 
  	{
    	console.log("Movimiento detectado!");

    		request.post(
    		{
   			 	url:'http://upark.thetruego.com/webapi-pi.php',
   			 	form: 
   			 	{
   			 		key: '1n~3c417B+Ca8Ti', func: "nuevo_cupo", id: "1", cupo: "34" 
   			 	}
  			},

  			function(err,httpResponse,body)
			{
     			console.log( err );
      			console.log( httpResponse );
      			console.log( body );
    		})
    		
  	});

  	motion.on("motionend", function() 
  	{
    console.log("Fin del movimiento");
	});

});
