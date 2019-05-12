# wbbpostrequestlogin
With this script you can simply check if the entred username & password are correct.

**TODO**
1. Simply put it in yout main folder of your Woltlab *wcf* installation.
2. Edit the *file (request.php)* and update the require_once path to your *wcf/global.php*.
3. Now the file is ready for external use.



**Outputs**
// Empty username = 0
// Empty Password = 1
// User not found = 3
// Password wrong = 4
// All right      = 5
