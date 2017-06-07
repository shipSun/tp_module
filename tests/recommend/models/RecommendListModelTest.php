<?php
/*
 * @author shipSun <543999860@qq.com>
 */
namespace tests\recommend\models;

use tests\TestCase;
use app\recommend\models\RecommendModel;
use app\recommend\models\RecommendListModel;

class RecommendListModelTest extends TestCase{
    public function testTransposition(){
        $recommendModelFrom = new RecommendModel();
        $recommendModelTo = new RecommendModel();
        $recommendListModel = new RecommendListModel();
        
        $recommendListModel->transposition($recommendModelFrom, $recommendModelTo);
    }
}