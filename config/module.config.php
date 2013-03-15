<?php

/*
 * Configures the following
 *
 * Files are available under /js/vendor/gsap/
 *
 * a TweenMaxPack.js
 *  contains : tweenMax, timelineMax, jQueryPlugin, Ease and Plugin packs
 *
 * a plugins/pluginPack.js
 *  Contains all plugins
 *
 * a easing/EasePack.js
 *  Contains all ease functions (comes with library)
 *
 * Notes :
 *  - no 'pack' is provided for TweenLite
 *  - easing/EasePack.js is provided by the library itself, plugin follows that convention
 *  - minified and uncompressed files are merged into a single location structure
 *    (uncomment the 'path' key to expose the files at their original locations
 *
 */

$exposePath = 'js/vendor/gsap';

return array(
    'asset_manager' => array(
        'resolver_configs' => array(
//            'paths' => array(
//                './vendor/bushbaby/greensockjs/src/minified',
//            ),
            'map' => array (
                $exposePath . '/easing/EasePack.min.js' => './vendor/bushbaby/greensockjs/src/minified/easing/EasePack.min.js',
                $exposePath . '/plugins/AttrPlugin.min.js' => './vendor/bushbaby/greensockjs/src/minified/plugins/AttrPlugin.min.js',
                $exposePath . '/plugins/BezierPlugin.min.js' => './vendor/bushbaby/greensockjs/src/minified/plugins/BezierPlugin.min.js',
                $exposePath . '/plugins/CSSPlugin.min.js' => './vendor/bushbaby/greensockjs/src/minified/plugins/CSSPlugin.min.js',
                $exposePath . '/plugins/CSSRulePlugin.min.js' => './vendor/bushbaby/greensockjs/src/minified/plugins/CSSRulePlugin.min.js',
                $exposePath . '/plugins/ColorPropsPlugin.min.js' => './vendor/bushbaby/greensockjs/src/minified/plugins/ColorPropsPlugin.min.js',
                $exposePath . '/plugins/DirectionalRotationPlugin.min.js' => './vendor/bushbaby/greensockjs/src/minified/plugins/DirectionalRotationPlugin.min.js',
                $exposePath . '/plugins/EaselPlugin.min.js' => './vendor/bushbaby/greensockjs/src/minified/plugins/EaselPlugin.min.js',
                $exposePath . '/plugins/RaphaelPlugin.min.js' => './vendor/bushbaby/greensockjs/src/minified/plugins/RaphaelPlugin.min.js',
                $exposePath . '/plugins/RoundPropsPlugin.min.js' => './vendor/bushbaby/greensockjs/src/minified/plugins/RoundPropsPlugin.min.js',
                $exposePath . '/plugins/ScrollToPlugin.min.js' => './vendor/bushbaby/greensockjs/src/minified/plugins/ScrollToPlugin.min.js',
                $exposePath . '/plugins/TextPlugin.min.js' => './vendor/bushbaby/greensockjs/src/minified/plugins/TextPlugin.min.js',
                $exposePath . '/easing/EasePack.js' => './vendor/bushbaby/greensockjs/src/uncompressed/easing/EasePack.js',
                $exposePath . '/plugins/AttrPlugin.js' => './vendor/bushbaby/greensockjs/src/uncompressed/plugins/AttrPlugin.js',
                $exposePath . '/plugins/BezierPlugin.js' => './vendor/bushbaby/greensockjs/src/uncompressed/plugins/BezierPlugin.js',
                $exposePath . '/plugins/CSSPlugin.js' => './vendor/bushbaby/greensockjs/src/uncompressed/plugins/CSSPlugin.js',
                $exposePath . '/plugins/CSSRulePlugin.js' => './vendor/bushbaby/greensockjs/src/uncompressed/plugins/CSSRulePlugin.js',
                $exposePath . '/plugins/ColorPropsPlugin.js' => './vendor/bushbaby/greensockjs/src/uncompressed/plugins/ColorPropsPlugin.js',
                $exposePath . '/plugins/DirectionalRotationPlugin.js' => './vendor/bushbaby/greensockjs/src/uncompressed/plugins/DirectionalRotationPlugin.js',
                $exposePath . '/plugins/EaselPlugin.js' => './vendor/bushbaby/greensockjs/src/uncompressed/plugins/EaselPlugin.js',
                $exposePath . '/plugins/RaphaelPlugin.js' => './vendor/bushbaby/greensockjs/src/uncompressed/plugins/RaphaelPlugin.js',
                $exposePath . '/plugins/RoundPropsPlugin.js' => './vendor/bushbaby/greensockjs/src/uncompressed/plugins/RoundPropsPlugin.js',
                $exposePath . '/plugins/ScrollToPlugin.js' => './vendor/bushbaby/greensockjs/src/uncompressed/plugins/ScrollToPlugin.js',
                $exposePath . '/plugins/TextPlugin.js' => './vendor/bushbaby/greensockjs/src/uncompressed/plugins/TextPlugin.js',
                $exposePath . '/TimelineLite.min.js' => './vendor/bushbaby/greensockjs/src/minified/TimelineLite.min.js',
                $exposePath . '/TimelineMax.min.js' => './vendor/bushbaby/greensockjs/src/minified/TimelineMax.min.js',
                $exposePath . '/TweenLite.min.js' => './vendor/bushbaby/greensockjs/src/minified/TweenLite.min.js',
                $exposePath . '/TweenMax.min.js' => './vendor/bushbaby/greensockjs/src/minified/TweenMax.min.js',
                $exposePath . '/jquery.gsap.min.js' => './vendor/bushbaby/greensockjs/src/minified/jquery.gsap.min.js',
                $exposePath . '/TimelineLite.js' => './vendor/bushbaby/greensockjs/src/uncompressed/TimelineLite.js',
                $exposePath . '/TimelineMax.js' => './vendor/bushbaby/greensockjs/src/uncompressed/TimelineMax.js',
                $exposePath . '/TweenLite.js' => './vendor/bushbaby/greensockjs/src/uncompressed/TweenLite.js',
                $exposePath . '/TweenMax.js' => './vendor/bushbaby/greensockjs/src/uncompressed/TweenMax.js',
                $exposePath . '/jquery.gsap.js' => './vendor/bushbaby/greensockjs/src/uncompressed/jquery.gsap.js',
            ),
            'collections' => array(
                $exposePath . '/TweenMaxPack.js' => array(
                    $exposePath . '/TweenMax.js',
                    $exposePath . '/TimelineMax.js',
                    $exposePath . '/jquery.gsap.js',
                    $exposePath . '/easing/EasePack.js',
                    $exposePath . '/plugins/PluginPack.js',
                ),
                $exposePath . '/plugins/PluginPack.js' => array(
                    $exposePath . '/plugins/AttrPlugin.js',
                    $exposePath . '/plugins/BezierPlugin.js',
                    $exposePath . '/plugins/CSSPlugin.js',
                    $exposePath . '/plugins/CSSRulePlugin.js',
                    $exposePath . '/plugins/ColorPropsPlugin.js',
                    $exposePath . '/plugins/DirectionalRotationPlugin.js',
                    $exposePath . '/plugins/EaselPlugin.js',
                    $exposePath . '/plugins/RaphaelPlugin.js',
                    $exposePath . '/plugins/RoundPropsPlugin.js',
                    $exposePath . '/plugins/ScrollToPlugin.js',
                    $exposePath . '/plugins/TextPlugin.js',
                ),

                // same but minified
                $exposePath . '/TweenMaxPack.min.js' => array(
                    $exposePath . '/TweenMax.min.js',
                    $exposePath . '/TimelineMax.min.js',
                    $exposePath . '/jquery.gsap.min.js',
                    $exposePath . '/easing/EasePack.min.js',
                    $exposePath . '/plugins/PluginPack.min.js',
                ),
                $exposePath . '/plugins/PluginPack.min.js' => array(
                    $exposePath . '/plugins/AttrPlugin.min.js',
                    $exposePath . '/plugins/BezierPlugin.min.js',
                    $exposePath . '/plugins/CSSPlugin.min.js',
                    $exposePath . '/plugins/CSSRulePlugin.min.js',
                    $exposePath . '/plugins/ColorPropsPlugin.min.js',
                    $exposePath . '/plugins/DirectionalRotationPlugin.min.js',
                    $exposePath . '/plugins/EaselPlugin.min.js',
                    $exposePath . '/plugins/RaphaelPlugin.min.js',
                    $exposePath . '/plugins/RoundPropsPlugin.min.js',
                    $exposePath . '/plugins/ScrollToPlugin.min.js',
                    $exposePath . '/plugins/TextPlugin.min.js',
                ),
            ),
        ),
    ),
);