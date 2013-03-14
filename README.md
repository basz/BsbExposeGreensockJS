# BsbExposeGreensockJS

BsbExposeGreensockJS is a ZF2 module that helps exposing the greensock javascript library.

Update your composer.json in your project root to include the following snipped

    "require": {
        "bushbaby/greensockjs" : "1.*"
    }

Additionally, since greensock js doesn't have a composer.json, add the following snipped to the composer.json in your project root.

    "repositories": [
        {
            "greensockjs-unofficial": {
                "type": "package",
                "package": {
                    "name": "bushbaby/greensockjs",
                    "version": "1.9.0",
                    "source": {
                        "url": "git://github.com/greensock/GreenSock-JS.git",
                        "type": "git",
                        "reference": "origin/1.9.0"
                    }
                }
            }
        },
    ]




