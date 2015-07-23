#include <stdio.h>
#include <string.h>
#include <stdlib.h>

//this generates the executable to be crashed using a very basic buffer overflow.
//a possible solution is:
// >./application `perl -e 'print "X" x 120;'`
//The above statement, when types on console (after '>'), spawns a new process to execute the application and provides 120 'X's as the argument.
//alternatively, you could also extract the ascii strings from the executable, since the password is hardcoded into it.

int main (int argc, char *argv []) {
	if (argc != 2) {
		printf ("It seems that you either provided no data or some extra data.\nUsage: <program_name> <password>\n");
		exit (1);
	}

	if (strlen (argv [1]) > 100) {
		printf ("**Stack Smashing detected**\n\npassword is 989yihi78t75uygytrd54e7g\n");
	}
	else {
		printf ("Login successful. Welcome!\n");
	}

	return (0);
}	
