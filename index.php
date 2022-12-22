String httpGETRequest(const char* serverName) {
  HTTPClient http;

  // Your IP address with path or Domain name with URL path 
  http.begin(serverName);

  // If you need Node-RED/server authentication, insert user and password below
  //http.setAuthorization("REPLACE_WITH_SERVER_USERNAME", "REPLACE_WITH_SERVER_PASSWORD");


  // Send HTTP POST request
  int httpResponseCode = http.GET();

  String payload = "{}"; 

  if (httpResponseCode>0) {
    Serial.print("HTTP Response code: ");
    Serial.println(httpResponseCode);
    payload = http.getString();
  }
  else {
    Serial.print("Error code: ");
    Serial.println(httpResponseCode);
  }
  JSONVar myObject = JSON.parse(sensorReadings);

// JSON.typeof(jsonVar) can be used to get the type of the var
if (JSON.typeof(myObject) == "undefined") {
  Serial.println("Parsing input failed!");
  return;
}

Serial.print("JSON object = ");
Serial.println(myObject);

// myObject.keys() can be used to get an array of all the keys in the object
JSONVar keys = myObject.keys();

for (int i = 0; i < keys.length(); i++) {
  JSONVar value = myObject[keys[i]];
  Serial.print(keys[i]);
  Serial.print(" = ");
  Serial.println(value);
  sensorReadingsArr[i] = double(value);
}
Serial.print("1 = ");
Serial.println(sensorReadingsArr[0]);
Serial.print("2 = ");
Serial.println(sensorReadingsArr[1]);
Serial.print("3 = ");
Serial.println(sensorReadingsArr[2]);
  http.end();

  return payload;
}
