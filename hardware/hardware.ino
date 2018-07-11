#include <LiquidCrystal.h>
#include <SoftwareSerial.h>
#include <Servo.h>


SoftwareSerial mySerial(9,10);
//LiquidCrystal lcd(rs,en,d4,d5,d6,d7);

Servo myservo;
int pos = 0; 

LiquidCrystal lcd(12, 11, 7, 6, 5, 4);

char tag[] ="110077F445D7"; // Test Tag
int count=0;
char input[12];
String balance;


void setup() {
  Serial.begin(9600);
  lcd.begin(16,2);
  mySerial.begin(9600);

 lcd.print("EasyGo TollBooth");
 delay(2000);
 lcd.clear();
 lcd.print("Initailising...");
 delay(2000);
 lcd.clear();
 
//  Serial.println("Initialized");
//  delay(2000);
  
myservo.attach(2);

  
}

void loop() {
  
  if(mySerial.available())
  {
    String x=mySerial.readString();
//  delay(1000);
    Serial.println(x);
    delay(1000);
  }
  if(Serial.available())
  {
    count=count+1;
    balance=Serial.readString();
    lcd.clear();
//    lcd.print("Balance: ");
    lcd.print(balance);
    delay(1000);
  }

//  if(count>=2)
//  {
//    for (pos = 40; pos <= 160; pos += 1) { // goes from 0 degrees to 180 degrees
//    // in steps of 1 degree
//    myservo.write(pos);              // tell servo to go to position in variable 'pos'
//    delay(15);                       // waits 15ms for the servo to reach the position
//  }
//
//delay(5000);
//
//for (pos = 160; pos >= 40; pos -= 1) { // goes from 180 degrees to 0 degrees
//    myservo.write(pos);              // tell servo to go to position in variable 'pos'
//    delay(15);                       // waits 15ms for the servo to reach the position
//  }
//
//  count=0;
//  }
  
  



  




  
  }
 
      

 
      

