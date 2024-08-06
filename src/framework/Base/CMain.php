<?php

namespace Framework;

use Framework\Traits\Singleton;

class CMain
{
    public function includeComponent(string $component, string $template = '.default', array $arParams = []): void
    {
        ob_start();
        include $this->getComponentPath($component) . "/component.php";
        $styles = file_get_contents($this->getTemplatePath($component, $template) . "/style.css");
        echo "<style>$styles</style>";
        include $this->getTemplatePath($component, $template) . "/template.php";
        $content = ob_get_clean();

        echo $content;
    }

    public function includeHeader(array $arParams = []): void
    {
        ob_start();
        $styles = file_get_contents("templates/default/components/css/style.css");
        echo "<style>$styles</style>";
        include $this->getHeaderPath();
        $content = ob_get_clean();

        echo $content;
    }

    public function includeFooter(array $arParams = []): void
    {
        ob_start();
        include $this->getFooterPath();
        $content = ob_get_clean();

        echo $content;
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
        return $this->getDocumentRoot() . $config->getEnv("DEFAULT_COMPONENT") . "header.php";
    }

    protected function getFooterPath(): string
    {
        $config = Config::getInstanse();
        return $this->getDocumentRoot() . $config->getEnv("DEFAULT_COMPONENT") . "footer.php";
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
