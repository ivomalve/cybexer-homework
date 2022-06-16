# CybExer-homework

## Assignment
> Build a CTF challenge where player has to exploit one vulnerability in web application to get a flag from file in server. Type of vulnerability and server platform are free to choose, but server side should run in Docker and be as lightweight as possible. Basic instructions for setting up and distributing the challenge are expected as part of the result.
## Introduction
Welcome to my CTF challenge! It comprises a simple web-application written in PHP.
In this challenge, a player must hack this vulnerable site in order to find one flag stored in a file on the server. Good luck!
## Prerequisites
- Basic knowledge of Linux
- Basic knowledge of Docker
- Install Docker and docker-compose
```
apt update
apt install docker.io -y
apt install docker-compose -y
```
- Basic knowledge of command injection techniques
## Setup
1. Download the files in this repository.
2. Start a terminal on a Linux machine.
3. Make sure Docker and docker-compose are installed.
5. Within the terminal, cd into the directory with the files.
6. Once in the correct directory, run this command:
```
docker-compose up
```
6. Open 'http://localhost' on a browser.
7. __Happy hacking!__

<details>
  <summary>Walkthrough</summary>
  
  ## Walkthrough
__WARNING! This section provides the solution!__
  
  The function of this app is to ping a site and display the result of the ping command.
  
<img width="471" alt="Screenshot 2022-06-16 160425" src="https://user-images.githubusercontent.com/48446307/174076849-508ffe92-63db-433a-a90b-d90e9a411c6b.png">
  
  1. The user's input is used to issue commands to the server. This is a hint, that the input field could be vulnerable to command injection. Trying simple command injections, such as ```google.com;ls``` confirms this:
  
  <img width="488" alt="Screenshot 2022-06-16 161741" src="https://user-images.githubusercontent.com/48446307/174078790-23550da1-af71-4a04-b024-89648c6d6e45.png">

2. The ```ls``` command reveals, that there is another directory called _data_ within this directory, which interests us.
Entering  ```google.com;ls data``` gives us the following:
  
  <img width="384" alt="Screenshot 2022-06-16 162539" src="https://user-images.githubusercontent.com/48446307/174080002-524e8e47-215e-4446-a169-0bf840937108.png">

3. Thus we have found the flag.txt file. Now we read it using ```google.com;cat data/flag.txt```:
  
  <img width="411" alt="Screenshot 2022-06-16 162716" src="https://user-images.githubusercontent.com/48446307/174080334-79a87a00-4ee8-4324-a775-8a9b73a9772f.png">

  4. We have found the flag{Waw_h0W_D1D_You_F1Nd_Me!?}.
  
  __Thank you for playing!__

</details>
