<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 24,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 25,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 26,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 27,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 28,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 29,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 30,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 31,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 32,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 33,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 34,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 35,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 36,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 37,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 38,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 39,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 40,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 41,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 42,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 43,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 44,
                'title' => 'social_create',
            ],
            [
                'id'    => 45,
                'title' => 'social_edit',
            ],
            [
                'id'    => 46,
                'title' => 'social_show',
            ],
            [
                'id'    => 47,
                'title' => 'social_delete',
            ],
            [
                'id'    => 48,
                'title' => 'social_access',
            ],
            [
                'id'    => 49,
                'title' => 'banner_create',
            ],
            [
                'id'    => 50,
                'title' => 'banner_edit',
            ],
            [
                'id'    => 51,
                'title' => 'banner_show',
            ],
            [
                'id'    => 52,
                'title' => 'banner_delete',
            ],
            [
                'id'    => 53,
                'title' => 'banner_access',
            ],
            [
                'id'    => 54,
                'title' => 'about_create',
            ],
            [
                'id'    => 55,
                'title' => 'about_edit',
            ],
            [
                'id'    => 56,
                'title' => 'about_show',
            ],
            [
                'id'    => 57,
                'title' => 'about_delete',
            ],
            [
                'id'    => 58,
                'title' => 'about_access',
            ],
            [
                'id'    => 59,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 60,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 61,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 62,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 63,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 64,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 65,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 66,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 67,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 68,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 69,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 70,
                'title' => 'product_create',
            ],
            [
                'id'    => 71,
                'title' => 'product_edit',
            ],
            [
                'id'    => 72,
                'title' => 'product_show',
            ],
            [
                'id'    => 73,
                'title' => 'product_delete',
            ],
            [
                'id'    => 74,
                'title' => 'product_access',
            ],
            [
                'id'    => 75,
                'title' => 'ctum_create',
            ],
            [
                'id'    => 76,
                'title' => 'ctum_edit',
            ],
            [
                'id'    => 77,
                'title' => 'ctum_show',
            ],
            [
                'id'    => 78,
                'title' => 'ctum_delete',
            ],
            [
                'id'    => 79,
                'title' => 'ctum_access',
            ],
            [
                'id'    => 80,
                'title' => 'client_create',
            ],
            [
                'id'    => 81,
                'title' => 'client_edit',
            ],
            [
                'id'    => 82,
                'title' => 'client_show',
            ],
            [
                'id'    => 83,
                'title' => 'client_delete',
            ],
            [
                'id'    => 84,
                'title' => 'client_access',
            ],
            [
                'id'    => 85,
                'title' => 'contact_create',
            ],
            [
                'id'    => 86,
                'title' => 'contact_edit',
            ],
            [
                'id'    => 87,
                'title' => 'contact_show',
            ],
            [
                'id'    => 88,
                'title' => 'contact_delete',
            ],
            [
                'id'    => 89,
                'title' => 'contact_access',
            ],
            [
                'id'    => 90,
                'title' => 'contact_request_create',
            ],
            [
                'id'    => 91,
                'title' => 'contact_request_edit',
            ],
            [
                'id'    => 92,
                'title' => 'contact_request_show',
            ],
            [
                'id'    => 93,
                'title' => 'contact_request_delete',
            ],
            [
                'id'    => 94,
                'title' => 'contact_request_access',
            ],
            [
                'id'    => 95,
                'title' => 'newsletter_create',
            ],
            [
                'id'    => 96,
                'title' => 'newsletter_edit',
            ],
            [
                'id'    => 97,
                'title' => 'newsletter_show',
            ],
            [
                'id'    => 98,
                'title' => 'newsletter_delete',
            ],
            [
                'id'    => 99,
                'title' => 'newsletter_access',
            ],
            [
                'id'    => 100,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
