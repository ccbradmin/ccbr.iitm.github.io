<?php

class AdminController extends BaseController {

    /* Admin Page (GET) */
    public function getAdminHome()
    {
        $git_pull = shell_exec("git pull 2>&1");
        View::share("git_pull",$git_pull);
        return View::make('admin.home');
    }

    /* Admin Page - Git Pull (GET) */
    public function getAdminGitPull()
    {
        $git_pull = shell_exec("git pull 2>&1");
        return $git_pull;
    }

    /* Admin Page - Git Pull (POST) */
    public function postAdminGitPull()
    {
        $git_pull = shell_exec("git pull 2>&1");
        return $git_pull;
    }

}
