# Php router for static pages
<hr>
#Usage:
<br>
/app/router.php

```php

$app->route('/name/of/the/route', Closure);

```
Where Closure is a function thet will be executed<br>
when the route is requested.<br><br>
```php
function () {
    $data = [];

    return show('name of the view', $data);
}
```
<hr>
Utilises 'Blade' templating engine https://laravel.com/docs/5.3/blade<br>
<hr>
##Setting class "active" on navigation links:
```html

<script src="{{BASE_URL}}res/js/set_active_link.js"></script>
<script>
    addActiveLink({
        linksSelector: '#navbar a', // Csss selector for adding class active on nav links.
        root: '/', // For project subfolders; should be the same as 'RewriteBase' in .htaccess.
    });
</script>

```
