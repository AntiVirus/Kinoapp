<?php
$this->breadcrumbs=array(
	'Seans',
);

$this->menu=array(
	array('label'=>'Utwórz Seans', 'url'=>array('create')),
	array('label'=>'Zarządzaj Seans', 'url'=>array('admin')),
);
Yii::app()->clientScript->registerScript('search',
    "var ajaxUpdateTimeout;
    var ajaxRequest;
    $('input#string').keyup(function(){
        ajaxRequest = $(this).serialize();
        clearTimeout(ajaxUpdateTimeout);
        ajaxUpdateTimeout = setTimeout(function () {
            $.fn.yiiListView.update(
// tu wskazuje gdzie maja byc przekazywane wyniki
                'ajaxListView',
                {data: ajaxRequest}
            )
        },
        300);
    });"
);
?>

<h1>Seans</h1>

<p>Wybierz dzień</p>

<?php
for($dzien=0; $dzien<7; $dzien++)
{
echo '<a href=\'index.php?r=seans&daymore='.$dzien.'\'>'.date(j,strtotime('now 
+'.$dzien.' day')).'</a>  ';
//echo '<tr>'.date(l,strtotime('now +'.$dzien.' day')).'</td></tr>';
}

?>

<h1><?php 
$nazwy = array(
                  'January'   => 'Stycznia', 
                  'February'  => 'Lutego', 
                  'March'     => 'Marca', 
                  'April'     => 'Kwietnia', 
                  'May'       => 'Maja', 
                  'June'      => 'Czerwca', 
                  'July'      => 'Lipca', 
                  'August'    => 'Sierpnia', 
                  'September' => 'Września', 
                  'October'   => 'Października', 
                  'November'  => 'Listopada', 
                  'December'  => 'Grudnia',
		'Monday' => 'Poniedziałek',
		'Tuesday' => 'Wtorek',
		'Wednesday' => 'Środa',
		'Thursday' => 'Czwartek',
		'Friday' => 'Piątek',
		'Saturday' => 'Sobota',
		'Sunday' => 'Niedziela'
                 ); 

 if(isset($_GET['daymore'])){
                $daymore=$_GET['daymore'];
                } else {
                $daymore=0;
                }

 
  echo strtr(date('l j F Y',strtotime('now +'.$daymore.' days')), $nazwy); ?></h1>

<?php
echo 'Wyszukaj po nazwie filmu:';
echo CHtml::beginForm('', 'get', array('id'=>'filter-form'))
    . CHtml::textField('string', (isset($_GET['string'])) ? $_GET['string'] : '', array('id'=>'string'))
//    . CHtml::submitButton('Search', array('name'=>''))
    . CHtml::endForm();





$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'id'=>'ajaxListView',
	 

)); 

?>
