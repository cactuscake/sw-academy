<?php

namespace Framework;

class CMain
{
    public function includeComponent(string $component, string $template = '.default', array $arParams = []): void
    {
        ob_start();
        include $this->getComponentPath($component) . "/component.php";
        $styles = file_get_contents($this->getTemplatePath($component, $template) . "/style.css");
        echo "<style>$styles</style>";
        // $arParams = array_merge($arParams, $params);
        include $this->getTemplatePath($component, $template) . "/template.php";
        $content = ob_get_clean();

        echo $content;
    }

    protected function getComponentPath(string $component): string
    {
        return $this->getDocumentRoot() . "/components/{$component}/";
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
