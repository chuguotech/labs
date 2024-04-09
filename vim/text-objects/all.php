<?php

=i{      // =:格式化  i:inner  {:文本对象

public static function run(int $entryPointLevel = 0, int $requestType = self::REQUESTTYPE_FE)
{
    self::defineBaseConstants();
        self::defineTypo3RequestTypes();
            self::setRequestType($requestType | ($requestType === self::REQUESTTYPE_B;
self::defineLegacyConstants($requestType === self::REQUESTTYPE_FE ? 'FE' : 'BE');
        $scriptPath = self::calculateScriptPath($entryPointLevel, $requestType);
    $rootPath = self::calculateRootPath($entryPointLevel, $requestType);
}




self::defineLegacyConstants($requestType === self::REQUESTTYPE_FE ? 'FE' : 'BE');
        $scriptPath = self::calculateScriptPath($entryPointLevel, $requestType);
        {
        (
    $rootPath = self::calculateRootPath($entryPointLevel, $requestType);
        )
        }
}
