<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'domain' => config('admin.route.domain'),
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    /*后勤超级管理员*/
    /*公告管理*/
    $router->resource('Manager/BxNotice', 'Manager\BxNoticeController');
    /*寝室楼管理*/
    $router->resource('Manager/BxHostelmanage', 'Manager\BxHostelmanageController');
    /*查看保修单*/
    $router->resource('Manager/BxRepairorder', 'Manager\BxRepairorderController');
    /*报销单审批*/
    $router->resource('Manager/BxPurchasebxSp', 'Manager\BxPurchasebxSpController');


    /*学生*/
    /*填写报修单*/
    $router->resource('Student/StudentBxRepairorder', 'Student\StudentBxRepairorderController');

    /*维修人员*/
    /*维修单管理*/
    $router->resource('Repairers/BxRepairorder', 'Repairers\BxRepairorderController');
    /*维修类别*/
    $router->resource('Repairers/BxType', 'Repairers\BxTypeController');
    /*物资报销申请*/
    $router->resource('Repairers/BxPurchasebx', 'Repairers\BxPurchasebxController');
});
