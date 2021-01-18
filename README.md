Super Cool API Company
-----------------------

Install
==========

Prequisites

* Linux, MacOS, Windows
* 4GB RAM
* Vagrant	
	* Follow the guide at https://www.vagrantup.com/intro/getting-started/index.html
	* Use the Vagrantfile we provide
* The Code
	* Install from github where you are reading this
* Virtualbox (on MacOS and Linux)
	* Simply download and install.
	* Minimum spec. https://www.virtualbox.org/wiki/End-user_documentation
	* Install from https://www.virtualbox.org/wiki/Downloads

Running
==========

To run the software start vagrant, in a browser go to the url and press go, the system will send an API message to the central Super Cool server or throw an error.

Issues
============

See the github issues for any.


Install on Windows
--------------------

If you are using WINDOWS then do NOT remove hyperv - ignore the Vagrant people.

Nick Schonning (github: nschonni) recommends you change the Vagrantfile.

Edit Vagrantfile and after this line add config.vm.provider line for hyperv


```

Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/latest"


```


```

Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/latest"
  config.vm.provider "hyperv"

```

Also you might need to activate hyperv 

https://docs.microsoft.com/en-us/virtualization/hyper-v-on-windows/quick-start/enable-hyper-v

* Windows 10 Enterprise, Pro, or Education
* CPU support for VM Monitor Mode Extension (VT-c on Intel CPUs).
* Minimum of 4 GB memory.

If you cannot then use virtualbox as per the instructions from vagrant.

