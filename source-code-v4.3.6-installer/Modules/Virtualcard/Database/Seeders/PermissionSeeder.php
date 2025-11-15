<?php

namespace Modules\Virtualcard\Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // Card Holders - Admin
            [
                'group' => 'Virtual Card Holder', 'name' => 'view_card_holder', 'display_name' => 'View Card Holder', 'description' => 'View Card Holder', 'user_type' => 'Admin', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Holder', 'name' => 'add_card_holder', 'display_name' => null, 'description' => null, 'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Holder', 'name' => 'edit_card_holder', 'display_name' => null, 'description' => null, 'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Holder', 'name' => 'delete_card_holder', 'display_name' => null, 'description' => null, 'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')
            ],

            // Cards - Admin
            [
                'group' => 'Virtual Card',
                'name' => 'view_virtual_card',
                'display_name' => 'View Virtual Card',
                'description' => 'View Virtual Card',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card',
                'name' => 'add_virtual_card',
                'display_name' => 'View Virtual Card',
                'description' => 'View Virtual Card',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card',
                'name' => 'edit_virtual_card',
                'display_name' => 'Edit Virtual Card',
                'description' => 'Edit Virtual Card',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card',
                'name' => 'delete_virtual_card',
                'display_name' => 'Delete Virtual Card',
                'description' => 'Delete Virtual Card',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // Withdrawal - Admin
            [
                'group' => 'Virtual Card Withdrawal',
                'name' => 'view_card_withdrawal',
                'display_name' => 'View Card Withdrawal',
                'description' => 'View Card Withdrawal',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Withdrawal',
                'name' => 'add_card_withdrawal',
                'display_name' => null,
                'description' => null,
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Withdrawal',
                'name' => 'edit_card_withdrawal',
                'display_name' => 'Edit Card Withdrawal',
                'description' => 'Edit Card Withdrawal',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Withdrawal',
                'name' => 'delete_card_withdrawal',
                'display_name' => null,
                'description' => null,
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // Topup - admin
            [
                'group' => 'Virtual Card Topup',
                'name' => 'view_card_topup',
                'display_name' => 'View Card Topup',
                'description' => 'View Card Topup',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Topup',
                'name' => 'add_card_topup',
                'display_name' => null,
                'description' => null,
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Topup',
                'name' => 'edit_card_topup',
                'display_name' => 'Edit Card Topup',
                'description' => 'Edit Card Topup',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Topup',
                'name' => 'delete_card_topup',
                'display_name' => null,
                'description' => null,
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // Category - Admin
            [
                'group' => 'Virtual Card Category',
                'name' => 'view_card_category',
                'display_name' => 'View Card Category',
                'description' => 'View Card Category',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Category',
                'name' => 'add_card_category',
                'display_name' => 'Add Card Category',
                'description' => 'Add Card Category',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Category',
                'name' => 'edit_card_category',
                'display_name' => 'Edit Card Category',
                'description' => 'Edit Card Category',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Category',
                'name' => 'delete_card_category',
                'display_name' => 'Delete Card Category',
                'description' => 'Delete Card Category',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // Fees Limit - Admin
            [
                'group' => 'Virtual Card Fees Limit',
                'name' => 'view_card_fees_limit',
                'display_name' => 'View Card Fees Limit',
                'description' => 'View Card Fees Limit',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Fees Limit',
                'name' => 'add_card_fees_limit',
                'display_name' => 'Add Card Fees Limit',
                'description' => 'Add Card Fees Limit',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Fees Limit',
                'name' => 'edit_card_fees_limit',
                'display_name' => 'Edit Card Fees Limit',
                'description' => 'Edit Card Fees Limit',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Fees Limit',
                'name' => 'delete_card_fees_limit',
                'display_name' => 'Delete Card Fees Limit',
                'description' => 'Delete Card Fees Limit',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // Preference - Admin
            [
                'group' => 'Virtual Card Preference',
                'name' => 'view_card_preference',
                'display_name' => 'View Card Preference',
                'description' => 'View Card Preference',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Preference',
                'name' => 'add_card_preference',
                'display_name' => null,
                'description' => null,
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Preference',
                'name' => 'edit_card_preference',
                'display_name' => 'Edit Card Preference',
                'description' => 'Edit Card Preference',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Preference',
                'name' => 'delete_card_preference',
                'display_name' => null,
                'description' => null,
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // Provider - Admin
            [
                'group' => 'Virtual Card Provider',
                'name' => 'view_card_provider',
                'display_name' => 'View Card Provider',
                'description' => 'View Card Provider',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Provider',
                'name' => 'add_card_provider',
                'display_name' => 'Add Card Provider',
                'description' => 'Add Card Provider',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Provider',
                'name' => 'edit_card_provider',
                'display_name' => 'Edit Card Provider',
                'description' => 'Edit Card Provider',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'group' => 'Virtual Card Provider',
                'name' => 'delete_card_provider',
                'display_name' => 'Delete Card Provider',
                'description' => 'Delete Card Provider',
                'user_type' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // CardHolder - User
            [
                'group' => 'Virtual Card Holder',
                'name' => 'manage_card_holder',
                'display_name' => 'Manage Card Holder',
                'description' => 'Manage Card Holder',
                'user_type' => 'User',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // Card - User
            [
                'group' => 'Virtual Card',
                'name' => 'manage_virtual_card',
                'display_name' => 'Manage Virtual Card',
                'description' => 'Manage Virtual Card',
                'user_type' => 'User',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // Topup - User
            [
                'group' => 'Virtual Card Topup',
                'name' => 'manage_card_topup',
                'display_name' => 'Manage Card Topup',
                'description' => 'Manage Card Topup',
                'user_type' => 'User',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // Withdrawal - User
            [
                'group' => 'Virtual Card Withdrawal',
                'name' => 'manage_card_withdrawal',
                'display_name' => 'Manage Card Withdrawal',
                'description' => 'Manage Card Withdrawal',
                'user_type' => 'User',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            
        ];
       
        \App\Models\Permission::insert($permissions);
    }
}
