# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/focal64"
  config.vm.network "public_network"
  config.vm.provider :virtualbox do |vb|
    #   # Don't boot with headless mode
    #   vb.gui = true
    #
    #   # Use VBoxManage to customize the VM. For example to change memory
    #   do this if your processes keep getting killed
    vb.customize ["modifyvm", :id, "--memory", "2048", "--cpus", "1"]
  end
  config.vm.synced_folder "./code", "/vagrant", id: "vagrant-root",
    owner: "www-data",
    group: "www-data",
    mount_option: ["dmode=777,fmode=666"]
  config.vm.provision "shell", inline: <<-SHELL
     apt-get update
     apt-get install -y apache2
     apt-get install -y php-cli php-mysql mysql-server phpunit php-gmagick composer
     apt-get install -y docker.io
SHELL
end
