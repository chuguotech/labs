<?php
//文本对象 symbol Block
a( =  a () block
i[ =  inner () block

    protected static function initializeEnvironment(int $requestType, string $scriptPath, string $sitePath)
    {

        // delete inner ()  缩写为 di(  或 di)
        $isDifferentRootPath = ($projectRootPath && $projectRootPath !== $sitePath);

        // delete inner []  缩写为 di[  或 di]
        $requestType = ['cli', 'cgi', 'fpm', 'socket'];

    }

    // delete inner {} 缩写为 di{  或 di}
    protected static function defineLegacyConstants(string $mode)
    {
        // needed if multiple requests are handled in one process, for instance in functional testing.
        if (defined('TYPO3_MODE')) {
            return;
        }
        if ($requestType === null) {
            $requestType = PHP_SAPI === 'cli' ? self::REQUESTTYPE_CLI : self::REQUESTTYPE_FE;
        }
    }
