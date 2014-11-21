<h1>Congratulations!</h1>
<p>You're now flying with Phalcon. Great things are about to happen!</p>

{% for shop in Shops %}
	{{ shop.getName() }}
	<br>
	{% for product in shop.getProduct() %}
		&ensp;	{{ product.getName() }}
	{% endfor %}
	<br>
{% endfor %}
