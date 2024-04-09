<?php
//文本对象paragraph
ap =  a paragraph
ip =  inner paragraph

//删除一个段落
dap = delete a paragraph

/**
 * Absolute path to the "classic" site root of the TYPO3 application.
 * This is not to be confused with the app-path that is used in composer-mode installations (by default).
 *
 * @return string Absolute path without trailing slash
 */


//格式化一个段落
=ap = format a paragraph

protected static function calculateRootPath(int $entryPointLevel, int $requestType): string
{
    // Check if the root path has been set in the environment (e.g. by the composer installer)
if (getenv('TYPO3_PATH_ROOT')) {
            return rtrim(GeneralUtility::fixWindowsFilePath((string)getenv('TYPO3_PATH_ROOT')), '/');
                }
        $scriptPath = GeneralUtility::fixWindowsFilePath(self::getPathThisScript($isCli));
                        return self::getRootPathFromScriptPath($scriptPath, $entryPointLevel);
}
