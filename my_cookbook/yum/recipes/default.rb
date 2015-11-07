#
# Cookbook Name:: yum
# Recipe:: default
#
# Copyright 2014, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#

bash 'install_remi' do
  user "root"
  code <<-EOS
    wget http://rpms.famillecollet.com/enterprise/remi-release-6.rpm
    rpm -Uvh remi-release-6.rpm
  EOS
  creates "/etc/yum.repos.d/remi.repo"
end
