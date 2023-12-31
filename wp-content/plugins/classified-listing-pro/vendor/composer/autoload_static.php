<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2032c4bc984f2f3a6410f3cccbad6a1
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RtclPro\\' => 8,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'E' => 
        array (
            'ExpoSDK\\' => 8,
        ),
        'A' => 
        array (
            'AppleSignIn\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RtclPro\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'ExpoSDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src',
        ),
        'AppleSignIn\\' => 
        array (
            0 => __DIR__ . '/..' . '/griffinledingham/php-apple-signin',
        ),
    );

    public static $classMap = array (
        'AppleSignIn\\ASDecoder' => __DIR__ . '/..' . '/griffinledingham/php-apple-signin/ASDecoder.php',
        'AppleSignIn\\Vendor\\JWK' => __DIR__ . '/..' . '/griffinledingham/php-apple-signin/Vendor/JWK.php',
        'AppleSignIn\\Vendor\\JWT' => __DIR__ . '/..' . '/griffinledingham/php-apple-signin/Vendor/JWT.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ExpoSDK\\DriverManager' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/DriverManager.php',
        'ExpoSDK\\Drivers\\Driver' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/Drivers/Driver.php',
        'ExpoSDK\\Drivers\\FileDriver' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/Drivers/FileDriver.php',
        'ExpoSDK\\Exceptions\\BadMethodCallException' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/Exceptions/BadMethodCallException.php',
        'ExpoSDK\\Exceptions\\ExpoException' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/Exceptions/ExpoException.php',
        'ExpoSDK\\Exceptions\\ExpoMessageException' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/Exceptions/ExpoMessageException.php',
        'ExpoSDK\\Exceptions\\FileDoesntExistException' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/Exceptions/FileDoesntExistException.php',
        'ExpoSDK\\Exceptions\\InvalidFileException' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/Exceptions/InvalidFileException.php',
        'ExpoSDK\\Exceptions\\InvalidTokensException' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/Exceptions/InvalidTokensException.php',
        'ExpoSDK\\Exceptions\\UnableToReadFileException' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/Exceptions/UnableToReadFileException.php',
        'ExpoSDK\\Exceptions\\UnableToWriteFileException' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/Exceptions/UnableToWriteFileException.php',
        'ExpoSDK\\Exceptions\\UnsupportedDriverException' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/Exceptions/UnsupportedDriverException.php',
        'ExpoSDK\\Expo' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/Expo.php',
        'ExpoSDK\\ExpoClient' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/ExpoClient.php',
        'ExpoSDK\\ExpoErrorManager' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/ExpoErrorManager.php',
        'ExpoSDK\\ExpoMessage' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/ExpoMessage.php',
        'ExpoSDK\\ExpoResponse' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/ExpoResponse.php',
        'ExpoSDK\\File' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/File.php',
        'ExpoSDK\\Traits\\Macroable' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/Traits/Macroable.php',
        'ExpoSDK\\Utils' => __DIR__ . '/..' . '/ctwillie/expo-server-sdk-php/src/Utils.php',
        'GuzzleHttp\\BodySummarizer' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/BodySummarizer.php',
        'GuzzleHttp\\BodySummarizerInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/BodySummarizerInterface.php',
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\ClientTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientTrait.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
        'GuzzleHttp\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/InvalidArgumentException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\HandlerStack' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HandlerStack.php',
        'GuzzleHttp\\Handler\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
        'GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
        'GuzzleHttp\\Handler\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
        'GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
        'GuzzleHttp\\Handler\\EasyHandle' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
        'GuzzleHttp\\Handler\\HeaderProcessor' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/HeaderProcessor.php',
        'GuzzleHttp\\Handler\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
        'GuzzleHttp\\Handler\\Proxy' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
        'GuzzleHttp\\Handler\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
        'GuzzleHttp\\MessageFormatter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatter.php',
        'GuzzleHttp\\MessageFormatterInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatterInterface.php',
        'GuzzleHttp\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Middleware.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\PrepareBodyMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
        'GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/AggregateException.php',
        'GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/CancellationException.php',
        'GuzzleHttp\\Promise\\Coroutine' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Coroutine.php',
        'GuzzleHttp\\Promise\\Create' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Create.php',
        'GuzzleHttp\\Promise\\Each' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Each.php',
        'GuzzleHttp\\Promise\\EachPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/EachPromise.php',
        'GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/FulfilledPromise.php',
        'GuzzleHttp\\Promise\\Is' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Is.php',
        'GuzzleHttp\\Promise\\Promise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Promise.php',
        'GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromiseInterface.php',
        'GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromisorInterface.php',
        'GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectedPromise.php',
        'GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectionException.php',
        'GuzzleHttp\\Promise\\TaskQueue' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueue.php',
        'GuzzleHttp\\Promise\\TaskQueueInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueueInterface.php',
        'GuzzleHttp\\Promise\\Utils' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Utils.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\Exception\\MalformedUriException' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Exception/MalformedUriException.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\Header' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Header.php',
        'GuzzleHttp\\Psr7\\HttpFactory' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/HttpFactory.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\Message' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Message.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MimeType' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MimeType.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Query' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Query.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\Rfc7230' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Rfc7230.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        'GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        'GuzzleHttp\\Psr7\\Utils' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Utils.php',
        'GuzzleHttp\\RedirectMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
        'GuzzleHttp\\RequestOptions' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestOptions.php',
        'GuzzleHttp\\RetryMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
        'GuzzleHttp\\TransferStats' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/TransferStats.php',
        'GuzzleHttp\\Utils' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Utils.php',
        'Psr\\Http\\Client\\ClientExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/ClientExceptionInterface.php',
        'Psr\\Http\\Client\\ClientInterface' => __DIR__ . '/..' . '/psr/http-client/src/ClientInterface.php',
        'Psr\\Http\\Client\\NetworkExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/NetworkExceptionInterface.php',
        'Psr\\Http\\Client\\RequestExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/RequestExceptionInterface.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/RequestFactoryInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ResponseFactoryInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ServerRequestFactoryInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/StreamFactoryInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UploadedFileFactoryInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UriFactoryInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'RtclPro\\Api\\Authentication\\AuthenticationApiKey' => __DIR__ . '/../..' . '/app/Api/Authentication/AuthenticationApiKey.php',
        'RtclPro\\Api\\Authentication\\AuthenticationBasicOAuth' => __DIR__ . '/../..' . '/app/Api/Authentication/AuthenticationBasicOAuth.php',
        'RtclPro\\Api\\Authentication\\AuthenticationJWTAuth' => __DIR__ . '/../..' . '/app/Api/Authentication/AuthenticationJWTAuth.php',
        'RtclPro\\Api\\Authentication\\AuthenticationTokenAPI' => __DIR__ . '/../..' . '/app/Api/Authentication/AuthenticationTokenAPI.php',
        'RtclPro\\Api\\RestActionHooks' => __DIR__ . '/../..' . '/app/Api/RestActionHooks.php',
        'RtclPro\\Api\\RestApi' => __DIR__ . '/../..' . '/app/Api/RestApi.php',
        'RtclPro\\Api\\RestController' => __DIR__ . '/../..' . '/app/Api/RestController.php',
        'RtclPro\\Api\\V1\\V1_AuthApi' => __DIR__ . '/../..' . '/app/Api/V1/V1_AuthApi.php',
        'RtclPro\\Api\\V1\\V1_CommonApi' => __DIR__ . '/../..' . '/app/Api/V1/V1_CommonApi.php',
        'RtclPro\\Api\\V1\\V1_ListingApi' => __DIR__ . '/../..' . '/app/Api/V1/V1_ListingApi.php',
        'RtclPro\\Api\\V1\\V1_MyApi' => __DIR__ . '/../..' . '/app/Api/V1/V1_MyApi.php',
        'RtclPro\\Api\\V1\\V1_OrderApi' => __DIR__ . '/../..' . '/app/Api/V1/V1_OrderApi.php',
        'RtclPro\\Api\\V1\\V1_PushNotificationApi' => __DIR__ . '/../..' . '/app/Api/V1/V1_PushNotificationApi.php',
        'RtclPro\\Api\\V1\\V1_ReviewApi' => __DIR__ . '/../..' . '/app/Api/V1/V1_ReviewApi.php',
        'RtclPro\\Controllers\\Ajax\\RtclProAjax' => __DIR__ . '/../..' . '/app/Controllers/Ajax/RtclProAjax.php',
        'RtclPro\\Controllers\\AuthController' => __DIR__ . '/../..' . '/app/Controllers/AuthController.php',
        'RtclPro\\Controllers\\BlockProController' => __DIR__ . '/../..' . '/app/Controllers/BlockProController.php',
        'RtclPro\\Controllers\\Blocks\\ListingAdsSlider' => __DIR__ . '/../..' . '/app/Controllers/Blocks/ListingAdsSlider.php',
        'RtclPro\\Controllers\\Blocks\\ListingCatBoxSlider' => __DIR__ . '/../..' . '/app/Controllers/Blocks/ListingCatBoxSlider.php',
        'RtclPro\\Controllers\\Blocks\\ListingStore' => __DIR__ . '/../..' . '/app/Controllers/Blocks/ListingStore.php',
        'RtclPro\\Controllers\\Blocks\\PricingTable' => __DIR__ . '/../..' . '/app/Controllers/Blocks/PricingTable.php',
        'RtclPro\\Controllers\\ChatController' => __DIR__ . '/../..' . '/app/Controllers/ChatController.php',
        'RtclPro\\Controllers\\CommentController' => __DIR__ . '/../..' . '/app/Controllers/CommentController.php',
        'RtclPro\\Controllers\\CompareController' => __DIR__ . '/../..' . '/app/Controllers/CompareController.php',
        'RtclPro\\Controllers\\CronController' => __DIR__ . '/../..' . '/app/Controllers/CronController.php',
        'RtclPro\\Controllers\\ElementorController' => __DIR__ . '/../..' . '/app/Controllers/ElementorController.php',
        'RtclPro\\Controllers\\Elementor\\Hooks\\ELFilterHooksPro' => __DIR__ . '/../..' . '/app/Controllers/Elementor/Hooks/ELFilterHooksPro.php',
        'RtclPro\\Controllers\\Elementor\\WidgetSettings\\ListingSliderSettings' => __DIR__ . '/../..' . '/app/Controllers/Elementor/WidgetSettings/ListingSliderSettings.php',
        'RtclPro\\Controllers\\Elementor\\Widgets\\ListingCategorySlider' => __DIR__ . '/../..' . '/app/Controllers/Elementor/Widgets/ListingCategorySlider.php',
        'RtclPro\\Controllers\\Elementor\\Widgets\\ListingSlider' => __DIR__ . '/../..' . '/app/Controllers/Elementor/Widgets/ListingSlider.php',
        'RtclPro\\Controllers\\Elementor\\Widgets\\PricingTable' => __DIR__ . '/../..' . '/app/Controllers/Elementor/Widgets/PricingTable.php',
        'RtclPro\\Controllers\\Hooks\\ActionHooks' => __DIR__ . '/../..' . '/app/Controllers/Hooks/ActionHooks.php',
        'RtclPro\\Controllers\\Hooks\\AdminSettingsHook' => __DIR__ . '/../..' . '/app/Controllers/Hooks/AdminSettingsHook.php',
        'RtclPro\\Controllers\\Hooks\\FilterHooks' => __DIR__ . '/../..' . '/app/Controllers/Hooks/FilterHooks.php',
        'RtclPro\\Controllers\\Hooks\\PushNotificationHooks' => __DIR__ . '/../..' . '/app/Controllers/Hooks/PushNotificationHooks.php',
        'RtclPro\\Controllers\\Hooks\\TemplateHooks' => __DIR__ . '/../..' . '/app/Controllers/Hooks/TemplateHooks.php',
        'RtclPro\\Controllers\\Hooks\\TemplateLoader' => __DIR__ . '/../..' . '/app/Controllers/Hooks/TemplateLoader.php',
        'RtclPro\\Controllers\\QuickViewController' => __DIR__ . '/../..' . '/app/Controllers/QuickViewController.php',
        'RtclPro\\Controllers\\ScriptController' => __DIR__ . '/../..' . '/app/Controllers/ScriptController.php',
        'RtclPro\\Controllers\\SubscriptionController' => __DIR__ . '/../..' . '/app/Controllers/SubscriptionController.php',
        'RtclPro\\Controllers\\TermMetas' => __DIR__ . '/../..' . '/app/Controllers/TermMetas.php',
        'RtclPro\\Emails\\UnreadMessageEmail' => __DIR__ . '/../..' . '/app/Emails/UnreadMessageEmail.php',
        'RtclPro\\Emails\\UserVerifyLinkEmailToUser' => __DIR__ . '/../..' . '/app/Emails/UserVerifyLinkEmailToUser.php',
        'RtclPro\\Gateways\\Authorize\\GatewayAuthorize' => __DIR__ . '/../..' . '/app/Gateways/Authorize/GatewayAuthorize.php',
        'RtclPro\\Gateways\\Authorize\\lib\\AuthNetAPI' => __DIR__ . '/../..' . '/app/Gateways/Authorize/lib/AuthNetAPI.php',
        'RtclPro\\Gateways\\Authorize\\lib\\AuthNetEnv' => __DIR__ . '/../..' . '/app/Gateways/Authorize/lib/AuthNetEnv.php',
        'RtclPro\\Gateways\\Authorize\\lib\\AuthNetPaymentGateway' => __DIR__ . '/../..' . '/app/Gateways/Authorize/lib/AuthNetPaymentGateway.php',
        'RtclPro\\Gateways\\Authorize\\lib\\AuthNetValidateWebhook' => __DIR__ . '/../..' . '/app/Gateways/Authorize/lib/AuthNetValidateWebhook.php',
        'RtclPro\\Gateways\\Authorize\\lib\\AuthNetWebhook' => __DIR__ . '/../..' . '/app/Gateways/Authorize/lib/AuthNetWebhook.php',
        'RtclPro\\Gateways\\Authorize\\lib\\Types\\CreditCardSimpleType' => __DIR__ . '/../..' . '/app/Gateways/Authorize/lib/Types/CreditCardSimpleType.php',
        'RtclPro\\Gateways\\Authorize\\lib\\Types\\CreditCardType' => __DIR__ . '/../..' . '/app/Gateways/Authorize/lib/Types/CreditCardType.php',
        'RtclPro\\Gateways\\Authorize\\lib\\Types\\CustomerAddressType' => __DIR__ . '/../..' . '/app/Gateways/Authorize/lib/Types/CustomerAddressType.php',
        'RtclPro\\Gateways\\Authorize\\lib\\Types\\CustomerDataType' => __DIR__ . '/../..' . '/app/Gateways/Authorize/lib/Types/CustomerDataType.php',
        'RtclPro\\Gateways\\Authorize\\lib\\Types\\IntervalAType' => __DIR__ . '/../..' . '/app/Gateways/Authorize/lib/Types/IntervalAType.php',
        'RtclPro\\Gateways\\Authorize\\lib\\Types\\NameAndAddressType' => __DIR__ . '/../..' . '/app/Gateways/Authorize/lib/Types/NameAndAddressType.php',
        'RtclPro\\Gateways\\Authorize\\lib\\Types\\OrderType' => __DIR__ . '/../..' . '/app/Gateways/Authorize/lib/Types/OrderType.php',
        'RtclPro\\Gateways\\Authorize\\lib\\Types\\PaymentScheduleType' => __DIR__ . '/../..' . '/app/Gateways/Authorize/lib/Types/PaymentScheduleType.php',
        'RtclPro\\Gateways\\Authorize\\lib\\Types\\PaymentType' => __DIR__ . '/../..' . '/app/Gateways/Authorize/lib/Types/PaymentType.php',
        'RtclPro\\Gateways\\Authorize\\lib\\Types\\ProfileType' => __DIR__ . '/../..' . '/app/Gateways/Authorize/lib/Types/ProfileType.php',
        'RtclPro\\Gateways\\Authorize\\lib\\Types\\SubscriptionType' => __DIR__ . '/../..' . '/app/Gateways/Authorize/lib/Types/SubscriptionType.php',
        'RtclPro\\Gateways\\Authorize\\lib\\Types\\TransactionRequestType' => __DIR__ . '/../..' . '/app/Gateways/Authorize/lib/Types/TransactionRequestType.php',
        'RtclPro\\Gateways\\Authorize\\lib\\Types\\TransactionType' => __DIR__ . '/../..' . '/app/Gateways/Authorize/lib/Types/TransactionType.php',
        'RtclPro\\Gateways\\Stripe\\GatewayStripe' => __DIR__ . '/../..' . '/app/Gateways/Stripe/GatewayStripe.php',
        'RtclPro\\Gateways\\Stripe\\lib\\StripeAPI' => __DIR__ . '/../..' . '/app/Gateways/Stripe/lib/StripeAPI.php',
        'RtclPro\\Gateways\\Stripe\\lib\\StripeCustomer' => __DIR__ . '/../..' . '/app/Gateways/Stripe/lib/StripeCustomer.php',
        'RtclPro\\Gateways\\Stripe\\lib\\StripeException' => __DIR__ . '/../..' . '/app/Gateways/Stripe/lib/StripeException.php',
        'RtclPro\\Gateways\\Stripe\\lib\\StripeHelper' => __DIR__ . '/../..' . '/app/Gateways/Stripe/lib/StripeHelper.php',
        'RtclPro\\Gateways\\Stripe\\lib\\StripeLogger' => __DIR__ . '/../..' . '/app/Gateways/Stripe/lib/StripeLogger.php',
        'RtclPro\\Gateways\\Stripe\\lib\\StripePaymentGateway' => __DIR__ . '/../..' . '/app/Gateways/Stripe/lib/StripePaymentGateway.php',
        'RtclPro\\Gateways\\Stripe\\lib\\StripeWebhook' => __DIR__ . '/../..' . '/app/Gateways/Stripe/lib/StripeWebhook.php',
        'RtclPro\\Gateways\\Stripe\\lib\\StripeWebhookState' => __DIR__ . '/../..' . '/app/Gateways/Stripe/lib/StripeWebhookState.php',
        'RtclPro\\Gateways\\WooPayment\\GatewayWooPayment' => __DIR__ . '/../..' . '/app/Gateways/WooPayment/GatewayWooPayment.php',
        'RtclPro\\Gateways\\WooPayment\\WooPayment' => __DIR__ . '/../..' . '/app/Gateways/WooPayment/WooPayment.php',
        'RtclPro\\Gateways\\WooPayment\\lib\\WC_Product_RTCL_pricing' => __DIR__ . '/../..' . '/app/Gateways/WooPayment/lib/WC_Product_RTCL_pricing.php',
        'RtclPro\\Helpers\\Api' => __DIR__ . '/../..' . '/app/Helpers/Api.php',
        'RtclPro\\Helpers\\Fns' => __DIR__ . '/../..' . '/app/Helpers/Fns.php',
        'RtclPro\\Helpers\\Installer' => __DIR__ . '/../..' . '/app/Helpers/Installer.php',
        'RtclPro\\Helpers\\Options' => __DIR__ . '/../..' . '/app/Helpers/Options.php',
        'RtclPro\\Helpers\\PNHelper' => __DIR__ . '/../..' . '/app/Helpers/PNHelper.php',
        'RtclPro\\Models\\Conversation' => __DIR__ . '/../..' . '/app/Models/Conversation.php',
        'RtclPro\\Models\\Dependencies' => __DIR__ . '/../..' . '/app/Models/Dependencies.php',
        'RtclPro\\Models\\Message' => __DIR__ . '/../..' . '/app/Models/Message.php',
        'RtclPro\\Models\\PushNotification' => __DIR__ . '/../..' . '/app/Models/PushNotification.php',
        'RtclPro\\Models\\RtclLicense' => __DIR__ . '/../..' . '/app/Models/RtclLicense.php',
        'RtclPro\\Models\\Subscription' => __DIR__ . '/../..' . '/app/Models/Subscription.php',
        'RtclPro\\Models\\Subscriptions' => __DIR__ . '/../..' . '/app/Models/Subscriptions.php',
        'RtclPro\\Models\\UserAuthentication' => __DIR__ . '/../..' . '/app/Models/UserAuthentication.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita2032c4bc984f2f3a6410f3cccbad6a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2032c4bc984f2f3a6410f3cccbad6a1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita2032c4bc984f2f3a6410f3cccbad6a1::$classMap;

        }, null, ClassLoader::class);
    }
}
