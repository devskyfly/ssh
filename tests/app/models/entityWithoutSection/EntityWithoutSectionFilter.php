<?php
namespace app\models\entity;

use devskyfly\yiiModuleAdminPanel\models\contentPanel\FilterInterface;
use devskyfly\yiiModuleAdminPanel\models\contentPanel\FilterTrait;

class EntityWithoutSectionFilter extends EntityWithoutSection implements FilterInterface
{
    use FilterTrait;
    
    public function rules()
    {
        return [[["data","active"],"string"]];
    }
}