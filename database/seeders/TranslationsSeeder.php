<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TranslationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            $translations = [
                'welcome' => 'Welcome to our website!',
                'greeting' => 'Hello, :name!',
                'location' => 'Location',
                'dashboard' => 'Dashboard',
                'farms' => 'Farms',
                'farms.list' => 'Farm List',
                'farms.add' => 'Farm Add',
                'languages' => 'Languages',
                'address' => 'Address',
                'hello' => 'Hello',
                'goodbye' => 'Goodbye',
                'thank_you' => 'Thank you',
                'yes' => 'Yes',
                'no' => 'No',
                'please' => 'Please',
                'sorry' => 'Sorry',
                'help' => 'Help',
                'name' => 'Name',
                'age' => 'Age',
                'email' => 'Email',
                'phone' => 'Phone',
                'home' => 'Home',
                'about' => 'About Us',
                'contact' => 'Contact',
                'services' => 'Services',
                'products' => 'Products',
                'news' => 'News',
                'gallery' => 'Gallery',
                'search' => 'Search',
                'submit' => 'Submit',
                'cancel' => 'Cancel',
                'save' => 'Save',
                'delete' => 'Delete',
                'edit' => 'Edit',
                'view' => 'View',
                'details' => 'Details',
                'select' => 'Select',
                'upload' => 'Upload',
                'download' => 'Download',
                'loading' => 'Loading...',
                'success' => 'Success',
                'error' => 'Error',
                'continue' => 'Continue',
                'next' => 'Next',
                'previous' => 'Previous',
                'today' => 'Today',
                'monday' => 'Monday',
                'tuesday' => 'Tuesday',
                'wednesday' => 'Wednesday',
                'thursday' => 'Thursday',
                'friday' => 'Friday',
                'saturday' => 'Saturday',
                'sunday' => 'Sunday',
                'january' => 'January',
                'february' => 'February',
                'march' => 'March',
                'april' => 'April',
                'may' => 'May',
                'june' => 'June',
                'july' => 'July',
                'august' => 'August',
                'september' => 'September',
                'october' => 'October',
                'november' => 'November',
                'december' => 'December',

                // Thêm các cặp key-value khác theo ngôn ngữ tiếng Anh
                'agriculture' => 'Agriculture',
                'livestock' => 'Livestock',
                'crops' => 'Crops',
                'irrigation' => 'Irrigation',
                'harvest' => 'Harvest',
                'fertilizer' => 'Fertilizer',
                'pesticides' => 'Pesticides',
                'greenhouse' => 'Greenhouse',
                'tractors' => 'Tractors',
                'irrigation_system' => 'Irrigation System',
                'harvesting_machine' => 'Harvesting Machine',
                'cattle' => 'Cattle',
                'poultry' => 'Poultry',
                'dairy' => 'Dairy',
                'eggs' => 'Eggs',
                'cattle_feed' => 'Cattle Feed',
                'hatchery' => 'Hatchery',
                'poultry_feed' => 'Poultry Feed',
                'agronomy' => 'Agronomy',
                'soil_testing' => 'Soil Testing',
                'crop_rotation' => 'Crop Rotation',
                'composting' => 'Composting',
                'weed_control' => 'Weed Control',
                'plant_diseases' => 'Plant Diseases',
                'farm_management' => 'Farm Management',
                'crop_yields' => 'Crop Yields',
                'weather_forecast' => 'Weather Forecast',
                'green_farming' => 'Green Farming',
                'organic_farming' => 'Organic Farming',
                'hydroponics' => 'Hydroponics',
                'aquaponics' => 'Aquaponics',
                'precision_farming' => 'Precision Farming',
                'sustainable_farming' => 'Sustainable Farming',
                'farming_techniques' => 'Farming Techniques',
                'crop_monitoring' => 'Crop Monitoring',
                'livestock_health' => 'Livestock Health',
                'milking_machine' => 'Milking Machine',
                'egg_incubator' => 'Egg Incubator',
                'dairy_processing' => 'Dairy Processing',
                'food_safety' => 'Food Safety',
                'agricultural_machinery' => 'Agricultural Machinery',
                'farming_community' => 'Farming Community',
                'rural_development' => 'Rural Development',
                'agricultural_policy' => 'Agricultural Policy',
                'farm_subsidies' => 'Farm Subsidies',
                'land_tenure' => 'Land Tenure',
                'farmland' => 'Farmland',
                'crop_insurance' => 'Crop Insurance',
                'livestock_insurance' => 'Livestock Insurance',
                'agricultural_export' => 'Agricultural Export',
                'agricultural_import' => 'Agricultural Import',
                'food_processing' => 'Food Processing',
                'food_distribution' => 'Food Distribution',
                'food_supply_chain' => 'Food Supply Chain',
                'food_waste' => 'Food Waste',
                'farm_to_table' => 'Farm to Table',
                'sustainable_agriculture' => 'Sustainable Agriculture',
                'food_security' => 'Food Security',
                'agricultural_innovation' => 'Agricultural Innovation',
                'smart_farming' => 'Smart Farming',
                'vertical_farming' => 'Vertical Farming',
                'urban_farming' => 'Urban Farming',
                'agroforestry' => 'Agroforestry',
                'agricultural_research' => 'Agricultural Research',
                'farm_animals' => 'Farm Animals',
                'farming_equipment' => 'Farming Equipment',
                'food_crops' => 'Food Crops',
                'cash_crops' => 'Cash Crops',
                'crop_yield' => 'Crop Yield',
                'fertilizer_application' => 'Fertilizer Application',
                'pest_control' => 'Pest Control',
                'crop_varieties' => 'Crop Varieties',
                'crop_rotation' => 'Crop Rotation',
                'rainwater_harvesting' => 'Rainwater Harvesting',
                'crop_spraying' => 'Crop Spraying',
                'livestock_feed' => 'Livestock Feed',
                'dairy_products' => 'Dairy Products',
                'crop_harvesting' => 'Crop Harvesting',
                'farm_machinery' => 'Farm Machinery',
                'crop_monitoring' => 'Crop Monitoring',
                'farming_technology' => 'Farming Technology',
                'livestock_management' => 'Livestock Management',
                'farm_market' => 'Farm Market',
                //
                'management_system' => 'Management System',
                'user_management' => 'User Management',
                'role_management' => 'Role Management',
                'permission_management' => 'Permission Management',
                'settings' => 'Settings',
                'general_settings' => 'General Settings',
                'security_settings' => 'Security Settings',
                'notifications' => 'Notifications',
                'email_notifications' => 'Email Notifications',
                'sms_notifications' => 'SMS Notifications',
                'audit_log' => 'Audit Log',
                'activity_log' => 'Activity Log',
                'backup' => 'Backup',
                'restore' => 'Restore',
                'export' => 'Export',
                'import' => 'Import',
                'logs' => 'Logs',
                'error_logs' => 'Error Logs',
                'system_logs' => 'System Logs',
                'user_logs' => 'User Logs',
                'reports' => 'Reports',
                'financial_reports' => 'Financial Reports',
                'sales_reports' => 'Sales Reports',
                'inventory_reports' => 'Inventory Reports',
                'employee_reports' => 'Employee Reports',
                'customer_reports' => 'Customer Reports',
                'productivity_reports' => 'Productivity Reports',
                'analytics' => 'Analytics',
                'data_analysis' => 'Data Analysis',
                'performance_metrics' => 'Performance Metrics',
                'key_performance_indicators' => 'Key Performance Indicators',
                'business_intelligence' => 'Business Intelligence',
                'metrics' => 'Metrics',
                'monitoring' => 'Monitoring',
                'system_monitoring' => 'System Monitoring',
                'resource_monitoring' => 'Resource Monitoring',
                'network_monitoring' => 'Network Monitoring',
                'status' => 'Status',
                'performance' => 'Performance',
                'alerts' => 'Alerts',
                'system_alerts' => 'System Alerts',
                'security_alerts' => 'Security Alerts',
                'user_alerts' => 'User Alerts',
                'feedback' => 'Feedback',
                'customer_feedback' => 'Customer Feedback',
                'employee_feedback' => 'Employee Feedback',
                'system_feedback' => 'System Feedback',
                'survey' => 'Survey',
                'customer_survey' => 'Customer Survey',
                'employee_survey' => 'Employee Survey',
                'system_survey' => 'System Survey',
                'workflow' => 'Workflow',
                'process_management' => 'Process Management',
                //
                'street' => 'Street',
                'avenue' => 'Avenue',
                'road' => 'Road',
                'lane' => 'Lane',
                'alley' => 'Alley',
                'building' => 'Building',
                'apartment' => 'Apartment',
                'house' => 'House',
                'unit' => 'Unit',
                'floor' => 'Floor',
                'room' => 'Room',
                'city' => 'City',
                'town' => 'Town',
                'village' => 'Village',
                'suburb' => 'Suburb',
                'district' => 'District',
                'county' => 'County',
                'state' => 'State',
                'province' => 'Province',
                'country' => 'Country',
                'postal_code' => 'Postal Code',
                'zip_code' => 'Zip Code',
                'latitude' => 'Latitude',
                'longitude' => 'Longitude',
                'landmark' => 'Landmark',
                'intersection' => 'Intersection',
                'directions' => 'Directions',
                'nearby' => 'Nearby',
                'home_address' => 'Home Address',
                // Systems
                'login' => 'Login',
                'logout' => 'Logout',
                'register' => 'Register',
                'forgot_password' => 'Forgot Password',
                'reset_password' => 'Reset Password',
                'profile' => 'Profile',
                'settings' => 'Settings',
                'security' => 'Security',
                'notifications' => 'Notifications',
                'activity_log' => 'Activity Log',
                'backup' => 'Backup',
                'restore' => 'Restore',
                'export' => 'Export',
                'import' => 'Import',
                'users' => 'Users',
                'roles' => 'Roles',
                'permissions' => 'Permissions',
                'audit_log' => 'Audit Log',
                'dashboard' => 'Dashboard',
                'logs' => 'Logs',
                'pages' => 'Pages',
                'accounts' => 'Accounts',
                'accounts.setting' => 'Accounts Setting',
                'administrator' => 'Administrator',
                'user' => 'User',
                'role' => 'Role',
                'permission' => 'Permission',
                'access' => 'Access',
                'privilege' => 'Privilege',
                'authority' => 'Authority',
                'restrictions' => 'Restrictions',
                'role_management' => 'Role Management',
                'permission_management' => 'Permission Management',
                'user_management' => 'User Management',
                'assign_roles' => 'Assign Roles',
                'assign_permissions' => 'Assign Permissions',
                'view_roles' => 'View Roles',
                'edit_roles' => 'Edit Roles',
                'delete_roles' => 'Delete Roles',
                'view_permissions' => 'View Permissions',
                'edit_permissions' => 'Edit Permissions',
                'delete_permissions' => 'Delete Permissions',
                'create_roles' => 'Create Roles',
                'create_permissions' => 'Create Permissions',
                'all_roles' => 'All Roles',
                'all_permissions' => 'All Permissions',
                'super_admin' => 'Super Admin',
                'full_access' => 'Full Access',
                'limited_access' => 'Limited Access',
                'restricted_access' => 'Restricted Access',
                'create' => 'Create',
                'farm' => 'Farm',
                'ward' => 'Ward',

                //
                'billing' => 'Billing',
                'invoice' => 'Invoice',
                'payment' => 'Payment',
                'transaction' => 'Transaction',
                'balance' => 'Balance',
                'budget' => 'Budget',
                'expense' => 'Expense',
                'income' => 'Income',
                'revenue' => 'Revenue',
                'profit' => 'Profit',
                'loss' => 'Loss',
                'credit' => 'Credit',
                'debit' => 'Debit',
                'investment' => 'Investment',
                'savings' => 'Savings',
                'interest' => 'Interest',
                'loan' => 'Loan',
                'tax' => 'Tax',
                'insurance' => 'Insurance',
                'retirement' => 'Retirement',
                'data' => 'Data',
                'master_data' => 'Master Data',
                'record' => 'Record',
                'database' => 'Database',
                'table' => 'Table',
                'field' => 'Field',
                'column' => 'Column',
                'row' => 'Row',
                'entry' => 'Entry',
                'record_id' => 'Record ID',
                'data_type' => 'Data Type',
                'data_format' => 'Data Format',
                'data_source' => 'Data Source',
                'data_integration' => 'Data Integration',
                'data_migration' => 'Data Migration',
                'data_validation' => 'Data Validation',
                'data_analysis' => 'Data Analysis',
                'data_entry' => 'Data Entry',
                'data_quality' => 'Data Quality',
                'data_backup' => 'Data Backup',
                'data_restore' => 'Data Restore',
                'data_privacy' => 'Data Privacy',
                'data_security' => 'Data Security',
                'data_processing' => 'Data Processing',
                'data_storage' => 'Data Storage',
                'data_transformation' => 'Data Transformation',
                'data_cleaning' => 'Data Cleaning',
                'device' => 'Device',
                'devices' => 'Devices',
                'device_list' => 'Device List',
                'device_type' => 'Device Type',
                'device_name' => 'Device Name',
                'device_id' => 'Device ID',
                'device_status' => 'Device Status',
                'device_information' => 'Device Information',
                'device_details' => 'Device Details',
                'device_settings' => 'Device Settings',
                'device_configuration' => 'Device Configuration',
                'device_connection' => 'Device Connection',
                'device_control' => 'Device Control',
                'device_monitoring' => 'Device Monitoring',
                'add_device' => 'Add Device',
                'edit_device' => 'Edit Device',
                'delete_device' => 'Delete Device',
                'activate_device' => 'Activate Device',
                'deactivate_device' => 'Deactivate Device',
                'device_alerts' => 'Device Alerts',
                'device_status_on' => 'On',
                'device_status_off' => 'Off',
                'device_online' => 'Online',
                'device_offline' => 'Offline',
                'device_connected' => 'Connected',
                'device_disconnected' => 'Disconnected',
                'device_not_found' => 'Device Not Found',
                'device_unavailable' => 'Device Unavailable',
                'go_to_farm' => 'Go to Farm',
                'visit_farm' => 'Visit Farm',
                'farm_tour' => 'Farm Tour',
                'farm_location' => 'Farm Location',
                'farm_directions' => 'Farm Directions',
                'farm_map' => 'Farm Map',
                'farm_address' => 'Farm Address',
                'farm_access' => 'Farm Access',
                'farm_entry' => 'Farm Entry',
                'farm_exit' => 'Farm Exit',
                'farm_visitors' => 'Farm Visitors',
                'farm_guide' => 'Farm Guide',
                'farm_explore' => 'Explore Farm',
                'farm_activities' => 'Farm Activities',
                'farm_experience' => 'Farm Experience',
                'farm_fun' => 'Farm Fun',
                'farm_animals' => 'Farm Animals',
                'farm_plants' => 'Farm Plants',
                'farm_harvest' => 'Farm Harvest',
                'farm_production' => 'Farm Production',
                'farm_tourist' => 'Farm Tourist',
                'farm_visit_schedule' => 'Farm Visit Schedule',
                'farm_booking' => 'Farm Booking',
                'farm_entry_fee' => 'Farm Entry Fee',
                'farm_opening_hours' => 'Farm Opening Hours',
                'farm_closed' => 'Farm Closed',
                'farm_welcome' => 'Welcome to the Farm',
                'farm_family_trip' => 'Family Trip to the Farm',
                'information' => 'Information',
                'location_title' => 'Location Information',
                'name_code' => 'Name Code',
                'description' => 'Description',
                'customer_select' => 'Customer Select',
                'master_data_list' => 'Master List',
                'visible' => 'Visible',
                'id' => 'ID',
                'alias' => 'Alias',
                'related_table' => 'Related Table',
                'related_column' => 'Realated Column',
                'device_add_tofarm' => 'Add Sensor Nodes',
                'Module Type' => 'Module Type',
                'Device Type' => 'Device Type',
                'Compatible' => 'Compatible',
                'Main' => 'Main Sensor',
                'Module' => 'Module',
                'Wifi' => 'Wifi',
                'user' => 'User',
                'role' => 'Role',
                'permission' => 'Permission',
                'access' => 'Access',
                'dashboard' => 'Dashboard',
                'profile' => 'Profile',
                'settings' => 'Settings',
                'category' => 'Category',
                'tag' => 'Tag',
                'post' => 'Post',
                'page' => 'Page',
                'comment' => 'Comment',
                'media' => 'Media',
                'menu' => 'Menu',
                'widget' => 'Widget',
                'notification' => 'Notification',
                'analytics' => 'Analytics',
                'report' => 'Report',
                'activity log' => 'Activity Log',
                'backup' => 'Backup',
                'username' => 'Username',
                'sex' => 'Sex',
                'is_active' => 'Active',
                'is_approved' => 'Approved',
                'is_completed' => 'Completed',
                'is_featured' => 'Featured',
                'is_locked' => 'Locked',
                'is_published' => 'Published',
                'is_verified' => 'Verified',
                'is_default' => 'Default',
                'is_private' => 'Private',
                'is_visible' => 'Visible',
                'is_available' => 'Available',
                'is_suspended' => 'Suspended',
                'is_confirmed' => 'Confirmed',
                'is_promoted' => 'Promoted',
                'is_resolved' => 'Resolved',
                'is_archived' => 'Archived',
                'is_pending' => 'Pending',
                'is_rejected' => 'Rejected',
                'is_deleted' => 'Deleted',
                'active' => 'Active',
                'disabled' => 'Disabled',
                'male' => 'Male',
                'female' => 'Femail',
                'other' => 'Other',
                'back' => 'Back',
            ];
            $now = Carbon::now();
            foreach ($translations as $key => $value) {
                DB::table('translations')
                ->where('language_code', 'en')
                ->where('key', $key)
                ->delete();

            // Chèn hoặc cập nhật dữ liệu dịch
            DB::table('translations')->updateOrInsert(
                ['language_code' => 'en', 'key' => $key],
                ['value' => $value, 'created_at' => $now, 'updated_at' => $now]
            );
            }

            $this->command->info('Translations seeded successfully!');
        } catch (\Exception $e) {
        }
    }
}