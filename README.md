CArtisteerMenu
==============

Wrapper Artisteer menu to Yii Framework

> *Write code in tag <nav class="art-nav clearfix">  <!-- Menu on here -->  </nav>*

#### Example
```php
<?php $this->widget('zii.CArtisteerMenu', array(
	items' => array(
		array('label' => 'Home', 'url' => array('/site/index')),
		array('label' => 'Contact', 'url' => array('/site/contact')),
		array('label' => 'Category', 'url' => array('/site/categori'),
			'items' => array(
				array('label' => 'Tutorial', 'url' => array('/tutorial')),
				array('label' => 'Ebook', 'url' => array('/ebook')),
			)
		)
	)
)); ?>
```