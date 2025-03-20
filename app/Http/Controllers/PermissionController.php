<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveFaq;
use App\Http\Requests\SavePermissionAndRole;
use App\Services\FaqService;
use App\Services\PermissionService;
use App\Services\RoleService;
use App\Services\SettingService;

class PermissionController extends Controller
{
    private PermissionService $permissionService;
    private RoleService $roleService;

    public function __construct()
    {
        $this->permissionService = new PermissionService();
        $this->roleService = new RoleService();
    }

    /**
     * create permission and role
     */


    public function index()
    {
        try {
            $this->settingService->create($saveFaq->validated());
            return redirect()->back()->with('success', 'عملیات با موفقیت انجام شد!');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }

    public function savePermission(SavePermissionAndRole $permissionAndRole)
    {
        try {
            Permission::create(['name'=>'posts.*']);
            $this->permissionService->createpermission($permissionAndRole->validated());
            return redirect()->back()->with('success', 'عملیات با موفقیت انجام شد!');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }
    public function saveRole(SavePermissionAndRole $permissionAndRole)
    {
        try {
            Role::create(['name' => 'reader', 'team_id' => 1]);
            $this->roleService->createRole($permissionAndRole->validated());
            return redirect()->back()->with('success', 'عملیات با موفقیت انجام شد!');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }

}
