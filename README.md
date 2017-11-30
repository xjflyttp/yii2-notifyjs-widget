# yii2-notifyjs-widget
```
http://notifyjs.com/
https://github.com/notifyjs/notifyjs
```

### composer.json
---
```json
"require": {
    "xj/yii2-notifyjs-widget": "~1.0"
},
```

Assets
---
```php
//Base Assets
xj\notifyjs\NotifyjsAsset::register($this);

//Themes Assets
xj\notifyjs\themes\MetroAsset::register($this);

```

Note
---

```
//bootstrap theme include in notify.js, you can direct use it.
//see source
https://github.com/jpillora/notifyjs/blob/0b8891e/dist/notify.js#L531-L571
```