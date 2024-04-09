<?php
protected static function calculateScriptPath(int $entryPointLevel, int $requestType): string
{
    $isCli = self::isCliRequestType($requestType);

        // 复制文本对象
        // yank inner '  =  yi'
        $scriptName = 'typo3/sysext/core/bin/typo3';

        // 复制文本对象
        // yank inner "  =  yi"
        $scriptName = "typo3/sysext/core/bin/typo3";

        } else {
            $scriptName = ltrim(substr($scriptPath, strlen($rootPath)), '/');
        }
    }
    return $scriptPath;
}
