<?php
$vv=new VV_doc_reference($_vars);
?>
<div>
<ul class="nav nav-list " data-spy="affix" data-offset-top="300">
    <?
    $variables=$vv->publicVariables;
    foreach($variables as $k=>$v):?>
        <li>var <?=$v->name?></li>
    <?endforeach?>
</ul>
    &nbsp;
</div>
<div class="sections-menu">
    <ul class="nav nav-list " zzzdata-spy="affix" zzzdata-offset-top="0">
            <li class="nav-header">
                Your project
            </li>

            <li class="divider"></li>
            
            <li class="nav-header">
                Your Controllers
            </li>
            
            <li>
                <?=$this->render("doc/reference/menu-folder",$vv->appControllers)?>
            </li>
            
            <li class="nav-header">
                Your Models
            </li>
            
            <li>
                <?=$this->render("doc/reference/menu-folder",$vv->appModels)?>
            </li>
            
            <li class="divider"></li>
            
            <li class="nav-header">
                Tools
            </li>
            <li>
                <?=$this->render("doc/reference/menu-folder",$vv->systemTools)?>
            </li>
    </ul>
    &nbsp;
</div>