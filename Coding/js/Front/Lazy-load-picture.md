# [A simple Lazy load for `<picture>` elements](//ruu.lv)

```js
// Activate an image by setting it's target.
function loadLazyPic(lazyPic){		

  // Define used variables.		   
   var sources, source, img;

  // In `source` element.
  sources = lazyPic.querySelectorAll("source")
  var srcCnt = sources.length;			
  for(var j = 0; j < srcCnt; j++){
    source = sources[j];				
    source.srcset = source.dataset.srcset;
  }		

  // In `img` element.
  img = lazyPic.querySelector("img");
  img.src = img.dataset.src;	

  // Mark the image as processed;				
  lazyPic.classList.remove("lazy");			
}

// Activate images by setting their targets.
function loadLazyPics(){

  // Find all images than needs to be loaded with a delay.
   var lazyPics = document.querySelectorAll(".lazy")

  for(var i = 0; i < lazyPics.length; i++){	

    // Execture this every 0,5s. Note the `* i`, otherwise everything is executed exactly after 0.5s.
    setTimeout(loadLazyPic, 500 * 	i, lazyPics[i]);
  }
}
```
