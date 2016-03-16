#define echoPin 8 // Echo Pin
#define trigPin 7 // Trigger Pin
#define LEDPin 13 // Onboard LED

int maximumRange = 100; // Maximum range needed
int minimumRange = 0; // Minimum range needed
long duration, distance; // Duration used to calculate distance
int contador;
int esta = 0;
int cupo = 100;
int t = 3;
void setup() {
  Serial.begin (9600);
  pinMode(trigPin, OUTPUT);
  pinMode(echoPin, INPUT);
  pinMode(LEDPin, OUTPUT); // Use LED indicator (if required)
}

void loop() {

  digitalWrite(trigPin, LOW);
  delayMicroseconds(2);

  digitalWrite(trigPin, HIGH);
  delayMicroseconds(10);

  digitalWrite(trigPin, LOW);
  duration = pulseIn(echoPin, HIGH);

  //Calculate the distance (in cm) based on the speed of sound.
  distance = duration / 58.2;
  distance = duration / 58.2;


  if (distance >= maximumRange || distance <= minimumRange)
  {

    //si la distancia esta fuera de rango imrpime 0
    esta = 0;
    digitalWrite(LEDPin, HIGH);
  }
  else
  {
    // si hay algo encima empieza acontar
    esta = 1;
    contador++;
    digitalWrite(LEDPin, LOW);
  }

  if (contador > t && esta == 0)
  {
    //si el objeto se antes estaba el objeto encima y luego se quita se resta un cupo y reinicia el contador
    contador = 0;
    cupo--;
    Serial.write(cupo);
  }
  else if (contador < t && esta == 0) {
    contador = 0;
  }
  //delay e imprimir el contador.
  delay(500);
  //Serial.println(contador);
}
