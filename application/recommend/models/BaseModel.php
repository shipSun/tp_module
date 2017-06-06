<?php
/*
 * @author shipSun <543999860@qq.com>
 */
 namespace app\recommend\models;
 
use think\Model;
use traits\model\SoftDelete;
 
class BaseModel extends Model{
    use SoftDelete;
    
}