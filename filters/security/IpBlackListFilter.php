<?php
namespace devskyfly\yiiModuleAdminPanel\filters\security;

use yii\base\ActionFilter;
use devskyfly\php56\types\Vrbl;
use devskyfly\yiiModuleAdminPanel\models\security\IpBlackList;
use Yii;
use yii\web\ForbiddenHttpException;

class IpBlackListFilter extends ActionFilter
{
    public function beforeAction($action)
    {
        $request=Yii::$app->request;
        $ip=$request->userIp;
        
        $model=IpBlackList::findByIp($ip);
        if(!Vrbl::isNull($model)){
            if($model->active=='Y'){
                throw new ForbiddenHttpException();
            }
        }
        
        return parent::beforeAction($action);
    }
}