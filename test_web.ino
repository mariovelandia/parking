int botonPin = 2;
int sensorValue;

void setup() {
  pinMode(botonPin, INPUT);
  Serial.begin(9600);

}

void loop() {

  sensorValue = digitalRead(botonPin);


  Serial.write(sensorValue);


  delay(300);
}

