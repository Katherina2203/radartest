<?php
namespace backend\assets;

use yii\web\AssetBundle;
/**
 * Description of AdminAsset
 *
 * @author КАТЕРИНА
 */
class AdminAsset  extends AssetBundle{
   public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $js = [
        'datatables/dataTables.bootstrap.min.js',
        // more plugin Js here
    ];
    public $css = [
        'datatables/dataTables.bootstrap.css',
        // more plugin CSS here
    ];
    public $depends = [
        'dmstr\web\AdminLteAsset',
    ];
}
