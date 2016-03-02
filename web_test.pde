import processing.serial.*;

Serial puerto;  
int valor;    

void setup()
{
  size(200, 200);
  noStroke();
  println(Serial.list());
  puerto = new Serial(this, Serial.list()[1], 9600);
}

void draw()
{
  if ( 0 < puerto.available() )  
  {
    valor = puerto.read();
  }

  background(#222222);       

  if ( valor == 0 )             
  {
    fill(0);
  } else {
    fill(255, 230, 39);
  }
println(valor);
  rect(50, 50, 100, 100);
}