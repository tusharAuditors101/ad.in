WebP Express 0.21.0. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2021-11-08 11:44:02

*WebP Convert 2.7.0*  ignited.
- PHP version: 7.4.25
- Server software: nginx/1.20.1

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/plugins/feeds-for-youtube/img/sby-icon.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/feeds-for-youtube/img/sby-icon.png.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- auto-limit: true
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- encoding: "auto"
- quality: 85
- alpha-quality: 80
- near-lossless: 60
- metadata: "none"
------------


*Trying: cwebp* 

**Error: ** **exec() is not enabled.** 
exec() is not enabled.
cwebp failed in 5 ms

*Trying: vips* 

**Error: ** **Required Vips extension is not available.** 
Required Vips extension is not available.
vips failed in 1 ms

*Trying: imagemagick* 

**Error: ** **exec() is not enabled.** 
exec() is not enabled.
imagemagick failed in 1 ms

*Trying: graphicsmagick* 

**Error: ** **exec() is not enabled.** 
exec() is not enabled.
graphicsmagick failed in 1 ms

*Trying: ffmpeg* 

**Error: ** **exec() is not enabled.** 
exec() is not enabled.
ffmpeg failed in 1 ms

*Trying: wpc* 

**Error: ** **Missing URL. You must install Webp Convert Cloud Service on a server, or the WebP Express plugin for Wordpress - and supply the url.** 
Missing URL. You must install Webp Convert Cloud Service on a server, or the WebP Express plugin for Wordpress - and supply the url.
wpc failed in 2 ms

*Trying: ewww* 

**Error: ** **Missing API key.** 
Missing API key.
ewww failed in 2 ms

*Trying: imagick* 

**Error: ** **iMagick was compiled without WebP support.** 
iMagick was compiled without WebP support.
imagick failed in 46 ms

*Trying: gmagick* 

**Error: ** **Required Gmagick extension is not available.** 
Required Gmagick extension is not available.
gmagick failed in 1 ms

*Trying: gd* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/plugins/feeds-for-youtube/img/sby-icon.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/feeds-for-youtube/img/sby-icon.png.webp
- quality: 85
- log-call-arguments: true

The following options have not been explicitly set, so using the following defaults:
- auto-limit: true
- skip: false
- default-quality: 85
- max-quality: 85

The following options were supplied but are ignored because they are not supported by this converter:
- encoding
- alpha-quality
- near-lossless
- metadata
- skip-pngs
------------

GD Version: 2.3.0
image is true color
Bypassing auto-limit (it is only active for jpegs)
Quality: 85. 
gd succeeded :)

Converted image in 65 ms, reducing file size with 77% (went from 4848 bytes to 1102 bytes)
