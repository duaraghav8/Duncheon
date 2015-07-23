#include <iostream>
#include <string>
#include <cstring>
using namespace std;

int main (int argc, char* argv []) {
    string buffer = argv [1];
    char temp [20] = {'\0'};
    if (buffer.length () > 19) {
        cout << "989yihi78t75uygytrd54e7g" << endl;
        strcpy (temp, argv[1]);
    }
    else {
        cout << "Access Denied." << endl;
    }
}
