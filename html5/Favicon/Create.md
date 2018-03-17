# Create multiple size favicons

## Create PNGs

> An .ico file is a container for multiple .bmp or .png icons of different sizes. In favicon.ico, create at least these:

|Size|Name|Purpose|
|:---|---:|------:|
|16x16|favicon-16.png|Default required by IE. Chrome and Safari may pick ico over png, sadly.|
|32x32|favicon-32.png|Certain old but not too old Chrome versions mishandle ico|
|57x57|favicon-57.png|Standard iOS home screen (iPod Touch, iPhone first generation to 3G)|
|76x76|favicon-76.png|iPad home screen icon|
|96x96|favicon-96.png|GoogleTV icon|
|120x120|favicon-120.png|iPhone retina touch icon (Change for iOS 7: up from 114x114)|
|128x128|favicon-128.png|Chrome Web Store icon|
|128x128|smalltile.png|Small Windows 8 Star Screen Icon|
|144x144|favicon-144.png|IE10 Metro tile for pinned site|
|152x152|favicon-152.png|iPad retina touch icon (Change for iOS 7: up from 144x144)|
|180x180|favicon-180.png|iPhone 6 plus|
|195x195|favicon-195.png|Opera Speed Dial icon (Not working in Opera 15 and later)|
|196x196|favicon-196.png|Chrome for Android home screen icon|
|228x228|favicon-228.png|Opera Coast icon|
|270x270|mediumtile.png|Medium Windows 8 Start Screen Icon|
|558x270|widetile.png|Wide Windows 8 Start Screen Icon|
|558x558|largetile.png|Large Windows 8 Start Screen Icon|

## Wrap them in favicon.ico

> For the main favicon itself, it's best for cross-browser compatibility not to use any HTML. Just name the file favicon.ico and place it in the root of your domain.

```bash
convert favicon-16.png favicon-32.png favicon-64.png favicon-96.png favicon-128.png favicon-256.png favicon.ico
```

## Store

In root directory -> yoursite.local/favicon.ico.

## Conclusions

* All devices by default finds the favicon.ico, without using HTML. Tested by not including the referer.
* Multiple sizes included in the ico are really used. For example, when using 'Add to homescreen', it creates a list of 
icons in `~./local/share/icons/hicolor/ 128x128  16x16  256x256  32x32  48x48`. Tested by checking those icons and the are 
the ones I bundlded.

## Additional

### HTML5 syntax to include them all

```html5
<link rel="icon" type="image/png" href="https://cdn.yourwebsite.com/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="https://cdn.yourwebsite.com/favicon-96x96.png" sizes="96x96">
```
