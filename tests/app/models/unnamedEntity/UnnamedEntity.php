<?php
namespace app\models\entity;

use devskyfly\yiiModuleAdminPanel\models\contentPanel\AbstractUnnamedEntity;

class UnnamedEntityExtension extends AbstractUnnamedEntity
{
    public static function sectionCls()
    {
        return null;
    }
    
    public function extensions()
    {
        return [];
        /*return [
            'page'=>EntityPageExtension::class
        ];*/
    }

    public function binders(){
        return [];
        /*return [
            'EntityToSubEntityBinder'=>EntityToSubEntityBinder::class,
        ];*/
    }
    
    public static function selectListRoute()
    {
        return "/unnamed-entity/section-select-list";
    }
}