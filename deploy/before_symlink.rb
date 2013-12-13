Chef::Log.info("Running deploy/before_migrate.rb")

require 'fileutils'

FileUtils.chmod_R 0777, "#{release_path}/fuel/app/logs"

system %!echo "CREATE DATABASE fuel_prod;" | mysql -unetprice -hmydbinstance.cl2ngqe4p8v9.ap-northeast-1.rds.amazonaws.com -pnaruhaya!
system %!cd #{release_path}; sudo FUEL_ENV=production php ./oil refine migrate!

