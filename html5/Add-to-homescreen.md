# Add to homescreen

* [The Web App Manifest](https://developers.google.com/web/fundamentals/web-app-manifest/?utm_source=devtools).
* [Making Fullscreen Experiences](https://developers.google.com/web/fundamentals/native-hardware/fullscreen/).

## Manifest

```html
<link rel="manifest" href="/manifest.json">
```

```json
{
  "short_name": "My APP",
  "name": "My Splendeur APP",
  "icons": [
    {
      "src": "launcher-icon-4x.png",
      "sizes": "192x192",
      "type": "image/png"
    }
  ],
  "start_url": "/products.html",
  "display": "standalone",
  "orientation": "landscape",
  "background_color": "#666666",
  "theme_color": "#666666"
}
```

## How to test?
Chrome Dev Tools -> Application -> Manifest.

> Requires HTTPS to test 'Add to homescreen'.
> Site cannot be installed: a 144px square icon is required, but no supplied icon meets this requirement.

## Hide adressbar keep nav
```json
  "display": "standalone",
```

## hide address and nav
```json
  "display": "standalone",
```
