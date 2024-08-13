<?php

namespace Framework;

use Framework\Traits\Singleton;

class CMain
{
    public function includeComponent(string $component, string $template = '.default', array $arParams = []): void
    {
        $includeComponent = $this->getComponentPath($component) . "/component.php";
        $styles = file_get_contents($this->getTemplatePath($component, $template) . "/style.css");
        $includeTemplate = $this->getTemplatePath($component, $template) . "/template.php";

        echo $this->render($includeTemplate, $arParams, $styles, $includeComponent);
    }

    public function includeHeader(array $arParams = []): void
    {
        $styles = file_get_contents("templates/default/components/css/style.css");
        $template = $this->getHeaderPath();

        echo $this->render($template, $arParams, $styles);
    }

    public function includeFooter(array $arParams = []): void
    {
        $template = $this->getFooterPath();

        echo $this->render($template, $arParams);
    }

    public function render($template, array $arParams = [], $style = null, $component = null)
    {
        ob_start();
        if ($component != null) {
            include $component;
        }

        if ($style != null) {
            echo "<style>$style</style>";
        }

        include $template;
        $content = ob_get_clean();

        return $content;
    }

    protected function getComponentPath(string $component): string
    {
        $config = Config::getInstanse();
        if (file_exists($this->getDocumentRoot() . $config->getEnv("DEFAULT_COMPONENT") . "components/" . $component . "/")) {
            return $this->getDocumentRoot() . $config->getEnv("DEFAULT_COMPONENT") . "components/" . $component . "/";
        } else {
            return $this->getDocumentRoot() . $config->getEnv("CUSTOM_COMPONENT") . $component . "/";
        }
    }

    protected function getHeaderPath(): string
    {
        $config = Config::getInstanse();
        if (file_exists($this->getDocumentRoot() . $config->getEnv("DEFAULT_COMPONENT") . "header.php")) {
            return $this->getDocumentRoot() . $config->getEnv("DEFAULT_COMPONENT") . "header.php";
        } else {
            return $this->getDocumentRoot() . $config->getEnv("CUSTOM_COMPONENT") . "header/templates/.default/template.php";
        }
    }

    protected function getFooterPath(): string
    {
        $config = Config::getInstanse();
        if (file_exists($this->getDocumentRoot() . $config->getEnv("DEFAULT_COMPONENT") . "footer.php")) {
            return $this->getDocumentRoot() . $config->getEnv("DEFAULT_COMPONENT") . "footer.php";
        } else {
            return $this->getDocumentRoot() . $config->getEnv("CUSTOM_COMPONENT") . "/footer/templates/.default/template.php";
        }
    }

    protected function getTemplatePath(string $component, string $template): string
    {
        return $this->getComponentPath($component) . "templates/{$template}";
    }

    public static function getDocumentRoot(): string
    {
        return $_SERVER["DOCUMENT_ROOT"];
    }
}
