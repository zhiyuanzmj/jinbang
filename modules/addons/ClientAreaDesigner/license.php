<?php
use WHMCS\Database\Capsule;
$client_area_designer_licensekey = "==Qf7Iicl52ZpNXZEFWZyFEduVWasN0Lz52bkRWYvMXZsVHZv12Lw9Gdu4Wd5Zmeuc3d39Cdv9mc3d3dvc3d39iI6AjN6M3OikncvR3YlJXakRWasFmdioDNxozc7IiN24SO24CNyIjL2UTMiozMxozc7ICcpRWasFmdiozN6M3OiQXZu5yYklWd5xCdl5mLjRWa1lnL3d3diozMyozc7IibpFWbvRGZpxWY2JiOxEjOztjIxEzN0YDZkZ2M3czM3AzYkJmYyITZhRmZ2Y2MykTZhFmI6IzM6M3Oig2chhWNk1mI6cjOztjIkVWMyUDMhFzNjVWYxETN0UTNwYjZlFDOmhDOwImZhNTOwMDO4YDM3UTMiojM0ozc7Iiblt2b0t2Ylh2YioDMxozc7ISMzITM5kDMyIiO4ozc7ISZ0FGZrNWZoNmI6kjOztjIl1Wd6V3UgknQgQWZsxWdOJiO2EjOztjIu9Wa0BXayN2clRmI6ETM6M3OiUmdpR3YBJiO2ozc7Iyc1RXY0NnI6YjOztnO4oTY3afbb6161e75662be78da377d98416b7265b0660ede16416ff8739a56f3445d7";
$result = Capsule::table('tblconfiguration')->where('setting', 'client_area_designer_localkey')->first();
if(!$result){
Capsule::table('tblconfiguration')->insert(['setting' => 'client_area_designer_localkey', 'value' => $client_area_designer_licensekey]);
}else{
Capsule::table('tblconfiguration')->where('setting', 'client_area_designer_localkey')->update(['value' => $client_area_designer_licensekey]);
}