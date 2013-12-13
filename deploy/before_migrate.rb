Chef::Log.info("Running deploy/before_migrate.rb")

require 'fileutils'

FileUtils.chmod_R 0777, "#{release_path}/fuel/app/logs"

`cd #{release_path}; sudo FUEL_ENV=production php ./oil refine migrate`
