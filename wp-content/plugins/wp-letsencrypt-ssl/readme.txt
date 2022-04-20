=== WP Encryption - One Click Free SSL Certificate & SSL / HTTPS Redirect to fix Insecure Content ===
Contributors: gowebsmarty, gwsharsha
Tags: ssl,ssl certificate,free ssl,https,https redirect,mixed content,force ssl,insecure content,simple ssl,lets encrypt,install ssl,security headers
Requires at least: 4.2
License: GPL3
Tested up to: 5.9
Requires PHP: 5.4
Stable tag: 5.7.6

SSL for lifetime - Install free SSL certificate & enable SSL / HTTPS sitewide, secure mail w/ HTTPS, HTTPS redirect, HSTS, insecure content scanner, SSL health meter, fix mixed content issues easily, download SSL certificate.

== Description ==

= SSL SCORE & ADVANCED INSECURE CONTENT SCANNER in v5.7.0+ (NEW) =

Generate free Let's Encrypt SSL certificate for your WordPress site and force SSL / HTTPS sitewide, fixing insecure content & mixed content issues easily. Enable secure padlock on your site within minutes.

Secure your WordPress site with SSL certificate provided by [Let's Encrypt®](https://letsencrypt.com). [WP Encryption](https://wpencryption.com/?utm_source=wordpress&utm_medium=description&utm_campaign=wpencryption) plugin registers your site, verifies your domain, generates SSL certificate for your site in simple mouse clicks without the need of any technical knowledge. 

A typical SSL installation without WP Encryption would require you to generate CSR, prove domain ownership, provide your bussiness data and deal with many more technical tasks!.

== 1M+ SSL certificates generated -- 500+ 5-Star reviews ==

https://youtu.be/aKvvVlAlZ14

= REQUIREMENTS =
PHP 5.4 & tested upto PHP 8.0, Linux hosting, OpenSSL, CURL, allow_url_fopen should be enabled.

== PRO Features Worth Upgrading ==

https://youtu.be/jrkFwFH7r6o

1. Automatic domain verification

2. Automatic SSL installation

3. Automatic SSL renewal (Auto renews SSL certificate 30 days prior to expiry date)

4. Wildcard SSL support - Install Wildcard SSL certificate for your primary domain that covers ALL sub-domains. Automatic DNS based domain verification for Wildcard SSL installation (DNS should be managed by cPanel or Godaddy)

5. Multisite + Mapped domains support - Supports SSL installation for domains mapped with MU domain mapping plugin

6. Automatic Content Delivery Network(CDN) to boost your site performance (Annual Plan Only)

7. Blocks SQL injection, XSS, Shellshock, Remote File Inclusion, Apache Structs Exploits, Local File Inclusion attacks.

8. Blocks common web application vulnerabilities and common WordPress attacks.

9. Blocks invalid user agents, unknown user agents, CSRF, Convicted bot traffic, Spam & abuse, Probing & forced browsing, Brute force attacks.

10. Top notch one to one priority support - Live Chat, Email, Premium Support Forum

[BUY PREMIUM](https://wpencryption.com/?utm_source=wordpress&utm_medium=premiumfeatures&utm_campaign=wpencryption)

== FREE Features ==
1. Manual domain verification

2. Manual SSL installation (Download generated SSL certificates with a click of button and Follow very simple video tutorial to install SSL certificate)

3. Manual SSL renewal (SSL certificates expire in 90 days by default. Make sure to renew it before expiry date to avoid insecure warning on site)

4. Force HTTPS + Redirect loop fix for Cloudflare, StackPath, Load balancers and reverse proxies.

5. Advanced Mixed / Insecure content scanner - Scan your entire site for insecure images, css, js, assets which are causing browsers to show insecure padlock. Easily identify if the insecure content is sourced from widgets, post content or inline.

6. Mixed Content fixer + Upgrade insecure requests

7. HSTS Strict transport security Headers

8. Important security headers implementation

9. SSL health

10. SSL expiry email notification

(Optional) Running WordPress on a specialized VPS/Dedicated server without cPanel? You can download the generated SSL certificate files easily via "Download SSL Certificates" page and install it on your server by modifying server config file via SSH access as explained in our [DOCS](https://wpencryption.com/docs/). 

== Why choose WP Encryption Pro over other SSL providers? =
Our support staff is consisted of top notch developers and WordPress experts who can help with SSL setup & HTTPS enforcement for any customized server environments. We have taken care of SSL setup for 500+ complex Apache, Nginx, Bitnami, Lightsail, Reverse proxy servers. 

== Switch to HTTPS in seconds ==

* Secure green browser padlock in minutes.

* Free domain validated (DV) certificates are provided by Let's Encrypt (A non profit Global certificate Authority).

* SSL encryption ensures protection against man-in-middle attacks by securely encrypting the data transfer between client and your server.

== Why does My WordPress site need SSL? ==
1. SEO Benefit: Major search engines like Google ranks SSL enabled sites higher compared to non SSL sites. Thus bringing more organic traffic for your site.

2. Data Encryption: Data transmission between server and visitor are securely encrypted on a SSL site thus avoiding any data hijacks in-between the transmission(Ex: personal information, credit card information).

3. Trust: Google chrome shows non-SSL sites as 'insecure', bringing a feel of insecurity in website visitors.

4. Authentic: HTTPS green padlock represents symbol of trust, authenticity and security.

= Translations =

Many thanks to the generous efforts of our translators.

If you would like to translate to your language, [Feel free to sign up and start translating!](https://translate.wordpress.org/projects/wp-plugins/wp-letsencrypt-ssl/)

= Get Involved =

* Rate Plugin – If you find this plugin useful, please leave a [positive review](https://wordpress.org/support/plugin/wp-letsencrypt-ssl/reviews/). Your reviews are our biggest motivation for further development of plugin.
* Submit a Bug – If you find any issue, please submit a bug via support forum.

== Installation ==	
1. Make a backup of your website and database
2. Download the plugin
3. Upload the plugin to the wp-content/plugins directory,
4. Go to “plugins” in your WordPress admin, then click activate.
5. You will now see WP Encryption option on your left navigation bar. Click on it and follow the step by step guide.

== Frequently Asked Questions ==

= Does installing the plugin will instantly turn my site https? =
Installing SSL certificate is a server side process and not as straight forward as installing a ready widget and using it instantly. You will have to follow some simple steps to install SSL for your WordPress site. Our plugin acts like a tool to generate and install SSL for your WordPress site. On FREE version of plugin - You should manually go through the SSL certificate installation process following the simple video tutorial. Whereas, the SSL certificates are easily generated by our plugin by running a simple SSL generation form.

= How to temporarily disable HTTPS redirect =
By adding below line of code to your wp-config.php file, All SSL enforcements like HSTS, Upgrade insecure requests, redirect to HTTPS, mixed content fixer will be disabled. Please check your .htaccess file for any other HTTPS enforcement related codes and remove it.

define("WPLE_DISABLE_HTTPS");

= I already have SSL certificate installed, how to activate HTTPS? =
If you already have SSL certificate installed, You can use WP Encryption plugin purely for HTTPS redirection & SSL enforcing purpose. All you need to do is enable "Force HTTPS" feature in this plugin.

= SSL on my site is showing as expired =
Please use the RESET option of WP Encryption once and run the SSL install form to re-generate new SSL certificate. Then you can install the new SSL certificate onto your cPanel / Server.

= Secure webmail & email server with an SSL/TLS Certificate =
Starting from WP Encryption v5.4.8, you can now secure your webmail & incoming/outgoing email server [following this guide](https://wpencryption.com/secure-webmail-with-https/)

= Need help with SSL installation for non cPanel site =
Some helpful tutorials for non cPanel based SSL installations can be found on our [DOCS](https://wpencryption.com/docs/).

= How to install SSL for both www & non-www version of my domain? =
First of all, Please make sure you can access your site with and without www. Otherwise you will be not able to complete domain verification for both www & non-www together. If both are accessible, You will see **"Generate SSL for both www & non-www"** option on SSL install form. Otherwise, this option will be hidden.

= Images/Fonts not loading on HTTPS site after SSL certificate installation - Insecure Content / Mixed Content issue? =
Images on your site might be loading over http:// protocol, please enable "Force HTTPS via WordPress" feature of WP Encryption. If you have Elementor page builder installed, please go to Elementor > Tools > Replace URL and replace your http:// site url with https://. Make sure you have SSL certificates installed and browser padlock shows certificate as valid before forcing these https measures. If you have too many mixed content errors because of http:// resources loaded in your css, js or external links, We recommend using "Really Simple SSL" plugin along with WP Encryption.

= How do I renew SSL certificate =
You can click on STEP 1 in progress bar or Renew SSL button (which will be enabled during last 30 days of SSL expiry date) and follow the same initial process of SSL certificate generation to renew the certificates.

= What if I failed to renew the SSL certificate =
Your site will start showing as insecure on all major browsers thus forcing the visitors to not visit insecure site.

= Should I go through domain verification again during SSL renewal process =
Completed domain verifications are valid only for 30 days, so you will need to complete domain verification again when renewing SSL certificate in 90 days.

= Do you support Wildcard SSL? =
Wildcard SSL support is included with PRO version

= Receiving "Too many requests" error =
Let's Encrypt API has rate limits so please try after few hours if you receive this error.

= ERR_SSL_UNRECOGNIZED_NAME_ALERT =
Please read our step by step instructions to resolve this issue - [https://wpencryption.com/err_ssl_unrecognized_name_alert/](https://wpencryption.com/err_ssl_unrecognized_name_alert/). We have covered several other SSL errors in our [DOCS](https://wpencryption.com/docs/)

= ERR_SSL_PROTOCOL_ERROR =
VirtualHost for port 443 (in case of apache server), Server{} listening at port 443 (in case of nginx server) might be not defined in your server config file.

= SSL Certificates renewed but new certs not showing in frontend =
This might happen for non cPanel sites, all you need to do is reboot the server instance once.

= How to revert back to HTTP in case of force HTTPS failure? =
Please follow the revert back instructions given in [support thread - Forced SSL via Htaccess](https://wordpress.org/support/topic/locked-out-after-force-ssl-via-htaccess-method/) and [support thread - Forced SSL via WordPress](https://wordpress.org/support/topic/locked-out-unable-to-access-site-after-forcing-https-2/) accordingly.

= I am getting some errors during SSL installation =
Feel free to open a ticket in this plugin support form and we will try our best to resolve your issue.

= Should I configure anything for auto renewal of SSL certificates to work after upgrading to PRO version? =
You don't need to configure anything. Once after you upgrade to PRO version and activate PRO plugin on your site, the auto renewal of SSL certificates will start working in background according to 60 days schedule i.e., 30 days prior to SSL certificate expiry date.

= How to enable HSTS Strict Transport Security header? =
Various important features like HSTS header, mixed content fixer, upgrade insecure requests, security headers can be easily enabled via SSL Health page of the plugin. Please have valid SSL certificate installed on your site before you could enable these features.


== Disclaimer ==

WP Encryption plugin uses [LetsDebug API](https://github.com/letsdebug/letsdebug) to pull error details upon domain verification failure to show better insights on why you are not able to generate SSL certificate for your domain.

Security is an important subject regarding SSL/TLS certificates, of course. It is obvious that your private key, stored on your web server, should never be accessible from the web. When the plugin created the keys directory for the first time, it will store a .htaccess file in this directory, denying all visitors. Always make sure yourself your keys aren't accessible from the web! We are in no way responsible if your private keys go public. If this does happen, the easiest solution is to check folder permissions on your server and make sure public access is forbidden for root folders. Next, create a new certificate.

== Screenshots ==
1. Generate and Install free SSL certificate while Agreeing to TOS
2. SSL certificate generation successful message
3. Download/Copy generated SSL certificate & key
4. SSL Health Page with realtime score
5. Force HTTPS via htaccess or WordPress method
6. Mixed Content Scanner to identify insecure contents on HTTPS site

== Changelog ==

= 5.7.6 =
* HTTP based domain verification - correct .txt extension
* log pending authorizations when SSL domain verification fail

= 5.7.5 =
* Remove certain options upon plugin deactivation
* fopen error catch during ssl expiration check process

= 5.7.4 =
* Log why order got invalid later
* Wording fixes
* PRO - ability to input cpanel host
* PRO - admin notice when auto renewal failed
* PRO - different flows rechecked

= 5.7.2 =
* Improved CSS
* Improved explanations
* Fix - don't show empty rows in advanced mixed content scanner
* Added - How it works Faq
* No more review requests for PRO users

= 5.7.1 =
* Updated - Intermediate cert priority. Please RESET and re-run SSL install form.

= 5.7.0 =
* New - Advanced Insecure content scanner
* Fixed path issue for subdirectory based WordPress installations
* DNS verify ajax issue fix

= 5.6.3 =
* Fixed the ajax call for "generate SSL for both www & non-www" checkbox

= 5.6.2 =
* Ajax check before enabling both "generate SSL for www & non-www" Checkbox 

= 5.6.1 = 
* SSL health in admin toolbar
* Improved instructions
* Always show checbkox to generate SSL for www & non-www together
* Activator SELF class error fix
* Fixed SSL certificate expiry date in email
* Many more improvements

= 5.6.0 =
* Check valid SSL before enabling HSTS & SSL Health page settings
* Security updates

= 5.5.0 =
* All new SSL Health page :)
* HSTS Strict Transport Security
* Mixed content fixer
* Important Security Headers
* Upgrade Insecure Requests

= 5.4.8 =
* Secure webmail with an SSL Certificate
* Make htaccess writable

= 5.4.7 =
* Fix for PRO users - PLEASE UPDATE

= 5.4.6 =
* Get more insights on SSL verification via Letsdebug

= 5.4.4 =
* PHP Fatal error fix

= 5.4.2 =
* Image width
* Activation error
* Better logging

= 5.4.1 =
* Session handling fix
* Ajax url fix
* Improved instructions

= 5.4.0 =
* CA Signature fix
* Admin color tweaks
* PRO - Fix for auto renewal

= 5.3.16 =
* SSL Install page redesign
* Special note for SPMode
* Plugin interface changes

= 5.3.13 =
* Fixed wpleauto

= 5.3.12 =
* Ajaxified SSL notices
* UI Improved
* Improved SSL alerts for PRO

= 5.3.11 =
* Improved navigation
* Bug fix for DNS verification of SSL

= 5.3.10 =
* PRO - cPanel login check fix
* PRO - Minor bug fix

= 5.3.9 =
* Minor pricing changes
* Added support link

= 5.3.8 =
* PRO - Improved SPmode flow & cpanel backup method

= 5.3.6 =
* Ability to activate the plugin network wide
* PRO - Activate license network wide
* Minor bug fixes

= 5.3.5 =
* PRO - More precise DNS verification
* PRO - Bug fixes
* FREE - Get SSL certs emailed as attachment but enabling the option in "Download SSL certificates" page.

= 5.3.4 =
* SP mode redirect loop fix
* Cleaner plugin deactivation

= 5.3.3 =
* Double check auto renewal of SSL
* Bypass SSL verify peer
* Styling fixes + asset updates
* Privacy enabled youtube videos

= 5.3.1 =
* Added contact form
* Reduced plugin size
* Updated links
* SSL renewal reminder email
* removed BF banner

= 5.3.0 =
* Certificate chain fix - Please update
* FAQs updated

= 5.2.13 =
* SSL Leaf Signature issue fix

= 5.2.10 =
* Bug fixes for Premium SSL setup
* User flow fixes for SP Mode

= 5.2.4 =
* Optimized code
* minor bug fixes
* force generate SSL for www & non-www
* spmode related fixes

= 5.2.2 =
* SDK update
* minor link fixes

= 5.2.0 =
* SP mode for annual PRO users
* Faq & Videos moved to nav
* Bug Fix related to memory exhaust

= 5.1.11 =
* User flow improvements
* Improved error catching
* Improved instructions
* PLEASE UPDATE

= 5.1.8 =
* Identify mixed content issues
* minor fixes

= 5.1.6 =
* Fixed a bug with Manual DNS verification

= 5.1.5 =
* PRO - Fixed major bug related to Wildcard SSL - Please update

= 5.1.0 =
* Fixed - Minor bugs
* Improved - Cluster free SSL generate interface
* Improved - Complete user interface design
* Improved - Sub pages instead of confusing tabs
* Added - retain SSL stage
* Added - Force SSL improvements
* Added - Checkbox to generate SSL for both www & non-www domain
* PRO - Improved DNS automation
* PRO - Improved error handling
* PRO - Added important notifications

= 5.0.9 =
* Fixed - Download SSL tab not showing after success

= 5.0.8 =
* Fixed - DNS verification feature for http verification failures of noscript

= 5.0.7 =
* Added - Attempt http verification before offering manual verification options

= 5.0.6 =
* Improved - Domain verification interface
* Fixed - minor bug
* Fixed - Cron handling

= 5.0.4 =
* Added - SSL support for cPanel users with shell_exec function disabled
* PRO only release

= 5.0.0 =
* NEW - Upon various Non-cPanel user requests, Introducing FIREWALL plan for Non-cPanel sites
* PRO - New instant firewall setup wizard
* Improved - More cleaner admin interface
* Improved - Admin css, overall coding
* Added - Force HTTPS, FAQ, SSL videos as sub pages
* Fixed - minor php error