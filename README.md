CArtisteerMenu
==============

Wrapper Artisteer menu on Yii Framework

> *Write code in tag &lt;nav class="art-nav clearfix"&gt;  &lt;!-- Your Code --&gt;  &lt;/nav&gt;*

#### Example
```php
<?php $this->widget('ext.CArtisteerMenu', array(
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