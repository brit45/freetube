<?php declare(strict_types=1);

namespace APP\Config;

define('__APP__', dirname(__DIR__));

class Global_conf {

    /**
     * ## Template base for normal users.
     */
    public const STANDART_TEMPLATE = __APP__."/Templates/Public.view.php";

    /**
     * ## Template base for administrator user.
     */
    public const ADMIN_TEMPLATE = __APP__."/Templates/Admin.view.php";

    /**
     * ## Directory of templates.
     */
    public const TEMPLATE_DIR = __APP__."/Templates/";


    /**
     * ## Regex for access of ressource in client users without redirect server.
     */
    public const REGEX_PUBLIC_RESSOURCE = "/\/js\/.*|\/css\/.*|\/favicon.ico/";

    /**
     * ## Type routing parse
     * 
     * ### Slug
     * Create personnalise action in url.
     * ```ex : http://mon-site/home/article-1```
     * 
     * ### Normalize
     * Normal format url.
     * ```ex : http://mon-site/home/article/1```
     * 
     * ### File
     * Use PHP script for append routes
     */
    public const TYPE_ROUTING_PARSE = "Normalize";

    /**
     * ## File Routes content.
     */
    public const ROUTES_FILE_CONFIG = __APP__."/Routes/routes.php";

    public const SLUG_SEPARATOR = "-";


}