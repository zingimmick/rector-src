<?php declare(strict_types=1);

namespace Rector\Tests\Reconstructor\DependencyInjection\NamedServicesToConstructorReconstructor;

use Rector\Reconstructor\DependencyInjection\NamedServicesToConstructorReconstructor;
use Rector\Testing\PHPUnit\AbstractReconstructorTestCase;

final class Test extends AbstractReconstructorTestCase
{
    public function test(): void
    {
        $this->doTestFileMatchesExpectedContent(__DIR__ . '/wrong/wrong.php.inc', __DIR__ . '/correct/correct.php.inc');
//        $this->doTestFileMatchesExpectedContent(__DIR__ . '/wrong/wrong2.php.inc', __DIR__ . '/correct/correct2.php.inc'
//        );
//        $this->doTestFileMatchesExpectedContent(__DIR__ . '/wrong/wrong3.php.inc', __DIR__ . '/correct/correct3.php.inc');
    }

    protected function getReconstructorClass(): string
    {
        return NamedServicesToConstructorReconstructor::class;
    }
}
