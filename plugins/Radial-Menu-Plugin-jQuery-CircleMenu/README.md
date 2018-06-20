# CircleMenu
Simple circle menu with animation.

This CircleMenu only can add 24 items, if you add more than that, CircleMenu works but the items will overlap each other.
Please include [Lodash](http://lodash.com) & [Tweenmax](https://greensock.com/tweenmax) to your project to make circle menu works.

Define first in html :
```html
<div id="my-circle-menu" class="cm-container">
  <ul class="cm-items">
  </ul>
  <div class="cm-selected-container">
    <div class="cm-selected-label">
      <span></span>
    </div>
    <a class="cm-button cm-button-prev" type="button" title="Previous"><i class="fa fa-chevron-left"></i></a>
    <a class="cm-button cm-button-next" type="button" title="Next"><i class="fa fa-chevron-right"></i></a>
  </div>
</div>
```
For next and previous button, you can replace it to other font/icon, I'm using [Fontawesome](http://fontawesome.io).

How to use :
```javascript
var DATA_ARRAY = [{label: 'Menu 0', url: 'menu-0'}];
var MycircleMenu = new CircleMenu($('#my-circle-menu'), DATA_ARRAY, 'menu-0', {key: 'url'}, CALLBACKS);
```

Callbacks :
```javascript
var CALLBACKS = {
  onInit: function() {
    console.log('INIT');
  },
  onChangeBegin: function() {
    console.log('CHANGE');
  },
  onChangeComplete: function(d) {
    console.log('CHANGE_COMPLETE')
    console.log(d)
  },
  onLoadPageComplete: function() {
    console.log('PAGE LOADED');
  }
}
```

```onLoadPageComplete``` not really implemented
