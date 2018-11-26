<?php
namespace devskyfly\yiiModuleAdminPanel\models\security;

use devskyfly\yiiModuleAdminPanel\models\contentPanel\AbstractEntity;

/**
 * 
 * @author devskyfly
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property string $active
 * @property integer $sort
 * @property string $create_date_time
 * @property string $change_date_time
 * @property string $_section__id
 */
class IpBlackList extends AbstractEntity
{
    protected static function sectionCls()
    {
        return null;
    }

    public function extensions()
    {
        return [];
    }

    public function getIp()
    {
        return $this->name;
    }
    
    public function setIp($val)
    {
        $this->name=$val;
        return $this;
    }
    
    public function rules()
    {
        $rules=parent::rules();
        $rules[]=['name','ip'];
        return $rules;
    }
    
    /**
     * 
     * @param string $ip
     * @return \yii\db\ActiveRecord|array|NULL
     */
    public function findByIp($ip)
    {
        return $this->find()->where(['name'=>$ip])->one();
    }
}
