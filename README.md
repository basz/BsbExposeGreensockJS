# BsbExposeGreensockJS

BsbExposeGreensockJS is a ZF2 module that helps exposing the greensock javascript library.

Update your composer.json in your project root to include the following snipped

    "require": {
        "bushbaby/expose-greensock-js": "dev-master"
    }

Additionally, since greensock js doesn't have a composer.json, add the following snipped to the composer.json in your project root.

    "repositories": {
        "bushbaby-greensockjs": {
            "type": "package",
            "package": {
                "name": "bushbaby/greensockjs",
                "version": "1.9.0",
                "source": {
                    "url": "git://github.com/greensock/GreenSock-JS.git",
                    "type": "git",
                    "reference": "1.9.0"
                }
            }
        }
    }

The assets will be available under /js/vendor/gsap/

#### Provided Collections

###### /js/vendor/gsap/TweenMaxPack.js

contains : tweenMax, timelineMax, jQueryPlugin, ease and plugin packs
 
###### /js/vendor/gsap/plugins/pluginPack.js

contains : all plugins

###### /js/vendor/gsap/easing/EasePack.js

contains : all ease functions

##### Notes

- no 'pack' is provided for TweenLite
- easing/EasePack.js is provided by the library itself, plugin follows that convention
- minified and uncompressed files are merged into a single location structure 
  
