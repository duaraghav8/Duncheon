#include <iostream>
#include <string>
#include <fstream>
#include <algorithm>

using namespace std;
int main () {
  string textInput;
  fstream myFile;
  string::iterator walker;
  
  myFile.open ("garbage?.txt");
  myFile >> textInput;
//  cout << textInput << endl;
  walker = textInput.begin ();
  
  while (walker != textInput.end()) {
    if ((*walker > 64 && *walker < 91) || (*walker > 96 && *walker < 123) || *walker == 32) { cout << *walker; }
    ++walker;
  }
  
  cout << endl;
  
  
  return (0);
}