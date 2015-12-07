<?php
$this->_getAdminHeader(Yii::app()->session['metaHeader']);
$this->_showadminmenu();
$this->_getAdminFooter("http://docs.gowebsurvey.com", $clang->gT("GoWebSurvey online manual"));
?>