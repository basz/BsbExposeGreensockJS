# BsbExposeGreensockJS

BsbExposeGreensockJS is a ZF2 module that helps exposing the greensock javascript library.

Update your composer.json in your project root to include the following snipped

    "require": {
        "bushbaby/expose-greensock-js": "dev-master"
    }

Additionally, since greensock js doesn't have a composer.json, add the following snipped to the composer.json in your project root.

   "repositories":
       {
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
       },




