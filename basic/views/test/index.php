<?php
/**
 * @var $this yii\web\View
 * @var $model app\models\Product
 */ 
?>

<h1>TEST</h1>
<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem dolore adipisci, molestiae quia, quas eveniet minima optio amet facere ipsum ducimus! Sed adipisci cupiditate consectetur fuga eius repellendus labore quasi!</div>
<div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, est ab! Minus soluta, officiis ipsa reprehenderit nobis sequi facere, eaque commodi assumenda molestias aliquid corporis est culpa perferendis qui. Odit.</div>
<?php
echo '<hr>';
echo $model->name;
echo '<hr>';
echo \yii\widgets\DetailView::widget(['model' => $model]);
echo '<hr>';
echo $var1;
echo '<hr>';
echo $var2;
?> 