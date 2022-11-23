#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <NewPing.h>

#define BUZZER       D3
#define TRIGGER_PIN  D6  // Arduino pin tied to trigger pin on the ultrasonic sensor.
#define ECHO_PIN     D7  // Arduino pin tied to echo pin on the ultrasonic sensor.
#define MAX_DISTANCE 200 // Maximum distance we want to ping for (in centimeters). Maximum sensor distance is rated at 400-500cm.

String ssid = "********"; // your ssid wifi
String pass = "********"; // your wifi pass
String host = "192.168.1.5"; // webserver, you can use xampp or use your website example : "sensordata.com"

NewPing sonar(TRIGGER_PIN, ECHO_PIN, MAX_DISTANCE); // NewPing setup of pins and maximum distance.

void setup() {
  Serial.begin(115200); // Open serial monitor at 115200 baud to see ping results.
  pinMode(BUZZER, OUTPUT);
  

  WiFi.hostname("NodeMCU");
  WiFi.begin(ssid, pass);

  while(WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.println("Menunggu koneksi");  
    digitalWrite(BUZZER, HIGH);
  }

  Serial.print("IP Addr ... ");
  Serial.println(WiFi.localIP());
  digitalWrite(BUZZER, LOW);
}

void loop() {             // Wait 50ms between pings (about 20 pings/sec). 29ms should be the shortest delay between pings.
  Serial.print("Ping: ");
  Serial.print(sonar.ping_cm()); // Send ping, get distance in cm and print result (0 = outside set distance range)
  Serial.println("cm");

  WiFiClient client;
  if(!client.connect(host, 80)) {
    Serial.println("Koneksi Gagal ...");
    return;
  } 

  String Link;
  HTTPClient http;
  Link = "http://192.168.1.5/ESP8266-To-Website/dataout.php?data=" + String(sonar.ping_cm());

  http.begin(client, Link);
  http.GET();
  http.end();   
  delay(1000);
  
}