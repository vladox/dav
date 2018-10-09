<?php

declare(strict_types=1);

namespace Sabre\DAV\Locks\Backend;

require_once 'Sabre/TestUtil.php';

class FileTest extends AbstractTest
{
    public function getBackend()
    {
        \Sabre\TestUtil::clearTempDir();
        $backend = new File(SABRE_TEMPDIR.'/lockdb');

        return $backend;
    }

    public function tearDown()
    {
        \Sabre\TestUtil::clearTempDir();
    }
}
