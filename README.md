## Connect ESP8266 To Website

## Scema and Code

<center><img src="skema.jpg" width="300"></center>

// No Full Code

```cpp
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


```
## Get in touch

- Instagram : https://instagram.com

## Whats This

- Tutorial Connect Sensor Ultrasonik and ESP8266 To Web server use cpp, mysqli, and php