
#include <dht.h>
#include <Ethernet.h>
#include <SPI.h>
byte mac[] = {0xDE, 0xAD, 0xBE, 0xEF, 0xFF, 0xEE}; // Direccion MAC
byte ip[] = { 192,168,0,120 }; // Direccion IP del Arduino
byte server[] = { 192,168,0,100 }; // Direccion IP del servidor
EthernetClient client; 

dht DHT;

#define DHT11_PIN 2

void setup()
{
  Serial.begin(115200);
  Ethernet.begin(mac, ip); // Inicializamos el Ethernet Shield
}

void loop()
{
  int temp;
  int hum;
  int chk = DHT.read11(DHT11_PIN);
  hum = DHT.humidity,1;
  temp = DHT.temperature,1;
  // DISPLAY DATA
 Serial.println("Connecting...");
  if (client.connect(server, 80)>0) {  
    client.print("GET /web/add.php?temp1="); 
    client.print(temp);
    client.print("&hum1=");
    client.print(hum);
    client.println(" HTTP/1.0");
    client.println("User-Agent: Arduino 1.0");
    client.println();
    Serial.println("Connected");
  } else {
    Serial.println("Connection failure");
  }
  if (!client.connected()) {
    Serial.println("Disconnected!");
  }
 client.stop();
  client.flush();
  
  delay(2000);
}
