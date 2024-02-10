<?php

use App\chapterone\Hello;

describe('example', function () {
    beforeEach(function () {
        $this->classUnderTest = new Hello();
    });

    it('testHello', function () {
        $result = $this->classUnderTest->execute();
        expect($result)->toBe("Hello, World");
    });
});
