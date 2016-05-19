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

    		
  	});

  	motion.on("motionend", function() 
  	{
    console.log("Fin del movimiento");
	});

});

