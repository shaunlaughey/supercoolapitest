Super Cool API Company Coffee Safe
------------------------------------

Why
======

Someone is stealing the coffee. 
IT have put in a special combination lock. It's French. It's also on the internet.
You can find its combination via it's configuration server on AWS.
Someone will send you the details - server, url, username and password for the server.
Use this software and we can get the combination.
Then we get coffee.


Install
==========

Prequisites

* Linux, MacOS, Windows
* 4GB RAM
* Vagrant	
	* Follow the guide at https://www.vagrantup.com/intro/getting-started/index.html
	* Use the Vagrantfile we provide
* The Code
	* Install from github (See Install at end) where you are reading this
* Virtualbox (on MacOS and Linux)
	* Simply download and install.
	* Minimum spec. https://www.virtualbox.org/wiki/End-user_documentation
	* Install from https://www.virtualbox.org/wiki/Downloads

Running
==========

To run the software start vagrant, ssh in and run the client, the system will send an API message to the central Super Cool server and retrieve the combination to the coffee machine


Step by step.
------------------

In the code folder with a text editor edit bootstrap.php and change the URL and SERVER variables given to you by HR.

```

define("SERVER","put the server value in here");
define("URL","/put the url in here");


```

Open the code folder where the Vagrantfile is in a terminal or command prompt and type 
the commands below remember to replace USERNAME and PASSWORD with
the ones HR sent you.

```

vagrant up
vagrant ssh
cd /vagrant/
sudo su
su www-data
composer install
./src/console.php --username=USERNAME PASSWORD

```

The combination will be sent back to you or an error.
Send me the combination. Dont send me the error. 
You broke it. See if you can fix it.
Or write your own client.
Get the combination for the coffee machine.


Issues
============

See the github issues for any issues. I think it all works. Any issues raise them on github. 

No support for Windwoes users. Sorry.


Install on Windows
--------------------

If you are using WINDOWS then do NOT remove hyperv - ignore the Vagrant people.

Nick Schonning (github: nschonni) recommends you change the Vagrantfile.

Edit Vagrantfile and after this line add config.vm.provider line for hyperv


```

Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/wobbly"


```

It might look like this:

```

Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/wobbly"
  config.vm.provider "hyperv"

```

Also you might need to activate hyperv 

https://docs.microsoft.com/en-us/virtualization/hyper-v-on-windows/quick-start/enable-hyper-v

* Windows 10 Enterprise, Pro, or Education
* CPU support for VM Monitor Mode Extension (VT-c on Intel CPUs).
* Minimum of 4 GB memory.

If you cannot then use virtualbox as per the instructions from vagrant - I don't have Windows so perhaps just use Virtualbox.

Installing from Github
=========================

Okay for those that dont know how to install from github

In a browser go to

https://github.com/shaunlaughey/supercoolapitest/archive/main.zip

Save it somewhere and unzip it.

This will now be where you will run your command/terminal from now on.

So if you save and unzip it to your desktop you would open a command prompt on your desktop.








