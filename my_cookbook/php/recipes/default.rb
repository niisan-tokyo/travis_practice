#
# Cookbook Name:: php
# Recipe:: default
#
# Copyright 2014, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#
# phpenvとphp-buildで任意バージョンのphpを試す
#

# install php from remi
node['php']['packages'].each do |pack|
  package pack do
    action :install
    options "--enablerepo=remi --enablerepo=remi-php56"
  end
end
