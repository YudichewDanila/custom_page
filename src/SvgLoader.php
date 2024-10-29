<?php

namespace CustomPage;

class SvgLoader{
    public static function getSvg(string $filename): string{
        $svgPath = __DIR__ . "/../components/svg/" . $filename;
        if (!file_exists($svgPath)) {
            return "notSvg";
        }
        return file_get_contents($svgPath);
    }
}