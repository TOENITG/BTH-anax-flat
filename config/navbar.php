<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Redovisningar"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisningar för kursmoment."),
                "mark-if-parent" => true,
            ],

            "test" => [
                "text"  => t("Test"),
                "url"   => $this->di->get("url")->create("test"),
                "title" => t("Markdownsida för test.")
            ],

            "markdown" => [
                "text"  => t("Markdown"),
                "url"   => $this->di->get("url")->create("markdown"),
                "title" => t("Markdown.")
            ],

            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid") . "?vgrid",
                "title" => t("Grid.")
            ],

            "typography" => [
                "text"  => t("Typography"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Typography")
            ],

            "analysis" => [
                "text"  => t("Analyser"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analysis")
            ],

            "theme<" => [
                "text"  => t("Teman"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Teman")
            ],

            "theme-selector<" => [
                "text"  => t("Temaväljare"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Temaväljare")
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om denna webbplats")
            ],
        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Redovisningar"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisningar för kursmoment."),
                "mark-if-parent" => true,
            ],

            "test" => [
                "text"  => t("Test"),
                "url"   => $this->di->get("url")->create("test"),
                "title" => t("Markdownsida för test.")
            ],

            "markdown" => [
                "text"  => t("Markdown"),
                "url"   => $this->di->get("url")->create("markdown"),
                "title" => t("Markdown.")
            ],

            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Grid.")
            ],

            "typography" => [
                "text"  => t("Typography"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Typography")
            ],

            "theme<" => [
                "text"  => t("Teman"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Teman")
            ],

            "theme-selector<" => [
                "text"  => t("Temaväljare"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Temaväljare")
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om denna webbplats")
            ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
