<?php


$model = JModelLegacy::getInstance('Article', 'ContentModel', array('ignore_request'=>true));
$articleID = JFactory::getApplication()->input->get('id');
$appParams = JFactory::getApplication()->getParams();
$model->setState('params', $appParams);
$article = $model->getItem($articleID);

switch($props['source']){
    case 'title':
    default:
    $string = $article->title;
};
var_dump($props);
echo '<'.$props['container'].' class="'.$props['class'].'">'.$string.'</'.$props['container']."> \n";

?>

    <?php // render node title field by using $props['title'] ?>

    <?php // render node select field by using $props['select'] ?>

</div>
