<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('roles')->where('slug', 'admin')->update([
            'permissions' =>  '{"blog.posts.index":true,"blog.posts.create":true,"blog.posts.edit":true,"blog.posts.destroy":true,"blog.categories.index":true,"blog.categories.create":true,"blog.categories.edit":true,"blog.categories.destroy":true,"contact.contactrequests.index":true,"contact.contactrequests.show":true,"contact.contactrequests.destroy":true,"core.sidebar.group":true,"dashboard.index":true,"dashboard.update":true,"dashboard.reset":true,"media.medias.index":true,"media.medias.create":true,"media.medias.edit":true,"media.medias.destroy":true,"media.folders.index":true,"media.folders.create":true,"media.folders.edit":true,"media.folders.destroy":true,"menu.menus.index":true,"menu.menus.create":true,"menu.menus.edit":true,"menu.menus.destroy":true,"menu.menuitems.index":true,"menu.menuitems.create":true,"menu.menuitems.edit":true,"menu.menuitems.destroy":true,"page.pages.index":true,"page.pages.create":true,"page.pages.edit":true,"page.pages.destroy":true,"setting.settings.index":true,"setting.settings.edit":true,"tag.tags.index":true,"tag.tags.create":true,"tag.tags.edit":true,"tag.tags.destroy":true,"translation.translations.index":true,"translation.translations.edit":true,"translation.translations.import":true,"translation.translations.export":true,"user.users.index":true,"user.users.create":true,"user.users.edit":true,"user.users.destroy":true,"user.roles.index":true,"user.roles.create":true,"user.roles.edit":true,"user.roles.destroy":true,"account.api-keys.index":true,"account.api-keys.create":true,"account.api-keys.destroy":true,"workshop.sidebar.group":true,"workshop.modules.index":true,"workshop.modules.show":true,"workshop.modules.update":true,"workshop.modules.disable":true,"workshop.modules.enable":true,"workshop.modules.publish":true,"workshop.themes.index":true,"workshop.themes.show":true,"workshop.themes.publish":true}'
        ]);
        DB::table('roles')->insert([
            [
                'slug' => 'publisher',
                'name' => 'Publisher',
                'permissions' => '{"blog.posts.index":true,"blog.posts.create":true,"blog.posts.edit":true,"blog.posts.destroy":true,"blog.categories.index":true,"blog.categories.create":true,"blog.categories.edit":true,"blog.categories.destroy":true,"contact.contactrequests.index":true,"contact.contactrequests.show":true,"contact.contactrequests.destroy":true,"core.sidebar.group":true,"dashboard.index":true,"dashboard.update":true,"dashboard.reset":true,"media.medias.index":true,"media.medias.create":true,"media.medias.edit":true,"media.medias.destroy":true,"media.folders.index":true,"media.folders.create":true,"media.folders.edit":true,"media.folders.destroy":true,"menu.menus.index":true,"menu.menus.create":true,"menu.menus.edit":true,"menu.menus.destroy":true,"menu.menuitems.index":true,"menu.menuitems.create":true,"menu.menuitems.edit":true,"menu.menuitems.destroy":true,"page.pages.index":true,"page.pages.create":true,"page.pages.edit":true,"page.pages.destroy":true,"setting.settings.index":false,"setting.settings.edit":false,"tag.tags.index":true,"tag.tags.create":true,"tag.tags.edit":true,"tag.tags.destroy":true,"translation.translations.index":false,"translation.translations.edit":false,"translation.translations.import":false,"translation.translations.export":false,"user.users.index":false,"user.users.create":false,"user.users.edit":false,"user.users.destroy":false,"user.roles.index":false,"user.roles.create":false,"user.roles.edit":false,"user.roles.destroy":false,"account.api-keys.index":false,"account.api-keys.create":false,"account.api-keys.destroy":false,"workshop.sidebar.group":false,"workshop.modules.index":false,"workshop.modules.show":false,"workshop.modules.update":false,"workshop.modules.disable":false,"workshop.modules.enable":false,"workshop.modules.publish":false,"workshop.themes.index":false,"workshop.themes.show":false,"workshop.themes.publish":false}',
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
    }
}
