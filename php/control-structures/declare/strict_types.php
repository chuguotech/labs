<?php
/*
 * 举例：如果声明了 strict_types 为 1 的话，函数的返回值类型如果和预设的不一致，会报告致命fatal错误。
 * 否则，只报告Notice级别的错误。
 *
 */

declare(strict_types=1);

function test(): int {
    return 'hello';
}

test();
