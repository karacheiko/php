<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<h1>walaupun hidup seribu tahun kalau ga phising apa guna nya</h1>";
    echo "cuman ikutan aja bang";
}

if (isset($_GET['hck'])) {
    $filename = "list.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['hck']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'https';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}?>

<!doctype html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en-US"  >
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- This is . --><!-- snail-harmonica-x511k -->
<base href="">
<meta charset="utf-8" />
<title>LOGIN <?php echo $BRANDS ?> 🧞‍♀️ MAIN DISINI PASTI MAXWIN TERUS BRAY GASKEUN</title>
<meta http-equiv="Accept-CH" content="Sec-CH-UA-Platform-Version, Sec-CH-UA-Model" /><link rel="icon" type="image/x-icon" href="https://assets.squarespace.com/universal/default-favicon.ico"/>
<link rel="canonical" href="<?php echo $urlPath ?>"/>
<link rel="amphtml" href="https://pub-c456233b2a2c4ccd80c57efdda5a831c.r2.dev/gacorkang.html">
<meta property="og:site_name" content="SLOT GACOR"/>
<meta property="og:title" content="LOGIN <?php echo $BRANDS ?> 🧞‍♀️ MAIN DISINI PASTI MAXWIN TERUS BRAY GASKEUN"/>
<meta property="og:url" content="<?php echo $urlPath ?>"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="<?php echo $BRANDS ?> merupakan tempat permainan judi slot gacor online yang menyediakan RTP 99% akurat yang akan sangat membantu kamu maxwin terus sampai mampus"/>
<meta property="og:image" content="http://static1.squarespace.com/static/668786474697d5738ce3f5bf/t/66988b807af2d605c040fdcc/1721273216403/3.png?format=1500w"/>
<meta property="og:image:width" content="210"/>
<meta property="og:image:height" content="52"/>
<meta itemprop="name" content="LOGIN <?php echo $BRANDS ?> 🧞‍♀️ MAIN DISINI PASTI MAXWIN TERUS BRAY GASKEUN"/>
<meta itemprop="url" content="<?php echo $urlPath ?>"/>
<meta itemprop="description" content="<?php echo $BRANDS ?> merupakan tempat permainan judi slot gacor online yang menyediakan RTP 99% akurat yang akan sangat membantu kamu maxwin terus sampai mampus"/>
<meta itemprop="thumbnailUrl" content="http://static1.squarespace.com/static/668786474697d5738ce3f5bf/t/66988b807af2d605c040fdcc/1721273216403/3.png?format=1500w"/>
<link rel="image_src" href="http://static1.squarespace.com/static/668786474697d5738ce3f5bf/t/66988b807af2d605c040fdcc/1721273216403/3.png?format=1500w" />
<meta itemprop="image" content="http://static1.squarespace.com/static/668786474697d5738ce3f5bf/t/66988b807af2d605c040fdcc/1721273216403/3.png?format=1500w"/>
<meta name="twitter:title" content="LOGIN <?php echo $BRANDS ?> 🧞‍♀️ MAIN DISINI PASTI MAXWIN TERUS BRAY GASKEUN"/>
<meta name="twitter:image" content="http://static1.squarespace.com/static/668786474697d5738ce3f5bf/t/66988b807af2d605c040fdcc/1721273216403/3.png?format=1500w"/>
<meta name="twitter:url" content="<?php echo $urlPath ?>"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:description" content="<?php echo $BRANDS ?> merupakan tempat permainan judi slot gacor online yang menyediakan RTP 99% akurat yang akan sangat membantu kamu maxwin terus sampai mampus"/>
<meta name="description" content="<?php echo $BRANDS ?> merupakan tempat permainan judi slot gacor online yang menyediakan 
RTP 99% akurat yang akan sangat membantu kamu maxwin terus sampai mampus" />
<link rel="preconnect" href="https://images.squarespace-cdn.com">
<script type="text/javascript" src="//use.typekit.net/ik/X2WK8Z13ejbe7KX5yvyotMBrZZ1KI2Yk_lIo_LcisWMfe0bgfFHN4UJLFRbh52jhWDjh52StFRbaF2joFhbuFDwtjh9DZRmKZyGMJ6lzS1gGZWmDOWgkdkJPjAszjc9lZhBkjAuzdcblSY4zJ6lcZKulZWsyOWgkdkJWjAUXZW40jWs8OAizieyTjku0dkXDOAb7f6RmRbJbMg6BJMJ7fbRDFgMgeMb6MKG4fVMXIMIjgkMfH6qJvRbbMs65JMJ7fbRUFgMgegI6MKG4f5j1IMJjgPMfH6qJ7PbbMy6YJMJ7fbRL4sMfeMv6MKG4fHCqIMJjIPMfH6qJhBMbMU6IJMHbMdhotnbe.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script type="text/javascript" crossorigin="anonymous" defer="defer" nomodule="nomodule" src="//assets.squarespace.com/@sqs/polyfiller/1.6/legacy.js"></script>
<script type="text/javascript" crossorigin="anonymous" defer="defer" src="//assets.squarespace.com/@sqs/polyfiller/1.6/modern.js"></script>
<script type="text/javascript">SQUARESPACE_ROLLUPS = {};</script>
<script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-6ffaefdf6016357d9019-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_runtime');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-6ffaefdf6016357d9019-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-6f117db4eb7fd4392375-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_moment_js_vendor');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-6f117db4eb7fd4392375-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-15305921bb94c505cd92-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-cldr_resource_pack');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-15305921bb94c505cd92-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-0f51b06fac4ba1f7c845-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors_stable');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-0f51b06fac4ba1f7c845-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-fa44ea4258bc102e15e6-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-fa44ea4258bc102e15e6-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-400e71759ee76ca22e8b-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-common');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-400e71759ee76ca22e8b-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/user-account-core-e3d96d045983a4a9fa2f-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-user_account_core');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/user-account-core-e3d96d045983a4a9fa2f-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].css = ["//assets.squarespace.com/universal/styles-compressed/user-account-core-e84acd73aa5ee3fcd4ad-min.en-US.css"]; })(SQUARESPACE_ROLLUPS, 'squarespace-user_account_core');</script>
<link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/user-account-core-e84acd73aa5ee3fcd4ad-min.en-US.css"><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/performance-7c5a1be54b087e14e57b-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-performance');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/performance-7c5a1be54b087e14e57b-min.en-US.js" defer ></script><script data-name="static-context">Static = window.Static || {}; Static.SQUARESPACE_CONTEXT = {"betaFeatureFlags":["crm_product_contacts_use_mfe","visitor_react_forms","commerce_paywall_renewal_notifications","campaigns_discount_section_in_blasts","donations_refresh","customer_account_creation_recaptcha","accounting_orders_sync","commerce_etsy_shipping_import","pdp_subs_otp_buttons","pages_panel_v3_search_bar","hideable_header_footer_for_memberareas","pdp_description_add_to_cart_tweaks","commerce_etsy_product_import","fluid_engine","campaigns_discount_section_in_automations","enable_css_variable_tweaks","gdpr_cookie_banner","customer_accounts_email_verification","pdp_subs_otp_visitor_site","fluid_engine_clean_up_grid_contextual_change","commerce_site_visitor_metrics","campaigns_import_discounts","crm_redesign_phase_1","hideable_header_footer","commerce_order_status_access","proposals_activity","collection_typename_switching","campaigns_global_uc_ab","is_feature_gate_refresh_enabled","scripts_defer","themes","hideable_header_footer_for_courses","commerce_clearpay","i18n_beta_website_locales","unify_edit_mode_p2","supports_versioned_template_assets","campaigns_new_image_layout_picker","commsplat_forms_visitor_profile","hide_header_footer_beta","marketing_landing_page","background_art_onboarding","nested_categories_migration_enabled","send_local_pickup_ready_email","hideable_header_footer_for_videos","emit_donation_events_to_census","donations_refresh_in_circle_labs","override_block_styles","toggle_preview_new_shortcut","new_stacked_index","commerce_subscription_renewal_notifications","member_areas_feature","campaigns_thumbnail_layout","nested_categories","rewrite_transactional_email_from_address"],"videoAssetsFeatureFlags":["mux-data-video-collection","mux-data-course-collection"],"facebookAppId":"314192535267336","facebookApiVersion":"v6.0","rollups":{"squarespace-announcement-bar":{"js":"//assets.squarespace.com/universal/scripts-compressed/announcement-bar-3312060c9a7329a8fa7d-min.en-US.js"},"squarespace-audio-player":{"css":"//assets.squarespace.com/universal/styles-compressed/audio-player-9fb16b1675c0ff315dae-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/audio-player-859c0e1608740f52232b-min.en-US.js"},"squarespace-blog-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/blog-collection-list-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/blog-collection-list-f179daf3c110a4b83377-min.en-US.js"},"squarespace-calendar-block-renderer":{"css":"//assets.squarespace.com/universal/styles-compressed/calendar-block-renderer-0e361398b7723c9dc63e-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/calendar-block-renderer-09aee617730e2e34aac4-min.en-US.js"},"squarespace-chartjs-helpers":{"css":"//assets.squarespace.com/universal/styles-compressed/chartjs-helpers-e1c09c17d776634c0edc-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/chartjs-helpers-bf708d8ca53508814206-min.en-US.js"},"squarespace-comments":{"css":"//assets.squarespace.com/universal/styles-compressed/comments-24b74a0326eae0cd5049-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/comments-3091f759d6204dfdf732-min.en-US.js"},"squarespace-custom-css-popup":{"css":"//assets.squarespace.com/universal/styles-compressed/custom-css-popup-31ca16276114daf2146b-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/custom-css-popup-b94ad66ba2fd96e88520-min.en-US.js"},"squarespace-dialog":{"css":"//assets.squarespace.com/universal/styles-compressed/dialog-fcab58776214fafe33b3-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/dialog-581566170f996f271bd5-min.en-US.js"},"squarespace-events-collection":{"css":"//assets.squarespace.com/universal/styles-compressed/events-collection-0e361398b7723c9dc63e-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/events-collection-ee772bc5b95710a4eed2-min.en-US.js"},"squarespace-form-rendering-utils":{"js":"//assets.squarespace.com/universal/scripts-compressed/form-rendering-utils-90a2b7c8daec6414e5e0-min.en-US.js"},"squarespace-forms":{"css":"//assets.squarespace.com/universal/styles-compressed/forms-8d93ba2c12ff0765b64c-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/forms-6df860479702c01ef2b2-min.en-US.js"},"squarespace-gallery-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/gallery-collection-list-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/gallery-collection-list-98da2f72755541dab245-min.en-US.js"},"squarespace-image-zoom":{"css":"//assets.squarespace.com/universal/styles-compressed/image-zoom-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/image-zoom-80da18540c2c91f06baf-min.en-US.js"},"squarespace-pinterest":{"css":"//assets.squarespace.com/universal/styles-compressed/pinterest-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/pinterest-8918ada226b443d57335-min.en-US.js"},"squarespace-popup-overlay":{"css":"//assets.squarespace.com/universal/styles-compressed/popup-overlay-b2bf7df4402e207cd72c-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/popup-overlay-8068e61c526473b180e2-min.en-US.js"},"squarespace-product-quick-view":{"css":"//assets.squarespace.com/universal/styles-compressed/product-quick-view-4aec27f1bd826750e9db-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/product-quick-view-5c9bd09ab0b5ac4da224-min.en-US.js"},"squarespace-products-collection-item-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-item-v2-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-item-v2-d76e0cec0cbd95d2fdfd-min.en-US.js"},"squarespace-products-collection-list-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-list-v2-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-list-v2-be13450cfd6ff4aa937e-min.en-US.js"},"squarespace-search-page":{"css":"//assets.squarespace.com/universal/styles-compressed/search-page-dcc0462e30efbd6dc562-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/search-page-e88b3ccde3acb03d18d7-min.en-US.js"},"squarespace-search-preview":{"js":"//assets.squarespace.com/universal/scripts-compressed/search-preview-e25902e3ef89d4ffdf93-min.en-US.js"},"squarespace-simple-liking":{"css":"//assets.squarespace.com/universal/styles-compressed/simple-liking-a9eb87c1b73b199ce387-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/simple-liking-3c5936ee7186988153f2-min.en-US.js"},"squarespace-social-buttons":{"css":"//assets.squarespace.com/universal/styles-compressed/social-buttons-98ee3a678d356d849b76-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/social-buttons-f85bf6ec5d258419a9ea-min.en-US.js"},"squarespace-tourdates":{"css":"//assets.squarespace.com/universal/styles-compressed/tourdates-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/tourdates-684107e68736b0d605a4-min.en-US.js"},"squarespace-website-overlays-manager":{"css":"//assets.squarespace.com/universal/styles-compressed/website-overlays-manager-6dfb472f441e39d78b13-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/website-overlays-manager-94f3b3cc188a23bb693e-min.en-US.js"}},"pageType":2,"website":{"id":"668786474697d5738ce3f5bf","identifier":"snail-harmonica-x511k","websiteType":1,"contentModifiedOn":1720330055832,"cloneable":false,"hasBeenCloneable":false,"siteStatus":{},"language":"en-US","timeZone":"Asia/Phnom_Penh","machineTimeZoneOffset":25200000,"timeZoneOffset":25200000,"timeZoneAbbr":"ICT","siteTitle":"SLOT GACOR","fullSiteTitle":"LOGIN <?php echo $BRANDS ?> \uD83E\uDDDE\u200D\u2640\uFE0F MAIN DISINI PASTI MAXWIN TERUS BRAY GASKEUN","siteDescription":"","logoImageId":"66988b807af2d605c040fdcc","shareButtonOptions":{"8":true,"7":true,"2":true,"1":true,"4":true,"3":true,"6":true},"logoImageUrl":"//images.squarespace-cdn.com/content/v1/668786474697d5738ce3f5bf/78893eab-1dc0-447b-91be-cdca3bb8b38d/3.png","authenticUrl":"<?php echo $urlPath ?>","internalUrl":"<?php echo $urlPath ?>","baseUrl":"<?php echo $urlPath ?>","sslSetting":3,"isHstsEnabled":true,"socialAccounts":[{"serviceId":64,"addedOn":1720157767689,"profileUrl":"http://instagram.com/squarespace","iconEnabled":true,"serviceName":"instagram-unauth"}],"typekitId":"","statsMigrated":false,"imageMetadataProcessingEnabled":false,"captchaSettings":{"enabledForDonations":false},"showOwnerLogin":false},"websiteSettings":{"id":"668786474697d5738ce3f5c2","websiteId":"668786474697d5738ce3f5bf","subjects":[],"country":"KH","simpleLikingEnabled":true,"popupOverlaySettings":{"style":1,"enabledPages":[]},"commentLikesAllowed":true,"commentAnonAllowed":true,"commentThreaded":true,"commentApprovalRequired":false,"commentAvatarsOn":true,"commentSortType":2,"commentFlagThreshold":0,"commentFlagsAllowed":true,"commentEnableByDefault":true,"commentDisableAfterDaysDefault":0,"disqusShortname":"","commentsEnabled":false,"storeSettings":{"returnPolicy":null,"termsOfService":null,"privacyPolicy":null,"expressCheckout":false,"continueShoppingLinkUrl":"/","useLightCart":false,"showNoteField":false,"shippingCountryDefaultValue":"US","billToShippingDefaultValue":false,"showShippingPhoneNumber":true,"isShippingPhoneRequired":false,"showBillingPhoneNumber":true,"isBillingPhoneRequired":false,"currenciesSupported":["USD","CAD","GBP","AUD","EUR","CHF","NOK","SEK","DKK","NZD","SGD","MXN","HKD","CZK","ILS","MYR","RUB","PHP","PLN","THB","BRL","ARS","COP","IDR","INR","JPY","ZAR"],"defaultCurrency":"USD","selectedCurrency":"USD","measurementStandard":1,"showCustomCheckoutForm":false,"checkoutPageMarketingOptInEnabled":true,"enableMailingListOptInByDefault":false,"sameAsRetailLocation":false,"merchandisingSettings":{"scarcityEnabledOnProductItems":false,"scarcityEnabledOnProductBlocks":false,"scarcityMessageType":"DEFAULT_SCARCITY_MESSAGE","scarcityThreshold":10,"multipleQuantityAllowedForServices":true,"restockNotificationsEnabled":false,"restockNotificationsSuccessText":"","restockNotificationsMailingListSignUpEnabled":false,"relatedProductsEnabled":false,"relatedProductsOrdering":"random","soldOutVariantsDropdownDisabled":false,"productComposerOptedIn":false,"productComposerABTestOptedOut":false,"productReviewsEnabled":false},"minimumOrderSubtotalEnabled":false,"minimumOrderSubtotal":{"currency":"USD","value":"0.00"},"isLive":false,"multipleQuantityAllowedForServices":true},"useEscapeKeyToLogin":false,"ssBadgeType":1,"ssBadgePosition":4,"ssBadgeVisibility":1,"ssBadgeDevices":1,"pinterestOverlayOptions":{"mode":"disabled"},"ampEnabled":false,"userAccountsSettings":{"loginAllowed":true,"signupAllowed":true}},"cookieSettings":{"isCookieBannerEnabled":false,"isRestrictiveCookiePolicyEnabled":false,"isRestrictiveCookiePolicyAbsolute":false,"cookieBannerText":"","cookieBannerTheme":"","cookieBannerVariant":"","cookieBannerPosition":"","cookieBannerCtaVariant":"","cookieBannerCtaText":"","cookieBannerAcceptType":"OPT_IN","cookieBannerOptOutCtaText":"","cookieBannerHasOptOut":false,"cookieBannerHasManageCookies":true,"cookieBannerManageCookiesLabel":"","cookieBannerSavedPreferencesText":"","cookieBannerSavedPreferencesLayout":"PILL"},"websiteCloneable":false,"collection":{"title":"Home","id":"6687879a314049367660c95a","fullUrl":"/","type":10,"permissionType":1},"subscribed":false,"appDomain":"squarespace.com","templateTweakable":true,"tweakJSON":{"form-use-theme-colors":"false","header-logo-height":"40px","header-mobile-logo-max-height":"30px","header-vert-padding":"0.4vw","header-width":"Full","maxPageWidth":"2606px","pagePadding":"2vw","tweak-blog-alternating-side-by-side-image-aspect-ratio":"1:1 Square","tweak-blog-alternating-side-by-side-image-spacing":"6%","tweak-blog-alternating-side-by-side-meta-spacing":"20px","tweak-blog-alternating-side-by-side-primary-meta":"Categories","tweak-blog-alternating-side-by-side-read-more-spacing":"20px","tweak-blog-alternating-side-by-side-secondary-meta":"Date","tweak-blog-basic-grid-columns":"3","tweak-blog-basic-grid-image-aspect-ratio":"1:1 Square","tweak-blog-basic-grid-image-spacing":"30px","tweak-blog-basic-grid-meta-spacing":"17px","tweak-blog-basic-grid-primary-meta":"Categories","tweak-blog-basic-grid-read-more-spacing":"37px","tweak-blog-basic-grid-secondary-meta":"Date","tweak-blog-item-custom-width":"75","tweak-blog-item-show-author-profile":"false","tweak-blog-item-width":"Narrow","tweak-blog-masonry-columns":"2","tweak-blog-masonry-horizontal-spacing":"64px","tweak-blog-masonry-image-spacing":"20px","tweak-blog-masonry-meta-spacing":"10px","tweak-blog-masonry-primary-meta":"Categories","tweak-blog-masonry-read-more-spacing":"22px","tweak-blog-masonry-secondary-meta":"Date","tweak-blog-masonry-vertical-spacing":"231px","tweak-blog-side-by-side-image-aspect-ratio":"1:1 Square","tweak-blog-side-by-side-image-spacing":"6%","tweak-blog-side-by-side-meta-spacing":"20px","tweak-blog-side-by-side-primary-meta":"Categories","tweak-blog-side-by-side-read-more-spacing":"20px","tweak-blog-side-by-side-secondary-meta":"Date","tweak-blog-single-column-image-spacing":"50px","tweak-blog-single-column-meta-spacing":"30px","tweak-blog-single-column-primary-meta":"Categories","tweak-blog-single-column-read-more-spacing":"30px","tweak-blog-single-column-secondary-meta":"Date","tweak-events-stacked-show-thumbnails":"true","tweak-events-stacked-thumbnail-size":"3:2 Standard","tweak-fixed-header":"false","tweak-fixed-header-style":"Basic","tweak-global-animations-animation-curve":"ease","tweak-global-animations-animation-delay":"0.6s","tweak-global-animations-animation-duration":"1.50s","tweak-global-animations-animation-style":"fade","tweak-global-animations-animation-type":"fade","tweak-global-animations-complexity-level":"detailed","tweak-global-animations-enabled":"true","tweak-portfolio-grid-basic-custom-height":"50","tweak-portfolio-grid-overlay-custom-height":"50","tweak-portfolio-hover-follow-acceleration":"10%","tweak-portfolio-hover-follow-animation-duration":"Fast","tweak-portfolio-hover-follow-animation-type":"Fade","tweak-portfolio-hover-follow-delimiter":"Bullet","tweak-portfolio-hover-follow-front":"false","tweak-portfolio-hover-follow-layout":"Inline","tweak-portfolio-hover-follow-size":"50","tweak-portfolio-hover-follow-text-spacing-x":"1.5","tweak-portfolio-hover-follow-text-spacing-y":"1.5","tweak-portfolio-hover-static-animation-duration":"Fast","tweak-portfolio-hover-static-animation-type":"Fade","tweak-portfolio-hover-static-delimiter":"Hyphen","tweak-portfolio-hover-static-front":"true","tweak-portfolio-hover-static-layout":"Inline","tweak-portfolio-hover-static-size":"50","tweak-portfolio-hover-static-text-spacing-x":"1.5","tweak-portfolio-hover-static-text-spacing-y":"1.5","tweak-portfolio-index-background-animation-duration":"Medium","tweak-portfolio-index-background-animation-type":"Fade","tweak-portfolio-index-background-custom-height":"50","tweak-portfolio-index-background-delimiter":"None","tweak-portfolio-index-background-height":"Large","tweak-portfolio-index-background-horizontal-alignment":"Center","tweak-portfolio-index-background-link-format":"Stacked","tweak-portfolio-index-background-persist":"false","tweak-portfolio-index-background-vertical-alignment":"Middle","tweak-portfolio-index-background-width":"Full","tweak-product-basic-item-click-action":"None","tweak-product-basic-item-gallery-aspect-ratio":"1:1 Square","tweak-product-basic-item-gallery-design":"Slideshow","tweak-product-basic-item-gallery-width":"30%","tweak-product-basic-item-hover-action":"Zoom","tweak-product-basic-item-image-spacing":"10vw","tweak-product-basic-item-image-zoom-factor":"1.5","tweak-product-basic-item-product-variant-display":"Dropdown","tweak-product-basic-item-thumbnail-placement":"Side","tweak-product-basic-item-variant-picker-layout":"Dropdowns","tweak-products-add-to-cart-button":"false","tweak-products-columns":"2","tweak-products-gutter-column":"2vw","tweak-products-gutter-row":"4vw","tweak-products-header-text-alignment":"Middle","tweak-products-image-aspect-ratio":"1:1 Square","tweak-products-image-text-spacing":"2vw","tweak-products-mobile-columns":"2","tweak-products-text-alignment":"Middle","tweak-products-width":"Inset","tweak-transparent-header":"true"},"templateId":"5c5a519771c10ba3470d8101","templateVersion":"7.1","pageFeatures":[1,2,4],"gmRenderKey":"QUl6YVN5Q0JUUk9xNkx1dkZfSUUxcjQ2LVQ0QWVUU1YtMGQ3bXk4","templateScriptsRootUrl":"https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/","impersonatedSession":false,"tzData":{"zones":[[420,null,"+07",null]],"rules":{}},"showAnnouncementBar":false,"recaptchaEnterpriseContext":{"recaptchaEnterpriseSiteKey":"6LdDFQwjAAAAAPigEvvPgEVbb7QBm-TkVJdDTlAv"},"i18nContext":{"timeZoneData":{"id":"Asia/Bangkok","name":"Indochina Time"}},"env":"PRODUCTION"};</script><script type="application/ld+json">{"url":"<?php echo $urlPath ?>","name":"SLOT GACOR","description":"","image":"//images.squarespace-cdn.com/content/v1/668786474697d5738ce3f5bf/78893eab-1dc0-447b-91be-cdca3bb8b38d/3.png","@context":"http://schema.org","@type":"WebSite"}</script><link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/versioned-site-css/668786474697d5738ce3f5bf/34/5c5a519771c10ba3470d8101/668786474697d5738ce3f5c7/1541/site.css"/><script>Static.COOKIE_BANNER_CAPABLE = true;</script>
<!-- End of Squarespace Headers -->
    
      <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/versioned-assets/1718130742063-ZB0N0KP2JGXANVM5KICL/static.css">
    
  </head>

  <body
    id="collection-6687879a314049367660c95a"
    class="
      primary-button-style-outline primary-button-shape-pill secondary-button-style-outline secondary-button-shape-pill tertiary-button-style-outline tertiary-button-shape-pill  form-field-style-solid form-field-shape-square form-field-border-all form-field-checkbox-type-icon form-field-checkbox-fill-solid form-field-checkbox-color-inverted form-field-checkbox-shape-square form-field-checkbox-layout-stack form-field-radio-type-icon form-field-radio-fill-solid form-field-radio-color-normal form-field-radio-shape-pill form-field-radio-layout-stack form-field-survey-fill-solid form-field-survey-color-normal form-field-survey-shape-pill form-field-hover-focus-outline form-submit-button-style-label header-overlay-alignment-left header-width-full tweak-transparent-header  tweak-fixed-header-style-basic tweak-blog-alternating-side-by-side-width-full tweak-blog-alternating-side-by-side-image-aspect-ratio-11-square tweak-blog-alternating-side-by-side-text-alignment-left tweak-blog-alternating-side-by-side-read-more-style-hide tweak-blog-alternating-side-by-side-image-text-alignment-middle tweak-blog-alternating-side-by-side-delimiter-bullet tweak-blog-alternating-side-by-side-meta-position-top tweak-blog-alternating-side-by-side-primary-meta-categories tweak-blog-alternating-side-by-side-secondary-meta-date tweak-blog-alternating-side-by-side-excerpt-show tweak-blog-basic-grid-width-full tweak-blog-basic-grid-image-aspect-ratio-11-square tweak-blog-basic-grid-text-alignment-left tweak-blog-basic-grid-delimiter-bullet tweak-blog-basic-grid-image-placement-above tweak-blog-basic-grid-read-more-style-hide tweak-blog-basic-grid-primary-meta-categories tweak-blog-basic-grid-secondary-meta-date tweak-blog-basic-grid-excerpt-hide tweak-blog-item-width-narrow tweak-blog-item-text-alignment-left tweak-blog-item-meta-position-above-title  tweak-blog-item-show-date   tweak-blog-item-delimiter-bullet tweak-blog-masonry-width-inset tweak-blog-masonry-text-alignment-center tweak-blog-masonry-primary-meta-categories tweak-blog-masonry-secondary-meta-date tweak-blog-masonry-meta-position-top tweak-blog-masonry-read-more-style-hide tweak-blog-masonry-delimiter-space tweak-blog-masonry-image-placement-above tweak-blog-masonry-excerpt-show tweak-blog-side-by-side-width-inset tweak-blog-side-by-side-image-placement-left tweak-blog-side-by-side-image-aspect-ratio-11-square tweak-blog-side-by-side-primary-meta-categories tweak-blog-side-by-side-secondary-meta-date tweak-blog-side-by-side-meta-position-top tweak-blog-side-by-side-text-alignment-left tweak-blog-side-by-side-image-text-alignment-middle tweak-blog-side-by-side-read-more-style-show tweak-blog-side-by-side-delimiter-bullet tweak-blog-side-by-side-excerpt-show tweak-blog-single-column-width-inset tweak-blog-single-column-text-alignment-center tweak-blog-single-column-image-placement-above tweak-blog-single-column-delimiter-bullet tweak-blog-single-column-read-more-style-show tweak-blog-single-column-primary-meta-categories tweak-blog-single-column-secondary-meta-date tweak-blog-single-column-meta-position-top tweak-blog-single-column-content-full-post tweak-events-stacked-width-full tweak-events-stacked-height-large  tweak-events-stacked-show-thumbnails tweak-events-stacked-thumbnail-size-32-standard tweak-events-stacked-date-style-with-text tweak-events-stacked-show-time tweak-events-stacked-show-location  tweak-events-stacked-show-excerpt  tweak-global-animations-enabled tweak-global-animations-complexity-level-detailed tweak-global-animations-animation-style-fade tweak-global-animations-animation-type-fade tweak-global-animations-animation-curve-ease tweak-portfolio-grid-basic-width-full tweak-portfolio-grid-basic-height-small tweak-portfolio-grid-basic-image-aspect-ratio-11-square tweak-portfolio-grid-basic-text-alignment-left tweak-portfolio-grid-basic-hover-effect-fade tweak-portfolio-grid-overlay-width-full tweak-portfolio-grid-overlay-height-large tweak-portfolio-grid-overlay-image-aspect-ratio-11-square tweak-portfolio-grid-overlay-text-placement-center tweak-portfolio-grid-overlay-show-text-after-hover tweak-portfolio-index-background-link-format-stacked tweak-portfolio-index-background-width-full tweak-portfolio-index-background-height-large  tweak-portfolio-index-background-vertical-alignment-middle tweak-portfolio-index-background-horizontal-alignment-center tweak-portfolio-index-background-delimiter-none tweak-portfolio-index-background-animation-type-fade tweak-portfolio-index-background-animation-duration-medium tweak-portfolio-hover-follow-layout-inline  tweak-portfolio-hover-follow-delimiter-bullet tweak-portfolio-hover-follow-animation-type-fade tweak-portfolio-hover-follow-animation-duration-fast tweak-portfolio-hover-static-layout-inline tweak-portfolio-hover-static-front tweak-portfolio-hover-static-delimiter-hyphen tweak-portfolio-hover-static-animation-type-fade tweak-portfolio-hover-static-animation-duration-fast tweak-product-basic-item-product-variant-display-dropdown tweak-product-basic-item-product-subscription-display-radio tweak-product-basic-item-product-subscription-border-shape-square tweak-product-basic-item-width-full tweak-product-basic-item-gallery-aspect-ratio-11-square tweak-product-basic-item-text-alignment-left tweak-product-basic-item-navigation-none tweak-product-basic-item-description-position-below-price tweak-product-basic-item-description-position-mobile-below-add-to-cart-button tweak-product-basic-item-content-alignment-top tweak-product-basic-item-gallery-design-slideshow tweak-product-basic-item-gallery-placement-right tweak-product-basic-item-thumbnail-placement-side tweak-product-basic-item-click-action-none tweak-product-basic-item-hover-action-zoom tweak-product-basic-item-variant-picker-layout-dropdowns tweak-product-basic-item-add-to-cart-standalone tweak-product-basic-item-add-to-cart-mobile-standalone tweak-products-width-inset tweak-products-image-aspect-ratio-11-square tweak-products-text-alignment-middle  tweak-products-price-show tweak-products-nested-category-type-top  tweak-products-header-text-alignment-middle tweak-products-breadcrumbs image-block-poster-text-alignment-left image-block-card-content-position-center image-block-card-text-alignment-left image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-content-position-center image-block-collage-text-alignment-center image-block-stack-text-alignment-left hide-opentable-icons opentable-style-dark tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-center tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-usd collection-6687879a314049367660c95a collection-type-page collection-layout-default homepage mobile-style-available sqs-seven-one
      
        show-pdp-subs-otp
      
      
        pdp_subs_otp_buttons_enabled
      
      
        show-tweak-description-position show-tweak-add-to-cart-button
      
      
        
          
            
              
            
          
        
      
    "
    tabindex="-1"
  >
    <div
      id="siteWrapper"
      class="clearfix site-wrapper"
    >
      
      

      

















  <header
    data-test="header"
    id="header"
    
    class="
      
        
          light
        
      
      header theme-col--primary
    "
    data-section-theme="light"
    data-controller="Header"
    data-current-styles="{
&quot;layout&quot;: &quot;navLeft&quot;,
&quot;action&quot;: {
&quot;buttonText&quot;: &quot;Get Started&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: false,
&quot;socialOptions&quot;: {
&quot;socialBorderShape&quot;: &quot;none&quot;,
&quot;socialBorderStyle&quot;: &quot;outline&quot;,
&quot;socialBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;sectionTheme&quot;: &quot;&quot;,
&quot;menuOverlayTheme&quot;: &quot;light&quot;,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;text&quot;,
&quot;cartText&quot;: &quot;&lt;?php echo $BRANDS ?&gt;&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;stroke-5&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: false,
&quot;showCart&quot;: true,
&quot;showAccountLogin&quot;: false,
&quot;headerStyle&quot;: &quot;dynamic&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoLeftNavRight&quot;,
&quot;menuIcon&quot;: &quot;halfLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;tripleLineHamburger&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 2.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadowOptions&quot;: {
&quot;enabled&quot;: true,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;borderOptions&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;showPromotedElement&quot;: false,
&quot;buttonVariant&quot;: &quot;primary&quot;,
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
}
}"
    data-section-id="header"
    data-header-style="dynamic"
    data-language-picker="{
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
}"
    
    data-first-focusable-element
    tabindex="-1"
    style="
      
        
        
          --headerBorderColor: hsla(var(--black-hsl), 1);
        
      
      
        --solidHeaderBackgroundColor: hsla(var(--white-hsl), 1);
      
      
        --solidHeaderNavigationColor: hsla(var(--black-hsl), 1);
      
      
        --gradientHeaderBackgroundColor: hsla(var(--white-hsl), 1);
      
      
        --gradientHeaderNavigationColor: hsla(var(--black-hsl), 1);
      
    "
  >
    
<div class="sqs-announcement-bar-dropzone"></div>

    <div class="header-announcement-bar-wrapper">
      
      <a
        href="#page"
        class="header-skip-link sqs-button-element--primary"
      >
        Skip to Content
      </a>
      


<style>
    @supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
        .header-blur-background {
            
            
        }
    }
</style>
      <div
        class="header-border"
        data-header-style="dynamic"
        data-header-usability-enabled="true"
        data-header-border="false"
        data-test="header-border"
        style="






  
    border-width: 0px !important;
  



  



"
      ></div>
      <div
        class="header-dropshadow"
        data-header-style="dynamic"
        data-header-usability-enabled="true"
        data-header-dropshadow="true"
        data-test="header-dropshadow"
        style="


  
    box-shadow: 0px 12px 12px 0px;
  
"
      ></div>
      
      

      <div class='header-inner container--fluid
        
          header-layout--with-commerce
        
        
        
         header-mobile-layout-logo-left-nav-right
        
        
        
        
        
        
        
         header-layout-nav-left
        
        
        
        
        
        
        
        '
        style="






  
    padding: 0;
  



"
        data-test="header-inner"
        >
        <!-- Background -->
        <div class="header-background theme-bg--primary"></div>

        <div class="header-display-desktop" data-content-field="site-title">
          

          

          

          

          

          
          
            


<style>
  .top-bun, 
  .patty, 
  .bottom-bun {
    height: 2px;
  }
</style>

<!-- Burger -->
<div class="header-burger

  menu-overlay-does-not-have-visible-non-navigation-items


  
  no-actions
  
" data-animation-role="header-element">
  <button class="header-burger-btn burger" data-test="header-burger">
    <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
    <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
    <div class="burger-box">
      <div class="burger-inner header-menu-icon-tripleLineHamburger">
        <div class="top-bun"></div>
        <div class="patty"></div>
        <div class="bottom-bun"></div>
      </div>
    </div>
  </button>
</div>

            
            <!-- Social -->
            
          
            
            <!-- Title and nav wrapper -->
            <div class="header-title-nav-wrapper">
              

              

              
                
                <!-- Title -->
                
                  <div
                    class="
                      header-title
                      
                    "
                    data-animation-role="header-element"
                  >
                    
                      <div class="header-title-logo">
                        <a href="/" data-animation-role="header-element">
                        
<img elementtiming="nbf-header-logo-desktop" src="//images.squarespace-cdn.com/content/v1/668786474697d5738ce3f5bf/78893eab-1dc0-447b-91be-cdca3bb8b38d/3.png?format=1500w" alt="SLOT GACOR" style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw">

                        </a>
                      </div>

                    
                    
                  </div>
                
              
                
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list">
                      

                    </nav>
                  </div>
                </div>
              
              
            </div>
          
            
            <!-- Actions -->
            <div class="header-actions header-actions--right">
              
                
              
              

              

            
            

              

              

              

              

              
            

              
              <div class="showOnMobile">
                
                  
                
                
                  
                  
                    <div class="header-actions-action header-actions-action--cart header-nav-item">
                      <a class="cart-style-text cart-text-link sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline"  href="https://rebrand.ly/panikpanik">
                        
                          <span class="mobile-cart-parenthesis"></span><span class="sqs-cart-quantity"></span><span class="mobile-cart-parenthesis"></span>
                        
                      </a>
                    </div>
                  
                
              
                
              </div>

              
              <div class="showOnDesktop">
                
                  
                
                
                  
                  
                    <div class="header-actions-action header-actions-action--cart header-nav-item">
                      <a class="cart-style-text cart-text-link sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline"  href="https://rebrand.ly/panikpanik">
                        
                          <?php echo $BRANDS ?>
                          
              
                        
                      </a>
                    </div>
                  
                
              
                
              </div>

              
            </div>
          
          
          
          
          
          

        </div>
        <div class="header-display-mobile" data-content-field="site-title">
          
            
            <!-- Social -->
            
          
            
            <!-- Title and nav wrapper -->
            <div class="header-title-nav-wrapper">
              

              

              
                
                <!-- Title -->
                
                  <div
                    class="
                      header-title
                      
                    "
                    data-animation-role="header-element"
                  >
                    
                      <div class="header-title-logo">
                        <a href="/" data-animation-role="header-element">
                        
<img elementtiming="nbf-header-logo-desktop" src="//images.squarespace-cdn.com/content/v1/668786474697d5738ce3f5bf/78893eab-1dc0-447b-91be-cdca3bb8b38d/3.png?format=1500w" alt="SLOT GACOR" style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw">

                        </a>
                      </div>

                    
                    
                  </div>
                
              
                
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list">
                      

                    </nav>
                  </div>
                </div>
              
              
            </div>
          
            
            <!-- Actions -->
            <div class="header-actions header-actions--right">
              
                
              
              

              

            
            

              

              

              

              

              
            

              
              <div class="showOnMobile">
                
                  
                
                
                  
                  
                    <div class="header-actions-action header-actions-action--cart header-nav-item">
                      <a class="cart-style-text cart-text-link sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline"  href="https://rebrand.ly/panikpanik">
                        
                          <span class="mobile-cart-parenthesis"></span><span class="sqs-cart-quantity"></span><span class="mobile-cart-parenthesis"></span>
                        
                      </a>
                    </div>
                  
                
              
                
              </div>

              
              <div class="showOnDesktop">
                
                  
                
                
                  
                  
                    <div class="header-actions-action header-actions-action--cart header-nav-item">
                      <a class="cart-style-text cart-text-link sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline"  href="https://rebrand.ly/panikpanik">
                        
                          <?php echo $BRANDS ?>
                          
                <span class="cart-quantity-container">
                  
                    &#40;<span class="sqs-cart-quantity"></span>&#41;
                  
                </span>
              
                        
                      </a>
                    </div>
                  
                
              
                
              </div>

              
            </div>
          
            


<style>
  .top-bun, 
  .patty, 
  .bottom-bun {
    height: 2px;
  }
</style>

<!-- Burger -->
<div class="header-burger

  menu-overlay-does-not-have-visible-non-navigation-items


  
  no-actions
  
" data-animation-role="header-element">
  <button class="header-burger-btn burger" data-test="header-burger">
    <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
    <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
    <div class="burger-box">
      <div class="burger-inner header-menu-icon-tripleLineHamburger">
        <div class="top-bun"></div>
        <div class="patty"></div>
        <div class="bottom-bun"></div>
      </div>
    </div>
  </button>
</div>

          
          
          
          
          
        </div>
      </div>
    </div>
    <!-- (Mobile) Menu Navigation -->
    <div class="header-menu header-menu--folder-list
      light
      
      
      
      
      "
      data-section-theme="light"
      data-current-styles="{
&quot;layout&quot;: &quot;navLeft&quot;,
&quot;action&quot;: {
&quot;buttonText&quot;: &quot;Get Started&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: false,
&quot;socialOptions&quot;: {
&quot;socialBorderShape&quot;: &quot;none&quot;,
&quot;socialBorderStyle&quot;: &quot;outline&quot;,
&quot;socialBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;sectionTheme&quot;: &quot;&quot;,
&quot;menuOverlayTheme&quot;: &quot;light&quot;,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;text&quot;,
&quot;cartText&quot;: &quot;&lt;?php echo $BRANDS ?&gt;&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;stroke-5&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: false,
&quot;showCart&quot;: true,
&quot;showAccountLogin&quot;: false,
&quot;headerStyle&quot;: &quot;dynamic&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoLeftNavRight&quot;,
&quot;menuIcon&quot;: &quot;halfLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;tripleLineHamburger&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 2.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadowOptions&quot;: {
&quot;enabled&quot;: true,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;borderOptions&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;showPromotedElement&quot;: false,
&quot;buttonVariant&quot;: &quot;primary&quot;,
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
}
}"
      data-section-id="overlay-nav"
      data-show-account-login="false"
      data-test="header-menu">
      <div class="header-menu-bg theme-bg--primary"></div>
      <div class="header-menu-nav">
        <nav class="header-menu-nav-list">
          <div data-folder="root" class="header-menu-nav-folder">
            <div class="header-menu-nav-folder-content">
              <!-- Menu Navigation -->
<div class="header-menu-nav-wrapper">
  
</div>

              
                
              
            </div>
            
            
            
          </div>
        </nav>
      </div>
    </div>
  </header>




      <main id="page" class="container" role="main">
        
          
<article class="sections" id="sections" data-page-sections="6687879a314049367660c959">
  
  
    
    


  


<section
  data-test="page-section"
  
  data-section-theme="light"
  class='page-section 
    
      full-bleed-section
      layout-engine-section
    
    background-width--full-bleed
    
      
        section-height--custom
      
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    light'
  
  data-section-id="6687bc40829e3e4949e08a67"
  
  data-controller="SectionWrapperController"
  data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.24,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--custom&quot;,
&quot;customSectionHeight&quot;: 1,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;customContentWidth&quot;: 50,
&quot;sectionTheme&quot;: &quot;light&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;
}"
  data-current-context="{
&quot;video&quot;: {
&quot;playbackSpeed&quot;: 0.5,
&quot;filter&quot;: 1,
&quot;filterStrength&quot;: 0,
&quot;zoom&quot;: 0,
&quot;videoSourceProvider&quot;: &quot;none&quot;
},
&quot;backgroundImageId&quot;: null,
&quot;backgroundMediaEffect&quot;: {
&quot;type&quot;: &quot;none&quot;
},
&quot;divider&quot;: {
&quot;enabled&quot;: false,
&quot;type&quot;: &quot;wavy&quot;,
&quot;width&quot;: {
&quot;unit&quot;: &quot;vw&quot;,
&quot;value&quot;: 100.0
},
&quot;height&quot;: {
&quot;unit&quot;: &quot;vw&quot;,
&quot;value&quot;: 6.0
},
&quot;isFlipX&quot;: false,
&quot;isFlipY&quot;: false,
&quot;offset&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;stroke&quot;: {
&quot;style&quot;: &quot;solid&quot;,
&quot;color&quot;: {
&quot;type&quot;: &quot;THEME_COLOR&quot;
},
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 6.0
},
&quot;dashLength&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 5.0
},
&quot;gapLength&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 15.0
},
&quot;linecap&quot;: &quot;square&quot;
}
},
&quot;typeName&quot;: &quot;page&quot;
}"
  data-animation="none"
  data-fluid-engine-section
   
  
     style="min-height: 1vh;" 
  
  
>
  <div
    class="section-border"
    
  >
    <div class="section-background">
    
      
    
    </div>
  </div>
  <div
    class='content-wrapper'
    style='
      
        
          
          
          padding-top: calc(1vmax / 10); padding-bottom: calc(1vmax / 10);
        
      
    '
  >
    <div
      class="content"
      
    >
      
      
      
      
      
      
      <div data-fluid-engine="true"><style>

.fe-6687bc40829e3e4949e08a66 {
  --grid-gutter: calc(var(--sqs-mobile-site-gutter, 6vw) - 11.0px);
  --cell-max-width: calc( ( var(--sqs-site-max-width, 1500px) - (11.0px * (8 - 1)) ) / 8 );

  display: grid;
  position: relative;
  grid-area: 1/1/-1/-1;
  grid-template-rows: repeat(32,minmax(24px, auto));
  grid-template-columns:
    minmax(var(--grid-gutter), 1fr)
    repeat(8, minmax(0, var(--cell-max-width)))
    minmax(var(--grid-gutter), 1fr);
  row-gap: 11.0px;
  column-gap: 11.0px;
}

@media (min-width: 768px) {
  .background-width--inset .fe-6687bc40829e3e4949e08a66 {
    --inset-padding: calc(var(--sqs-site-gutter) * 2);
  }

  .fe-6687bc40829e3e4949e08a66 {
    --grid-gutter: calc(var(--sqs-site-gutter, 4vw) - 11.0px);
    --cell-max-width: calc( ( var(--sqs-site-max-width, 1500px) - (11.0px * (24 - 1)) ) / 24 );
    --inset-padding: 0vw;

    --row-height-scaling-factor: 0.0215;
    --container-width: min(var(--sqs-site-max-width, 1500px), calc(100vw - var(--sqs-site-gutter, 4vw) * 2 - var(--inset-padding) ));

    grid-template-rows: repeat(19,minmax(calc(var(--container-width) * var(--row-height-scaling-factor)), auto));
    grid-template-columns:
      minmax(var(--grid-gutter), 1fr)
      repeat(24, minmax(0, var(--cell-max-width)))
      minmax(var(--grid-gutter), 1fr);
  }
}


  .fe-block-yui_3_17_2_1_1720269283992_2033 {
    grid-area: 2/2/12/10;
    z-index: 14;

    @media (max-width: 767px) {
      
        
      
    }
  }

  .fe-block-yui_3_17_2_1_1720269283992_2033 .sqs-block {
    justify-content: center;
  }

  .fe-block-yui_3_17_2_1_1720269283992_2033 .sqs-block-alignment-wrapper {
    align-items: center;
  }

  @media (min-width: 768px) {
    .fe-block-yui_3_17_2_1_1720269283992_2033 {
      grid-area: 2/5/16/13;
      z-index: 7;

      
        
      
    }

    .fe-block-yui_3_17_2_1_1720269283992_2033 .sqs-block {
      justify-content: center;
    }

    .fe-block-yui_3_17_2_1_1720269283992_2033 .sqs-block-alignment-wrapper {
      align-items: center;
    }
  }

  .fe-block-672466f1700d9d8f42a7 {
    grid-area: 12/2/15/10;
    z-index: 6;

    @media (max-width: 767px) {
      
        
      
    }
  }

  .fe-block-672466f1700d9d8f42a7 .sqs-block {
    justify-content: flex-start;
  }

  .fe-block-672466f1700d9d8f42a7 .sqs-block-alignment-wrapper {
    align-items: flex-start;
  }

  @media (min-width: 768px) {
    .fe-block-672466f1700d9d8f42a7 {
      grid-area: 11/14/13/23;
      z-index: 2;

      
        
      
    }

    .fe-block-672466f1700d9d8f42a7 .sqs-block {
      justify-content: flex-start;
    }

    .fe-block-672466f1700d9d8f42a7 .sqs-block-alignment-wrapper {
      align-items: flex-start;
    }
  }

  .fe-block-de56ae2a3351222eb185 {
    grid-area: 15/2/20/10;
    z-index: 11;

    @media (max-width: 767px) {
      
        
      
    }
  }

  .fe-block-de56ae2a3351222eb185 .sqs-block {
    justify-content: flex-start;
  }

  .fe-block-de56ae2a3351222eb185 .sqs-block-alignment-wrapper {
    align-items: flex-start;
  }

  @media (min-width: 768px) {
    .fe-block-de56ae2a3351222eb185 {
      grid-area: 3/14/8/23;
      z-index: 3;

      
        
      
    }

    .fe-block-de56ae2a3351222eb185 .sqs-block {
      justify-content: flex-start;
    }

    .fe-block-de56ae2a3351222eb185 .sqs-block-alignment-wrapper {
      align-items: flex-start;
    }
  }

  .fe-block-yui_3_17_2_1_1720177268303_6605 {
    grid-area: 20/2/26/10;
    z-index: 13;

    @media (max-width: 767px) {
      
        
      
    }
  }

  .fe-block-yui_3_17_2_1_1720177268303_6605 .sqs-block {
    justify-content: flex-start;
  }

  .fe-block-yui_3_17_2_1_1720177268303_6605 .sqs-block-alignment-wrapper {
    align-items: flex-start;
  }

  @media (min-width: 768px) {
    .fe-block-yui_3_17_2_1_1720177268303_6605 {
      grid-area: 8/14/10/23;
      z-index: 4;

      
        
      
    }

    .fe-block-yui_3_17_2_1_1720177268303_6605 .sqs-block {
      justify-content: flex-start;
    }

    .fe-block-yui_3_17_2_1_1720177268303_6605 .sqs-block-alignment-wrapper {
      align-items: flex-start;
    }
  }

  .fe-block-yui_3_17_2_1_1721273072717_40144 {
    grid-area: 26/2/29/10;
    z-index: 15;

    @media (max-width: 767px) {
      
        
      
    }
  }

  .fe-block-yui_3_17_2_1_1721273072717_40144 .sqs-block {
    justify-content: flex-start;
  }

  .fe-block-yui_3_17_2_1_1721273072717_40144 .sqs-block-alignment-wrapper {
    align-items: flex-start;
  }

  @media (min-width: 768px) {
    .fe-block-yui_3_17_2_1_1721273072717_40144 {
      grid-area: 10/14/11/23;
      z-index: 8;

      
        
      
    }

    .fe-block-yui_3_17_2_1_1721273072717_40144 .sqs-block {
      justify-content: flex-start;
    }

    .fe-block-yui_3_17_2_1_1721273072717_40144 .sqs-block-alignment-wrapper {
      align-items: flex-start;
    }
  }

</style><div class="fluid-engine fe-6687bc40829e3e4949e08a66"><div class="fe-block fe-block-yui_3_17_2_1_1720269283992_2033"><div class="sqs-block image-block sqs-block-image sqs-stretched" data-block-type="5" id="block-yui_3_17_2_1_1720269283992_2033"><div class="sqs-block-content">










































  

    
  
    <div
      class="
        image-block-outer-wrapper
        layout-caption-below
        design-layout-fluid
        image-position-center
        combination-animation-site-default
        individual-animation-site-default
      "
      data-test="image-block-fluid-outer-wrapper"
    >
      <div
        class="fluid-image-animation-wrapper sqs-image sqs-block-alignment-wrapper"
        data-animation-role="image"
        
  

      >
        <div
          class="fluid-image-container sqs-image-content"
          
          style="overflow: hidden;-webkit-mask-image: -webkit-radial-gradient(white, black);position: relative;width: 100%;height: 100%;"
        >
          

          
          

          
            
              <div class="content-fit">
                
            
            
            
            
            
            
            <img data-stretch="false" data-src="https://images.squarespace-cdn.com/content/v1/668786474697d5738ce3f5bf/974f7072-6cc9-4f2e-8396-a156bf6d0783/2.png" data-image="https://images.squarespace-cdn.com/content/v1/668786474697d5738ce3f5bf/974f7072-6cc9-4f2e-8396-a156bf6d0783/2.png" data-image-dimensions="500x500" data-image-focal-point="0.5,0.5" alt="" data-load="false" elementtiming="system-image-block" src="https://images.squarespace-cdn.com/content/v1/668786474697d5738ce3f5bf/974f7072-6cc9-4f2e-8396-a156bf6d0783/2.png" width="500" height="500" alt="" sizes="(max-width: 640px) 100vw, (max-width: 767px) 100vw, 33.33333333333333vw" style="display:block;object-fit: contain; object-position: 50% 50%" srcset="https://images.squarespace-cdn.com/content/v1/668786474697d5738ce3f5bf/974f7072-6cc9-4f2e-8396-a156bf6d0783/2.png?format=100w 100w, https://images.squarespace-cdn.com/content/v1/668786474697d5738ce3f5bf/974f7072-6cc9-4f2e-8396-a156bf6d0783/2.png?format=300w 300w, https://images.squarespace-cdn.com/content/v1/668786474697d5738ce3f5bf/974f7072-6cc9-4f2e-8396-a156bf6d0783/2.png?format=500w 500w, https://images.squarespace-cdn.com/content/v1/668786474697d5738ce3f5bf/974f7072-6cc9-4f2e-8396-a156bf6d0783/2.png?format=750w 750w, https://images.squarespace-cdn.com/content/v1/668786474697d5738ce3f5bf/974f7072-6cc9-4f2e-8396-a156bf6d0783/2.png?format=1000w 1000w, https://images.squarespace-cdn.com/content/v1/668786474697d5738ce3f5bf/974f7072-6cc9-4f2e-8396-a156bf6d0783/2.png?format=1500w 1500w, https://images.squarespace-cdn.com/content/v1/668786474697d5738ce3f5bf/974f7072-6cc9-4f2e-8396-a156bf6d0783/2.png?format=2500w 2500w" loading="lazy" decoding="async" data-loader="sqs">

            
              
            
            <div class="fluidImageOverlay"></div>
          
              </div>
            
          

        </div>
      </div>
    </div>
    <style>
      .sqs-block-image .sqs-block-content {
        height: 100%;
        width: 100%;
      }

      
        .fe-block-yui_3_17_2_1_1720269283992_2033 .fluidImageOverlay {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          mix-blend-mode: normal;
          
            
            
          
          
            opacity: 0;
          
        }
      
    </style>
  


  


</div></div></div><div class="fe-block fe-block-672466f1700d9d8f42a7"><div class="sqs-block code-block sqs-block-code" data-block-type="23" id="block-672466f1700d9d8f42a7"><div class="sqs-block-content"><!DOCTYPE html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en-US"  lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar dan Login</title>
    <style>
        /* Container untuk tombol */
        .button-container {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 20px; /* Jarak dari atas */
        }
        /* Gaya tombol umum */
        .custom-button {
            background: linear-gradient(to right, #191970, #4169E1); /* Warna merah terang */
            color: white; /* Warna teks */
            width: 3000px; /* Lebar tombol */
            height: 50px; /* Tinggi tombol */
            display: flex;
            align-items: center; /* Vertikal tengah */
            justify-content: center; /* Horizontal tengah */
            border: none; /* Tanpa border */
            border-radius: 0px; /* Sudut tombol melengkung */
            cursor: pointer; /* Kursor berubah menjadi pointer saat dihover */
            text-decoration: none; /* Hilangkan underline pada link */
            font-size: 16px; /* Ukuran teks */
            transition: background-color 0.3s; /* Transisi warna saat dihover */

        /* Warna saat dihover */
        .custom-button:hover {
            background-color: #8B0000; /* Warna biru yang lebih gelap saat dihover */
        }
    </style>
</head>
<body>
    <!-- Kontainer tombol -->
    <div class="button-container">
        <!-- Tombol Daftar -->
        <a href="https://rebrand.ly/panikpanik" class="custom-button">Daftar</a>
        <!-- Tombol Login -->
        <a href="https://rebrand.ly/panikpanik" class="custom-button">Login</a>
    </div>
</body>
</html>
</div></div></div><div class="fe-block fe-block-de56ae2a3351222eb185"><div class="sqs-block html-block sqs-block-html" data-blend-mode="NORMAL" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-de56ae2a3351222eb185"><div class="sqs-block-content">

<div class="sqs-html-content">
  <h1 style="white-space:pre-wrap;">LOGIN <?php echo $BRANDS ?> 🧞‍♀️ MAIN DISINI PASTI MENANG BRAY COBA DULU POLA GACOR BADAS NYA </h1>
</div>




















  
  



</div></div></div><div class="fe-block fe-block-yui_3_17_2_1_1720177268303_6605"><div class="sqs-block html-block sqs-block-html" data-blend-mode="NORMAL" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-yui_3_17_2_1_1720177268303_6605"><div class="sqs-block-content">

<div class="sqs-html-content">
  <p style="text-align:justify;white-space: normal !important;white-space:pre-wrap;" class="sqsrte-small"><a href="<?php echo $urlPath ?>"><?php echo $BRANDS ?></a> permainan slot online yang dikenal memberikan kemenangan besar dengan level maksimal. dilengkapi dengan rtp 99% akurat, <?php echo $BRANDS ?> menjanjikan kemenangan yang sangat besar hanya dengan modal 25rb saja.</p>
</div>




















  
  



</div></div></div><div class="fe-block fe-block-yui_3_17_2_1_1721273072717_40144"><div class="sqs-block audio-block sqs-block-audio sqs-stretched" data-block-type="41" id="block-yui_3_17_2_1_1721273072717_40144"><div class="sqs-block-content">



<div 
  class="sqs-audio-embed"
  data-url="https://static1.squarespace.com/static/668786474697d5738ce3f5bf/t/66989d80a9f7807412032a6d/1721277828442/puhsepuh.mp3/original/puhsepuh.mp3"
  data-mime-type=""
  data-title="AJARIN TURUN DONG SEPUH 😋"
  data-author=""
  data-show-download="false"
  data-design-style="minimal"
  data-duration-in-ms="28000"
  data-color-theme="dark"

  
>
</div>
</div></div></div></div></div>
    </div>
  
  </div>
  
</section>

  
</article>


          

          
            
          
        
      </main>
      <script type="text/javascript">
        const firstSection = document.querySelector('.page-section');
        const header = document.querySelector('.header');
        const mobileOverlayNav = document.querySelector('.header-menu');
        const sectionBackground = firstSection ? firstSection.querySelector('.section-background') : null;
        const headerHeight = header ? header.getBoundingClientRect().height : 0;
        const firstSectionHasBackground = firstSection ? firstSection.className.indexOf('has-background') >= 0 : false;
        const isFirstSectionInset = firstSection ? firstSection.className.indexOf('background-width--inset') >= 0 : false;
        const isLayoutEngineSection = firstSection ? firstSection.className.indexOf('layout-engine-section') >= 0 : false;

        if (firstSection) {
          firstSection.style.paddingTop = headerHeight + 'px';
        }
        if (sectionBackground && isLayoutEngineSection) {
          if (isFirstSectionInset) {
            sectionBackground.style.top = headerHeight + 'px';
          } else {
            sectionBackground.style.top = '';
          }
        }
        //# sourceURL=headerPositioning.js
      </script>

      
        <footer class="sections" id="footer-sections" data-footer-sections>
  
  
  
  
  
  
</footer>

      
    </div>

    <script defer="defer" src="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/site-bundle.951f531f248730580867fa534b60d99a.js" type="text/javascript"></script>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none" data-usage="social-icons-svg"><symbol id="instagram-unauth-icon" viewBox="0 0 64 64"><path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"/></symbol><symbol id="instagram-unauth-mask" viewBox="0 0 64 64"><path d="M43.693,23.153c-0.272-0.7-0.597-1.2-1.122-1.725c-0.525-0.525-1.025-0.85-1.725-1.122c-0.529-0.205-1.323-0.45-2.785-0.517c-1.582-0.072-2.056-0.087-6.061-0.087s-4.48,0.015-6.061,0.087c-1.462,0.067-2.257,0.311-2.785,0.517c-0.7,0.272-1.2,0.597-1.725,1.122c-0.525,0.525-0.85,1.025-1.122,1.725c-0.205,0.529-0.45,1.323-0.516,2.785c-0.072,1.582-0.087,2.056-0.087,6.061s0.015,4.48,0.087,6.061c0.067,1.462,0.311,2.257,0.516,2.785c0.272,0.7,0.597,1.2,1.122,1.725s1.025,0.85,1.725,1.122c0.529,0.205,1.323,0.45,2.785,0.516c1.581,0.072,2.056,0.087,6.061,0.087s4.48-0.015,6.061-0.087c1.462-0.067,2.257-0.311,2.785-0.516c0.7-0.272,1.2-0.597,1.725-1.122s0.85-1.025,1.122-1.725c0.205-0.529,0.45-1.323,0.516-2.785c0.072-1.582,0.087-2.056,0.087-6.061s-0.015-4.48-0.087-6.061C44.143,24.476,43.899,23.682,43.693,23.153z M32,39.703c-4.254,0-7.703-3.449-7.703-7.703s3.449-7.703,7.703-7.703s7.703,3.449,7.703,7.703S36.254,39.703,32,39.703z M40.007,25.793c-0.994,0-1.8-0.806-1.8-1.8c0-0.994,0.806-1.8,1.8-1.8c0.994,0,1.8,0.806,1.8,1.8C41.807,24.987,41.001,25.793,40.007,25.793z M0,0v64h64V0H0z M46.91,38.184c-0.073,1.597-0.326,2.687-0.697,3.641c-0.383,0.986-0.896,1.823-1.73,2.657c-0.834,0.834-1.67,1.347-2.657,1.73c-0.954,0.371-2.044,0.624-3.641,0.697C36.585,46.983,36.074,47,32,47s-4.585-0.017-6.184-0.09c-1.597-0.073-2.687-0.326-3.641-0.697c-0.986-0.383-1.823-0.896-2.657-1.73c-0.834-0.834-1.347-1.67-1.73-2.657c-0.371-0.954-0.624-2.044-0.697-3.641C17.017,36.585,17,36.074,17,32c0-4.074,0.017-4.585,0.09-6.185c0.073-1.597,0.326-2.687,0.697-3.641c0.383-0.986,0.896-1.823,1.73-2.657c0.834-0.834,1.67-1.347,2.657-1.73c0.954-0.371,2.045-0.624,3.641-0.697C27.415,17.017,27.926,17,32,17s4.585,0.017,6.184,0.09c1.597,0.073,2.687,0.326,3.641,0.697c0.986,0.383,1.823,0.896,2.657,1.73c0.834,0.834,1.347,1.67,1.73,2.657c0.371,0.954,0.624,2.044,0.697,3.641C46.983,27.415,47,27.926,47,32C47,36.074,46.983,36.585,46.91,38.184z M32,27c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S34.761,27,32,27z"/></symbol></svg>

  </body>
</html>
