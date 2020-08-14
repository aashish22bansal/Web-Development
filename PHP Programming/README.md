# PHP-Programming
This repository contains programs used in Open Source Programming

You can download the installation file in the "Setup File" folder in this repository and extract it in the root drive of the system.

Next, go to the Environment Variables of your system and in PATH under the "User Variables for <USERNAME>" section, add the path in which the files were extracted inorder to tell your system that the required PHP files exist in this folder.
  
After setting up the environment variables, you need to create a folder in which you would create all your PHP files and store them. For setting up a folder, go to the root_directory(C drive for Windows)->Users->Username->Create New Folder. You can name the folder anything you want but in my case I am just naming it "www" which just stands for the World Wide Web, just to remember it easily(as in the above folders). "C:/Users/<Username>" is the location in which the local server would start looking for the files first and hence we are creating a folder in which you can keep everything so that it is eady to locate and use.

After this, you need to go your Command Prompt and type the following commands to check if PHP is working on your system:
  1. Type the command: "echo %PATH%"
     and check if the path added exists in this. If not, try adding the path again and then check again using the same command.
  2. Type the command: "php -v"
     If this command runs, it meand that PHP is working on your system correctly as it shows the version installed on your system.

Further, you need to setup a local server. You can do this by typing the command "php -S localhost:4000". This just means that setup a local server for the system which is going to use the port 4000.

DO NOT CLOSE COMMAND PROMPT TILL THE TIME YOU ARE WORKING ON YOUR PHP WEBSITE.

To see your server running, you can go to your web browser and then type "http://localhost:4000" in the search bar. It will show you an error initially but it's OK. Now to run your PHP file, just add the path of the new folder that you had created to store all the PHP files, in my case, "http://localhost:4000/www/hello_world.php". This will the PHP file directly.

Now, use your PHP editor and create a file which you can run.
